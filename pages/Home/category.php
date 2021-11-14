<?php
if ($stmt = $conn->prepare("SELECT category.id,category.company_name,COUNT(task.category) as total, (SELECT COUNT(*) FROM task WHERE status=0 AND task.category = category.id ) AS completed, (SELECT COUNT(*) FROM task WHERE status=1 AND task.category = category.id ) AS progress, (SELECT COUNT(*) FROM task WHERE status=2 AND task.category = category.id ) AS upcoming FROM `task` JOIN category ON category.id = task.category GROUP BY category")) {
    $stmt->execute();
    $category = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
?>
    <!-- Saving targets -->
    <div class="row mb-3">
        <div class="col">
            <h6 class="title">All Categories</h6>
        </div>

    </div>
    <?php
    if ($category) :
        foreach ($category as $row) {
    ?>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <a href="?task=<?= $row['id'] ?>" class="card-body text-dark">
                        <div class="row">
                            <div class="col align-self-center">
                                <div class="row mb-1">
                                    <div class="col-9 text-truncate"><?= $row['company_name'] ?></div>
                                    <div class="col-3"> <?= $row['total']; ?></div>
                                </div>


                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="avatar avatar-30 alert-warning text-warning rounded-circle">
                                            <i class="bi bi-folder"></i>
                                        </div> <?= $row['completed']; ?>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-30 alert-primary text-primary rounded-circle">
                                            <i class="bi bi-clock"></i>
                                        </div> <?= $row['progress']; ?>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-30 alert-danger text-danger rounded-circle">
                                            <i class="bi bi-bar-chart"></i>
                                        </div> <?= $row['upcoming']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
<?php
        }

    else :
        echo "no data found";
    endif;

    $stmt->close();
}
?>