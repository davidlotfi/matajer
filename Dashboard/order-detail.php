<?php
   require_once('func/database.php');

   $reponse=$dbd->prepare('SELECT * FROM commande WHERE id=?');
   $reponse->execute(array($_GET['order']));
   $commande=$reponse->fetch();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Application</title>
  </head>

<body>
  <?php  include('include/header.php'); ?>
  <?php  include('include/menu.php'); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>My order</h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <form class="" action="controller/confirmer_order.php" method="post">
       <div class="row">
        <div class="col-lg-12">
          <div class="card top-selling overflow-auto mb-1">
            <div class="card-body pb-0 pt-2">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Date</th>
                    <th scope="col">Willaya</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Status</th>
                    <th scope="col">confirme</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#"><img src="images/puzzle.jpg" alt=""></a></th>
                    <td><span class=""><?php echo $commande['client_name'].' '. $commande['client_prenom']; ?></span></td>
                    <td><span class="text-primary fw-bold"><?php echo $commande['telephone']; ?></span></td>
                    <td><span class="text-success fw-bold">15 min</span></td>
                    <td><span class="text-secondary fw-bold"><?php echo  $commande['willaya']; ?></span></td>
                    <td><span class="text-primary fw-bold"><?php echo $commande['prix']; ?> DA</span></td>
                    <td class="fw-bold"><?php echo $commande['quantite']; ?></td>
                    <td>
                       <span class="badge bg-success">Approved</span>
                    </td>
                    <td>
                       <select class="form-select" name="status" required>
                          <option value="<?php echo $commande['etat']; ?>" selected><?php echo $commande['etat']; ?></option>
                          <option value="confirmer">confirmer</option>
                          <option value="livrer">livrer</option>
                          <option value="annuler">annuler</option>
                       </select>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="card top-selling overflow-auto">
            <div class="card-body pb-4 pt-4">
              <!-- No Labels Form -->
              <div class="row g-3">
                <div class="col-md-4">
                  <input class="d-none" type="text" name="_id" value="<?php echo $commande['id']; ?>" style="">
                  <label for="" class="form-label text-success">Nom</label>
                  <input type="text" class="form-control" name="_nom" placeholder="Full name" value="<?php echo $commande['client_name']; ?>">
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label text-success">Prenom</label>
                  <input type="text" class="form-control" name="_prenom" placeholder="Full name" value="<?php echo $commande['client_prenom']; ?>">
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label text-success">Phone</label>
                  <input type="text" class="form-control" placeholder="Full name" value="<?php echo $commande['telephone']; ?>" disabled>
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label text-success">willaya</label>
                  <select  class="form-select inputlg" name="_willaya">
                    <option value="<?php echo $commande['willaya']; ?>" selected><?php echo $commande['willaya']; ?></option>
                    <option value="ADRAR - 01">ADRAR - 01</option>
                    <option value="CHLEF - 02">CHLEF - 02</option>
                    <option value="LAGHOUAT - 03">LAGHOUAT - 03</option>
                    <option value="OUM-EL-BOUAGHI - 04">OUM-EL-BOUAGHI - 04</option>
                    <option value="BATNA - 05">BATNA - 05</option>
                    <option value="BEJAIA - 06">BEJAIA - 06</option>
                    <option value="BISKRA - 07">BISKRA - 07</option>
                    <option value="BECHAR - 08">BECHAR - 08</option>
                    <option value="BLIDA - 09">BLIDA - 09</option>
                    <option value="BOUIRA - 10">BOUIRA - 10</option>
                    <option value="TAMANRASSET - 11">TAMANRASSET - 11</option>
                    <option value="TEBESSA - 12">TEBESSA - 12</option>
                    <option value="TLEMCEN - 13">TLEMCEN - 13</option>
                    <option value="TIARET - 14">TIARET - 14</option>
                    <option value="TIZI-OUZOU - 15">TIZI-OUZOU - 15</option>
                    <option value="ALGER - 16">ALGER - 16</option>
                    <option value="DJELFA - 17">DJELFA - 17</option>
                    <option value="JIJEL - 18">JIJEL - 18</option>
                    <option value="SETIF - 19">SETIF - 19</option>
                    <option value="SAIDA - 20">SAIDA - 20</option>
                    <option value="SKIKDA - 21">SKIKDA - 21</option>
                    <option value="SSIDI-BEL-ABBES - 22">SSIDI-BEL-ABBES - 22</option>
                    <option value="ANNABA - 23">ANNABA - 23</option>
                    <option value="GUELMA - 24">GUELMA - 24</option>
                    <option value="CONSTANTINE - 25">CONSTANTINE - 25</option>
                    <option value="MEDEA - 26">MEDEA - 26</option>
                    <option value="MOSTAGANEM - 27">MOSTAGANEM - 27</option>
                    <option value="M-SILA - 28">M-SILA - 28</option>
                    <option value="MASCARA - 29">MASCARA - 29</option>
                    <option value="OUARGLA - 30">OUARGLA - 30</option>
                    <option value="ORAN - 31">ORAN - 31</option>
                    <option value="L-BAYADH - 32">L-BAYADH - 32</option>
                    <option value="ILLIZI - 33">ILLIZI - 33</option>
                    <option value="BORDJ-BOU-ARRERIDJ - 34">BORDJ-BOU-ARRERIDJ - 34</option>
                    <option value="BOUMERDES - 35">BOUMERDES - 35</option>
                    <option value="EL-TARF - 36">EL-TARF - 36</option>
                    <option value="TINDOUF - 37">TINDOUF - 37</option>
                    <option value="TISSEMSILT - 38">TISSEMSILT - 38</option>
                    <option value="EL-OUED - 39">EL-OUED - 39</option>
                    <option value="KHENCHELA -  40">KHENCHELA -  40</option>
                    <option value="SOUK-AHRAS - 41">SOUK-AHRAS - 41</option>
                    <option value="TIPAZA - 42">TIPAZA - 42</option>
                    <option value="MILA - 43">MILA - 43</option>
                    <option value="AIN-DEFLA -  44">AIN-DEFLA -  44</option>
                    <option value="NAAMA - 45">NAAMA - 45</option>
                    <option value="AIN-TEMOUCHENT - 46">AIN-TEMOUCHENT - 46</option>
                    <option value="GHARDAIA - 47">GHARDAIA - 47</option>
                    <option value="GHELIZANE - 48">GHELIZANE - 48</option>
                  </select>
                </div>
                <div class="col-4">
                  <label for="" class="form-label text-success">City (address)</label>
                  <input type="text" class="form-control" name="_address" placeholder="address" value="<?php echo $commande['address']; ?>">
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label text-success">Quantite</label>
                  <input type="number" class="form-control" name="_quantite" placeholder="Quantite" value="<?php echo $commande['quantite']; ?>">
                </div>
                <div class="text-center pt-1">
                  <button type="submit" class="btn btn-primary" name="commit">Enregister</button>
                </div>
              </div><!-- End No Labels Form -->
            </div>
          </div>
        </div><!-- End Left side columns -->
      </div>
     </form>
    </section>
  </main><!-- End #main -->

  <?php  include('include/footer.php'); ?>
