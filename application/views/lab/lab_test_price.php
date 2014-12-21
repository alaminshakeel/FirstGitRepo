<?php



echo validation_errors();

$invoiceForm = array(
  'name' => 'labtestpriceSubmit',
  'id' => 'labtestpriceSubmit'
  );

// if(isset($title)){
//   echo $title;
// }

echo form_open('Lab/lab_test_price_submit',$invoiceForm);
?>


<div class="container">
  


  <div class="row">

    <div class="col-lg-3">
      <label for="category" class="sr_onlly"> Test Name: *</label>
    </div>
    
    <div class="col-lg-4">
    	
     <select class="form-control" id="categoryname" name="categoryname">

      </select>
    </div>
  </div>

  <div class="row">

    <div class="col-lg-3">
      <label for="category" class="sr_onlly"> Labtest Item Price: *</label>
    </div>
    
    <div class="col-lg-4">
    <label for="category" class="sr_onlly"></label>
     <input type="text" class="form-control" value="" id="labtestprice" name="labtestprice">
    </div>
  </div>

    <div class="row">

    <div class="col-lg-3">
      <label for="category" class="sr_onlly">Test Quantity</label>
    </div>
    
    <div class="col-lg-4">
    <label for="category" class="sr_onlly"></label>
     <input type="text" class="form-control" value="" id="labitemqty" name="labitemqty">
    </div>
  </div>

  <div>

    <div class="col-xs-2">
        <label for="serial" class="sr_only"> &nbsp; </label>
        <button type="button" id="testpriceadd" value="Add" class="btn btn-success"  >Add</button>
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
          <th>Test Name</th>
          <th>Labtest Price</th>
          <th>Lab Item Quantity</th>
          <th>Entry Person </th>

        </tr>
      </thead>
      <tbody id="rowbody">

        <?php

          //var_dump($testo);
          foreach ($price as $key => $item) {
            // echo $item[];
        ?>
            <tr>  
              <td>
                <?php echo $item["id"]; ?>
              </td>
              <td>
                <?php echo $item["labtestname"]; ?>
              </td>
               <td>
                <?php echo $item["labtestprice"]; ?>
              </td>
              <td>
                <?php echo $item["labitemqty"]; ?>
              </td>
              <td>
                <?php echo $item["entryperson"]; ?>
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


