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
    <link rel="stylesheet" href="apstyle.css">
</head>
<body>
   
<div class="d-flex" id="wrapper">
<!--Sidebar starts here-->
<div class="bg-white" id="sidebar-wrapper">

<div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" >
<i class="fas fa-user-secret me-2"></i><?php echo $_SESSION['AdminLoginId'] ?>
</div>

<div class="list-group list-group-flush my-4">
    <a href="#" class="list-group-item list-group-item-action bg-trasparent second-text active">
        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
    </a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-file me-2"></i>Studio Apartment
    </a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-chart-line me-2"></i>1BHK Apartment
    </a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-paperclip me-2"></i>2BHK Apartment
    </a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-house me-2"></i>3BHK Apartment
    </a>
    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
        <i class="fas fa-gift me-2"></i>Penthouse
    </a>
    
    <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
        <i class="fas fa-project-diagram me-2"></i>Logout
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item-dropdown">
                <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" 
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user me-2"></i>John doe
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="#" class="dropdown-item">Profile</a></li>
                <li><a href="#" class="dropdown-item">Setting</a></li>
                <li><a href="#" class="dropdown-item">Logout</a></li>

            </ul>
            </li>
        </ul>
    </div>
    </nav>
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
           <div class="col-md-6">
           <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">720</h3>
                    <p class="fs-5">products</p>
                </div>
                <i class="fas fa-user fs-1 primary-text border rounded-full  p-2"></i>
            </div>
           </div>
           <div class="col-md-6">
           <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">720</h3>
                    <p class="fs-5">products</p>
                </div>
                <i class="fas fa-file fs-1 primary-text border rounded-full  p-3"></i>
            </div>
           </div>
           

           <div class="row my-5">
            <h3 class="fs-4-mb-3">Recent Orders</h3>
            <div class="col">
                <table class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col">Products</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Television</td>
                            <td>Johny</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Television</td>
                            <td>Johny</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Television</td>
                            <td>Johny</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Television</td>
                            <td>Johny</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Television</td>
                            <td>Johny</td>
                            <td>50</td>
                        </tr>
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