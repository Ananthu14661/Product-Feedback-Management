<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Rating Form </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
  
    <div class="navbar">
      <div class="navbar-logo">
        <img src="images/reactlogo2.png" alt="Logo">
        <span>ATOM</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      <ul>
          <li><a href="../main home page/index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="../contact/index.php">Contact</a></li>
        </ul>
      <div class="navbar-signin">
        <a href="../login system/logout.php ">Log Out</a>
      </div>
    </div>
    <?php
$conn = mysqli_connect('localhost','root','','user_db');
if(isset($_POST['reviewpost']))
{
$username=$_POST['username'];
$email=$_POST['emailid'];
$product=$_POST['productname'];
$review=$_POST['review'];
$brand=$_POST['brand'];
$model=$_POST['model'];
echo "<script> document.getElementById('thanks').style.display='block !important'; </script>";
 $select = "insert into reviews(username,review,product,emailid,brand,model) values('$username','$review','$product','$email','$brand','$model')" ;
 $result = mysqli_query($conn, $select);
 
 


}

?>
    <div class="container">
   
      <div  id="thanks" class="post">
        <div class="text">Thanks for rating us!</div>
        <div class="edit">EDIT</div>
      </div>
 
      <div id="star" class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="index.php?submitted=true" method="POST">
          <header></header>
          <div class="textarea">
            <textarea cols="10" name="username" placeholder="Enter your Name"></textarea>
          </div>
          <div class="textarea">
            <textarea cols="10" name="emailid" placeholder="Email ID"></textarea>
          </div>
          <div class="textarea">
            <textarea cols="10" name="productname" placeholder="Your Product"></textarea>
          </div>
          <div class="textarea">
            <textarea cols="5" name="brand" placeholder="Brand"></textarea>
          </div>
          <div class="textarea">
            <textarea cols="5" name="model" placeholder="Model"></textarea>
          </div>
          <div class="textarea">
            <textarea cols="30" name="review" placeholder="Describe your experience.."></textarea>
          </div>
          <div class="btn">
            <button name="reviewpost" type="submit" >Post</button>
          </div>
        </form>
      </div>
    </div>
   

  </body>
</html>
<script>
let urlString= window.location.href;
let paramString = urlString.split('?')[1];
        let queryString = new URLSearchParams(paramString);
        for(let pair of queryString.entries()) {
           if((pair[0]=='submitted')&&(pair[1]=='true'))
           {
            document.getElementById('thanks').style.display='block ';
           }
        }
    
</script>