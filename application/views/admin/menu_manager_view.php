<?php include_once ('admin_header.php') ?>

<?php include_once ('admin_sidebar.php') ?>

<h1>Menu Management </h1>
<div>
    <?php echo anchor('menu_manager/add_menu', 'Add New Menu', 'class="btn btn-info active"') ?>
</div>
    <br />
<table class="table table-striped">
    <tr>
      <td> Menu Title</td>
      <td> Menu Perma</td>
      <td>Controls</td>
    </tr>
    <tr>
      <td class="active">...</td>
      <td class="success">...</td>
      <td >
        <button type="button" class="btn btn-info">Edit</button>
        <button type="button" class="btn btn-primary">Delete</button>

      </td>
    </tr>
</table>
</div>
</div>

<?php include_once ('admin_footer.php')?>
