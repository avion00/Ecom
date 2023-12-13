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
                  <form action="" class="form-cart">
                    <div class="item">
                      <table id="cart-table">
                        <thead>
                          <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="flexitem">
                                <div class="thumbnail object-cover">
                                    <a href="#"><img src="assets/products/home2.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <strong><a href="#">Dimmable Ceiling Light Modern</a></strong>
                                    <p>Color: Gold</p>
                                </div>
                            </td>
                            <td>$279.99</td>
                            <td>
                                <div class="qty-control flexitem">
                                    <button class="minus">-</button>
                                    <input type="text" value="2" min="1">
                                    <button class="plus">+</button>
                                </div>
                            </td>
                            <td>$559.98</td>
                            <td><a href="#" class="item-remove"><i class="ri-close-line"></i></a></td>
                          </tr>

                          <tr>
                            <td class="flexitem">
                                <div class="thumbnail object-cover">
                                    <a href="#"><img src="assets/products/home3.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <strong><a href="#">Modern Storage Cabinet with Door & 3 Drawers</a></strong>
                                    <p>Type: Stand</p>
                                </div>
                            </td>
                            <td>$129.99</td>
                            <td>
                                <div class="qty-control flexitem">
                                    <button class="minus">-</button>
                                    <input type="text" value="2" min="1">
                                    <button class="plus">+</button>
                                </div>
                            </td>
                            <td>$129.99</td>
                            <td><a href="#" class="item-remove"><i class="ri-close-line"></i></a></td>
                          </tr>

                          <tr>
                            <td class="flexitem">
                                <div class="thumbnail object-cover">
                                    <a href="#"><img src="assets/products/home4.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <strong><a href="#">Vonanda Velvet Sofa Couch</a></strong>
                                    <!-- <p>Color: Gold</p> -->
                                </div>
                            </td>
                            <td>$352.99</td>
                            <td>
                                <div class="qty-control flexitem">
                                    <button class="minus">-</button>
                                    <input type="text" value="2" min="1">
                                    <button class="plus">+</button>
                                </div>
                            </td>
                            <td>$352.99</td>
                            <td><a href="#" class="item-remove"><i class="ri-close-line"></i></a></td>
                          </tr>

                          <tr>
                            <td class="flexitem">
                                <div class="thumbnail object-cover">
                                    <a href="#"><img src="assets/products/home5.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <strong><a href="#">Awesome Bed for a couple</a></strong>
                                    <p>Type: Kind Size</p>
                                </div>
                            </td>
                            <td>$579.99</td>
                            <td>
                                <div class="qty-control flexitem">
                                    <button class="minus">-</button>
                                    <input type="text" value="2" min="1">
                                    <button class="plus">+</button>
                                </div>
                            </td>
                            <td>$579.99</td>
                            <td><a href="#" class="item-remove"><i class="ri-close-line"></i></a></td>
                          </tr>
                          
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
                                  <span>Flat: $10.00</span>
                                  <input type="radio" name="rate-option" id="flat" checked>
                                  <label for="flat" class="circle"></label>
                                </p>

                                <p>
                                  <span>Best: $0.00</span>
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
                              <td>$2155.95</td>
                            </tr>
                            <tr>
                              <th>Discount</th>
                              <td>$100.00</td>
                            </tr>
                            <tr>
                              <th>Shipping <span class="mini-text">(Flat)</span></th>
                              <td>$10.00</td>
                            </tr>
                            <tr class="grand-total">
                              <th>TOTAL</th>
                              <td>$2065.95</td>
                            </tr>
                          </tbody>
                        </table>
                        <a href="/checkout" class="secondary-button">Checkout</a>
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
