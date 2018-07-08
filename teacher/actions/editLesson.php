<?php //update sang lesson details
    include('../../config.php');
	if(isset($_POST['submit'])){
            $sid = $_POST['subjectID'];
            $lessonID = $_POST['lessonID'];
            $lessonName = $_POST['lessonName'];
            $lessonDescription = $_POST['lessonDescription'];
        mysqli_query($connect, "UPDATE lessons 
            SET lesson_Name = '$lessonName', 
            lesson_Description = '$lessonDescription'
            WHERE lesson_ID = $lessonID")or die(mysqli_error($connect));
        echo "<script>alert('Lesson Updated Successfully'); location.href='../subject.php?id=$sid';</script>";
    }

?>