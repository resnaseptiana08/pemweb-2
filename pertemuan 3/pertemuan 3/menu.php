<?php
$menus = [
    "home" => "index.php",
    "about" => "about.php",
    "contact" => "contact.php",
    "profile" => "profile.php",
    "funfact" => "funfact.php",

]
?>

<!-- Sidebar-->
<div class="border-end" id="sidebar-wrapper" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" background-color: white;">
    <div class="sidebar-heading border-bottom" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" background-color: white;">Start Bootstrap</div>
    <?php
    foreach ($menus as $menu => $value) {
    ?>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= $value ?>"><?= $menu ?></a>
        </div>
    <?php
    }
    ?>
</div>