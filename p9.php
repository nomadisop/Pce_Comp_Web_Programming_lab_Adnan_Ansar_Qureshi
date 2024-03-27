<?php
session_start();

if(!isset($_SESSION["loggedin"])){
    
    echo "<html><head></head><body><script>alert('Please login first');</script></body></html>";
    header("location: index.html");
    exit;
}
include 'connect.php';
$pid=9;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="icon" href="images/GREEN THREADS.png">
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
    <title>Item page</title>
    <style>
        
        label {
          margin-bottom: 8px;
        }
    
       
        input[type="radio"] {
          display: none; 
        }
    
        label.size-label {
          display: inline-block;
          border: 2px solid #c1a780;
          padding: 8px;
          margin-right: 5px;
          cursor: pointer;
        }
    
       
        input[type="radio"]:checked + label.size-label {
          background-color: #c1a780;
          color: white;
        }

        td{text-align: center;}
      </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <div class="cont1">
                <li class="logo"><img src="images/GREEN THREADS.png" alt="brandlogo" style="height: 100%;border-radius: 20px;"></li>
                <li class="home"><a href="home.php">Home</a></li>
                <li class="team"><a href="#">Shop Now</a></li>
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
            <?php 
                if($_SESSION["loggedin"]==true){
                    echo "
                    <form action='logout.php'>
                    <button value='submit' >Logout</button>
                    
                    </form>
                    ";
                }
                
                ?>
                <li class="home"><a href="#">About</a></li>
                <li class="team"><a href="#">Contact</a></li>
                <li class="home"><a href="#"><img src="images/ins.png" alt="insta" style="height: 3vh;"></a></li>
                <li class="team"><a href="#"><img src="images/x.png" alt="twitter" style="height:3vh;"></a></li>
                <li class="home"><a href="#"><img src="images/fb.png" alt="facebook" style="height: 3vh;"></a></li>
            </div>
        </ul>
    </div>
    <header style="background-color:grey;font-size:30px;"><center>Welcome <?php echo $_SESSION["username"] ?></center> </header>
    <div style="display: flex;justify-content: center;align-items: center;">
    
    <div class="main-cnt">
        <div  class="pi"><?php
        $query = "SELECT * FROM `products` where id=$pid";
                $result = mysqli_query($conn, $query);
                $row=mysqli_fetch_array($result);?>
            <img src='images/<?php echo $row['location']; ?>' alt="Image" style="width:100%;height: 100%;">
        </div>
        <div class="right">
            <div class="pn">
                <center>
                <h1 style="text-align: center;"><?php echo $row['name']?></h1>
                </center>
            </div>
            <div class="pd"> 
                <span style="font-size:1rem;margin-right: 2vb;"><span style="font-size: 2rem;">RS.<?php echo $row['price']?></span>
                <div>
                <label for="color">COLOR:</label>
                <select name="color" id="color">
                    <option value="Red">Red</option>
                </select>
                </div>
                <div style="margin-top: 2vh;" class="size">
                    <span style="margin-top: 1VH;margin-right:2px">SIZE:</span>
                    <label>
                        <input type="radio" id="small" name="size" value="small" checked>
                        <label for="small" class="size-label">S</label>
                      </label>
                  
                      <label>
                        <input type="radio" id="medium" name="size" value="medium">
                        <label for="medium" class="size-label">M</label>
                      </label>
                  
                      <label>
                        <input type="radio" id="large" name="size" value="large">
                        <label for="large" class="size-label">L</label>
                      </label>
                  
                      <label>
                        <input type="radio" id="xlarge" name="size" value="xlarge">
                        <label for="xlarge" class="size-label">XL</label>
                      </label>
                  
                </div>
                <?php
                
                ?>
                <div class="desc" style="text-align: left;">
                    <span style="text-align:left;">
                    <?php 
                        echo $row["dsc"];
                    ?>
                
                <div class="btns">
                    <center>
                        <form action="add.php" method="post">
                <button class="btn2" style="margin-top:20px" name='id' value="9">Add to Cart</button>
                </form>
                </center>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    <div>
        <center>
        <table><tr><th>Size</th><th>Length(in inches)</th></tr>
        <tr><td>XS</td><td>26</td></tr>
        <tr><td>S</td><td>27</td></tr>
        <tr><td>M</td><td>28</td></tr>
        <tr><td>L</td><td>29</td></tr>
        <tr><td>XL</td><td>30</td></tr>
        </table>
        </center>
    </div>
    <div class="cart-logo">
    <img src="images/cart-logo.png" alt="logo of cart">
       
        <span class="badge">0</span>
    </div>
    <div class="cart-items-container">
        <table id="cart-table-template" >
       
            <thead>
                <tr>
                <td>remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($_SESSION['cart'] as $value){
    $query = "SELECT * FROM `products` where `id`=$value";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
    ?>
                <tr>
                    <td class="remove"><a href="remove.php?pid=<?php echo $row['id']?>" style="text-decoration: none;color: black;" method='get'><span class="material-symbols-outlined">cancel</span></a></td>
                    <td class="image"> <img src="images/<?php echo $row['location']; ?>" style="height:50px;"></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><input type="number" value="1"></td>
                    <td><?php echo $row['price']; ?></td>
                </tr>
            </tbody>
            <?php
    }}
    ?>
        </table>
      </div>
      <script>
        function toggleCartContainer() {
        const cartContainer = document.querySelector('.cart-items-container');
        if (cartContainer) {
            cartContainer.classList.toggle('show');
        }
    }

    document.addEventListener("DOMContentLoaded", function(){
        const cartLogo = document.querySelector('.cart-logo');
        if (cartLogo) {
            cartLogo.addEventListener('click', toggleCartContainer);
        }
    });
      </script>
    <script src="navigation.js" defer></script>
    <script src="cart.js" defer></script>
    
</body>
</html>