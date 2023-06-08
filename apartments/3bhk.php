<?php
$host='localhost';
$username='root';
$password='';
$db='cozyapartment';
$conn=mysqli_connect($host,$username,$password,$db);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="apstyle.css">
    <title>Studio Apartment</title>
   
    </head>
    <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
          <symbol id="check" viewBox="0 0 16 16">
           
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
          </symbol>
        </svg>
        <div class="container py-3">
          <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4">3BHK Apartment</span>
              </a>
        
              <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="studio.php">Studio</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="1bhk.php">1BHK</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="2bhk.php">2BHK</a>
                <a class="py-2 text-dark text-decoration-none" href="3bhk.php">3BHK</a>
              </nav>
            </div>
        
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
              <h1 class="display-4 fw-normal">Available Rooms</h1>
              <p class="fs-5 text-muted">Includes three bedrooms along with bathrooms, living room, kitchen and a balcony which might be divided by different walls.</p>
            </div>
          </header>
</div>
<main>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

                

<?php
$select=mysqli_query($conn,"SELECT * FROM add_apartment");

?>
<?php
while($row=mysqli_fetch_Assoc($select)){




?>

            
             
<div class="col">

                  <div class="card-header py-2">
                  <h4 class="my-0 fw-normal"><?php echo $row['floor'];?></h4>
                  </div>
                  <div class="card-body">
                    <img src="..\uploaded_image\<?php echo $row['image'];?>" height="150px" width="250px">
                    <h5 class="room-no" >Room No.<?php echo $row['roomno'];?></h5>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Room Size: <?php echo $row['roomsize'];?></li>
                      <li>Window Size: <?php echo $row['windowsize'];?></li>
                      <li>Balcony: <?php echo $row['balcony'];?></li>
                      <li>Rent: <?php echo $row['rent'];?></li>

                    </ul>
                  </div>
                </div>
              
<?php
};
?>

</div>

<button type="button" class="w-100 btn btn-lg btn-outline-primary">Apply Here</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
    </html>

