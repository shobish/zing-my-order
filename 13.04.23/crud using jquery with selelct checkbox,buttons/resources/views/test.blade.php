<tbody>
    @php
    $i=1;
    @endphp
    @foreach($user as $data)
    <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->age}}</td>
        <td>{{$data->hobbies}}</td>
        <td>{{$data->sex}}</td>
        <td>{{$data->class}}</td>

        <td>
            <a href="/delete-user/{{$data->id}}"><button class="btn btn-danger delete-btn" id="btn-delete" value="{{$data->id}}">delete</button></a>
            <a href="/edit-user/{{$data->id}}" id="btn-edit"><button class="btn btn-primary edit-btn" value="{{$data->id}}">edit</button></a>
        </td>
    </tr>
    @endforeach
</tbody>

<td>
    <a href="/delete-user/{{$data->id}}"><button class="btn btn-danger delete-btn" id="btn-delete" value="{{$data->id}}">delete</button></a>
    <a href="/edit-user/{{$data->id}}" id="btn-edit"><button class="btn btn-primary edit-btn" value="{{$data->id}}">edit</button></a>
</td>















// $("#btn-submit").click(function(e) {
// e.preventDefault();
// var name = $('#name').val();
// var age = $('#age').val();
// var className = $('#class').val();
// var sex = $('.sex').val();
// var hobbiesList = [];
// $("input.hobbies:checked").each(function(item) {
// hobbiesList.push($(this).val());
// });
// var genderList = [];
// $("input.sex:checked").each(function(item) {
// genderList.push($(this).val());
// });
// var csrf = $('input[name="_token"]').val();

// $.post("{{url('/user-data ')}}", {
// name: name,
// age: age,
// class: className,
// sex: genderList,
// hobbies: hobbiesList,
// _token: csrf
// }, function(response) {
// console.log(response);
// $("#response").html("<div class='alert alert-success close'>" + response.message + "</div>");
// $('#exampleModal').modal('hide');
// $('#exampleModal').find('input').val("");
// getStudent();


// });
// });


//for hobbi in res.user.hobiies
//if hobbi==reading then hobbi id.prop('checked', true);
//elseif hobbie==game the hobbi
//else hobbie==dance the hobbi








$(document).on('click', '#edit-submit', function(e) {
e.preventDefault();
var var_id = $('#edit-id').val();
var name = $('#name').val();
var age = $('#age').val();
var className = $('#class').val();
var sex = $('input[name=gender:checked]').val();
var hobbiesList = [];
$("input.hobbies:checked").each(function(item) {
hobbiesList.push($(this).val());
});
var csrf = $('input[name="_token"]').val();

var data = {
"name": $('.edit-name').val(),
"age": $('.edit-age').val(),
"sex": $('.edit-sex').val(),
"class": $('.edit-class').val(),
"hobbies": $('.edit-hobbies').val(),
}
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
type: "PUT",
url: "/update-user/" + var_id,
data: data,
dataType: "json",
success: function(response) {
console.log(response);
if (response.status == 400) {
$('#edit-response').html("");
$('#edit-response').addClass('alert alert-danger');
$('#edit-response').text(response.message);

} else {
$("#response").html("<div class='alert alert-success close'>" + response.message + "</div>");
$('#editModal').modal('hide');


}

}
})

})