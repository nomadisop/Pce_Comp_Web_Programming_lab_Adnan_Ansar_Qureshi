<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
    echo "<html><head></head><body><script>alert('Please login first');</script></body></html>";
    header("location: index.html");
    exit;
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navigation.css">
    <link rel="icon" href="images/GREEN THREADS.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="icon" href="images/GREEN THREADS.png">
    <title>Home</title>
</head>

<body>
    <audio src="whoosh-6316.mp3" type="audio/mp3" autoplay></audio>
    <div class="navbar">
        <ul>
            <div class="cont1">
                <li class="logo"><img src="images/GREEN THREADS.png" alt="brandlogo"
                        style="height: 100%;border-radius: 20px;"></li>
                <li class="home"><a href="landing_page.html">Home</a></li>
                <li class="team"><a href="home.php">Shop Now</a></li>
            </div>
        </ul>
        <div class="search_box">
            <form action="#" method="get">
                <div class="search">
                    <button class="submit_search" id="submit_button" type="submit"><span
                            class="material-symbols-outlined">search</span></button>
                    <input class="searchForm" id="searchForm" type="text" placeholder="Search" style="color:black;"
                        autocomplete="off">
                </div>
            </form>
        </div>
        <ul style="padding-left: 0;max-width:fit-content;">
            <div class="cont2">
                <?php 
                
                if($_SESSION["loggedin"]==true){
                    echo "
                    <form action='logout.php'>
                    <button value='submit' >Logout</button>
                    
                    </form>
                    ";
                }
                
                ?>
                <li class="home"><a href="Aboutus.html">About</a></li>
                <li class="team"><a href="contactus.html">Contact</a></li>
                <li class="home"><a href="#"><img src="images/ins.png" alt="insta" style="height: 3vh;"></a></li>
                <li class="team"><a href="#"><img src="images/x.png" alt="twitter" style="height:3vh;"></a></li>
                <li class="home"><a href="#"><img src="images/fb.png" alt="facebook" style="height: 3vh;"></a></li>
            </div>
        </ul>
    </div>
    <header style="background-color:grey;font-size:30px;"><center>Welcome <?php echo $_SESSION["username"] ?></center> </header>
    <div class="vidcnt">
        <center>
            <video src="Green Fashion - Sustainable clothing at UNEA.mp4" style="width:80%" 
                controls></video>
        </center>
    </div>
    <div style="display:flex;width: 100%;">
        <div class="filters">
            <div>
                <input type="checkbox" name="Jeans" id="jeans">
                <label for="jeans">Jeans</label>
            </div>
            <div>
                <input type="checkbox" name="winterwear" id="winter">
                <label for="winter">Winterwear</label>
            </div>
            <div style="display: flex;width: 100%;">
                <input type="checkbox" name="jacket" id="jacket">
                <label for="jacket">Jacket</label>
            </div>

        </div>
        <div class="products">
            <div class="devmain">
                <a href="p1lisa.php"><img src="images/p1.png" alt="lisa" style="width: 100%;"></a>

                <div>
                    <center><a href="p1lisa.php"><span >JACKET</span></a></center>

                </div>
            </div>
            <div class="devmain">
                <a href="p2.php">
                <img src="images/p2.png" alt="ADNAN" style="width: 100%;"></a>
                <div>
                    <center><a href="p2.php"><span>HOODIE</span></a></center>
                </div>
            </div>
            <div class="devmain">
                <a href="p3.php">
                    <img src="images/p3.png" alt="ADNAN" style="width: 100%;">
                    </a>
                <div>
                    <center><a href="krunker.io"><span>Designer Kurta</span></a></center>
                </div>
            </div>
        </div>
    </div>
<center>
    <div>
        <canvas id="canvas1" width="200" height="100"></canvas>
    </div>
</center>   


    <script src="navigation.js" defer></script>
    <script>
        const canvas = document.getElementById("canvas1");
        const ctx = canvas.getContext("2d");
        ctx.fillStyle = "Green";

    ctx.font = "30px Arial";
    ctx.fillText("SAVE EARTH", 10, 50);
    </script>

</body>

</html>