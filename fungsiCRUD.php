<?php
include "function.php";

if(isset($_POST['tambahtodo'])){
    $task = $koneksi->real_escape_string($_POST['task']);
    $status = $koneksi->real_escape_string($_POST['status']);
    $priority = $koneksi->real_escape_string($_POST['priority']);
    $due_date = $koneksi->real_escape_string($_POST['due_date']);

    $sql = "INSERT INTO todolist (task, due_date, priority, status) VALUES ('$task', '$due_date', '$priority', '$status')";
    $query = $koneksi->query($sql);
    var_dump($query);
    if($query == true){
        header("Location: index.php");
    }else{
        echo "
            <script> alert ('tambah data gagal'); </script>
        ";
    }
}

if(isset($_POST["edittodo"])){
    $id = $_POST['id'];
    $task = $koneksi->real_escape_string($_POST['task']);
    $status = $koneksi->real_escape_string($_POST['status']);
    $priority = $koneksi->real_escape_string($_POST['priority']);
    $due_date = $koneksi->real_escape_string($_POST['due_date']);

    $sql = "UPDATE todolist SET task='$task', due_date='$due_date', priority='$priority', status='$status' WHERE id='$id'";
    $query = $koneksi->query($sql);
    var_dump($query);
    if($query == true){
        header("Location: index.php");
    }else{
        echo "
            <script> alert ('edit data gagal'); </script>
        ";
    }
}

if(isset($_GET['hapus'])){
    $id= $_GET['hapus'];
    $query = mysqli_query($koneksi, "DELETE FROM todolist WHERE id='$id'");
    header("Location: index.php");
}

?>