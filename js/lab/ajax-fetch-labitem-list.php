<?php


if(isset($_GET['labitemname'])){

$labitemname = $_GET['labitemname'];

echo "  <datalist id='labitem-list'>  <option value='Abul'>   <option value='$labitemname'>   <option value='sAbul'>   </datalist>";

//echo "<script> alert('he') </script>";

//echo $patname;
}

if(isset($_GET['category'])){

$labitemcategory = $_GET['category'];

echo "  $labitemcategory";

//echo "<script> alert('he') </script>";

//echo $patname;
}

if(isset($_GET['testcategory'])){

	echo "<option> Select Category </option>";
	for ($i=0; $i < 5; $i++) { 
		
		echo "<option> biochemestry </option>";

	}
}

