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
    <title>Product</title>
  </head>
  <style media="screen">
  .instacart_com{
    border: none;
    margin: 0px 0px 0px 0px;
    cursor: pointer;
    user-select: none;
    touch-action: manipulation;
    position: relative;
    background-color: rgb(10, 173, 10);
    color: rgb(255, 255, 255);
    border-radius: 6px;
    height: 48px;
    padding: 14px;
    width: auto;
   }
   .instacart_com:hover{
     background-color: #38b832;
   }
   label{
  //color: #c61c6f;
   }
   .text-success {
    color: #28a745!important;
    }

  </style>
<body>
  <?php  include('include/header.php'); ?>
  <?php  include('include/menu.php'); ?>

  <main id="main" class="main">
    <section class="section dashboard">
      <button class="instacart_com" data-bs-toggle="modal" data-bs-target="#ExtralargeModal" type="button"><i class="bi bi-images me-1"></i> Add Product</button>
      <br><br>
        <div class="col-lg-12">
          <div class="row">
            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">
                    <h5 class="card-title">Top Selling:</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qt</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div><!-- End Top Selling -->
          </div>
        </div><!-- End Left side columns -->
    </section>
  </main><!-- End #main -->

<!-- add Produit modal -->
  <div class="modal fade" id="ExtralargeModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary">Add New Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="file" name="1" onchange="document.getElementById('1').src = window.URL.createObjectURL(this.files[0])"  required/>
          <br><br>
          <div class="row g-3">
            <div class="col-lg-9">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                <label class="text-primary" for="floatingName">Description</label>
              </div>
              <div class="col-4 mt-2 mb-3">
                <label class="text-primary" for="">Prix :</label>
                <div class="input-group ">
                  <input type="text" name="_price" class="form-control" value="" placeholder="">
                  <span class="input-group-text">DA</span>
               </div>
              </div>
              <div class="col-4 mt-2 mb-3">
                <label class="text-primary" for="">Prix :</label>
                <div class="input-group ">
                  <input type="text" name="_price" class="form-control" value="" placeholder="">
                  <span class="input-group-text">DA</span>
               </div>
              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                <label class="text-primary" for="floatingTextarea">Detail</label>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card"  style="border: 1px solid #777;">
                <img class="card-img-top" id="1" src="images/image.png" alt="Card image cap" style="height:130px">
                <div class="card-body">
                   <h6 class="card-title text-success">1000 DA</h6>
                   <p class="card-text">Paper Puzzle Toy Educational Developmental Baby Kids.</p>
                </div>
             </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Finish</button>
        </div>
      </div>
    </div>
  </div><!-- End Modal-->

  <?php  include('include/footer.php'); ?>
