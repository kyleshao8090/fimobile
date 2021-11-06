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
                if ($stmt = $conn->prepare("SELECT *, task.status AS taskstatus FROM task JOIN category ON task.category = category.id WHERE category = ?")) {
                    $stmt->bind_param("i", $_GET['task']);
                    $stmt->execute();
                    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                    // echo "<pre>";
                    // echo print_r($data);
                    // echo "</pre>";
                    if ($data) :
            ?>

                        <!-- Transactions -->
                        <div class="row mb-3">
                            <div class="col">
                                <h6 class="title"><?= $data[0]['company_name'] ?> Tasks<br><small class="fw-normal text-muted">Today, 24 Aug 2021</small>
                                </h6>
                            </div>
                            <div class="col-auto align-self-center">
                                <a href="./" class="small">View all</a>
                            </div>
                        </div>
                        <!-- tabs structure -->
                        <ul class="nav nav-pills nav-justified tabs mb-3" id="assetstabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#cards" type="button" role="tab" aria-controls="cards" aria-selected="true"><i class="bi bi-check-circle size-32"></i></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="currency-tab" data-bs-toggle="tab" data-bs-target="#currency" type="button" role="tab" aria-controls="currency" aria-selected="false"><i class="bi bi-clock-history size-32"></i></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="upcoming-tab" data-bs-toggle="tab" data-bs-target="#upcoming" type="button" role="tab" aria-controls="upcoming" aria-selected="false"><i class="bi bi-plus-circle size-32"></i></button>
                            </li>
                        </ul>
                        <div class="tab-content" id="assetstabsContent">
                            <div class="tab-pane fade show active" id="cards" role="tabpanel">
                                <!-- Transactions -->
                                <div class="row mb-4">
                                    <div class="col-12 px-0">
                                        <ul class="list-group list-group-flush bg-none">
                                            <?php

                                            foreach ($data as $row) {
                                                if ($row['taskstatus'] === 0) {
                                            ?>
                                                   <li class="list-group-item">
                                                   <a href="<?=$row['link']?>" target="_blank">
                                                        <div class="row">
                                                            <div class="col-auto">
                                                                <div class="avatar avatar-50 shadow rounded-10 ">
                                                                    <img src="assets/img/company4.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col align-self-center ps-0">
                                                                <p class="text-color-theme mb-0"><?= $row['task_name'] ?></p>
                                                                <p class="text-muted size-12"><?= $row['company_name'] ?></p>
                                                            </div>
                                                            <div class="col align-self-center text-end">
                                                                <p class="mb-0">-25.00</p>
                                                                <p class="text-muted size-12">Debit Card 4545</p>
                                                            </div>
                                                        </div>
                                                        </a> 
                                                    </li>
                                                    

                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="currency" role="tabpanel" aria-labelledby="currency-tab">
                                <!-- Transactions -->
                                <div class="row mb-4">
                                    <div class="col-12 px-0">
                                        <ul class="list-group list-group-flush bg-none">
                                            <?php

                                            foreach ($data as $row) {
                                                if ($row['taskstatus'] === 1) {
                                            ?>
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-auto">
                                                                <div class="avatar avatar-50 shadow rounded-10 ">
                                                                    <img src="assets/img/company4.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col align-self-center ps-0">
                                                                <p class="text-color-theme mb-0"><?= $row['task_name'] ?></p>
                                                                <p class="text-muted size-12"><?= $row['company_name'] ?></p>
                                                            </div>
                                                            <div class="col align-self-center text-end">
                                                                <p class="mb-0">-25.00</p>
                                                                <p class="text-muted size-12">Debit Card 4545</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
                                <!-- Transactions -->
                                <div class="row mb-4">
                                    <div class="col-12 px-0">
                                        <ul class="list-group list-group-flush bg-none">
                                            <?php

                                            foreach ($data as $row) {
                                                if ($row['taskstatus'] === 2) {
                                            ?>
                                                    <li class="list-group-item">
                                                        <div class="row">
                                                            <div class="col-auto">
                                                                <div class="avatar avatar-50 shadow rounded-10 ">
                                                                    <img src="assets/img/company4.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col align-self-center ps-0">
                                                                <p class="text-color-theme mb-0"><?= $row['task_name'] ?></p>
                                                                <p class="text-muted size-12"><?= $row['company_name'] ?></p>
                                                            </div>
                                                            <div class="col align-self-center text-end">
                                                                <p class="mb-0">-25.00</p>
                                                                <p class="text-muted size-12">Debit Card 4545</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabs ended here -->
                    <?php
                    else :
                        echo "No Data Found";
                    endif;
                    ?>

                <?php
                    $stmt->close();
                }
            } else {

                if ($stmt = $conn->prepare("SELECT category.id,category.company_name,COUNT(task.category) as total FROM `task` JOIN category ON category.id = task.category GROUP BY category")) {
                    $stmt->execute();
                    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                ?>
                    <!-- Saving targets -->
                    <div class="row mb-3">
                        <div class="col">
                            <h6 class="title">All Companies</h6>
                        </div>
                        <!-- <div class="col-auto">

            </div> -->
                    </div>


                    <?php
                    if ($data) :
                        foreach ($data as $row) {
                    ?>

                            <a href="?task=<?= $row['id'] ?>" class="col-6 col-md-4 col-lg-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <h3 class="small mb-1"><?= $row['company_name'] ?> total</h3>
                                                
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <div class="avatar avatar-30 alert-warning text-warning rounded-circle">
                                                            <i class="bi bi-folder"></i>
                                                        </div> <?= $row['total']; ?>
                                                    </div>
                                                    <div>
                                                        <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                                            <i class="bi bi-clock"></i>
                                                        </div> <?= $row['total']; ?>
                                                    </div>
                                                    <div>
                                                        <div class="avatar avatar-30 alert-danger text-danger rounded-circle">
                                                            <i class="bi bi-bar-chart"></i>
                                                        </div> <?= $row['total']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
            <?php
                        }

                    else :
                        echo "no data found";
                    endif;

                    $stmt->close();
                }
            }
            ?>
        </div>

    </div>
    <!-- main page content ends -->
</main>

<?php
include_once "../includes/bottom-navigation.php";
require_once "../includes/footer.php";
?>