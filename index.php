<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>.Calcular la posición del proyectil a los 6 segundos <br>
      b.Calcular la velocidad del proyectil a los 6 segundos</h2>
  <p>Descripción:</p>
  <p>Una maquina lanza un proyectil con ina velocidad inicial de 110 m/s, con un angulo de 35°</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
Vox = Vo*cos()°<br>
Voy = Vo-sen ()°<br>
a. = Vox*t<br>
b. = Voy-g*t<br>
</section>
<section class="datos">
<h2>Datos:</h2>
Vo =110 m/s<br>
ang = 35°<br>
g = 9.8 m/s<br>
t = 6 s <br>
</section>
</section>
<section class="calculos">
<h2>Solución</h2>
<p>La posicion y la velocidad a los 6 segundos son:<br>
Vox = 110 m/s*cos 35°<br>
Voy = 110 m/s-sen 35°<br>
a. = Vox*6 s<br>
b. = Voy-9.8 m/s*6 s<br>
</p>
</section>
<?php
     function solucion(){
        $vo=110;
        $ang= 35;
        $g= 9.8;
        $t=6;
        $sen=0.5225;
        $cos=0.8526;
        $vox= $vo*$cos;
        $voy=$vo-$sen;
        $a=$vox*$t;
        $b=$voy-$g*$t;
        return $a;
        return $b;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php

 print "<h1> resultado: b = ".solucion(). "m/s </h1>";

 print "<h1> resultado: a = ".solucion(). "m/s </h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
