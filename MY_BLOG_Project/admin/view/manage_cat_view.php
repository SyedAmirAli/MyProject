<?php  

    $catdata = $obj->display_catagory();

    if(isset($_GET['status'])){
        if($_GET['status'] == 'delete'){
            $delid = $_GET['id'];
            $msg = $obj->delete_cat($delid);
        }
    }


?>

<h1>Manage Catagory Page</h1>
<?php if(isset($msg)){ echo $msg; } ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Catagory Name</th>
            <th>Catagory Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($cat = mysqli_fetch_assoc($catdata)){ ?>
        <tr>
            <th><?php echo $cat['cat_id']; ?></th>
            <th><?php echo $cat['cat_name']; ?></th>
            <th><?php echo $cat['cat_des']; ?></th>
            <th>

                <a href="edit_catagory.php ?status=editcatagory&&id=<?php echo $cat['cat_id']; ?>" class="btn btn-warning">Edit</a>
                <a href="?status=delete&&id=<?php echo $cat['cat_id']; ?>" class="btn btn-danger">Delete</a>
            </th>
        </tr>
        <?php } ?>
    </tbody>

</table>