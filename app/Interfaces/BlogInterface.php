<?php

namespace App\Interfaces;

use App\DataTransferObjects\BlogDto;
use App\Models\Blog;
use Illuminate\Pagination\LengthAwarePaginator;

interface BlogInterface
{
    public function getAllBlogs(): LengthAwarePaginator;

    public function store(BlogDto $dto);
    public function update(BlogDto $dto, Blog $blog);

    public function delete(Blog $blog);

    
}
