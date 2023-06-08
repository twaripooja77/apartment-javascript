<?php
$servername='localhost';
$username='root';
$password='';
$db='cozyapartment';
$conn=mysqli_connect($servername,$username,$password,$db);

?>
<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php
    $select=mysqli_query($conn,"SELECT id FROM user_form ORDER BY id");
    $row=mysqli_num_rows($select);
    ?>
     <?php
     $pick=mysqli_query($conn,"SELECT * FROM registration");
    $register=mysqli_query($conn,"SELECT id FROM registration ORDER BY id");
    $form=mysqli_num_rows($register);
    ?>
   
<div class="d-flex" id="wrapper">
<!--Sidebar starts here-->
<div class="bg-white" id="sidebar-wrapper">

<div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" >
<i class="fas fa-user-secret me-2"></i><?php echo $_SESSION['AdminLoginId'] ?>
</div>

<div class="list-group list-group-flush my-4">
    <a href="dashboard.php" class="list-group-item list-group-item-action bg-trasparent second-text active">
        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
    </a>
    <a href="admins.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>Studio Apartment
    </a>
    <a href="admin1.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>1BHK Apartment
    </a>
    <a href="admin2.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>2BHK Apartment
    </a>
    <a href="adminp.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>3BHK Apartment
    </a>
    
    
    <a href="adminlogout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
        <i class="fas fa-project-diagram me-2"></i> Logout
    </a>
</div>
</div>
<!--Sidebar ends here-->

<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0"> <img src="../images/logo7.png" height=80px width=350px alt=""></h2>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
   
    </nav>
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
           <div class="col-md-6">
           <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2"><?php echo $row;?></h3>
                    <p class="fs-5">Users</p>
                </div>
                <i class="fas fa-user fs-1 primary-text border rounded-full  p-2"></i>
            </div>
           </div>
           <div class="col-md-6">
           <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2"><?php echo $form;?></h3>
                    <p class="fs-5">Registration</p>
                </div>
                <i class="fas fa-file fs-1 primary-text border rounded-full  p-2"></i>
            </div>
           </div>
           

           <div class="row my-5">
            <h3 class="fs-4-mb-3">REGISTRATION</h3>
            <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Current Address</th>
                            <th scope="col">No. of Family</th>
                            <th scope="col">Room Code</th>
                            <th scope="col">Queries</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($choose=mysqli_fetch_assoc($pick)){
                        ?>
                    
                    
                        <tr>
                            <th scope="row"><?php echo $choose['id'];?></th>
                            <td><?php echo $choose['name'];?></td>
                            <td><?php echo $choose['phone'];?></td>
                            <td><?php echo $choose['currentaddress'];?></td>
                            <td><?php echo $choose['nooffamily'];?></td>
                            <td><?php echo $choose['roomcode'];?></td>
                            <td><?php echo $choose['queries'];?></td>
                        </tr>
                        <?php };
                        ?>
                    </tbody>
                </table>
            </div>
           </div>
           
        </div>
    </div>
</div>


</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    var el=document.getElementById("wrapper")
    var toggleButton= document.getElementById("menu-toggle")

    toggleButton.onclick=function(){
        el.classList.toggle("toggled")
    }
</script>
</body>
</html>