<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual ticket</title>

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
    <article style="background: rgb(204, 204, 204); width: 21cm; overflow: hidden; display: block; margin: 0 auto; margin-bottom: 0.5cm; margin-top:10px ">
    <div>
        <?php
        if ($_SESSION["STA"] !="") {
            for ($i = 0; $i < $_SESSION["STA"]; $i++ ) {
                echo "<div id=\"header2\">";
                echo "<p style=\"text-align:center; font-size: 50px;\"> MOVIE TICKET </p>";
                echo "<p id=\"star\" style=\"text-align:center; \">	&#9733; 	&#9733; 	&#9733; 	&#9733; &#9733;</p>";
                echo "</div>";
                echo "<div id=\"detail1\"> ";
                echo "<p style=\"text-align: center; font-weight:800; font-size:xx-large; font-style:italic; color:white\">".$_SESSION["movie"]." - ".$_SESSION["time2"]." - ".$_SESSION["time1"]."</p>";
                echo "<p style=\"text-align: center; font-size: 30px;\"> Standard Adult Seat </p>";
                echo "</div>";
                echo "<br>";
            }
        }

        if ($_SESSION["STP"] !="") {
            for ($i = 0; $i < $_SESSION["STP"]; $i++ ) {
                echo "<div id=\"header2\">";
                echo "<p style=\"text-align:center; font-size: 50px;\"> MOVIE TICKET </p>";
                echo "<p id=\"star\" style=\"text-align:center; \">	&#9733; 	&#9733; 	&#9733; 	&#9733; &#9733;</p>";
                echo "</div>";
                echo "<div id=\"detail1\"> ";
                echo "<p style=\"text-align: center; font-weight:800; font-size:xx-large; font-style:italic; color:white\">".$_SESSION["movie"]." - ".$_SESSION["time2"]." - ".$_SESSION["time1"]."</p>";
                echo "<p style=\"text-align: center; font-size: 30px;\"> Standard Concession Seat </p>";
                echo "</div>";
                echo "<br>";
                }   
        }

        if ($_SESSION["STC"] !="") {
            for ($i = 0; $i < $_SESSION["STC"]; $i++ ) {
                echo "<div id=\"header2\">";
                echo "<p style=\"text-align:center; font-size: 50px;\"> MOVIE TICKET </p>";
                echo "<p id=\"star\" style=\"text-align:center; \">	&#9733; 	&#9733; 	&#9733; 	&#9733; &#9733;</p>";
                echo "</div>";
                echo "<div id=\"detail1\"> ";
                echo "<p style=\"text-align: center; font-weight:800; font-size:xx-large; font-style:italic; color:white\">".$_SESSION["movie"]." - ".$_SESSION["time2"]." - ".$_SESSION["time1"]."</p>";
                echo "<p style=\"text-align: center; font-size: 30px;\"> Standard Children Seat </p>";
                echo "</div>";
                echo "<br>";
                }   
        }

        if ($_SESSION["FCA"] !="") {
            for ($i = 0; $i < $_SESSION["FCA"]; $i++ ) {
                echo "<div id=\"header2\">";
                echo "<p style=\"text-align:center; font-size: 50px;\"> MOVIE TICKET </p>";
                echo "<p id=\"star\" style=\"text-align:center; \">	&#9733; 	&#9733; 	&#9733; 	&#9733; &#9733;</p>";
                echo "</div>";
                echo "<div id=\"detail1\"> ";
                echo "<p style=\"text-align: center; font-weight:800; font-size:xx-large; font-style:italic; color:white\">".$_SESSION["movie"]." - ".$_SESSION["time2"]." - ".$_SESSION["time1"]."</p>";
                echo "<p style=\"text-align: center; font-size: 30px;\"> Firstclass Adult Seat </p>";
                echo "</div>";
                echo "<br>";
                }   
        }

        if ($_SESSION["FCP"] !="") {
            for ($i = 0; $i < $_SESSION["FCP"]; $i++ ) {
                echo "<div id=\"header2\">";
                echo "<p style=\"text-align:center; font-size: 50px;\"> MOVIE TICKET </p>";
                echo "<p id=\"star\" style=\"text-align:center; \">	&#9733; 	&#9733; 	&#9733; 	&#9733; &#9733;</p>";
                echo "</div>";
                echo "<div id=\"detail1\"> ";
                echo "<p style=\"text-align: center; font-weight:800; font-size:xx-large; font-style:italic; color:white\">".$_SESSION["movie"]." - ".$_SESSION["time2"]." - ".$_SESSION["time1"]."</p>";
                echo "<p style=\"text-align: center; font-size: 30px;\"> Firstclass Concession Seat </p>";
                echo "</div>";
                echo "<br>";
                }   
        }

        if ($_SESSION["FCC"] !="") {
            for ($i = 0; $i < $_SESSION["FCC"]; $i++ ) {
                echo "<div id=\"header2\">";
                echo "<p style=\"text-align:center; font-size: 50px;\"> MOVIE TICKET </p>";
                echo "<p id=\"star\" style=\"text-align:center; \">	&#9733; 	&#9733; 	&#9733; 	&#9733; &#9733;</p>";
                echo "</div>";
                echo "<div id=\"detail1\"> ";
                echo "<p style=\"text-align: center; font-weight:800; font-size:xx-large; font-style:italic; color:white\">".$_SESSION["movie"]." - ".$_SESSION["time2"]." - ".$_SESSION["time1"]."</p>";
                echo "<p style=\"text-align: center; font-size: 30px;\"> Firstclass Children Seat </p>";
                echo "</div>";
                echo "<br>";
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