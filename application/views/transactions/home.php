
<h2>Transactions</h2>
  <p>Let you add new Income or Expense Transactions</p>
  <?php echo $this->session->flashdata('transaction_success');?>
  <?php if (validation_errors()) { ?>  
  <div role="alert" class="alert alert-danger"> 
  <?php echo validation_errors();?> 
  </div>
  <?php } ?>
<?php echo form_open("transactions/add", array("role"=>"form","class"=>"form-horizontal")); ?>

  <div class="form-group">
  	
  	
    <?php echo form_label("Type","transaction_type",array("class"=>" col-sm-1"));?>
    <div class="col-xs-4" >
    
    <?php echo form_dropdown("transaction_type",$type_array,$this->input->post('transaction_type'),'class="form-control"'); ?>
   	</div>
  </div>
    <div class="form-group">
   
     <?php echo form_label("Amount","amount",array("class"=>"col-sm-1"));?>
     <div class="col-xs-4">
      <?php echo form_input(array("name"=>"amount","class"=>"form-control","value"=>set_value('amount')));?>
    </div>
  </div>
    <div class="form-group">
   
     <?php echo form_label("Description","description",array("class"=>"col-sm-1"));?>
     <div class="col-xs-4">
    	<?php echo form_input(array("name"=>"description","class"=>"form-control","value"=>set_value('description')));?>
    </div>
  </div>

  <div class="form-group">
 
    <?php echo form_label("Company","company",array("class"=>"col-sm-1"));?>
    <div class="col-xs-4">
		<?php echo form_dropdown("company",$company_dropdown,$this->input->post('company'),'class="form-control"'); ?>
   	</div>
  </div>
  <div class="form-group">
 
    <?php echo form_label("Category","category",array("class"=>"col-sm-1"));?>
    <div class="col-xs-4">
		<?php echo form_dropdown("category",$category_dropdown,$this->input->post('category'),'class="form-control"'); ?>
   	</div>
  </div>
  <div class="form-group"><div class="col-sm-10">
  <?php echo form_button(array("type"=>"submit","content"=>"Submit","class"=>"btn btn-default")); ?>
  </div></div>
<?php echo form_close();?>
<div class="table-responsive">
  <h2>Recently Added 10 Transactions</h2>
         
  <table class="table table-hover table-striped table-bordered">
    <thead>
      <tr>
        <th>Type</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Category</th>
        <th>Company</th>
      </tr>
     </thead>
      <?php foreach($transactions as $tr){ ?>
        <tr>
          <td><?php echo $tr->type;?></td>
          <td><?php echo $tr->amount;?></td>
          <td><?php echo $tr->description;?></td>
          <td><?php echo $tr->category_id;?></td>
          <td><?php echo $tr->company_id;?></td>
        </tr>
      
    <?php } ?>
     </table>
    </div>