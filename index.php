<?php
$insert=false;
$conn = mysqli_connect("localhost","root","","mails");
if(isset($_POST['sbtn'])){
    $emailb = $_POST['emailb'];
  $sql = "INSERT INTO `emails`(`Email`) VALUES ('$emailb')";
  mysqli_query($conn,$sql);
  if($conn->query($sql) == true){
    //    echo" successfully inserted";
          $insert=true;
     }
     else{
        echo"ERROR: $sql <br> $con->error";
     }
     $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dipak </title>

    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="st.css">
</head>

<body>

    <div class="body-inner">
        <section class="text-center p-t-200 p-b-200 text-light"
            style="background-image:url(homepages/coming-soon/images/1.jpg);">
            <div class="container">
                <div data-animate="fadeInUp">
                    <h1>Dimpak's Web</h1>
                </div>
                <div class="countdown countdown-light m-b-40" data-countdown="2020/09/19 12:34:56"
                    data-animate="fadeInUp"></div>
                <div data-animate-delay="600" data-animate="fadeInUp">
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, esse. </p>
                </div>
                <hr class="space">
                <div class="row">
                    <div class="col-6 center">
                        <div data-animate-delay="600" data-animate="fadeInUp">
                            <div class="widget clearfix widget-newsletter">
                          
                                <form action="" role="form" method="post">
                                    <small>Enter your email to Subscribe</small>
                                    <div>
                                        <input type="email" name="emailb" class="form-control required email"
                                            placeholder="Enter your Email">
                                        <span class="input-group-btn input-large">
                                            <button type="submit" class="btn" name="sbtn">Subscribe</button>
                                        </span>
                                    </div>
                                </form>

                        
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="space">

            </div>
        </section>
    </div>


    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <script src="js/functions.js"></script>
</body>



</html>