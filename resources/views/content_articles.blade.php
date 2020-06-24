@extends('layouts.header')
	@section('title')
		<title> Содержание </title>
	@endsection()	
@section('content')

<body>
	<div class="title">Содержание раздела</div>	

	@extends('layouts.fon')
		@foreach($content_articles as $content_articles)
			<div class="con"></div>
		@endforeach
	@section('footer')
</body>
</HTML>