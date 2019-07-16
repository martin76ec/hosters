<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Hosters</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=myhosts">Mis Inmuebles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mis Arriendos</a>
                </li>
            </ul>
            <div>
                <?php 
                    if(isset($_SESSION['user_id'])){
                        echo '<button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal"
                        data-target="#singoutmodal">Cerrar Sesión</button>';
                    } elseif(!isset($_SESSION['user_id'])) {
                        echo '<button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal"
                        data-target="#signupmodal">Regístrate</button>';
                        echo '<button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal"
                        data-target="#signinmodal">Iniciar Sesión</button>';
                    }
                ?>
            </div>
        </div>
    </nav>
</div>