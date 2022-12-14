<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Auth</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .affix{
            top:0;
            width:100%;
            z-index: 9999 !important;
        }
        .navbar{
            font-family:Montserrat, sans-serif;
            letter-spacing:4px;
            border:0;	
            font-size:11px;
            opacity:0.9;
            background-color:#340926;
            color:red;
            margin-bottom:0px;
            z-index: 9999 !important;
        }
        .dropdown-menu li a:hover{
            background-color:#2d2d30;
            color:#CBE432;
        }
        #introduction{
            margin-top:10px;
            color:#340926;
        }
        .navbar .navbar-brand{
            color:white;
        }
        .navbar .collapse li a{
            color:white;	
        }
        .navbar .collapse li a:hover{
            background-color:black;
            color:#CBE432;
        }
        .navbar .collapse .dropdown li a{
            color:white;
            background-color:#340926;
        }
        .navbar .collapse .dropdown li a:hover{
            color:#CBE432;
            background-color:black;
        
        }
        .container .carousel{
            margin-top:10px;	
        }
        .container .row{
            margin-top:10px;	
            
        }
        #googleMap{
            margin-top:30px;
            margin-bottom:20px;
        }
        .affix + .container-fluid{
            padding-top:50px;
        
        }
        body{
            position:relative;
        }
        #mainHeading{
            color:#340926;
            padding-top:28px;
            letter-spacing:4px;
            font-family:Montserrat, sans-serif;
            font-weight:bolder;
        }
        #contact h3{
            color:#340926;
            letter-spacing:4px;
            margin-top:90px;
            margin-bottom:20px;
            font-size:30px;
        }
        #footerID{
            background-color:#340926;
            padding-bottom:5px;
            color:white;
            opacity:0.9;
        }
    </style>
</head>
<body>
    <div class="container-fluid text-center" style="height:120px; background-color:#CBE432; opacity:0.9;">
        <h1 id="mainHeading">Laravel Login</h1>	
    </div>
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="118">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <!-- <ul class="nav navbar-nav">
                    <li><a href="Flight1.php">FLIGHT</a></li>
                    <li><a href="Train1.php">TRAIN</a></li>
                    <li><a href="Bus1.php">BUS</a></li>
                    <li><a href="Hotel1.php">HOTEL</a></li>
                    <li><a href="Aboutus1.php">ABOUT US</a></li>
                    <li><a href="Feedback1.php">FEEDBACK</a></li>
                </ul> -->
                <ul class="nav navbar-nav navbar-right">
    
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>{{$data->email}}</a><li>
                    <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div id="introduction" class="container text-center">
        <h1>Welcome to dashboard</h1>
    </div>
    <!--<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="118" name="n1">
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="nav navbar-nav">
                <li><a href="#"><h4>Special Offers</h4></a></li>
            </ul>
        </div>
    </nav>-->
    <div  class="container" id="googleMap" style="height:400px"></div>
    <br><br>
    <footer class="text-center" id="footerID">
        <a href="#" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Designed and Developed by  <span class="glyphicon glyphicon-copyright-mark"></span><b>Gaonkar #Oliver</b></p>
    </footer>
    <script>
        function myMap() {
        var myCenter = new google.maps.LatLng(19.2204, 73.1641);
        var mapProp = {center:myCenter, zoom:18, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg3AxFJTp-rgSuXzi6EyqV1dQpjn8v2wo&callback=myMap"></script>
</body>
</html>