<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contenido</title>
    <script src="https://kit.fontawesome.com/1bee27b496.js" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <style>

        .bor{
            border: 1px solid black;
            background: white;

        }

        h2{

            background-color:  #e90000 ;
    color: rgb(255, 255, 255);
    padding: -10%;
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
    margin-top: 10px;
    text-align: center;

        }

        .bordet{
            border: 1px solid rgb(206, 202, 202);
        background:  rgb(206, 202, 202);
    }
    body{
        background: rgb(235, 233, 233);
    }

    a{
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;

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


        th{
                background: rgb(23, 95, 77);
                color: white;
                text-align: center;
        }

        i{

          color:  rgb(23, 95, 77);
          /* margin-left: auto; */
          margin: 0 15px;

          /* margin: 0 15px;  //(El cero representa el margen de <rriba y el 15 y margen de los costados) */
          /* align-self: center; */

          font-size: 14px;


        }
        .ver{
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            text-align: center;
            color: black;
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

    .ti{
        text-align: center;
        color: black;
        font-size: 15px;



    }
    .tu{


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
        <h1 class="tu" > <strong>UNIVERSIDAD MAYOR DE SAN ANDRES</strong> </h1> 
        <p class="ti" style="text-align: center">Carrera Ingeniería Electronica </p> <h1 class="tu"> <strong>SISTEMA BIBLIOTECA</strong> </h1>

    </div>



  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">USMA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i style="color: white" class="fa-solid fa-house"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/">Inicio</a></li>
              <li><a class="dropdown-item" href="contenido">Contenido</a></li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>








          {{-- <div class="container">

           <br> <a href=""  class="btn text-white bg-primary " >7.1. Criterio de desempeño 1 - Dibujo técnico como lenguaje grafico de la comunicación normada</a> <br>
<div class="bor">
            <p style="margin-left: 4%">7.1.1. Definición de dibujo técnico</p>
            <p style="margin-left: 4%"> 7.1.2. Historia de la evolución del dibujo en ingeniería</p>
            <p style="margin-left: 4%">7.1.3. Dibujo técnico normalizado</p>
            <p style="margin-left: 4%">7.1.4. Formatos y plegados de láminas</p>
            <p style="margin-left: 4%">7.1.5. Letras y letreros</p>
            <p style="margin-left: 4%">7.1.6. Introducción al dibujo asistido por computador</p>
 </div><br>



            <a href=""  class="btn text-white bg-primary"  >7.2. Criterio de desempeño 2 - Geometría</a> <br>
<div class="bor">

            <p>7.2.1. Trazado de perpendiculares y paralelas</p>
            <p>7.2.2. División de angulos tangencias, enlaces y polígonos, evolventes, espiral de Arquímedes</p>
            <p>7.2.3. Parábola hipérbola, óvalos, elipse, hélice, helicoide, cicloide, eplicoide e hipocicloide</p>
            <p>7.2.1. Trazado de perpendiculares y paralelas</p>
            <p>7.2.1. Trazado de perpendiculares y paralelas</p>
</div><br>



            <a href=""  class="btn text-white bg-primary"  >7.3. Criterio de desempeño 3 - Proyecciones</a> <br>
<div class="bor">

            <p>7.3.1. Descripción de la forma del objeto</p>
            <p>7.3.2. Tipos de proecciones: Proyecciones cónica, cilíndrica o paralela y ortogonal</p>
            <p>7.3.3. Proyección en el primer cuadrante ISO</p>
            <p>7.3.4. Proyección en el tercer cuadrante ASA</p>
            <p>7.3.5. Dibujos realizados manualmente, como dibujos elaborados con el software corespondiente</p>

 </div><br>


            <a href=""  class="btn text-white bg-primary" >7.4. Criterio de desempeño 4 - Sistema Axonometrico</a> <br>

            <div class="bor">

            <p>7.4.1. Proyección dimetrica</p>
            <p>7.4.2. Proyección trimétrica</p>
            <p>7.4.3. Proyección isométrica</p>
            <p>7.4.4. Representación de curvas y círculos en proyección isométrica</p>
            <p>7.4.5. Proyección isométrica por coordenas</p>
            <p>7.4.6. Dibujos realizados manualmente, como dibujos elaborados con el software correspondiente</p>

        </div><br>

            <a href=""  class="btn text-white bg-primary" >7.5. Criterio de desempeño 5 - Cortes y secciones</a> <br>

<div class="bor">

            <p>7.5.1. Concepto de cortes y secciones</p>
            <p>7.5.2. Tipos de cortes; corte frontal, lateral, horizontal, escalonado, locales y secciones</p>
            <p>7.5.3. Proyección isométrica de piezas en corte</p>
            <p>7.5.4. Dibujos realizados manualmente, como dibujos elaborados con el software correspondiente</p>
       </div><br>

            <a href=""  class="btn text-white bg-primary">7.6. Criterio de desempeño 6 - Vistas auxiliares simples y dobles</a> <br>
            <div class="bor">


            <p>7.6.1. Concepto de visitas auxiliares</p>
            <p>7.6.2. Visitas auxiliares simples o primarias</p>
            <p>7.6.3. Visitas auxiliares dobles o secundarias</p>
            <p>7.6.4. Proyección isométrica de pieza por coordenadas</p>
            <p>7.6.5. Dibujos realizados  manuelmente, como dibujos elaborados con el software correspondiente</p>
        </div><br>


            <a href=""  class="btn text-white bg-primary" >7.7. Criterio de desempeño 7 - Intersecciones y desarrollo</a> <br>
            <div class="bor">


            <p>7.7.1. Intersección y desarrollo de prismas</p>
            <p>7.7.2. Intersección de cilindro y plano</p>
            <p>7.7.3. Intersección de cilindros</p>
            <p>7.7.4. Intersección de cono y cilindro</p>
            <p>7.7.5. Intersección de esfera y cilindro</p>
            <p>7.7.6. Dibujos realizados  manuelmente, como dibujos elaborados con el software correspondiente</p>
        </div><br>

          </div> --}}


          <div class="container"  >
            <br>
            <table style="width: 80%">
                <tr>
                    <th>Semestre</th>
                    <th>Sigla</th>
                    <th>Asignatura</th>
                    <th>Contenido</th>
                    <th>Editar</th>

                </tr>

              <tr>
                  <td rowspan="6" style="text-align: center">1</td>
                  <td >FIS 100</td>
                  <td>FISICA BÁSICA I Y LABORATORIO</td>
                  <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>

                <td >MAT 100</td>
                <td>ALGEBRA</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
            </tr>
            <tr>
                <td >MAT 101</td>
                <td>Calculo I</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
            </tr>
            <tr>

                <td >QMC 100</td>
                <td>QUÍMICA GENERAL Y LABORATORIO</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
            </tr>
            <tr>
                <td >MEC 101</td>
                <td>Dibujo Técnico</td>
                <td>
                    <a  class="ver" href="Dibujo_Tecnico"> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
            </tr>
            <tr>

                <td >ETN 507</td>
                <td>HISTORIA CRÍTICA DE AMÉRICA LATINA Y
                    BOLIVIA</td>
                    <td>
                        <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                      </td>
                      <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                      </td>
            </tr>
            <tr>
                <td rowspan="4" style="text-align: center">2</td>
                <td >FIS 102</td>
                <td>FÍSICA BÁSICA II Y LABORATORIO </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
            </tr>
            <tr>

              <td >MAT 102</td>
              <td>CALCULO II </td>
              <td>
                <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
              </td>
              <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
              </td>
          </tr>
          <tr>
              <td >MAT 103</td>
              <td>ÁLGEBRA LINEAL Y TEORÍA MATRICIAL</td>
              <td>
                <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
              </td>
              <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
              </td>
          </tr>
          <tr>

              <td >MAT 218</td>
              <td>ANÁLISIS DE VARIABLE COMPLEJO </td>
              <td>
                <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
              </td>
              <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
              </td>
          </tr>

          <tr>

            <td rowspan="7" style="text-align: center">  3</td>
            <td>FIS 200</td>
            <td>FÍSICA BÁSICA III Y LABORATORIO</td>
            <td>
                <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
              </td>
              <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
              </td>
          </tr>

            <tr>
                <td>MAT 207</td>
                <td>ECUACIONES DIFERENCIALES</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>

            <tr>
                <td>MAT 313</td>
                <td>ANÁLISIS VECTORIAL Y TENSORIAL</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>
            <tr>
                <td>ETN 302</td>
                <td>TEORÍA DE REDES I</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>
            <tr>
                <td>ETN 406</td>
                <td>TECNOLOGÍA DE LOS COMPONENTES</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>
            <tr>
                <td>ETN 307</td>
                <td>PROGRAMACIÓN</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>
            <tr>
                <td>ETN 340</td>
                <td>PROYECTO I</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>

                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>

            <tr>

                <td rowspan="7" style="text-align: center">  4</td>
                <td>MAT 315</td>
                <td>TRANSFORMADAS INTEGRALES</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>

            <tr>
                <td>ETN 402</td>
                <td>TEORIA DE REDES II </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>
            <tr>
                <td>ETN 404</td>
                <td>MEDICIONES ElÉCTRICAS</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>

            <tr>
                <td>ETN 501</td>
                <td>FÍSICA DEL ESTADO SÓLIDO </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>
            <tr>
                <td>ETN 503</td>
                <td>ELECTRÓNICA I</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>

            <tr>
                <td>505</td>
                <td>PROGRAMACIÓN Y MÉTODOS NUMÉRICOS</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>

            <tr>
                <td>607</td>
                <td>MECÁNICA APLICADA </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>

            </tr>

            <tr>

                <td rowspan="5" style="text-align: center">  5</td>
                <td>ETN 502</td>
                <td>CAMPOS ELECTROMAGNÉTICOS</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 506</td>
                <td>ANÁLISIS DE SISTEMAS LINEALES </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>

              <tr>
                <td>ETN 601</td>
                <td>SISTEMAS DIGITALES I</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>

              <tr>
                <td>ETN 603</td>
                <td>ELECTRÓNICA II</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>


              <tr>
                <td>ETN 805</td>
                <td>INVESTIGACIÓN DE OPERACIONES</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>


              <tr>

                <td rowspan="5" style="text-align: center"> 6</td>
                <td>ETN 606</td>
                <td>CONVERSIÓN ELECTROMAGNÉTICA DE
                    ENERGÍA</td>
                    <td>
                        <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                      </td>
                      <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                      </td>
              </tr>
              <tr>
                <td>ETN 702</td>
                <td>SISTEMAS DE CONTROL I </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 703</td>
                <td>TEORIA DE TELECOMUNICACIONES I </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 821</td>
                <td>SISTEMAS DIGITALES II </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 640</td>
                <td>PROYECTO II </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>



              <tr>

                <td rowspan="5" style="text-align: center"> 7</td>
                <td>ETN 704</td>
                <td>ELECTRÓNICA DE PULSOS </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 801</td>
                <td>MICROPROCESADORES  </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 806</td>
                <td>PROCESOS ESTOCÁSTICOS </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 832</td>
                <td>ELECTRÓNICA INDUSTRIAL  </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 902</td>
                <td>SISTEMAS DE CONTROL II  </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <TR>

              <td rowspan="6" style="text-align: center"> 8</td>
              <td>ETN 903</td>
              <td>SISTEMAS DE COMPUTACIÓN</td>
              <td>
                <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
              </td>
              <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
              </td>
            </tr>
            <tr>
              <td>ETN 921</td>
              <td>TEORIA DE SISTEMAS OPERATIVOS  </td>
              <td>
                <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
              </td>
              <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
              </td>
            </tr>
            <tr>
              <td>ETN 933</td>
              <td>CONTROL Y REGULACIÓN INDUSTRIAL  </td>
              <td>
                <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
              </td>
              <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
              </td>
            </tr>
            <tr>
              <td>ETN 1015</td>
              <td>PROCESAMIENTO DIGITAL DE SEÑALES  </td>
              <td>
                <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
              </td>
              <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
              </td>
            </tr>
            <tr>
              <td>ETN 1022</td>
              <td>INTERACCION HARDWARE SOFTWARE </td>
              <td>
                <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
              </td>
              <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
              </td>
            </tr>
            <tr>
                <td>ETN 840</td>
                <td>PREPARACIÓN Y EVALUACIÓN DE PROYECTOS </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>

              <TR>

                <td rowspan="6" style="text-align: center"> 9</td>
                <td>ETN 935</td>
                <td>REDES DE DATOS</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 1034</td>
                <td>APLICACIÓN DE TÉCNICAS DE CONTROL </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 1036</td>
                <td>SIMULACIÓN DE PROCESOS INDUSTRIALES  </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 1037</td>
                <td>INSTRUMENTOS INDUSTRIALES  </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 1039</td>
                <td>SEMINARIOS DE CONTROL   </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>REC 92</td>
                <td>ESTUDIO DE LOS RECURSOS NATURALES </td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>



              <TR>

                <td rowspan="2" style="text-align: center"> 10</td>
                <td>ETN 906</td>
                <td>PRÁCTICA INDUSTRIAL</td>
                <td>
                    <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                  </td>
                  <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                  </td>
              </tr>
              <tr>
                <td>ETN 1040</td>
                <td>PROYECTO DE GRADO  </td>
                <td>
                  <a  class="ver" href=""> <i class="fa-solid fa-eye"></i>VER</a>
                </td>
                <td> <a class="ver" href=""> <i class="fa-solid fa-pen-to-square"></i>EDITAR</a>
                </td>
              </tr>







            </table>


          </div>







</body>
</html>
