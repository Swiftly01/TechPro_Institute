<x-admin-layouts>
    <x-slot:title>
        View :: Blog Details
    </x-slot:title>

    <div class="py-4 container-fluid">

        {{-- Breadcrumb and Page Header --}}
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <div>
                <h3 class="mb-0 fw-bold">Blog Details</h3>
                <p class="mb-0 text-muted">Detailed information about this blog post.</p>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="mb-0 breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View</li>
                </ol>
            </nav>
        </div>

        {{-- Blog Card --}}
        <div class="border-0 shadow-sm card">
            <div class="p-4 card-body">

                {{-- Header Section --}}
                <div class="mb-4 d-flex justify-content-between align-items-start">
                    <div>
                        <h2 class="mb-1 fw-bold text-primary">{{ $blog->title }}</h2>
                        @if ($blog->subtitle)
                            <p class="mb-0 text-muted">{{ $blog->subtitle }}</p>
                        @endif
                    </div>
                    <span class="text-white badge bg-success text-uppercase">{{ $blog->category }}</span>
                </div>

                @php
                    $images = $blog->getFeaturedImages('featured_image');
                @endphp

                {{-- Excerpt --}}
                <div class="mb-4">
                    <h5 class="mb-2 fw-semibold text-dark">Excerpt</h5>
                    <p class="text-muted fs-6">{{ $blog->excerpt }}</p>
                </div>

                {{-- Blog Content --}}
                <div class="mb-4">
                    <h5 class="mb-2 fw-semibold text-dark">Full Content</h5>
                    <p class="fs-6 lh-lg"> {!! $blog->content !!}</p>
                </div>

                {{-- Highlights --}}
                @php
                    $blogHighlights = json_decode($blog->blog_highlight, true);
                @endphp

                @if (!empty($blogHighlights))
                    <div class="mb-4">
                        <h5 class="mb-2 fw-semibold text-dark">Highlights</h5>
                        <ul class="list-group list-group-flush">
                            @foreach ($blogHighlights as $highlight)
                                <li class="border-0 list-group-item ps-3">
                                    <i class="bi bi-check-circle text-success me-2"></i>{{ $highlight }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

              
                <div class="mb-4">
                    @if ($images->isNotEmpty())
                        @foreach ($images as $image)
                            @php
                            @endphp
                            <img src="{{ $image }}" alt="{{ $blog->title }}"
                                class="shadow-sm img-fluid rounded-3" style="max-height: 350px; object-fit: cover;">
                        @endforeach
                    @else
                        <img src="{{ asset(path: 'images/default-placeholder.jpg') }}" alt="No image available"
                            class="shadow-sm img-fluid rounded-3" style="max-height: 350px; object-fit: cover;">
                    @endif
                </div>

                
                <div class="mt-4 d-flex justify-content-end">
                    <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary me-2">
                        <i class="bi bi-arrow-left"></i> Back
                    </a>
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="ml-2 btn btn-primary">
                        <i class="bi bi-pencil-square"></i> Edit Blog
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-admin-layouts>
