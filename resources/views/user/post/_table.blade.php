<div class="row">
  @foreach($posts as $post)
  <div class="col-md-4 mb-3">
    <div class="card">
      <img src="{{ asset('image_posts/'.$post->image) }}" class="card-img" alt="{{ $post->judul }}">
      <div class="card-body">
        <h5 class="card-title" title="{{ $post->judul }}">{{ Str::limit($post['judul'], 30, '...') }}</h5>
        {{-- <p class="card-text">{!! Str::limit($post['content'], 100, '...') !!}</p> --}}
        <div class="btn-group">
          <a href="#" class="btn btn-info btn-sm" id="handleEdit" data-id="{{ $post->id }}" data-judul="{{ $post->judul }}"  data-tag="{{ $post->tag }}" data-category_id="{{ $post->category_id }}" data-editor="{{ $post->content }}" data-image="{{ $post->image }}">
                <i class="fa fa-edit"></i>
              </a>
          <a href="#" class="btn btn-danger btn-sm" id="handleDeletePost" data-id="{{ $post->id }}" url="{{ url('user/posts/destroy') }}">
            <i class="fa fa-trash"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  {{ $posts->links() }}
