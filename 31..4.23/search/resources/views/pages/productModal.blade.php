<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post" id="modalform">
      @csrf
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        
        <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">    
      <div class="errormsg"></div>

            <div class="form-group">
                <label for="productName">Name</label>
                <input type="text" class="form-control" id="productName"  name="name" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="productPrice">Password</label>
                <input type="text" class="form-control" id="productPrice" name="price" placeholder="Enter the amount">
            </div>
      </div>
      <div class="modal-footer">  
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" id="savebtnModal">Save Products</button>
      </div>
    </div>
  </div>
  </form>
</div>