<?php require "header.php"; ?>
<div class="group-box">
	<div align="center">
	<div class="title">SINH VIÊN</div>
	</div>
	
	<div class="success">
	 <?php
		if (isset($_POST["MaSV"])){
			echo $_POST["MaSV"];
		}
	 
	 ?>
	
	
	</div>
</div>

<?php require "footer.php";?>