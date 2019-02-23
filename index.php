<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--CSS Bootstrao 4  end icono moon-->
     <link rel="stylesheet" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" href="fonts/style.css">
     <link rel="stylesheet" href="CSS/style.css">
     <!--Fonst-->
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <title>Evaluation</title>
</head>
<body>
    <div class="container container1">
        <!--Logo-->
        <div class="row justify-content-md-center ">
             <div class="Logo col-6">
                  <img src="IMG/logos1.jpg" alt="">
                  <?php
     //alert of evaluation
    if(isset($_GET['alert'])){
         if($_GET['alert']==="true"){
           echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
           <strong>Holy guacamole!</strong> You should check in on some of those fields below.
           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
             <span aria-hidden='true'>&times;</span>
           </button>
         </div>";
        }
    }
?>
             </div>
        </div>
        <!--Login-->
        <div class="row justify-content-md-center">
               <div class="Code col-4">
                    <form action="Controlers/Controlers_Login.php" method="POST">
                 <div class="form-group">
                    <label for="code">Code</label> 
                    <input type="password" class="form-control" id="code" placeholder="Code" name="code">
                 </div>
                </div>
                <div class="Grade col-2"> 
                    <div class="form-group">
                           <label for="grade">Grade</label>
                           <select class="form-control" id="grade" name="grade">
                                <option value="Seleccionar">Seleccionar</option>
                                <option value="1">1A</option>
                                <option value="2">1B</option>
                                <option value="3">2A</option> 
                                <option value="4">2B</option>
                            </select>
                    </div>
             </div>
        </div>
        <!--Bnt-->
        <div class="row justify-content-md-center ">
             <div class="Bnt_Login">
                 <button type="submit" class="btn btn-primary">Go Evaluation</button>
                </form>
             </div>
        </div>
    </div>
    <script src="JS/jquery.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>   