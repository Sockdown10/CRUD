<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <style>
    body{
      display:flex;
      align-items:center;
      justify-content:center;
      height: 100vh;
      background-image:url('app/img/terraza.jpg');
    }
    a{
      width: 50% !important;
      font-size:2.5em !important;
    }
    
    .botones{
      width: 40%;
      background:rgb(255,255,255,0.7);
    }
    h1{
      width: fit-content;
      font-size:3.5em !important;
    }
    label{
            font-weight:bold !important;
        }
  </style>
</head>
<body>
  

  
    
    <div class="botones d-flex flex-column justify-content-center align-items-center shadow w-450 rounded">
      <h1 class="text-center text-bg-primary m-3 rounded animate__animated animate__pulse animate__infinite">¿Qué necesitas?</h1>
      <a href="app/index.php" class="btn btn-warning m-1">Iniciar Sesion</a>

      <a href="app/reserva.php" class="btn btn-danger m-1">Hacer una reserva</a>
    </div>
  
</body>
</html>