<?php
include '../inc/connect.php';
?>

<?php
                    $sql = "Select * from `product_details`";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $product_name = $row['product_name'];
                      $product_current_price = $row['product_current_price'];
                      $product_normal_price = $row['product_normal_price'];
                      $image1 = $row['image1'];
                      // echo $row['image1'];

                      echo "  
                          
                    <div class='item'>
                      <div class='media'>
                        <div class='thumbnail object-cover'>
                          <a href='#'>
                            <img src='$image1' alt='' />
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
                          <span>25%</span>
                        </div>
                      </div>
                      <div class='content'>
                        <h3 class='main-links'>
                          <a href='#'>Under Armour men Tech</a>
                        </h3>

                        <div class='rating'>
                          <div class='stars'></div>
                          <span class='mini-text'>(1,955)</span>
                        </div>

                        <div class='price'>
                          <span class='current'>$56.50</span>
                          <div class='normal mini-text'>$75.50</div>
                        </div>

                        <div class='mini-text'>
                          <p>2584 Sold</p>
                          <p>Free Shipping</p>
                          <p class='stock-danger'>Stock: 7 left!</p>
                        </div>
                      </div>
                    </div>
                      ";
                    }
                  ?>
