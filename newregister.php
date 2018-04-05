<!DOCTYPE php>
<head>
   <div>
   <div Register>
   </div>
   <title>User - Registeration</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<body>
   <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
   <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
   <!-- Inline CSS based on choices in "Settings" tab -->
   <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
   <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
   <div class="bootstrap-iso">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col
               -sm-6 col-xs-12">
               <form method="post">
                  <div class="form-group ">
                     <label class="control-label " for="text">
                     Identity Card Number
                     </label>
                     <input class="form-control" id="icno" name="icno" type="text"/>
                  </div>
                  <div class="form-group ">
                     <label class="control-label " for="text1">
                     Password
                     </label>
                     <input class="form-control" id="text1" name="text1" type="text"/>
                  </div>
                  <div class="form-group ">
                     <label class="control-label " for="text2">
                     Name
                     </label>
                     <input class="form-control" id="text2" name="text2" type="text"/>
                  </div>
                  <div class="form-group ">
                     <label class="control-label requiredField" for="email">
                     Email
                     <span class="asteriskField">
                     *
                     </span>
                     </label>
                     <input class="form-control" id="email" name="email" type="text"/>
                  </div>
                  <div class="form-group ">
                     <label class="control-label " for="text3">
                     Text
                     </label>
                     <input class="form-control" id="text3" name="text3" type="text"/>
                  </div>
                  <div class="form-group">
                     <div>
                        <button class="btn btn-primary " name="submit" type="submit">
                        Submit
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <?php 
      // 1. kita panggil file connection tadi
      include_once 'conn.php';
      
      //2. dia check ada value yg dipost ke x
      if (isset($_POST['submit'])) {
        //declare variable untuk store data dati input
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $status = $_POST['status'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $contactno = $_POST['contactno'];
        $icnum = $_POST['icnum'];
      
       
      }
      
      // 2. kita buat query 
      
      
      
      
      
      
      
      
       ?>
   <!DOCTYPE html>
   <html lang="en">
      <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Bootstrap 101 Template</title>
         <!-- Bootstrap -->
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
         <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
         <!-- Inline CSS based on choices in "Settings" tab -->
         <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
      </head>
      <body>
         <!-- navigation bar start -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                     <li><a href="#">Register</a></li>
                     <li><a href="#">Login</a></li>
                     <li><a href="#">Property</a></li>
                     <li><a href="#">About Us</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                     <li><a href="#">Link</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Action</a></li>
                           <li><a href="#">Another action</a></li>
                           <li><a href="#">Something else here</a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="#">Separated link</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
         <!-- navigation bar end -->
         <!-- body start -->
         <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
         <div class="bootstrap-iso">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <form method="post" action="<?php $_PHP_SELF ?>">
                        <div class="form-group ">
                           <label class="control-label requiredField" for="userid">
                           User ID
                           <span class="asteriskField">
                           *
                           </span>
                           </label>
                           <input class="form-control" id="userid" name="userid" type="text"/>
                        </div>
                        <div class="form-group ">
                           <label class="control-label requiredField" for="username">
                           Username
                           <span class="asteriskField">
                           *
                           </span>
                           </label>
                           <input class="form-control" id="username" name="username" type="text"/>
                        </div>
                        <div class="form-group ">
                           <label class="control-label " for="email">
                           Email
                           </label>
                           <input class="form-control" id="email" name="email" type="text"/>
                        </div>
                        <div class="form-group ">
                           <label class="control-label requiredField" for="password">
                           Password
                           <span class="asteriskField">
                           *
                           </span>
                           </label>
                           <input class="form-control" id="password" name="password" type="text"/>
                        </div>
                        <div class="form-group ">
                           <label class="control-label requiredField" for="firstname">
                           First Name
                           <span class="asteriskField">
                           *
                           </span>
                           </label>
                           <input class="form-control" id="firstname" name="firstname" type="text"/>
                        </div>
                        <div class="form-group ">
                           <label class="control-label requiredField" for="lastname">
                           Last Name
                           <span class="asteriskField">
                           *
                           </span>
                           </label>
                           <input class="form-control" id="lastname" name="lastname" type="text"/>
                        </div>
                        <div class="form-group ">
                           <label class="control-label requiredField" for="status">
                           Status
                           <span class="asteriskField">
                           *
                           </span>
                           </label>
                           <select class="select form-control" id="status" name="status">
                              <option value="Single">
                                 Single
                              </option>
                              <option value="Married">
                                 Married
                              </option>
                              <option value="Engaged">
                                 Engaged
                              </option>
                           </select>
                        </div>
                        <div class="form-group ">
                           <label class="control-label " for="address">
                           Address
                           </label>
                           <input class="form-control" id="address" name="address" type="text"/>
                        </div>
                        <div class="form-group ">
                           <label class="control-label requiredField" for="salary">
                           Salary
                           <span class="asteriskField">
                           *
                           </span>
                           </label>
                           <input class="form-control" id="salary" name="salary" type="text"/>
                        </div>
                        <div class="form-group ">
                           <label class="control-label requiredField" for="contactno">
                           Contact No.
                           <span class="asteriskField">
                           *
                           </span>
                           </label>
                           <input class="form-control" id="contactno" name="contactno" type="text"/>
                        </div>
                        <div class="form-group ">
                           <label class="control-label requiredField" for="icnum">
                           IC Number
                           <span class="asteriskField">
                           *
                           </span>
                           </label>
                           <input class="form-control" id="icnum" name="icnum" type="text"/>
                        </div>
                        <div class="form-group">
                           <div>
                              <button class="btn btn-primary " name="submit" type="submit">
                              Submit
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- body end-->
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
         <script src="js/bootstrap.min.js"></script>
      </body>
   </html>
</body>