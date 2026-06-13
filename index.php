<?php
require_once 'config/db.php';

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == 'admin') {
        header("Location: admin/index.php");
    } elseif ($_SESSION['user_role'] == 'shopkeeper') {
        header("Location: shopkeeper/index.php");
    } else {
        header("Location: customer/index.php");
    }
    exit;
} else {
    // Redirect guests to the customer homepage / landing page
    header("Location: customer/index.php");
    exit;
}
?>
