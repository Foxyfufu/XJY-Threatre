<?php
    // session_start();
    // $id = session_id();

    // if (isset($_POST['count'])) {
    //     $_SESSION['selectedSeats'] = $_POST['count'];
    //     $specific = $_SESSION['selectedSeats'];
    // }
    // else {
    //     $specific = $_SESSION['selectedSeats'];
    // }
    // print_r($specific);

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
        <h1>Please click on your preferred show time or select a date. Show times in grey indicates that tickets
            sold out.</h1>
        <div id="body5">
            <div class="row3">
                <table>
                    <tr>
                        <th>Gold Class Deluxe</th>
                        <td>
                            <div class="tab">
                                <button class="tablinks to" onclick="openCity(event, 'today')"
                                    id="defaultOpen">Today</button>
                                <button class="tablinks tues" onclick="openCity(event, 'Tuesday')">Tuesday</button>
                                <button class="tablinks wed" onclick="openCity(event, 'Wednesday')">Wednesday</button>
                                <button class="tablinks thurs" onclick="openCity(event, 'Thursday')">Thursday</button>
                                <button class="tablinks fri" onclick="openCity(event, 'Friday')">Friday</button>
                                <button class="tablinks sat" onclick="openCity(event, 'Saturday')">Saturday</button>
                                <button class="tablinks sun" onclick="openCity(event, 'Sunday')">Sunday</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><strong><a href="movie1.html">Marvel Studios: Avengers Infinity
                                    War</a></strong><br>(Sub:Chinese)<br>
                        </th>
                        <td>
                            <div class="tabcontent today">
                                <button class="button"  onclick="seatSelection(1)">7.00am</button>
                                <button class="button"  onclick="seatSelection(2)">1.00pm</button>
                                <button class="button"  onclick="seatSelection(3)">7.00pm</button>
                            </div>
                            <div class="tabcontent Tuesday">
                                <button class="button"  onclick="seatSelection(10)">7.00am</button>
                                <button class="button"  onclick="seatSelection(11)">1.00pm</button>
                                <button class="button"  onclick="seatSelection(12)">7.00pm</button>
                            </div>
                            <div class="tabcontent Wednesday">
                                <button class="button"  onclick="seatSelection(19)">7.00am</button>
                                <button class="button"  onclick="seatSelection(20)">1.00pm</button>
                                <button class="button"  onclick="seatSelection(21)">7.00pm</button>
                            </div>
                            <div class="tabcontent Thursday">
                                Timing not available yet. Please check back later.
                            </div>
                            <div class="tabcontent Friday">
                                Timing not available yet. Please check back later.
                            </div>
                            <div class="tabcontent Saturday">
                                Timing not available yet. Please check back later.
                            </div>
                            <div class="tabcontent Sunday">
                                Timing not available yet. Please check back later.
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row3">
                <table>
                    <tr>
                        <th>Gold Class Deluxe</th>
                        <td>
                            <div class="tab">
                                <button class="tablinks to" onclick="openCity(event, 'today')"
                                    id="defaultOpen">Today</button>
                                <button class="tablinks tues" onclick="openCity(event, 'Tuesday')">Tuesday</button>
                                <button class="tablinks wed" onclick="openCity(event, 'Wednesday')">Wednesday</button>
                                <button class="tablinks thurs" onclick="openCity(event, 'Thursday')">Thursday</button>
                                <button class="tablinks fri" onclick="openCity(event, 'Friday')">Friday</button>
                                <button class="tablinks sat" onclick="openCity(event, 'Saturday')">Saturday</button>
                                <button class="tablinks sun" onclick="openCity(event, 'Sunday')">Sunday</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><strong><a href="movie2.html">Joker
                                </a></strong><br>(Sub:Chinese)<br>
                        </th>
                        <td>
                            <div class="tabcontent today">
                                <button class="button" onclick="seatSelection(4)">9.00am</button>
                                <button class="button" onclick="seatSelection(5)">3.00pm</button>
                                <button class="button" onclick="seatSelection(6)">9.00pm</button>
                            </div>
                            <div class="tabcontent Tuesday">
                                <button class="button" onclick="seatSelection(13)">9.00am</button>
                                <button class="button" onclick="seatSelection(14)">3.00pm</button>
                                <button class="button" onclick="seatSelection(15)">9.00pm</button>
                            </div>
                            <div class="tabcontent Wednesday">
                                <button class="button" onclick="seatSelection(22)">9.00am</button>
                                <button class="button" onclick="seatSelection(23)">3.00pm</button>
                                <button class="button" onclick="seatSelection(24)">9.00pm</button>
                            </div>
                            <div class="tabcontent Thursday">
                                Timing not available yet. Please check back later.
                            </div>
                            <div class="tabcontent Friday">
                                Timing not available yet. Please check back later.
                            </div>
                            <div class="tabcontent Saturday">
                                Timing not available yet. Please check back later.

                            </div>
                            <div class="tabcontent Sunday">
                                Timing not available yet. Please check back later.
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row3">
                <table>
                    <tr>
                        <th>Gold Class Deluxe</th>
                        <td>
                            <div class="tab">
                                <button class="tablinks to" onclick="openCity(event, 'today')"
                                    id="defaultOpen">Today</button>
                                <button class="tablinks tues" onclick="openCity(event, 'Tuesday')">Tuesday</button>
                                <button class="tablinks wed" onclick="openCity(event, 'Wednesday')">Wednesday</button>
                                <button class="tablinks thurs" onclick="openCity(event, 'Thursday')">Thursday</button>
                                <button class="tablinks fri" onclick="openCity(event, 'Friday')">Friday</button>
                                <button class="tablinks sat" onclick="openCity(event, 'Saturday')">Saturday</button>
                                <button class="tablinks sun" onclick="openCity(event, 'Sunday')">Sunday</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><strong><a href="movie3.html">Blackpink the Movie
                                </a></strong><br>(Sub:Chinese)<br>
                        </th>
                        <td>
                            <div class="tabcontent today">
                                <button class="button" onclick="seatSelection(7)">11.00am</button>
                                <button class="button" onclick="seatSelection(8)">5.00pm</button>
                                <button class="button" onclick="seatSelection(9)">11.00pm</button>
                            </div>
                            <div class="tabcontent Tuesday">
                                <button class="button" onclick="seatSelection(16)">11.00am</button>
                                <button class="button" onclick="seatSelection(17)">5.00pm</button>
                                <button class="button" onclick="seatSelection(18)">11.00pm</button>
                            </div>
                            <div class="tabcontent Wednesday">
                                <button class="button" onclick="seatSelection(25)">11.00am</button>
                                <button class="button" onclick="seatSelection(26)">5.00pm</button>
                                <button class="button" onclick="seatSelection(27)">11.00pm</button>
                            </div>
                            <div class="tabcontent Thursday">
                                Timing not available yet. Please check back later.
                            </div>

                            <div class="tabcontent Friday">
                                Timing not available yet. Please check back later.
                            </div>
                            <div class="tabcontent Saturday">
                                Timing not available yet. Please check back later.
                            </div>
                            <div class="tabcontent Sunday">
                                Timing not available yet. Please check back later.
                            </div>
                        </td>
                    </tr>
                </table>
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
    <script src="tickets.js"></script>
</body>

</html>