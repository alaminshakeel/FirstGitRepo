
	var URL = "http://localhost/best/index.php/";  

$(function(){



	$('#categoryname').change(function(){



		labitemcategory = document.getElementById('categoryname').value;

		//alert(labitemcategory)

	
	$.ajax({							// for fetching all test list by category
		type: "POST",
		url: URL+"lab/fetch_report/"+labitemcategory,
		data: { report:'name' },
		success: function(reportlist,status){

			$('#rowbody').html(reportlist);

		}
	});


	$('#btn-report-submit').click(function(){
		

		// var itemseiral = document.getElementById('labitemsn').value;

		//alert(counter);

		var patientname = $('#patientname').val();
		// var patientname = document.getElementById('patientname').value;
		var billdate = document.getElementById('billdate').value;
		var mondoc = document.getElementById('mondoc').value;

		if(!patientname){
			alert("Patient Name Can't be Empty");
			return false;
		}

		if (!billdate) {
			alert("Bill Date Can't be Empty");
			return false;
		}

		if(!mondoc){
			alert('Select Monitoring Doctor');
			return false;
		}

		
		// var selectedItems = document.getElementById('rowbody');

		// if(selectedItems.hasChild()){
		// 	alert('Empty Item cannot be submitted..');
		// 	return false;
		// }

		// if( parseInt(itemserial) < 2 ){
		// 	alert('Empty Item cannot be submitted..');
		// 	return false;
		// }


		$('#reportSubmit').submit();



	});



		// $.get("js/lab/ajax-fetch-labitem-list.php",{category:labitemcategory},function(labitemcategorylist,status){

		// 	$('#rowbody').html(labitemcategorylist);
		// 	//alert(status);
		// });

	});


});