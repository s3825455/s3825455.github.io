<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 4</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="stylea3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='../wireframe.js'></script>
</head>

<body>
  <?php
  session_start();
  include 'tools.php';

  //  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   if (empty($_POST["cust[name]"])) {
  //     $nameErr = "Name is required";
  //   } else {
  //     $name = test_input($_POST["cust[name]"]);
  //     if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
  //       $nameErr = "Only letters and whitespace are allowed.";
  //     }
  //   }

  if (isset($_POST['session-reset'])) {
    unset($_SESSION["cust[email]"]);
    unset($_SESSION["name"]);
    unset($_SESSION["number"]);
    unset($_SESSION["card"]);
    unset($_SESSION["expiryMonth"]);
    unset($_SESSION["expiryYear"]);
  }

  ?>

  <header>
    <div>
      <div id="header1">
        <img src="media/logo2.png" alt="Cinema logo" class="img-fluid" style="vertical-align: middle; max-width: 300px;">CINEMAX
      </div>
    </div>
  </header>

  <nav id="navbar" class="navbar sticky-top navbar-expand-sm navbar-light border border-danger" style="background-color: #1a1a1d;">
    <a id="brand" href="" class="navbar-brand">Cinemax</a>
    <div id="nav1" class="collapse navbar-collapse">
      <ul id="nav-items" class="navbar-nav mr-auto">
        <li class="nav-item mx-5">
          <a href="#aboutus" class="nav-link active">About Us</a>
        </li>
        <li class="nav-item mx-5">
          <a href="#price" class="nav-link">Prices</a>
        </li>
        <li class="nav-item mx-5">
          <a href="#cards" class="nav-link">Now Showing</a>
        </li>
        <li class="nav-item mx-5">
          <a href="#tele4" class="nav-link">Synopsis Area</a>
        </li>
      </ul>
    </div>

  </nav>


  <!-- CAROUSEL -->
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="media/seat1.png" alt="cinema" width="900px" height="358">
      </div>
      <div class="carousel-item">
        <img src="media/seat2.jpg" alt="cinema" width="900px" height="358">
      </div>
      <div class="carousel-item">
        <img src="media/seat3.jpg" alt="cinema" width="900px" height="358">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <main>
    <article id='aboutus'>
      <div class="parallax">
        <div class="box">
          <h1>ABOUT US</h1>
          <p>Hello, this is Cinemax and we are officially back. This is a great time for us to inform you that after a
            long time closing for maintenance as well as researching for new methods to improve customers' experience,
            We have finally reopened with our new, modern and advanced technology theaters that can give you a great
            time relaxing and enjoying the fantastic movies. </p>
        </div>
      </div>
      <div class="parallax2">
        <div class="box2">
          <p>First of all, We have changed all of our old seats and replace it with new superior chair that can
            definitely
            provide you with extreme comfortable to enjoy your favorite movies. These chairs come in 2 different class:
            standard seats and reclinable first class seats. Our standard seat is made out of high-quality leather that
            comes with a cup-holder and also an expandable foot resting place. The standard seat are also comes in pair
            for
            couple who loves to seat next to eachother in order to enjoy their romantic movie night. About our first
            class
            seat, we can asure you that this is the best in the market, these first class seat are equipped with top
            range
            leather, an USB hub and also a retractable table for you to enjoy our delicious food. These seats are
            designed
            to give you the most comfortable feelings when relaxing as well as improve you overall posture.</p>
        </div>
        <div id="seatpic">
          <img src="media/standard1.jpg" alt="standard seat single" height="300" width="300">
          <img src="media/standard2.jpg" alt="standard seat couple" height="300" width="300">
          <img src="media/prem1.jpg" alt="first class seat single" height="300" width="300">
          <img src="media/prem2.jpg" alt="first class seat couple" height="300" width="300">
        </div>
      </div>
      <div class="parallax3">
        <div class="box3">
          <p>That is not everything. We also upgrade our theaters system. Our projection and sound systems are upgraded
            with
            3D Dolby Vision projection and Dolby Atmos sound.Dolby Vision is a legendary engineering, now applied to the
            visual experience, ushers in a whole new standard for image quality. It has advanced HDR technology which is
            called "Cutting-edge" technology dramatically expands the color palette and contrast range, and uses dynamic
            metadata to automatically optimize the picture for every screen — frame by frame. As well as our new Dolby
            atmos
            sound, it's sound that excites your senses and inspires your emotions to deliver the full impact of
            entertainment, Sound comes from all directions, including overhead, to fill the cinema with astonishing
            clarity,
            richness, detail, and depth, the sounds of the onscreen story move all around you in three-dimensional
            space, so
            you feel like you're inside the action. Because all of that, we can promise that we will give you one of the
            best time enjoying and relaxing while watching your favorite movies.</p>
        </div>
      </div>
    </article>
    <article>
      <div id="price">
        <h1 id="pricetext" style="color: whitesmoke;">PRICES</h1>
        <p id="pricetext"> Due to our reopening day, we decided that we will offers discounted pricing weekday
          afternoons at 12pm (ie
          weekday matinée sessions, Monday - Friday) and all day on Mondays and Wednesdays. This is our price below.</p>
        <div class="table-responsive">
          <table class="table table-smtable-striped table-bordered table-hover">
            <thead class="table-warning">
              <th scope="col">Seat Type</th>
              <th scope="col">Seat Code</th>
              <th scope="col">All day Monday and Wednesday AND 12pm on Weekdays</th>
              <th scope="col">All other times</th>
            </thead>
            <tbody>
              <tr class="table-danger">
                <th scope="row">Standard Adult</th>
                <td>STA</td>
                <td>14.00</td>
                <td>19.80</td>
              </tr>
              <tr class="table-info">
                <th scope="row">Standard Concession</th>
                <td>STP</td>
                <td>12.50</td>
                <td>17.50</td>
              </tr>
              <tr class="table-danger">
                <th scope="row">Standard Child</th>
                <td>STC</td>
                <td>11.00</td>
                <td>15.30</td>
              </tr>
              <tr class="table-info">
                <th scope="row">First Class Adult</th>
                <td>FCA</td>
                <td>24.00</td>
                <td>30.00</td>
              </tr>
              <tr class="table-danger">
                <th scope="row">First Class Concession </th>
                <td>FCB</td>
                <td>22.50</td>
                <td>27.00</td>
              </tr>
              <tr class="table-info">
                <th scope="row">First Class Child</th>
                <td>FCC</td>
                <td>21.00</td>
                <td>24.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </article>



    <article id="cards">
      <h1 id="pricetext">NOW SHOWING</h1>
      <div class="container mt-5">
        <div id="card3" class="card-deck row justify-content-between">

          <div class="card mb-4 bg-primary col-sm-3" style="min-width: 25rem; max-width: 25rem; min-height: 45rem; max-height: 45rem;">
            <img id="posterpic" class="card-img-top" src="media/AEG.jpg" alt="movie poster" width="100%" height="400vh">
            <div class="card-body text-center">
              <h3 id="card1" class="card-title" style="text-align: center; color: white;">Avenger: Endgame - PG-13</h3>
              <p id="card1" class="card-text">Wednesday - 9pm</p>
              <p id="card1" class="card-text">Thursday - 9pm</p>
              <p id="card1" class="card-text">Friday - 9pm</p>
              <p id="card1" class="card-text">Saturday - 6pm</p>
              <p id="card1" class="card-text">Sunday - 6pm</p>
            </div>
            <button style="text-align: center; vertical-align: middle;" onclick="reveal()">See more</button>

          </div>
          <div class="card mb-4 bg-warning col-sm-3" style="min-width: 25rem; max-width: 25rem; min-height: 45rem; max-height: 45rem;">
            <img id="posterpic" class="card-img-top" src="media/dumbo.jpeg" alt="movie poster" width="100vw" height="400vh" onclick="reveal()">
            <div class="card-body text-center">
              <h3 id="card1" class="card-title" style="text-align: center; color: white;">Dumbo</h3>
              <p id="card1" class="card-text">Monday/Tuesday - 12pm <br> Wed/Thur/Fri - 6pm <br> Saturday - 12pm <br> Sunday - 12pm</p>
            </div>
            <button style="text-align: center; vertical-align:middle;" onclick="reveal2()">See more</button>

          </div>
          <div class="card mb-4 bg-success col-sm-3" style="min-width: 25rem; max-width: 25rem; min-height: 45rem; max-height: 45rem;">
            <img id="posterpic" class="card-img-top" src="media/prince.jpg" alt="movie poster" width="100vw" height="400vh">
            <div class="card-body text-center">
              <h3 id="card1" class="card-title" style="text-align: center; color: white;">The Happy Prince </h3>
              <p id="card1" class="card-text">Monday - 6pm <br> Tuesday - 6pm <br> Saturday - 3pm <br> Sunday - 3pm</p>
            </div>
            <button style="text-align: center; vertical-align: middle;" onclick="reveal3()">See more</button>

          </div>
          <div class="card mb-4 bg-danger col-sm-3" style="min-width: 25rem; max-width: 25rem; min-height: 45rem; max-height: 45em;">
            <img id="posterpic" class="card-img-top" src="media/topend.jpg" alt="movie poster" width="100vw" height="400vh">
            <div class="card-body text-center">
              <h3 id="card1" class="card-title" style="text-align: center; color: white;">Top End Wedding</h3>
              <p id="card1" class="card-text">Wednesday - 12pm <br> Thursday - 12pm <br> Friday - 12pm <br> Saturday - 9pm <br> Sunday - 9pm</p>
            </div>
            <button style="text-align: center; vertical-align: middle;" onclick="reveal4()">See more</button>
          </div>

        </div>
      </div>
      </div>
    </article>



    <article id="hiddensyn" class="container-fluid">
      <div>
        <h1 id="tele4" style="text-align: center;">Synopsis</h1>
        <h2 style="padding: 20px; color: whitesmoke;">Avenger: End game PG-13 </h2>
        <div id="synopsis">
          <p id="syntext" style="text-align: left; width: 50%;">Adrift in space with no food or water, Tony Stark sends
            a message to Pepper Potts
            as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain
            America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown
            with Thanos -- the evil demigod who decimated the planet and the universe. The appearance of Ant-man had
            brought the Avenger back and together, they discovered a risky yet successful way to solve everything that
            Thanos has done 5 years ago.
            <br>
            <br>
            <br>
            <br>
            Make a booking:
            <a type="button" onclick="AEW9()" class="btn btn-outline-warning btn-lg">Wednesday - 9PM</a>
            <a type="button" onclick="AET9()" class="btn btn-outline-warning btn-lg">Thursday - 9PM</a>
            <a type="button" onclick="AEF9()" class="btn btn-outline-warning btn-lg">Friday - 9PM</a>
            <a type="button" onclick="AESA9()" class="btn btn-outline-warning btn-lg">Saturday - 6PM</a>
            <a type="button" onclick="AESU9()" class="btn btn-outline-warning btn-lg">Sunday - 6PM</a>
          </p>
          <div>
            <iframe id="rightvid" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </article>

    <article id="hiddensyn2" style="display: none;" id="synsyn" class="container-fluid" style="height: 100vh;">
      <div>
        <h1 id="tele4" style="text-align: center;">Synopsis</h1>
        <h2 style="padding: 20px; color: whitesmoke;"> Dumbo </h2>
        <div id="synopsis">
          <p id="syntext" style="text-align: left; width: 50%;">A young circus elephant is born with comically large ears and given the cruel nickname Dumbo. One day at a show, he is taunted by a group of kids, inciting his mother into a rage that gets her locked up. After Dumbo's ears cause an accident that injures many of the other elephants, he is made to dress like a clown and perform dangerous stunts. Everything changes when Dumbo discovers that his enormous ears actually allow him to fly, and he astounds everyone at the circus with his new talent.
            <br>
            <br>
            <br>
            <br>
            Make a booking:
            <a type="button" onclick="DM12()" class="btn btn-outline-warning btn-lg">Monday - 12PM</a>
            <a type="button" onclick="DT12()" class="btn btn-outline-warning btn-lg">Tuesday - 12PM</a>
            <a type="button" onclick="DW6()" class="btn btn-outline-warning btn-lg">Wednesday - 6PM</a>
            <a type="button" onclick="DT6()" class="btn btn-outline-warning btn-lg">Thursday - 6PM</a>
            <a type="button" onclick="DF6()" class="btn btn-outline-warning btn-lg">Friday - 6PM</a>
            <a type="button" onclick="DSA12()" class="btn btn-outline-warning btn-lg">Saturday - 12PM</a>
            <a type="button" onclick="DSU12()" class="btn btn-outline-warning btn-lg">Sunday - 12PM</a>
          </p>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </article>

    <article id="hiddensyn3" style="display: none;" id="synsyn" class="container-fluid" style="height: 100vh;">
      <div>
        <h1 id="tele4" style="text-align: center;">Synopsis</h1>
        <h2 style="padding: 20px; color: whitesmoke;"> Top End Wedding </h2>
        <div id="synopsis">
          <p id="syntext" style="text-align: left; width: 50%;">Lauren and Ned have 10 days to find Lauren's mother who has gone AWOL in the remote far north of Australia so that they can reunite her parents and pull off their dream wedding.
            <br>
            <br>
            <br>
            <br>
            Make a booking:
            <a type="button" onclick="TEWM6()" class="btn btn-outline-warning btn-lg">Monday - 6PM</a>
            <a type="button" onclick="TEWT6()" class="btn btn-outline-warning btn-lg">Tuesday - 6PM</a>
            <a type="button" onclick="TEWDSA3()" class="btn btn-outline-warning btn-lg">Saturday - 3PM</a>
            <a type="button" onclick="TEWSU3()" class="btn btn-outline-warning btn-lg">Sunday - 3PM</a>
          </p>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tXANCJQkUIE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </article>

    <article id="hiddensyn4" style="display: none;" id="synsyn" class="container-fluid" style="height: 100vh;">
      <div>
        <h1 id="tele4" style="text-align: center;">Synopsis</h1>
        <h2 style="padding: 20px; color: whitesmoke;"> The Happy Prince </h2>
        <div id="synopsis">
          <p id="syntext" style="text-align: left; width: 50%;">His body ailing, Oscar Wilde lives out his last days in exile, observing the difficulties and failures surrounding him with ironic detachment, humour, and the wit that defined his life.
            <br>
            <br>
            <br>
            <br>
            Make a booking:
            <a type="button" onclick="HPW12()" class="btn btn-outline-warning btn-lg">Wednesday - 12PM</a>
            <a type="button" onclick="HPT12()" class="btn btn-outline-warning btn-lg">Thursday - 12PM</a>
            <a type="button" onclick="HPF12()" class="btn btn-outline-warning btn-lg">Friday - 12PM</a>
            <a type="button" onclick="HPSA9()" class="btn btn-outline-warning btn-lg">Saturday - 9PM</a>
            <a type="button" onclick="HPSU9()" class="btn btn-outline-warning btn-lg">Sunday - 9PM</a>
          </p>
          <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </article>
    <article id="booking">
      <div>
        <h1 style="padding-top: 15px;">BOOKING</h1>
        <h2 id="booking_movie"></h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return Check_expiry()">
          <div id="form01">
            <h2 style="font-family: museo700; font-size: 50px; font-weight:800; padding-left: 30px;">Standard</h2>
            <div style="display: none;" class="form-group">
              <label for="movieID">MovieID</label>
              <input name="movie[id]" type="text" class="form-control" id="movieID">
            </div>
            <div style="display: none;" class="form-group">
              <label for="movie_day">MovieDay</label>
              <input name="movie[day]" type="text" class="form-control" id="movie_day">
            </div>
            <div style="display: none;" class="form-group">
              <label for="movie_hour">MovieHour</label>
              <input name="movie[hour]" type="text" class="form-control" id="movie_hour">
            </div>
            <div class="form-group row" id="form_standard">
              <label for="adult_standard" class="col-sm-2 col-form-label">Adults</label>
              <div class="col-sm-10">
                <select name="seats[STA]" id="adult_standard" class="form-control" onchange="price_check()">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>

              <label for="concession_standard" class="col-sm-2 col-form-label">Concession</label>
              <div class="col-sm-10">
                <select name="seats[STP]" id="concession_standard" class="form-control" onchange="price_check()">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>


              <label for="children_standard" class="col-sm-2 col-form-label">Children</label>
              <div class="col-sm-10">
                <select name="seats[STC]" id="children_standard" class="form-control" onchange="price_check()">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
            </div>
          </div>




          <div id="form02">
            <h2 style="font-family: museo700; font-size: 50px; font-weight:800; padding-left: 30px;">First Class</h2>
            <div class="form-group row" id="form_standard">
              <label for="adult_firstclass" class="col-sm-2 col-form-label">Adults</label>
              <div class="col-sm-10">
                <select name="seats[FCA]" id="adult_firstclass" class="form-control" onchange="price_check()">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>

              <label for="concession_firstclass" class="col-sm-2 col-form-label">Concession</label>
              <div class="col-sm-10">
                <select name="seats[FCP]" id="concession_firstclass" class="form-control" onchange="price_check()">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>


              <label for="children_firstclass" class="col-sm-2 col-form-label">Children</label>
              <div class="col-sm-10">
                <select name="seats[FCC]" id="children_firstclass" class="form-control" onchange="price_check()">
                  <option value="">Please Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
            </div>
          </div>
          <div>
            <h2 style="font-family: museo700; font-size: 50px; font-weight:800; padding-left: 30px;">Personal Information</h2>
            <div class="form-group row">
              <label for="customer_name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="name" name="cust[name]" class="form-control" required="required" id="customer_name" placeholder="Your full name" pattern="^[a-zA-Z \-.']{1,100}$" title="Please enter a valid name!">
                <span class="error">* <?php echo $nameErr; ?></span>
              </div>
              <label for="customer_email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="cust[email]" class="form-control" id="customer_email" placeholder="Email">
              </div>
              <label for="customer_name" class="col-sm-2 col-form-label">Mobile Number</label>
              <div class="col-sm-10">
                <input type="tel" name="cust[mobile]" class="form-control" required="required" id="customer_name" placeholder="Your phone number" pattern="^(\(04\)|04|\+614)( ?\d){8}$" title="Please enter an Australian mobile number only!">
              </div>
              <label for="customer_name" class="col-sm-2 col-form-label">Credit Card</label>
              <div class="col-sm-10">
                <input type="name" name="cust[card]" class="form-control" required="required" id="customer_credit_card" placeholder="Your credit card" pattern="^( ?\d){14,19}$" title="Please enter a valid credit card!">
              </div>
              <label for="customer_name" class="col-sm-2 col-form-label">Expiry date</label>
              <div class="col-sm-10">
                <select name="cust[expiryMonth]" class="form-control-sm" required="required" id="cust[expiryMonth]">
                  <option value="">Select Month</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">Octorber</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
                <select name="cust[expiryYear]" class="form-control-sm" required="required" id="cust[expiryYear]">
                  <option value="">Select Year</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                </select>
                <p id="error_message" style="display: none;">INVALID EXPIRY DATE!</p>
              </div>
              <label for="final_price" id="final_price0" class="col-sm-2 col-form-label">Price</label>
              <p id="final_price"></p>
            </div>
          </div>
          <div style="text-align: center;">
            <button class="btn-lg" type="submit" style="text-align: center;" value="Submit">Order</button>
          </div>
        </form>

      </div>
    </article>
    <article>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <input type="submit" name="session-reset" value="Reset the session">
      </form>
      <?php
      echo "<h2> This is your input </h2>";
       preShow($_POST);     // ie echo a string
       preShow($_SESSION);
      ?>
    </article>
  </main>



  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Nguyen Hoang Thien An, S3825455 (individual assignment). Last modified
      <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script defer src="script.js"></script>
</body>

</html>