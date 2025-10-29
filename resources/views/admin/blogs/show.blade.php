<x-admin-layouts>
    <x-slot:title>
        View :: Blog Details
    </x-slot:title>

    <div class="container-fluid py-4">

        {{-- Breadcrumb and Page Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-0">Blog Details</h3>
                <p class="text-muted mb-0">Detailed information about this blog post.</p>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View</li>
                </ol>
            </nav>
        </div>

        {{-- Blog Card --}}
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                {{-- Header Section --}}
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div>
                        <h2 class="fw-bold mb-1 text-primary">{{ $blog->title }}</h2>
                        @if ($blog->subtitle)
                            <p class="text-muted mb-0">{{ $blog->subtitle }}</p>
                        @endif
                    </div>
                    <span class="badge bg-success text-uppercase text-white">{{ $blog->category }}</span>
                </div>

                @php
                    $images = $blog->getFeaturedImages('featured_image');
                @endphp

                {{-- Excerpt --}}
                <div class="mb-4">
                    <h5 class="fw-semibold text-dark mb-2">Excerpt</h5>
                    <p class="text-muted fs-6">{{ $blog->excerpt }}</p>
                </div>

                {{-- Blog Content --}}
                <div class="mb-4">
                    <h5 class="fw-semibold text-dark mb-2">Full Content</h5>
                    <p class="fs-6 lh-lg">{{ $blog->content }}</p>
                </div>

                {{-- Highlights --}}
                @php
                    $blogHighlights = json_decode($blog->blog_highlight, true);
                @endphp

                @if (!empty($blogHighlights))
                    <div class="mb-4">
                        <h5 class="fw-semibold text-dark mb-2">Highlights</h5>
                        <ul class="list-group list-group-flush">
                            @foreach ($blogHighlights as $highlight)
                                <li class="list-group-item ps-3 border-0">
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
                                class="img-fluid rounded-3 shadow-sm" style="max-height: 350px; object-fit: cover;">
                        @endforeach
                    @else
                        <img src="{{ asset(path: 'images/default-placeholder.jpg') }}" alt="No image available"
                            class="img-fluid rounded-3 shadow-sm" style="max-height: 350px; object-fit: cover;">
                    @endif
                </div>

                
                <div class="mt-4 d-flex justify-content-end">
                    <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary me-2">
                        <i class="bi bi-arrow-left"></i> Back
                    </a>
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary ml-2">
                        <i class="bi bi-pencil-square"></i> Edit Blog
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-admin-layouts>
