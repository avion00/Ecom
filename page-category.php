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
    <div id="page" class="site page-category">
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
      <!-- header -->

      <main>
        <div class="single-category">
          <div class="container">
            <div class="wrapper">
              <div class="column">
                <div class="holder">
                  <div class="row sidebar">
                    <div class="filter">
                      <div class="filter-block">
                        <h4>Category</h4>
                        <ul>
                          <li>
                            <input type="checkbox" name="checkbox" id="bags" />
                            <label for="bags">
                              <span class="checked"></span>
                              <span>Bags</span>
                            </label>
                            <span class="count">15</span>
                          </li>

                          <li>
                            <input
                              type="checkbox"
                              name="checkbox"
                              id="beauty"
                            />
                            <label for="beauty">
                              <span class="checked"></span>
                              <span>Beauty</span>
                            </label>
                            <span class="count">2</span>
                          </li>

                          <li>
                            <input
                              type="checkbox"
                              name="checkbox"
                              id="clothing"
                            />
                            <label for="clothing">
                              <span class="checked"></span>
                              <span>Clothing</span>
                            </label>
                            <span class="count">3</span>
                          </li>

                          <li>
                            <input
                              type="checkbox"
                              name="checkbox"
                              id="jewelry"
                            />
                            <label for="jewelry">
                              <span class="checked"></span>
                              <span>Jewelry</span>
                            </label>
                            <span class="count">1</span>
                          </li>

                          <li>
                            <input type="checkbox" name="checkbox" id="shoes" />
                            <label for="shoes">
                              <span class="checked"></span>
                              <span>Shoes</span>
                            </label>
                            <span class="count">7</span>
                          </li>
                        </ul>
                      </div>

                      <div class="filter-block">
                        <h4>Activity</h4>
                        <ul>
                          <li>
                            <input
                              type="checkbox"
                              name="checkbox"
                              id="athletic"
                            />
                            <label for="athletic">
                              <span class="checked"></span>
                              <span>Athletic</span>
                            </label>
                            <span class="count">11</span>
                          </li>

                          <li>
                            <input
                              type="checkbox"
                              name="checkbox"
                              id="lounge"
                            />
                            <label for="lounge">
                              <span class="checked"></span>
                              <span>Lounge</span>
                            </label>
                            <span class="count">13</span>
                          </li>

                          <li>
                            <input
                              type="checkbox"
                              name="checkbox"
                              id="outdoor"
                            />
                            <label for="outdoor">
                              <span class="checked"></span>
                              <span>Outdoor</span>
                            </label>
                            <span class="count">7</span>
                          </li>

                          <li>
                            <input
                              type="checkbox"
                              name="checkbox"
                              id="travel"
                            />
                            <label for="travel">
                              <span class="checked"></span>
                              <span>Travel</span>
                            </label>
                            <span class="count">3</span>
                          </li>

                          <li>
                            <input type="checkbox" name="checkbox" id="urban" />
                            <label for="urban">
                              <span class="checked"></span>
                              <span>Urban</span>
                            </label>
                            <span class="count">7</span>
                          </li>
                        </ul>
                      </div>

                      <div class="filter-block">
                        <h4>Brands</h4>
                        <ul>
                          <li>
                            <input type="checkbox" name="checkbox" id="nike" />
                            <label for="nike">
                              <span class="checked"></span>
                              <span>Nike</span>
                            </label>
                            <span class="count">9</span>
                          </li>

                          <li>
                            <input type="checkbox" name="checkbox" id="louis" />
                            <label for="louis">
                              <span class="checked"></span>
                              <span>Louis vuitton</span>
                            </label>
                            <span class="count">7</span>
                          </li>

                          <li>
                            <input
                              type="checkbox"
                              name="checkbox"
                              id="hermes"
                            />
                            <label for="hermes">
                              <span class="checked"></span>
                              <span>Hermes</span>
                            </label>
                            <span class="count">2</span>
                          </li>

                          <li>
                            <input type="checkbox" name="checkbox" id="gucci" />
                            <label for="gucci">
                              <span class="checked"></span>
                              <span>Gucci</span>
                            </label>
                            <span class="count">6</span>
                          </li>

                          <li>
                            <input type="checkbox" name="checkbox" id="zara" />
                            <label for="zara">
                              <span class="checked"></span>
                              <span>Zara</span>
                            </label>
                            <span class="count">7</span>
                          </li>
                        </ul>
                      </div>

                      <div class="filter-block products">
                        <h4>Color</h4>
                        <ul class="bycolor variant flexitem">
                          <li>
                            <input type="radio" name="color" id="cogrey" />
                            <label for="cogrey" class="circle"></label>
                          </li>

                          <li>
                            <input type="radio" name="color" id="coblue" />
                            <label for="coblue" class="circle"></label>
                          </li>

                          <li>
                            <input type="radio" name="color" id="cogreen" />
                            <label for="cogreen" class="circle"></label>
                          </li>

                          <li>
                            <input type="radio" name="color" id="cored" />
                            <label for="cored" class="circle"></label>
                          </li>

                          <li>
                            <input type="radio" name="color" id="colight" />
                            <label for="colight" class="circle"></label>
                          </li>
                        </ul>
                      </div>

                      <div class="filter-block pricing">
                        <h4>Price</h4>
                        <div class="byprice">
                          <div class="range-track">
                            <input
                              type="range"
                              value="25000"
                              min="0"
                              max="100000"
                            />
                          </div>

                          <div class="price-range">
                            <span class="price-form">$ 50</span>
                            <span class="price-to">$ 500</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="section">
                    <div class="row">
                        <div class="cat-head">
                            
                                <?php search_input(); ?>
                            
                            <div class="cat-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eius quaerat vitae nemo. Illo ipsum ullam impedit quis, corporis dolore sint asperiores neque ratione dolor itaque est consequuntur doloremque repellendus!</p>
                            </div>
                            <div class="cat-navigation flexitem">
                                <div class="item-filter desktop-hide">
                                    <a href="#" class="filter-trigger label">
                                        <i class="ri-menu-2-line ri-2x"></i>
                                        <span>Filter</span>
                                    </a>
                                </div>
                                <div class="item-sort">
                                    <div class="label">
                                        <span class="mobile-hide">Sort by default</span>
                                        <div class="desktop-hide">Default</div>
                                        <i class="ri-arrow-down-s-line"></i>
                                    </div>
                                    <ul>
                                        <li>Default</li>
                                        <li>Product Name</li>
                                        <li>Price</li>
                                        <li>Brands</li>
                                    </ul>
                                </div>
                                <div class="item-perpage mobile-hide">
                                    <div class="label">Items 10 per page</div>
                                    <div class="desktop-hide">10</div>
                                </div> 
                                <div class="item-options">
                                    <div class="label">
                                        <span class="mobile-hide">Show 10 per page</span>
                                        <div class="desktop-hide">10</div>
                                        <i class="ri-arrow-down-s-line"></i>
                                    </div>
                                    <ul>
                                        <li>10</li>
                                        <li>20</li>
                                        <li>30</li>
                                        <li>All</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="products main flexwrap">
                        <!-- products category structure copid from featured products start with .item -->
                        
                        <?php search_result();?>

                    </div>
                    <div class="load-more flexcenter">
                        <a href="#" class="secondary-button">Load more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="banners">
          <div class="container">
            <div class="wrapper">
              <div class="column">
                <div class="banner flexwrap">
                  <div class="row">
                    <div class="item">
                      <div class="image">
                        <img src="assets/banner/banner1.jpg" alt="" />
                      </div>
                      <div class="text-content flexcol">
                        <h4>Brutal Sale!</h4>
                        <h3>
                          <span>Get the deal in here</span><br />Living Room
                          Chair
                        </h3>
                        <a href="#" class="primary-button">Shop Now</a>
                      </div>
                      <a href="#" class="over-link"></a>
                    </div>
                  </div>

                  <div class="row">
                    <div class="item get-gray">
                      <div class="image">
                        <img src="assets/banner/banner2.jpg" alt="" />
                      </div>
                      <div class="text-content flexcol">
                        <h4>Brutal Sale!</h4>
                        <h3>
                          <span>Discount Everyday</span><br />Office Outfit
                        </h3>
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
                        <img src="assets/banner/procat1.jpg" alt="" />
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
                          <a href="#" class="view-all"
                            >View all<i class="ri-arrow-right-line"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="item">
                      <div class="image">
                        <a href="#">
                          <img src="assets/products/electronic1.jpg" alt="" />
                        </a>
                      </div>
                      <div class="content mini-links">
                        <h4><a href="#">Gatgets</a></h4>
                        <ul class="flexcol">
                          <li><a href="#">Camera</a></li>
                          <li><a href="#">Cell Phones</a></li>
                          <li><a href="#">Computers</a></li>
                          <li><a href="#">GPS & Navigation</a></li>
                          <li><a href="#">Headphones</a></li>
                        </ul>
                        <div class="second-links">
                          <a href="#" class="view-all"
                            >View all<i class="ri-arrow-right-line"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="item">
                      <div class="image">
                        <a href="#"
                          ><img src="assets/banner/procat3.jpg" alt=""
                        /></a>
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
                          <a href="#" class="view-all"
                            >View all<i class="ri-arrow-right-line"></i
                          ></a>
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

    
</html>





                    