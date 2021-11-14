
<!-- Add category Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
<!-- modal-xsm to make it smalld -->
    <div class="modal-dialog  modal-dialog-centered"> 
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="addCategorylLabel">Add Category</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                
                <form action="../db/categoryProcess.php" class="was-validated" method="POST">
                    <div class="form-floating is-valid mb-3">
                        <input type="text" class="form-control" placeholder="Category Name" id="categoryName" name="categoryName">
                        <label for="categoryName">Category Name</label>
                    </div>
                    <button type="submit" name="submitCategory" class="btn btn-lg btn-default w-100 mb-4 shadow">
                        Add Category
                    </button>
                </form>
            </div>
            <!-- <button type="button" class="btn btn-lg btn-primary rounded-15" data-bs-dismiss="modal">Submit</button> -->
        </div>
    </div>
</div>
<!-- Add Category Modal ends-->