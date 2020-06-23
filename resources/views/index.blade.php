@extends('layouts.header')
	@section('title')
		<title> Сказки </title>
	@endsection()	
@section('content')

<body>
	<style>
	body { background: url('style/IMG_2992.jpg'); } 
	</style>
	<div class="title">Сказки охотника за светлячками</div>
	<div class="text"> Приветствую тебя, путник. Присядь к нашему костру и поведай о своих странствиях.</div>
	<div class="fon">
		<div class="left"><a href="/text">ПРОЗА</a></div>
		<div class="center"><a href="/text">СТАТЬИ</a></div>
		<div class="right"><a href="/text">ПОЭЗИЯ</a></div>
	</div>
	@section('footer')
		<div id="footer"> © Татьяна Лерман</div>
</body>
</HTML>