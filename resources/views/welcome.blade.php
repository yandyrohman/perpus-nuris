Perpus Nuris

@guest
	<div class="box">
		<h1>Selamat Datang di Aplikasi Perpus Nuris!</h1>
		<h3>Silahkan Login</h3>
		<a href="/login">Login</a>
	</div>
@else
	<div class="box">
		<h1>Selamat Datang di Aplikasi Perpus Nuris!</h1>
		<h3>Silahkan Masuk</h3>
		<a href="/pinjam">Masuk Aplikasi</a>
	</div>
@endguest

<style type="text/css">
	* {
		margin: 0;
	}

	.box {
		position: fixed;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background: #ccc;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		font-family: arial;
	}

		a {
			padding: 10px;
			background: green;
			font-size: 16px;
			color: #fff;
			text-decoration: none;
			margin-top: 50px;
			border-radius: 5px;
			transition: 0.3s;
		}

		a:hover {
			background: #fff;
			color: #333;
		}
</style>

