<?php
session_start();
/*require_once 'src/models/userBD.php';

if(isset($_POST['btnConnecter'])){
    extract($_POST);
    $employe = findEmpByLogin($login,$mdp);
    //var_dump($employe);die;
    if($employe != null){
        $_SESSION['id'] = $employe['idU'];
        $_SESSION['nom'] = $employe['nomU'];
        $_SESSION['prenom'] = $employe['prenomU'];
        $_SESSION['adresseEmp'] = $employe['etatU'];
        
    
    header("location:/SuiviStock/accueil.php");

    } else{
        header("location:/SuiviStock/index.php?erreur");
    }
}

  
*/
?>

<div class="container mt-6">
    <div class="col-md-7 offset-4">
        <span class="text-uppercase h1 blue lighten-2 white-text col-md-6 "> Suivi Stock </span>
    </div>
</div>

<!-- Material form login -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>login</title>

  <!-- Favicons -->
  <link href="public/img/favicon.png" rel="icon">
  <link href="public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="public/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="public/css/style.css" rel="stylesheet">
  <link href="public/css/style-responsive.css" rel="stylesheet">
  
 
</head>

<body>
  
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="accueil.php" method="post">
        <h2 class="form-login-heading">Connectez Vous Maintenant</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Nom utilisateur"  name="login">
          <br>
          <input type="password" class="form-control" placeholder="Password" name="mdp">
          <div class="container mt-8">
              <button class="btn blue-gradient btn-rounded btn-primary   my-4 waves-effect z-depth-0" type="submit" 
              name="btnConnecter">Se Connecter</button>
              </div>
        <!-- Modal -->
        
        <!-- modal -->
      </form>
    </div>
  </div>
  
</body>

</html>

           

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form login -->
<?php
    if (isset($_GET['erreur'])){
        echo '<div class="h2 text-center red-text container col-md-6">Login ou Mot de Passe incorrect !</div>';
    }
?>
