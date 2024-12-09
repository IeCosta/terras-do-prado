<?php
  session_start();

  #criar a ligação à BD
  include "./mysql_db_connect.php";

  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = mysqli_real_escape_string($conn,$_POST['pass']);
  $pass_confirma = mysqli_real_escape_string($conn,$_POST['pass_confirma']);

  if ($pass_confirma != $pass) {
    $mensagem = 'Password não corresponde com a Confirmação!\n Tente novamente.';
    header("location: ./cria_utilizador.php?msg=$mensagem");
    exit();
  }

  if ($_FILES['photo']['name'] != null){
      // Tratamento da foto carregada pelo utilizador
      $filename = $_FILES['photo']['name'];
      $tempname = $_FILES['photo']['tmp_name'];
      $filetype = $_FILES['photo']['type'];
      $ext = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));

      $new_filename = "idUser_".$_POST['username']. "." . $ext;
      $folder = "../img/users/" . $new_filename;
      move_uploaded_file($tempname, $folder);
  }else{
      $new_filename = "idUser_avatar.png";
  }

  # Criar a query para novo utilizador
  $query = "INSERT INTO user (username, email, pass, photo)
   VALUES ('$username', '$email', '$pass', '$new_filename');"; 

  # realiza a query
  try {
    $result = mysqli_query($conn, $query);
  } catch (Exception $th) {
    $mensagem = 'Nome de utilizador já existente!\n Insira um novo nome de utilizador.';
    header("location: ./cria_utilizador.php?msg=$mensagem");
    exit();
  }


   //$result = mysqli_query( $conn, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error($conn) );

  if ($result > 0){
    $mensagem = 'Utilizador criado com sucesso!';
    mysqli_close($conn);//fechar a ligação à bd
    header("location: ./login.php?msg=$mensagem");
    exit();
  }

?>