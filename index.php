<?php
session_start();


@$id = $_SESSION['userid'];

@$vorname = $_SESSION['uservn'];
@$nachname = $_SESSION['usernn'];
@$userrole =  $_SESSION['userrole'];

?>
<html>

<head>
<link rel="stylesheet" href="libs\bootstrap-4.3.1-dist\css\bootstrap.min.css" >
<script src="libs\bootstrap-4.3.1-dist\js\bootstrap.min.js" ></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

$(document).ready(function(){
  $("#admin").click(function(){
    $("#content").load("frontend/admin.html");
    console.log("123");
  });
});

$(document).ready(function(){
  $("#user").click(function(){
    $("#content").load("frontend/user.php");
  });
});


$(document).ready(function(){
  $("#login").click(function(){
    $("#content").load("frontend/login.html");
  });
});
</script>

</head>
<?php




if(!$id){

  echo'<a class="nav-item nav-link" href="#" id="login" >Login</a>';

}else{

  echo'<a class="nav-item nav-link" href="backend/logout.php" id="logout" >'.$vorname.' '.$nachname.'</a>';
}
?>




  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DMVP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <?php  
    if(!$id){

      echo<<<htm
      <a class="nav-item nav-link"  href="#" id="user" ><button class="btn btn-warning" disabled>User</button></a>
      <a class="nav-item nav-link" href="#" id="admin" ><button class="btn btn-warning" disabled>Admin</button></a>
htm;
    }else{

      echo<<<htm
      <a class="nav-item nav-link"  href="#" id="user" ><button class="btn btn-warning" >User</button></a>
      <a class="nav-item nav-link" href="#" id="admin" ><button class="btn btn-warning" >Admin</button></a>
htm;
    }
    ?>

    </div>
  </div>
</nav>

<main>



<div id="content">

</div>

</main>




</html>

