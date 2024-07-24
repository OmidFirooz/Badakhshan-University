<?php

require 'main.inc.php';



?>
<div class="container">	
	<div class="container custom-form-container">
		<div style="display:flex;">
		<a href="faculty.php">
			<div class="container custom-div-container">
				<h3 class="text-center">Faculty</h3>
			</div>
			</a>
				<div class="container custom-div-container">
				<a href="department.php"><h3 class="text-center">Department</h3></a>
			</div>
		</div>
		<div style="display:flex;">
			<a href="student.php">
			<div class="container custom-div-container">
				<h3 class="text-center">Student</h3>
			</div>
			</a>
			<a href="teacher.php">
			<div class="container custom-div-container">
				<h3 class="text-center">Teacher</h3>
			</div>
			</a>
		</div>	
	</div>
</div>

<div class="clearfix"></div>
<div id="footer" style="direction:ltr;">
	Copyright &copy; <?php echo date("Y"); ?> All right reserved.
</div>