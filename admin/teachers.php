<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
    include('../config.php')
    //same mani sa subjects nga mga comments 
?>
<div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
    <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Pending Registered Teachers</h5>
                </div>
                <?php 
                    $connect = $connect->query("SELECT * FROM teachers where teacher_confirm = '0'");
                    
                ?>
                    <table id="datatable-example" class="table table-striped table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($row = $connect->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $row['teacher_name']; ?></td>
                                <td>
                                    <a href="actions/acceptTeacher.php?id=<?php echo $row['teacher_ID']; ?>">
                                    <button class="btn btn-success">Accept</button></a>
                                    <a href="actions/discardTeacher.php?id=<?php echo $row['teacher_ID']; ?>">
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