<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>

    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='../wireframe.js'></script>
  <link id='stylecss' type="text/css" rel="stylesheet" href="rstyle.css">

</head>

<body>
    <?php
    session_start();
    include 'tools.php';
    if (empty($_SESSION["email"])) {
        header("Location: index.php");
    }

    // $filename = "test.csv";
    // $fp = fopen($filename,"r");
    // flock($fp,LOCK_SH);
    // $info = fgetcsv($fp);
    // flock($fp,LOCK_UN);
    // fclose($fp);
    // $date = $info[5];
    // $movie = $info[4];
    $movie1 = "ACT";
    $movie2 = "ANM";
    $movie3 = "RMC";
    $movie4 = "AHF";
    $now = date('d/m');

    if ($_SESSION['Movie_Id'] == $movie1) {
        $movie = "Avenger Endgame";
    } else {
        if ($_SESSION['Movie_Id'] == $movie2) {
            $movie = "Dumbo";
        } else {
            if ($_SESSION['Movie_Id'] == $movie3) {
                $movie = "Top End Wedding";
            } else {
                $movie = "The Happy Prince";
            }
        }
    }

    switch ($_SESSION['Movie_Day']) {
        case "MON":
            $screening = "Monday";
            break;
        case "THUR":
            $screening = "Thursday";
            break;
        case "TUE":
            $screening = "Tuesday";
            break;
        case "WED":
            $screening = "Wednesday";
            break;
        case "FRI":
            $screening = "Friday";
            break;
        case "SAT":
            $screening = "Saturday";
            break;    
        case "SUN":
            $screening = "Sunday";
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


    <article id="receipt">
    <div>
        <span id="brand_name">Cinemax</span>
        <span id="brand_info">53 Old Tenterfield Road <br> Phone number: 0381-149304 <br> ABN number: 00 123 456 789</span>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div id="receipt_info">Tax Invoice</div>
    <br>
    <div>
        <h2>Customer Information</h2>
        <p> Customer's name: <?php print_r($_SESSION['name']) ?></p>
        <br>
        <p> Customer's email: <?php print_r($_SESSION['email']) ?></p>
        <br>
        <p> Customer's mobile number: <?php print_r($_SESSION['phone']) ?></p>
    </div>
    <div>
        <h2>Booking Details</h2>
        <p> Booking date: <?php print_r($now) ?></p>
        <br>
        <p>Movie: <?php print_r($movie) ?></p>
        <br>
        <p>Screening session: <?php print_r($screening) ?> </p>
    </div>
    <div>
    <?php 
        echo "<table class=\"table table-striped\">";
        echo   "<thead>";
        echo       "<tr>";
        echo            "<th scope=\"col\">Description</th>";
        echo            "<th scope=\"col\">Quantity</th>";
        echo            "<th scope=\"col\">Unit price</th>";
        echo           "<th scope=\"col\">Total</th>";
        echo        "</tr>";
        echo    "</thead>";
            
            echo "<tbody>";
            echo    "<tr>";
                    
                        echo   "<th class=\"row\"> Standard Adult </th>";
                        echo "<td>" + $_SESSION['STA']; + "</td>";
                    // <td> <?php echo $_SESSION['STA_price']; ?> </td>
                    ?>
                     

                </tr>
            </tbody>
        </table>
    </div>
    </article>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
</body>

</html>