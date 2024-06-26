<?php
include '../inc/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Avikesh</title>
    <link rel="stylesheet" href="../style.css?v=<?=$version?>" />
    <link rel="stylesheet" href="style.css?v=<?=$version?>" />
    
    <link rel="icon" href="assets/products/apparel4.jpg" type="image/x-icon" />
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
    <div id="page" class="site page-single">
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

      <header>
        <div class="header-top mobile-hide">
          <div class="container">
            <div class="wrapper flexitem">
              <div class="left">
                <ul class="flexitem main-links">
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Featured</a></li>
                  <li><a href="#">Wishlist</a></li>
                </ul>
              </div>
              <div class="right">
                <ul class="flexitem main-links">
                  <li><a href="#">Sign Up</a></li>
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">Order Tracking</a></li>
                  <li>
                    <a href="#"
                      >USD
                      <span class="icon-small"
                        ><i class="ri-arrow-down-s-line"></i></span
                    ></a>
                    <ul>
                      <li class="current"><a href="#">USD</a></li>
                      <li><a href="#">EURO</a></li>
                      <li><a href="#">GBP</a></li>
                      <li><a href="#">IDR</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#"
                      >English
                      <span class="icon-small"
                        ><i class="ri-arrow-down-s-line"></i></span
                    ></a>
                    <ul>
                      <li class="current"><a href="#">English</a></li>
                      <li><a href="#">Nepali</a></li>
                      <li><a href="#">Hindi</a></li>
                      <li><a href="#">Urdu</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- header top -->

        <div class="header-nav">
          <div class="container">
            <div class="wrapper flexitem">
              <a href="#" class="trigger desktop-hide"
                ><span class="i ri-menu-2-line"></span
              ></a>
              <div class="left flexitem">
                <div class="logo">
                  <a href="/#"><span class="circle"></span>Avikesh</a>
                </div>
                <nav class="mobile-hide">
                  <ul class="flexitem second-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="has-child">
                      <a href="#"
                        >Women
                        <div class="icon-small">
                          <i class="ri-arrow-down-s-line"></i>
                        </div>
                      </a>
                      <div class="mega">
                        <div class="container">
                          <div class="wrapper">
                            <div class="flexcol">
                              <div class="row">
                                <h4>Woman's Clothing</h4>
                                <ul>
                                  <li><a href="#">Dresses</a></li>
                                  <li><a href="#">Tops & Tees</a></li>
                                  <li><a href="#">jackets and Coats</a></li>
                                  <li><a href="#">Pants & Capris</a></li>
                                  <li><a href="#">Sweeters</a></li>
                                  <li><a href="#">Costumes</a></li>
                                  <li><a href="#">Hoodies & Sweatshirts</a></li>
                                  <li><a href="#">Pajamas & Robes</a></li>
                                  <li><a href="#">Shorts</a></li>
                                  <li><a href="#">Swimmer</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="flexcol">
                              <div class="row">
                                <h4>Jewelry</h4>
                                <ul>
                                  <li><a href="#">Accessories</a></li>
                                  <li><a href="#">Bags & purses</a></li>
                                  <li><a href="#">nacklaces</a></li>
                                  <li><a href="#">Rings</a></li>
                                  <li><a href="#">Earings</a></li>
                                  <li><a href="#">Bracelets</a></li>
                                  <li><a href="#">Body Jewelry</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="flexcol">
                              <div class="row">
                                <h4>Beauty</h4>
                                <ul>
                                  <li><a href="#">Bath Accessories</a></li>
                                  <li><a href="#">Makeup & Cosmetics</a></li>
                                  <li><a href="#">skin Care</a></li>
                                  <li><a href="#">Hair Care</a></li>
                                  <li><a href="#">Essential Oils</a></li>
                                  <li><a href="#">Fragrances</a></li>
                                  <li><a href="#">Soaps & Bath Booms</a></li>
                                  <li>
                                    <a href="#">Face Masks & Coverings</a>
                                  </li>
                                  <li><a href="#">Spa Kits & Gifts</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="flexcol">
                              <div class="row">
                                <h4>Top Brands</h4>
                                <ul class="women-brands">
                                  <li><a href="#">Nike</a></li>
                                  <li><a href="#">Lauis Vuitton</a></li>
                                  <li><a href="#">Hermes</a></li>
                                  <li><a href="#">Gucci</a></li>
                                  <li><a href="#">Zalando</a></li>
                                  <li><a href="#">Tiffany & Co.</a></li>
                                  <li><a href="#">Zara</a></li>
                                  <li><a href="#">H&M</a></li>
                                  <li><a href="#">Cartier</a></li>
                                  <li><a href="#">Chanel</a></li>
                                  <li><a href="#">Hurley</a></li>
                                </ul>
                                <a href="#" class="view-all"
                                  >View all brands
                                  <i class="ri-arrow-right-line"></i
                                ></a>
                              </div>
                            </div>
                            <div class="flexcol products">
                              <div class="row">
                                <div class="media">
                                  <div class="thumbnail object-cover">
                                    <a href="#">
                                      <img
                                        src="../assets/products/apparel4.jpg"
                                        alt=""
                                      />
                                    </a>
                                  </div>
                                </div>
                                <div class="text-content">
                                  <h4>Most wanted!</h4>
                                  <a href="#" class="primary-button"
                                    >Order Now</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li><a href="#">Men</a></li>
                    <li>
                      <a href="#"
                        >Sports
                        <div class="fly-item"><span>New!</span></div>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="right">
                <ul class="flexitem second-links">
                  <li class="mobile-hide">
                    <a href="#">
                      <div class="icon-large">
                        <i class="ri-heart-line"></i>
                      </div>
                      <div class="fly-item">
                        <span class="item-number">0</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="iscart">
                      <div class="icon-large">
                        <i class="ri-shopping-cart-line"></i>
                        <div class="fly-item">
                          <span class="item-nuber">0</span>
                        </div>
                      </div>
                      <div class="icon-text">
                        <div class="mini-text">Total</div>
                        <div class="cart-total">$0.00</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

       
      </header>








<main>      
  <div class="registration">
        <div class="container">
              <div class="wrapper">
                    <h2 class="flexcenter">Sign Up</h2>
                    <form action="">
                          <p>
                            <!-- <label>Full Name</label> -->
                            <input placeholder="Full Name"  pattern="[A-Za-z]{3}" type="text" requried>
                          </p>
                          
                          <p>
                            <!-- <label>Gmail: </label> -->
                            <input placeholder="Gmail" pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$" type="gmail" required>
                          </p>

                          <p>
                            <!-- <label>Mobile Number: </label> -->
                            <input placeholder="Mobile Number" pattern="[789][0-9]{9}" type="number" required>
                          </p>

                          <!-- <p>
                            <label>Image: </label>
                            <input placeholder="Image" class="inputImage" type="file" required>
                          </p> -->
                          

                          <p>
                            <!-- <label>Password: </label> -->
                            <input placeholder="Password"  pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g"  type="password" required>
                          </p>

                          <p>
                            <!-- <label>Confirm password: </label> -->
                            <input placeholder="Confirm password"  pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g" type="password" required>
                          </p>
                          
                          <p class="">
                            <a href="#" type="submit" class="primary-button">Sign Up</a>
                          </p>
                          
                          <p>
                            <span>Already have an account? <a href="logIn.php">Log In</a></span>
                          </p>
                          
                          </form>
              </div>
        </div>
  </div>
</main>
     
      <!-- main -->

<?php include_once('../footer.php'); ?>
      <!-- footer -->

      
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

  


    </div>
    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.4.0/index.js"></script>
    <script src="../script.js?v=<?=$version?>"></script>
  </body>
</html>
