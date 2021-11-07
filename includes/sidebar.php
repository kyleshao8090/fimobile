<?php session_start(); ?>
<!-- Sidebar main menu -->
<div class="sidebar-wrap  sidebar-pushcontent">
    <!-- Add overlay or fullmenu instead overlay -->
    <div class="closemenu text-muted">Close Menu</div>
    <div class="sidebar dark-bg">
        <!-- user information -->
        <div class="row my-3">
            <div class="col-12 ">
                <div class="card shadow-sm bg-opac text-white border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-44 rounded-15">
                                    <img src="../assets/img/user1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="col px-0 align-self-center">
                                <p class="mb-1"><?=$_SESSION['username'] ?></p>
                                <p class="text-muted size-12">New York City, US</p>
                            </div>
                            <div class="col-auto">
                                <a href="../db/logout.php" class="btn btn-44 btn-light">
                                    <i class="bi bi-box-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-opac text-white border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="display-4">100.00</h1>
                                </div>
                                <div class="col-auto">
                                    <p class="text-muted">Wallet Balance</p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-muted"><a href="addmoney.html">+ Top up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- user emnu navigation -->
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-house-door"></i></div>
                            <div class="col">Dashboard</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="../db/logout.php" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-arrow-right"></i></div>
                            <div class="col">Logout</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar main menu ends -->