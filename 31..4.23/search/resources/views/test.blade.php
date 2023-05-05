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


</script>

//contoller//
 if ($request->ajax()) {
            return datatables()->of(Search::all())->tojson();
        }
        return view('products');