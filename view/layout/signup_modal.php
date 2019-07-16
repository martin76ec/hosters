<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php getLanguage($_SESSION['language'], 'Sign up') ?></button>
                    </form>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/user/signup.php" method="post">
                    <div class="form-group">
                        <label for="firstname" class="col-form-label"><?php getLanguage($_SESSION['language'], 'name') ?></button>
        </form></label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-form-label"><?php getLanguage($_SESSION['language'], 'lastname') ?></label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"><?php getLanguage($_SESSION['language'], 'email') ?></label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="Contraseña" class="col-form-label"><?php getLanguage($_SESSION['language'], 'password') ?></label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php getLanguage($_SESSION['language'], 'cancel') ?></button>
                        <button type="submit" class="btn btn-primary"><?php getLanguage($_SESSION['language'], 'Login') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>