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
                    <a class="nav-link" href="http://localhost/hosters"><?php getLanguage($_SESSION['language'], 'catalogue')?><span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=myhosts"><?php getLanguage($_SESSION['language'], 'Myproperties')?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=myhires"><?php getLanguage($_SESSION['language'], 'Misarriendos')?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button"
                        aria-haspopup="true" aria-expanded="false">Languages</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="http://localhost/hosters/controller/translate/setLanguage.php?language=spanish">Español</a>
                        <a class="dropdown-item" href="http://localhost/hosters/controller/translate/setLanguage.php?language=english">English</a>
                        <a class="dropdown-item" href="http://localhost/hosters/controller/translate/setLanguage.php?language=catari">العربي</a>
                        <a class="dropdown-item" href="http://localhost/hosters/controller/translate/setLanguage.php?language=russian">русский</a>
                    </div>
                </li>
            </ul>
            <div>
                <?php 
                    if(isset($_SESSION['user_id'])){
                        echo '<button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal"
                        data-target="#singoutmodal">'.getLanguage($_SESSION['language'], 'Signoff').'</button>';
                    } elseif(!isset($_SESSION['user_id'])) {
                        echo '<button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal"
                        data-target="#signupmodal">'.getLanguage($_SESSION['language'], 'Sign up').'</button>';
                        echo '<button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal"
                        data-target="#signinmodal">'.getLanguage($_SESSION['language'], 'Login').'</button>';
                    }
                ?>
            </div>
        </div>
    </nav>
</div>