<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php
session_start();
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Welcome </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/heroic-features.css" rel="stylesheet">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->

        <style>


        </style>


    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Welcome !</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="profile.php"><?php echo $_SESSION['fname'] . "-" . $_SESSION['roll']; ?></a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav bar ends -->
        <div class="container">
            <header class="jumbotron hero-spacer">
                <!-- <h1>A Warm Welcome!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>-->
                <!-- <h3>Payments made simpler with gec payments</h3> -->
                <p class="font-weight-bold">Please Choose Payment Type</p>

                <span>
                    <div id="paymentselection">
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Make a Payment
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./Payments/tutionfee/tutionfee.php">Tution Fee</a></li>
                                <li><a class="dropdown-item" href="./Payments/examfee/examfee.php">Exam Fee</a></li>
                                <li><a class="dropdown-item" href="./Payments/specialfee/specialfee.php">Special Fee</a></li>
                                <li><a class="dropdown-item" href="./Payments/fines/fines.php">College Fines</a></li>
                                <!-- <li><a class="dropdown-item" href="./Payments/intrenship.php">Intrenship Fee</a></li> -->
                                <li><a class="dropdown-item" href="./Payments/busfee/busfee.php">Buss Fee</a></li>
                        

                            </ul>
                        </div>
                    </div>
                </span>
            </header>


            <div class="jumbotron hero-spacer font-weight-bold">
                <p>Please check your Payment Details here </p>

                <div class="list-group">
                    <table align="center">

                        <tr>

                            <td> <button type="button" class=" btn-success list-group-item list-group-item-success exam">Exam Fee</button> </td>


                            <td> <button type="button" class=" btn-success list-group-item list-group-item-success tution">Tution Fee</button> </td>

                            <td> <button type="button" class=" btn-success list-group-item list-group-item-success special">Special Fee</button> </td>

                            <!-- <td> <button type="button" class=" btn-success list-group-item list-group-item-success intrenship">Intrenship Fee</button> </td> -->

                            <td> <button type="button" class=" btn-success list-group-item list-group-item-success fines">Fines </button> </td>

                            <td> <button type="button" class=" btn-success list-group-item list-group-item-success busfee">Bus Fee </button> </td>

                        </tr>

                    </table>
                </div>
                <div id="display"></div>
            </div>

                




        </div>




        </div>



        <script>
            $(document).ready(function() {
                $('.exam').click(function() {
                    $('#display').load('./Display/examdisplay.php');


                })
                $('.tution').click(function() {
                    $('#display').load('./Display/tutionfeedisplay/home.php');



                })
                $('.special').click(function() {
                    $('#display').load('./Display/specialfee.php');
                })

                $('.fines').click(function() {
                    $('#display').load('./Display/fines.php');
                })

                $('.busfee').click(function() {
                    $('#display').load('./Display/busfee.php');
                })
                

            });
        </script>


        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>
<?php } ?>