<?php
require_once "connection.php";

if(isset($_POST['save']))
{    

     $name = $_POST['name'];
     $description = $_POST['description'];
     $image = $_POST['image'];
     $sql = "INSERT INTO film (name,description,image)
     VALUES ('$name','$description','$image')";
     if (mysqli_query($conn, $sql)) {
        header("location: index.php");
        exit();
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <?php include "head.php"; ?>
</head>
<body>
 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add film record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="" required="">
                        </div>
                        <div class="form-group ">
                            <label>image</label>
                            <input type="text" name="image" class="form-control" value="" required="">
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <input type="text" name="description" class="form-control" value="" required="">
                        </div>

                        <input type="submit" class="btn btn-primary" name="save" value="submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>

            </div> 
               
        </div>

</body>
</html>
