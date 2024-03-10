<?php 
$server="localhost";
$username="root";
$password="";
$database="pr1";
$submit = $_POST['submit'];
$num2=0;

if(isset($submit)){
    $conn= mysqli_connect($server,$username,$password,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $uname=$_POST["uname"];
    $lname=$_POST["lname"];
    $gen=$_POST["gender"];
    $phone=$_POST["phn"];
    $emm=$_POST["emm"];
    $usname=$_POST["uun"];
    $pass=$_POST["pp"];
    $cp=$_POST["cpp"];
    if($pass==$cp){
        $sql2="SELECT * FROM userdata WHERE uname='$usname'";
        $result2= mysqli_query($conn,$sql2);
        $res=mysqli_fetch_array($result2);
        $num2=mysqli_num_rows($result2);
        if($num2>0){
            echo"<script>alert('Please try with Different Username');
            window.history.back();</script>";
        }
        else{
        $sql="INSERT INTO `userdata` (`fname`, `lname`, `gender`, `contact`, `email`, `uname`, `pass`) VALUES ('$uname', '$lname', '$gen', $phone, '$emm', '$usname', '$pass')";
        $result= mysqli_query($conn,$sql);
        
        echo '<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="login.css" rel="stylesheet">
        <link rel="icon" href="images/GREEN THREADS.png">
        <link rel="stylesheet" href="navigation.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">  
        <link rel="icon" href="images/GREEN THREADS.png">
        <title>Success!!</title>
    </head>
    <body>
        <div class="navbar">
            <ul>
                <div class="cont1">
                    <li class="logo"><img src="images/GREEN THREADS.png" alt="brandlogo" style="height: 100%;border-radius: 20px;"></li>
                    <li class="home imgg "><a href="#">Home</a></li>
                    <li class="team imgg"><a href="#">Shop Now</a></li>
                </div>
            </ul>
        <div class="search_box">
                <form action="#" method="get">
                    <div class="search">
                        <button class="submit_search" id = "submit_button" type="submit"><span class="material-symbols-outlined">search</span></button>
                        <input class="searchForm" id="searchForm" type="text" placeholder="Search" style = "color:black;" autocomplete="off">
                    </div>
                </form>
        </div>
            <ul style="padding-left: 0;max-width:fit-content;">
                <div class="cont2">
                    <li class="imgg"><a href="Aboutus.html">About</a></li>
                    <li class="imgg"><a href="contactus.html">Contact</a></li>
                    <li class="imgg"><a href="#"><img src="images/ins.png" alt="insta" style="height: 3vh;"></a></li>
                    <li class="imgg"><a href="#"><img src="images/x.png" alt="twitter" style="height:3vh;"></a></li>
                    <li class="imgg"><a href="#"><img src="images/fb.png" alt="facebook" style="height: 3vh;"></a></li>
                    
                        <div class="socials mm">
                       
                        <select name="menu" id="menu" style="font-size: 20px;color:white" onchange="goToPage(this)">
                        <option value="#" selected>Menu</option>
                        <option value="landing_page.html">Home</option>
                        <option value="Home.html">Shop</option>
                        <option value="Aboutus.html">About us</option>
                        <option value="contactus.html">Contact us</option>
                        <option value="socials.html">Socials</option>
                        </select>
                        </div>
                    
                </div>
            </ul>
        </div>
    
        <div style="justify-content: center;align-items: center;display: flex;margin-top: 250px;flex-direction: column;">
            <div style="background-color: white;padding: 50px;">
            <span style="display: block;">YOU HAVE BEEN REGISTERED SUCCESSFULLY!!!!!</span>
            <span >GO To Login Page --></span><form action="index.html"><input type="submit" value="Redirect"></form>
            </div>
        </div>
    
    
    
        <script src="navigation.js" defer></script>
        <script>
            function goToPage(select) {
              var url = select.options[select.selectedIndex].value;
              if (url) {
                window.location = url;
              }
            }
        </script>
    </body>';
    }
    }
            
}


?>
