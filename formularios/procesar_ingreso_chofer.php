<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Vehicular</title>
    <style>

        body{
            background-color: rgb(218, 217, 217);
            margin: 0px;
            padding: 0px;
        }

        header {
            display: flex;
            align-items: center;
            background-color: #1B3665;
            color: white;
            
        }

        nav {
            background-color: #1B3665;
            padding: 1px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        nav ul {
            list-style-type: none;
            margin: 10px;
            padding: 5px;
            display: flex;
            justify-content:flex-end;
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

        nav li:hover {
            padding: 15px;
            background-color: #2980b9;
        }

        .menu {
            background-color: #da6517ce;
            width: 200px;
            padding: 20px;
            box-sizing: border-box;
            margin-right: 20px;
        }

        .menu ul {
            padding: 0;
            list-style-type: none;
        }

        .menu ul li {
            margin-bottom: 79px;
            text-align: center;
            
        }

        .menu a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 15px;

        }
        
        .menu h1 {
            color: #074b79;
            font-weight: bold;
            font-size: 15px;

        }
        
        section {
            display: flex;
            justify-content: center;
            width: 100%;
            
        }

        .informacion {
            text-align: left;
            display: flex;
            justify-content: space-between;
        }

        .informacion article{
            margin: 5px;
            margin-top: 0;
            margin-bottom: 0;
            flex: 1;
            background-color: whi;
        }

        .informacion article h1{
            color: #F7921E;
            text-align: center;
            
        }
        
        .informacion article {
            background-color: #1B3665 ;
            text-align: left;
            padding: 20px;
        }

        .informacion article p{
            color: white;
        }

        .titulo {
            color: #F7921E;
        }

        .imgLogo {
            width: 10%;
        }

        footer{
            background-color: #1B3665;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 5px;
        }
    </style>
</head>
<?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $numCedula = $_POST["numCedula"];
    $sexo = $_POST["sexo"];
    $licencia = $_POST["licencia"];
    $sangre = $_POST["sangre"];
    $fentrada = $_POST["fentrada"];
?>
<body>
    <header>
        <img class="imgLogo" src="images/LogoGestionVehicular.png" alt="Logo Gestion Vehicular">
        <h1 align="center">Gestión Vehicular</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="#">VEHICULOS</a></li>
            <li><a href="#">CHOFERES</a></li>
        </ul>
    </nav>

    <section>
        <section class="menu">
            <ul>
                <h1 align="center">MENU</h1>
                <li><a href="formularios/form_ingreso_chofer.php">Agregar un nuevo Chofer</a></li>
                <li><a href="#info">Chofer 1</a></li>
                <li><a href="#">Chofer 2</a></li>
                <li><a href="#">Chofer 3</a></li>
            </ul>
        </section>


            <section>
                <article class="informacion">
                    <article>
                        <h1>Información del Chofer</h1>
                                <?php
                                    echo "Nombre: $nombre<br>";
                                    echo "Apellido: $apellido<br>";
                                    echo "Edad: $edad<br>";
                                    echo "Numero de Cédula: $numCed<br>";
                                    echo "Sexo: $sexo<br>";
                                ?>
                    <article>
                        <h1>Información Técnica</h1>
                        <?php
                            echo "Tipo de licencia: $licencia<br>";
                            echo "Sangre: $sangre<br>";
                            echo "Fecha de entrada: $fentrada<br>";
                        ?>
                    </article>
                    <article>
                        <img width=100% src="images/id-foto.jpg" alt="foto-chofer">
                    </article>
                </article>
            </section>
    </section>
    
    <footer>
        <p>&copy Sistema de Gestión Vehicular</p>
    </footer>
</body>

</html>
<?php

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $numCedula = $_POST["numCedula"];
    $sexo = $_POST["sexo"];
    $licencia = $_POST["licencia"];
    $sangre = $_POST["sangre"];
    $fentrada = $_POST["fentrada"];

    

    echo "Información del vehículo ingresada:<br>";
    echo "Nombre: $nombre<br>";
    echo "Apellido: $apellido<br>";
    echo "Edad: $edad<br>";
    echo "Numero de Cédula: $numCed<br>";
    echo "Sexo: $sexo<br>";
    echo "Tipo de licencia: $licencia<br>";
    echo "Sangre: $sangre<br>";
    echo "Fecha de entrada: $fentrada<br>";

?>
