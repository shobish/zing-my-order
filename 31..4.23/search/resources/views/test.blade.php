//save data to database

    $(document).on('click', '#savebtnModal', function(e){
      e.preventDefault();    
      let name = $('#productName').val();
      let price = $('#productPrice').val();    
      $.ajax({
        url: "{{url('/addproduct')}}",
        type: 'post',
        data: {
          name: name,
          price: price
        },       
        success:function (res) {
          console.log(res);
          if(res.status==200){
            $('#productModal').modal('hide');
            $('#modalform')[0].reset();
            $('.table').load(location.href+' .table');
          }
          },error:function(err){
            let error=err.responseJSON;
            $.each(error.errors,function(index,value){
              $('.errormsg').append('<div class="text-danger">'+value+'</div>');
            });               
          }
            
      });
      
    });







//show


     $req->validate([
            'name' => 'required',
            'price' => 'required',
        ], [
            'name.required' => 'fill the name field',
            'price.required' => 'fill the price field',
        ]);

        $products = new Search();
        $products->name = $req->name;
        $products->price = $req->price;
        $products->save();

        return response()->json([
            "status" => 200,
            "message" => 'added Successfully'
        ]);