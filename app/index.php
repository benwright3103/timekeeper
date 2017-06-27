<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Time Keeper</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Neuton:200" rel="stylesheet">


<link rel="stylesheet" href="main.css">

</head>

<body>

<?php 

function getDb() {
    $db = pg_connect("host=localhost port=5432 dbname=colordb_dev user=coloruser password=color");
    return $db;
  }




?>


<!-- top header and logo -->

<header id="header" class="container-fluid align-middle row justify-content-center mt-10" >

    <h2 id="logo">TIME KEEPER</h2>

</header>



<!-- Monthly Timer Count -->
<main id="main" class="container-fluid align-middle row justify-content-center">
  <div>

        <h1 id="main-header">TOTAL HOURS</h1>
    
      <div class="container-fluid align-middle row justify-content-center">

            <h2 id="main-timer">07:14</h2>

      </div>


  </div>

</main>


<div class="container-fluid">
  <div class="row ">

  <!-- coloumn 1 -->
    <div id="col1" class="col-sm">
      <h2 class="sectionHeader">CURRENT TASK</h2> 
      <hr width="60%">
      <label class="timer" id="minutes">00</label >:<label class="timer" id="seconds">00</label>
      <button  id="startbtn" class="buttons">START</button>
      <img id="pausebtn" src="pause.png" alt="">
      <button class="buttons">COMPLETE</button>
    </div>

   <!--  coloumn 2 -->
    <div id="col2" class="col-sm">
      <h2 class="sectionHeader"> NEW TASK </h2>
      <hr width="60%">
  
    <form class="form-inline">
  <!-- <label class="sr-only" for="inlineFormInput">Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">
 -->
  <label class="sr-only" for="inlineFormInputGroup">Username</label>
  

  <div class="input-group mb-2 mr-sm-2 mb-sm-0 pb-1">
    <div class="input-group-addon">Task Name</div>
    <input type="text" class="form-control" id="inlineFormInputGroup" >
  </div>


  <div class="input-group mb-2 mr-sm-2 mb-sm-0 pb-1">
    <div class="input-group-addon">Category</div>
    <input type="text" class="form-control" id="inlineFormInputGroup" >
  </div>

  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon">Description</div>
    <input type="text" class="form-control" id="inlineFormInputGroup">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>



     <!--  <input type="text">
      <input type="text"> -->
    </div>

  <!--  coloumn 3 -->
    <div  id="col3" class="col-sm">
     <h2 class="sectionHeader"> MANUAL TASK ENTRY </h2>
     <hr width="60%">
    </div>

  </div>
</div>


<div>

<h1 id="completedTaskHeader">Completed Tasks </h1>
  
  <table class="table ">
  <thead>
    <tr>
      <th>TASK</th>
      <th>DATE</th>
      <th>TIME</th>
      <th>DESCRIPTION</th>
    </tr>
  </thead>
  <tbody>
    <tr class="stripe">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr class="stripe">
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



</div>










<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> 
<script src="main.js" ></script>
</body>
</html>