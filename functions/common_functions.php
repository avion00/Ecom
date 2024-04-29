<?php
// connect to the database.
    include ('./inc/connect.php');

?>

<?php
    function single_offer_product(){
        global $con;

        $sql = "Select * from `product_details` order by rand()";
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $product_name = $row['product_name'];
        $product_current_price = $row['product_current_price'];
        $product_normal_price = $row['product_normal_price'];
        $image1 = $row['image1'];

        echo "
            <div class='item'>
            <div class='offer'>
            <p>Offer ends at</p>
            <ul class='flexcenter'>
                <li>1</li>
                <li>15</li>
                <li>27</li>
                <li>60</li>
            </ul>
            </div>
            <div class='media'>
            <div class='image'>
                <a href='page-single.php?id=".$id."'>
                <img src='./images/products/".$image1."' alt='".$product_name."'  />
                </a>
            </div>
            <div class='hoverable'>
                <ul>
                <li class='active'>
                    <a href='#'><i class='ri-heart-line'></i></a>
                </li>
                <li>
                    <a href='#'><i class='ri-eye-line'></i></a>
                </li>
                <li>
                    <a href='#'><i class='ri-shuffle-line'></i></a>
                </li>
                </ul>
            </div>
            <div class='discount circle flexcenter'>
                <span>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100))."%</span>
            </div>
            </div>
            <div class='content'>
            <div class='rating'>
                <div class='stars'></div>
                <span class='mini-text'>(".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*120).")</span>
            </div>

            <h3 class='main-links'>
                <a href='page-single.php?id=".$id."'>".$product_name."</a>
            </h3>
            <div class='price'>
                <span class='current'>&#8377; ".number_format($product_current_price, 0, '.', ',')."</span>
                <span class='normal mini-text'>&#8377; ".number_format($product_normal_price, 0, '.', ',')."</span>
            </div>

            <div class='stock mini-text'>
                <div class='qty'>
                <span>Stock:<strong class='qty-available'>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*3)."</strong></span>
                <span>Sold:<strong class='qty-available'>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*14)."</strong></span>
                </div>
                <div class='bar'>
                <div class='available'></div>
                </div>
            </div>
            </div>
        </div>                 
        ";
    } 
?>



<?php
    function row_product_mini_1(){
        global $con;

        $sql = "Select * from `product_details` order by rand() limit 0,4";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $product_name = $row['product_name'];
            $product_current_price = $row['product_current_price'];
            $product_normal_price = $row['product_normal_price'];
            $image1 = $row['image1'];
            echo "  
                
            <div class='item'>
            <div class='media'>
                <div class='thumbnail object-cover'>
                <a  href='page-single.php?id=".$id."'>
                    <img src='./images/products/".$image1."' alt='".$product_name."' />
                </a>
                </div>
                <div class='hoverable'>
                <ul>
                    <li class='active'>
                    <a href='#'><i class='ri-heart-line'></i></a>
                    </li>
                    <li>
                    <a href='#'><i class='ri-eye-line'></i></a>
                    </li>
                    <li>
                    <a href='#'><i class='ri-shuffle-line'></i></a>
                    </li>
                </ul>
                </div>
                <div class='discount circle flexcenter'>
                <span>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100))."%</span>
                </div>
            </div>
            <div class='content'>
                <h3 class='main-links'>
                <a href='page-single.php?id=".$id."'>".$product_name."</a>
                </h3>

                <div class='rating'>
                <div class='stars'></div>
                <span class='mini-text'>(".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*120).")</span>
                </div>

                <div class='price'>
                <span class='current'>&#8377; ".number_format($product_current_price, 0, '.', ',')."</span>
                <div class='normal mini-text'>&#8377; ".number_format($product_normal_price, 0, '.', ',')."</div>
                </div>

                <div class='mini-text'>
                <p>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*14)." Sold</p>
                <p>Free Shipping</p>
                <p class='stock-danger'>Stock: ".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100) + 18)." left!</p>
                </div>
            </div>
            </div>
            ";
        }
                 
    }

    function row_product_mini_2(){
        global $con;

        $sql = "Select * from `product_details` order by rand() limit 0,4";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $product_name = $row['product_name'];
            $product_current_price = $row['product_current_price'];
            $product_normal_price = $row['product_normal_price'];
            $image2 = $row['image2'];
            
            echo "  
                
            <div class='item'>
                <div class='media'>
                <div class='thumbnail object-cover'>
                    <a href='page-single.php?id=".$id."'>
                    <img src='./images/products/".$image2."' alt='".$product_name."' />
                    </a>
                </div>
                <div class='hoverable'>
                    <ul>
                    <li class='active'>
                        <a href='#'><i class='ri-heart-line'></i></a>
                    </li>
                    <li>
                        <a href='#'><i class='ri-eye-line'></i></a>
                    </li>
                    <li>
                        <a href='#'><i class='ri-shuffle-line'></i></a>
                    </li>
                    </ul>
                </div>
                <div class='discount circle flexcenter'>
                    <span>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100))."%</span>
                </div>
                </div>
                <div class='content'>
                <h3 class='main-links'>
                    <a href='page-single.php?id=".$id."'>".$product_name."</a>
                </h3>

                <div class='rating'>
                    <div class='stars'></div>
                    <span class='mini-text'>(".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*120).")</span>
                </div>

                <div class='price'>
                    <span class='current'>&#8377; ".number_format($product_current_price, 0, '.', ',')."</span>
                    <div class='normal mini-text'>&#8377; ".number_format($product_normal_price, 0, '.', ',')."</div>
                </div>

                <div class='mini-text'>
                    <p>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*14)." Sold</p>
                    <p>Free Shipping</p>
                    <p class='stock-danger'>Stock: ".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100) + 18)." left!</p>
                </div>
                </div>
            </div>
            ";
        }
    }
?>


<?php
    // featured product
    function featured_product(){
        global $con;

        $sql = "Select * from `product_details` order by rand() limit 0, 24";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $product_name = $row['product_name'];
            $product_current_price = $row['product_current_price'];
            $product_normal_price = $row['product_normal_price'];
            $image1 = $row['image1'];

            echo "

                <div class='item'>
                <div class='media'>
                <div class='thumbnail object-cover'>
                    <a  href='page-single.php?id=".$id."'>
                    <img src='./images/products/".$image1."' alt='".$product_name."'/>
                    </a>
                </div>
                <div class='hoverable'>
                    <ul>
                    <li class='active'><a href='#'><i class='ri-heart-line'></i></a></li>
                    <li><a href='#'><i class='ri-eye-line'></i></a></li>
                    <li><a href='#'><i class='ri-shuffle-line'></i></a></li>
                    </ul>
                </div>
                <div class='discount circle flexcenter'>
                    <span>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100))."%</span>
                </div>
                </div>
                <div class='content'>
                <div class='rating'>
                    <div class='stars'></div>
                    <span class='mini-text'>(".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*120).")</span>
                </div>

                <h3><a href='page-single.php?id=".$id."'>".$product_name."</a></h3>
                <div class='price'>
                    <span class='current'>&#8377; ".number_format($product_current_price, 0, '.', ',')."</span>
                    <span class='normal mini-text'>&#8377; ".number_format($product_normal_price, 0, '.', ',')."</span>
                </div>
                </div>
            </div>";                
        }  
    }
?>


<?php

    function search_input(){
        global $con;
        if (isset($_GET['search_button'])){
            $search_data_value = $_GET['search_box'];
            
            echo "
            <div class='breadcrumb'>
            <ul class='flexitem'>
                <li><a href='#'></a>Home</li>
                <li>".$search_data_value."</li>
            </ul>
            </div>
            <div class='page-title'>
                <h1>".$search_data_value."</h1>
            </div>
            ";
            }
    }
                                  
?>

<?php

    function search_result(){
        global $con;
        if (isset($_GET['search_button'])){
            
            $search_data_value = $_GET['search_box'];

            // $sql = "SELECT * FROM `product_details` WHERE (product_name LIKE '%$search_data_value%') OR (product_description LIKE '%$search_data_value%')";
            
            $sql = "Select * from `product_details` where product_name like '%$search_data_value%'";
            
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $product_name = $row['product_name'];
                $product_current_price = $row['product_current_price'];
                $product_normal_price = $row['product_normal_price'];
                $image1 = $row['image1'];

                echo "

                <div class='item'>
                <div class='media'>
                <div class='thumbnail object-cover'>
                    <a  href='page-single.php?id=".$id."'>
                    <img src='./images/products/".$image1."' alt='".$product_name."'/>
                    </a>
                </div>
                <div class='hoverable'>
                    <ul>
                    <li class='active'><a href='#'><i class='ri-heart-line'></i></a></li>
                    <li><a href='#'><i class='ri-eye-line'></i></a></li>
                    <li><a href='#'><i class='ri-shuffle-line'></i></a></li>
                    </ul>
                </div>
                <div class='discount circle flexcenter'>
                    <span>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100))."%</span>
                </div>
                </div>
                <div class='content'>
                <div class='rating'>
                    <div class='stars'></div>
                    <span class='mini-text'>(".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*120).")</span>
                </div>

                <h3><a href='page-single.php?id=".$id."'>".$product_name."</a></h3>
                <div class='price'>
                    <span class='current'>&#8377; ".number_format($product_current_price, 0, '.', ',')."</span>
                    <span class='normal mini-text'>&#8377; ".number_format($product_normal_price, 0, '.', ',')."</span>
                </div>
                </div>
            </div>";
            }
        }
    }
?>




<?php
    function product_path(){
        global $con;
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select * from `product_details` where id = $id";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $product_name = $row['product_name'];
                $category = $row['category'];
            
                echo "
                    <div class='breadcrumb'>
                        <ul class='flexitem'>
                            <li><a href='#'>Home</a></li>
                            <li><a href='#'>".$category."</a></li>
                            <li>".$product_name."</li>
                        </ul>
                    </div>
                ";
            }
        }
    }
?>  


<?php
    function product_detail_image(){
        global $con;
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select * from `product_details` where id = $id";

            $result = mysqli_query($con, $sql);

            while($row = mysqli_fetch_assoc($result)){
            $id= $row['id'];
            $product_name = $row['product_name'];
            $product_current_price = $row['product_current_price'];
            $product_normal_price = $row['product_normal_price'];
            $image1 = $row['image1'];
            $image2 = $row['image2'];
            $image3 = $row['image3'];

            echo
            "
            <div class='item is_sticky'>
                <div class='price'>
                <span class='discount'>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100))."%<br>OFF</span>
                </div>

                <div class='big-image'>
                <div class='big-image-wrapper swiper-wrapper'>
                    <div class='image-show swiper-slide'>
                    <a data-fslightbox href='./images/products/".$image1."'><img src='./images/products/".$image1."' alt='".$product_name."' ></a>
                    </div>

                    <div class='image-show swiper-slide'>
                    <a data-fslightbox href='./images/products/".$image2."'><img src='./images/products/".$image2."' alt='".$product_name."'></a>
                    </div>

                    <div class='image-show swiper-slide'>
                    <a data-fslightbox href='./images/products/".$image3."'><img src='./images/products/".$image3."' alt='".$product_name."'></a>
                    </div>
                    
                </div>
                <div class='swiper-button-next'></div>
                <div class='swiper-button-prev'></div>

                </div>
            
                <div thumbSlider='' class='small-image'>
                <ul class='small-image-wrapper flexitem swiper-wrapper'>
                    <li class='thumbnail-show swiper-slide'>
                    <img src='./images/products/".$image1."' alt=''>
                    </li>

                    <li class='thumbnail-show swiper-slide'>
                    <img src='./images/products/".$image2."' alt=''>
                    </li>

                    <li class='thumbnail-show swiper-slide'>
                    <img src='./images/products/".$image3."' alt=''>
                    </li>
                </ul>
                </div>
            </div>
            ";
            }
        }        
    }
?>


<?php
    function product_head_detail(){
        global $con;
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select * from `product_details` where id = $id";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){

                $id= $row['id'];
                $product_name = $row['product_name'];
                $product_current_price = $row['product_current_price'];
                $product_normal_price = $row['product_normal_price'];
                $product_model = $row['product_model'];

                echo "
                <h1>".$product_name."</h1>
                <div class='content'>
                    <div class='rating'>
                    <div class='stars'></div>
                    <a href='#' class='mini-text'>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*120)." reviews</a>
                    <a href='#review' class='add-review mini-text'>Add Your Review</a>
                    </div>
                    <div class='stock-sku'>
                    <span class='available'>In Stock</span>
                    <span class='sku mini-text'>".$product_model."</span>
                    </div>
                    <div class='price'>
                    <span class='current'>&#8377; ".number_format($product_current_price, 0, '.', ',')."</span>
                    <span class='normal'>&#8377; ".number_format($product_normal_price, 0, '.', ',')."</span>
                    </div>
                ";
            }
        }
    }
?>




<?php
    function add_to_cart(){
        global $con;
        if (isset($_GET['id'])){
            $product_id = $_GET['id'];
            $sql = "select * from `product_details` where id = $product_id";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){

                $id= $row['id'];

                echo "
                <div class='button-cart'>
                    <a href='cart.php?add_to_cart=".$product_id."'>
                    <button class='primary-button'>
                        Add to Cart
                    </button>
                    </a>
                </div>
                ";
            }
        }
    }
?>











<?php
    function product_more_detail(){
        global $con;
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select * from `product_details` where id = $id";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)){
            $brand = $row['brand'];
            $activity = $row['activity'];
            $material = $row['material'];
            $gender = $row['gender'];
            $product_discription = $row['product_discription'];

            echo "
                <li class='has-child expand'>
                <a href='#0' class='icon-small'>Information</a>
                <ul class='content'>
                    <li><span>Brands</span><span>".$brand."</span></li>
                    <li><span>Activity</span><span>".$activity."</span></li>
                    <li><span>Material</span><span>".$material."</span></li>
                    <li><span>Gender</span><span>".$gender."</span></li>
                </ul>
                </li>
                <li class='has-child'>
                <a href='#' class='icon-small'>Details</a>
                <div class='content'>
                <p>".$product_discription."</p>
                </div>
                </li>
                ";
            }
        }                     
    }
?>












<?php
    function search_product(){
        global $con;
        if (isset($_GET['search_button'])){
            $search_data_value = $_GET['search_box'];

            // $sql = "SELECT * FROM `product_details` WHERE (product_name LIKE '%$search_data_value%') OR (product_description LIKE '%$search_data_value%')";
            
            $sql = "Select * from `product_details` where product_name like '%$search_data_value%'";
            
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $product_name = $row['product_name'];
                $product_current_price = $row['product_current_price'];
                $product_normal_price = $row['product_normal_price'];
                $image1 = $row['image1'];

                echo "

                <div class='item'>
                    <div class='media'>
                        <div class='thumbnail object-cover'>
                            <a href='page-single.php?id=".$id."'>
                                <img src='./images/products/".$image1."' alt='".$product_name."'/>
                            </a>
                        </div>
                        <div class='hoverable'>
                            <ul>
                                <li class='active'><a href='#'><i class='ri-heart-line'></i></a></li>
                                <li><a href='#'><i class='ri-eye-line'></i></a></li>
                                <li><a href='#'><i class='ri-shuffle-line'></i></a></li>
                            </ul>
                        </div>
                        <div class='discount circle flexcenter'>
                            <span>".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100))."%</span>
                        </div>
                    </div>

                    <div class='content'>
                        <div class='rating'>
                            <div class='stars'></div>       
                            <span class='mini-text'>(".intval(((($product_normal_price - $product_current_price)/$product_normal_price)*100)*120).")</span>
                        </div>

                        <h3><a href='page-single.php?id=".$id."'>".$product_name."</a></h3>
                        <div class='price'>
                            <span class='current'>&#8377; ".number_format($product_current_price, 0, '.', ',')."</span>
                            <span class='normal mini-text'>&#8377; ".number_format($product_normal_price, 0, '.', ',')."</span>
                        </div>
                    </div>
                </div>";
            }
        }
    }
?>


<?php
    // featured product
    function slide_offer(){
        global $con;

        $sql = "Select * from `slide` order by rand()";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $slide_title = $row['slide_title'];
            $slide_name = $row['slide_name'];
            $slide_offer = $row['slide_offer'];
            $slide_image = $row['slide_image'];

            echo "
             <div class='swiper-slide'>
                    <div class='item'>
                      <div class='image object-cover'>
                        <img src='assets/slider/".$slide_image."' alt='' />
                      </div>
                      <div class='text-content flexcol'>
                        <h4>".$slide_title."</h4>
                        <h2>
                          <span>".$slide_name."</span><br /><span
                            >".$slide_offer."</span
                          >
                        </h2>
                        <a href='#' class='primary-button'>Shop Now</a>
                      </div>
                    </div>
                  </div>
            ";                
        }  
    }
?>

















<?php 
    // getting ip address
    function getIPAddress() {  
        global $con;
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        }  
        //whether ip is from the remote address  
        else{  
                $ip = $_SERVER['REMOTE_ADDR'];  
        }  
        return $ip;  
}
     
?> 


<?php
    function cart(){
        if (isset($_GET['add_to_cart'])){
            global $con;
            $get_ip_address = getIPAddress();
            $get_product_id = $_GET['add_to_cart'];
            $sql = "select * from `cart_details` where ip_address = '$get_ip_address' and id = '$get_product_id'";

            $result = mysqli_query($con, $sql);

            $num_of_rows = mysqli_num_rows($result);

            if ($num_of_rows > 0){
                echo "<script>alert('This item is already present in the cart.. ')</script>";

                echo "<script>window.open('index.php', '_self')</script>";

            }else{
                $sql = "insert into `cart_details`

                (`id`, `ip_address`, `quantity`) 

                values 
                
                ('$get_product_id', '$get_ip_address', 1)";

                $result = mysqli_query($con, $sql);

                echo "<script>alert('Item is added to cart.')</script>";
                echo "<script>window.open('index.php', '_self')</script>";
            }
        }
    }
?>

<?php
    function cart_item(){
        if (isset($_GET['add_to_cart'])){
            global $con;
            $get_ip_address = getIPAddress();

            $sql = "select * from `cart_details` where ip_address = '$get_ip_address'";

            $result = mysqli_query($con, $sql);

            $count_cart_items = mysqli_num_rows($result);
        }else{
            global $con;
            $get_ip_address = getIPAddress();

            $sql = "select * from `cart_details` where ip_address = '$get_ip_address'";

            $result = mysqli_query($con, $sql);

            $count_cart_items = mysqli_num_rows($result);
        }
        echo $count_cart_items;
    }
?>


<?php
// total price function
function total_cart_price(){
    global $con;

    $get_ip_address = getIPAddress();
    $total_price = 0;
    $cart_query = "Select * from `cart_details` where ip_address = '$get_ip_address'";

    $result = mysqli_query($con, $cart_query);
    while($row = mysqli_fetch_array($result)){
        $product_id = $row['id'];
        $select_products = "select * from `product_details` where id = '$product_id'";
        $result_products = mysqli_query($con, $select_products);
        while($row_product_price = mysqli_fetch_array($result_products)){
            $product_price = array($row_product_price['product_current_price']);
            $product_values = array_sum($product_price);
            $total_price += $product_values;
        }
    }
    echo number_format($total_price, 0, '.', ',');
}
?>



<?php
// total price function
function quantitiess(){
    global $con;

    $get_ip_address = getIPAddress();
    $cart_query = "Select * from `cart_details` where ip_address = '$get_ip_address'";

    $result = mysqli_query($con, $cart_query);
    while($row = mysqli_fetch_array($result)){
        $product_id = $row['id'];
        $select_products = "select * from `product_details` where id = '$product_id'";
        $result_products = mysqli_query($con, $select_products);
        while($row_product_price = mysqli_fetch_array($result_products)){
            $product_price = array($row_product_price['product_current_price']);
            $product_values = array_sum($product_price);
            $total_price += $product_values;
        }
    }
    echo number_format($total_price, 0, '.', ',');
}
?>






