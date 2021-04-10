<!DOCTYPE html>
<html>
<head>
	<title>social media</title>
     <?php  include'links.php';?>
     <?php  include'style.php';?>
      <?php  include'script.php';?>

     <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
 <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
   
</head>
<body onload="fetch">

<div class="pos-f-t">
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-5">
    <h5 class="text-white h4">covid-19</h5>
    <span class="text-muted">One of the most dangerous deasease.</span>
  </div>
</div>
<nav class="navbar navbar-dark navv">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 id="DAD">CoRoNa.ORG</h1>
  
  </div>

</nav>

<div class="heart">
	
    <img src="images/new4.png" class="corona">
    <h4 style="color:#f2fc7c; margin-left:35px; text-decoration-style: monospace; font-style: italic;">Be careful.I'm back</h4>

</div>
<section class="corona-update">
	<div class="mb-2 clas">
		<h3 class="text-uppercase text-center" style="color:#fcac7c;">Covid-19 Updates world wide</h3>
	</div>
	<div class="d-flex justify-content-around align-items-center margin">
		<div>
			<h1 style="color: #5de3f8;" class="count"> 130,425,088</h1>
			<p style="color: white;">Live cases</p>
		</div>

		<div>
			<h1 style="color: #5de3f8;" class="count">12,843,691</h1>
			<p style="color: white;">Deaths</p>
		</div>

		<div>
			<h1 style="color: #5de3f8;" class="count">105,059,630</h1>
			<p style="color: white;">Recovered</p>
		</div>
	</div>
</section><hr><hr>



<!---------------------------------STATEWISE--------------------------------->


 <section class="mytabs">
 	
 		<input type="radio" id="tabstate" name="mytabs" checked="checked">
 		<label class="text-center text-uppercase" style="color:#f73b8a;" for="tabstate">corona updates in india</label> 
 	

 	<div class="table-responsive tablee" >
 		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for your state">
 		<table class="table table-bordered table-striped text-center" id="myTable">
 			<tr>
 				
 				<th style="color: #f4f223;" class="text-uppercase ">state</th>
 				<th style="color: #f4f223;" class="text-uppercase ">confirmed</th>
 				<th style="color: #f4f223;" class="text-uppercase ">active</th>
 				<th style="color: #f4f223;" class="text-uppercase ">recovered</th>
 				<th style="color: #f4f223;" class="text-uppercase ">deaths</th>
 				<th style="color: #f4f223;" class="text-uppercase ">Lastly updated</th>
 			</tr>
 			<?php

$data=file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data,true);
//echo "<pre>";

//print_r($coronalive)

//echo "</pre>";


//echo $coronalive['statewise'][1]['state'];
$statescount=count($coronalive['statewise']);

$i=1;
while ($i < $statescount) {

  ?>
  <tr>
    
    <td style="color: #7AE4F5;"><?php echo $coronalive['statewise'][$i]['state']; ?></td>
    <td style="color: #7AE4F5;"><?php echo $coronalive['statewise'][$i]['confirmed']; ?></td>
    <td style="color: #7AE4F5;"><?php echo $coronalive['statewise'][$i]['active'];?></td>
    <td style="color: #7AE4F5;"><?php echo $coronalive['statewise'][$i]['recovered'] ;?></td>
    <td style="color: #7AE4F5;"><?php echo $coronalive['statewise'][$i]['deaths']; ?></td>
    <td style="color: #7AE4F5;"><?php echo $coronalive['statewise'][$i]['lastupdatedtime']; ?></td>

  </tr>

 

<?php
  $i++;

}


?>
 


 		</table>
 	</div>
 

 


<!------------------------COUNTRYWISE--------------------------------->





	
		<input type="radio" id="tabcountry" name="mytabs">
 		<label class="text-center text-uppercase" style="color:#f73b8a;" for="tabcountry">corona updates countrywise</label> 
 	
<div class="table-responsive tablee" >
 		<input type="text" id="myinput" onkeyup="myfunction()" placeholder="Search for your country">
 		<table class="table table-bordered table-striped text-center" id="mytable">
 			<tr>
 				
 				<th style="color: #f4f223;" class="text-uppercase ">Countries</th>
 				<th style="color: #f4f223;" class="text-uppercase ">totally confirmed</th>
 				<th style="color: #f4f223;" class="text-uppercase "> deaths</th>
 				<th style="color: #f4f223;" class="text-uppercase ">recovered</th>
 				<th style="color: #f4f223;" class="text-uppercase ">lastly updated</th>
 				
 			</tr>
 			<?php

$data=file_get_contents('https://api.covid19api.com/summary');
$coronalive = json_decode($data,true);
//echo "<pre>";

//print_r($coronalive)

//echo "</pre>";


//echo $coronalive['statewise'][1]['state'];
$statescount=count($coronalive['Countries']);

$i=1;
while ($i < $statescount) {

  ?>
  <tr>
    
    <td style="color: #7AE4F5;"><?php echo $coronalive['Countries'][$i]['Country']; ?></td>
    <td style="color: #7AE4F5;"><?php echo $coronalive['Countries'][$i]['TotalConfirmed']; ?></td>
    <td style="color: #7AE4F5;"><?php echo $coronalive['Countries'][$i]['TotalDeaths'];?></td>
    <td style="color: #7AE4F5;"><?php echo $coronalive['Countries'][$i]['TotalRecovered'] ;?></td>
    <td style="color: #7AE4F5;"><?php echo $coronalive['Countries'][$i]['Date']; ?></td>
    

  </tr>

 

<?php
  $i++;

}


?>
 


 	</table>
 </div>
 
</section>




<!-------------------------javascript-------------------------------->





    <script type="text/javascript">

function myfunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myinput");
  filter = input.value.toUpperCase();
  table = document.getElementById("mytable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}





function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}



</script>


 

</body>
</html>
