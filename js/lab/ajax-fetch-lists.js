
$(function(){

	var URL = "http://localhost/best/index.php/";   // declaration globally 


	$.ajax({							// for fetching all indoor patients
		type: "POST",
		url: URL+"reception/fetch_patients",
		data: { patientname:'name' },
		success: function(patientlist,status){

			$('#patient-list').html(patientlist);

		}
	});

	$.ajax({							// for fetching all indoor doctors
		type: "POST",
		url: URL+"reception/fetch_doctors",
		data: { doctorsname:'name' },
		success: function(doctorlist,status){

			$('#mondoc').html(doctorlist);

		}
	});

	
	$.ajax({							// for fetching all lab test items
		type: "POST",
		url: URL+"reception/fetch_lab_items",
		data: { labtestitemsname:'name' },
		success: function(labtestitemlist,status){

			$('#labitem-list').html(labtestitemlist);

		}
	});	


	$('#labitemname').blur(function(){
		
		var item = $('#labitemname').val();
		$.ajax({							// for fetching all lab test items details
			type: "POST",
			url: URL+"reception/fetch_lab_item_details/"+item,
			data: { itemdetails:'mrp' },
			success: function(testitemsdetails,status){

			document.getElementById('labitemmrp').value = testitemsdetails;
			var qty = document.getElementById('labitemqty').value = 1;
			document.getElementById('labmrptotal').value = testitemsdetails * qty;

			}
		});

		//alert(URL);
		// $.get("http://localhost/codyii/js/lab/ajax-fetch-labitem-details.php",{labitemname:'name'},function(labitemmrp,status){

		// 	//alert(status);

		// });
	});

	$('#labitemqty').blur(function(){
		//alert('lose');	
		var mrp = document.getElementById('labitemmrp').value;
		var qty = document.getElementById('labitemqty').value;
		document.getElementById('labmrptotal').value = mrp * qty;
		//alert(status);
	});

	

	$.ajax({							// for fetching all lab test category 
		type: "POST",
		url: URL+"lab/fetch_category",
		data: { category:'name' },

		success: function(labtestcategory,status){
			
			$('#categoryname').html(labtestcategory);

		}
	});	


	// $.get("http://localhost/codyii/index.php/lab/fetch_category",{testcategory: 'test'},function(data,status){
		
	// 	$('#categoryname').html(data);
	// 	alert(data);

	// });

});

