@extends('layouts.header')
	@section('title')
		<title> Содержание </title>
	@endsection()	
@section('content')

	
<body>
	<div class="title">Содержание раздела</div>	

	@extends('layouts.fon')
		@foreach($content_prose as $content_prose)
			<div class="con"><a href="/text"></a></div>
		@endforeach
	@section('footer')
</body>
</HTML>