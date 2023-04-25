 // products = [
 // {
 // pname: 'pname 1',
 // pdescription: 'pdesc 2',
 // price: 123
 // }, {
 // pname: 'pname 2',
 // pdescription: 'pdesc 2',
 // price: 124
 // }
 // ]



 //addding user start
 $(document).on('click', "#sumbit", function(e) {
 e.preventDefault();
 var name = $('#name').val();
 var address = $('#address').val();
 var category = $('#category').val();
 var pname = $('#pname').val();
 var pdes = $('#pdes').val();
 var pprice = $('#pprice').val();
 var csrf = $('input[name="_token"]').val();
 $.post("{{url('/addselection ')}}", {
 name: name,
 address: address,
 category: category,
 pname: pname,
 pdes: pdes,
 pprice: pprice,
 _token: csrf

 }, function(response) {
 if (response.status == 400) {
 console.log(response.error);
 $('.errordata').html("");
 $('.errordata').addClass("alert alert-danger");
 $.each(response.error, function(index, value) {

 $('.errordata').append('<li>' + value + '</li>')
 })
 } else {
 $('.errordata').html("<div class='alert alert-success close'>" + response.message + "</div>");
 $('#selectionform').trigger('reset');
 }


 });


 });
 //addding user end



 response()->json(["status" => 200, 'message' => "New User Added Successfully"]);






 getStudent();

 function getStudent() {
 $.ajaxSetup({
 headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 }
 });

 $.ajax({
 type: "GET",
 url: "/",
 dataType: "Json",
 success: function(response) {
 console.log(response.user);
 $('tbody').html('');
 $.each(response.user, function(index, value) {
 $('tbody').append('<tr id="user-table-row_"' + value.id + '>\
     <td> ' + value.id + ' </td> \
     <td>' + value.name + ' </td> \
     <td> ' + value.address + ' </td> \
     <td> ' + value.category + ' </td> \
     <td> ' + value.pname + ' </td> \
     <td> ' + value.pdes + ' </td> \
     <td> ' + value.pprice + ' </td> \
     <td><button class="btn btn-primary edit-btn" value="' + value.id + '">edit</button></td> \
     <td><button class="btn btn-danger delete-btn" id="btn-delete" value="' + value.id + '">delete</button> </td>\
 </tr> ');

 })
 }

 });
 }