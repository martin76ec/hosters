<div class="modal fade" id="singoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php getLanguage($_SESSION['language'], 'Signoff') ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?php getLanguage($_SESSION['language'], 'conflogooff') ?></p>
      </div>
      <div class="modal-footer">
        <form action="controller/user/signout.php">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php getLanguage($_SESSION['language'], 'keepin') ?></button>
          <button type="submit" class="btn btn-primary" ><?php getLanguage($_SESSION['language'], '') ?></button>
        </form>
      </div>
    </div>
  </div>
</div>
