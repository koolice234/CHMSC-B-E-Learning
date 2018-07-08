<?php 
 session_start(); 
    include('../../config.php');
   
   
	if(isset($_POST['submit'])!=""){ // if tum.okon ang submit button
        $name=$_FILES['file']['name'];
        $fileinfo=PATHINFO($_FILES["file"]["name"]);
        $newFilename=$fileinfo['filename'] .".".  $fileinfo['extension'];
		$temp=$_FILES['file']['tmp_name']; // ang 4 ni ka linya amo ni mag fetch sang gn upload nga file kag butangan temporary nga name
		$title = $_POST['title'];
		$id = $_POST['id'];
    	$sid = $_POST['sid'];
		$location = "../../files/" . $newFilename; // butangan variable ang location para hapos kwaon
	 	move_uploaded_file($temp,"../../files/".$newFilename); // saylo ang gn upload nga file sa folder nga files/
            mysqli_query($connect, "INSERT INTO files(file_title,file_location,file_lessonID) 
            VALUES('$title','$location','$id')") or die(mysqli_error($connect)); //query nga ma insert isa ka file
      echo "<script>alert('File Added Succesfully');location.href='../lesson.php?id=$id&&sid=$sid'</script>";
        
    }
?>  