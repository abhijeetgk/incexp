<div class="container">
<h2>Category Master</h2>
  <p>Let you add new Categories</p>    
<?php echo form_open("masters/category", array("role"=>"form")); ?>
  <div class="form-group">
  <?php echo $this->session->flashdata('category_success');?>
  <?php echo form_error('catname','<div role="alert" class="alert alert-danger">','</div>');?>
       
    <?php echo form_label("Name","catname");?>
    <?php echo form_input(array("name"=>"catname","class"=>"form-control"));?>
  </div>
  <?php echo form_button(array("type"=>"submit","content"=>"Submit","class"=>"btn btn-default")); ?>
<?php echo form_close();?>
</div>

<div class="container">
  <h2>Recently Added 10 Categories</h2>
         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
      </tr>
     </thead>
     	<?php foreach($category_data as $cat){ ?>
     		<tr>
     			<td>
     				<?php echo $cat->name;?>
     			</td>
     		</tr>
			
		<?php } ?>
     </table>
    </div>