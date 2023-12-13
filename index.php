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
    <link rel="icon" href="assets/brands/samsung.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    /> -->
    <link rel="stylesheet" href="plugin/swiper.css">
  </head>
  <body>
    <div id="page" class="site page-home">
      <aside class="site-off desktop-hide">
        <div class="off-canvas">
          <div class="canvas-head flexitem">
            <div class="logo">
              <a href="index.php"><span class="circle"></span>Avikesh</a>
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

      <main>
        <div class="slider">
          <div class="container">
            <div class="wrapper">



              <div class="myslider swiper">
                <div class="swiper-wrapper">

                 <?php slide_offer(); ?>

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- slider -->

        <div class="brands">
          <div class="container">
            <div class="wrapper flexitem">
              <div class="item">
                <a href="#">
                  <img src="assets/brands/zara.png" alt="" />
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/brands/samsung.png" alt="" />
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/brands/oppo.png" alt="" />
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/brands/asus.png" alt="" />
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/brands/hurley.png" alt="" />
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/brands/dng.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- brands -->

        <div class="trending">
          <div class="container">
            <div class="wrapper">
              <div class="sectop flexitem">
                <h2>
                  <span class="circle"></span><span>Trending Products</span>
                </h2>
              </div>

              <div class="column">
                <div class="flexwrap">
                  <div class="row products big">
                    <?php single_offer_product(); ?>
                  </div>

                  <div class="row products mini">
                  <?php row_product_mini_1(); ?>

                  </div>
                  <div class="row products mini">

                  <?php row_product_mini_2();?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- trending products -->


        <div class="features">
          <div class="container">
            <div class="wrapper">
              <div class="column">
                <div class="sectop flexitem">
                  <h2>
                    <span class="circle"></span><span>Featured Products</span>
                  </h2>
                  <div class="second-links">
                    <a href="#" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                  </div>
                </div>
                <div class="products main flexwrap">

                <?php featured_product();
                  $ip = getIPAddress();  
                  echo 'User Real IP Address - '.$ip; 
                ?>      
                        
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Featured product -->

        <div class="banners">
          <div class="container">
            <div class="wrapper">
              <div class="column">
                <div class="banner flexwrap">
                  <div class="row">
                    <div class="item">                     
                      <div class="image">
                        <img src="assets/banner/banner1.jpg" alt="">
                      </div>
                      <div class="text-content flexcol">
                        <h4>Brutal Sale!</h4>
                        <h3><span>Get the deal in here</span><br>Living Room Chair</h3>
                        <a href="#" class="primary-button">Shop Now</a>
                      </div>
                      <a href="#" class="over-link"></a>
                    </div>
                  </div>

                  
                  <div class="row">
                    <div class="item get-gray">                     
                      <div class="image">
                        <img src="assets/banner/banner2.jpg" alt="">
                      </div>
                      <div class="text-content flexcol">
                        <h4>Brutal Sale!</h4>
                        <h3><span>Discount Everyday</span><br>Office Outfit</h3>
                        <a href="#" class="primary-button">Shop Now</a>
                      </div>
                      <a href="#" class="over-link"></a>
                    </div>
                  </div>

                </div>
                <!-- Banners -->

                <div class="product-categories flexwrap">
                  <div class="row">
                    <div class="item">
                      <div class="image">
                        <img src="assets/banner/procat1.jpg" alt="">
                      </div>
                      <div class="content mini-links">
                        <h4>Beauty</h4>
                        <ul class="flexcol">
                          <li><a href="#">Makeup</a></li>
                          <li><a href="#">Skin Care</a></li>
                          <li><a href="#">Hair Care</a></li>
                          <li><a href="#">Fragrance</a></li>      
                          <li><a href="#">Foot & Hand Care</a></li>
                        </ul>
                        <div class="second-links">
                          <a href="#" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                  <div class="row">
                    <div class="item">
                      <div class="image">
                        <a href="#">
                          <img src="assets/banner/procat2.jpg" alt="">
                        </a>  
                      </div>
                      <div class="content mini-links">
                        <h4><a href="#">Gagdtes</a></h4>
                        <ul class="flexcol">
                          <li><a href="#">Camera</a></li>
                          <li><a href="#">Cell Phones</a></li>
                          <li><a href="#">Computers</a></li>
                          <li><a href="#">GPS & Navigation</a></li>      
                          <li><a href="#">Headphones</a></li>
                        </ul>
                        <div class="second-links">
                          <a href="#" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                  <div class="row">
                    <div class="item">
                      <div class="image">
                        <a href="#"><img src="assets/banner/procat3.jpg" alt=""></a>
                      </div>
                      <div class="content mini-links">
                        <h4><a href="#">Home Decor</a></h4>
                        <ul class="flexcol">
                          <li><a href="#">Kitchen</a></li>
                          <li><a href="#">Dining Room</a></li>
                          <li><a href="#">Pantry</a></li>
                          <li><a href="#">Great Room</a></li>      
                          <li><a href="#">Breakfast Nook</a></li>
                        </ul>
                        <div class="second-links">
                          <a href="#" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- banners -->

      </main>
      <!-- main -->

      <?php include_once('./footer.php'); ?>

      <div class="menu-bottom desktop-hide">
        <div class="container">
          <div class="wrapper">
            <nav>
              <ul class="flexitem">
                <li>
                  <a href="#">
                    <i class="ri-bar-chart-line"></i>
                    <span>Trending</span>
                  </a>
                </li>
                
                <li>
                  <a href="#">
                    <i class="ri-user-6-line"></i>
                    <span>Account</span>
                  </a>
                </li>
                
                <li>
                  <a href="#">
                    <i class="ri-heart-line"></i>
                    <span>Wishlist</span>
                  </a>
                </li>
                
                <li>
                  <a href="#0" class="t-search">
                    <i class="ri-search-line"></i>
                    <span>Search</span>
                  </a>
                </li>
                
                <li>
                  <a href="#0">
                    <i class="ri-shopping-cart-line"></i>
                    <span>Cart</span>
                    <div class="fly-item">
                      <span class="item-number">0</span>
                    </div>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- menu bottom -->

      <div class="search-bottom desktop-hide">
        <div class="container">
          <div class="wrapper">
            <form action="" class="search">
              <a href="" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
              <span class="icon-large"><i class="ri-search-line"></i></span>
              <input type="search" placeholder="Search" required>
              <button type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
      <!-- search bottom -->

      <div class="backtotop">
        <a href="#" class="flexcol">
            <i class="ri-arrow-up-line"></i>
            <span>Top</span>
        </a>
       </div>

      <div class="overlay"></div>
    </div>

    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
    <script src="plugin/swiper.js"></script>
    <script src="script.js?v=<?=$version?>"></script>
  </body>
</html>
