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
