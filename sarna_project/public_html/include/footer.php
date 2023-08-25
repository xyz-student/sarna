<!--footer area start-->
    <div class="footer_area footer_three" style="padding:50px 0 0;">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                   
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single_footer">
                            <img src="assets/images2/logo.jpg" style="width:120px;display: block;    margin-top: 35px; background: #fff; padding:10px;">
                            
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single_footer">
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="category.php">All Categories</a></li>
                                <li><a href="">Gallery</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                     <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="single_footer">
                            <h3>Top Category</h3>
                            <ul>
                                <?php 
                                include('config.php');
                                $query = "SELECT * FROM `top_category` order by id ASC LIMIT 4";
                                $Product_data = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    while ($row = mysqli_fetch_array($Product_data)) {
                                ?>

                                <li><a href="burner.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="single_footer">
                            <h3>Top Products</h3>
                            <ul>
                                <li><a href="">Gas Burner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-8">
                        <div class="single_footer">                                 
                            <div class="footer_desc">
                                <h3>About Us</h3>
                                
                            </div>
                            <div class="footer_contact">
                                <ul>
                                <?php 
                                    $select1 = "SELECT * FROM about";
                                    $query1 = mysqli_query($conn,$select1);
                                    while($row1 = mysqli_fetch_array($query1)) {
                                        $address = $row1['address'];
                                        $phone = $row1['phone'];
                                        $email = $row1['email'];
                                ?>
                                    <li><i class="ion-location"></i><?php echo $address; ?></li>
                                    <li><i class="ion-ios-telephone"></i> <?php echo $phone; ?></li>
                                    <li><i class="ion-ios-email"></i> <a href="#"><?php echo $email; ?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
       
        <!-- <div class="copyright_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="copyright_content">
                            <p>Copyright &copy; 2020, Designed and Maintained By <a href="https://hedkeyindia.com" target="_blank">Hedkey India Pvt Ltd</a>.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> -->
    </div>
    <!--footer area end-->   
           
           <!-- modal area start-->
            <!-- <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="modal_tab">  
                                            <div class="tab-content product-details-large">
                                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product44.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product45.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product46.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                    <div class="modal_tab_img">
                                                        <a href="#"><img src="assets/img/product/product47.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal_tab_button">    
                                                <ul class="nav product_navactive owl-carousel" role="tablist">
                                                    <li >
                                                        <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/cart/cart5.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                         <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/cart/cart6.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/cart/cart7.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/cart/cart8.jpg" alt=""></a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>    
                                        </div>  
                                    </div> 
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="modal_right">
                                            <div class="modal_title mb-10">
                                                <h2>Handbag feugiat</h2> 
                                            </div>
                                            <div class="modal_price mb-10">
                                                <span class="new_price">$64.99</span>    
                                                <span class="old_price" >$78.99</span>    
                                            </div>
                                            <div class="modal_content mb-10">
                                                <p>Short-sleeved blouse with feminine draped sleeve detail.</p>    
                                            </div>
                                            <div class="modal_size mb-15">
                                               <h2>size</h2>
                                                <ul>
                                                    <li><a href="#">s</a></li>
                                                    <li><a href="#">m</a></li>
                                                    <li><a href="#">l</a></li>
                                                    <li><a href="#">xl</a></li>
                                                    <li><a href="#">xxl</a></li>
                                                </ul>
                                            </div>
                                            <div class="modal_add_to_cart mb-15">
                                                <form action="#">
                                                    <input min="1" max="100" step="2" value="1" type="number">
                                                    <button type="submit">add to cart</button>
                                                </form>
                                            </div>   
                                            <div class="modal_description mb-15">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>    
                                            </div> 
                                            <div class="modal_social">
                                                <h2>Share this product</h2>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>    
                                            </div>      
                                        </div>    
                                    </div>    
                                </div>     
                            </div>
                        </div>    
                    </div>
                </div>
            </div>  -->
            <!-- modal area start-->
        
        <!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/igorlino/elevatezoom-plus@1.2.3/src/jquery.ez-plus.js"></script>
        <script src="assets/js/jquery.exzoom.js"></script>
    </body>
    <script>
    
        function changeImg(source) {
            var resImg = document.getElementById('myImg');
            //alert(source);
            resImg.src = source;
            resImg.id = 'myImg2';
        }
    
        $('.menu-icon').click(function(){            
            $('.main_menu').toggleClass('d-none');
        });
        
         $(function(){
            $("#exzoom").exzoom({
                autoPlay: false,
          });
        });
    </script>
</html>
