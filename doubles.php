<html>

<head>
<link rel="shortcut icon" type="image/png" href="images\favicon.png">
</link>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
    
<body>
<a class="active" href= "index.html">
<div class="header">
    
<h1 class="display-2" style="color:black">IB Diploma Computer Science</h1> 
    </div>
    </a>

<form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">Computer Science</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  	 <div class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Topic1.html">Topic 1: System fundamentals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Topic2.html">Topic 2: Computer organization</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Topic3.html">Topic 3: Networks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Topic4.html">Topic 4: Computational thinking, problem-solving</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Topic5.html">Topic C: Web Science</a>
      </li>
    </ul>
  </div>
</div>
</nav>
</link>
    <?php
    $newVal = $_GET["n"]*2;
	echo '<br><a href="doubles.php?n='.$newVal.'"><p style="text-align:center"><font size="20">'.$_GET["n"].'</font></a>';
	?>
</body>
</html>