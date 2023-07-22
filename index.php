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
            text-decoration:white;

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
        h3{
            color:black;

        }
        p{
            color:black
        }
        #sub1{
            margin-left: 2px;
        }
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

    <div class="container" id="div1">
        <div id="place" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#place" data-slide-to="0" class="active"></li>
                <li data-target="#place" data-slide-to="1"></li>
                <li data-target="#place" data-slide-to="2"></li>
                <li data-target="#place" data-slide-to="3"></li>
                <li data-target="#place" data-slide-to="4"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Pictures/44e139b24479afd158bc4114f04891bb.jpg" onclick="location.href = 'product-info.php?name=women-blazer&price=2500&image=44e139b24479afd158bc4114f04891bb.jpg'" alt="" width="1200" height="500">
                    <div class="carousel-caption">
                        <h3 style="color:black;">Women Blazer</h3>
                        <p>Enquire Now - 2500</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Pictures/58ccf0b8588653f63f55e93dc68d7cd0.jpg" alt="" onclick="location.href = 'product-info.php?name=mens-formal&price=3000&image=58ccf0b8588653f63f55e93dc68d7cd0.jpg'" width="1200" height="500">
                    <div class="carousel-caption">
                        <h3>Men Formals</h3>
                        <p>Enquire Now - 3000</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="Pictures/2757aac1a9c82af15ef5b28fac5a49f2.jpg" alt="" width="1200" onclick="location.href = 'product-info.php?name=honda-activa-6g&price=99000&image=2757aac1a9c82af15ef5b28fac5a49f2.jpg'" height="500">
                    <div class="carousel-caption">
                        <h3>Activa 6G</h3>
                        <p>Enquire Now - 99000</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Pictures/9e75e62185087ca9dfc328a7815c5e78.jpg" alt="" width="1200" onclick="location.href = 'product-info.php?name=kissan-fruit-jam&price=250&image=9e75e62185087ca9dfc328a7815c5e78.jpg'" height="500">
                    <div class="carousel-caption">
                        <h3>Kissan Fruit Jam</h3>
                        <p>Enquire Now - 250</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Pictures/c5273cab7d079fab5e586f2be8176aca.jpg" alt="" width="1200" onclick="location.href = 'product-info.php?name=dinning-table&price=40000&image=c5273cab7d079fab5e586f2be8176aca.jpg'" height="500">
                    <div class="carousel-caption">
                        <h3>Dinning Table</h3>
                        <p>Enquire Now - 40000</p>
                    </div>
                </div>



            </div>
            <a class="carousel-control-prev" href="#place" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#place" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <hr>
    <center>
        <h1>Grocery Items</h1>
    </center>
    <div class="container mt-5 mb-5">

        <div class="row">
            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/cb6b01c7a079fc8d0da9828931863196.jpg">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=Tata-Tea&price=100&image=cb6b01c7a079fc8d0da9828931863196.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/f35da73e77102b2e90b18645abd6b718.jpg">
                    <div class="card-body">


                        <button class="btn btn-primary"
                            onclick="location.href = 'product-info.php?name=Fanta&price=75&image=f35da73e77102b2e90b18645abd6b718.jpg'">Check
                            Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" id="img1" src="Pictures/2c67d172d898760d5aa878ab000bbe91.jpg">
                    <div class="card-body">


                        <button class="btn btn-primary"
                            onclick="location.href = 'product-info.php?name=Tomato-Ketchup&price=125&image=2c67d172d898760d5aa878ab000bbe91.jpg'">Check
                            Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/fe73bc123f94f9b56e4dacb3c2a16081.jpg">
                    <div class="card-body">


                        <button class="btn btn-primary"
                            onclick="location.href = 'product-info.php?name=haldiram-mix-namkeen&price=50&image=fe73bc123f94f9b56e4dacb3c2a16081.jpg'">Check
                            Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container mt-5 mb-5">

        <div class="row">
            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/2f0b3be3a08d94b8a04d25edc7f84491.jpg">
                    <div class="card-body">


                        <button class="btn btn-primary"  onclick="location.href = 'product-info.php?name=maggi&price=20&image=2f0b3be3a08d94b8a04d25edc7f84491.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/3214ef044c19d1cf888b891f232bd4c2.jpg" height="350px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=lays&price=20&image=3214ef044c19d1cf888b891f232bd4c2.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" id="img1" src="Pictures/33c2a119339a3c7ee8dc1757997ff635.jpg">
                    <div class="card-body">


                        <button class="btn btn-primary"  onclick="location.href = 'product-info.php?name=dabur-honey&price=300&image=33c2a119339a3c7ee8dc1757997ff635.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/ee8b4e74010abc7c9c409911244f7846.jpg">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=rooh-afza&price=100&image=ee8b4e74010abc7c9c409911244f7846.jpg'">Check Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <center>
        <h1>Electronics Items</h1>
    </center>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/352efa25d9b4db6c8dffe276fb383ee1.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=hp-external-ssd&price=1500&image=352efa25d9b4db6c8dffe276fb383ee1.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/3082a4272f4eb86dc7451639d178839e.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=foldable-laptop&price=90000&image=3082a4272f4eb86dc7451639d178839e.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" id="img1" src="Pictures/be779d35e482e2f02218de6e884f5845.jpg"
                        height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=projector&price=70000&image=be779d35e482e2f02218de6e884f5845.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/f5bd4517c978d78c26caee9921ce287a.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=i-phone&price=150000&image=f5bd4517c978d78c26caee9921ce287a.jpg'">Check Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <center>
        <h1>Clothing</h1>
    </center>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/1b77613488faa41d69d326ff228e017c.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=lehanga&price=40000&image=1b77613488faa41d69d326ff228e017c.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/4ed8155e74fed4091192890b62043f0e.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=men-shirt-with-pant&price=1999&image=4ed8155e74fed4091192890b62043f0e.jpg'">Check Details</button>

                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" id="img1" src="Pictures/8391713797e31210eb33c80fadf396aa.jpg"
                        height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=palazzo&price=800&image=8391713797e31210eb33c80fadf396aa.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/6b6b58c185fa7cd51cb4cd59d9245a36.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=kids-jean-top&price=1200&image=6b6b58c185fa7cd51cb4cd59d9245a36.jpg'">Check Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <center>
        <h1>Furniture</h1>
    </center>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/2f1562646d11b70494ae4efca76a5ace.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=long-chair&price=6000&image=2f1562646d11b70494ae4efca76a5ace.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/db497bcfcd6417b73bb38b2628148a2a.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=table&price=8000&image=db497bcfcd6417b73bb38b2628148a2a.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" id="img1" src="Pictures/53b68833a19668a875185b201055b45b.jpg"
                        height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=dining-table&price=35000&image=53b68833a19668a875185b201055b45b.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/12c32ad7b760f63b403c48d08eb926dd.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=accent-chair&price=60000&image=12c32ad7b760f63b403c48d08eb926dd.jpg'">Check Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <center>
        <h1>Automobile</h1>
    </center>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/02d94dc223aa3f63223a9ad916fcd607.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=nissan-car&price=800000&image=02d94dc223aa3f63223a9ad916fcd607.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/3e4c3a3f08615cf14c43682238a37538.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=hyundai-car&price=1500000&image=3e4c3a3f08615cf14c43682238a37538.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" id="img1" src="Pictures/4d68edf874473e8039f4257354dc8f76.jpg"
                        height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=auto-rickshaw&price=400000&image=4d68edf874473e8039f4257354dc8f76.jpg'">Check Details</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card-deck" style="width: 18rem;">
                    <img class="card-img-top" src="Pictures/032cac07003e62ce0a21be9577df95c8.jpg" height="300px">
                    <div class="card-body">


                        <button class="btn btn-primary" onclick="location.href = 'product-info.php?name=mahindra-car&price=2000000&image=032cac07003e62ce0a21be9577df95c8.jpg'">Check Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid bg-secondary text-white">
        <br><br>
        <center>
            <h1>Shopme</h1>
            <hr style="width:800px"><br>
            <form action="" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <input type="text" required class="form-control input-lg" placeholder="Full Name" id="fname"
                                name="fullname"><br><br>
                            <input type="email" required class="form-control input-lg" placeholder="Your Email"
                                id="fname" name="email"><br><br>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" id="sub1" name="subscribe">Subscribe</button><br><br>
            </form>
            <h5>Helpline number : 123-2886622-123</h5><br>
            <h5> Home | Grocery | Electronics | Clothing | Furniture | Automobile </h5><br>
            <h5> Contact | About Us | Help & Support</h5><br>

            &copy; 2020 All Rights Reserved. Design by Neeraj Kumar
        </center><br>


    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = strtolower($_POST['fullname']);
        $email = strtolower($_POST['email']);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mydb";
        $con = new mysqli($servername, $username, $password, $database);
        if ($con->connect_error) {
            die("connection erroe");
        }
        $sql = "INSERT INTO newsletter(full_name,email_address) VALUES('$fname','$email')";
        try{
            if ($con->query($sql) == TRUE) {
                echo "<script>alert('Thanks for subscription!')</script>";
            } 
        }
        catch(Exception $e){
            echo "<script>alert('Possible Duplicate Email!')</script>";
        }

        
        $con->close();
    }

    ?>



</body>

</html>