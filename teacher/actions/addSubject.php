<?php 
 session_start(); 
    include('../../config.php');
   	//same sa add lesson nga comments
    $id = $_SESSION['session_id'];
	if(isset($_POST['submit'])){
        $courseName = $_POST['course_name'];
        $courseDescription = $_POST['course_description'];
            mysqli_query($connect, "INSERT INTO subjects(subject_name,subject_description,subject_confirmation,subject_teacherID) 
            VALUES('$courseName','$courseDescription','0','$id')") or die(mysqli_error($connect));
        echo "<script>alert('Please wait for the confirmation of the admin.');location.href='../subjects.php'</script>";
        
    }
?>  