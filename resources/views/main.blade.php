<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CIELOTS </title>
    <!-- <link rel="stylesheet" type="text/css" href="css/reset.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Julee" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lakki+Reddy" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">    
<style>
.login {
	margin-top: 50px;
	padding-bottom: 50px;
	padding-right: 10px;
}
.clear:after {
	clear: both;
}
.leftLogin {
	float: left;
}
.rightLogin {
	float: right;
	font-size: .85em;
}
.col-xs-12 {
	padding: 15px;
}
.btn-default:hover {
	color: #0d0c0a;
    background-color: #b4762d;
    font-weight: bold;
}

.btn-default:focus {
	color: #b4762d;
    background-color: #e6e6e6;
}
body, html {
    background: url('images/StockSnap_VEG698H8CK.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    height: 100%;
}


</style>
</head>
<body class="container">

<div style="margin:10%;">
<div style="margin:0; min-height:300px; overflow: hidden;background-color: rgba(0, 0, 0, 0.8); color: white;">
<div class="login">
    <img src="images/StockSnap_XEKQ6J8TXR.jpg" class="col-md-7"> 
</div>
<div class="col-sm-2"> </div> 
<div class="col-md-3 col-sm-8">

<!-- form from bootstrap -->
<div class="container">
  <h2>RSVP & Registry</h2>
  
  <form>
    <div class="radio">
      <label><input type="radio" name="optradio">Going</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Not Going</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Undecided</label>
    </div>
  </form>
</div>
<!-- end of bootstrap form -->


</div>

@yield('banner')

<div style="margin:0; height:600px; background-color: rgba(255,69,0, 1);font-size:36px">
Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>
<div style="margin:0; height:600px; background-color: rgba(255,69,0, 0.25);font-size:36px">
Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>