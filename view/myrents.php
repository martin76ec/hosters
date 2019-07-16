<div class="row mt-5">
    <div class="container">
        <?php 
            getMyHosts($_SESSION['user_id']);
        ?>
        <button type="button" data-toggle="modal" data-target="#add_host_modal"
            class="btn btn-secondary btn-lg btn-block">Add Host</button>
    </div>
</div>