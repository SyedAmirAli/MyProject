<?php 

    $categoryName = $obj->display_catagory();


    if(isset($_POST['add_post'])){
        $msng = $obj->add_post($_POST);
    }


?>


<h1>Add Post Page</h1>
<?php if(isset($msng)){ echo $msng; } ?>


<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label class="mb-1" for="post_title">Post Title:</label>
        <input name="post_title" class="form-control py-4" id="post_title" type="text" />
    </div>
    
    <div class="form-group">
        <label class="mb-1" for="post_content">Post Content:</label>
        <textarea class="form-control" name="post_content" id="post_content" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label class="mb-1" for="post_imag">Upload Thumbnail:</label><br>
        <input name="post_imag" class="py-1 mb-2" id="post_imag" type="file"  /><!-- placeholder=" Upload-> a Thumbnail" -->
    </div>

    <div class="form-group">
        <label class="mb-1" for="post_catagory">Select a Post Catagory:</label>
        <select class="form-control" name="post_catagory" id="post_catagory">
            <?php while($category = mysqli_fetch_assoc($categoryName)){ ?>
                <option value="<?php echo $category['cat_id']; ?>">
                <?php echo $category['cat_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_summery">Post Summery:</label>
        <input name="post_summery" class="form-control py-4" id="post_summery" type="text" />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_tag">Post Tag:</label>
        <input name="post_tag" class="form-control py-4" id="post_tag" type="text"  />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_author">Phone or E-mail:</label>
        <input name="post_author" class="form-control py-4" id="post_author" type="text"  />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_status">Post Status:</label>
        <select class="form-control" name="post_status" id="post_status">
            <option value="1">Published!</option>
            <option value="0">UnPublished!</option>
        </select>
    </div>
    
    <input type="submit" name="add_post" value="Add Post!" class="mb-10 from-control btn btn-block btn-primary">

</form>