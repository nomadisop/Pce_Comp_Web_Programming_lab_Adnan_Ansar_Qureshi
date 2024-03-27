<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
    echo "<html><head></head><body><script>alert('Please login first');</script></body></html>";
    header("location: index.html");
    exit;
}

include 'connect.php';
$quantity=2;
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <style>body{
  background-size:cover;
  background-repeat: no-repeat;
  flex-direction: column;
  background-attachment: fixed;
  background-position: center;
  margin: 0%;
}</style>
</head>
<body>
    <div class="navbar">
        <ul>
            <div class="cont1">
                <li class="logo"><img src="images/GREEN THREADS.png" alt="brandlogo" style="height: 100%;border-radius: 20px;"></li>
                
            </div>
        </ul>
    
        <ul style="padding-left: 0;max-width:fit-content;">
            <div class="cont2">
                <li class="about"><a href="#">Cart</a></li>
                <li class="about"><a href="home.php">Home</a></li>
                <li class="about"><a href="Aboutus.html">About</a></li>
                <li class="contact"><a href="contactus.html">Contact</a></li>
                <li class="insta"><a href="#"><img src="images/ins.png" alt="insta" style="height: 3vh;"></a></li>
                <li class="twitter"><a href="#"><img src="images/x.png" alt="twitter" style="height:3vh;"></a></li>
                <li class="facebook"><a href="#"><img src="images/fb.png" alt="facebook" style="height: 3vh;"></a></li>
            </div>
        </ul>
    </div>
    <section>
        <div class="container1">
            <div class="cont1_header">Cart !</div>
        </div>
        <div class="container2">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
            <?php
            $query="SELECT * FROM `products`;";
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_array($result);
            ?>
                <tbody id="items">
                <?php
                $_SESSION['total']=0;
                foreach($_SESSION['cart'] as $value){
    $query = "SELECT * FROM `products` where `id`=$value";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION['total']=$_SESSION['total']+$row['price'];
    ?>
                <tr>
                    <td class="remove"><a href="remove.php?pid=<?php echo $row['id']?>" style="text-decoration: none;color: black;" method='get'><span class="material-symbols-outlined">cancel</span></a></td>
                    <td class="image"> <img src="images/<?php echo $row['location']; ?>" style="height:50px;"></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="amount"><?php echo $row['price']; ?></td>
                    <td><input type="number" value="1" class="quantity" min="1"></td>
                    <td class="subtotal"><?php echo $row['price']; ?></td>
                    
                </tr>
            
            <?php
    }}
    ?>
            <tr><td></td><td></td><td></td><td></td><td>TOTAL PRICE:</td><td><p class="containerLast"></p></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><form action="checkout.php">
        <?php
        $_SESSION['total'];?>
        <div><button
            type="submit"
            class="btn btn-primary"
        >
            Checkout
        </button>
        </div>
       </form></td></tr>
            </tbody>
            </table>
            
        </div>
       
        
</section>
    <script src="cart.js"></script>
</body>
</html>