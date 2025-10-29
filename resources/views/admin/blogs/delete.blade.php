<form action="{{ route('blogs.destroy', ['blog' => $blog->slug]) }}" method="POST">
  @csrf
  @method('DELETE')
  <div class="modal fade" id="basicModaldelete{{ $blog->slug }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete :: Blog</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">Are you sure you want to delete {{ $blog->title }}</div>
            </span>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>

</form>