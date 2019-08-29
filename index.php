<?php
//require_once 'database.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hyppighed</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">-->
</head>
<body style="background: #e3f2fd">
<div class="container px-0" style="background: white;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="index.php">Hyppighed - Sko Størrelser.</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">side 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">side 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">side 3</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        <form class="p-5" method="post" action="back_index.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="Email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" name="Name" class="form-control" id="inputName" placeholder="Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAge">Age</label>
                    <input type="text" name="Age" class="form-control" id="inputAge" placeholder="Age">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputShoeSize">Shoe Size</label>
                    <input type="text" name="Shoe" class="form-control" id="inputShoeSize" placeholder="Shoe Size">
                </div>
            </div>
            <button type="submit" name="Submit" class="btn btn-primary w-100">Sign in</button>
        </form>
    </div>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
</html>