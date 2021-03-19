<?php
if(isset($_POST['tense'])) {
	$name = $_POST['tense'];
	$link = pg_connect("dbname=lang user=postgres password=password");
	$query = pg_query($link, "SELECT explain FROM tenses WHERE tense = '{$name}'");
	$result = pg_fetch_result($query, 0, 0);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>English</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="whole">
<form name="lang" method="post">
<div class="container">
<div class="parent">
<div class="btn-group">
  <button name="tense" value="present_simple">Present Simple</button>
  <button name="tense" value="past_simple">Past Simple</button>
  <button name="tense" value="future_simple">Future Simple</button>
</div>
<div class="btn-group">
  <button name="tense" value="present_cont">Present Continuous</button>
  <button name="tense" value="past_cont">Past Continuous</button>
  <button name="tense" value="future_cont">Future Continuous</button>
</div>
<div class="btn-group">
  <button name="tense" value="present_perf">Present Perfect</button>
  <button name="tense" value="past_perf">Past Pefrect</button>
  <button name="tense" value="future_perf">Future Perfect</button>
</div>
<div class="btn-group">
  <button name="tense" value="present_perf_cont">Present Perfect Continuous</button>
  <button name="tense" value="past_perf_cont">Past Perfect Continuous</button>
  <button name="tense" value="future_perf_cont">Future Perfect Continuous</button>
</div>
</div>
</div>
</form>
<div class="arrow"><i class="right"></i></div>
<div class="result"><?=$result;?></div>
</div>
<style type="text/css">
	body {
	margin: 0;
	padding: 0;
	font-family: 'Roboto', sans-serif;
	}

    .whole {
    overflow:hidden;
    }

	.btn-group button {
    background-color: #4CAF50;
    border: 1px solid green;
    color: white;
    cursor: pointer;
    float: left; 
    height: 100px;
    width: 180px;
    font-size: 17px;
    }

    button, button:active{
    outline:0 none !important;
    }

    .btn-group button:hover {
    background-color: #3e8e41;
    }

    .parent {
    display: grid;
    height: 400px;
    margin-top: 90px;
    margin-left: 80px;
    }

    i {
    border: solid black;
    border-width: 0 10px 10px 0;
    display: inline-block;
    padding: 10px;
    }

    .right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    }

    .result {
    width: 500px;
    float: left;
    margin-top: 279px;
    margin-left: 57px;
    font-size: 18px;
    }

    .container {
    width: 720px;
    float: left;
    }

    .arrow {
    float: left;
    margin-top: 274px;
    margin-left: -34px;
    }
</style>
</body>
</html>