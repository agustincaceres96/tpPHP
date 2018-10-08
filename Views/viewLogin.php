
<?php namespace css; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Style.css" />
</head>
<body>
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>GoTo<span>EVENT</span></div>
		</div>
		<br>
		<form action="<?=BASE?>Login/Login" method="POST">
		<div class="login">
				<input type="text" placeholder="email" name="email"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" name="btnCargar" value="Ingresar">
		</div>
    </form>
</body>

</html>