<?php
   require_once '../../../header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>add </title>
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
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Ajout d'un Produit</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="">
                  <div class="form-group ">
                    <label for="ref" class="control-label col-lg-2">Reference</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="ref" name="ref" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="nom" class="control-label col-lg-2">nom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nom" name="nom" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="qte" class="control-label col-lg-2">Quantite</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="qte" name="qte" type="number" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="id_user" class="control-label col-lg-2">id_User</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="id_user" name="id_user" type="id_user" />
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
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
  <script src="../../../public/lib/form-validation-script.js"></script>

</body>

</html>

<?php
   require_once '../../../footer.php';
?>