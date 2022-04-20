<?php 

    if(isset($_GET['status'])){
        if($_GET['status'] == 'editststus'){
            $id = $_GET['id'];
            $postdata = $obj->get_post_status($id);
        }
    }

    if(isset($_POST['change_status'])){
        $msg = $obj->update_status($_POST);
    }


?>






<h1>Change Status View:</h1>
<?php if(isset($msg)){ echo $msg; } ?>

<form action="" method="POST">

<input type="hidden" name="post_id" value="<?php echo $id; ?>">
<div class="form-group">
    <label class="mb-1" for="post_status">Post Status:</label>
    <select class="form-control" name="post_status" id="post_status">
        <option value="1">Published!</option>
        <option value="0">UnPublished!</option>
    </select>
</div>

<input type="submit" name="change_status" value="Update Status!" class="mb-10 from-control btn btn-block btn-success">

</form>














