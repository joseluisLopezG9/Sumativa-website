<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Misión</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
    

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Telnet Group ® </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{ route('identidad') }}">¿Quiénes somos?</a>
                <a class="nav-item nav-link active" href="{{ route('mision') }}">Misión</a>
                <a class="nav-item nav-link active" href="{{ route('vision') }}">Visión</a>    
                <a class="nav-item nav-link active" href="{{ route('contacto') }}">Contáctanos</a>
                <a class="nav-item nav-link active" href="{{ route('ayuda') }}">Ayuda</a>
              </div>
            </div>
            
          </nav>
        </div>

    <section class="content container-fluid">
        <div class="jumbotron">
            <h1 class="display-4" style="color: rgb(13, 13, 14)">Nuestra misión</h1>
            <hr class="my-4">
            <p align="justify" style="color: rgba(30, 87, 134, 0.87)"> 
                Telnet Systems nace de la pasión por la tecnología y el compromiso de ofrecer la más alta calidad en nuestros productos y servicios. Como expertos en el desarrollo de software y soluciones tecnológicas, nos esforzamos por involucrarnos, avanzar, crecer y mejorar continuamente en lo que hacemos, con el objetivo de entregar siempre lo mejor. Guiados por estos principios, nuestro objetivo es lograr la máxima satisfacción de nuestros clientes y usuarios, a través de un enfoque de trabajo basado en la razón, el sentido común, la sostenibilidad, la eficacia, el alto valor añadido y la mejora continua.
          
                
                
            
          <center><img style="width:30%" alt="ERROR 404" src="vendor/adminlte/dist/img/telnet.jpeg" /></center>
          <a class="btn btn-info btn" href="{{ route('welcome') }}" role="button">Regresar</a>

        </div>

          

        
    </section>

</body>
</html>
