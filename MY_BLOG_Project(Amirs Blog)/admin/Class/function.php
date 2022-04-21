<?php


Class adminBlog
    {
        private $conn;

        public function __construct()
        {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'blogproject';

            $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
            if(!$this->conn){
                die ("Database Connection Error...!");
            }
        }

        public function admin_login($data){
            $admin_email = $data['admin_email'];
            $admin_pass = md5($data['admin_pass']);

            $query = "SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass' ";

            if(mysqli_query($this->conn, $query)){
                $admin_info = mysqli_query($this->conn, $query);

                if($admin_info){
                    header("location:dashboard.php");
                    $admin_data = mysqli_fetch_assoc($admin_info);
                    session_start();
                    $_SESSION['adninID'] = $admin_data['id'];
                    $_SESSION['admin_name'] = $admin_data['admin_name'];


                }
            }
        }

        public function adminLogout(){
            unset($_SESSION['adninID']);
            unset($_SESSION['adnin_name']);
            header ("location: index.php");
        }


        public function add_catagory($data){
            $cat_name = $data['cat_name']; 
            $cat_des = $data['cat_des'];

            $query = "INSERT INTO catagory(cat_name,cat_des) VALUE('$cat_name','$cat_des')";

            if(mysqli_query($this->conn, $query)){
                return "Catagorey Added Successfully";
            }
        }

        public function display_catagory(){

            $query = "SELECT * FROM catagory";
            if(mysqli_query($this->conn, $query)){
                $catagory = mysqli_query($this->conn, $query);
                return $catagory;
            }
        } 

        public function delete_cat($id){

            $query = "DELETE FROM catagory WHERE cat_id=$id";

            if(mysqli_query($this->conn, $query)){
                return "Catagory Deleted Successfully!";
            }
        }

                //CHANGE by EDIT Button!


        public function get_cat_data($id){
            $query = "SELECT * FROM catagory WHERE cat_id=$id";
            if(mysqli_query($this->conn, $query)){
                $cat_inf = mysqli_query($this->conn, $query);
                $cata = mysqli_fetch_assoc($cat_inf);
                return $cata;
            }
        }

        public function update_catagory($data){

            $cat_id = $data['u_cat_id'];
            $cat_name = $data['u_cat_name'];
            $cat_des = $data['u_cat_des'];

            $query = "UPDATE catagory SET cat_name='$cat_name', cat_des='$cat_des' WHERE cat_id=$cat_id";

            if(mysqli_query($this->conn, $query)){
                return "Catagory Updated Successfully";
            }
        }

                                //Edit Button Close!


        public function add_post($data){
        
            $post_title = $data['post_title'];
            $post_content = $data['post_content'];
            $post_img = $_FILES['post_imag']['name'];
            $post_img_tmp = $_FILES['post_imag']['tmp_name'];
            $post_catagory = $data['post_catagory'];
            $post_summery = $data['post_summery'];
            $post_tag = $data['post_tag'];
            //
            $post_author = $data['post_author'];
            $post_status = $data['post_status'];

            $query = "INSERT INTO posts(post_title, post_content, post_img, post_ctg, post_author, post_date, post_comment_count, post_summery, post_tag, post_status) VALUES('$post_title', '$post_content', '$post_img', $post_catagory, '$post_author', now(), 3, '$post_summery', '$post_tag', $post_status) ";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($post_img_tmp,'../picture/'.$post_img);
                return "Post Added Successfully. Done..!";
                //return $query;
                
            }
        }
        
        public function display_pots(){

            $query = "SELECT * FROM post_with_ctg";

            if(mysqli_query($this->conn, $query)){
                $posts = mysqli_query($this->conn, $query);
                return $posts;
            }
        }

        public function display_posts_public(){

            $query = "SELECT * FROM post_with_ctg WHERE post_status=1";

            if(mysqli_query($this->conn, $query)){
                $posts = mysqli_query($this->conn, $query);
                return $posts;
            }
        }

                                //My Try

        public function delete_post($id){

            $query = "DELETE FROM posts WHERE post_id=$id";
                            
            if(mysqli_query($this->conn, $query)){
                return "Post Deleted Successfully!";
            }
        }

        public function edit_imge($data){

            $edit_id = $data['img_ida'];
            $edit_img = $_FILES['change_img']['name'];
            $tmp_img_nmae = $_FILES['change_img']['tmp_name'];

            $query = "UPDATE posts SET post_img='$edit_img' WHERE post_id=$edit_id";
            
            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_img_nmae,'../picture/'.$edit_img);
                return "Thumnail Uploaded Successfully. Done..!";
            }
        }

        public function get_post_info($id){

            $query = "SELECT * FROM post_with_ctg WHERE post_id=$id";

            if(mysqli_query($this->conn, $query)){
                $post_info = mysqli_query($this->conn, $query);
                $get_post = mysqli_fetch_assoc($post_info);
                return $get_post;
            }
        }

        public function update_posta($data){
            $post_title = $data['change_title'];
            $post_content = $data['change_content'];
            $post_tag = $data['change_tag'];
            $post_ctg = $data['change_catagory'];
            //
            $post_author = $data['change_author'];
            $post_id = $data['post_id'];

            $query = "UPDATE posts SET post_title='$post_title', post_content='$post_content', post_tag='$post_tag', post_ctg=$post_ctg, post_author='$post_author' WHERE post_id=$post_id";
            
            if(mysqli_query($this->conn, $query)){
                return "Post Updated Successfully!";
            }

        }

        public function get_post_status($id){

            $query = "SELECT * FROM post_with_ctg WHERE post_id=$id";

            if(mysqli_query($this->conn, $query)){
                $post_info = mysqli_query($this->conn, $query);
                $get_poste = mysqli_fetch_assoc($post_info);
                return $get_poste;
            }

        }

        public function update_status($data){
            $post_status = $data['post_status'];
            $post_id = $data['post_id'];

            $query = "UPDATE posts SET post_status='$post_status' WHERE post_id=$post_id";
            
            if(mysqli_query($this->conn, $query)){
                return "Post Updated Successfully!";
            }
        }

        public function add_banner($data){

            $banner_img = $_FILES['banner_img']['name'];
            $tmp_name_img = $_FILES['banner_img']['tmp_name'];
            $banner_category = $data['banner_category'];
            $banner_title = $data['banner_title'];
            $banner_author = $data['banner_author'];
            // Date Included !
            $banner_comment = $data['banner_comment'];
            $banner_status = $data['banner_status'];
            //NOT INCLUDED banner_free ROWs

            $query = "INSERT INTO banner(banner_img, banner_ctg, banner_titlte, banner_author, banner_date, banner_cmnt, banner_status) VALUES('$banner_img','$banner_category','$banner_title','$banner_author',now(),'$banner_comment','$banner_status')";


            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name_img, 'banner_pic/'.$banner_img);
                return "I GOT THE SOLLUTION AFTER A LOT OF HARD WORK..!";
            }
        }

        public function displayBanner(){

            $query = "SELECT * FROM banner";

            if(mysqli_query($this->conn, $query)){
                $banners = mysqli_query($this->conn, $query);
                return $banners;
            }
        }

        public function delete_banner($id){

            $query = "DELETE FROM banner WHERE banner_id =$id";
                            
            if(mysqli_query($this->conn, $query)){
                return "Banner Deleted Successfully!";
            }
        }

        public function get_banner_data($id){

            $query = "SELECT * FROM banner WHERE banner_id=$id";

            if(mysqli_query($this->conn, $query)){
                $banner_info = mysqli_query($this->conn, $query);
                $bannerInfo = mysqli_fetch_assoc($banner_info);
                return $bannerInfo;
            }
        }

        public function UpdateBanner($data){

            $bnnner_id = $data['my_banner_id'];
            $bnnner_ctg = $data['my_banner_category'];
            $bnnner_title = $data['my_banner_title'];
            $bnnner_author = $data['my_banner_author'];
            $bnnner_cmnt = $data['my_banner_comment'];

            $query = "UPDATE banner SET banner_ctg='$bnnner_ctg', banner_titlte='$bnnner_title', banner_author='$bnnner_author', banner_cmnt='$bnnner_cmnt' WHERE banner_id=$bnnner_id";

            if(mysqli_query($this->conn, $query)){
                return "Banner Update Successfully";
            }
        }

        public function get_banner_img($data){

            $banner_id = $data['my_bannar_id'];
            $banner_img = $_FILES['my_banner_img']['name'];
            $banner_img_tmp = $_FILES['my_banner_img']['tmp_name'];

            $query = "UPDATE banner SET banner_img='$banner_img' WHERE banner_id=$banner_id";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($banner_img_tmp, 'banner_pic/'.$banner_img);
                return "Image Changed Successfully!";
            }
        }

        public function get_banner_status($id){

            $query = "SELECT * FROM banner WHERE banner_id=$id";

            if(mysqli_query($this->conn, $query)){
                $post_info = mysqli_query($this->conn, $query);
                $get_poste = mysqli_fetch_assoc($post_info);
                return $get_poste;
            }

        }

        public function banner_status($data){

            $banner_id = $data['my_bannar_id'];
            $banner_status = $data['my_banner_status'];
            

            $query = "UPDATE banner SET banner_status='$banner_status' WHERE banner_id=$banner_id";

            if(mysqli_query($this->conn, $query)){
                return "Status Changed Successfully!";
            }
        }

        public function BannerDisplayByStatus(){

            $query = "SELECT * FROM banner WHERE banner_status=1";

            if(mysqli_query($this->conn, $query)){
                $bannerDisplay = mysqli_query($this->conn, $query);
                return $bannerDisplay;
            }
        }

    }




?>