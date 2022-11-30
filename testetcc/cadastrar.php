<?php
include_once('bd.php');

if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['senha2']) || isset($_POST['tipo']) || isset($_POST['escola']) ) {

    if(strlen($_POST['email']) == 0) {
        $_SESSION['sem_email'] = TRUE;
        header('location:cadastro.php');
    } else if(strlen($_POST['senha']) == 0) {
        $_SESSION['sem_senha'] = TRUE;
        header('location:cadastro.php');
    }
    else if(strlen($_POST['senha2']) == 0) {
        $_SESSION['sem_senha2'] = TRUE;
        header('location:cadastro.php');
    }
    else if(strlen($_POST['escola']) == 0) {
        $_SESSION['sem_escola'] = TRUE;
        header('location:cadastro.php');
    }
    else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $senha2 = $mysqli->real_escape_string($_POST['senha2']);
        $tipo = $mysqli->real_escape_string($_POST['tipo']);
        $escola = $mysqli->real_escape_string($_POST['escola']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email';";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;
        if ($quantidade >=1){
            echo "email ja existe";
            header('location:cadastro.php');
        } else {

        if($senha == $senha2){

        
        
        $insert_usuario = "INSERT INTO usuarios(email,senha,escola,tipo_usuario) VALUES ('$email','$senha','$escola','$tipo');";
        $exec_insert_usuario = mysqli_query($mysqli,$insert_usuario);


        if($exec_insert_usuario === true) {
            
            //$usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }


            header("Location: inicio.php");

        } else {
            echo "Falha ao cadastrar!";
        }

    }}}

}
?>