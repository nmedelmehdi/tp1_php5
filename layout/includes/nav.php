<?php session_start();?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar">1</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="http://localhost/tp1_php5/">TP_1_PHP5</a>

			  <ul class="nav navbar-nav">
     				<li class="active"><a href="http://localhost/tp1_php5/">Accueil</a></li>
      				<li><a href="#" data-toggle="modal" data-target="#myModal">Ajouter Client</a></li>
      				<li><a href="http://localhost/tp1_php5/controle/ctrl.php?action=all">Afficher Client</a></li>
      				<li><a href="#">A propos de nous!</a></li>
    			</ul>

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form method="post"class="navbar-form navbar-right" role="form" action="ctrl.php?action=deconnexion">
                        <label style="color : white" name="usernamer">Bienvenue : <?php echo $_SESSION['username']?></label><input type=submit name="destroy" class="btn btn-danger" value="Deconnexion"/>

                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
