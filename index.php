<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo1.png">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="welcome-page-background">
        <div class="discover-div w3-container w3-center w3-animate-left">
            <img src="img/logo1.png" alt="">
            <h2>The Entertainment Designed Content-to-Audience Channel</h2>
            <button id="discoverBtn" onmouseout="hoverOff(this)">DISCOVER</button>
        </div>
        <div class="admin-or-user-Div">
            <img src="img/logo1.png" alt="">
            <h2>Who would you like to continue/ sign in as?</h2>
            <div>
                <button id="adminBtn" onmouseout="hoverOff(this)" onclick="loginPage()">Admin</button>
                <button id="userBtn" onmouseout="hoverOff(this)" onclick="userSide()">User</button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>