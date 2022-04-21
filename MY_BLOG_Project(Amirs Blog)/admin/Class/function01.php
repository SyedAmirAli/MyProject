<?php

    class BlogBanner
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

        public function add_banneer($data){

            $banner_img = $_FILES['banner_img']['name'];
            $tmp_name_img = $_FILES['banner_img']['tmp_name'];
            $banner_category = $data['banner_category'];
            $banner_title = $data['banner_title'];
            $banner_author = $data['banner_author'];
            // Date Included !
            $banner_comment = $data['banner_comment'];
            $banner_status = $data['banner_status'];
            //NOT INCLUDED banner_free ROWs

            $query = "INSERT INTO banner(banner_img, banner_ctg, banner_titlte, banner_author, banner_date, banner_cmnt, banner_status) VALUES('$banner_img','$banner_category','$banner_title','$banner_author',now(),$banner_comment,$banner_status)";

            //$query = "INSERT INTO banner(banner_img, banner_ctg, banner_titlte, banner_author, banner_date, banner_cmnt, banner_status) VALUES('$banner_img', '$banner_category', '$banner_title', '$banner_author', now(), $banner_comment, $banner_status) ";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name_img, 'banner_pic'.$banner_img);
                return "Everything Is OK..!";
            }
        }


    }






?>