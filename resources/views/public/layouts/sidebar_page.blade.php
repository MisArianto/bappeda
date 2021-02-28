<div class="sidebar">

  <h3 class="sidebar-title">Search</h3>
  <div class="sidebar-item search-form">
    <form action="{{ url('search') }}" method="POST">
      @csrf
      <input type="text" name="search">
      <button type="submit"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End sidebar search formn-->

  <h3 class="sidebar-title">Categories</h3>
  <div class="sidebar-item categories">
    <ul>
      @foreach($categories as $k)
      <li><a href="{{ url('berita-kategori', $k->slug) }}">{{ $k->category_name }} <span>({{$k->posts->count()}})</span></a></li>
      @endforeach
    </ul>
  </div><!-- End sidebar categories-->

  <h3 class="sidebar-title">Berita Terbaru</h3>
  <div class="sidebar-item recent-posts">

    @foreach($beritas as $berita)
    <div class="post-item clearfix">
      <img src="{{ asset('image_posts/'.$berita->image) }}" alt="">
      <h4><a href="{{ url('berita',$berita->slug) }}">{{ ucwords($berita->judul) }}</a></h4>
      <time datetime="2020-01-01">{{$berita->created_at->diffForHumans()}}</time>
    </div>
    @endforeach

  </div><!-- End sidebar recent posts-->

  <h3 class="sidebar-title">Tags</h3>
  <div class="sidebar-item tags">
    <ul>
      @foreach($tags as $tag)
      <li><a href="#">{{ $tag->tag_name }}</a></li>
      @endforeach
    </ul>
  </div><!-- End sidebar tags-->

</div><!-- End sidebar -->
