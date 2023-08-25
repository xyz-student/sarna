<?php include('include/header.php'); ?>

<?php
// if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
//      $url = "https://";   
// else  
//      $url = "http://";   
// // Append the host(domain name, ip) to the URL.   
// $url.= $_SERVER['HTTP_HOST'];   

// // Append the requested resource location to the URL   
// $url.= $_SERVER['REQUEST_URI'];    

// if($url=="https://hedkeydemo.xyz/justrack_dyn/index.php" || $url=="https://hedkeydemo.xyz/justrack_dyn/") {
//     echo "<script>";
//     echo "document.getElementById('home').classList.add('active')";
//     echo "</script>";
// }

?>




    <!--slider area start-->
    <div class="slider_area slider_three owl-carousel">
        <?php
        $select1 = "SELECT * FROM banner";
        $query1 = mysqli_query($conn, $select1);
        while ($row1 = mysqli_fetch_array($query1)) {
        ?>
        <div class="single_slider">
            <img src="assets/img/<?= $row1['image']; ?>" style="height:auto; padding:30px;"/>
            <h2><?php echo $row1['name']; ?></h2>
        </div>

        <?php } ?> 
        <!--<div class="single_slider slider_two">-->
        <!--    <img src="assets/img/b1.jpeg" style="height:500px" />-->
        <!--</div>-->
        <!--<div class="single_slider slider_one">-->
        <!--    <img src="assets/img/b2.jpeg" style="height:500px" />-->
        <!--</div>-->
        <!--<div class="single_slider slider_one">-->
        <!--    <img src="assets/img/b1.jpeg" style="height:500px" />-->
        <!--</div>-->
    </div>
    <!--slider area end-->


    <div class="about_section">
        <div class="container">
            <div class="row">
                <?php
                $select1 = "SELECT * FROM about";
                $query1 = mysqli_query($conn, $select1);
                while ($row1 = mysqli_fetch_array($query1)) {
                ?>
                <div class="col-md-12">
                    <div class="about_content text-center">
                        <h1><?php echo $row1['title'] ?></h1>
                        <p> <?php echo substr( $row1['des'],0,1000) . "..."; ?>
                           <a href="about.php">READ MORE </a> 
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <!--categories banner start-->
    <!--top categories-->
    <div class="categorie_banner categorie_banner_three ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="categorie_banner_title">
                        <h3>Top Categories</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php 
    $query = "SELECT * FROM `top_category` order by id ASC LIMIT 4";
    $Product_data = mysqli_query($conn, $query) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_array($Product_data))
      {
        $id=$row['id'];
        $title=$row['title'];
        $img=$row['image'];
        // $products = $row['products'];
?>
                <div class="col-md-4 mt-3">
                    <div class="single_product pb-2">
                        <div class="product_thumb">
                            <a href="category.php?id=<?php echo $row['id']; ?>">
                                <img src="assets/img/<?php echo $img; ?>"
                                    alt="" style="height:440px;"></a>
                        </div>
                        <div class="product_content">
                            <h3 class="fs-5"><a href="category.php?id=<?php echo $row['id']; ?>"><?php echo $title; ?></a></h3>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>


        </div>
    </div>
    <!--all categories-->
    

    <!--categories banner end-->


    <section class="choose">
        <div class="container text-center">
            <div class="section-heading align-center mb-40">
                <h3 class="w text-uppercase">Our Features</h3>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="cbox">
                        <div class="icon">
                            <img src="assets/img/why-choose.webp">
                        </div>
                        <h4>Why Choose Us</h4>
                        <p>Our value proposition to customers provides creative, unique and durable solutions rapidly
                            tailored to meet their requirements</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="cbox">
                        <div class="icon">
                            <img src="assets/img/customied.jpg" style="height:85px; margin-top:10px;">
                        </div>
                        <h4>Customized Solution</h4>
                        <p>we are dedicated to providing customized solutions for every customer at competitive industry
                            rates.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="cbox">
                        <div class="icon">
                            <img src="assets/img/our-values.png">
                        </div>
                        <h4>Our Strength</h4>
                        <p>Our value proposition to customers provides creative, unique and durable solutions rapidly
                            tailored to meet their requirements</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="cbox">
                        <div class="icon">
                            <img src="assets/img/icons/ch4.svg">
                        </div>
                        <h4>24x7 Support</h4>
                        <p>Our 24x7 support team ensures that we are available to assist our clients at all times. This
                            helps us achieve our objective of customer satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   



    <!--shipping area start-->
    <div class="shipping_area shipping_contact  shipping_three">
        <div class="container">
            <div class="shipping_contact">
                <div class="row">
                    <?php
                    $select1 = "SELECT * FROM about";
                    $query1 = mysqli_query($conn, $select1);
                    while ($row1 = mysqli_fetch_array($query1)) {
                        $phone = $row1['phone'];
                        $email = $row1['email'];
                    ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <span class="pe-7s-call"></span>
                            </div>
                            <div class="shipping_content">
                                <h3>+91 9810536414</h3>
                                <p>Call For More Info!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <span class="pe-7s-mail"></span>
                            </div>
                            <div class="shipping_content">
                                <h3 class="text-lowercase">sarnakitchensolutions@hotmail.com</h3>
                                <p>Query Support!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_shipping column_3">
                            <div class="shipping_icone">
                                <span class="pe-7s-timer"></span>
                            </div>
                            <div class="shipping_content">
                                <h3>Mon - Sat / 8:00AM - 9:00PM</h3>
                                <p>Working Days/Hours!</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
    <!--shipping area end-->

    <?php include('include/footer.php'); ?>