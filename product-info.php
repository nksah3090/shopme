<!DOCTYPE html>

<head>
    <title>Ecommerce Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        a {

            margin-left: 20px;
        }

        #nav1 {
            margin-left: 500px;
        }

        #div1 {
            margin-top: 50px;
            margin-bottom: 100px;
        }

        #btn1 {
            margin-bottom: 20px;
            padding-top: 50px;
            ;
        }

        button {
            margin-left: 50px;
        }

        #img1 {
            padding-bottom: 0px;
            ;
        }

        #btn3 {
            padding: 10px;
            margin-right: 50px;
        }

        h3 {
            text-decoration: white;

        }

        #fname {
            margin-left: 425px;
        }

        /* #navs{
            position: fixed;
            right: 0px;
            left: 0px;
            top: 0px;
            scroll-margin-right: 0px;
            
            
        } */
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="grocery.html">Grocery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="electronics.html">Electronics</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Clothing</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="menswear.html">Men's wear</a>
                        <a class="dropdown-item" href="womenswear.html">Women's wear</a>
                        <a class="dropdown-item" href="kidswear.html">Kids wear</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="furniture.html">Furniture</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Automobile</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="twowheeler.html">Two Wheelers</a>
                        <a class="dropdown-item" href="threewheeler.html">Three Wheelers</a>
                        <a class="dropdown-item" href="fourwheeler.html">Four Wheelers</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav1" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="help.html">Help & Support</a>
                </li>
            </ul>
        </nav>
    </div>
    <hr>
    <?php
    if (isset($_GET['image'])) {
        $product_image = $_GET['image'];
        $product_price = $_GET['price'];
        $product_name = ucwords(str_replace("-", " ", $_GET['name']));
    }
    ?>
    <div class="container mt-5 mb-5">

        <div class="row">
            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/<?php echo $product_image; ?>">
                </div>
            </div>
            <div class="col-sm-5">
                <h2>
                    <?php echo $product_name; ?>
                </h2>
                <h2>Best Price: ₹
                    <?php echo $product_price; ?>
                </h2>
                <form class="mt-3 border border-1 py-4 px-3" method="post" action="">
                    <h5>Enquiry Form</h5>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="subject" placeholder="Describe your need" rows="3">I am looking for <?php echo $product_name; ?> with best price of <?php echo $product_price; ?>.</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="enquiry">Submit</button>
                </form>
            </div>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = strtolower($_POST['fullname']);
    $email = strtolower($_POST['email']);
    $subject = strtolower($_POST['subject']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    if($fname != '' && $email != '' && $subject != ''){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $con = new mysqli($servername, $username, $password, $database);
            if ($con->connect_error) {
                die("connection erroe");
            }
            $sql = "INSERT INTO enquiry(full_name,email_address, subject) VALUES('$fname','$email', '$subject')";
            try{
                if ($con->query($sql) == TRUE) {
                    echo "<script>alert('Thanks for your enquiry, we will contact you soon!')</script>";
                } 
            }
            catch(Exception $e){
                echo "<script>alert('Something went wrong!')</script>";
            }
            $con->close();
        } else {
            echo "<script>alert('Email is not valid, try again!')</script>";
        }
    } else {
        echo "<script>alert('All fields are mandatory to filed!')</script>";
    }

}
?>
</html>