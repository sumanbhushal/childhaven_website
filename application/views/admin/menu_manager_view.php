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
      <td> Postion</td>
      <td> Parent Menu</td>
      <td> Controls</td>
    </tr>
    <?php foreach($menu as $menus) { ?>
    <tr>
      <td><?php echo $menus ->menu; ?></td>
      <td><?php echo $menus -> position; ?></td>
      <td><?php echo $menus -> parent_menu; ?></td>
      <td >
        <button type="button" class="btn btn-info">Edit</button>
        <button type="button" class="btn btn-primary">Delete</button>

      </td>
    </tr>
    <?php }?>
</table>
</div>
</div>

<?php include_once ('admin_footer.php')?>
