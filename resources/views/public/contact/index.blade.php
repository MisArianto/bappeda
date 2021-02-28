@extends('public.layouts.welcome')

@section('content')
	@if($contact != '')
		{!! $contact->content !!}
	@endif
	<!-- <h3>Contact</h3>

	<p>Assalamu’alaikum wr. wb.</p>
	<p>Jangan lupa like fanspage kami fb.com/hcode dan subscribe channel youtube kami youtube.com/hcode2 🙂</p>

	<p>Bagi yang ingin berdiskusi / masuk hcode Forum silakan bisa join :</p>

	<ul>
		<li>Channel telegram @hcode / t.me/hcode</li>
		<li>Grup telegram @hcodeID / t.me/hcodeid</li>
	</ul>


	<p>Untuk order source code, jasa pembuatan web / aplikasi, donasi, kerjasama, mitra programmer, saran, kritik, request tutorial, konsultasi pemrograman dan hal penting lainnya silakan menghubungi kami melalui :</p>

	<ul>
		<li>Facebook : fb.me/hcode (recommended)</li>
		<li>Instagram : @hcode</li>
		<li>WA : +62812-2576-4094</li>
		<li>Email : dev.hcode@gmail.com</li>
		<li>Official : hcode.co.id</li>
		<li>Blog : hcode.blogspot.com</li>
	</ul>

	<p>* Silakan pergunakan bahasa yang baik dan sopan.</p>

	<p>Mohon maaf yang sebesar-besarnya dan harap maklum apabila respon kami terkadang agak lama, karena admin juga memiliki aktivitas dan kesibukan lainnya.</p>

	<p>Thanks a lot for your nice attention 🙂</p>
	<p>Wassalamu’alaikum wr. wb.</p> -->
@endsection