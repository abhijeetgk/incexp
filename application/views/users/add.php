<div class="container">
<h2>Add New Users</h2>
  <p>Let you add new users to system</p>    
<?php echo form_open("user/add", array("role"=>"form")); ?>
  <div class="form-group">
  <?php echo $this->session->flashdata('useradd_success');?>
  <?php echo form_error('cname','<div role="alert" class="alert alert-danger">','</div>');?>
       
    <?php echo form_label("Name","name");?>
    <?php echo form_input(array("name"=>"cname","class"=>"form-control"));?>
  </div>
  <?php echo form_button(array("type"=>"submit","content"=>"Submit","class"=>"btn btn-default")); ?>
<?php echo form_close();?>
</div>