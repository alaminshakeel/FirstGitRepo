var itemserial = document.getElementById('labitemsn').value = 1;

function formValidationCheck(){


}


function deleteRow(id){
	
	var row = document.getElementById('rowbody');
	var delrownum = document.getElementById('item' + id);
	row.removeChild(delrownum);

}

function calculateFunctionAmmount(){

	disc = document.getElementById('discpercent').value;
	
	subTotalAfterDisc = subTotal - (subTotal * disc)/100;
	roundoff = Math.round(subTotalAfterDisc);
	cashamount = roundoff;

	document.getElementById('subtotalaftdisc').value = subTotalAfterDisc;
	document.getElementById('roundoff').value = roundoff;
	document.getElementById('cashamount').value = cashamount;

}


$(function(){

	itemserial = 1;
	subTotal = 0;

	$('#itemadd').click(function(){
		//alert('yo');

		var labitesn = document.getElementById('labitemsn').value;
		var labitemname = document.getElementById('labitemname').value;
		var labitemmrp = document.getElementById('labitemmrp').value;
		var labitemqty = document.getElementById('labitemqty').value;
		var labmrptotal = document.getElementById('labmrptotal').value;

		// if(!labitemname || !labitemmrp || !labitemqty || !labmrptotal){
		// 	alert("Required Information Need to Fill Up.");
		// 	//return false;
		// }

		if(!labitemname){
		
		var name = document.getElementById('labitemname');
		var currentclass = name.parentNode.className;
		name.parentNode.className = currentclass + " form-group has-error";
		alert("Lab Item Name cannot be Empty");
		return false;
		
		}

		if(!labitemmrp || isNaN(labitemmrp)){
		
		var name = document.getElementById('labitemmrp');
		var currentclass = name.parentNode.className;
		name.parentNode.className = currentclass + " form-group has-error";
		alert("Lab Item MRP need to be Number ");
		return false;
		
		}

		if(!labitemqty || isNaN(labitemqty)){
		
		var name = document.getElementById('labitemqty');
		var currentclass = name.parentNode.className;
		name.parentNode.className = currentclass + " form-group has-error";
		alert("Lab Item Quantity need to be Number  ");
		return false;
		
		}


		// adding an item as row... 

		var labitems = document.getElementById('labitems');
		labitems.style.visibility = "visible";
		
		

		var row =   document.createElement('tr');
		row.id = "item"+itemserial;
		row.name = "item"+itemserial;

		
		var column = document.createElement('td');
		var text = document.createElement('input'); 
		text.id = "labitemsn"+itemserial;
		text.setAttribute('name','labitemsn'+itemserial );
		text.setAttribute('value',itemserial );
		text.setAttribute('readonly','');
		column.appendChild(text);
		row.appendChild(column);

 
		var column = document.createElement('td');
		var text = document.createElement('input'); 
		text.id = "labitemname"+itemserial;
		text.setAttribute('name','labitemname'+itemserial );
		text.setAttribute('value',labitemname );
		text.setAttribute('readonly','');
		column.appendChild(text);
		row.appendChild(column);

         

		var column = document.createElement('td');
		var text = document.createElement('input'); 
		text.id = "labitemmrp"+itemserial;
		text.setAttribute('name','labitemmrp'+itemserial );
		text.setAttribute('value',labitemmrp );
		text.setAttribute('readonly','');
		column.appendChild(text);
		row.appendChild(column);

		var column = document.createElement('td');
		var text = document.createElement('input'); 
		text.id = "labitemqty"+itemserial;
		text.setAttribute('name','labitemqty'+itemserial );
		text.setAttribute('value',labitemqty );
		text.setAttribute('readonly','');
		column.appendChild(text);
		row.appendChild(column);


		var column = document.createElement('td');
		var text = document.createElement('input'); 
		text.id = "labmrptotal"+itemserial;
		text.setAttribute('name','labmrptotal'+itemserial );
		text.setAttribute('value',labmrptotal );
		text.setAttribute('readonly','');
		column.appendChild(text);
		row.appendChild(column);

		var column = document.createElement('td');
		column.id = "labitemdlt"+itemserial;
        var span = document.createElement('span');
		span.className = "glyphicon glyphicon-trash";
		//alert(itemserial);
		span.setAttribute("onclick","deleteRow("+ itemserial +")")
		//span.addEventListener("click", function(){ deleteRow(itemserial)});
		column.appendChild(span);
		row.appendChild(column);

		
		var rowbody = document.getElementById('rowbody');
		rowbody.appendChild(row);
		ammount = $('#labmrptotal').val();
		
		subTotal =  subTotal + parseInt(ammount);
		document.getElementById('subtotal').value = subTotal;
		calculateFunctionAmmount();
		
		itemserial++;
		document.getElementById('labitemsn').value = itemserial;
		document.getElementById('labitemname').value = '';
		document.getElementById('labitemmrp').value = '';
		document.getElementById('labitemqty').value = '';
		document.getElementById('labmrptotal').value = '';


	
	});


	$('#discpercent').blur(function(){
		calculateFunctionAmmount();
	});

	//

	$('#btn-invoice-submit').click(function(){
		

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

		if( parseInt(itemserial) < 2 ){
			alert('Empty Item cannot be submitted..');
			return false;
		}


		$('#invoiceSubmit').submit();



	});

	

});