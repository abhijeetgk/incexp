<div class="container">
<h2>Company Master</h2>
  <p>Let you add new companies</p>    
<?php echo form_open("masters/company", array("role"=>"form")); ?>
  <div class="form-group">
  <?php echo $this->session->flashdata('company_success');?>
  <?php echo form_error('cname','<div role="alert" class="alert alert-danger">','</div>');?>
       
    <?php echo form_label("Name","name");?>
    <?php echo form_input(array("name"=>"cname","class"=>"form-control"));?>
  </div>
  <?php echo form_button(array("type"=>"submit","content"=>"Submit","class"=>"btn btn-default")); ?>
<?php echo form_close();?>
</div>

<div class="container">
  <h2>Recently Added 10 companies</h2>
         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
      </tr>
     </thead>
     	<?php foreach($company_data as $comp){ ?>
     		<tr>
     			<td>
     				<?php echo $comp->name;?>
     			</td>
     		</tr>
			
		<?php } ?>
     </table>
    </div>