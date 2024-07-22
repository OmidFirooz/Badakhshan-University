<!DOCTYPE html>
<html>
<head>
<?php
// require_once("connection.php");
?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="utf-8">
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<title>خوش آمدید | دانشگاه بدخشان</title>
	
</head>
<body>
	
<div class="container">
	
	<div id="banner">
		<div id="logo"></div>
		<div id="slogan"> Badakhshan University</div>
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
                	<li><a href="#">صفحه اصلی</a></li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">محصلان <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="employee_add.php">ثبت محصل جدید</a></li>
                         
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">استادان <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="customer_add.php">ثبت استادان جدید</a></li>
                            <li><a href="customer_list.php">لیست همه اساتید</a></li>
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">فاکولته ها <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="faculty.php">ثبت فاکولته جدید</a></li>
                            <li><a href="#">لیست همه فاکولته ها</a></li>
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">دیپارتمنت ها <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">ثبت دیپارتمنت جدید</a></li>
                            <li><a href="#">لیست دیپارتمنت ها</a></li>
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown"> مضامین<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">لیست مضامین</a></li>
                            <li><a href="#">ثبت مضمون جدید</a></li>
                        </ul>                    
                    </li>
                 
				
                    <li><a href="logout.php">خروج</a></li>  
                </ul>
			</span>
            </div>  
        </nav>
	
	
	<div id="page">	
	
		<div id="lsb" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		</div>
		
		<div id="content" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		  
		</div>
		
		<div id="rsb" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			
			
			
			
		</div>
	
	</div>
	
	<div class="clearfix"></div>
	
	<div id="footer" style="direction:ltr;">
		Copyright &copy; <?php echo date("Y"); ?> All right reserved.
	</div>
	
</div>
	
</body>
</html>