<x-admin-layouts>
    <x-slot:title>
        Edit :: Blog
    </x-slot:title>
    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <div class="container-fluid">
        <div class="mx-0 row page-titles">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit {{ $blog->title }} Post</h4>
                </div>
            </div>
            <div class="mt-2 col-sm-6 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
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
            <div class="my-3 row">

                <div class="col-lg-8">
                    <div class="px-3 pt-4 card">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="title">Blog Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title', $blog->title) }}" placeholder="Innovation">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" name="subtitle" id="subtitle"
                                    class="form-control @error('subtitle') is-invalid @enderror"
                                    value="{{ old('subtitle', $blog->subtitle) }}" placeholder="Blog subtitle">
                                @error('subtitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="category">Category</label>
                                <input type="text" name="category" id="category"
                                    class="form-control @error('category') is-invalid @enderror"
                                    value="{{ old('category', $blog->category) }}" placeholder="News">
                                @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="excerpt">Excerpt</label>
                                <input type="text" name="excerpt" id="excerpt"
                                    class="form-control @error('excerpt') is-invalid @enderror"
                                    value="{{ old('excerpt', $blog->excerpt) }}"
                                    placeholder="At TechPro Institute, we believe learning goes beyond classrooms...">
                                @error('excerpt')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-12">
                                <label for="blog_content">Blog Content</label>

                                <input id="blog_content" type="hidden" name="blog_content"
                                    value="{{ old('blog_content', $blog->content) }}">

                                <trix-editor input="blog_content"></trix-editor>

                                @error('blog_content')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="px-3 py-4 card">
                        <div class="mb-3 form-group">
                            <label for="blog_highlight">Blog Highlights</label>
                            <textarea name="blog_highlight" id="blog_highlight" rows="4"
                                class="form-control @error('blog_highlight') is-invalid @enderror"
                                placeholder="Hands-on projects guided by experts, Internship opportunities, Global mentorship">{{ old('blog_highlight', $blog->blog_highlight_string) }}</textarea>
                            @error('blog_highlight')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 input-group">
                            <div class="custom-file">
                                <input type="file" name="featured_image" class="custom-file-input" multiple>
                                <label class="custom-file-label @error('featured_image') is-invalid @enderror">Choose
                                    image</label>
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