<html>
    <head>
        <title>Conexion a BD</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
<body>
    <form method="post">
        <h1>Vamos a conectarnos</h1>
        <input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
    <?php 
    include("registrar.php");
    ?>

</body>
</html>