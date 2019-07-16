<?php

    include 'model/database.php';

    function getMyHosts($user_id){
        $mbd = getConnector();
        $query = $mbd->prepare("SELECT * FROM sites WHERE user_id = $user_id");
        $query->execute();
        $results = $query->fetchAll();
        foreach($results as $result => $value){
            echo '<div class="card mb-3">';
            echo '<img src="view/site_images/'.$value['image'].'" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$value['title'].'</h5>';
            echo '<p class="card-text">'.$value['description'].'</p>';
            echo '<p class="card-text"><small class="text-muted">$'.$value['priceperday'].' por noche</small></p>';
            echo '<p class="card-text"><small class="text-muted">'.( $value['food'] == 1 ? 'Incluye alimentación' : 'No incluye alimentación').'</small></p>';
           // echo '<button type="button" onclick="location.href = \'http://localhost/hosters/controller/host/deleteMyHost.php?id='.$value['id'].'\'" class="btn btn-danger">Danger</button>';
            echo '</div>';
            echo '</div>';
        }
    }

    function getAllHostsExceptMine($user_id){
        $mbd = getConnector();
        $query = $mbd->prepare("SELECT * FROM sites WHERE user_id != $user_id");
        $query->execute();
        $results = $query->fetchAll();
        foreach($results as $result => $value){
            echo '<div class="card mb-3">';
            echo '<img src="view/site_images/'.$value['image'].'" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$value['title'].'</h5>';
            echo '<p class="card-text">'.$value['description'].'</p>';
            echo '<p class="card-text"><small class="text-muted">$'.$value['priceperday'].' por noche</small></p>';
            echo '<p class="card-text"><small class="text-muted">'.( $value['food'] == 1 ? 'Incluye alimentación' : 'No incluye alimentación').'</small></p>';
            echo '<button type="button" data-toggle="modal" data-target="#hostmodal'.$value['id'].'" class="btn btn-success">Arrendar</button>';
            echo '</div>';
            echo '</div>';

            echo '<!-- Modal -->
            <div class="modal fade" id="hostmodal'.$value['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">'.$value['title'].'</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ¿Está seguro que desea arrendar este lugar?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary" onclick = "location.href = \'http://localhost/hosters/controller/host/hireHost.php?id='.$value['id'].'\'">Sí</button>
                  </div>
                </div>
              </div>
            </div>';
        }
        
    }

    function getRentedHosts($user_id){
      $mbd = getConnector();
      $query = $mbd->prepare("SELECT * FROM hires, sites WHERE hires.site_id = sites.id AND hires.user_id = $user_id AND closed = 0");
      $query->execute();
      $results = $query->fetchAll();
      foreach($results as $result => $value){
          echo '<div class="card mb-3">';
          echo '<img src="view/site_images/'.$value['image'].'" class="card-img-top" alt="...">';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">'.$value['title'].'</h5>';
          echo '<p class="card-text">'.$value['description'].'</p>';
          echo '<p class="card-text"><small class="text-muted">$'.$value['priceperday'].' por noche</small></p>';
          echo '<p class="card-text"><small class="text-muted">'.( $value['food'] == 1 ? 'Incluye alimentación' : 'No incluye alimentación').'</small></p>';
          echo '<button type="button" data-toggle="modal" data-target="#hostmodal'.$value['id'].'" class="btn btn-warning">Dar de alta</button>';
          echo '</div>';
          echo '</div>';

          echo '<!-- Modal -->
          <div class="modal fade" id="hostmodal'.$value['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">'.$value['title'].'</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ¿Está seguro que desea dar de alta este lugar?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  <button type="button" class="btn btn-primary" onclick = "location.href = \'http://localhost/hosters/controller/host/closeHost.php?id='.$value['id'].'\'">Sí</button>
                </div>
              </div>
            </div>
          </div>';
      }
      
  }

