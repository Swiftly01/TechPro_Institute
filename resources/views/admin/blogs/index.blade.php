<x-admin-layouts>
  <x-slot:title>
    View :: Blogs
  </x-slot:title>

  <div class="container-fluid">
    <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h4>Hi, welcome back!</h4>
          {{-- <span class="ml-1 fs-5">{{ $user->email }}</span> --}}
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
        </ol>
      </div>
    </div>
    @if(session('success'))
    <div class="alert alert-primary">

      {{ session('success') }}

    </div>

    @endif

    @if(session('error'))
    <div class="alert alert-danger">

      {{ session('error') }}

    </div>

    @endif


    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Blogs</h4>
          <a href="{{ route('blogs.create') }}" class="btn btn-primary">
            <i class="fa fa-save me-1"></i> Create Blog
          </a>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="display" style="min-width: 845px">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Blog title</th>
                  <th>Blog subtitle</th>
                  <th>Category</th>
                  <th>Excerpt</th>
                  <th>Published date</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach ($blogs as $blog )
              <tbody>
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $blog->title }}</td>
                  <td>{{ $blog->subtitle }}</td>
                  <td>{{ $blog->category }}</td>
                  <td>{{ $blog->excerpt }}</td>
                  <td>{{ $blog->created_at->format('Y/m/d - H:i:s:A') }}</td>
                  <td>
                    <div style="display: flex;gap:5px">
                      <a href="{{ route('blogs.show', ['blog' => $blog->slug]) }}" class="btn btn-success">View</a>
                      <a href="{{ route('blogs.edit', ['blog' => $blog->slug]) }}" class="btn btn-primary">Edit</a>
                      @include('admin.blogs.delete')
                      <button class="btn btn-danger" data-toggle="modal" data-target="#basicModaldelete{{ $blog->slug }}">Delete</button>

                    </div>



                  </td>
                </tr>

              </tbody>

              @endforeach

              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Blog title</th>
                  <th>Blog subtitle</th>
                  <th>Category</th>
                  <th>Excerpt</th>
                  <th>Published date</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="float-right">
            {{ $blogs->onEachSide(5)->links() }}

          </div>
        </div>
      </div>
    </div>
  </div>






</x-admin-layouts>
