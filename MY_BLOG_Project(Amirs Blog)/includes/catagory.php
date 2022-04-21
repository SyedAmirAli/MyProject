<?php 

    $categoryName = $obj->display_catagory();


?>

<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">
          <ul>

                      <!--  it's  work -->
            <?php while($category = mysqli_fetch_assoc($categoryName)){ ?>
              <li><a href="#"><?php echo $category['cat_name']; ?></a></li>
            <?php }?>
            
            <!-- 
            <li><a href="#">- Nature Lifestyle</a></li>
            <li><a href="#">- Awesome Layouts</a></li>
            <li><a href="#">- Nature Lifestyle</a></li>
            <li><a href="#">- Responsive Templates</a></li>
            <li><a href="#">- HTML5 / CSS3 Templates</a></li>
            <li><a href="#">- Creative  Unique</a></li> 
            -->

          </ul>
        </div>
    </div>
</div>
