<div class="card">
	<div class="card-block">
		<h5 class="card-title m-0 h5">🔥 Artikel Terbaru</h5>
	</div>
	<div class="list-group list-group-flush">
		@foreach($artikel_terbaru as $at)
		<a href="{{ url('single',$at->slug) }}" class="list-group-item list-group-item-action flex-column align-items-start">
			<div class="media">
				<div class="media-body">
					<h6 class="mt-0 mb-1 h6">{{ ucwords($at->judul) }}</h6>
					<small class="text-secondary">{{ date("d-F-Y", strtotime($at->created_at)) }} · {{$at->created_at->diffForHumans()}}</small>
				</div>
			<img class="rounded lazyload blur-up ml-3 lazyloaded pull-right" src="{{ asset('image_posts/'.$at->image) }}" alt="{{ ucwords($at->judul) }}" data-src="{{ asset('image_posts/'.$at->image) }}" data-sizes="auto" width="60" height="60">
			</div>
		</a>
		@endforeach
	</div>
	<div class="card-footer border-top-0">
		<smal class="small">
			<a href="https://feedburner.google.com/fb/a/mailverify?uri=petanikode&amp;loc=en_US" class="card-link" target="_blank" rel="noopener">📩 Langganan Artikel via Email</a>
		</smal>
	</div>
</div>