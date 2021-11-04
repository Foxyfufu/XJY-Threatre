<?php 
session_start();
$id = session_id();

if (isset($_GET[id])){
    $slotId  = $_GET[id];

    // if (!isset($_SESSION['selectedSlot'])) {
        $_SESSION['selectedSlot'] = $slotId;
        $test = $_SESSION['selectedSlot'];
        // echo $test;
    // }
        
    @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
    if(mysqli_connect_errno()){
        echo 'Error: Could not connect to database.  Please try again later.';
    exit;
    }

    $query="SELECT movieID, day, time FROM slotTable WHERE slotID=$test";
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
    for ($i=0; $i < $rowNumMovie; $i++){
        $rowMovie = $resultMovie -> fetch_assoc();
        array_push($arrayMovie, $rowMovie);
    }

    $queryAvail = "SELECT seatNumber, availability FROM seatsTable WHERE slotID=$test";
    $resultAvail = $db -> query($queryAvail);
    $rowNumAvail = $resultAvail->num_rows;
    $arrayRes = array();
    for ($i=0; $i < $rowNumAvail; $i++){
        $rowAvail = $resultAvail -> fetch_assoc();
        array_push($arrayRes, $rowAvail);
    }
    // print_r($arrayRes);

    $arrayAvail = array();
    foreach ($arrayRes as $key => $value) {
        $arrayAvail += array($value['seatNumber'] => $value['availability']);
    }
    // print_r($arrayAvail);
}
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
                        <a href="index.html"><img id = "home" src="assets/logo.png" alt="home" height="50px" ;>
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

        <div id="seatHeader">
            <div id="seatDescription">
                <span><b> <?php echo $arrayMovie[0]['movieName']; ?> <br>
                <span><b> <?php echo $array[0]['day']; echo $array[0]['time']; ?> <br>
                <span><b>Please select your seats</b></span>
            </div>
            
            <ul id="seatLegend">
                <li>
                  <div class="seat"></div>
                  <small>Available</small>
                </li>
                <li>
                  <div class="seat selected"></div>
                  <small>Selected</small>
                </li>
                <li>
                  <div class="seat sold"></div>
                  <small>Unavailable</small>
                </li>
              </ul>
        </div>

        <div>
            <div class="theatre">
                <div class="screen"></div>
                <form action="payment.php" method="post">
                    <?php
                        $rowlength = 7;
                        $rowmapping = ['A','B','C'];
                        foreach($rowmapping as $row){
                            echo '<div class="seatRow">';
                                for ($i = 0; $i<$rowlength; $i++){
                                    $seatname = $row.($i+1);
                                    $classname = "sold";
                                    if ($arrayAvail[$seatname] == "Yes"){
                                        $classname = "avail";
                                    }
                                    echo ' <input type="button" value ="'.$seatname.'" class="seat '.$classname.'" id="'.$seatname.'" onclick="updateSelectedSeat(\''.$seatname.'\')">';
                                }
                            echo '</div>';
                        }
                    ?>

                <!-- <form action="payment.php" method="post">
                <div class="seatRow">
                    <input type="button" value ="A1" class="seat" id="A1" onclick="updateSelectedSeat('A1')">
                    <input type="button" value ="A2" class="seat" id="A2" onclick="updateSelectedSeat('A2')">
                    <input type="button" value ="A3" class="seat" id="A3" onclick="updateSelectedSeat('A3')">
                    <input type="button" value ="A4" class="seat" id="A4" onclick="updateSelectedSeat('A4')">
                    <input type="button" value ="A5" class="seat" id="A5" onclick="updateSelectedSeat('A5')">
                    <input type="button" value ="A6" class="seat" id="A6" onclick="updateSelectedSeat('A6')">
                    <input type="button" value ="A7" class="seat" id="A7" onclick="updateSelectedSeat('A7')">
                </div>
          
                <div class="seatRow">
                  <input type="button" value ="B1" class="seat" id="B1" onclick="updateSelectedSeat('B1')">
                  <input type="button" value ="B2" class="seat" id="B2" onclick="updateSelectedSeat('B2')">
                  <input type="button" value ="B3" class="seat" id="B3" onclick="updateSelectedSeat('B3')">
                  <input type="button" value ="B4" class="seat" id="B4" onclick="updateSelectedSeat('B4')">
                  <input type="button" value ="B5" class="seat" id="B5" onclick="updateSelectedSeat('B5')">
                  <input type="button" value ="B6" class="seat" id="B6" onclick="updateSelectedSeat('B6')">
                  <input type="button" value ="B7" class="seat" id="B7" onclick="updateSelectedSeat('B7')">
                </div>
                

                <div class="seatRow" style="margin-bottom: 100px;">
                    <input type="button" value ="C1" class="seat" id="C1" onclick="updateSelectedSeat('C1')">
                    <input type="button" value ="C2" class="seat" id="C2" onclick="updateSelectedSeat('C2')">
                    <input type="button" value ="C3" class="seat" id="C3" onclick="updateSelectedSeat('C3')">
                    <input type="button" value ="C4" class="seat" id="C4" onclick="updateSelectedSeat('C4')">
                    <input type="button" value ="C5" class="seat" id="C5" onclick="updateSelectedSeat('C5')">
                    <input type="button" value ="C6" class="seat" id="C6" onclick="updateSelectedSeat('C6')">
                    <input type="button" value ="C7" class="seat" id="C7" onclick="updateSelectedSeat('C7')">
                </div> -->

                <div class="exit">Exit</div>
                </div>
                <div>
                    You have selected: <input readonly type="text" id="count" name="count" value=""> <br><br>
                </div>
                <div id="confirm">
                    <input type="submit" id="submit" value="Confirm">
                </div>
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
    <script src="seatSelection.js"></script>
</body>
</html>