<?php
if($_REQUEST['add']){
    $storage->add(new Review($_REQUEST['name'], $_REQUEST['review']));
    header('Location: /');
}
