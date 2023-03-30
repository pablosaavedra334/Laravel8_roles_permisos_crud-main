<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dibujo Tecnico</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1bee27b496.js" crossorigin="anonymous"></script>

    <style>

.bordet{
        border: 1px solid #e90000;
        background: #e90000;
    }
    a{
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;


    }
    .t1{

background-color:  rgb(206, 202, 202);
color: rgb(0, 0, 0);


font-family: Arial, Helvetica, sans-serif;

font-size: 18px;
margin-top: 10px;
text-align: center;

}
p{

          font-family: Arial, Helvetica, sans-serif;

        }


.bordet{
    border: 1px solid rgb(206, 202, 202);
    background:  rgb(206, 202, 202);
}

.ta2{
    text-align: center;
    color: black;
    font-size: 15px;




}
.il{
    width: 13mm;
    margin-left: 1cm;
    padding: 0%;
    float: left ;
    margin-top: 3mm;

}
.ol{

    width: 20mm;
    margin-right: 1cm;
    padding: 0%;
    float: right ;
    margin-top: 5mm;


}
.bor{
            border: 1px solid black;
            background: white;

        }

    </style>


</head>
<body>

    <div class="bordet">
        <img class="il"  src="../../Img/lu.png" alt="logo_UMSA">
        <img class="ol" src="../../Img/etn_logo_r.png" alt="electronica">
        <h1 class="t1" style="text-align: center"> <strong>UNIVERSIDAD MAYOR DE SAN ANDRES</strong> </h1>
        <p class="ta2" >Carrera Ingeniería Electronica</p> <h1 class="t1"> <strong>SISTEMA BIBLIOTECA</strong> </h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
          <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
        
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li class="side-menus {{ Request::is('*') ? 'active' : '' }}"> 
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span> Inicio</span>
    </a>
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span> Usuarios</span>
    </a>
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span> Roles</span>
    </a>
    <a class="nav-link" href="/blogs">
    <i class="fas fa-solid fa-file"></i><span> Contenido</span>
    </a>
   
    <a class="nav-link" href="/cronograma">
    <i class="fa fa-list"></i><span> Cronograma
    </a>
    <a class="nav-link" href="/plan_estudios">
    <i class="fa  fa-plane"></i><span> Plan de Estudios
    </a>
    <a class="nav-link" href="/objetivos">
    <i class="fas fa-bullseye"></i><span> Objetivos
        </span>
    </a>
    <a class="nav-link" href="/capacidades_competencias">
    <i class="fa fa-duotone fa-check"></i><span> Capacidades y competencias
        </span>
    </a>
    <a class="nav-link" href="/justificacion">
    <i class="fa fa-align-justify"></i><span> Justificación
        </span>
    </a>
    <a class="nav-link" href="/bibliografia">
    <i class="fa fa-book"></i><span> Bibliografía
        </span>
    </a>

    
</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


      <div class="container">
      <h1 style="text-align: center">Justificación</h1>

      <p>El lenguaje de del dibujo técnico es indispensble para el desemepeño de la profesión  de Ingenieria Civil, debiendo tener el el conocimiento y manejo de las normas, simbolos y técnicas del dibujo.
      </p>

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../Img/004.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../../Img/002.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../../Img/01.jpg" class="d-block w-100" alt="...">
          </div>
        </div>

      </div>


      </div>



</body>
</html>
