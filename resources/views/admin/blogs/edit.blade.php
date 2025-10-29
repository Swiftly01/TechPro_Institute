<x-admin-layouts>
    <x-slot:title>
        Edit :: Blog
    </x-slot:title>

    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit {{ $blog->title }} Post</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Blogs</a></li>
                    <li class="breadcrumb-item active"><a href="#">Create</a></li>
                </ol>
            </div>
        </div>

        {{-- Flash messages --}}
        @if (session('success'))
            <div class="alert alert-primary">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('blogs.update', ['blog' => $blog->slug]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row my-3">
               
                <div class="col-lg-8">
                    <div class="card pt-4 px-3">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="title">Blog Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title', $blog->title) }}" placeholder="Innovation">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" name="subtitle" id="subtitle"
                                    class="form-control @error('subtitle') is-invalid @enderror"
                                    value="{{ old('subtitle', $blog->subtitle) }}" placeholder="Blog subtitle">
                                @error('subtitle')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="category">Category</label>
                                <input type="text" name="category" id="category"
                                    class="form-control @error('category') is-invalid @enderror"
                                    value="{{ old('category', $blog->category) }}" placeholder="News">
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="excerpt">Excerpt</label>
                                <input type="text" name="excerpt" id="excerpt"
                                    class="form-control @error('excerpt') is-invalid @enderror"
                                    value="{{ old('excerpt', $blog->excerpt) }}"
                                    placeholder="At TechPro Institute, we believe learning goes beyond classrooms...">
                                @error('excerpt')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <label for="blog_content">Blog Content</label>
                                <textarea name="blog_content" id="blog_content" rows="6"
                                    class="form-control @error('blog_content') is-invalid @enderror">{{ old('blog_content', $blog->content) }}</textarea>
                                @error('blog_content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-4">
                    <div class="card py-4 px-3">
                        <div class="form-group mb-3">
                            <label for="blog_highlight">Blog Highlights</label>
                            <textarea name="blog_highlight" id="blog_highlight" rows="4"
                                class="form-control @error('blog_highlight') is-invalid @enderror"
                                placeholder="Hands-on projects guided by experts, Internship opportunities, Global mentorship">{{ old('blog_highlight', $blog->blog_highlight_string) }}</textarea>
                            @error('blog_highlight')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="featured_image" class="custom-file-input" multiple>
                                <label class="custom-file-label @error('featured_image') is-invalid @enderror">Choose image</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                             @error('featured_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fa fa-save me-1"></i> Update Blog
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-admin-layouts>
