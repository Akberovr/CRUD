<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style media="screen">
      ul{
        list-style-type: none;
      }
      li{
        padding: 20px;
      }
      input{
        float: left;
      margin: 10px;
      }

    </style>
  </head>
  <body>
    <?php


      $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['number'];
       $id = $_GET['id'];
        include "main.php";

        if (!empty('name') && !empty('email') && !empty('phone')) {
             $sql = "INSERT INTO register(name,email,mobile) VALUES('$name','$email','$phone')";
              $query=mysqli_query($db_con,$sql);

              if($query){
                 header ('Location:index.php');
              }else{
                true;
              }
        }else{
          echo "error";
        }

     ?>
    <div class="container">
          <h1>CREATE CUSTOMER</h1>

            <div class="col-md-4">
          <ul>
            <li>Namme</li>
            <li>Email Address</li>
            <li>Mobile Number</li>
          </ul>
        </div>
<div class="container">
          <form class="" action="" method="post">
               <div class="form-group col-xs-4 ">
                     <input type="text" class="form-control" name="name" placeholder="name">
                      <input type="email" class="form-control"name="email" placeholder="email">
                      <input type="text" class="form-control"  name="number "placeholder="phone">
                </div>
          </form>
        </div>
          <div class=" col-md-offset-4">
                <input type="submit" class="btn btn-success" name="create" value="create">
                <button class="btn btn-defaul" name="button"><a href="index.php">BACK</a></button>
          </div>


    </div>
  </body>
</html>
