<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        VIRTUAL G2G
    </title>
    
    <!-- Bootstrap Files -->
    <link rel="stylesheet" href="<?php echo base_url().'/bootstrap/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url().'/bootstrap/css/custom.css'; ?>">
    <script src="<?php echo base_url().'/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/bootstrap/js/custom.js'; ?>"></script>
</head>
<body style="background-image: url('<?php echo base_url().'/images/bg-3.jpg'; ?>');">
	<div class="row mt-2">
        <div class="col-12 text-center">
            <div style="text-align: center; font-size: 55px; color: green;"> 
                <span class="e1">V</span> 
                <span class="e2">I</span> 
                <span class="k1">R</span> 
                <span class="s1">T</span> 
                <span class="f">U</span> 
                <span class="o">A</span> 
                <span class="r">L</span> 
                <span class="G2">-</span> 
                <span class="e3">G</span> 
                <span class="e4">2</span> 
                <span class="k2">G</span> 
            </div> 
            <img class="logo" src="<?php echo base_url().'/images/logo.png'; ?>" height="125px" width="125px"/>
        </div>
    </div>

    <br/>

    <div class="raffle">
        <div id="start" class="row">
            <div class="col-12 text-center">
                <h3>Number of remaining names: <b id="nameListTxt"><?php echo count($employee); ?></b></h3>
                <h3 class="text-success"></h3>
            </div>
            <div class="col-12 text-center">
                <input type="button" class="btn btn-primary" value="Start" onclick="loadDoc()"/>
            </div> 
        </div>
    </div>
    <div id="demo">
    </div>

<div class="container">
  <div class="row">
    <div class="col-12">
    </div>
    <div class="col-12 mt-5 d-flex justify-content-center">
      <div class="box">
        <div class="box-body">
          <div class="img" style="background-color: gray"><h1 class="text-center" id="nameTxt">No one selected</h1></div>
          <div class="box-lid">
            
            <div class="box-bowtie"></div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
            displayNames();
            }
        };
        xhttp.open("GET", "<?php echo base_url('Home/test1');?>", true);
        xhttp.send();
    }

    function displayNames(){
        document.getElementById("nameListTxt").innerHTML = document.getElementById("namesList").value;
        document.getElementById("nameTxt").innerHTML = "Selected name is " + document.getElementById("name").value;
    }
</script>