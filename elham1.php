
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <!--Nav Bar Start-->
     <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="Upload.html">
           <img src="image/SharedScreenshot.jpg">
        </a>
        
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Upload.html">Upload  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.html">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Display keys</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Memory Cache</a>
            </li>
          </ul>
          
        </div>
      </nav>
    <!--Nav Bar End -->
    <div class="section">

      <img src="image/Cloud.jpg" class="img-fluid" alt="">
      <div class="container mx-auto">
    
     


<div class = "section3">
   <p> All The Available Keys Stored In The Database</p>
</div>

</div>
<section>
<div class="content-div">

<?php

  include "dbConfig.php";

$sql = $connect->prepare('SELECT images, id, content, title, title_slug, image_url, created_at FROM posts WHERE title_slug = :title_slug ,');

$sql->execute(array(':title_slug' => $_GET['id']));

  $result = mysqli_query($connect, $sql) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){

    ($row = mysqli_fetch_assoc($result))

?>

  <h2><?php echo $row['title']; ?></h2>

  <amp-img src="<?php echo $row['image_url']; ?>" alt="Welcome"  height="200" width="330"></amp-img>

   <p><?php echo $row['content']; ?></p>

  <?php

    }

  else{

    echo "<h2>No Record Found.</h2>";

  }

  ?>

</div>  
</section>
<div class="section2">

<?php 

$connection = new mysqli("localhost","root","","codeupload");
$stmt =$connection->prepare("select * from codeupload");
$stmt ->execute();

$result = $stmt ->get_result();

echo "<table border ='1px'>";
while ($row = $result -> fetch_assoc()){
   echo "<tr><td> ". $row['imagekey']."</td></tr>";

}
?>
</div>

  </div>

</body>

</html>

<style>


  * {
    box-sizing: border-box;
}
body
{
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-weight: 400;

}

.navbar {
    background-color: #000020;
    color: white !important;
    margin-top: -8px;
    margin-left: -10px;
    /* height: 63px; */
    width: 1359px;
}


.navbar-brand{
    color: white;
}
.navbar button {
    color: white;
}
.navbar .nav-item a{
    color: white !important;
}

nav ul li {
    display: inline-block;
    list-style: none;
    margin: 0 20px;
    padding-left: 0;
    margin-bottom: 0;

}

nav ul li a {
    text-decoration: none;
    color: aliceblue;
}
div#navbarSupportedContent {
    margin-top: -41px;
    padding-bottom: 10px;
    padding-top: 10px;
}

ul.navbar-nav.mr-auto {
    margin-left: 35px;
    font-weight: 600;
 
    margin-top: -4px;
}


.navbar-brand img {
    margin-left: 17px;
    margin-top: 7px;
}


div#navbarSupportedContent ul :hover {
    background-color: #313946;
    border-radius: 5px;
   padding: 2px;
}


.section img{
    width: 100%; 
    height: 100%;
    position: relative;
    /* width: 1359px; */
 }
 .section .container{
     position: absolute;
     top: 50vh;
     left: 20vh;
     color: white;
     text-decoration: none;
 }

 /* .section img {
    /* width: 100%; */
    /* height: 100%; */
    /* position: relative; */
    /* width: 1350px; */
    /* margin-left: -10px; */
/* }  */


p.txt {
    margin-top: -100px;
    padding-bottom: 20px;
    font-weight: 700;
    font-size:x-large;
    color: rgb(230, 252, 252);

}
.section2 {
    position: relative;
    margin-top: -594px;
    color: antiquewhite;
    margin-left: 278px;
}

.section3 {
    margin-top: -191px;
    font-size: larger;
}

td {
    padding: 9px;
    padding-left: 48px;
    padding-right: 48px;
}





</style>









