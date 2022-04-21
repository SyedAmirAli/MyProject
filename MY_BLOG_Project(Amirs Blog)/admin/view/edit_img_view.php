<?php 

    if(isset($_GET['status'])){
        if($_GET['status'] == 'editimg'){
            $id = $_GET['id'];
        }
    }

    if(isset($_POST['update_img'])){
        $msg = $obj->edit_imge($_POST);
    }

?>





<div class="shadow m-5 p-5">
    <form action="" method="POST" enctype="multipart/form-data" class="form">
    
    <?php if(isset($msg)){ echo $msg; } ?>
    <input type="hidden" name="img_ida" value="<?php echo $id; ?>">
    <div class="form-group">
        <label class="mb-1" for="change_img">Change Image:</label><br>
        <input name="change_img" class="py-4" id="change_img" type="file" />
    </div>
    <input type="submit" name="update_img" value="Update Thumbnail" class="from-control btn btn-block btn-info">

    </form>
</div>