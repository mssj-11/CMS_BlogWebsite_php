<?php
    $pageTtle='Home | Welcome';
    include_once('../include/header.php');
    include_once('navbar.php');
    include_once('../config/session_validation.php');
?>

<br>
<div class="container">
    <div class="row">
        <?php   include_once('cards_posts.php');?>
    </div>
</div>
<br>

<?php   include_once('../include/footer.php');?>