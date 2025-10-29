<?php

namespace App\Repositories;

use App\DataTransferObjects\BlogDto;
use App\Interfaces\BlogInterface;
use App\Models\Blog;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogRepository implements BlogInterface
{
    public function __construct() {}

    public function getAllBlogs(): LengthAwarePaginator
    {
        return Blog::latest()->paginate(10);
    }

    public function store(BlogDto $dto): Blog
    {
        return Blog::create($dto->toArray());
    }

    public function update(BlogDto $dto, Blog $blog)
    {
        $blog->fill($dto->toArray())->save();

        return $blog->refresh();
    }

    public function delete(Blog $blog)
    {
        $blog->clearMediaCollection('preview');

        return $blog->delete();

    }
}
