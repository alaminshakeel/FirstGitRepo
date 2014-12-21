$(function(){

	$('#itemadd').click(function(){

		categoryname = document.getElementById('categoryname').value;

		if(!categoryname){
			alert("Category Name Must be Enter..");
			return false;
		}

		$('#categorySubmit').submit();

	});

	$('#testitemadd').click(function(){

		categoryname = document.getElementById('categoryname').value;

		if(!categoryname){
			alert("Category Name Must be Enter..");
			return false;
		}

		$('#testSubmit').submit();

	});

	$('#testpriceadd').click(function(){

		categoryname = document.getElementById('categoryname').value;

		if(!categoryname){
			alert("Category Name Must be Enter..");
			return false;
		}

		$('#labtestpriceSubmit').submit();

	});
	


	// $.get("http://localhost/codyii/index.php/lab/fetch_category",{testcategory: 'test'},function(data,status){
		
	// 	$('#categoryname').html(data);
	// 	alert(data);

	// });


});