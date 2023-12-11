<?php
include '../inc/config.php';
include '../inc/connect.php';
?>

<?php
if (isset($_POST['add_slide_details'])){
  $id = $_POST['id'];
  $slide_title = $_POST['slide_title'];
  $slide_name = $_POST['slide_name'];
  $slide_offer = $_POST['slide_offer'];
  $slide_image = $_FILES['slide_image'];

  $slide_image_name = $slide_image['name'];

  $slide_image_tmp = $slide_image['tmp_name'];

  $slide_image_name_separate =  explode('.', $slide_image_name );
  
  $slide_image_extension = strtolower(end($slide_image_name_separate));

  $extension = array('jpg', 'jpeg', 'png', 'webp');

  // check condition for null
  if($slide_title == '' and $slide_name == '' and $slide_offer == '' and $slide_image == '' ){
    echo '<script>alert('please fill all the credientials')</script>';
    exit();
    
  }else{
    if (in_array($slide_image_extension, $extension)){
      $slide_image_upload = "../images/slide/$slide_image_name";      
 
      move_uploaded_file($slide_image_tmp, $slide_image_upload);

      $sql = "insert into `slide` 

      (`slide_title`, `slide_name`, `slide_offer`, `slide_image`) 

      values
      
      ('$slide_title', '$slide_name' , '$slide_offer' , '$slide_image_name')";

      $result = mysqli_query($con, $sql);

      if ($result){
        echo '<script>alert('product added successfully')</script>';
      }else{
        die(mysqli_error($con));
      }

      header("Location: slide_dashboard.php");
      exit();
    }
  }
}

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
    
  </head>
  <body>
    <div id="page" class="site">
      <header>
        <div class="header-top mobile-hide">
          <div class="container">
            <div class="wrapper flexitem">
              <div class="left">
                <ul class="flexitem main-links">
                  <li><a href="#">Blog</a></li>
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
                      <li><a href="#">INR</a></li>
                      <li><a href="#">NPR</a></li>
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
              <a href="#" class="trigger desktop-hide">
                <span class="i ri-menu-2-line"></span>
              </a>

              <div class="left flexitem">
                <div class="logo">
                  <a href="/"><span class="circle"></span>Avikesh</a>
                </div>
                
              </div>
              <div class="right">
                <ul class="flexitem second-links">
                  <li><a href="#">
                      <label for="admin name">Avion</label>
                  </a></li>

                  <li><a href="#">
                    <div class="admin_image object-cover"><img src="../assets/products/apparel4.jpg" alt=""></div>
                  </a></li>

                  <li><a href="#" type="submit" class="secondary-button">
                    Logout
                  </a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- header -->

      <main>
        <div class="product_info">
          <div class="container">
            <div class="wrapper">
              <form action="" class="product_details" method="post" enctype="multipart/form-data">
                <div class="info">
                  <div class="product_name">
                    <label for="product_name">Slide Title</label>
                    <input name="slide_title" type="text" autocomplete="off" required>
                  </div>

                  <div class="product_model">
                    <label for="product_mdoel">Slide name </label>
                    <input name="slide_name" type="text" autocomplete="off"  required>
                  </div>

                  <div class="product_current_price">
                    <label for="product_price">Slide offer </label>
                    <input name="slide_offer" type="text" autocomplete="off"  required>
                  </div>

                  <div class="image image1">
                    <label>Slide Image </label>
                    <input name="slide_image" class="inputImage" type="file" autocomplete="off"  required>
                  </div>
                </div>
                <button name="add_slide_details" type="submit" class="primary-button">Add Slide Details</button>
              </form>
            </div>
          </div>
        </div>
      </main>

      <footer>
        <div class="footer-info">
          <div class="container">
            <div class="wrapper">
              <div class="flexcol">
                <div class="logo">
                  <a href="#"><span class="circle"></span>Avikesh</a>
                  <p class="mini-text">Copyright &#169 2023 Avikesh. All right reserved.</p>
                </div>  
              </div>
            </div>
          </div>
        </div>
        <!-- footer info -->
      </footer>
      <!-- footer -->

      <!-- search bottom -->
    </div>

    <script src="script.js?v=<?=$version?>"></script>
  </body>
</html>
