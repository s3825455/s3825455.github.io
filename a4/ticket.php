<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group ticket</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src='../wireframe.js'></script>
    <link type="text/css" rel="stylesheet" href="receipt_css/tstyle.css">
    
    
</head>





<body>
    <?php
    session_start();
    ?>

    <header>
        <div>
            <div id="header1">
                <img src="media/logo2.png" alt="Cinema logo" class="img-fluid" style="vertical-align: middle; max-width: 300px;">CINEMAX
            </div>
        </div>
    </header>

    <article id="ticket"> 
        <div id="header2" style="text-align: center">
            <p style="text-align: center; font-size: 50px;">MOVIE TICKET</p>
            <p id="star">	&#9733; 	&#9733; 	&#9733; 	&#9733; &#9733;</p>
        </div>
        <div id="detail1">
            <p  style="text-align: center; font-weight:800; font-size:xx-large; font-style:italic; color:white" ><?php echo $_SESSION["movie"]; ?> </p>
            <p style="text-align: center; font-weight:800; font-size:xx-large; font-style:italic; color:white" ><?php echo $_SESSION["time2"]." - ".$_SESSION["time1"]; ?> </p>
            <?php
            if ($_SESSION["STA"] != "") {
                if ($_SESSION["STA"] < 2) {
            echo "<p style=\"text-align: center;\">".$_SESSION["STA"]." Standard Adult Seat"."</p>";
        }else {
            echo "<p style=\"text-align: center;\">".$_SESSION["STA"]." Standard Adult Seats"."</p>";
        }
        }

            if ($_SESSION["STP"] != "") {
                if ($_SESSION["STP"] < 2) {
            echo "<p style=\"text-align: center;\">".$_SESSION["STP"]." Standard Concession Seat"."</p>";
        }else {
            echo "<p style=\"text-align: center;\">".$_SESSION["STP"]." Standard Concession Seats"."</p>";
        }
        }

            if ($_SESSION["STC"] != "") {
                if ($_SESSION["STC"] < 2) {
            echo "<p style=\"text-align: center;\">".$_SESSION["STC"]." Standard Children Seat"."</p>";
        }else {
            echo "<p style=\"text-align: center;\">".$_SESSION["STC"]." Standard Children Seats"."</p>";
        }
        }

            if ($_SESSION["FCA"] != "") {
                if ($_SESSION["FCA"] < 2) {
            echo "<p style=\"text-align: center;\">".$_SESSION["FCA"]." Firstclass Adult Seat"."</p>";
        }else {
            echo "<p style=\"text-align: center;\">".$_SESSION["FCA"]." Firstclass Adult Seats"."</p>";
        }
        }

            if ($_SESSION["FCP"] != "") {
                if ($_SESSION["FCP"] < 2) {
            echo "<p style=\"text-align: center;\">".$_SESSION["FCP"]." Firstclass Concession Seat"."</p>";
        }else {
            echo "<p style=\"text-align: center;\">".$_SESSION["FCP"]." Firstclass Concesison Seats"."</p>";
        }
        }

            if ($_SESSION["FCC"] != "") {
                if ($_SESSION["FCC"] < 2) {
            echo "<p style=\"text-align: center;\">".$_SESSION["FCC"]." Firstclass children Seat"."</p>";
        }else {
            echo "<p style=\"text-align: center;\">".$_SESSION["FCC"]." Firstclass Children Seats"."</p>";
        }
        }
            ?>
        </div>

    </article>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
</body>

</html>