<HTML>
<head>
	@yield('title')
	<link rel="stylesheet" href="style/right-nav-style.css">
	<link rel="stylesheet"  type="text/css" href="style/style.css">
	<div class="head">
		<div class="menu"><img src="style/menu.png" /></div>
		<div class="home"><a href="/"><img src="style/home.png" /></a></div>
		<form method="get" action="/search" id="search_form">
		  <input type="text" placeholder="Искать здесь...">
		  <button type="submit"></button>
		</form>
	</div>
	
@yield('content')
</head>
<body>
	<input type="checkbox" id="nav-toggle" hidden>
	<nav class="nav">
	<label for="nav-toggle" class="nav-toggle" onclick></label>
	<h2 class="logo"> 
			</h2>
			<ul>
				<li><a href="/content_prose">ПРОЗА</a>
				<li><a href="/content_articles">СТАТЬИ</a>
				<li><a href="/content_poetry">ПОЭЗИЯ</a>
				<li><a href="/lk">ПРОФИЛЬ</a>
			</ul>
			<div class="auth"><a href="/auth">АВТОРИЗАЦИЯ / РЕГИСТРАЦИЯ</a></div>
		</nav>
	<div class="mask-content"></div>
	
<div id="footer"> © Татьяна Лерман</div>

</body>
</HTML>