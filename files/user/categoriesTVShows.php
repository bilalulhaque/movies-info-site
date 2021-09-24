<?php
include "../../inc/dbConnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../slick/slick.css">
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light admin-navbar-main">
        <div class="container-fluid admin-navbar">
          <img src="../../img/logo1.png" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active admin-navbar-anchors" aria-current="page" href="homepage.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link admin-navbar-anchors" href="movies.php">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link admin-navbar-anchors" href="tvshows.php">TV Shows</a>
              </li>
              <li class="nav-item">
                <a class="nav-link admin-navbar-anchors" href="about.php">About</a>
              </li>
            </ul>
            <form class="d-flex navbar-icons">
                <i class="fab fa-facebook-f" onclick="facebookPage()"></i>
                <i class="fab fa-instagram" onclick="instaPage()"></i>
                <i class="fab fa-twitter" onclick="twitterPage()"></i>
            </form>
          </div>
        </div>
      </nav>

    <div class="movies-main-page">
        <div class="movies-boxes-main">
            <?php
$categoryId = (isset($_GET['catMovieId']) ? $_GET['catMovieId'] : '');
$categoryQuery="SELECT * FROM tvshows WHERE category='$categoryId'";

$runCategoryQuery=mysqli_query($conn,$categoryQuery);
$resultCheckCategoryQuery=mysqli_num_rows($runCategoryQuery);
if($resultCheckCategoryQuery>0){
    while($row=mysqli_fetch_array($runCategoryQuery)){
        echo "
        <div class='movies-boxes'>
        <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
        <?php
        echo "
        <a href='descriptionTVShows.php?descMovieId=$row[id]'>".$row['title']."</a>
        <h6>".date("Y",strtotime($row['releasedate']))." Movie</h6>
        </div>
        ";            
    }
}
?>

        </div>        
    </div>




    <footer>
        <div>
            <img src="../../img/logo1.png" alt="">
            <div class="user-footer-div-1">
                <div>
                    <a href="homepage.php" class="admin-navbar-anchors">Home</a>
                    <a href="movies.php" class="admin-navbar-anchors">Movies</a>
                    <a href="tvshows.php" class="admin-navbar-anchors">TV Shows</a>
                    <a href="about.php" class="admin-navbar-anchors">About</a>
                </div>
                <div>
                    <h5>Follow Us:</h5>
                    <div>
                        <span class="admin-navbar-anchors" onclick="facebookPage()">
                            <i class="fab fa-facebook-f"></i>
                            <p>Facebook</p>
                        </span class="admin-navbar-anchors">
                        <span class="admin-navbar-anchors" onclick="instaPage()">
                            <i class="fab fa-instagram"></i>
                            <p>Instagram</p>
                        </span>
                        <span class="admin-navbar-anchors" onclick="twitterPage()">
                            <i class="fab fa-twitter"></i>
                            <p>Twitter</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            &#169; 1999-2021 Reel Reviews, Inc
        </div>
    </footer>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="../../slick/slick.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>
