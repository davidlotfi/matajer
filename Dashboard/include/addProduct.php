<form class="" action="controller/addProduct.php" enctype="multipart/form-data" method="post">
  <div class="modal fade" id="ExtralargeModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary">Add New Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="file" name="1" onchange="document.getElementById('1').src = window.URL.createObjectURL(this.files[0])" required/>
          <br><br>
          <div class="row">
            <div class="col-lg-9">
              <div class="form-group mb-3">
                <label for="" class="col-sm-2 control-label text-success">Description :</label>
                <input type="text" class="form-control p-2 mt-2" placeholder="Titre de Produit" name="_name" value="" required>
              </div>
               <div class="row">
                  <div class="col-md-6">
                   <label for="" class="text-success">Prix actuel :</label>
                   <div class="input-group">
                     <input type="number" name="_price" class="form-control" value="" placeholder="1000" required>
                     <span class="input-group-text">DA</span>
                   </div>
                 </div>
                 <div class="col-md-6">
                   <label for="" class="text-success">Ancien Prix :</label>
                   <div class="input-group mb-3">
                     <input type="number" name="_" class="form-control text-decoration-line-through" value="" placeholder="1000" required>
                     <span class="input-group-text text-decoration-line-through">DA</span>
                  </div>
                </div>
             </div>

             <div class="col-md-6">
               <div class="form-group mb-3">
                 <label for="" class="">Quantité :</label>
                 <div class="input-group">
                   <input type="number" name="_qt" class="form-control" value="" placeholder="" required>
                   <span class="input-group-text">QT</span>
                </div>
               </div>
               <label for="" class="">Detail :</label>
               <textarea name="_detail" class="form-control mt-2" rows="3" cols="80"></textarea>
             </div>

            </div>

            <div class="col-lg-3">
              <div class="card"  style="border: 1px solid #777;">
                <img class="card-img-top" id="1" src="images/image.png" alt="Card image cap" style="height:130px">
                <div class="card-body">
                  <div class="d-flex">
                    <h6 class="card-title text-success">1000 DA</h6>
                    &nbsp;&nbsp;
                    <h6 class="card-title text-secondary text-decoration-line-through">1000 DA</h6>
                  </div>
                   <div class="d-flex text-warning">
                       <div class="bi-star-fill"></div>
                       <div class="bi-star-fill"></div>
                       <div class="bi-star-fill"></div>
                       <div class="bi-star-fill"></div>
                       <div class="bi-star-fill"></div>
                   </div>
                   <p class="card-text">Paper Puzzle Toy Educational Developmental Baby Kids.</p>
                </div>
             </div>
            </div>

          </div><!-- row -->
        </div><!-- Modal body -->
        <div class="modal-footer">
          <button type="submit" name="commit" class="btn btn-primary" id="submit-btn">Terminer</button>
        </div>
      </div>
    </div>
  </div><!-- End Modal-->
</form>
