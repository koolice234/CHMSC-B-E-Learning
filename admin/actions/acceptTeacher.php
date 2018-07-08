<?php 
    include('../../config.php');
    $id = $_GET['id'];//kwaon ang ID sa gin pasa nga link
    mysqli_query($connect, "UPDATE teachers SET teacher_confirm = '1' WHERE teacher_ID = $id")or die(mysqli_error($connect));
    //update ang teacher_confirm na mag 1 para meaning confirmed na sa nga teacher
    echo "<script>alert('Teacher Confirmed Successfully');location.href='../teachers.php';</script>"
    //display ang localhost says: teacher confirm kag kadto sa link nga teachers.php
?>