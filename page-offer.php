<?php
include './inc/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Avikesh</title>
    <link rel="stylesheet" href="style.css?v=<?=$version?>" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/> -->
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

<?php include_once('./header.php'); ?>
      <!-- header -->

      <main>
        <div class="single-product">
          <div class="container">
            <div class="wrapper">
              <div class="breadcrumb">
                <ul class="flexitem">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Shoes</a></li>
                  <li>Men Slip On Shoes Casual with Arch Support Insoles</li>
                </ul>
              </div>
              <!-- breadcrumb -->

              <div class="column">
                <div class="products one">
                  <div class="flexwrap">
                    <div class="row">
                      <div class="item is_sticky">
                        <div class="price">
                          <span class="discount">32%<br />OFF</span>
                        </div>

                        <div class="big-image">
                          <div class="big-image-wrapper swiper-wrapper">
                            <div class="image-show swiper-slide">
                              <a
                                data-fslightbox
                                href="assets/products/apparel4.jpg"
                                ><img src="assets/products/apparel4.jpg" alt=""
                              /></a>
                            </div>

                            <div class="image-show swiper-slide">
                              <a
                                data-fslightbox
                                href="assets/products/apparel5.jpg"
                                ><img src="assets/products/apparel5.jpg" alt=""
                              /></a>
                            </div>

                            <div class="image-show swiper-slide">
                              <a
                                data-fslightbox
                                href="assets/products/apparel6.jpg"
                                ><img src="assets/products/apparel6.jpg" alt=""
                              /></a>
                            </div>
                          </div>
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                        </div>

                        <div thumbSlider="" class="small-image">
                          <ul
                            class="small-image-wrapper flexitem swiper-wrapper"
                          >
                            <li class="thumbnail-show swiper-slide">
                              <img src="assets/products/apparel4.jpg" alt="" />
                            </li>

                            <li class="thumbnail-show swiper-slide">
                              <img src="assets/products/apparel5.jpg" alt="" />
                            </li>

                            <li class="thumbnail-show swiper-slide">
                              <img src="assets/products/apparel6.jpg" alt="" />
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="item">
                        <h1>Happy Siled Womens Summer Boho floral</h1>
                        <div class="content">
                          <div class="rating">
                            <div class="stars"></div>
                            <a href="#" class="mini-text">2,251 reviews</a>
                            <a href="#" class="add-review mini-text"
                              >Add Your Review</a
                            >
                          </div>
                          <div class="stock-sku">
                            <span class="available">In Stock</span>
                            <span class="sku mini-text">SKU-881</span>
                          </div>
                          <div class="price">
                            <span class="current">$80.90</span>
                            <span class="normal">$119.90</span>
                          </div>
                          <div class="colors">
                            <p>Color</p>
                            <div class="variant">
                              <form action="">
                                <p>
                                  <input type="radio"  name="color" id="cogrey">
                                  <label for="cogrey" class="circle"></label>
                                </p>

                                <p>
                                  <input type="radio"  name="color" id="coblue">
                                  <label for="coblue" class="circle"></label>
                                </p>

                                <p>
                                  <input type="radio"  name="color" id="cogreen">
                                  <label for="cogreen" class="circle"></label>
                                </p>

                              </form>
                            </div>
                          </div>

                          <div class="stock mini-text" data-stock="4000">
                            <div class="qty">
                              <span
                                >Sold:
                                <strong class="qty-sold">459</strong></span
                              >
                              <span
                                >Stock:
                                <strong class="qty-available">504</strong></span
                              >
                            </div>
                            <div class="bar">
                              <div class="available"></div>
                            </div>
                          </div>
                          <div class="offer">
                            <p>Offer ends at</p>
                            <ul class="flexcenter">
                              <li>1</li>
                              <li>15</li>
                              <li>27</li>
                              <li>07</li>
                            </ul>
                          </div>

                          <div class="sizes">
                            <p>Size</p>
                            <div class="variant">
                              <form action="">
                                <p>
                                  <input
                                    type="radio"
                                    name="size"
                                    id="size-40"
                                  />
                                  <label for="size-40" class="circle"
                                    ><span>40</span></label
                                  >
                                </p>

                                <p>
                                  <input
                                    type="radio"
                                    name="size"
                                    id="size-41"
                                  />
                                  <label for="size-41" class="circle"
                                    ><span>41</span></label
                                  >
                                </p>

                                <p>
                                  <input
                                    type="radio"
                                    name="size"
                                    id="size-42"
                                  />
                                  <label for="size-42" class="circle"
                                    ><span>42</span></label
                                  >
                                </p>

                                <p>
                                  <input
                                    type="radio"
                                    name="size"
                                    id="size-43"
                                  />
                                  <label for="size-43" class="circle"
                                    ><span>43</span></label
                                  >
                                </p>
                              </form>
                            </div>
                          </div>
                          <div class="actions">
                            <div class="qty-control flexitem">
                              <button class="minus circle">-</button>
                              <input type="text" value="1" />
                              <button class="plus circle">+</button>
                            </div>

                            <div class="button-cart">
                              <button class="primary-button">
                                Add to Cart
                              </button>
                            </div>

                            <div class="wish-share">
                              <ul class="flexitem second-links">
                                <li>
                                  <a href="#">
                                    <span class="icon-large"
                                      ><i class="ri-heart-line"></i
                                    ></span>
                                    <span>Wishlist</span>
                                  </a>
                                </li>

                                <li>
                                  <a href="#">
                                    <span class="icon-large"
                                      ><i class="ri-share-line"></i
                                    ></span>
                                    <span>Share</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>

                          <div class="description collapse">
                            <ul>
                              <li class="has-child expand">
                                <a href="#0" class="icon-small">Information</a>
                                <ul class="content">
                                  <li><span>Brands</span><span>Nike</span></li>
                                  <li>
                                    <span>Activity</span><span>Running</span>
                                  </li>
                                  <li>
                                    <span>Material</span><span>Fleece</span>
                                  </li>
                                  <li><span>Gender</span><span>Men</span></li>
                                </ul>
                              </li>
                              <li class="has-child">
                                <a href="#" class="icon-small">Details</a>
                                <div class="content">
                                  <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Beatae magnam, veritatis
                                    quibusdam enim suscipit, harum est
                                    praesentium architecto inventore voluptates
                                    aut saepe, corporis nulla rem tempora
                                    repellendus perferendis possimus modi.
                                  </p>
                                  <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Assumenda inventore ipsum
                                    corporis et. Iure deleniti provident omnis
                                    aspernatur! Reprehenderit excepturi neque
                                    dolorem officia saepe minima doloremque
                                    culpa porro cum quasi.
                                  </p>
                                </div>
                              </li>
                              <li class="has-child">
                                <a href="#" class="icon-small">Custom</a>
                                <div class="content">
                                  <table>
                                    <thead>
                                      <tr>
                                        <th>Size</th>
                                        <th>
                                          Bust
                                          <span class="mini-text">(cm)</span>
                                        </th>
                                        <th>
                                          Waist
                                          <span class="mini-text">(cm)</span>
                                        </th>
                                        <th>
                                          Hip
                                          <span class="mini-text">(cm)</span>
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>XS</td>
                                        <td>82,5</td>
                                        <td>62</td>
                                        <td>87,5</td>
                                      </tr>
                                      <tr>
                                        <td>S</td>
                                        <td>85</td>
                                        <td>63,5</td>
                                        <td>89</td>
                                      </tr>
                                      <tr>
                                        <td>M</td>
                                        <td>87,5</td>
                                        <td>67,5</td>
                                        <td>93</td>
                                      </tr>
                                      <tr>
                                        <td>L</td>
                                        <td>90</td>
                                        <td>72,5</td>
                                        <td>98</td>
                                      </tr>
                                      <tr>
                                        <td>XL</td>
                                        <td>93</td>
                                        <td>77,5</td>
                                        <td>103</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </li>
                              <li class="has-child expand">
                                <a href="#" class="icon-small"
                                  >Reviews<span class="mini-text">2.2k</span></a
                                >
                                <div class="content">
                                  <div class="reviews">
                                    <h4>Customers Reviews</h4>
                                    <div class="review-block-head">
                                      <div class="flexitem">
                                        <span class="rate-sum">4.9</span>
                                        <span>2,251 Reviews</span>
                                      </div>
                                      <a
                                        href="#review-form"
                                        class="secondary-button"
                                        >Write review</a
                                      >
                                    </div>
                                    <div class="review-block-body">
                                      <ul>
                                        <li class="item">
                                          <div class="review-form">
                                            <p class="person">
                                              Review by Sarah
                                            </p>
                                            <p class="mini-text">On 7/7/22</p>
                                          </div>
                                          <div class="review-rating rating">
                                            <div class="stars"></div>
                                          </div>
                                          <div class="review-title">
                                            <p>Awesome product!</p>
                                          </div>
                                          <div class="review-text">
                                            <p>
                                              Lorem ipsum dolor sit amet
                                              consectetur adipisicing elit.
                                              Necessitatibus, veritatis aliquid
                                              explicabo quas, distinctio
                                              doloremque quaerat commodi
                                              quibusdam sunt libero in
                                              cupiditate itaque vel. Unde quos
                                              quasi accusantium excepturi
                                              eveniet?
                                            </p>
                                          </div>
                                        </li>

                                        <li class="item">
                                          <div class="review-form">
                                            <p class="person">
                                              Review by Sarah
                                            </p>
                                            <p class="mini-text">On 7/7/22</p>
                                          </div>
                                          <div class="review-rating rating">
                                            <div class="stars"></div>
                                          </div>
                                          <div class="review-title">
                                            <p>Awesome product!</p>
                                          </div>
                                          <div class="review-text">
                                            <p>
                                              Lorem ipsum dolor sit amet
                                              consectetur adipisicing elit.
                                              Necessitatibus, veritatis aliquid
                                              explicabo quas, distinctio
                                              doloremque quaerat commodi
                                              quibusdam sunt libero in
                                              cupiditate itaque vel. Unde quos
                                              quasi accusantium excepturi
                                              eveniet?
                                            </p>
                                          </div>
                                        </li>
                                      </ul>
                                      <div class="second-links">
                                        <a href="#" class="view-all"
                                          >View All reviews
                                          <i class="ri-arrow-right-line"></i
                                        ></a>
                                      </div>
                                    </div>
                                    <div id="review-form" class="review-form">
                                      <h4>Write a review</h4>
                                      <div class="rating">
                                        <p>Are you satisfied enough?</p>
                                        <div class="rate-this">
                                          <input
                                            type="radio"
                                            name="rating"
                                            id="star5"
                                          />
                                          <label for="star5"
                                            ><i class="ri-star-fill"></i
                                          ></label>

                                          <input
                                            type="radio"
                                            name="rating"
                                            id="star4"
                                          />
                                          <label for="star4"
                                            ><i class="ri-star-fill"></i
                                          ></label>

                                          <input
                                            type="radio"
                                            name="rating"
                                            id="star3"
                                          />
                                          <label for="star3"
                                            ><i class="ri-star-fill"></i
                                          ></label>

                                          <input
                                            type="radio"
                                            name="rating"
                                            id="star2"
                                          />
                                          <label for="star2"
                                            ><i class="ri-star-fill"></i
                                          ></label>

                                          <input
                                            type="radio"
                                            name="rating"
                                            id="star1"
                                          />
                                          <label for="star1"
                                            ><i class="ri-star-fill"></i
                                          ></label>
                                        </div>
                                      </div>
                                      <form action="">
                                        <p>
                                          <label>Name</label>
                                          <input type="text" />
                                        </p>

                                        <p>
                                          <label>Summary</label>
                                          <input type="text" />
                                        </p>

                                        <p>
                                          <label>Review</label>
                                          <textarea
                                            cols="30"
                                            rows="10"
                                          ></textarea>
                                        </p>

                                        <p>
                                          <a href="#" class="primary-button"
                                            >Submit Review</a
                                          >
                                        </p>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- features product is also know as related product so, use as it is. -->
        <div class="related-products">
          <div class="container">
            <div class="wrapper">
              <div class="column">
                <div class="sectop flexitem">
                  <h2>
                    <span class="circle"></span><span>Related Products</span>
                  </h2>
                  <div class="second-links">
                    <a href="#" class="view-all"
                      >View all<i class="ri-arrow-right-line"></i
                    ></a>
                  </div>
                </div>
                <div class="products main flexwrap">
                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/apparel1.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter"><span>25%</span></div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>15</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(1,955)</span>
                      </div>

                      <h3><a href="#">Under Armour Men's Tech</a></h3>
                      <div class="price">
                        <span class="current">$56.50</span>
                        <span class="normal mini-text">$75.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold:<strong class="qty-sold">459</strong></span>
                          <span>Stock:<strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/apparel2.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active">
                            <a href="#"><i class="ri-heart-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-eye-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-shuffle-line"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter">
                        <span>15%</span>
                      </div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>8</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(1,255)</span>
                      </div>

                      <h3>
                        <a href="#">Women's light weight knit Hoodie Sweater</a>
                      </h3>
                      <div class="price">
                        <span class="current">$36.50</span>
                        <span class="normal mini-text">$65.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold:<strong class="qty-sold">1859</strong></span>
                          <span>Stock:<strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/electronic2.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active">
                            <a href="#"><i class="ri-heart-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-eye-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-shuffle-line"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter">
                        <span>5%</span>
                      </div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>15</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(3,955)</span>
                      </div>

                      <h3><a href="#">Iphone 15 pro max</a></h3>
                      <div class="price">
                        <span class="current">$1056.50</span>
                        <span class="normal mini-text">$1075.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold:<strong class="qty-sold">2459</strong></span>
                          <span>Stock:<strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>
                    </div>
                  </div>                

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/electronic4.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active">
                            <a href="#"><i class="ri-heart-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-eye-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-shuffle-line"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter">
                        <span>55%</span>
                      </div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>15</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(4,955)</span>
                      </div>

                      <h3><a href="#">Data Cable</a></h3>
                      <div class="price">
                        <span class="current">$6.50</span>
                        <span class="normal mini-text">$15.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold:<strong class="qty-sold">3459</strong></span>
                          <span>Stock:<strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>
                    </div> 
                  </div>

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/electronic5.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active">
                            <a href="#"><i class="ri-heart-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-eye-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-shuffle-line"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter">
                        <span>25%</span>
                      </div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>15</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(2,955)</span>
                      </div>

                      <h3><a href="#">Monitor</a></h3>
                      <div class="price">
                        <span class="current">$356.50</span>
                        <span class="normal mini-text">$375.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold:<strong class="qty-sold">2359</strong></span>
                          <span>Stock:<strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>
                    </div>
                    
                  </div>

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/apparel5.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active">
                            <a href="#"><i class="ri-heart-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-eye-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-shuffle-line"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter">
                        <span>25%</span>
                      </div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>15</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(1,155)</span>
                      </div>

                      <h3><a href="#">Jacket</a></h3>
                      <div class="price">
                        <span class="current">$156.50</span>
                        <span class="normal mini-text">$175.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold:<strong class="qty-sold">1459</strong></span>
                          <span>Stock:<strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/home4.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active">
                            <a href="#"><i class="ri-heart-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-eye-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-shuffle-line"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter">
                        <span>55%</span>
                      </div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>15</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(155)</span>
                      </div>

                      <h3><a href="#">chair</a></h3>
                      <div class="price">
                        <span class="current">$46.50</span>
                        <span class="normal mini-text">$55.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold:<strong class="qty-sold">2459</strong></span>
                          <span>Stock:<strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/home5.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active">
                            <a href="#"><i class="ri-heart-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-eye-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-shuffle-line"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter">
                        <span>15%</span>
                      </div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>15</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(1,955)</span>
                      </div>

                      <h3><a href="#">Bed for home</a></h3>
                      <div class="price">
                        <span class="current">$456.50</span>
                        <span class="normal mini-text">$475.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold:<strong class="qty-sold">319</strong></span>
                          <span>Stock:<strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/home2.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active">
                            <a href="#"><i class="ri-heart-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-eye-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-shuffle-line"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter">
                        <span>75%</span>
                      </div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>15</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(155)</span>
                      </div>

                      <h3><a href="#">Light holder</a></h3>
                      <div class="price">
                        <span class="current">$36.50</span>
                        <span class="normal mini-text">$55.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold:<strong class="qty-sold">3059</strong></span>
                          <span>Stock:<strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/products/shoe4.jpg" alt="" />
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active">
                            <a href="#"><i class="ri-heart-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-eye-line"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="ri-shuffle-line"></i></a>
                          </li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter">
                        <span>24%</span>
                      </div>
                    </div>
                    <div class="content">
                      <div class="offer flexitem">
                        <p class="mini-text">Offer ends at</p>
                        <ul class="flexcenter">
                          <li>1</li>
                          <li>15</li>
                          <li>27</li>
                          <li>07</li>
                        </ul>
                      </div>
                      <div class="rating">
                        <div class="stars"></div>
                        <span class="mini-text">(955)</span>
                      </div>

                      <h3><a href="#">Womens summer Tosca Shoes</a></h3>
                      <div class="price">
                        <span class="current">$103.50</span>
                        <span class="normal mini-text">$135.50</span>
                      </div>

                      <div class="stock mini-text" data-stock="4000">
                        <div class="qty">
                          <span>Sold: <strong class="qty-sold">3959</strong></span>
                          <span>Stock: <strong class="qty-available">504</strong></span>
                        </div>
                        <div class="bar">
                          <div class="available"></div>
                        </div>
                      </div>
                    </div>
                  </div>
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
                          <img src="assets/products/apparel4.jpg" alt="" />
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
