<?php
session_start();
session_unset();
session_destroy();
header("location:register_admin.php?logout=sukses");
exit;
