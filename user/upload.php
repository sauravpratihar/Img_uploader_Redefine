<?php

// if(!isset($_POST['img']))
	// header("Location: index.php");

if(isset($_FILES['image'])){
	$total = count($_FILES['image']['name']);

	for($i=0; $i<$total; $i++){
	      $file_name = $_FILES['image']['name'][$i];
	      $file_size =$_FILES['image']['size'][$i];
	      $file_tmp =$_FILES['image']['tmp_name'][$i];
	      $file_type=$_FILES['image']['type'][$i];
	      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'][$i])));
	      
	      $expensions= array("jpg");
	      
	      if(in_array($file_ext,$expensions)=== false){
	         $errors="extension not allowed, please choose a JPEG or PNG file.";
	      }
	      
	      if(empty($errors)==true){
	         move_uploaded_file($file_tmp,"guru/".$file_name);
	         echo "<script>alert('Image(s) Uploaded!');</script>";
	         echo "<script>window.location.href = 'index.php';</script>";


	      }else{
	         echo "<script>alert('".$errors."');</script>";
	         echo "<script>window.location.href = 'index.php';</script>";

	      }
  	}
}

else{
	header("Location: index.php");
}


?>