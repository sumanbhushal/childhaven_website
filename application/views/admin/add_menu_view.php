<?php include_once ('admin_header.php') ?>
<?php include_once('admin_sidebar.php') ?>
<?php echo form_open('menu_manager/post_menu'); ?>
<div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="menuTitle">Menu Title</label>
        <?php echo form_input(['name' => 'menu_title', 'class' => 'form-control',
'placeholder' => 'Menu Title', 'value' => set_value('menu_title')]) ?>
      </div>
    </div>
    <div class="col-lg-4">
    <?php echo form_error('menu_title') ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="menuParma">Menu Parma</label>
    <?php echo form_input(['name' => 'menu_parma', 'class' => 'form-control',
'placeholder' => 'Menu parma', 'value' => set_value('menu_title')]) ?>
      </div>
    </div>
    <div class="col-lg-4">
    <?php echo form_error('menu_parma') ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-10">
    <div class="form-group">
      <label for="menuParma">Menu Details</label>
      <textarea name="post_details" id="post_details" rows="10" cols="80">
            </textarea>
    <script>
                CKEDITOR.replace( 'post_details' );
    </script>
    </div>
    <div class="col-lg-2">
    <?php echo form_error('menu_parma') ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="parentMenu">Parent Menu</label>
      <select class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
    </select>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="menuPostion">Position</label>
      <select class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
    </select>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
    <div class="checkbox">
    <label>
      <input type="checkbox"> Apply to Navigation Bar
    </label>
  </div>
    </div>
</div>
<div class="form-group">
      <div class="col-lg-8 col-lg-offset-2">
      <?php echo form_submit(['name' => 'Submit', 'value' => 'Submit', 'class' =>
    'btn btn-info']) ?>
        <?php echo form_reset(['name' => 'Reset', 'value' => 'Cancel', 'class' =>
    'btn btn-primary']) ?>
        
      </div>
    </div>
</form>
</div>
</div>
<?php include_once('admin_footer.php') ?>