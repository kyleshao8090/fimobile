<!-- Footer -->
<footer class="footer">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" href="../pages/home.php">
                    <span>
                        <i class="nav-icon bi bi-house"></i>
                        <span class="nav-text">Home</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/home.php">
                    <span>
                        <i class="nav-icon bi bi-laptop"></i>
                        <span class="nav-text">Category</span>
                    </span>
                </a>
            </li>
            <li class="nav-item centerbutton">
                <div class="nav-link">
                    <span class="theme-radial-gradient">
                        <i class="close bi bi-x"></i>
                        <img src="../assets/img/centerbutton.svg" class="nav-icon" alt="" />
                    </span>
                    <div class="nav-menu-popover justify-content-between">
                        <a href="../pages/home.php" class="btn btn-lg btn-icon-text">
                            <i class="bi bi-credit-card size-32"></i><span>Category</span>
                        </a>

                        <a href="../pages/home.php?task=1" class="btn btn-lg btn-icon-text" onclick="">
                            <i class="bi bi-arrow-up-right-circle size-32"></i><span>Task</span>
                        </a>

                        <button type="button" class="btn btn-lg btn-icon-text" onclick="">
                            <i class="bi bi-receipt size-32"></i><span>Profile</span>
                        </button>

                        <button type="button" class="btn btn-lg btn-icon-text" onclick="window.location.replace('../db/logout.php');">
                            <i class="bi bi-arrow-down-left-circle size-32"></i><span>Logout</span>
                        </button>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>
                        <i class="nav-icon bi bi-gift"></i>
                        <span class="nav-text">Task</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>
                        <i class="nav-icon bi bi-wallet2"></i>
                        <span class="nav-text">Profile</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</footer>
<!-- Footer ends-->