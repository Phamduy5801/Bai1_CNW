<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href= "css/order.css">
</head>
<body>
<section class="header">
    <div class = "container">
        <div class="header">
           <div class ="logo">
                <a href="home.php">
                    <img src="img/111/logo.png" class="img-size"/>
                </a>
           </div>
           <div class="list-choice">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="category.php">Categories</a></li>
                    <li><a href="food-menu.php">Food</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
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
                    <img src="img/111/menu-pizza.jpg" class="img-size"/>
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
                <textarea rows="4" cols="50" name="text-area" value="">Enter your address</textarea><br>
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
                <img src="https://img.icons8.com/fluency/48/000000/facebook-new.png"/>
            </a>
            <a href="#">
                <img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/>
            </a>
            <a href="#">
                <img src="https://img.icons8.com/color/48/000000/twitter--v1.png"/>
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
</body>
</html>