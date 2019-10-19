<!DOCTYPE html>
<html>
<head>
	<title>Perpus Nuris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
		  <a class="navbar-brand" href="#">Perpus Nuris</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item {{ $isPinjam }}">
		        <a class="nav-link" href="/pinjam">Pinjam</a>
		      </li>
		      <!-- <li class="nav-item {{ $isTelat }}">
		        <a class="nav-link" href="/telat">Telat</a>
		      </li> -->
		      <!-- <li class="nav-item {{ $isBuku }}">
		        <a class="nav-link" href="/buku">Buku</a>
		      </li> -->
		      <li class="nav-item {{ $isHistori }}">
		        <a class="nav-link" href="/histori">Histori</a>
		      </li>
		      <li class="nav-item">
		      	<form
		      		id="logout-form"
		      		action="{{ route('logout') }}"
		      		method="post"
		      		style="display: none;">@csrf
		      	</form>
		        <a
		        	class="nav-link"
		        	href="{{ route('logout') }}"
		        	onclick="event.preventDefault();document.getElementById('logout-form').submit();"
		        	>
		        	Logout
		        </a>
		      </li>
		    </ul>
		  </div>

		</nav>
		@yield('content')
	</div>
</body>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript">
	console.log('waduh');
	$('form').on('keyup', '.api_suggest', function(){
		console.log('good');
	});
</script>

</html>

<!-- style paksaan -->
<style type="text/css">
	body {/*
		background: #444;*/
	}

	.container-fluid {
		margin-top: 80px;
	}
</style>