<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/order.css">
</head>

<body>
    <section class="header">
        <div class="container">
        <div class="row">
                <div class="col-md-3 logo">
                    <a href="home.php">
                        <img src="img/111/logo.png" class="img-size" />
                    </a>
                </div>
                <div class=" col-md-8 list-choice">
                <nav class="navbar navbar-expand-lg navbar-light float-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ">
                                <li class="nav-item item-group">
                                    <a class="nav-link" href="home.php">Home</a>
                                </li>
                                <li class="nav-item item-group">
                                    <a class="nav-link" href="category.php">Category</a>
                                </li>
                                <li class="nav-item item-group">
                                    <a class="nav-link" href="food-menu.php">Food</a>
                                </li>
                                <li class="nav-item item-group">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
    </section>
    <section class="content-form">
        <div class="container">
            <div class="form-order ">
                <h3 id="title" class="text-center">Fill this form to comfirm your order</h3>
                <div class="form-info1 float-container">
                    <p class="float-text">Selected food</p>
                    <div class="sled-img selected-food">
                        <img src="img/111/menu-pizza.jpg" class="img-size" />
                    </div>
                    <div class="sled-desc">
                        <h4>Food title</h4>
                        <p class="f-price">$2.3</p>
                        <p>Quantity</p>
                        <input type="number" id="quantity" name="quantity" min="1" max="">
                    </div>
                </div>
                <div class="form-info2 details float-container">
                    <p class="float-text">Delivery details</p>
                    <form class="f" action="">
                        <label>Full name:</label><br>
                        <input type="text" name="fullname" value="Enter your full name"><br>
                        <label>Phone number:</label><br>
                        <input type="text" value="Enter your telephone number"><br>
                        <label>Email:</label><br>
                        <input type="email" value="Enter your email"><br>
                        <label>Address:</label><br>
                        <textarea rows="4" cols="46" name="text-area">Enter your address</textarea><br>
                        <a href="#" type="submit" class="btn btn-primary">Confirm order</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="links">
        <div class="container">
            <div class="icon-group">
                <a href="#">
                    <img src="https://img.icons8.com/fluency/48/000000/facebook-new.png" />
                </a>
                <a href="#">
                    <img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png" />
                </a>
                <a href="#">
                    <img src="https://img.icons8.com/color/48/000000/twitter--v1.png" />
                </a>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="footer-title text-center">
                <p>All rights reserved. Designed by
                    <a href="#">Pham Duy</a>
                </p>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>