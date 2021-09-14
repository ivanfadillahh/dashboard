<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Login Panel</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Panel !</h1>

	<div id="body">
		<h4>Login Admin</h4>
		<form action="<?= base_url()?>Welcome/do_login" method="post">
			<label for="email">Email :</label><br>
			<input required type="text" name="email" placeholder="Input your email address..." id="email" style="padding-left:5px;padding-top:3px;padding-bottom:3px;margin-top:10px;margin-bottom:25px;font-size:12px;width:170px;" autofocus><br>

			<label for="password">Password :</label><br>
			<input required type="password" name="password" placeholder="Input your password..." id="email" style="padding-left:5px;padding-top:3px;padding-bottom:3px;margin-top:10px;margin-bottom:25px;font-size:12px;width:170px;" autofocus><br>

			<button type="submit" id="btn-submit" style="background-color:green;border:2px solid green;border-radius:3px;padding:5px 15px;font-size:12px;color:#fff;cursor:pointer;">Login</button>
		</form>
	</div>

	<p class="footer">
		<strong>Copyright &copy; Dashboard Panel <?= date('Y')?></strong>
	</p>
</div>

</body>
</html>