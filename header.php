<?php 
  // session_start();
?>
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?=$title?></title>
  </head>
  <body>
      <!-- navbar start -->
      <nav class="navbar navbar-expand-lg navbar-light bg-info ">
        <a class="navbar-brand" href="#">fullproject</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <li class="nav-item">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item

        <?php 
          if($_SERVER['PHP_SELF'] == '/fullproject/register.php'){
            echo "active";
          }
         ?>
            ">
              <a class="nav-item nav-link" href="register.php">register</a>
            </li>
            <li class="nav-item

                <?php 
                  if($_SERVER['PHP_SELF'] == '/fullproject/login.php'){
                    echo "active";
                  }
                 ?>
                   ">
              <a class="nav-item nav-link" href="login.php">Login</a>
            </li>

            <li class="nav-item

                <?php 
                  if($_SERVER['PHP_SELF'] == '/fullproject/users-list.php'){
                    echo "active";
                  }
                 ?>
                   ">
              <a class="nav-item nav-link" href="users-list.php">user</a>
            </li>
           
          </div>
        </div>
      </nav>
    <!-- navbar end  -->