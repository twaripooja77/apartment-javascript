<?php
$servername='localhost';
$username='root';
$password='';
$db='cozyapartment';
$conn=mysqli_connect($servername,$username,$password,$db);

$id=$_GET['edit'];



if(isset($_POST['updateroom'])){
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
    $update="UPDATE add_apartment SET floor='$floor',roomno='$roomno',roomsize='$roomsize',windowsize='$windowsize',
    balcony='$balcony',rent='$rent',image='$fileName' WHERE id=$id";
   
    $upload=mysqli_query($conn,$update);
    if($upload){
        move_uploaded_file($_FILES['photo']['tmp_name'],$target_path);
        $message[]='Updated Apartment Successfully!';
    }else{
        $message[]='Couldnot update Apartment!';
    }

}

};
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    mysqli_query($conn,"DELETE FROM add_apartment WHERE id=$id");
    header('location:adminp.php');
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
            <?php
            $select=mysqli_query($conn,"SELECT * FROM add_apartment");
            $row=mysqli_fetch_assoc($select);

            ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <h3>Edit Apartment</h3>
                <input type="text " placeholder="Enter Floor" value="<?php $row['floor'];?>" name="floor" class="box">
                <input type="text " placeholder="Enter Room No." value="<?php $row['roomno'];?>" name="roomno" class="box">
                <input type="text " placeholder="Enter Room Size" value="<?php $row['roomsize'];?>" name="roomsize" class="box">
                <input type="text " placeholder="Enter Window Size" value="<?php $row['windowsize'];?>" name="windowsize" class="box">
                <input type="text " placeholder="Balcony(Direction,Size)" value="<?php $row['balcony'];?>" name="balcony" class="box">
                <input type="text " placeholder="Enter Room Rent" value="<?php $row['rent'];?>" name="roomrent" class="box">
                <input type="file" accept="image/png,image/jpeg,image/jpg" value="<?php $row['image'];?>" name="photo" class="box" >
                <input type="submit" class="btn" name="updateroom" value="Update room">
                <a href="adminp.php" class="btn">Go Back</a>
            </form>
            
        </div>
    </div>
    

    

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