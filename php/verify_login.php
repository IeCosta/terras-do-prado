<?php
  session_start();
  
  #criar a ligação à BD
  include "./mysql_db_connect.php";

  if(empty($_POST['username']) || empty($_POST['pass'])) {
    header('location: ./login.php');
    exit();
  }

  $user = mysqli_real_escape_string($conn, $_POST['username']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  
  # Criar a query de verificação de utilizador
  $query_user = "SELECT id_user,username,pass,photo,user_level FROM user WHERE username='$user' AND pass='$pass';";

  # realiza a query
  $result_query_user = mysqli_query( $conn, $query_user) or die(' Erro na query:' . $query_user . ' ' . mysqli_error($conn) );
  #conta o numero de linhas do resultado
  $row = mysqli_num_rows($result_query_user);

  $user_reg = mysqli_fetch_array( $result_query_user);

  if ($row == 1){
    $_SESSION['userName'] = $_POST['username'];
    $_SESSION['photo'] = $user_reg['photo'];
    $_SESSION['id_user'] = $user_reg['id_user'];
    $_SESSION['user_level'] = $user_reg['user_level'];
    header("location: ./index.php");
    exit();
  } else {
    header("location: ./invalid_login.php");
    exit();
  }
?>