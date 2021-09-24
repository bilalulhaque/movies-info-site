<?php
include "../../../inc/dbConnection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reel Reviews | Dashboard</title>
    <link rel="icon" href="../../../img/logo1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light admin-navbar-main">
        <div class="container-fluid admin-navbar">
          <img src="../../../img/logo1.png" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active admin-navbar-anchors" aria-current="page" href="admin_dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link admin-navbar-anchors" href="admin_addMovies.php">Add Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link admin-navbar-anchors" href="admin_addTVShows.php">Add TV Shows</a>
              </li>
            </ul>
            <form class="d-flex">
              <a class="logout-btn" href="logout.php" onmouseout="hoverOff(this)">LOG OUT</a>
            </form>
          </div>
        </div>
      </nav>

      <div class="admin-dashboard-main">
        <div class="admin-dashboard-main-rows">
          <h2>Movies</h2>
          <div class="admin-dashboard-movies-main">


<?php
    $sqlMovies = 'SELECT * FROM movies;';
    $resultMovies=mysqli_query($conn,$sqlMovies);
    $resultCheckMovies=mysqli_num_rows($resultMovies);
    if($resultCheckMovies>0){
        while($row=mysqli_fetch_array($resultMovies)){
            echo "
            <div class='admin-dashboard-movies-div'>";?>
            <img src="../../posters/movies/<?php echo $row['poster']; ?>">
            <?php
            echo "
            <h5>".$row['title']."</h5>
            <a href='admin_dashboard.php?delId=$row[id]'>DELETE</a>
            </div>
            ";            
        }
    }
    ?>
          </div>
        </div>

        <div class="admin-dashboard-main-rows">
          <h2>TV Shows</h2>
          <div class="admin-dashboard-movies-main">

          <?php
    $sqlTVShows = 'SELECT * FROM tvshows;';
    $resultTVShows=mysqli_query($conn,$sqlTVShows);
    $resultCheckTVShows=mysqli_num_rows($resultTVShows);
    if($resultCheckTVShows>0){
        while($row=mysqli_fetch_array($resultTVShows)){
            echo "
            <div class='admin-dashboard-movies-div'>";?>
            <img src="../../posters/tvshows/<?php echo $row['poster']; ?>">
            <?php
            echo "
            <h5>".$row['title']."</h5>
            <a href='admin_dashboard.php?delId=$row[id]'>DELETE</a>
            </div>
            ";            
        }
    }
    ?>
          </div>
        </div>
      </div>





      <footer class="admin-footer">
          <div>
            <img src="../../../img/logo1.png" alt="">
            <div>
                <a href="admin_dashboard.php" class="admin-navbar-anchors">Dashboard</a>
                <a href="admin_addMovies.php" class="admin-navbar-anchors">Add Movies</a>
                <a href="admin_addTVShows.php" class="admin-navbar-anchors">Add TV Shows</a>
            </div>
          </div>
          <div>
            &#169; 1999-2021 Reel Reviews, Inc
        </div>
      </footer>

<?php
$deleteId = (isset($_GET['delId']) ? $_GET['delId'] : '');

$deleteOSMovieQuery="SELECT * FROM movies WHERE id='$deleteId'";
$runDeleteOSMovieQuery=mysqli_query($conn,$deleteOSMovieQuery);

$resultCheckDeleteOSMovieQuery=mysqli_num_rows($runDeleteOSMovieQuery);
if($resultCheckDeleteOSMovieQuery>0){
  $delOSMovie=mysqli_fetch_array($runDeleteOSMovieQuery);
  $delMoviePoster=$delOSMovie["poster"];
  unlink("../../posters/movies/".$delMoviePoster);
  $delMovieTrailer=$delOSMovie["trailer"];
  unlink("../../trailers/movies/".$delMovieTrailer);
  header("Refresh:0");
}
$deleteQuery="DELETE FROM movies WHERE id='$deleteId'";
$runDeleteQuery=mysqli_query($conn,$deleteQuery);
?>


<?php
$deleteId = (isset($_GET['delId']) ? $_GET['delId'] : '');

$deleteOSTVShowQuery="SELECT * FROM tvshows WHERE id='$deleteId'";
$runDeleteOSTVShowQuery=mysqli_query($conn,$deleteOSTVShowQuery);

$resultCheckDeleteOSTVShowQuery=mysqli_num_rows($runDeleteOSTVShowQuery);
if($resultCheckDeleteOSTVShowQuery>0){
  $delOSTVShow=mysqli_fetch_assoc($runDeleteOSTVShowQuery);
  $delTVShowPoster=$delOSTVShow["poster"];
  unlink("../../posters/tvshows/".$delTVShowPoster);
  $delTVShowTrailer=$delOSTVShow["trailer"];
  unlink("../../trailers/tvshows/".$delTVShowTrailer);
  header("Refresh:0");
}

$deleteQuery="DELETE FROM tvshows WHERE id='$deleteId'";
$runDeleteQuery=mysqli_query($conn,$deleteQuery);
?>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../../js/main.js"></script>
</body>
</html>