<?php



echo validation_errors();

$invoiceForm = array(
  'name' => 'categorySubmit',
  'id' => 'categorySubmit'
  );

// if(isset($title)){
//   echo $title;
// }

echo form_open('Lab/test_category_entry',$invoiceForm);
?>


<div class="container">
  


  <div class="row">

    <div class="col-lg-2">
      <label for="category" class="sr_onlly"> Category: *</label>
    </div>
    
    <div class="col-xs-8 ">
    	
      <input type="text" name="categoryname" id="categoryname" list="patient-list" class="form-control" placeholder="Type Category name here ... ">

    </div>

    <div class="col-xs-2">
        <label for="serial" class="sr_only"> &nbsp; </label>
        <button type="button" id="itemadd" value="Add" class="btn btn-success"  >Add</button>
      </div>

  </div>

  <div class="row">
    &nbsp;
  </div>

  
</div>

    

<?php echo form_close(); ?>

<div class="container">
    <table class="table table-striped" id="categorylist">
      <thead>
        <tr>
          <th>#</th>
          <th>Category Name</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody id="rowbody">

      </tbody>
    </table>

    <div class="col-lg-1 col-lg-offset-7">
      <label for="serial" class="sr_only"> &nbsp;</label>
      <button id="print" class="btn btn-success">Print Invoice</button>
    </div>
    
  </div>

</div>


<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/lab-category-validation.js"></script>


