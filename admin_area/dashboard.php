<?php
include '../inc/config.php';
include '../inc/connect.php';
?>

<?php
if (isset($_POST['add_product'])){
  $id = $_POST['id'];
  $product_name = $_POST['product_name'];
  $product_model = $_POST['product_model'];
  $product_current_price = $_POST['product_current_price'];
  $product_normal_price = $_POST['product_normal_price'];
  $image1 = $_FILES['image1'];
  $image2 = $_FILES['image2'];
  $image3 = $_FILES['image3'];
  $product_discription = $_POST['product_discription'];
  $color = $_POST['color'];
  $size = $_POST['size'];
  $category = $_POST['category'];
  $brand = $_POST['brand'];
  $activity = $_POST['activity'];
  $material = $_POST['material'];
  $gender = $_POST['gender'];
  $custom_sizes = $_POST['custom_sizes'];
  // $date = now();
  $status = true;
  $comment = $_POST['comment'];


  $image1name = $image1['name'];
  $image2name = $image2['name'];
  $image3name = $image3['name'];

  $image1error = $image1['error'];
  $image2error = $image2['error'];
  $image3error = $image3['error'];

  $image1temp = $image1['tmp_name'];
  $image2temp = $image2['tmp_name'];
  $image3temp = $image3['tmp_name'];

  $image1name_separate =  explode('.', $image1name);
  $image2name_separate =  explode('.', $image2name);
  $image3name_separate =  explode('.', $image3name);
  
  $file1_extension  = strtolower(end($image1name_separate));
  $file2_extension = strtolower(end($image2name_separate));
  $file3_extension = strtolower(end($image3name_separate));

  $extension = array('jpg', 'jpeg', 'png', 'webp');


  // check condition for null
  if($product_name == '' and $product_model == '' and $product_current_price == '' and $product_normal_price == '' and $image1 == '' and $image2 == '' and $image3 == '' and $product_discription == ''){
    echo '<script>alert("please fill all the credientials")</script>';
    exit();
  }else{
    if (in_array(($file1_extension and $file2_extension and $file3_extension), $extension)){
      $upload_image1 = "../images/products/$image1name";      
      $upload_image2 = "../images/products/$image2name";
      $upload_image3 = "../images/products/$image3name";
 
      move_uploaded_file($image1temp, $upload_image1);
      move_uploaded_file($image2temp, $upload_image2);
      move_uploaded_file($image3temp, $upload_image3);
      
      $sql = "insert into `product_details` 

      (`product_name`, `product_model`, `product_current_price`, `product_normal_price`, `image1`, `image2`, `image3`,`product_discription`, `color`, `size`, `category`, `brand`, `activity`, `material`, `gender`, `custom_sizes`, `date`, `status`, `comment`) 

      values
      
      ('$product_name', '$product_model' , '$product_current_price' , '$product_normal_price' , '$image1name' , '$image2name' , '$image3name' , '$product_discription' , '$color' , '$size' , '$category' , '$brand' , '$activity' , '$material' , '$gender' , '$custom_sizes' , NOW() , '$status' , '$comment')";

      $result = mysqli_query($con, $sql);

      if ($result){
        echo '<script>alert(product added successfully)</script>';
      }else{
        die(mysqli_error($con));
      }
    }
    header("Location: dashboard.php");
    exit();
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

        <!-- <div class="header-main mobile-hide">
          <div class="container">
            <div class="wrapper flexitem">
              <div class="left">
                
              </div>
              <div class="right">
                
              
              
              </div>
            </div>
          </div>
        </div> -->
      </header>
      <!-- header -->

      <main>
        <div class="product_info">
          <div class="container">
            <div class="wrapper">
              <form action="" class="product_details" method="post" enctype="multipart/form-data">
                <div class="info">
                  <div class="product_name">
                    <label for="product_name">Product name </label>
                    <input name="product_name" type="text" autocomplete="off" required>
                  </div>

                  <div class="product_model">
                    <label for="product_mdoel">product model </label>
                    <input name="product_model" type="text" autocomplete="off"  required>
                  </div>

                  <div class="product_current_price">
                    <label for="product_price">Current price </label>
                    <input name="product_current_price" type="number" autocomplete="off"  required>
                  </div>

                  <div class="product_normal_price">
                    <label for="product_price">Normal price </label>
                    <input name="product_normal_price" type="number" autocomplete="off"  required>
                  </div>

                  <div class="image image1">
                    <label>Image </label>
                    <input name="image1" class="inputImage" type="file" autocomplete="off"  required>
                  </div>

                  <div class="image image2">
                    <label>Image </label>
                    <input name="image2" class="inputImage" type="file" autocomplete="off"  required>
                  </div>

                  <div class="image image3">
                    <label>Image </label>
                    <input name="image3" class="inputImage" type="file" autocomplete="off"  required>
                  </div>
                  
                  <div class="product_discription">
                    <label for="product discription">Discription </label>
                    <textarea name="product_discription" id="" cols="30" rows="1" autocomplete="off" ></textarea>
                  </div>

                  <div class="color">
                    <label for="color">Color</label>
                    <input name="color" type="text" autocomplete="off" >
                  </div>

                  <div class="size">
                    <label for="size">size</label>
                    <input name="size" type="number" autocomplete="off" >
                  </div>

                  <div class="categories">
                    <label for="category">Categories</label>
                    <input name="category" type="text" autocomplete="off" >
                  </div>

                  <div class="brands">
                    <label for="color">brands</label>
                    <input name="brand" type="text" autocomplete="off" >
                  </div>

                  <div class="activity">
                    <label for="activity">Activity</label>
                    <input name="activity" type="text" autocomplete="off" >
                  </div>

                  <div class="material">
                    <label for="material">Material</label>
                    <input name="material" type="text" autocomplete="off" >
                  </div>

                  <div class="gender">
                    <label for="Gender">Gender</label>
                    <input name="gender" type="text" autocomplete="off" >
                  </div>

                  <div class="custom_sizes">
                    <label for="custom sizes">custom sizes</label>
                    <input name="custom_sizes" type="text" autocomplete="off" >
                  </div>

                  <div class="comment">
                    <label for="comments">comment</label>
                    <input name="comment" type="text" autocomplete="off" >
                  </div>

                  
                </div>

                <button name="add_product" type="submit" class="primary-button">Add product</button>

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
