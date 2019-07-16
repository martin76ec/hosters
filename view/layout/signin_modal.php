<div class="modal fade" id="signinmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php getLanguage($_SESSION['language'], 'email') ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/user/signin.php" method="post">
                    <div class="form-group">
                        <label for="email" class="col-form-label"><?php getLanguage($_SESSION['language'], 'email') ?></label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="Contraseña" class="col-form-label"><?php getLanguage($_SESSION['language'], 'password') ?></label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php getLanguage($_SESSION['language'], 'email') ?></button>
                        <button type="submit" class="btn btn-primary"><?php getLanguage($_SESSION['language'], 'Do not') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>