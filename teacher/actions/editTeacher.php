<?php 
    include('../../config.php');
	if(isset($_POST['submit'])){
        if($_FILES['image']['name']!=""){ //if my gin butang nga file sa file button
            $fileinfo=PATHINFO($_FILES["image"]["name"]);
            $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
            move_uploaded_file($_FILES["image"]["tmp_name"],"../../images/" . $newFilename); // ang first 3 lines amo ni mag upload image
                $location="../images/" . $newFilename; // butangan location kag save sa database
                $username = $_POST['username'];
                $fullName = $_POST['fullName'];
                $password = $_POST['password'];
                $teacherID = $_POST['teacherID'];
            mysqli_query($connect, "INSERT INTO images(img_location) VALUES('$location')")
            or die(mysqli_error($connect));
                $result = $connect->query("SELECT MAX(imageid) FROM images");
                $row = $result->fetch_assoc();
                $imageid =$row['MAX(imageid)'];
            mysqli_query($connect, "UPDATE teachers INNER JOIN users 
                ON teachers.teacher_userID = users.user_ID 
                SET teachers.teacher_name = '$fullName', 
                users.user_username = '$username',
                teachers.teacher_img = '$imageid', 
                users.user_password = '$password' ,users.user_fullname = '$fullName'
                WHERE teachers.teacher_ID = $teacherID")or die(mysqli_error($connect));
            echo "<script>alert('Teacher Updated Successfully'); location.href='../profile-edit.php';</script>";
        }else{ // if wala may gn butang sa file button ma update lang ang details pero ang picture amo gyapon
                $username = $_POST['username'];
                $fullName = $_POST['fullName'];
                $password = $_POST['password'];
                $teacherID = $_POST['teacherID'];
            mysqli_query($connect, "UPDATE teachers INNER JOIN users 
            ON teachers.teacher_userID = users.user_ID 
            SET teachers.teacher_name = '$fullName', 
                users.user_username = '$username',
                users.user_password = '$password',
                users.user_fullname = '$fullName'
            WHERE teachers.teacher_ID = $teacherID")or die(mysqli_error($connect));
            echo "<script>alert('Teacher Updated Successfully'); location.href='../profile-edit.php';</script>";
        }
    }

?>