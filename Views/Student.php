<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--CSS Bootstrao 4  end icono moon-->
     <link rel="stylesheet" href="../CSS/bootstrap.min.css">
     <link rel="stylesheet" href="../fonts/style.css">
     <link rel="stylesheet" href="../CSS/style.css">
     <!--Fonst-->
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <title>Estudent</title>
</head>
<body>
    <!--Header--> 
    <Header class="container-fluid">
         <div class="row">
              <div class="Portada col-5">
                 <img src="../IMG/logos1.jpg" alt="">
              </div>
              <div class="Title col-5 align-self-center">
                   <h1>Evaluacion Reflexiva</h1>
              </div>
              <div class="Icon col-2 align-self-center">
                  <span class="icon-exit"></span>
              </div>
         </div>
    </Header>
    <!--NAV-->
    <nav class="container">
        <div class="row justify-content-md-center">
            <div class="TitleInfo col-2">
                <h3>Instructions</h3>
            </div>
        </div>
            <div class="row justify-content-md-center">
                <div class="Info col-10">
                <ul class="list-group">
                    <li class="list-group-item"><span class="icon-file-text"></span>  Cras justo odio</li>
                    <li class="list-group-item"><span class="icon-keyboard"></span> Dapibus ac facilisis in</li>
                    <li class="list-group-item"><span class="icon-user"></span> Morbi leo risus</li>
                    <li class="list-group-item"><span class="icon-airplane"></span> Porta ac consectetur ac</li>
                </ul>
            </div>
        </nav>
        <div class="user container ">
            <div class="row justify-content-md-center">
                <div class="InfoUser col-4">
                    <ul class="list-group">
                        <li class="list-group-item"><h3>Welcome Students</h3></li>
                        <li class="list-group-item"><h5>Name</h5> Juan Camilo</li>
                        <li class="list-group-item"><h5>Surname</h5> Penagos Yara</li>
                        <li class="list-group-item"><h5>Grade</h5> 1A</li>
                    </ul>
                 </div>
          </div>
        </div>
        <section class="container">
            <div class="row justify-content-md-center">
                <div class="Table col-12 ">
                  <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Criterion</th>
                        <th colspan="2">Answer</th>
                        <th scope="col">Color</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><h3>Titulo</h3> <p>Lorem Ipsum is simply dummy text of the printing and
                             typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                             text ever since the 1500s, when an unknown printer took a galley of type and 
                             scrambled it to make a type specimen book</p></td>
                        <td colspan="2"> <select class="form-control" id="grade" name="grade">
                                <option value="Seleccionar">Seleccionar</option>
                                <option value="1">Siempre</option>
                                <option value="2">Casi siempre</option>
                                <option value="3">Nunca</option> 
                            </select></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Comentario del Estudainte </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        </th>
                        <td ></td>
                        <td ><button class="btn btn-primary">Enviar</button></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </section>
</body>
</html>