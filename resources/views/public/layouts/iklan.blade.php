<div class="row">
	@foreach($iklans as $iklan)
	<div class="col-md-6 col-lg-6 mb-4 d-flex">
		<a href="{{ $iklan->url }}">
		<div class="card" style="box-shadow: 0 0.5em 1em -0.125em rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.02);border-radius: 8px;">
		  <img class="img-fluid" src="{{ asset('image_iklans/'.$iklan->image) }}" alt="Card image cap" style="filter: blur(0);transition: filter 1000ms,-webkit-filter 1000ms;">
		</div>
		</a>
	</div>
	@endforeach
</div>