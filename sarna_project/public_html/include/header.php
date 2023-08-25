<?php include('admin/include/config.php'); ?>
<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>sarna Agency</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images2/logo.jpg">
        
        <!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/jquery.exzoom.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <style>
              
        /* .header_top {
            background-color: #7a0095 !important;
        }

        .choose::before {
            background-color: rgb(122 0 149 / 71%);
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
        }

        .categorie_banner_title h3::before {
            background-color: #7a0095 !important;

        }

        .product_tab_button ul li a.active::before,
        .product_three .btn_quickview a:hover {
            background-color: #7a0095 !important;

        }

        .slider_three.owl-carousel .owl-dots .owl-dot.active {
            background: #7a0095;
        }

        .slider_three.owl-carousel .owl-nav div:hover {
            background-color: #7a0095;

            color: #fff;
        }

        .footer_area.footer_three {
            padding-top: 30px;
            background: #333;
            background-image: linear-gradient(#360070, #210029), url(../img/footer_overlay.png);
            background-color: #f5f5f5;
            background-blend-mode: multiply;
        }

        #scrollUp {
            background-color: #7a0095 !important;


        }

        #scrollUp:hover {
            background-color: #7a0095 !important;


        }

        .shipping_icone span,
        .footer_three .single_footer ul li a:hover,
        .footer_three .tag_block ul li a:hover {
            color: #360070!important;
        } */


        /*!!!!!!!!!!!!!!!!!!!!!!!! option 2 !!!!!!!!!!!!!!!!!!!!! */

        .header_top {
            background-color: #AD342A !important;
        }

        .choose::before {
            background-color: #ad342ae3;
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
        }

        .categorie_banner_title h3::before {
            background-color: #AD342A !important;

        }

        .product_tab_button ul li a.active::before,
        .product_three .btn_quickview a:hover {
            background-color: #AD342A !important;

        }

        .slider_three.owl-carousel .owl-dots .owl-dot.active {
            background: #AD342A;
        }

        .slider_three.owl-carousel .owl-nav div:hover {
            background-color: #AD342A;

            color: #fff;
        }

        .footer_area.footer_three {
            padding-top: 30px;
            background: #333;
            background-image: linear-gradient(#ad342a, #ad342a), url(../img/footer_overlay.png);
            background-color: #AD342A;
            background-blend-mode: multiply;
        }

        #scrollUp {
            background-color: #AD342A !important;


        }

        #scrollUp:hover {
            background-color: #AD342A !important;


        }

        .shipping_icone span,
        .footer_three .single_footer ul li a:hover,
        .footer_three .tag_block ul li a:hover {
            color: #AD342A!important;
        }



        /* option  3 */
        /* .header_top {
            background-color: #0d7d8b !important;
        }

        .choose::before {
            background-color: #0d7d8bd9;
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
        }

        .categorie_banner_title h3::before {
            background-color: #0d7d8b !important;

        }

        .product_tab_button ul li a.active::before,
        .product_three .btn_quickview a:hover {
            background-color: #0d7d8b !important;

        }

        .slider_three.owl-carousel .owl-dots .owl-dot.active {
            background: #0d7d8b;
        }

        .slider_three.owl-carousel .owl-nav div:hover {
            background-color: #0d7d8b;

            color: #0d7d8b;
        }

        .footer_area.footer_three {
            padding-top: 30px;
            background: #333;
            background-image: linear-gradient(#360070, #210029), url(../img/footer_overlay.png);
            background-color: #f5f5f5;
            background-blend-mode: multiply;
        }

        #scrollUp {
            background-color:#0d7d8b !important;


        }

        #scrollUp:hover {
            background-color: #0d7d8b !important;


        }

        .shipping_icone span,
        .footer_three .single_footer ul li a:hover,
        .footer_three .tag_block ul li a:hover {
            color: #0d7d8b!important;
        } */
    </style>
    
    
    
    </head>
    <body>
            
            <!--header area start-->
            <header class="header_area">

                <div class="header_top" style="background:#fc4b46;">
                    <div class="container">   
                        <div class="row align-items-center">

                            <div class="col-lg-6 col-md-6">
                                <div class="welcome_text">
                                    <?php 
                                        $select = "SELECT * FROM about";
                                        $query = mysqli_query($conn,$select);
                                        while($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href=""><i class="ion-ios-telephone"></i> <?php echo $row['phone'];?></a></li>
                                        <li class="list-inline-item"> | </li>
                                        <li class="list-inline-item"><a><i class="ion-ios-email"></i> <?php echo $row['email'];?></a></li>
                                    </ul>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="footer_social header_social">
                                    <ul class="text-center text-md-right">
                                        <li><a href="#" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#" target="_blank"><img src="assets/img/linkdin.png" style="width:20px !important; margin-top:-6px;"></a></li>
                                        <li><a href="#" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                                
                <!--header middel start-->
                <div class="header_middel middel_three p-0" style="background: white;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/images2/logo.jpg" style="width:90px; margin:5px 0;" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="main_menu_inner">
                                    <img src="assets/img/menu-icon.png" class="menu-icon">
                                    <div class="main_menu d-none d-lg-block"> 
                                        <ul class="text-right" id="menubar">
                                            <li id="home"><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="category.php">Categories <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                              
                                                <?php
                                                $query = "SELECT * FROM `category` order by id DESC";
                                                $Product_data = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                                    while ($row = mysqli_fetch_array($Product_data))
                                                  {
                                                    $id=$row['id'];
                                                    $title=$row['title'];
                                                ?>
                                                    <li><a href="sub_category.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></li>
                                                   <?php }?>
                                                </ul>
                                            </li>
                                            <li><a href="clients.php">Clients</a></li>           
                                            <li><a href="contact.php">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--header middel end-->
                
            </header>
            <!--header area end-->

            