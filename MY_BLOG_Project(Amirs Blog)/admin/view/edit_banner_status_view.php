<?php 

    if(isset($_GET['BannerStatus'])){
        if($_GET['BannerStatus'] == 'editbannerimg'){
            $id = $_GET['id'];
            $postdata = $obj->get_banner_status($id);
        }
    }

    if(isset($_POST['change_banner_status'])){
        $msg = $obj->banner_status($_POST);
    }


?>






<h1>Change Status View:</h1>
<?php if(isset($msg)){ echo $msg; } ?>

<form action="" method="POST">

<input type="hidden" name="my_bannar_id" value="<?php echo $id; ?>">
<div class="form-group">
    <label class="mb-1" for="my_banner_status">Post Status:</label>
    <select class="form-control" name="my_banner_status" id="post_status">
        <option value="1">Published!</option>
        <option value="0">UnPublished!</option>
    </select>
</div>

<input type="submit" name="change_banner_status" value="Update Status!" class="mb-10 from-control btn btn-block btn-success">

</form>
<br>
<a href="./manage_heading.php"><button class="form-control btn btn-block btn-primary">Go To Manage Banner!</button></a>
    <br><br>














