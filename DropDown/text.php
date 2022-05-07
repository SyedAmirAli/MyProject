<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dash (DropDown)</title>


    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/625708b356.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
</head>


<body>
    <main>
        <div class="sidebar" id="sideBar">
            <div class="sidebar-main">

                <!-- -------------------------- left Sidebar -------------------------- -->

                <div class="left-sidebar" id="left-sidebar">
                    <div class="left-sidebar-main">
                        <div class="left-sidebar-down">
                            <div class="dashboard" id="dashboard">
                                <div class="dashboard-maina">
                                    <i class="bx bx-grid-alt"></i>
                                    <span>Dashboard</span>
                                </div>
                            </div>
                            <div class="category sidebar-title" id="category" onclick="CateGory()">
                                <div class="category-main txtColor">
                                    <a href="#">
                                        <i class="bx bx-collection"></i>
                                        <span>Category</span></a>
                                </div>
                            </div>
                            <div class="post sidebar-title">
                                <div class="post-main txtColor">
                                    <a href="#"><i class="bx bx-book-alt"></i>
                                        <span>Post</span></a>
                                </div>
                            </div>
                            <div class="item sidebar-title">
                                <div class="main-item txtColor">
                                    <a href="#"><i class="fa-solid fa-clipboard-user"></i>
                                        <span>Item</span></a>
                                </div>
                            </div>
                            <div class="chart sidebar-title">
                                <div class="chart-main txtColor"><a href="#"><i class="bx bx-line-chart"></i>
                                    <span>Chart</span></a>
                                </div>
                            </div>
                            <div class="analytics sidebar-title">
                                <div class="analytics-main txtColor"><a href="#"><i class="bx bx-pie-chart-alt-2"></i>
                                    <span>Analytics</span></a>
                                </div>
                            </div>
                            <div class="plugin sidebar-title">
                                <div class="plugin-main txtColor"><a href="#"><i class="fas fa-plug-circle-bolt"></i>
                                    <span>Plug In</span></a>
                                </div>
                            </div>
                            <div class="history sidebar-title">
                                <div class="history-main txtColor"><a href="#"><i class="fas fa- fa-history"></i>
                                    <span>History</span></a>
                                </div>
                            </div>
                            <div class="explore sidebar-title">
                                <div class="explore-main txtColor"><a href="#"><i class="bx bx-compass"></i>
                                    <span>Explore</span></a>
                                </div>
                            </div>
                            <div class="settings sidebar-title">
                                <div class="settings-main txtColor"><a href="#"><i class="fa-solid fa-gear"></i>
                                    <span>Settings</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- -------------------------- Top Sidebar -------------------------- -->

                <div class="top-sidebar">
                    <div class="top-sidebar-main">
                        <div class="top-sidebar-maina">
                            <div class="dashboard-main" id="dashboard-main">
                                <i class="bx bx-grid-alt"></i>
                                <span></span>
                            </div>


                            <nav>
                                <ul>
                                    <li><a href="#"> Home</a> </li>
                                    <li><a href="#"> PortFlio</a> </li>
                                    <li><a href="#"> About</a> </li>
                                    <!-- <li><a href="#"> Contact</a> </li> -->
                                </ul>
                            </nav>
                            <div class="search-box">
                                <div class="search-box-main">
                                    <input type="text" name="search_box" id="SearchBox" placeholder="Search Here...">
                                </div>
                            </div>

                            <div class="profile">
                                <div class="profle-main">
                                    <div class="img-pro online">
                                        <img class="pro-img " src="images/Amir.jpg">
                                    </div>

                                    <div class="pro-name">
                                        <h3 class="user-pro-name">Syed Amir Ali</h3>
                                        <div>
                                            <!-- <p class="sml-one">Proclamation <i class="fas fa-caret-down"></i></p> -->
                                            <p class="sml-two">Announce <i class="fas fa-caret-down"></i></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="dark-mode" id="darkMode">
                                <div class="dark-btn-name">
                                    <h6>Dark Mode</h6>
                                </div>
                                <div class="dark-btn" id="darkBtn">
                                    <div class="dark-btn-main" id="darkBtnMain">
                                        <span class="dark-btn-switch"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Main Body Text -->

                    <div class="main-bodyContainer" id="MainBodyContainer">
                        <?php
                        include_once("./IndexText.php");
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </main>


    <script src="JavaScript/main.js"></script>
</body>

</html>