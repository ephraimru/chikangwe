<?php
include('../cons/config.php');
session_destroy();

header('location:'.SITEURL.'cons/start.php');
?>