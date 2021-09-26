<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user.css">
    <title>Document</title>
</head>

<body>
    <section class="header">
    <div class="container">
            <div class="row">
                <div class="col-md-12 menu-admin">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="home-admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category-admin.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Manage-food.php">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage-order.php">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        
    </section>
    <section class="main">
        <div class="container">
          
                <h1>Manage Food</h1><br>
                <input type="button" class="btn btn-primary bt-add" value="Add new food">
                <table class="table table-bordered  ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">S.N.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Featured</th>
                            <th scope="col">Active</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Pizza</td>
                            <td>$500</td>
                            <td>..(Image),,</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <div class="action-group">
                                    <input type="button" class="btn btn-success" value="Update Food">
                                    <input class="btn btn-danger" onclick='submitForm()' type="submit" value="Delete">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
           
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>2020 All rights reserved.Food House.Developed By - <a href="#">Pham Duy</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function submitForm() {
            return confirm('Are you sure?');
        }
    </script>
</body>

</html>