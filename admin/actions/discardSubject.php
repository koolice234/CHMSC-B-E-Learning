<?php 
    include('../../config.php');
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM subjects WHERE subject_ID = $id")or die(mysqli_error($connect));
    echo "<script>alert('Subject Deleted Successfully');location.href='../teachers.php';</script>"

    //delete ang subject nga base sa $id nga gn pasa sa link
?>