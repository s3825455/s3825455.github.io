<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src='../wireframe.js'></script>
    <link type="text/css" rel="stylesheet" href="receipt_css/rstyle.css">
</head>


<body>
    <?php
    session_start();
    include 'tools.php';
    if (empty($_SESSION["email"])) {
        header("Location: index.php");
    }
    $movie1 = "ACT";
    $movie2 = "ANM";
    $movie3 = "RMC";
    $movie4 = "AHF";
    $discount_day = "MON";
    $discount_day_2 = "WED";
    $discount_hour = "T12";
    $now = date('d/m');

    if ($_SESSION['Movie_Id'] == $movie1) {
        $movie = "Avenger Endgame";
        $_SESSION["movie"] = $movie;
    } else {
        if ($_SESSION['Movie_Id'] == $movie2) {
            $movie = "Dumbo";
            $_SESSION["movie"] = $movie;
        } else {
            if ($_SESSION['Movie_Id'] == $movie3) {
                $movie = "Top End Wedding";
                $_SESSION["movie"] = $movie;
            } else {
                $movie = "The Happy Prince";
                $_SESSION["movie"] = $movie;
            }
        }
    }

    switch ($_SESSION['Movie_Day']) {
        case "MON":
            $screening = "Monday";
            $_SESSION['time1'] = $screening;
            break;
        case "THUR":
            $screening = "Thursday";
            $_SESSION['time1'] = $screening;
            break;
        case "TUE":
            $screening = "Tuesday";
            $_SESSION['time1'] = $screening;
            break;
        case "WED":
            $screening = "Wednesday";
            $_SESSION['time1'] = $screening;
            break;
        case "FRI":
            $screening = "Friday";
            $_SESSION['time1'] = $screening;
            break;
        case "SAT":
            $screening = "Saturday";
            $_SESSION['time1'] = $screening;
            break;
        case "SUN":
            $screening = "Sunday";
            $_SESSION['time1'] = $screening;
            break;
    }

    switch ($_SESSION['Movie_hour']) {
        case "T12":
            $screening2 = "12 PM";
            $_SESSION['time2'] = $screening2;
            break;
        case "T15":
            $screening2 = "15 PM";
            $_SESSION['time2'] = $screening2;
            break;
        case "T18":
            $screening2 = "18 PM";
            $_SESSION['time2'] = $screening2;
            break;
        case "T21":
            $screening2 = "21 PM";
            $_SESSION['time2'] = $screening2;
            break;
    }
    ?>
    <header>
        <div>
            <div id="header1">
                <img src="media/logo2.png" alt="Cinema logo" class="img-fluid" style="vertical-align: middle; max-width: 300px;">CINEMAX
            </div>
        </div>
    </header>


    <article style="margin-top:100px" id="receipt">
        <div>
            <span id="brand_name">Cinemax</span>
            <span id="brand_info">53 Old Tenterfield Road <br> Phone number: 0381-149304 <br> ABN number: 00 123 456 789</span>
        </div>
        <br>
        <br>
        <div id="receipt_info">Tax Invoice</div>
        <br>
        <div id="cust_info">
            <h2 style="padding-left: 10px; font-weight:600; ">Customer Information</h2>
            <p style="padding-left: 10px; "> Customer's name: <?php print_r($_SESSION['name']) ?></p>
            <p style="padding-left: 10px; "> Customer's email: <?php print_r($_SESSION['email']) ?></p>
            <p style="padding-left: 10px; "> Customer's mobile number: <?php print_r($_SESSION['phone']) ?></p>
        </div>
        <div>
            <h2 style="padding-left: 10px; font-weight:600; ">Booking Details</h2>
            <p style="padding-left: 10px; "> Booking date: <?php print_r($now) ?></p>
            <p style="padding-left: 10px; ">Movie: <?php print_r($movie) ?></p>
            <p style="padding-left: 10px; color:red ">Screening session: <?php
                                                                            print_r($screening2);
                                                                            echo " - ";
                                                                            print_r($screening) ?> </p>
        </div>
        <div>
            <?php

            echo "<table class=\"table table-striped\">";
            echo   "<thead>";
            echo       "<tr class=\"table-primary\">";
            echo            "<th scope=\"col\">Description</th>";
            echo            "<th scope=\"col\">Quantity</th>";
            echo            "<th scope=\"col\">Unit price</th>";
            echo           "<th scope=\"col\">Total</th>";
            echo        "</tr>";
            echo    "</thead>";
            echo "<tbody>";
            if ($_SESSION['STA'] != "") {
                echo    "<tr >";
                echo   "<th style=\"padding-left:25px;\" class=\"row\"> Standard Adult </th>";
                echo "<td style=\"padding-left:40px;\">" . $_SESSION['STA'] . "</td>";
                if ($_SESSION["Movie_Day"] == $discount_day || $_SESSION["Movie_Day"] == $discount_day_2 || $_SESSION["Movie_hour"] == $discount_hour) {
                    echo "<td style=\"padding-left:20px;\"> $14.00 </td>";
                    $total1 = 14.00 * $_SESSION["STA"];
                } else {
                    echo " <td style=\"padding-left:20px;\"> $19.80 </td>";
                    $total1 = 19.80 * $_SESSION["STA"];
                }
                echo "<td> $" . number_format((float) $total1, 2, '.', '') . "</td>";
                echo "</tr>";
            }

            if ($_SESSION['STP'] != "") {
                echo    "<tr>";
                echo   "<th style=\"padding-left:25px;\" class=\"row\"> Standard Concession </th>";
                echo "<td style=\"padding-left:40px;\">" . $_SESSION['STP'] . "</td>";
                if ($_SESSION["Movie_Day"] == $discount_day || $_SESSION["Movie_Day"] == $discount_day_2 || $_SESSION["Movie_hour"] == $discount_hour) {
                    echo "<td style=\"padding-left:20px;\"> $12.50 </td>";
                    $total2 = 12.50 * $_SESSION["STP"];
                } else {
                    echo " <td style=\"padding-left:20px;\"> $17.50 </td>";
                    $total2 = 17.50 * $_SESSION["STP"];
                }
                echo "<td> $" . number_format((float) $total2, 2, '.', '') . "</td>";
                echo "</tr>";
            }

            if ($_SESSION['STC'] != "") {
                echo    "<tr>";
                echo   "<th style=\"padding-left:25px;\" class=\"row\"> Standard Children </th>";
                echo "<td style=\"padding-left:40px;\">" . $_SESSION['STC'] . "</td>";
                if ($_SESSION["Movie_Day"] == $discount_day || $_SESSION["Movie_Day"] == $discount_day_2 || $_SESSION["Movie_hour"] == $discount_hour) {
                    echo "<td style=\"padding-left:20px;\"> $11.00 </td>";
                    $total3 = 11.00 * $_SESSION["STC"];
                } else {
                    echo " <td style=\"padding-left:20px;\"> $15.30 </td>";
                    $total3 = 15.30 * $_SESSION["STC"];
                }
                echo "<td> $" . number_format((float) $total3, 2, '.', '') . "</td>";
                echo "</tr>";
            }

            if ($_SESSION['FCA'] != "") {
                echo    "<tr>";
                echo   "<th style=\"padding-left:25px;\" class=\"row\"> Firstclass Adult </th>";
                echo "<td style=\"padding-left:40px;\">" . $_SESSION['FCA'] . "</td>";
                if ($_SESSION["Movie_Day"] == $discount_day || $_SESSION["Movie_Day"] == $discount_day_2 || $_SESSION["Movie_hour"] == $discount_hour) {
                    echo "<td style=\"padding-left:20px;\"> $24.00 </td>";
                    $total4 = 24.00 * $_SESSION["FCA"];
                } else {
                    echo " <td style=\"padding-left:20px;\"> $30.00 </td>";
                    $total4 = 30.00 * $_SESSION["FCA"];
                }
                echo "<td> $" . number_format((float) $total4, 2, '.', '') . "</td>";
                echo "</tr>";
            }

            if ($_SESSION['FCP'] != "") {
                echo    "<tr>";
                echo   "<th style=\"padding-left:25px;\" class=\"row\"> Firstclass Concession </th>";
                echo "<td style=\"padding-left:40px;\">" . $_SESSION['FCP'] . "</td>";
                if ($_SESSION["Movie_Day"] == $discount_day || $_SESSION["Movie_Day"] == $discount_day_2 || $_SESSION["Movie_hour"] == $discount_hour) {
                    echo "<td style=\"padding-left:20px;\"> $22.50 </td>";
                    $total5 = 22.50 * $_SESSION["FCP"];
                } else {
                    echo " <td style=\"padding-left:20px;\"> $27.00 </td>";
                    $total5 = 27.00 * $_SESSION["FCP"];
                }
                echo "<td> $" . number_format((float) $total5, 2, '.', '') . "</td>";
                echo "</tr>";
            }

            if ($_SESSION['FCC'] != "") {
                echo    "<tr>";
                echo   "<th style=\"padding-left:25px;\" class=\"row\"> Firstclass Children </th>";
                echo "<td style=\"padding-left:40px;\">" . $_SESSION['FCC'] . "</td>";
                if ($_SESSION["Movie_Day"] == $discount_day || $_SESSION["Movie_Day"] == $discount_day_2 || $_SESSION["Movie_hour"] == $discount_hour) {
                    echo "<td style=\"padding-left:20px;\"> $21.00 </td>";
                    $total6 = 21.00 * $_SESSION["FCA"];
                } else {
                    echo " <td style=\"padding-left:20px;\"> $24.00 </td>";
                    $total6 = 24.00 * $_SESSION["FCA"];
                }
                echo "<td> $" . number_format((float) $total6, 2, '.', '') . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>


            <div>
                <a style="margin-left:10px" class="btn btn-primary" href="ticket.php" role="button">Print individual ticket</a>
                <a class="btn btn-primary" href="#" role="button">Print group ticket</a>
                <div id="price_info">
                    <h3>Total price: $ <?php echo  number_format((float) $_SESSION['final_price'], 2, '.', ''); ?></h3>
                    <?php $tax = $_SESSION['final_price'] / 11;
                    $final = $_SESSION['final_price'] + $tax;  ?>
                    <h3>Tax: $ <?php echo number_format((float) $tax, 2, '.', ''); ?></h3>
                    <h3 style="color:green">Amount due: $ <?php echo number_format((float) $final, 2, '.', ''); ?></h3>
                </div>
            </div>
        </div>
    </article>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
</body>

</html>