<?php 
    include('../../config.php');
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM teachers WHERE teacher_ID = $id")or die(mysqli_error($connect));
    echo "<script>alert('Teacher Deleted Successfully');location.href='../teachers.php';</script>"

    //delete ang teacher nga base sa $id nga gn pasa sa link
?>