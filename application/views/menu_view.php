 
<ul class="nav navbar-nav navbar-right">
<?php
foreach ($menu_title as $title):
?>
<li>
    <a href="index.html"><?php echo $title->menu ?></a>
</li>
<?php endforeach; ?>
<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Projects <span class="caret"></span>
    </a>
        <ul class="dropdown-menu">
          <li><a href="#">Shelter Home</a></li>
          <li><a href="#">School</a></li>
        </ul>
</li>
<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Get Involved <span class="caret"></span>
    </a>
        <ul class="dropdown-menu">
          <li><a href="#">Donation</a></li>
          <li><a href="#">Sponshor</a></li>
          <li><a href="#">Volunter with us</a></li>
        </ul>
</li>
</ul>