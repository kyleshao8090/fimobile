<!-- Add task Modal -->
<div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="addTaskLabel" aria-hidden="true">
    <?php include_once "../db/conn.php";
    $conn = new query();
    $category = $conn->getData("category");


    ?>
    <!-- modal-xsm to make it smalld -->
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="addTasklLabel">Add Task</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">

                <form class="was-validated" id="insertTask">
                    <div class="form-floating is-valid mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="task_name" id="username">
                        <label for="username">Task Name</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <select class="form-control" id="country" name="status">
                            <option value="2" selected>Upcoming</option>
                            <option value="1">Inprogress</option>
                            <option value="0">Completed</option>
                        </select>
                        <label for="country">Status</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <select class="form-control" id="country" name="category">
                            <?php
                            if ($category->num_rows > 0) {
                                foreach ($category as $row) {
                            ?>
                                    <option value="<?= $row['id']; ?>" <?= $_GET['task'] == $row['id'] ? "selected" : "" ?>><?= $row['company_name']; ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        <label for="country">Category</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="url" class="form-control" placeholder="Password" id="password" name="link">
                        <label for="password">Link</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="date" class="form-control" placeholder="Password" id="password" name="started_at">
                        <label for="password">Started At</label>
                    </div>
                    <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow" name="submit" value="submit">
                        Add to list
                    </button>
                </form>
            </div>
            <!-- <button type="button" class="btn btn-lg btn-primary rounded-15" data-bs-dismiss="modal">Submit</button> -->
        </div>
    </div>
</div>
<!-- Add task Modal ends-->