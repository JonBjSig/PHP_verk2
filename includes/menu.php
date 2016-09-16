<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<p><?php if ($currentPage != 'index.php') {echo '<a href="index.php">Home</a>';} else {echo 'Home';} ?></p>
<p><?php if ($currentPage != 'page1.php') {echo '<a href="page1.php">Page 1</a>';} else {echo 'Page 1';} ?></p>
<p><?php if ($currentPage != 'page2.php') {echo '<a href="page2.php">Page 2</a>';} else {echo 'Page 2';} ?></p>
<p><?php if ($currentPage != 'page3.php') {echo '<a href="page3.php">Page 3</a>';} else {echo 'Page 3';} ?></p>