<?php
    session_start();
    $id = session_id();

    if (isset($_POST['count'])) {
        $_SESSION['selectedSeats'] = $_POST['count'];
        $specific = $_SESSION['selectedSeats'];
        $specificArray = explode(",", $specific);
    }
    else {
        $specific = $_SESSION['selectedSeats'];
        $specificArray = explode(",", $specific);
    }
    // print_r($specific);

    $selectedSlot = $_SESSION['selectedSlot'];
    // echo $selectedSlot;
?>
<?php
    @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
    if(mysqli_connect_errno()){
        echo 'Error: Could not connect to database.  Please try again later.';
    exit;
    }

    $query="SELECT movieID, day, time FROM slotTable WHERE slotID=$selectedSlot";
    $result = $db -> query($query);
    $rowNum = $result->num_rows;
    $array = array();
    for ($i=0; $i < $rowNum; $i++){
        $row = $result -> fetch_assoc();
        array_push($array,$row);
    }

    $movieID = $array[0]['movieID'];
    $queryMovie="SELECT movieName FROM movieTable WHERE movieID=$movieID";
    $resultMovie = $db -> query($queryMovie);
    $rowNumMovie = $resultMovie->num_rows;
    $arrayMovie = array();
    for ($i=0; $i < $rowNum; $i++){
        $rowMovie = $resultMovie -> fetch_assoc();
        array_push($arrayMovie, $rowMovie);
    }

    $pricePayment = count($specificArray) * 17;
    $totalPayment = $pricePayment + 2.5;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>XJY Theatre</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <div id="title">
                <div id="leftheader">
                    <div id="logo">
                        <a href="index.html"><img src="assets/logo.png" alt="home" height="50px" ;>
                    </div>
                </div>

                <div id="rightheader">
                    <div id="nav">
                        <a href="movies.html">Showing Now / Coming Soon</a>
                        <a href="tickets.php">Buy Tickets</a>
                        <a href="locate.html">Locate / Contact Us</a>
                    </div>
                </div>
            </div>
        </header>

        <div id="paymentBody">
            <div class="paymentHeader">
                <p><b>Your Basket</b></p>
            </div>

            <div id="paymentDescription">
                <p>Movie: <?php echo $arrayMovie[0]['movieName'];?></p>
                <p>Showing on: <?php echo $array[0]['day']; echo $array[0]['time'];?></p>
                <p>Showing at: Raffles City Threatre Gold Class Deluxe
                <p>Seat Number(s): <?php echo $specific;?></p>
            </div>
            
            <div>
                <table id="computePrice">
                    <tr>
                        <th><b>Item</b></th>
                        <th><b>Quantity</b></th>
                        <th><b>Cost</b></th>
                        <th><b>Sub-total</b></th>
                    </tr>

                    <tr>
                        <td>Standard Ticket</td>
                        <td><?php echo count($specificArray); ?></td>
                        <td>$17</td>
                        <td>$<?php echo $pricePayment; ?></td>
                    </tr>

                    <tr>
                        <td colspan = "3" style="text-align: right">Booking Fee:</td>
                        <td> $2.50</td>
                    </tr>

                    <tr>
                        <td colspan = "3" style="text-align: right">Grand Total:</td>
                        <td>$<?php echo $totalPayment; ?></td>
                    </tr>
                </table>
            </div>
        
            <div class="paymentHeader">
                <p><b>Payment Information</b></p>
            </div>

            <div>
                <form method="post" action="confirmation.php" id="paymentInfo">
                    <label class="paymentLabel">Name:</label>
                    <input
                    type="text" 
                    name="customerName" 
                    required
                    style="width:300px">
                    <br><br>

                    <label class="paymentLabel">E-mail:</label>
                    <input
                    type="email" 
                    name="customerEmail" 
                    required
                    style="width:300px">
                    <br><br>

                    <label class="paymentLabel">Mobile Number:</label>
                    <input
                    type="text" 
                    name="customerNumber" 
                    required
                    style="width:150px"
                    pattern="\d*"
                    maxlength="8">
                    <br><br>

                    <label class="paymentLabel">Address:</label>
                    <input
                    type="text" 
                    name="customerAddress" 
                    required
                    style="width:200px">
                    <br><br>

                    <input type="reset" id="clear" value="Cancel">
                    <input type="submit" id="confirm" value="Confirm Order">
                </form>
            </div>
            
        </div>

        <footer>
            <div id="copyright">
                <small><i>Copyright &copy; XJY Theatre</i></small><br>
                <small><i><a href="mailto:XinJie@Lin.com">XJYTheatre@XJY.com</a></i></small>
            </div>
            <div id="cc">
                <img src="assets/ccicons.png" height="20px" ;>
            </div>
        </footer>
    </div>
    <!-- <script src="payment.js"></script> -->
</body>
</html>