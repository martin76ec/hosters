<div class="modal fade" id="singoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Está seguro que desea cerrar sesión?</p>
      </div>
      <div class="modal-footer">
        <form action="controller/user/signout.php">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No, quiero seguir viendo</button>
          <button type="submit" class="btn btn-primary" >Sí, me tomaré un descanso</button>
        </form>
      </div>
    </div>
  </div>
</div>
