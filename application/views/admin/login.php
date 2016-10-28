<?php include ('login_header.php') ?>
<!--
<form class="form-horizontal" action="">
-->
<?php echo form_open('admin/admin_login', ['class' => 'form-horizontal']) ?>
<?php echo form_hidden('user_id', $this->session->userdata('user_id') ) ?>
  <fieldset>
    <legend>Admin Login </legend>
    <?php if($error=$this->session->flashdata('login_invalid')): ?>
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
      <label for="exampleInputName2" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      <?php echo form_input(['name' => 'username', 'class' => 'form-control',
'placeholder' => 'Username', 'value' => set_value('username')]) ?>
       <!--
 <input type="text" class="form-control" id="exampleInputName2" placeholder="Username"/>
-->
      </div>
    </div>
    </div>
    <div class="col-lg-4">
    <?php echo form_error('username') ?>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-8">
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      <?php echo form_password(['name' => 'password', 'class' => 'form-control',
    'placeholder' => 'Password']) ?>
        <!--
<input type="password" class="form-control" id="inputPassword" placeholder="Password"/>
-->
      </div>
    </div>
    </div>
    <div class="col-lg-4">
    <?php echo form_error('password') ?>
    </div>
    </div>
    <div class="form-group">
      <div class="col-lg-8 col-lg-offset-2">
       <!--
 <button type="reset" class="btn btn-default">Cancel</button>
-->
        <?php echo form_reset(['name' => 'Reset', 'value' => 'Cancel', 'class' =>
    'btn btn-default']) ?>
        <?php echo form_submit(['name' => 'Submit', 'value' => 'Login', 'class' =>
    'btn btn-primary']) ?>
        <!--
<button type="submit" class="btn btn-primary">Submit</button>
-->
      </div>
    </div>
  </fieldset>
</form>
<?php include ('admin_footer.php') ?>