<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
    include('../config.php')
?>
<div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
    <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Pending Registered Subject</h5>
                </div>
                <?php 
                    //ma fetch sang mga confirmed subjects nga may teacher_ID nga pareho sa naka login nga teacher kag
                    $connect = $connect->query("SELECT * FROM subjects INNER JOIN teachers 
                        ON subjects.subject_teacherID = teachers.teacher_ID
                         where subject_confirmation = '0'");
                    
                ?>
                    <table id="datatable-example" class="table table-striped table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Teacher</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($row = $connect->fetch_assoc()){ //while may isa ka row nga ginna fetch ang connect ma sige2 lang sa?>
                            <tr>
                                <td><?php echo $row['subject_Name']; //display ang subject name sang amo ni nga row?></td>
                                <td><?php echo $row['teacher_name']; //display ang teacher name sang amo ni nga row?></td>
                                <td>
                                    <a href="actions/acceptSubject.php?id=<?php echo $row['subject_ID']; ?>">
                                    <button class="btn btn-success">Accept</button></a>
                                    <a href="actions/discardSubject.php?id=<?php echo $row['subject_ID']; ?>">
                                    <button class="btn btn-danger">Discard</button></a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>