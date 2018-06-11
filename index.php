<?php
require_once 'bootstrap.php';

if ($_GET['migration']) {
    require_once 'database/runmigration.php';
}
