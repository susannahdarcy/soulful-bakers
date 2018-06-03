<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conact</title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
     <div class="container">
        <div class="row" id="logo">
           <img src="media\logo.jpeg" alt="Logo">
        </div>
        <div class="row" id="menuBar">
            <div class="col-sm-2">
                <a href="index.html" class="button">Home</a>
            </div>
            <div class="col-sm-2">
                <a href="about.html" class="button">About</a>
            </div>
            <div class="col-sm-2">
                <a href="classes.html" class="button">Classes</a>
            </div>
            <div class="col-sm-2">
                <a href="#" class="button">Recipes</a>
            </div>
            <div class="col-sm-2">
                <a href="gallery.html" class="button">Gallery</a>
            </div>
            <div class="col-sm-2">
                <a href="contact.html" class="button">Contact</a>
            </div>
        </div>
        <div class="content">
            <div class="row" id="title">
                <h1>Contact Us</h1>
            </div>
            <div class="row">
                <p>
                    <?php

                        if (isset($_POST['name'])) {
                             $name = $_POST['name'];
                        }
                        
                        if (isset($_POST['email'])) {
                            $email = $_POST['email'];
                        }

                        $result = "Thank you " . $name . " for contacting us. We will contact you through your email " . $email . " soon";
                        echo "<p>" . $result . "</p>";
                    ?>
                </p>
            </div>
            
        </div>
        
    </div>
</body>
</html>