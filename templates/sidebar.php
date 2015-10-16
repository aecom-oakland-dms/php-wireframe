<h2>Menu block</h2>
<ul class="nav nav-list">
  <li <?php echo ($activeNav == 'home') ? ' class="active"' : ''; ?>><a href="index.php"><i class="icon-home"></i> Home</a></li>
  <li <?php echo ($activeNav == 'about') ? ' class="active"' : ''; ?>><a href="about.php"><i class="icon-book"></i> About</a></li>
  <li <?php echo ($activeNav == 'contact') ? ' class="active"' : ''; ?>><a href="contact.php"><i class="icon-pencil"></i> Contact</a></li>
</ul>