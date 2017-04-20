<!DOCTYPE html>
<html>
  <head>

  <title>formulario estudiantes</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">      
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
    <script type="text/javascript" src="estudiante.js"></script>

   </head>
   <?php
  $file=fopen("archivo.txt", "a");
  fwrite($file, $_POST["apell"].";".$_POST['b'].";".$_POST['c'].";".$_POST['d'].";".$_POST['e'].";".$_POST['f'].";".$_POST['g'].";".$_POST['h'].";".$_POST['i'].";".$_POST['j'].";".$_POST['k'].";".$_POST['p'].";".$_POST['zam1'].";".$_POST['zam2'].";".$_POST['zam3'].";".$_POST['zam4'].";".$_POST['lady0'].";".$_POST['lady1'].";".$_POST['lady2'].";".$_POST['lady3'].";".$_POST['lady4'].";".$_POST['lady5'].";".$_POST['lady6'].";".$_POST['lady7'].";".$_POST['lady8'].";".$_POST['lady9'].";".$_POST['especialidad'].";".$_POST['trabajo'].";".$_POST['fecha'].PHP_EOL);
 
  fclose($file);
  
  $file=fopen("archivo.txt", "r");

  while (!feof($file)) {
    $x=explode(";", fgets($file));
    ?>
   <body class="container" style="color: black;" background="fondo.jpg">
      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>
                <?= $x[0]."".$x[1]?>
              </p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>

            
</html>

 <?php
  }

  fclose($file);