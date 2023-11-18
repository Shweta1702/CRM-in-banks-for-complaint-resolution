<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 1000px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Complaints and Queries</a></li>
        <li><a href="#">Blogs</a></li>
	<li><a href ="#">About Us</a></li>
      </ul>
    </div>
  </div>
</nav>

/<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2> admin dashboard logged in</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="charts.html">Home</a></li>
	<li><a href ="aboutus.html">About us</a></li>
	<li><a href="tasksandprojects.html">Projects and Tasks</a></li>
	<li><a href="crud.php">Get Services</a></li>
        <li><a href="#complaint.php">Customer complaints and queries</a></li>
        <li><a href="#section4">Status and Analytics of Complaint resolution</a></li>
	<li><a href="#section 5">FAQs</a></li>
	<li><a href="#section 6">Complaint reports</a></li>
	<li><a href="#section 7">Login</a>
	
	
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Complaint and queries in banks. </h4>
        <p>This is a system  designed to provide client support in banks.</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>Angel Stone</p> 

	
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Complaints</h4>
            <p>10000</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div>
	  

     <table id="myTable">
<th>Username</th>
<th>Bank Account Number</th>

<th>Description</th>
  
  <tr>
    <td>Angel Stone</td><br>
    <td>A53629000</td><br>
		<td>The check paid to school had bounced</td><br>
	
  <tr>
    <td>Voennya Voedka</td>
    <td>A890100</td>
	<td>The insurance policy lapsed</td>
	
  </tr>
  <tr>
  <td>Alan Marx</td>
  <td>SK12993</td>
  <td>Loan Issues</td> <tr>
    <td>Angel Stone</td><br>
    <td>A53629000</td><br>
		<td>The check paid to school had bounced</td><br>
	</tr>
  <tr>
    <td>Lopez </td>
    <td>A890100</td>
	<td>The insurance policy lapsed</td>
	
  </tr>
  <tr>
  <td>Lean Matt</td>
  <td>SK12993</td>
  <td>Loan Issues</td>
   <td>Ales Marx</td>
  <td>SK12993</td>
  <td>Loan Issues</td> <tr>
    <td>Ash Steer</td><br>
    <td>A20029000</td><br>
		<td>Closure of bank account by error</td><br>
	
  <tr>
    <td>Leeks </td>
    <td>A89010s22L0</td>
	<td>High Interest rates</td>
	
  </tr>
  <tr>
  <td>Jones Mere</td>
  <td>So1299dde3</td>
  <td>mortgage approvals</td>
 </tr>
   <td>Alebbe sern</td>
  <td>SK129de93</td>
    <td>Loan Issues</td> <tr>
	<tr>
    <td>Andrew Anderes</td><br>
    <td>L536B2R900L0</td><br>
		<td>High borrowings</td><br>
	
  <tr>
    <td>Lopez </td>
    <td>A890100</td>
	<td>The insurance policy lapsed</td>
	
  </tr>
  <tr>
  <td>Alan Matt</td>
  <td>SK12993</td>
  <td>Loan Issues</td>
   <td>Alan Marx</td>
  <td>SK12993</td>
  <td>Loan Issues</td> <tr>
    <td>Angel Stone</td><br>
    <td>A53629000</td><br>
		<td>The check paid to school had bounced</td><br>
	
  <tr>
    <td>Lopez </td>
    <td>A890100</td>
	<td>The insurance policy lapsed</td>
	
  </tr>
  <tr>
  <td>Anne Fresco</td>
  <td>S0HK12Lo993</td>
  <td>New bank account creation</td>
  </tr>
   <td>AK enterprises</td>
  <td>Z223K12993</td>
  <td>Bounced Checks</td> </tr>
  <tr>
    <td>Sophie Stone</td><br>
    <td>AF53629000</td><br>
		<td>High bank charges in mortgage</td><br>
	</tr>
  <tr>
    <td>Karl	</td>
    <td>AWE890KK100</td>
	<td>The insurance policy lapsed</td>
	
  </tr>
  <tr>
  <td>Annah Meatt</td>
  <td>S789K12993</td>
  <td>Loan Issues</td>
  
</table>
<br>

<button onclick="myCreateFunction()">Add new complaint</button>
<button onclick="myDeleteFunction()">Delete  resolved complaint</button>

<script>
function myCreateFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  cell1.innerHTML = "Rodger Hughes";
  cell2.innerHTML = "A738293";
  cell3.innerHTML="mortgages loan approvals"
}

function myDeleteFunction() {
  document.getElementById("myTable").deleteRow(0);
}
</script>
</table>


   
      
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;}
</style>
</head>
<body>


<br>



<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>11+</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>55+</h3>
      <p>Projects</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>100+</h3>
      <p>Happy Clients</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>100+</h3>
      <p>Meetings</p>
    </div>
  </div>
</div>

</body>


</html>
