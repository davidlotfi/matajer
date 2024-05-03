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
                <label for="" class="col-sm-2 control-label">Name :</label>
                <input type="text" class="form-control p-2 mt-2" placeholder="description" name="_name" value="" required>
              </div>
              <div class="form-group mb-3">
                <label for="">Prix :</label>
                <div class="input-group ">
                  <input type="number" name="_price" class="form-control" value="" placeholder="" required>
                  <span class="input-group-text">DA</span>
               </div>
              </div>
              <div class="form-group mb-3">
                <label for="">Quantité :</label>
                <div class="input-group ">
                  <input type="number" name="_qt" class="form-control" value="" placeholder="" required>
                  <span class="input-group-text">QT</span>
               </div>
              </div>
              <label for="">Detail :</label>
              <textarea name="_detail" class="form-control mt-2" rows="3" cols="80"></textarea>
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
          <button type="submit" name="commit" class="btn btn-primary">Finish</button>
        </div>
      </div>
    </div>
  </div><!-- End Modal-->

</form>

<!-- supp Produit modal -->
<div class="modal fade" id="basicModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
            <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
           </svg>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Really do you want delete the product?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Non</button>
        <button type="button" class="btn btn-outline-success"><i class="bi bi-check-lg"></i> Yes</button>
      </div>
    </div>
  </div>
</div><!-- End supp Produit Modal-->
