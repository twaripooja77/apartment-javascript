<?php
$conn=mysqli_connect('localhost','root','','cozyapartment');

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $nooffamily=$_POST['nooffamily'];
  $roomcode=$_POST['roomcode'];
  $queries=$_POST['queries'];

$sql="INSERT INTO registration(name,phone,currentaddress,nooffamily,roomcode,queries)VALUES('$name','$phone','$address','$nooffamily','$roomcode','$queries')";
$select=mysqli_query($conn,$sql);

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <link rel="stylesheet" href="form.css" />
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="register">
      <div class="row">
        <div class="col-md-3 register-left">
          <img src="images/house-2492054.svg" alt="" />
          <h3><strong>Fill up the form and grab your chance to find a home!</strong></h3>
          
        </div>
        <div class="col-md-8 register-right">
          <form action="" method="post">
            <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <?php
    if(isset($message)){
        foreach($message as $message){
            echo '<span class="message">'.$message.'</span>';
        }
    }
    ?>
                      <h3 class="register-heading">Apply Here</h3>
                      
                      <div class="row register-form" >
                          <div class="col-md-8" >
                              <div class="form-group" >
                                  <input type="text" class="form-control" placeholder="Enter your Name " value="" name="name" size="70" required/>
                              </div>
                              <div class="form-group">
                                  <input type="number" class="form-control" placeholder="Enter your Phone" value="" name="phone" required />
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Current Address" value="" name="address"  required/>
                              </div>
                              <div class="form-group">
                                  <input type="number" class="form-control"  placeholder="No.of family staying" value="" name="nooffamily" required/>
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control"  placeholder="Selected Room Code" value="" name="roomcode" required/>
                              </div>
                              
                              <div class="form-group">
                                <input type="textarea" class="form-control" placeholder="Any Queries?" value="" name="queries" />
                            </div>
                            <div>
                            <input type="submit" class="btnRegister" name="submit" value="Register"/>
                          </div>
                          
                      </div>
                      
                  </div>
                
              </div>
              </form>
        </div>
      </div>
    </div>
  </body>
</html>
