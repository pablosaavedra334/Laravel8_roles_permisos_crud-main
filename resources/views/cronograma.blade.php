<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cronograma</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1bee27b496.js" crossorigin="anonymous"></script>

    <style>

        td{
            background: rgba(255, 255, 255, 0.616);
            color: rgb(0, 0, 0);
            font-family: Arial, Helvetica, sans-serif;
        }

        table td{
            border: 1px solid black;

        }

        tr:nth-child(even){ /* odd (para que se seleccionen los impares) */

            background-color: rgb(206, 202, 202);
            color: white;

        }

        th, td{
            padding: 10px;
            font-size: 15px;
        }
        table{
            margin-left: auto;
            margin-right: auto;

        }
        tr:hover td{ /* th:hover td(solo se iluminaran los td)*/

            background-color: rgb(235, 116, 116) ;
            color: rgb(255, 255, 255);
        }
        body{
        background: rgb(235, 233, 233);
    }
    .bordet{
    border: 1px solid rgb(206, 202, 202);
    background:  rgb(206, 202, 202);
}
    a{
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;


    }

.t1{

    background-color:  #e90000 ;
    color: rgb(255, 255, 255);
    padding: -10%;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
    margin-top: 10px;

}

p{

          font-family: Arial, Helvetica, sans-serif;

        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
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
.ta2{
    text-align: center;
    color: black;
    font-size: 15px;



}
.t1{

background-color:  rgb(206, 202, 202);
color: rgb(0, 0, 0);


font-family: Arial, Helvetica, sans-serif;

font-size: 18px;
margin-top: 10px;
text-align: center;

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



    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contenido">Contenido</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="bibliografia">Bibliografía</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cronograma">Cronograma</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="capacidades">Capacidades y competencias</a>
              </li>

        </div>
    </div>
    </nav> <br> -->

             <div class="container"  >
              <table style="width: 75%">

                <tr>
                    <td style="text-align: center">1</td>
                    <td >Criterio de desempeño 1 - Dibujo técnico como lenguaje grafico de la comunicación normada</td>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td >Criterio de desempeño 1 - Dibujo técnico como lenguaje grafico de la comunicación normada</td>
                </tr>
                 <tr>
                    <td style="text-align: center">3</td>
                    <td>Criterio de desempeño 2 - Geometría</td>
                </tr>
                <tr>
                    <td style="text-align: center">4</td>
                    <td>Criterio de desempeño 2 - Geometría</td>
                </tr>
                 <tr>
                    <td style="text-align: center">5</td>
                    <td>Criterio de desempeño 3 - Geometría descriptiva</td>
                </tr>
                <tr>
                    <td style="text-align: center">6</td>
                    <td>Criterio de desempeño 3 - Geometría descriptiva</td>
                </tr>
                 <tr>
                    <td style="text-align: center">7</td>
                    <td>Criterio de desempeño 4 - Sistema Axonometrico</td>
                </tr>
                <tr>
                    <td style="text-align: center" class=" text-white bg-primary">8</td>
                    <td  class=" text-white bg-primary">PRIMER PARCIAL</td>
                </tr>
                 <tr>
                    <td style="text-align: center">9</td>
                    <td>Criterio de desempeño 5 - Cortes y secciones</td>
                </tr>
                <tr>
                    <td style="text-align: center">10</td>
                    <td>Criterio de desempeño 5 - Cortes y secciones</td>
                </tr>
                 <tr >
                    <td style="text-align: center">11</td>
                    <td>Criterio de desempeño 6 - Vistas auxiliares simples y dobles</td>
                </tr>
                <tr>
                    <td style="text-align: center">12</td>
                    <td>Criterio de desempeño 1 - Vistas auxiliares simples y dobles</td>
                </tr>
                 <tr>
                    <td style="text-align: center">13</td>
                    <td>Criterio de desempeño 1 - Vistas auxiliares simples y dobles</td>
                </tr>
                <tr>
                    <td style="text-align: center">14</td>
                    <td>Criterio de desempeño 1 - Vistas auxiliares simples y dobles</td>
                </tr>
                 <tr>
                    <td style="text-align: center">15</td>
                    <td>Criterio de desempeño 1 - SEGUNDO EXAMEN</td>
                </tr>
                <tr>
                    <td style="text-align: center" class=" text-white bg-primary">16</td>
                    <td  class=" text-white bg-primary">EXANEN RECUPERATORIO</td>
                </tr>
                 <tr>
                    <td style="text-align: center">17</td>
                    <td>Criterio de desempeño 7 - Intersecciones y desarrollos</td>
                </tr>
                <tr>
                    <td style="text-align: center">18</td>
                    <td>Criterio de desempeño 7 - Intersecciones y desarrollos</td>
                </tr>
                 <tr>
                    <td style="text-align: center">19</td>
                    <td>Criterio de desempeño 7 - Intersecciones y desarrollos</td>
                </tr>
                <tr>
                    <td style="text-align: center" class=" text-white bg-primary">20</td>
                    <td  class=" text-white bg-primary">EXAMEN FINAL</td>
                </tr>

              </table>


            </div>

</body>
</html>
