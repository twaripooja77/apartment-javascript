<?php
$servername='localhost';
$username='root';
$password='';
$db='cozyapartment';
$conn=mysqli_connect($servername,$username,$password,$db);

if(isset($_POST['addroom'])){
    $floor=$_POST['floor'];
    $roomno=$_POST['roomno'];
    $roomsize=$_POST['roomsize'];
    $windowsize=$_POST['windowsize'];
    $balcony=$_POST['balcony'];
    $rent=$_POST['roomrent'];

$target_path='C:\xampp\htdocs\mywork\uploaded_image/';
$fileName=basename($_FILES['photo']['name']);
$target_path=$target_path.$fileName;
move_uploaded_file($_FILES['photo']['tmp_name'],$target_path);

if(empty($floor)||empty($roomno)||empty($roomsize)||empty($windowsize)||empty($balcony)||empty($rent)||empty($fileName)){
    $message[]='please fill out all';
}else{
    $insert="INSERT INTO add1_apartment(floor,roomno,roomsize,windowsize,balcony,rent,image)
    VALUES('$floor','$roomno','$roomsize','$windowsize','$balcony','$rent','$fileName')";
    $upload=mysqli_query($conn,$insert);
    if($upload){
        move_uploaded_file($_FILES['photo']['tmp_name'],$target_path);
        $message[]='New Apartment Added Successfully!';
    }else{
        $message[]='Couldnot Add Apartment!';
    }

}

};
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    mysqli_query($conn,"DELETE FROM add1_apartment WHERE id=$id");
    header('location:admin1.php');
};

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
   
                <div class="container">
                <?php
    if(isset($message)){
        foreach($message as $message){
            echo '<span class="message">'.$message.'</span>';
        }
    }
    ?>
        <div class="admin-product-form-container">

            <form action="" method="POST" enctype="multipart/form-data">
                <h3>Add New Room</h3>
                <input type="text " placeholder="Enter Floor" name="floor" class="box">
                <input type="text " placeholder="Enter Room No." name="roomno" class="box">
                <input type="text " placeholder="Enter Room Size" name="roomsize" class="box">
                <input type="text " placeholder="Enter Window Size" name="windowsize" class="box">
                <input type="text " placeholder="Balcony(Direction,Size)" name="balcony" class="box">
                <input type="text " placeholder="Enter Room Rent" name="roomrent" class="box">
                <input type="file" accept="image/png,image/jpeg,image/jpg" name="photo" class="box" >
                <input type="submit" class="btn" name="addroom" value="Add room">
            </form>
        </div>
    </div>
    

    <?php
    $select=mysqli_query($conn,"SELECT * FROM add1_apartment");
    ?>
    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Room No.</th>
                    <th>Floor</th>
                    <th>Room Size</th>
                    <th>Window Size</th>
                    <th>Balcony</th>
                    <th>Rent</th>
                    <th>Image</th>
                    <th>Action</th>

                </tr>
            </thead>
<?php
while($row=mysqli_fetch_assoc($select)){

?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['roomno']; ?></td>
    <td><?php echo $row['floor']; ?></td>
    <td><?php echo $row['roomsize']; ?></td>
    <td><?php echo $row['windowsize']; ?></td>
    <td><?php echo $row['balcony']; ?></td>
    <td><?php echo $row['rent']; ?></td>
    <td><img src="..\uploaded_image\<?php echo $row['image'];?>" height="30px" width="30px" alt="fgffg"></td>
    <td>
        <a href="admin1_update.php?edit=<?php echo $row['id'];?>" class="btn"><i class="fas fa-edit"></i>
    Edit</a>
    <a href="admin1.php?delete=<?php echo $row['id'];?>" class="btn"><i class="fas fa-trash"></i>
    Delete</a>
    </td>

</tr>
<?php };
?>

        </table>
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