<!DOCTYPE html>
<html>
   <head>
       <title>PHP - ADMIN PANEL</title>
   </head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <style>

           input{
               width:200px !important;
           }

    </style>
<body>
    <div class="container">
        <h1>Update a Customer</h1>


           <div class="col-md-12">
               <div class="col-md-2">
                    <ul class="list-unstyled text-right">
                        <li>Name</li><br><br>
                        <li>Email Address</li><br><br>
                        <li>Phone Number</li><br><br>
                    </ul>
                </div>

                <div class="col-md-10">
                   <form>
                        <ul class="list-unstyled text-left">
                            <li>

                                <input type="text" class="form-control" placeholder="name" name="name">

                            </li><br>

                            <li><input type="text" class="form-control" placeholder="email"  name="email">

                            </li><br>
                            <li><input type="text" class="form-control" placeholder="phone"  name="phone"></li><br><br>

                        </ul>
                    </form>
                </div>
                <div style="background-color:gray; padding:50px;" class="col-md-12">
                    <form  action="" method="post">
                      <input type="submit" name="update" value="Update" class="btn btn-success">
                        <input type="submit" name="Back" value="Back" class="btn btn-default">
                    </form>
                </div>
            </div>
    </div>

</body>
</html>
