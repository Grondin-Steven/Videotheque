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

<body id="page-top">

    <!-- navbar -->
    <?php include('navbar.html'); ?>

    <!-- main -->

    <div class="container main">
        <h6 class="text-white title-carousel">WELCOME</h6>
        <h1 class="text-white title-accueil animate__animated one animate__fadeIn">The best movies <br> <span
                class="fw-lighter"><span class="animate__animated two animate__fadeIn">everywhere,</span><span
                    class="animate__animated three animate__fadeIn"> all of the time</span></span> </h1>
        <p class="text-white"><span class="fw-bold">4€99/mois</span> <br> <span class="fw-lighter">Illimité et sans
                engagement</span></p>
        <a class="btn btn-menu text-black btn-danger" href="#main-2">⯈ SUBSCRIBE</a>
        <img class="img-accueil img-fluid animate__animated animate__fadeInDown" src="../assets/tablette_and_tel.png"
            alt="">
    </div>
    </section>



    <!-- offres subscription -->
    <section id="subscription">
        <div class="container">
            <br> <br>
            <h3 class="text-center text-white">LES OFFRES DU MOMENTS</h3>
            <hr class="dividertwo">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part bg-light text-center">
                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                        <div class="title">
                            <h4>4,99€/mois</h4>
                        </div>
                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr
                                scripta ocurreret qui ad.</span>
                        </div>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part bg-light text-center">
                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                        <div class="title">
                            <img src="" alt="">
                            <h3>19,99€<span class="fw-light">/MOIS</span> <br> pendant 1 ans puis <br> 9,99/mois</h3>
                        </div>
                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr
                                scripta ocurreret qui ad.</span>
                        </div>
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part bg-light text-center">
                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                        <div class="title">
                            <h4>29,99€/mois</h4>
                        </div>
                        <div class="text">
                            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr
                                scripta ocurreret qui ad.</span>
                        </div>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-outline-light">DECOUVREZ TOUTES NOS OFFRES >></button>
                <br> <br>
            </div>
        </div>
    </section>

    <!-- main-2 -->
    <div id="main-2" class="container-fluid main-2">
        <br>
        <h2 class="text-white text-center">FILMS</h2>
        <hr class="divider">

        <!-- card film -->

        <div class="row mx-auto text-center">

            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "videotheque");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM film";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "            <div class=\"col mt-4\">\n";
            echo "                <div class=\"card card-color text-white\" style=\"width: 12rem;\">\n";
            echo "                   <img id='' src=\"".$row['image']."\" width=\"238\" class=\"card-img-top\" alt=\"...\">\n";
            echo "                    <div class=\"card-body bg-black \">\n";
            echo "                        <a href=\"details.php?id=".$row['id']."\" class=\"card-title text-decoration-none text-muted\">".$row['name']."</a>\n";
            echo "                    </div>\n";
            echo "                </div>\n";
            echo "            </div>";                   
        }
        // Free result set
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

<hr>

            <!-- footer -->
            <footer class="bg-transparent text-center text-white">
  <div class="container p-4">

    <section class="">
      <form action="">
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>

          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2"></label>
            </div>
          </div>

          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
        </div>
      </form>
    </section>

  
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright: Movies.re
  </div>
  <!-- Copyright -->
</footer>

</body>

</html>