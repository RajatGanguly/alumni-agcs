<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY | AGCS</title>
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/footer.css">
    <style>
        body {
  background-color: #fff;
  color: #000;
}
.h1 {
  text-align: center;
}
/* placing evrything in the section in the center */
.gallery-container {
  display: flex;
  justify-content: center;
}
/*making the gallery flex and also adding wrap to make it a litle bit responsive */
.gallary {
  width: 75%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 20px;
}
/* styling the images */
.gallary > img {
  width: 250px;
  height: 150px;
  object-fit: cover;
  border-radius: 10px;
}

    </style>
</head>
<body>
    <?php
        include "components/navbar.php";
        echo "<br><br><br>";
    ?>    

  <h1 class="h1">Our Memories </h1>
  <section class="gallery-container">

    <div class="gallary">
     <?php
     echo "<img src='pics/img (1).jpeg'>";
     echo "<img src='pics/img (40).jpeg'>";
     echo "<img src='pics/img (41).jpeg'>";
     echo "<img src='pics/img (42).jpeg'>";
     echo "<img src='pics/img (7).jpeg'>";
     echo "<img src='pics/gal1.jpg'>";
       $k  = 8;
       while($k<43){
           if ($k == 39 or $k == 33 or $k == 23 or $k == 24){
               $k++;
               continue;
           }
         echo "<img src='pics/img (".$k.").jpeg'>";
         $k=$k+1;
       }
     ?>
     <?php
       $k  = 1;
       while($k<6){
         echo "<img src='pics/img (".$k.").jpg'>";
         $k=$k+1;
       }
     ?>
    </div>

  </section>

    <?php
        include "./components/footer.php";    
    ?>
</body>
</html>