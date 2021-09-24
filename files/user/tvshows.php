<?php
include "../../inc/dbConnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reel Reviews | Homepage</title>
    <link rel="icon" href="../../img/logo1.png">
    <link rel="stylesheet" href="../../slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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

    <div class="movie-searchBar">
            <div class="dropdown">
                <button class="btn dropdown-toggle category-select" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                        $sqlTVShows = 'SELECT DISTINCT(category) FROM tvshows;';
                        $resultTVShows=mysqli_query($conn,$sqlTVShows);
                        $resultCheckTVShows=mysqli_num_rows($resultTVShows);
                        if($resultCheckTVShows>0){
                            while($row=mysqli_fetch_array($resultTVShows)){
                                echo "
                                <li>
                                <a class='dropdown-item' href='categoriesTVShows.php?catMovieId=$row[category]'>".$row['category']."</a>
                                </li>
                                ";
                            }
                        }
                        ?>

                </ul>
            </div>
            <div class="search" style="width: 100%;">
                <input type="text" class="searchTerm" placeholder="Search" style="padding: 6px;">
                <button type="submit" class="searchButton" style="padding: 6px;">
                <i class="fa fa-search"></i>
            </button>
            </div> 
        </div>

    <div class="homepage-multiple-movies-slider">
            <h1>New Releases</h1>
            <div class="multiple-items">
<?php
    $sqlNewReleases = "SELECT * FROM tvshows WHERE releasedate >= '2018-10-15';";
    $resultNewReleases=mysqli_query($conn,$sqlNewReleases);
    $resultCheckNewReleases=mysqli_num_rows($resultNewReleases);
    if($resultCheckNewReleases>0){
        while($row=mysqli_fetch_array($resultNewReleases)){
            echo "
            <div>
            <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
            <?php
            echo "
            </div>
            ";        
        }
    }
    ?>
            </div>
        </div>

        <div class="homepage-multiple-movies-slider">
            <h1>Sports</h1>
            <div class="multiple-items">
            <?php
    $sqlSports = "SELECT * FROM tvshows WHERE category = 'Sports';";
    $resultSports=mysqli_query($conn,$sqlSports);
    $resultCheckSports=mysqli_num_rows($resultSports);
    if($resultCheckSports>0){
        while($row=mysqli_fetch_array($resultSports)){
            echo "
            <div>
            <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
            <?php
            echo "
            </div>
            ";               
        }
    }
    ?>
            </div>
        </div>


        <div class="homepage-multiple-movies-slider">
            <h1>Sitcom</h1>
            <div class="multiple-items">
            <?php
    $sqlSitcom = "SELECT * FROM tvshows WHERE category = 'Sitcom';";
    $resultSitcom=mysqli_query($conn,$sqlSitcom);
    $resultCheckSitcom=mysqli_num_rows($resultSitcom);
    if($resultCheckSitcom>0){
        while($row=mysqli_fetch_array($resultSitcom)){
            echo "
            <div>
            <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
            <?php
            echo "
            </div>
            ";               
        }
    }
    ?>
            </div>
        </div>

        
        <div class="homepage-multiple-movies-slider">
            <h1>Documentary</h1>
            <div class="multiple-items">
            <?php
    $sqlDocumentary = "SELECT * FROM tvshows WHERE category = 'Documentary';";
    $resultDocumentary=mysqli_query($conn,$sqlDocumentary);
    $resultCheckDocumentary=mysqli_num_rows($resultDocumentary);
    if($resultCheckDocumentary>0){
        while($row=mysqli_fetch_array($resultDocumentary)){
            echo "
            <div>
            <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
            <?php
            echo "
            </div>
            ";               
        }
    }
    ?>
            </div>
        </div>
        
        <div class="homepage-multiple-movies-slider">
            <h1>Soap</h1>
            <div class="multiple-items">
            <?php
    $sqlSoap = "SELECT * FROM tvshows WHERE category = 'Soap';";
    $resultSoap=mysqli_query($conn,$sqlSoap);
    $resultCheckSoap=mysqli_num_rows($resultSoap);
    if($resultCheckSoap>0){
        while($row=mysqli_fetch_array($resultSoap)){
            echo "
            <div>
            <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
            <?php
            echo "
            </div>
            ";               
        }
    }
    ?>
            </div>
        </div>

        <div class="homepage-multiple-movies-slider">
            <h1>Cartoon</h1>
            <div class="multiple-items">
            <?php
    $sqlCartoon = "SELECT * FROM tvshows WHERE category = 'Cartoon';";
    $resultCartoon=mysqli_query($conn,$sqlCartoon);
    $resultCheckCartoon=mysqli_num_rows($resultCartoon);
    if($resultCheckCartoon>0){
        while($row=mysqli_fetch_array($resultCartoon)){
            echo "
            <div>
            <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
            <?php
            echo "
            </div>
            ";               
        }
    }
    ?>
            </div>
        </div>

        <div class="homepage-multiple-movies-slider">
            <h1>Children</h1>
            <div class="multiple-items">
            <?php
    $sqlChildren = "SELECT * FROM tvshows WHERE category = 'Children';";
    $resultChildren=mysqli_query($conn,$sqlChildren);
    $resultCheckChildren=mysqli_num_rows($resultChildren);
    if($resultCheckChildren>0){
        while($row=mysqli_fetch_array($resultChildren)){
            echo "
            <div>
            <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
            <?php
            echo "
            </div>
            ";               
        }
    }
    ?>
            </div>
        </div>

        <div class="homepage-multiple-movies-slider">
            <h1>Adventure</h1>
            <div class="multiple-items">
            <?php
    $sqlAdventure = "SELECT * FROM tvshows WHERE category = 'Adventure';";
    $resultAdventure=mysqli_query($conn,$sqlAdventure);
    $resultCheckAdventure=mysqli_num_rows($resultAdventure);
    if($resultCheckAdventure>0){
        while($row=mysqli_fetch_array($resultAdventure)){
            echo "
            <div>
            <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
            <?php
            echo "
            </div>
            ";               
        }
    }
    ?>
            </div>
        </div>

        <div class="homepage-multiple-movies-slider">
            <h1>Animation</h1>
            <div class="multiple-items">
            <?php
    $sqlAnimation = "SELECT * FROM tvshows WHERE category = 'Animation';";
    $resultAnimation=mysqli_query($conn,$sqlAnimation);
    $resultCheckAnimation=mysqli_num_rows($resultAnimation);
    if($resultCheckAnimation>0){
        while($row=mysqli_fetch_array($resultAnimation)){
            echo "
            <div>
            <a href='descriptionTVShows.php?descMovieId=$row[id]'>";?><img src="../posters/tvshows/<?php echo $row['poster']; ?>"><?php echo "</a>";?>
            <?php
            echo "
            </div>
            ";               
        }
    }
    ?>
            </div>
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
