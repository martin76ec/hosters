<div class="modal fade" id="add_host_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Host</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/host/addHost.php" method="post">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-form-label">Price</label>
                        <input type="number" min=0 max=100000 class="form-control" id="price" name="price">
                    </div>
                    <div class="input-group-text">
                        <label for="food" class="col-form-label">Do you want food?</label>
                        <input type="checkbox" class="form-control" id="food" name="food" aria-label="Food">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Host</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>