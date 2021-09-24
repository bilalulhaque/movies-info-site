<?php
include "../../../inc/dbConnection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reel Reviews | Add Movies</title>
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

      <div class="admin-post-content-main">
        <form class="add-movie-main" action="admin_addMovies.php" method="post" enctype="multipart/form-data">
            <h2>Add Movie</h2>
            <div>
                <label for="">Title</label>
                <input type="text" name="title" id="" required>
            </div>
            <div>
                <label for="">Description</label>
                <textarea name="description" id="" rows="8" required></textarea>
            </div>
            <div>
                <label for="">Initial Release</label>
                <input type="date" name="releasedate" id="" required>
            </div>
            <div>
                <label for="">Director</label>
                <input type="text" name="director" id="" required>
            </div>
            <div>
                <label for="">Cast</label>
                <input type="text" name="cast" id="" required>
            </div>
            <div>
                <label for="">Category</label>
                <select name="category" id="" required>
                  <option value="" selected>Category</option>
                  <option value="Action">Action</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Drama">Drama</option>
                  <option value="Fantasy">Fantasy</option>
                  <option value="Horror">Horror</option>
                  <option value="Mystery">Mystery</option>
                  <option value="Romance">Romance</option>
                  <option value="Thriller">Thriller</option>
              </select>
            </div>
            <div>
                <label for="">Poster</label>
                <input type="file" name="poster" id="" class="form-control text-white bg-secondary" required>
            </div>
            <div>
                <label for="">Trailer</label>
                <input type="file" name="trailer" id="" class="form-control text-white bg-secondary" required>
            </div>
            <div>
                <button type="submit" name="upload">Upload Movie</button>
            </div>
        </form>
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

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../../js/main.js"></script>
</body>
</html>



<?php
if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $releasedate = $_POST['releasedate'];
    $director = $_POST['director'];
    $cast = $_POST['cast'];
    $category = $_POST['category'];
    
    $posterName = $_FILES['poster']['name'];
    $posterTmp = $_FILES['poster']['tmp_name'];


    $trailerName = $_FILES['trailer']['name'];
    $trailerType = $_FILES['trailer']['type'];
    $trailerTmp = $_FILES['trailer']['tmp_name'];
    $trailerSize = $_FILES['trailer']['size'];
    
    $trailerDestination = "../../trailers/movies/".$trailerName; 


    move_uploaded_file($posterTmp, "../../posters/movies/$posterName");
    move_uploaded_file($trailerTmp, $trailerDestination);
    
    $insertQuery = "INSERT INTO movies(title, description, releasedate, director, cast, category, poster, trailer) VALUES ('$title','$description','$releasedate','$director','$cast','$category','$posterName','$trailerName' )";
   
    $runInsert = mysqli_query($conn, $insertQuery);
    if ($runInsert) {
        echo "<script>            Swal.fire({
          title: 'Movie Uploaded Successfully',
          icon: 'success',
          showConfirmButton: false,
          timer: 2000
        })</script>";
        echo "<script>
        setTimeout(function(){window.open('admin_addMovies.php', '_self')}, 3000);
        </script>";
    }
    else {
        echo "<script>            
        Swal.fire({
          title: 'Movie Upload Failed',
          icon: 'error',
          showConfirmButton: false,
          timer: 2000
        })</script>";
        echo "<script>
        setTimeout(function(){window.open('admin_addMovies', '_self') }, 3000);
        </script>";
    }
}
?>