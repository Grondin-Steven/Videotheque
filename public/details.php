<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- flavicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">
<link rel="manifest" href="../assets/favicon_io/site.webmanifest">
    <title>FullStream 2021 | Movies complete streaming 4K</title>
</head>

<body>
<!-- navbar -->
<?php include('navbar.html'); ?>
<section class="description text-white">
 <div class="container">
     <div class="row">
     <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "videotheque");
$id=$_GET["id"]; 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM film WHERE id ='$id'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo " <img class=\"col-4 img-fluid\" src=\"".$row['image']."\" width=\"120px\" alt=\"\">\n";
            echo "    <div class=\"col-8\">\n";
            echo "    <h2 class=\"text-black\">".$row["name"]."</h2>\n";
            echo "    <p class=\"text-white\">".$row["description"]."</p>";
            
        }
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
    </div>
 </div>
 </div>
</section>
</body>

</html>

