<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function solucion1(){
        var v0=0;
        var g = 9.8;
        var t = 10;
        var h = (g*(t*t)/2);
        var v=((v0+g)*t);
        var x = Math.round(h*100)/100;
        var d=document.getElementById("resultado");
        d.innerHTML='<h2>Resultado: </h2>  a)</br>La velocidad final es : </br> V= '+ v+'  m/s </br> </br> b)</br> La altura del edificio es:</br> h= '+ x +' m ';
        }
    </script>
</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <h1>Science Technology Engineerig & Mathematics</h1>
    <h2>Resolver problemas de Ciencia e Ingeniería con JS</h2>
    <h2>Nombre: Alondra Samahi Alonso Juarez  No. de control: 17090999</h2>
    <img src="images/fotoSeldie.jpeg" alt="su foto">
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
        <h2>PROBLEMA</h2>
        <p>Descripción:</p>
        <p>Un cuerpo se deja caer desde un edificio de la ciudad de México. 
                <br>  Calcular, a) ¿Cuál será la velocidad final que este objeto tendrá a los 10 segundos cuando llegue el suelo?</br> 
          <br>  b) ¿Cuál es la altura del edificio?</br>   
      </section>
      <section id="datos">
            <h2>Datos:</h2>
            v0 = 0  <br>
            g= 9.8 m/s^2  <br>
            t=10 s<br>
            

            <br>
      </section>
      <section id="formulas">
            <h2>Fórmulas</h2>
             a = v0+g*t <br>
          h=(g*(t*t)/2)<br>
            <br>

      </section>
      <section id="solucion">
            <h2>Cálculos</h2>
            <p>La velocidad final es :<br>
                <br>
                a)Velocidad Final:<br> 
            v0=v0+g*t <br>
            Sustituimos: v0= 0 m/s + (9.8 m/s^2) + (10s)  <br>
             a=? 
            <br>
            <br>
            b)La altura del edificio es<br>
            h= (g*(t*t)/2)<br>
            Sustituimos : h= (9.8 m/s^2)(10s)^2/2 = (9.8 m/s^2)(100s^2)/2 <br>
            h=?
            </p>
             <button onclick="solucion1()">Presiona para calcular</button>
             <br>
      </section>
      <section id="resultado">
          <h2>Resultado</h2>
            
      </section>
    </section>
    <footer id="gridPie">
        <p>Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>
