<?php  


    if(isset($_GET['BannerEditStatus'])){
        if($_GET['BannerEditStatus'] = 'editbanner'){
            $id = $_GET['id'];
            $Banner = $obj->get_banner_data($id);
        }
    }

    if(isset($_POST['update_banner'])){
        $successfull_msg = $obj->UpdateBanner($_POST);
    }


?>


<h2>Edit Banner:</h2>
<p>
<?php if(isset($successfull_msg)){ echo $successfull_msg; } ?>
</p>

<div>
    <form action="" method="POST">

        <input type="hidden" name="my_banner_id" id="my_banner_id" value="<?php echo $Banner['banner_id']; ?>">

        <div class="form-group">
            <label class="mb-1" for="my_banner_category">Banner Category:</label>
            <input name="my_banner_category" class="form-control" id="my_banner_category" type="text" value="<?php echo $Banner['banner_ctg']; ?>">
        </div>
        
        <div class="form-group">
            <label class="mb-1" for="my_banner_title">Banner Title:</label>
            <input class="form-control" name="my_banner_title" id="my_banner_title" type="text" value="<?php echo $Banner['banner_titlte']; ?>">
        </div>

        <div class="form-group">
            <label class="mb-1" for="my_banner_author">Banner Author:</label>
            <input class="form-control" name="my_banner_author" id="my_banner_author" type="text" value="<?php echo $Banner['banner_author']; ?>">
        </div>

        <div class="form-group">
            <label class="mb-1" for="my_banner_comment">Banner Comment:</label>
            <input class="form-control" name="my_banner_comment" id="my_banner_comment" type="text" value="<?php echo $Banner['banner_cmnt']; ?>">
        </div>
        

        <input type="submit" class="form-control btn btn-block btn-success" name="update_banner" value="Update Banner!">
            
    </form>
</div>
<br>
<a href="./manage_heading.php"><button class="form-control btn btn-block btn-primary">Go To Manage Banner!</button></a>
    <br><br>