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
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
  </head>
  <body>
    <div id="page" class="site page-checkout">
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

      <main>
        
        <div class="single-checkout">
          <div class="container">
            <div class="wrapper">
              <div class="checkout flexwrap">
                <div class="item left styled">
                  <h1>Shipping Address</h1>
                  <form action="">
                    <p>
                      <label for="email">Email Address <span></span></label>
                      <input type="email" name="email" id="email" autocomplete="off" required>
                    </p>

                    <p>
                      <label for="fname">First Name <span></span></label>
                      <input type="text" id="fname" required>
                    </p>
                    

                    <p>
                      <label for="lname">Last Name <span></span></label>
                      <input type="text" id="lname" required>
                    </p>

                    <p>
                      <label for="cname">Company Name</label>
                      <input type="text" id="cname">
                    </p>
                    
                    <p>
                      <label for="address">Street Address <span></span></label>
                      <input type="text" id="address" required>
                    </p>

                    <p>
                      <label for="city">City<span></span></label>
                      <input type="text" id="city" required>
                    </p>
                    
                    <p>
                      <label for="state">State/Province<span></span></label>
                      <input type="text" id="state" required>
                    </p>
                    
                    <p>
                      <label for="postal">Zip / Postal Code<span></span></label>
                      <input type="number" id="state" required>
                    </p>
                    
                    <p>
                      <label for="country">Country</label>
                      <select name="country" id="country">
                        <option value=""></option>
                        <option value="1">Afganisthan</option>
                        <option value="2">Aland Island</option>
                        <option value="3">Albania</option>
                        <option value="4" selected="selected">United States</option>
                        <option value="5">Others</option>
                      </select>
                    </p>

                    <p>
                      <label for="phone">Phone<span></span></label>
                      <input type="number" id="phone" required>
                    </p>

                    <p>
                      <label>Order Notes (optional)</label>
                      <textarea cols="30" rows="10"></textarea>
                    </p>
                    
                    <p class="checkset">
                      <input type="checkbox" id="anaccount">
                      <label for="anaccount">Create an account?</label>
                    </p>

                  </form>
                  <div class="shipping-methods">
                    <h2>Shipping Methods</h2>
                    <p class="checkset">
                      <input type="radio" checked>
                      <label>$5.00 Flate Rate</label>
                    </p>
                  </div>
                  <div class="primary-checkout">
                    <button class="primary-button">Place Order</button>
                  </div>
                </div>
                <div class="item right">
                  <h2>Order Summary</h2>
                  <div class="summary-order is_sticky">
                    <div class="summary-totals">
                      <ul>
                        <li>
                          <span>Subtotal</span>
                          <span>$2155.95</span>
                        </li>

                        <li>
                          <span>Discount</span>
                          <span>$100.00</span>
                        </li>

                        <li>
                          <span>Shipping: Flat</span>
                          <span>$10.00</span>
                        </li>

                        <li>
                          <span>Total</span>
                          <strong>$2065.95</strong>
                        </li>

                      </ul>
                    </div>
                    <ul class="products mini">
                      <li class="item">
                        <div class="thumbnail object-cover">
                          <img src="assets/products/home2.jpg" alt="">
                        </div>
                        <div class="item-content">
                          <p>Dimmable Ceiling Light Modern</p>
                          <span class="price">
                            <span>$279.00</span>
                            <span>x 2</span>
                          </span>
                        </div>
                      </li>

                      <li class="item">
                        <div class="thumbnail object-cover">
                          <img src="assets/products/home3.jpg" alt="">
                        </div>
                        <div class="item-content">
                          <p>Modern Sotrage Cabinet with Door & 3 Drawers</p>
                          <span class="price">
                            <span>$129.99</span>
                            <span>x 1</span>
                          </span>
                        </div>
                      </li>

                      <li class="item">
                        <div class="thumbnail object-cover">
                          <img src="assets/products/home4.jpg" alt="">
                        </div>
                        <div class="item-content">
                          <p>Vonanda Velvet Sofa Couch</p>
                          <span class="price">
                            <span>$252.99</span>
                            <span>x 1</span>
                          </span>
                        </div>
                      </li>

                      <li class="item">
                        <div class="thumbnail object-cover">
                          <img src="assets/products/home5.jpg" alt="">
                        </div>
                        <div class="item-content">
                          <p>Awesome Bed for a couple</p>
                          <span class="price">
                            <span>$579.99</span>
                            <span>x 1</span>
                          </span>
                        </div>
                      </li>

                      

                    </ul>
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
                  <a href="#0" class="cart-trigger">
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
              <a href="" class="t-close search-close flexcenter"
                ><i class="ri-close-line"></i
              ></a>
              <span class="icon-large"><i class="ri-search-line"></i></span>
              <input type="search" placeholder="Search" required />
              <button type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
      <!-- search bottom -->
      

      <div id="modal" class="modal">
        <div class="content flexcol">
          <div class="image object-cover">
            <img src="assets/products/apparel4.jpg" alt="">
          </div>
          <h2>Get the latest deals and coupons</h2>
          <p class="mobile-hide">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum unde, porro ea incidunt velit sapiente.</p>
          <form action="" class="search">
            <span class="icon-large"><i class="ri-mail-line"></i></span>
            <input type="mail" placeholder="Your email address">
            <button>Subscribe</button>
          </form>
          <a href="#" class="mini-text">Do not show me this again</a>
          <a href="#" class="t-close modalclose flexcenter">
            <i class="ri-close-line"></i>
          </a>
        </div>
      </div>

      <div class="backtotop">
        <a href="#" class="flexcol">
            <i class="ri-arrow-up-line"></i>
            <span>Top</span>
        </a>
       </div>

      <div class="overlay"></div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.4.0/index.js"></script>
    <script src="script.js?v=<?=$version?>"></script>
  </body>
</html>
