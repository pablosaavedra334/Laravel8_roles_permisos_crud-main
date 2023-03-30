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
    body{
        background: rgb(235, 233, 233);
    }

    h1{
        color: rgb(255, 255, 255);
        margin-top: 15px;
        font-size: 25px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;


    }
    .cap{

        border: 1px solid rgba(0, 0, 0, 0.459);
        border-radius: 1%;
        background: rgb(255, 255, 255);
    }
    p{

        margin-left: 30px;
        margin-block: 15px;
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;


    }
    a{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;

    }
    .bordet{
        border: 1px solid #e90000;
        background: #e90000;
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
          font-size: 15px;

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


        td{
            background: rgba(255, 255, 255, 0.616);
            color: rgb(0, 0, 0);
            font-family: Arial, Helvetica, sans-serif;
        }

        table td, th{
            border: 1px solid black;

        }

        tr:nth-child(even){ /* odd (para que se seleccionen los impares) */

            background-color: rgb(206, 202, 202);
            color: white;

        }

        th, td{
            padding: 10px;
            font-size: 15px;
            /* text-align: center; */
        }
        table{
            margin-left: auto;
            margin-right: auto;


        }
        tr:hover td { /* th:hover td(solo se iluminaran los td)*/

            background-color: rgb(235, 116, 116) ;
            color: rgb(255, 255, 255);
        }
        tr:hover a { /* th:hover td(solo se iluminaran los td)*/

background-color: rgb(235, 116, 116) ;
color: rgb(255, 255, 255);
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

 
<br>
      

      <div  class="container ">

      <h1 style="text-align: center" class="  text-white bg-primary">Medios de enseñanza y aprendizaje usados</h1>

      </div>

      <table style="width: 83%">
              

              <tr>
                  <td  style="text-align: center">Exposición magistral</td>
                  <td style="text-align: center" >15%</td>
                
              </tr>
              
              <tr>
                  <td  style="text-align: center">Medio Audiovisual</td>
                  <td style="text-align: center" >20%</td>
                
              </tr>
              <tr>
                  <td  style="text-align: center">Aula interactiva</td>
                  <td style="text-align: center" >30%</td>
                
              </tr>
              <tr>
                  <td  style="text-align: center">Experimentos</td>
                  <td style="text-align: center" >0%</td>
                
              </tr>
              <tr>
                  <td  style="text-align: center">Desarrollo de proyectos</td>
                  <td style="text-align: center" >20%</td>
                
              </tr>
              <tr>
                  <td  style="text-align: center">Estudios casos</td>
                  <td style="text-align: center" >0%</td>
                
              </tr>
              </table>
              <div  class="container ">
              

      <h1 style="text-align: center" class="  text-white bg-primary">Elementos de evaluación</h1>

      </div>

      <div class="container " >

     

      <table style="width: 100%">
              

              <tr>
                  <td  style="text-align: center">Examenes Parciales</td>
                  <td style="text-align: center" >40%</td>
                
              </tr>
              
              <tr>
                  <td  style="text-align: center">Examen final</td>
                  <td style="text-align: center" >20%</td>
                
              </tr>
              <tr>
                  <td  style="text-align: center">Practicas</td>
                  <td style="text-align: center" >0%</td>
                
              </tr>
              <tr>
                  <td  style="text-align: center">Asistencia</td>
                  <td style="text-align: center" >10%</td>
                
              </tr>
              <tr>
                  <td  style="text-align: center">Participación</td>
                  <td style="text-align: center" >10%</td>
                
              </tr>
              <tr>
                  <td  style="text-align: center">Exposición</td>
                  <td style="text-align: center" >0%</td>
                
              </tr>
              <tr>
                  <td  style="text-align: center">Proyectos</td>
                  <td style="text-align: center" >20%</td>
                
              </tr>
              </table> <br>

               </div>
</body>
</html>
