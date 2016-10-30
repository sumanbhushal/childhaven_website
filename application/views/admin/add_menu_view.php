<?php include_once ('admin_header.php') ?>
<?php include_once('admin_sidebar.php') ?>
<?php echo form_open('menu_manager/post_menu'); ?>
<?php if($error=$this->session->flashdata('same_menu_name')): ?>
    <div class="row">
    <div class="col-lg-8">
    <div class="alert alert-danger" role="alert">
    <?php echo $error; ?>
    </div>
    </div>
    </div>
    <?php endif ?>
<div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="menuTitle">Menu Title</label>
        <?php echo form_input(['name' => 'menu_title', 'class' => 'form-control',
'placeholder' => 'Menu Title', 'value' => set_value('menu_title')]) ?>
      </div>
    </div>
    <div class="col-lg-4">
    <div class="menu_error_box">
    <?php echo form_error('menu_title') ?>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="parentMenu">Parent Menu</label>
      <select class="form-control" name="parent_menu">
      <option>Select from</option>
      <?php foreach($parent_menu as $parentMenuLists) {?>
          <option><?php echo $parentMenuLists -> menu ?></option>
          <?php } ?>
    </select>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="menuPostion">Position</label>
      <select class="form-control" name="menu_position">
          <option>Select from</option>
          <?php for($i=1; $i<=15; $i++) {?>
          <option><?php echo $i ?></option>
          <?php } ?>
    </select>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
    <div class="checkbox">
    <label>
      <input type="checkbox" name="set_nav_bar" value="1"> Apply to Navigation Bar
    </label>
  </div>
    </div>
</div>
<div class="form-group">
      <div class="col-lg-8 col-lg-offset-2">
      <?php echo form_submit(['name' => 'Submit', 'value' => 'Submit', 'class' =>
    'btn btn-info']) ?>
        <?php echo form_reset(['name' => 'Reset', 'value' => 'Reset', 'class' =>
    'btn btn-primary']) ?>
        
      </div>
</div>
</form>
</div>
</div>
<br />
<?php include_once('admin_footer.php') ?>