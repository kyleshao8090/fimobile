<?php
require_once "../db/conn.php";
require_once "../includes/header.php";
include_once "../includes/sidebar.php";
?>
<main class="h-100">
    <?php include_once "../includes/navbar.php" ?>
    <!-- main page content -->
    <div class="main-container container">
        <div class="row mb-4">
            <?php
            if (isset($_GET['task'])) {
                include_once "./Home/task.php";
            } else {
                include_once "./Home/category.php";
            }
            ?>
        </div>
    </div>
    <!-- main page content ends -->
</main>

<?php
include_once "./Home/addTask.php";
include_once "./Home/addCategory.php";
include_once "../includes/bottom-navigation.php";
require_once "../includes/footer.php";
?>