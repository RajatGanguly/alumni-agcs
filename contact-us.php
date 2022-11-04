<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT | AGSC</title>
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/footer.css">
    <style>
        *{
            box-sizing: content-box!important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
        include "components/navbar.php";
        echo "<br><br><br>";
    ?> 
    <?php
        if (isset( $_POST['slnoEdit'])){
            include "./db/config.php";
            $sql = "INSERT INTO `message` ('message') VALUES ('$msg')";
        }
    ?>
    <img class = "cimg" src="./pics/banner1.jpg" alt="cbanner" >
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="chead">The Alumni Association of Assembly Of God Church School (AAAGCS) Haldia</p>
                
                <p class="csubhead">Registration Office:</p>
                <p class="cdata">Near, Helipad Rd, Haldia,<br> West Bengal 721607</p>
                
                <p class="csubhead">Email:</p>
                <p class="cdata">admin@alumniagcshaldia.org</p>
                
            </div>
            <div class="col-md-6">
                <p class="chead">Send us message</p>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
                    <textarea placeholder="Type your message..." name="" id="" cols="80" rows="8"></textarea>
                    <input type="button" value="Send" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <br><br>
    <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3698.6283584008743!2d88.06004791490093!3d22.02554648546699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02fa703e62a987%3A0x89b881a57d9c18d5!2sThe%20Assembly%20of%20God%20Church%20School!5e0!3m2!1sen!2sin!4v1647926596374!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <?php
        include "./components/footer.php";    
    ?>
</body>
</html>