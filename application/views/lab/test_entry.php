<?php



echo validation_errors();

$invoiceForm = array(
  'name' => 'testSubmit',
  'id' => 'testSubmit'
  );

// if(isset($title)){
//   echo $title;
// }

echo form_open('Lab/test_entry',$invoiceForm);
?>


<div class="container">
  


  <div class="row">

    <div class="col-lg-3">
      <label for="category" class="sr_onlly"> Category: *</label>
    </div>
    
    <div class="col-lg-4">
    	
     <select class="form-control" id="categoryname" name="categoryname">

      </select>
    </div>
  </div>

  <div class="row">

    <div class="col-lg-3">
      <label for="category" class="sr_onlly"> Labtest Item Name: *</label>
    </div>
    
    <div class="col-lg-4">
    <label for="category" class="sr_onlly"></label>
     <input type="text" class="form-control" value="" id="labtestitemname" name="labtestitemname">
    </div>
  </div>

    <div class="row">

    <div class="col-lg-3">
      <label for="category" class="sr_onlly"> Item Unit Name: (optional)</label>
    </div>
    
    <div class="col-lg-4">
    <label for="category" class="sr_onlly"></label>
     <input type="text" class="form-control" value="" id="unitname" name="unitname">
    </div>
  </div>

    <div class="row">

    <div class="col-lg-3">
      <label for="category" class="sr_onlly"> Labtest Item Price: *</label>
    </div>
    
    <div class="col-lg-4">
    <label for="category" class="sr_onlly"></label>
     <input type="text" class="form-control" value="" id="itemprice" name="itemprice">
    </div>
  </div>

      <div class="row">

    <div class="col-lg-3">
      <label for="category" class="sr_onlly"> Lab Item Reference Value (Optional) </label>
    </div>
    
    <div class="col-lg-4">
    <label for="category" class="sr_onlly"></label>
     <input type="text" class="form-control" value="" id="refvalue" name="refvalue">
    </div>
  </div>

  <div>

    <div class="col-xs-2">
        <label for="serial" class="sr_only"> &nbsp; </label>
        <button type="button" id="testitemadd" value="Add" class="btn btn-success"  >Add</button>
      </div>

  </div>



  
</div>

    

<?php echo form_close(); ?>

  <div class="row">
    &nbsp;
  </div>

<div class="container">
    <table class="table table-striped" id="categorylist">
      <thead>
        <tr>
          <th>#</th>
          <th>Category Name</th>
          <th>Labtest Item Name</th>
          <th>Labtest Item Price</th>
          <th>Item Unit Name</th>
          <th>Lab Item Reference Value</th>
        </tr>
      </thead>
      <tbody id="rowbody">

        <?php

          //var_dump($testo);
          foreach ($test as $key => $item) {
            // echo $item[];
        ?>
            <tr>  
              <td>
                <?php echo $item["id"]; ?>
              </td>
              <td>
                <?php echo $item["categoryname"]; ?>
              </td>
               <td>
                <?php echo $item["labtestitemname"]; ?>
              </td>
              <td>
                <?php echo $item["unitname"]; ?>
              </td>
              <td>
                <?php echo $item["itemprice"]; ?>
              </td>
              <td>
                <?php echo $item["refvalue"]; ?>
              </td>
                           
            </tr>
        <?php
          }
        ?>

      </tbody>
    </table>

    <div class="col-lg-1 col-lg-offset-7">
      <label for="serial" class="sr_only"> &nbsp;</label>
      <button id="print" class="btn btn-success">Print Item List</button>
    </div>
    
  </div>

</div>


<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/lab-category-validation.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/ajax-fetch-lists.js"></script>


