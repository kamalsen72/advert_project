<!DOCTYPE html>
<?php
	include('db/connect.php');
    $tokenid = 0;
?>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Contact</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">	
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets --> 
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    </head>
    <body>
      <!-- header section start -->
      <div class="header_section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-3">
              <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            </div>
            <div class="col-sm-6">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                              <a class="nav-item nav-link" href="index.html">Home</a>
                              <a class="nav-item nav-link" href="browse_ads.php">Browse ads</a>
                              <a class="nav-item nav-link" href="about.html">About</a>
                              <a class="nav-item nav-link" href="clients.html">Clients</a>
                              <a class="nav-item nav-link" href="contact.html">Contact</a>
                            </div>
                        </div>
                        </nav>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="search_main">
                        <button class="submit_bt"><a href="submitadd.php"><span class="doctor"><img src="images/doctor-icon.png"></span>Submit ads</a></button>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
        <div class="contact_section layout_padding">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-10">
                        <div class="input_main">
                          <div class="container">
                          <form name="f1" action="submitadd.php" method="post">
                                <div class="">
                                  <input type="text" class="email-bt" placeholder="Input your Token Number" name="tokenid">
                                  <input type="submit" name="enter" value="Enter" class="button"/>
                                </div>
                              </form>
                              <?php
                                    if(isset($_POST['tokenid'])){
                                        $tokenid = $_POST['tokenid'];
                                    }else{
                                        $tokenid = -1;
                                    }
                                    if($tokenid ===''){
                                        echo "<tr align='left'>";
                                        echo "<td colspan='4'>";
                                        echo "<img src='images/error.png'>&nbsp;&nbsp; <font class='errorMsg'>Please input Token Number.</font>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }elseif($tokenid==5){
                                        echo "<img src='images/insert.png'>&nbsp;&nbsp; <font class='errorMsg'>Your Token Number is verified : </font><br/>";
                                        ?>
                                            
                                            <table>
                                                <tr>
                                                    <td><label for='category'>Select a Category :</label></td>
                                                    <td><select class="form-control" width="15" id='companyName' name='companyName'>
                                                        <?php 
                                                            $sql1 = "SELECT id, category_name FROM categories ORDER BY category_name";
                                                            $result_01 = $con->query($sql1);
                                                            while ($row = $result_01->fetch_assoc()) {
                                                                $id = $row['id'];
                                                                $category_name = $row['category_name'];
                                                                echo "<option value='$id'>$category_name </option>";
                                                            }
                                                        ?>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td><label for='title'>Item Title :</label></td>
                                                    <td><input class="form-control" type="text" name="itemtitle" placeholder="Add Title"></td>
                                                </tr>
                                                <tr>
                                                    <td><label for='details'>Item Details :</label></td>
                                                    <td><input type="text" name="itemdetails" placeholder="Add item details"></td>
                                                </tr>
                                                <tr>
                                                    <td><label for='details'>Item Notes :</label></td>
                                                    <td><textarea class="form-control" id="notes" name="notes" placeholder="Notes"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="submit" name="submit" value="Save" class="btn btn-primary"></td>
                                                </tr>
                                            </table>
                                    <?php
                                    }else{
                                        echo "<img src='images/error.png'>&nbsp;&nbsp; <font class='errorMsg'>Your Token Number is invalid.</font>";
                                    }
                              ?>
                          </div> 

                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
       
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="layout_padding footer_section">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div><img src="images/footer-logo.png"></div>
              <p class="dolor_text">We FreeAdd, ready to give your advert a highest possible bublic attension in no time.  </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <h1 class="quick_text">Quick links</h1>
              <div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">Join Us</span></div>
              <div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">Maintenance</span></div>
              <div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">Language Packs</span></div>
              <div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">LearnPress</span></div>
              <div class="chevron_arrow"><img src="images/chevron-arrow.png"><span class="padding-left">Release Status</span></div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <h1 class="subscribe_text">Subcribe email</h1>
              <p class="ipsum_text">Subscribe to our email newsletter for useful posts our promotional adds, sent out every week.</p>
              <input type="text" class="email_text" placeholder="Your Email" name="Name">
              <button class="submit_text">Submit</button>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <h1 class="quick_text">Contact Us</h1>
              <div class="map_flag"><img src="images/map-flag.png"><span class="padding-left">Old Kottawa Rd. Maharagma</span></div>
					  	<div class="dolor_text"><img src="images/email-icon.png"><span class="padding-left">freeadd@gmail.com</span></div>
						  <div class="dolor_text"><img src="images/phone-icon.png"><span class="padding-left">0776618795</span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
        <div class="copyright">
          <p class="copyright_text">2023 All Rights Reserved. Design By <a href="https://html.design">FreeAdd.lk co-operation</p>
        </div>
      <!-- copyright section end -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <!-- javascript --> 
          <script src="js/owl.carousel.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
          <script>
            $(document).ready(function(){
            $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
            
          </script> 
    </body>
</html>