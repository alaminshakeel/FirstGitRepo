<?php



echo validation_errors();

 

// if(isset($title)){
//   echo $title;
// }

echo form_open('Lab/test_report',array('name' => 'reportSubmit','id' => 'reportSubmit'));
?>


<div class="container">
  
  <div class="row">
    <div class="col-xs-10 ">
    	<label for="patientname"> Patient Name: *</label>
      <input type="text" name="patientname" id="patientname" list="patient-list" class="form-control" placeholder="Patient Name: ">
      <datalist id="patient-list"> </datalist>
    </div>
  </div>

  

  <div class="row">
    <div class="col-xs-2">
      <label for="age"> Age:</label>
      <select class="form-control" id="patientage" name="patientage">
        <?php for ($i = 1; $i < 150; $i++) { 

          echo "<option value='$i'>$i</option>";

        } ?>
      </select>
    </div>

     <div class="col-xs-2">
      <label for="sex"> Sex: </label>
      <select class="form-control" id="patientsex" name="patientsex">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>

    <div class="col-xs-5 col-md-offset-1">
    	<label for="mondoc"> Monitoring Doctor: </label>
      <select class="form-control" id="mondoc" name="mondoc" >
        <option value="doc1">Doctor 1</option>
        <option value="doc2">Doctor 2</option>
      </select>
  </div>
    
  </div>
  <div class="row">
    <div class="col-xs-4 ">
      <label for="billdate"> Test Report Date: </label>
      <input type="text" id="billdate" class="form-control" name="billdate" value="<?php echo date("Y-m-d"); ?>" >
    </div>
    <div class="col-xs-3 col-md-offset-1">
      <label for="refdoc"> Reference Doctor: </label>
      <input type="text" class="form-control" id="refdoc" name="refdoc" placeholder="Reference Doctor Name">
    </div>

  </div>
  
  <div class="row">
      <br/>
      <br/>
      <div class="col-xs-12">
      <label for="separator"></label>
      
      </div>
  </div>

  
    <div class="row">
      <div class="col-xs-3">
        <label for="serial" class="sr_only"> Select Category</label>
      </div>
       
      <div class="col-xs-3">
        <label for="catgory"></label>
	      <select class="form-control" id="categoryname" name="categoryname">
	        <option value="male">..</option>
	        <option value="female">..</option>
	      </select>
      </div>

    </div>


  <div class="row">
    &nbsp;
  </div>

  <div class="row">
    <table class="table table-striped" id="labitems" style="visibility:show">
      <thead>
        <tr>
          <th>#</th>
          <th>Item Name</th>
          <th>Result Value</th>
          <th>Units</th>
          <th>Reference</th>

        </tr>
      </thead>
      <tbody id="rowbody">

      </tbody>
    </table>
  </div>

    <div class="row">
    <table class="table table-striped" id="separator" style="visibility:hidden">
      
    </table>
  </div>

  

  <div class="row">
    <div class="col-xs-1">
      <label for="space"> &nbsp;</label>
      <button type="button" id="btn-report-submit" class="btn btn-primary">Save Report</button>
    </div>

<?php echo form_close(); ?>

    <div class="col-lg-1 col-lg-offset-7">
      <label for="serial" class="sr_only"> &nbsp;</label>
        <button type="button" id="print" class="btn btn-success">Print Report</button>
    </div>
    
  </div>

</div>


<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/ajax-fetch-lists.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/lab-test-validation.js"></script>
<script type="text/javascript">
$('#billdate').datepicker({format:'yyyy-mm-dd'});
</script>

