<?php 
    include('../../config.php'); 
    $id = $_GET['id']; //kwaon ang ID sa gin pasa nga link
    mysqli_query($connect, "UPDATE subjects SET subject_confirmation = '1' WHERE subject_ID = $id")or die(mysqli_error($connect)); //update ang subject_confirmation na mag 1 para meaning confirmed na sa nga subjects
    echo "<script>alert('Subject confirmed Successfully');location.href='../subjects.php';</script>"
    //display ang localhost says: subject confirm kag kadto sa link nga subjects.php
?>