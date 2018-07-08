<?php 
 session_start(); 
    include('../../config.php');
   
	if(isset($_POST['submit'])){ // if tum.okon ang submit button
        $lessonName = $_POST['lesson_name']; // kwa sang mga gn pang input sang user
        $lessonDescription = $_POST['lesson_description'];
        $lessonSubjectID = $_POST['lesson_subjectID'];
            mysqli_query($connect, "INSERT INTO lessons(lesson_name,lesson_description,lesson_subjectID) 
            VALUES('$lessonName','$lessonDescription','$lessonSubjectID')") or die(mysqli_error($connect)); //query nga para mag insert lesson
        echo "<script>alert('Lesson Added to Subject.');location.href='../subject.php?id=$lessonSubjectID'</script>";
        
    }
?>  