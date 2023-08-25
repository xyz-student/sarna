<div class="sidebar_widget" style="border: 1px solid #ddd; box-shadow: 0px 0px 4px 2px #e2dddd; background: #ebeff5; padding: 15px;">
    <!--widget color start-->
    <div class="widget_list widget_color">
        <h3>All Categories</h3>
        <ul>
            <?php 
            $select1 = "SELECT * FROM category";
            $query1 = mysqli_query($conn,$select1);
            while($row1 = mysqli_fetch_array($query1)) {
            ?>
            <li><a href="category.php?id=<?=$row1['id'];?>"><?php echo $row1['title']; ?></a></li>
        <?php } ?>
        </ul>
    </div>
    <!--widget color start-->
    <!--widget color start-->
    <div class="widget_list widget_color">
        <h3>Our Products</h3>
        <ul>
            <?php 
                $select1 = "SELECT * FROM products limit 8";
                $query1 = mysqli_query($conn,$select1);
                while($row1 = mysqli_fetch_array($query1)) {
                    $id = $row1['id'];
                    $title = $row1['title'];
            ?>
            <li><a href="product-detail.php?id=<?php echo $id; ?>"><?php echo $title; ?> </a></li>
        <?php } ?>
        </ul>
    </div>
    <!--widget color start-->
</div>