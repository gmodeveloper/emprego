<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

include './conn.php';

$categoria = $_POST['categoria'];
$salario = $_POST['salario'];
$turno = $_POST['turno'];
$dias = implode(",",$_POST['dia']);
$habilidades = $_POST['habilidades'];

if (!isset($id)) {
    if(!empty($_FILES['foto'])){
        $foto = $_FILES['foto']['tmp_name'];
        $destino = './img/users/' . $_FILES['foto']['name'];
        $row = $conn->query("INSERT INTO vagas (categoria, salario, turno, dias, habilidades,foto) VALUES ('$categoria', '$salario', '$turno', '$dias','$habilidades','$destino')");
        move_uploaded_file( $foto, $destino);
    }else{
        $row = $conn->query("INSERT INTO vagas (categoria, salario, turno, dias, habilidades) VALUES ('$categoria', '$salario', '$turno', '$dias','$habilidades')");
    }
    
} else {
    if(!empty($_FILES['foto'])){
        $foto = $_FILES['foto']['tmp_name'];
        $destino = './img/users/' . $_FILES['foto']['name'];
        $row = $conn->query("UPDATE vagas SET categoria='$categoria', salario='$salario',turno='$turno',dias='$dias',habilidades='$habilidades',foto='$foto' WHERE id='".$id ."' ");
        move_uploaded_file( $foto, $destino);
    }else{
        $row = $conn->query("UPDATE vagas SET categoria='$categoria', salario='$salario',turno='$turno',dias='$dias',habilidades='$habilidades' WHERE id='".$id ."' ");    
    }
}

if ($row == true) {
    setcookie("action", "cadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
} else {
    setcookie("action", "naocadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
}