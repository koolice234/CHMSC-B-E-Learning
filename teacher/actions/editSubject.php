<?php //update sang subject details
    include('../../config.php');
	if(isset($_POST['submit'])){
            $subjectID = $_POST['subjectID'];
            $subjectName = $_POST['subjectName'];
            $subjectDescription = $_POST['subjectDescription'];
        mysqli_query($connect, "UPDATE subjects 
            SET subject_Name = '$subjectName', 
            subject_Description = '$subjectDescription'
            WHERE subject_ID = $subjectID")or die(mysqli_error($connect));
        echo "<script>alert('Subject Updated Successfully'); location.href='../subject.php?id=$subjectID';</script>";
    }

?>