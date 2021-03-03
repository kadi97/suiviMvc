<?php

   require_once '../../../header.php';
   //require_once '../../model/UsersDb.php';
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>User</title>

  
  <link href="../../../public/img/favicon.png" rel="icon">
  <link href="../../../public/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="../../../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../../../public/css/style.css" rel="stylesheet">
  <link href="../../../public/css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <section id="main-content">
      <section class="wrapper">
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout btn-danger " name="btnAjout" href="addUser.php">Ajouter</a></li>
        </ul>
      </div>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Liste des Users</h4>
                <hr>
                <thead>
                  <tr>
                            <th><i class="fa fa-bullhorn"></i> ID</th>
                            <th><i class="fa fa-bullhorn"></i> Nom</th>
                            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Prenom</th>
                            <th><i class="fa fa-bookmark"></i> Email</th>
                            <th><i class=" fa fa-edit"></i> Etat</th>
                            <th><i class=" fa fa-edit"></i> Actions</th>
                  </tr>
                  
                </thead>
                <tbody>
                  <tr>
                    
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </section>
   
  </section>
  <script src="../../../public/lib/jquery/jquery.min.js"></script>
  <script src="../../../public/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../../../public/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../../../public/lib/jquery.scrollTo.min.js"></script>
  <script src="../../../public/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../../../public/lib/common-scripts.js"></script>

  
</body>

</html>

<?php
   require_once '../../../footer.php';
?>