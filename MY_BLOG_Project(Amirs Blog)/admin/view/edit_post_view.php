<?php 

    $categoryNames = $obj->display_catagory();

    if(isset($_GET['status'])){
        if($_GET['status'] == 'editopost'){
            $id = $_GET['id'];
            $postdata = $obj->get_post_info($id);
        }
    }

    if(isset($_POST['update_post'])){
        $return_msg = $obj->update_posta($_POST);
    }


?>







<h1>Edit Post Page</h1>
    <?php if(isset($return_msg)){ echo $return_msg; } ?>

<form action="" method="POST">
    <div class="form-group">
    <input type="hidden" name="post_id" value="<?php echo $id; ?>">
    </div>
    <div class="form-group">
        <label class="mb-1" for="change_title">Post Title:</label>
        <input name="change_title" value="<?php echo $postdata['post_title']; ?>" class="form-control py-4" id="change_title" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="change_content">Post Content:</label>
        <textarea class="form-control" name="change_content" id="change_content"  cols="30" rows="10">
        <?php echo $postdata['post_content']; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label class="mb-1" for="change_tag">Post Tag:</label>
        <input name="change_tag" value="<?php echo $postdata['post_tag']; ?>" class="form-control py-4" id="change_title" type="text" />
    </div>
                                <!-- Author -->
    <div class="form-group">
        <label class="mb-1" for="change_author">Post Author:</label>
        <input name="change_author" value="<?php echo $postdata['post_author']; ?>" class="form-control py-4" id="change_title" type="text" />
    </div>

    <div class="form-group">

        <label class="mb-1" for="change_catagory">Select a Post Catagory:</label>
            <select class="form-control" name="change_catagory" id="change_catagory">
                <?php while($category = mysqli_fetch_assoc($categoryNames)){ ?>
                    <option value="<?php echo $category['cat_id']; ?>">
                    <?php echo $category['cat_name']; ?></option>
                <?php } ?>
            </select>
    
    </div>
    

    
        <input type="submit" name="update_post" value="Update Post" class="from-control btn btn-block btn-warning">

</form>