<!-- Header -->
<header class="header position-fixed">
    <div class="row">
        <div class="col-auto">
            <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                <i class="bi bi-list"></i>
            </a>
        </div>
        <div class="col align-self-center text-center">
            <div class="logo-small">
                <!-- <img src="../assets/img/logo.png" alt=""> -->
                <i class="bi bi-kanban-fill"></i>
                <h5>Web2Rise</h5>
            </div>
        </div>
        <div class="col-auto">
            <!-- <a href="notifications.html" target="_self" class="btn btn-light btn-44">
                <i class="bi bi-plus-lg"></i>
                <span class="count-indicator"></span>
            </a> -->
            <button class="btn btn-light btn-44" data-bs-target="<?php if(isset($_GET['task'])){ echo "#addTask";}else{echo "#addCategory";} ?>" data-bs-toggle="modal">
                <i class="bi bi-plus-lg"></i>
            </button>
        </div>
    </div>
</header>
<!-- Header ends -->