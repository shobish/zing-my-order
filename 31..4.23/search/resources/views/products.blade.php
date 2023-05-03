@include('layout.header')

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="header">
            <h1 class="page-title mt-5 text-center">Ajax search Bar</h1>
          </div>
          <div class="addbtn">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#productModal">
            Add Products
            </button>
          </div><br>
           <table class="table table-bordered" id="data-table">
                    <thead>
                           <th>Id</th>
                           <th>name</th>
                           <th>price</th>
                           
                    </thead>	
                    <tbody>
                    </tbody>			
               </table>
        </div>
    </div>
</div>



@include('pages.productModal')
@include('layout.footer')


<script>
  $(function(){
    var table=$('#data-table').DataTable({
      
      processing:true,
      serverSide:true,
      ajax:'table',
      columns: [
        {data:'id',name:'id'},
        {data:'name',name:'name'},
        {data:'price',name:'price'}
      ]
    });
  })

  $(document).ready(function() {  
    



   
  
  });
</script>
</body>
</html>