<?php

$posts = $obj->display_posts_public();


?>


<div class="bg-color"></div>
<!-- <div class="col-lg-8"> -->
    <div class="all-blog-posts">
        <div class="row">
            <?php while($postdata = mysqli_fetch_assoc($posts)){ ?>
            <div class="col-lg-12">
                <div class="blog-post">
                    <div class="blog-thumb">
                    <img src="picture/<?php echo $postdata['post_img']; ?>" alt="">
                </div>
                <div class="down-content">
                    <span><?php echo $postdata['cat_name']; ?></span>
                    <a href="single_post.php?view=postview&&id=<?php echo $postdata['post_id']; ?>">
                        <h4><?php echo $postdata['post_title']; ?></h4>
                    </a>
                    <ul class="post-info">
                        <li><a href="#"><?php echo $postdata['post_author']; ?></a></li>
                        <li><a href="#"><?php echo $postdata['post_date']; ?></a></li>
                        <li><a href="#"><?php echo $postdata['post_comment_count']; ?> Comments</a></li>
                    </ul>
                    <p><?php echo $postdata['post_summery']; ?></p>
                    <div class="post-options">
                        <div class="row">
                            <div class="col-6">
                            <?php echo $postdata['post_tag']; ?>
                            </div>
                            <div class="col-6">
                                <ul class="post-share">
                                    <li><i class="fa fa-share-alt"></i></li>
                                    <li><a href="#">Facebook</a>,</li>
                                    <li><a href="#"> Twitter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php } ?>
        </div>
    </div>
<!-- </div> -->