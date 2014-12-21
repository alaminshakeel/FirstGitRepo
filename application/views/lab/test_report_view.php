

  <div class="row">
    &nbsp;
  </div>

<div class="container">
    <table class="table table-striped" id="categorylist">
      <thead>
        <tr>
          <th>#</th>
          <th>Print</th>
          <th>Customer Name</th>
          <th>Age</th>
          <th>Sex</th>
          <th>Test Name</th>
          <th>Test Date</th>


        </tr>
      </thead>
      <tbody id="rowbody">

        <?php

          $sn = 1;
          //var_dump($testo);
          foreach ($report as $key => $item) {
            // echo $item[];
            echo form_open("lab/print");
        ?>
            <tr> 
              <td>
                <?php echo $sn; ?>
              </td>
              <td>
                   
         
          <input type="submit" value ="Print IT" />
        
         </form>
              </td> 
              <td>
                <?php echo $item["patientname"]; ?>
              </td>
              <td>
                <?php echo $item["age"]; ?>
              </td>
               <td>
                <?php echo $item["sex"]; ?>
              </td>
              <td>
                <?php echo $item["testitemname"]; ?>
              </td>
              <td>
                <?php echo $item["testdate"]; ?>
              </td>
                           
            </tr>
        <?php
            $sn++;

            echo "</form>";
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


