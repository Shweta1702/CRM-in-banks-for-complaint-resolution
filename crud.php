<!DOCTYPE html>
<html>
<head>
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
      background-color: #0FFF50;
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
        <li><a href="#section3">Customer complaints and queries</a></li>
        <li><a href="#section4">Status and Analytics of Complaint resolution</a></li>
	<li><a href="#section 5">FAQs</a></li>
	<li><a href="#section 6">Complaint reports</a></li>
	<li><a href="#section 7">Login</a>
	
	
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>The following services are available in the bank.</h4>
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
            <h4> Open new bank account/close bank account</h4>
            <p>10000</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Deposits,loans,mortgages</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Insurance</h4>
            <p>%</p> 
          </div>
        </div>
      </div>
  <meta charset="UTF-8">
  <title> CRUD</title>
  <style>
    input[type='submit'], button, [aria-label]{
      cursor: pointer;
    }
    #spoiler{
      display: none;
    }
  </style>
</head>
<body>

<form action="javascript:void(0);" method="POST" onsubmit="app.Add()"> 
  <input type="text" id="add-name" placeholder="Service">
  <input type="submit" value="Add">
</form>

<div id="spoiler" role="aria-hidden">
  <form action="javascript:void(0);" method="POST" id="saveEdit">
    <input type="text" id="edit-name">
    <input type="submit" value="Edit" /> <a onclick="CloseInput()" aria-label="Close">&#10006;</a>
  </form>
</div>

<p id="counter"></p>

<table>
  <tr>
    <th>Service</th>
  </tr>
    <tbody id="countries">
    </tbody>
</table>

<script>
var app = new function() {

  this.el = document.getElementById('countries');

  this.countries = ['Create Bank account', 'Insurance', 'Savings account', 'Deposits', 'Loans', 'Delete Bank Accounts', 'Foreign Exchange', 'Customer Care', 'Queries'];

  this.Count = function(data) {
    var el   = document.getElementById('counter');
    var name = 'countries';

    if (data) {
      if (data > 1) {
        name = 'services';
      }
      el.innerHTML = data + ' ' + name ;
    } else {
      el.innerHTML = 'No ' + name;
    }
  };
  
  this.FetchAll = function() {
    var data = '';

    if (this.countries.length > 0) {
      for (i = 0; i < this.countries.length; i++) {
        data += '<tr>';
        data += '<td>' + this.countries[i] + '</td>';
        data += '<td><button onclick="app.Edit(' + i + ')">Edit</button></td>';
        data += '<td><button onclick="app.Delete(' + i + ')">Delete</button></td>';
        data += '</tr>';
      }
    }

    this.Count(this.countries.length);
    return this.el.innerHTML = data;
  };

  this.Add = function () {
    el = document.getElementById('add-name');
    // Get the value
    var country = el.value;

    if (country) {
      // Add the new value
      this.countries.push(country.trim());
      // Reset input value
      el.value = '';
      // Dislay the new list
      this.FetchAll();
    }
  };

  this.Edit = function (item) {
    var el = document.getElementById('edit-name');
    // Display value in the field
    el.value = this.countries[item];
    // Display fields
    document.getElementById('spoiler').style.display = 'block';
    self = this;

    document.getElementById('saveEdit').onsubmit = function() {
      // Get value
      var country = el.value;

      if (country) {
        // Edit value
        self.countries.splice(item, 1, country.trim());
        // Display the new list
        self.FetchAll();
        // Hide fields
        CloseInput();
      }
    }
  };

  this.Delete = function (item) {
    // Delete the current row
    this.countries.splice(item, 1);
    // Display the new list
    this.FetchAll();
  };
  
}

app.FetchAll();

function CloseInput() {
  document.getElementById('spoiler').style.display = 'none';
}
</script>
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
  background-color: #0FFF50;
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
</body>
</html>