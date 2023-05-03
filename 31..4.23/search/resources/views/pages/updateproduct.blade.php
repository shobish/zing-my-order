


<!-- Update-Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="" id="updatemodalform">
      @csrf
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        
        <h5 class="modal-title" id="updateModalLabel">Add Products</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">    
      <div class="errormsg"></div>

            <div class="form-group">
                <label for="updatename">Name</label>
                <input type="text" class="form-control" id="updatename"  name="updatename" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="updateprice">Password</label>
                <input type="text" class="form-control" id="updateprice" name="updateprice" placeholder="Enter the amount">
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