<?php 



    if(isset($_POST['add_banner'])){
        $successfull_msg = $obj->add_banner($_POST);
    }

    




?>




<h2>Add Banner:</h2>
<p>
<?php if(isset($successfull_msg)){ echo $successfull_msg; } ?>
</p>

<div>
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label class="mb-1" for="banner_img">Add Thumbnail:</label><br>
            <input name="banner_img" class="py-1 mb-2" id="banner_img" type="file">

        </div>

        <div class="form-group">
            <label class="mb-1" for="banner_category">Banner Category:</label>
            <input name="banner_category" class="form-control" id="banner_category" type="text">
        </div>
        
        <div class="form-group">
            <label class="mb-1" for="banner_title">Banner Title:</label>
            <input class="form-control" name="banner_title" id="banner_title" type="text">
        </div>

        <div class="form-group">
            <label class="mb-1" for="banner_author">Banner Author:</label>
            <input class="form-control" name="banner_author" id="banner_author" type="text">
        </div>

        <div class="form-group">
            <label class="mb-1" for="banner_comment">Banner Comment:</label>
            <input class="form-control" name="banner_comment" id="banner_comment" type="text">
        </div>
        
        <div class="form-group">
            <label class="mb-1" for="banner_status">Banner Status:</label>
            <select class="form-control" name="banner_status" id="banner_status">
                <option value="1">Published!</option>
                <option value="0">UnPublished!</option>
            </select>
        </div><br>

        <input type="submit" class="form-control btn btn-block btn-success" name="add_banner" value="Add Banner!"><br><br>
            
    </form>
</div>