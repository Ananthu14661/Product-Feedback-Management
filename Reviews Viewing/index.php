<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Review Page</title>
  </head>
  <body>
    <div class="section__container">
      <div class="navbar">
        <div class="navbar-logo">
          <img src="../Main Home page/images/reactlogo2.png" alt="Logo">
          <span>ATOM</span>
        </div>
        <ul>
            <li><a href="../Main Home Page/index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="../Contact/index.php">Contact</a></li>
          </ul>
        <div class="navbar-signin">
          <a href="..\login system\login_form.php">Sign In</a>
        </div>
    </div>
      <div class="header">
        <br>
        <h2>REVIEWS</h2>
        <br>
        <h1>What our customers say about us.</h1>
      </div>
      <div class="testimonials__grid">
      <?php
        $conn = mysqli_connect('localhost','root','','user_db');
        $url= $_SERVER['REQUEST_URI'];  
$url_components = parse_url($url);
if(isset($url_components['query']))
{
parse_str($url_components['query'], $params);
 if(isset($params['product']))
 $linkparam=$params['product'];
 $select = "select * from reviews where product='$linkparam'" ;
 $result = mysqli_query($conn, $select);

}
else
{
 $select = "select * from reviews" ;
 $result = mysqli_query($conn, $select);
}
 while($row=mysqli_fetch_assoc($result))
 {
  $review=$row['review'];
  $name=$row['username'];
  $product=$row['product'];
  $brand=$row['brand'];
  $model=$row['model'];
?>
  <div class="card">
  <span><i class="ri-double-quotes-l"></i></span>
          <p>
           <?php echo "$review"; ?>
          </p>
          <hr />
         
          <p class="name"> <?php echo "By: $name"; ?></p>
          <p class="name"> <?php echo "Product: $product"; ?></p>
          <p class="name"> <?php echo "Brand: $brand"; ?></p>
          <p class="name"> <?php echo "Model: $model"; ?></p>
  
  </div>
<?php
 }


        ?>
        
  </body>
</html>
