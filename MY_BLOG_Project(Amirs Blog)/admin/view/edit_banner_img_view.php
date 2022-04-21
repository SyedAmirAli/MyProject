<?php  


    if(isset($_GET['BannerImgStatus'])){
        if($_GET['BannerImgStatus'] = 'editbannerimg'){
            $id = $_GET['id'];
        }
    }

    if(isset($_POST['Change_banner_img'])){
        $successfull_msg = $obj->get_banner_img($_POST);
    }


?>


<h2>Edit Banner:</h2>
<p>
<?php if(isset($successfull_msg)){ echo $successfull_msg; } ?>
</p>

<div>
    <form action="" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="my_bannar_id" id="my_banner_id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label class="mb-1" for="my_banner_img">Change Banner Image:</label><br>
            <input name="my_banner_img" id="my_banner_img" type="file">
        </div>
        
        
        <input type="submit" class="form-control btn btn-block btn-success" name="Change_banner_img" value="Change Banner Image! ">
            
    </form>
</div>
<br>
<a href="./manage_heading.php"><button class="form-control btn btn-block btn-primary">Go To Manage Banner!</button></a>
    <br><br>