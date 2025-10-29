<?php

namespace App\Http\Controllers;

use App\Exceptions\MediaProcessingException;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Services\BlogService;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Throwable;

class BlogController extends Controller
{
    public function __construct(public BlogService $blogService) {}

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blogs = $this->blogService->getAllBlogs();

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {

        try {

            $this->blogService->handleStoreBlog($request);

            return redirect()->back()->with('success', 'Your blog post has been posted successfully!');
        } catch (MediaProcessingException $e) {
            Log::error('Media processing error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()->with('error', 'Sorry, there was an issue processing media!');
        } catch (Throwable $th) {
            Log::error('Unexpected blog error', [
                'message' => $th->getMessage(),
                'trace' => $th->getTraceAsString(),
                'request' => $request->all(),
            ]);

            return redirect()->back()->with('error', 'Sorry, an unexpected error occurred!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog): View
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        try {

            $this->blogService->handleUpdateBlog(request: $request, blog: $blog);

            return redirect()->back()->with('success', 'Your blog post has been updated successfully!');

        } catch (MediaProcessingException $e) {
            Log::error('Media processing error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()->with('error', 'Sorry, there was an issue processing media!');
        } catch (Throwable $th) {
            Log::error('Unexpected blog error', [
                'message' => $th->getMessage(),
                'trace' => $th->getTraceAsString(),
                'request' => $request->all(),
            ]);

            return redirect()->back()->with('error', 'Sorry, an unexpected error occurred!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        try {

            $this->blogService->handleDelete(blog: $blog);

            return redirect()->back()->with('success', 'Your blog post has been deleted successfully!');

        } catch (Exception $e) {
            Log::error('Blog deletion error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->back()->with('error', 'Sorry, an unexpected error occurred!');

        }

    }
}
