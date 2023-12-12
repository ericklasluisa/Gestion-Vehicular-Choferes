<?php
// Manejar la búsqueda
if (isset($_GET['busqueda'])) {
    $busqueda = $_GET['busqueda'];
    
    // Leer el archivo JSON
    $choferes = json_decode(file_get_contents('choferes.json'), true);

    // Buscar en los choferes
    $choferEncontrado = null;
    foreach ($choferes as $chofer) {
        if ($chofer['cedula'] == $busqueda) {
            $choferEncontrado = $chofer;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Vehicular</title>
    <style>
        body {
            background-color: #F2F2F2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        header {
            display: flex;
            align-items: center;
            background-color: #34495E;
            backdrop-filter: blur(5px);
            color: white;
            padding: 10px;
        }

        .menu {
            border-radius: 20px;
            background-color: #2C3E50;
            padding: 1px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 200px;
            margin-top: 10px;
        }

        .menu ul {
            list-style-type: none;
            padding: 0;
            margin: 30px;
            display: flex;
            flex-direction: column;
        }

        .menu li {
            padding: 20px;
            transition: background-color 0.3s;
            border: none;
        }

        .menu a {
            text-decoration: none;
            color: #ECF0F1;
            font-weight: bold;
            font-size: 15px;
            display: block;
            width: 100%;
            height: 100%;
        }

        .menu li:hover {
            background-color: #3498DB;
        }

 

        nav ul {
            list-style-type: none;
            margin: 10px;
            padding: 5px;
            display: flex;
            justify-content: flex-end;
        }

        nav li {
            border-right: 2px solid #fff;
            padding: 15px;
            transition: background-color 0.3s;
        }

        nav li:last-child {
            border-right: none;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .barra-navegacion {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2C3E50;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .barra-navegacion form {
            margin-right: 20px;
        }

        .barra-navegacion form input {
            padding: 5px;
        }

        .barra-navegacion nav {
            display: flex;
            align-items: center;
        }

        .barra-navegacion nav a {
            margin-right: 10px;
        }

        .informacion {
            display: flex;
            gap: 20px;
            justify-content: space-between;
            align-items: flex-start;
            width: 80%;
            margin-top: 20px;
        }

        .informacion article {
            flex: 1;
            max-width: 30%;
            background-color: #ECF0F1;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .informacion article img {
            width: 100%;
            border-radius: 8px;
        }

        .informacion h1 {
            color: #3498DB;
            text-align: center;
        }

        .informacion p {
            color: #34495E;
            margin: 0;
        }

        .informacion .titulo {
            color: #3498DB;
        }

        .imgLogo {
            width: 10%;
        }

        footer {
            background-color: #34495E;
            color: white;
            padding: 10px;
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }

        img {
            width: 50px;
        }
    </style>
</head>

<body>
    <header>
        <img class="imgLogo" src="images/LogoGestionVehicular.png" alt="Logo Gestion Vehicular">
        <h1 align="center">Gestión Vehicular</h1>
    </header>
    <section>
        <table>
            <tr>
                <td class="menu">
                    <nav>
                        <ul>
                            <li><a href="index.html">INICIO</a></li>
                            <li><a href="vehiculos.html">VEHICULOS</a></li>
                            <li><a href="chofer.html">CHOFERES</a></li>
                            <li><a href="formularios/login.php">SALIR</a></li>
                        </ul>
                    </nav>
                </td>
                <td>
                <div class="barra-navegacion">
                    <form>
                        <label for="busqueda">Buscar:</label>
                        <input type="text" id="busqueda" name="busqueda">
                        <input type="submit" value="Buscar">
                    </form>
                    <nav>
                        <a href="form_ingreso_chofer.php">Agregar Chofer</a>
                    </nav>
                </div>
                <div class="contenedor-informacion">
                    <?php if (isset($choferEncontrado)) : ?>
                        <section class="informacion">
                            <article>
                                <h1>Información del Chofer</h1>
                                <p><strong class="titulo">Nombre: </strong><?php echo $choferEncontrado['nombre']; ?></p>
                                <p><strong class="titulo">Apellido: </strong><?php echo $choferEncontrado['apellido']; ?></p>
                                <p><strong class="titulo">Edad: </strong><?php echo $choferEncontrado['edad']; ?></p>
                                <p><strong class="titulo">Numero de Cedula: </strong><?php echo $choferEncontrado['cedula']; ?></p>
                                <p><strong class="titulo">Sexo: </strong><?php echo $choferEncontrado['sexo']; ?></p>
                            </article>
                            <article>
                                <h1>Información Técnica</h1>
                                <p><strong class="titulo">Tipo de licencia: </strong><?php echo $choferEncontrado['licencia']; ?></p>
                                <p><strong class="titulo">Tipo de sangre: </strong><?php echo $choferEncontrado['sangre']; ?></p>
                                <p><strong class="titulo">Fecha de entrada: </strong><?php echo $choferEncontrado['fecha_entrada']; ?></p>
                            </article>
                            <article>
                                <h1>Foto del Chofer</h1>
                                <img src="images/<?php echo $choferEncontrado['foto']; ?>" alt="foto-chofer">
                            </article>
                        </section>
                    <?php elseif (isset($_GET['busqueda'])) : ?>
                        <section class="informacion">
                            <article>
                        <p>No se encontró ningún chofer con la cédula <?php echo $_GET['busqueda']; ?></p>
                    </article>
                        </section>
                    <?php endif; ?>
                </div>
            </tr>
        </table>
    </section>
    <footer>
        <p>&copy Sistema de Gestión Vehicular</p>
    </footer>
</body>

</html>
