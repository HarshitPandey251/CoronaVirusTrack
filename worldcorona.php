<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
 
</head>
<body>

<nav class="navbar navbar-expand-lg p-3 nav_style">
  <a class="navbar-brand pl-5" href="#" >COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldcorona.php">WorldCoronaLive</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">contact</a>
      </li>
    </ul>
  </div>
</nav>
<!-- *************************************Project************************ -->
<section class="corona_update container-fluid">
    <div class="mb-7">
        <h3 class="text-center text-uppercase"> COVID-19 LIVE UPDATE OF THE WORLD</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <tr>
                <th class="text-capitalize">lastupdatedtime</th>
                <th class="text-capitalize">country</th>
                <th class="text-capitalize">TotalConfirmed</th>
                <th class="text-capitalize">TotalRecovered</th>
                <th class="text-capitalize">NewRecovered</th>
                <th class="text-capitalize">TotalDeaths</th>
                <th class="text-capitalize">NewDeaths</th>
            </tr> 

            <?php
            $data = file_get_contents('https://api.covid19api.com/summary');
            $coronalive = json_decode($data, true);
            
            $i=1;
            $stateCount = count($coronalive['Countries']);
            while($i<$stateCount){
            ?>
              <tr>
              <td><?php echo $coronalive['Countries'][$i]['Date']?></td>    
              <td><?php echo $coronalive['Countries'][$i]['Country']?></td>
              <td><?php echo $coronalive['Countries'][$i]['TotalConfirmed']?></td>
              <td><?php echo $coronalive['Countries'][$i]['TotalRecovered'] ?></td>
              <td><?php echo $coronalive['Countries'][$i]['NewRecovered']?></td>
              <td><?php echo $coronalive['Countries'][$i]['TotalDeaths'] ?></td>
              <td><?php echo $coronalive['Countries'][$i]['NewDeaths']?></td>
              </tr>
            <?php
              $i++;
            }

            
            ?>
        </table>
    </div>
</section>


<!-- *********************************** footer part ****************** -->

<footer class="mt-5">
	<div class=" footer_style bg-dark text-white container-fluid text-center">
		<p>copyright by Harshit Pandey</p>
	</div>
</footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script>


</script>
</body>
</html>