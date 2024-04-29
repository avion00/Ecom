<?php
include './inc/config.php';
include './inc/connect.php';
include './functions/common_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Avikesh</title>
    <link rel="stylesheet" href="style.css?v=<?=$version?>" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    /> -->
  </head>
  <body>
    <div id="page" class="site page-cart">
      <aside class="site-off desktop-hide">
        <div class="off-canvas">
          <div class="canvas-head flexitem">
            <div class="logo">
              <a href="/"><span class="circle"></span>Avikesh</a>
            </div>
            <a href="#" class="t-close flexcenter"
              ><i class="ri-close-line"></i
            ></a>
          </div>
          <div class="departments"></div>
          <nav></nav>
          <div class="thetop-nav"></div>
        </div>
      </aside>

<?php include_once('./header.php'); ?>
<?php cart(); ?>
      <!-- header -->

      <main>
        <div class="single-cart">
          <div class="container">
            <div class="wrapper">
              <div class="breadcrumb">
                <ul class="flexitem">
                  <li><a href="#">Home</a></li>
                  <li>Cart</li>
                </ul>
              </div>
              <div class="page-title">
                <h1>Shopping Cart</h1>
              </div>
              <div class="products one cart">
                <div class="flexwrap">
                  <form action="" method="post" class="form-cart">
                    <div class="item">
                      <table id="cart-table">
                        <thead>
                          <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                            <th></th>
                            <th></th>
                            
                          </tr>
                        </thead>
                        <tbody>
                <!-- Display cart items dynamically -->
                <?php
                global $con;
                $get_ip_address = getIPAddress();
                $total_price = 0;
                $cart_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_address'";
                $result = mysqli_query($con, $cart_query);

                while ($row = mysqli_fetch_array($result)) {
                    $product_id = $row['id'];
                    $select_products = "SELECT * FROM `product_details` WHERE id = '$product_id'";
                    $result_products = mysqli_query($con, $select_products);

                    while ($row_product_price = mysqli_fetch_array($result_products)) {
                        $product_price = array($row_product_price['product_current_price']);
                        $price_table = $row_product_price['product_current_price'];
                        
                        $product_title = $row_product_price['product_name'];
                        $product_image = $row_product_price['image1'];
                        $product_values = array_sum($product_price);

                        $total_price += $product_values;
                ?>
            <tr>
                <td class="flexitem">
                    <div class="thumbnail object-cover">
                        <a href="#"><img src="./images/products/<?php echo $product_image ?>" alt=""></a>
                    </div>
                    <div class="content">
                        <strong><a href="#"><?php echo strlen($product_title) > 20 ? substr($product_title, 0, 50) . ' ...' : $product_title ?></a></strong>
                        <p>Color: Gold</p>
                    </div>
                </td>
                <td><?php echo "&#8377;" . number_format($price_table, 0, '.', ',') ?></td>
                <td>
                    <div class="qty-control flexitem">
                        <!-- <button class="minus" data-product-id="">-</button> -->
                        <input type="text" name="qty" class="qty-input">
                        <!-- <button class="plus" data-product-id="">+</button> -->
                    </div>
                </td>

                <?php
                  $get_ip_address = getIPAddress();
                    if (isset($_POST['update_cart'])) {
                      $quantities = $_POST['qty'];
                      
                      $update_cart = "UPDATE `cart_details` SET quantity = '$quantities' WHERE ip_address = '$get_ip_address'";
                      $result_products_quantity = mysqli_query($con, $update_cart);
                      $total_price = $total_price * $quantities;
                    }
                  ?>


                <td class="subtotal"><?php echo "&#8377;" . number_format($total_price, 0, '.', ',') ?></td>
                <td><a href="#" class="item-update"><button style="border:none; display:none; background:transparent; cursor:pointer;" name="update_cart" type="submit"><i class="ri-refresh-line"></i></button></a></td>
                
                <td>
                  <input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>">
                  <a href="#" class="item-remove"><button style="border:none; background:transparent; cursor:pointer;" name="remove_cart" type="submit"><i class="ri-close-line"></i></button></a></td>
      
            </tr>
    <?php
        }
    }
    ?>

    <?php
                    function remove_cart_item(){
                      global $con;
                      if (isset($_POST['remove_cart'])){
                        foreach($_POST['removeitem'] as $remove_id){

                        
                        echo $remove_id;
                        $delete_query = "DELETE from `cart_details` where product_id = $remove_id";
                        $run_delete = mysqli_query($con, $delete_query);
                        if($run_delete){
                          echo "<script>window.open('cart.php','_self')</script>";
                        }

                      }
                      }
                    }

                    echo $remove_item = remove_cart_item();

                  ?>
</tbody>



                      </table>
                    </div>
                  </form>
                  <div class="cart-summary styled">
                    <div class="item">
                      <div class="coupon">
                        <input type="text" placeholder="Enter coupan">
                        <button>Apply</button>
                      </div>
                      <div class="shipping-rate collapse">
                        <div class="has-child expand">
                          <a href="#" class="icon-small">Estimate Shipping nd Tax</a>
                          <div class="content">
                            <div class="countries">
                              <form action="">
                                <label for="country">Country</label>
                                <select name="country" id="country">
                                  <option value=""></option>
                                  <option value="1">Afganisthan</option>
                                  <option value="2">Aland Islan</option>
                                  <option value="3">Albania</option>
                                  <option value="4" selected="selected">United States</option>
                                  <option value="5">Others</option>                                  
                                </select>
                              </form>
                            </div>

                            <div class="states">
                              <form action="">
                                <label for="country">State/Province</label>
                                <select name="state" id="state">
                                  <option value="">Select a region, State or Province</option>
                                  <option value="1">Alama</option>
                                  <option value="2">Alaska</option>
                                  <option value="3">American Samoa</option>
                                  <option value="4">Arizona</option>
                                  <option value="5">Arkansas</option>
                                  <option value="6">Others</option>
                                  
                                  
                                </select>
                              </form>
                            </div>

                            <div class="postal-code">
                              <form action="">
                                <label for="postal">Zip/Postal Code</label>
                                <input type="number" name="postal" id="postal">
                              </form>
                            </div>
                            <div class="rate-options variant">
                              <form action="">
                                <p>
                                  <span>Flat: &#8377; 10.00</span>
                                  <input type="radio" name="rate-option" id="flat" checked>
                                  <label for="flat" class="circle"></label>
                                </p>

                                <p>
                                  <span>Best: &#8377; 0.00</span>
                                  <input type="radio" name="rate-option" id="best">
                                  <label for="best" class="circle"></label>
                                </p>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="cart-total">
                        <table>
                          <tbody>
                            <tr>
                              <th>Subtotal</th>
                              <td><?php echo "&#8377; " . number_format($total_price, 0, '.', ',')  ?></td>
                            </tr>
                            <tr>
                              <th>Discount</th>
                              <td>2 %</td>
                            </tr>
                            <tr>
                              <th>Shipping <span class="mini-text">(Flat)</span></th>
                              <td>&#8377; 10</td>
                            </tr>
                            <tr class="grand-total">
                              <th>TOTAL</th>
                              <td><?php echo "&#8377; ".number_format(($total_price - (0.02*$total_price) - 10), 0, '.', ',')?></td>
                            </tr>
                          </tbody>
                        </table>
                        <a href="checkout.php" class="secondary-button">Checkout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- main -->

    <?php include_once('./footer.php'); ?>
      <!-- footer -->

    <?php include_once('./deskHideMenu.php') ?>
      <!-- menu bottom and search button-->


      <div class="backtotop">
        <a href="#" class="flexcol">
            <i class="ri-arrow-up-line"></i>
            <span>Top</span>
        </a>
       </div>

      <div class="overlay"></div>
    </div>
    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.4.0/index.js"></script>
    <script src="script.js?v=<?=$version?>"></script>
  </body>
</html>
