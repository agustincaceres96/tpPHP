
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="<?= BASE;?>Artist/AddArtist" method="post">
    <table border="1">
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="BTNLoadArtist" value="load"></td>
        </tr>
    </table>
</form>
    
</body>
</html>