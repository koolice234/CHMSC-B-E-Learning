<?php 
 session_start(); 
    include('../../config.php');
   	$id = $_GET['id'];
   	$sid = $_GET['sid'];
   	$fileID = $_GET['fileID']; // mag hambal ka $_GET[] meaning gina kwa mo ang gn pasa nga $id, $sid, $fileID
  	$filePath=urldecode($_REQUEST['file']); // pangitaon ya ang file halin sa link nga gn send sa button nga delete file
  	unlink($filePath); // delete ta ang file sa folder nga files/
    mysqli_query($connect, "DELETE FROM `files` WHERE file_ID = '$fileID'") or die(mysqli_error($connect)); // delete sa database sang file
    echo "<script>alert('File Delete Succesfully.');location.href='../lesson.php?id=$id&&sid=$sid'</script>";

?>  