<?php

namespace App\Services;

use App\DataTransferObjects\BlogDto;
use App\Exceptions\MediaProcessingException;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Repositories\BlogRepository;
use Exception;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class BlogService
{
    public function __construct(protected BlogRepository $blogRepository
    ) {}

    public function getAllBlogs(): LengthAwarePaginator
    {
        return $this->blogRepository->getAllBlogs();
    }

    public function handleStoreBlog(StoreBlogRequest $request)
    {

        try {
            $dto = $this->mapRequestDataToDto(
                validatedData: $request->validated()
            );

            $blogData = DB::transaction(function () use ($dto, $request) {
                return $this->createBlogWithMedia(dto: $dto, request: $request);
            });

            return $blogData;

        } catch (MediaProcessingException $e) {
            // Spatie media-specific issue
            Log::error('Media upload failed', ['error' => $e->getMessage()]);
            throw $e;
        } catch (Throwable $th) {
            Log::error('Blog storage failed', [
                'message' => $th->getMessage(),
                'trace' => $th->getTraceAsString(),
            ]);

            throw $th;
        }
    }

    public function handleUpdateBlog(UpdateBlogRequest $request, Blog $blog)
    {
        try {

            $dto = $this->mapRequestDataToDto(
                validatedData: $request->validated()
            );

            $blogData = DB::transaction(function () use ($dto, $request, $blog) {
                return $this->updateBlog(dto: $dto, request: $request, blog: $blog);

            });

            return $blogData;

        } catch (MediaProcessingException $e) {

            Log::error('Media upload failed', ['error' => $e->getMessage()]);
            throw $e;
        } catch (Throwable $th) {
            Log::error('Blog update failed', [
                'message' => $th->getMessage(),
                'trace' => $th->getTraceAsString(),
            ]);

            throw $th;
        }

    }

    public function mapRequestDataToDto(array $validatedData)
    {
        $payload = BlogDto::convertToJson($validatedData);

        return BlogDto::fromRequest(payload: $payload);

    }

    public function updateBlog(BlogDto $dto, UpdateBlogRequest $request, Blog $blog)
    {
        $blogData = $this->blogRepository->update(dto: $dto, blog: $blog);
        $this->attachMedia(request: $request, blog: $blogData);

        return $blogData;

    }

    public function createBlogWithMedia(BlogDto $dto, StoreBlogRequest $request): Blog
    {

        $blogData = $this->blogRepository->store(dto: $dto);
        $this->attachMedia(request: $request, blog: $blogData);

        return $blogData;
    }

    public function attachMedia($request, Blog $blog)
    {

        try {

            DB::transaction(function () use ($request, $blog) {

                if ($request->hasFile('featured_image')) {
                    $files = $request->file('featured_image');
                    $files = is_array($files) ? $files : [$files];

                    foreach ($files as $file) {
                        if ($file->isValid()) {
                            $blog->addMedia($file)->toMediaCollection('featured_image');
                        }
                    }

                }

            });

        } catch (Exception $e) {
            throw new MediaProcessingException("Failed to upload image files for model ID {$blog->id}".$e->getMessage());
        }

    }

    public function handleDelete(Blog $blog)
    {
       return $this->blogRepository->delete(blog: $blog);
    }
}
