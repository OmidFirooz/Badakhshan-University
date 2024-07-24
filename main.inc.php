<!DOCTYPE html>
<html>
<head>
<?php
require "db.inc.php";
?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content="30"> -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/forms.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-icons.css">
	
	<title>Welcome | Badakhshan University</title>
	
</head>
<body>
	
<div class="contain">
	
	<div id="banner">
		<a href="index.php">
			<div id="logo"><img src="images/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" width="80px" height="80" alt="Badakshan University"></div>
			<div id="slogan">Badakhshan University</div>
		</a>
	</div>
	
		<nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
			
            <div class="collapse navbar-collapse" id="collapse">
            	<ul class="nav navbar-nav" id="nav-top">
                	<li><a href="index.php">Home</a></li>
                	<li class="dropdown"><a href="faculty.php" data-toggle="dropdown">Faculties<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="faculty.php">New Faculty</a></li>
                        	<li><a href="faculty.php">All Faculties</a></li>
                         
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="department.php" data-toggle="dropdown">Departments<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="department.php">New Department</a></li>
                            <li><a href="department.php">All Departments</a></li>
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="student.php" data-toggle="dropdown">Student<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="student.php">New Student</a></li>
                            <li><a href="student.php">All Students</a></li>
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="teacher.php" data-toggle="dropdown">Teachers<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="teacher.php">New Teacher</a></li>
                            <li><a href="teacher.php">All Teachers</a></li>
                        </ul>                    
                    </li>
                </ul>
			</span>
            </div>  
        </nav>

	
</div>
	
</body>
</html>