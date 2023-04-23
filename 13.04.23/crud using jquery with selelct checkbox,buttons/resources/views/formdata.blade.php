<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous">
    </script>
    <title>Document</title>

</head>
<style>
    .form-group>label {
        font-size: 18px;
        font-weight: 700;
        color: #242423;
        margin-bottom: 10px;
        margin-top: 10px;

    }

    .select {

        margin-bottom: 10px;
    }
</style>

<body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fill The Form</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card py-4 px-4 center ">
                        <div class="header text-center">
                            <ul id="errorData"></ul>
                            <h1>Fill The Form</h1>
                        </div>
                        <form method="post" action="{{url('/user-data')}}" id="formdata" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group ">
                                <label for="name">Name</label>
                                <input type="text" class="form-control name" name="name" id="name" placeholder="Enter name" />
                            </div>
                            <div class="form-group ">
                                <label for="age">Age</label>
                                <input type="number" class="form-control age" name="age" id="age" placeholder="Enter age" />
                            </div>
                            <!--hobbie-->
                            <div class="start form-group">
                                <label class="" for="">Hobbies</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input hobbies" name="hobbies[]" type="checkbox" id="inlineCheckbox1" value="games" />
                                <label class="form-check-label" for="inlineCheckbox1">games</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input hobbies" name="hobbies[]" type="checkbox" id="inlineCheckbox2" value="reading" />
                                <label class="form-check-label" for="inlineCheckbox2">Reading</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input hobbies" name="hobbies[]" type="checkbox" id="inlineCheckbox2" value="dance" />
                                <label class="form-check-label" for="inlineCheckbox2">dance</label>
                            </div>
                            <!--end-hobbie-->
                            <!--start-gender-->
                            <fieldset class="form-group">
                                <label class=" col-sm-2 ">gender</label>
                                <div class="row">
                                    <div class="col-sm-10 d-flex">
                                        <div class="form-check px-4">
                                            <input class="form-check-input gender " id="gender" name="gender" type="radio" name="gridRadios" id="gridRadios1" value="Male" />
                                            <label class="form-check-label " for="gridRadios1" checked>male </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input gender " id="gender" name="gender" type="radio" name="gridRadios" id="gridRadios2" value="Female" />
                                            <label class="form-check-label" for="gridRadios2" checked>female </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!--end-gender-->
                            <!--start-class-->
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">select you class</label>
                                <select class="form-control select class" id="class" name="class" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <!--end-class-->

                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="btn-submit" class="btn btn-primary submit">Submit</button>
                            </div>


                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--- edit-modal-start--->

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Form</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card py-4 px-4 center ">
                        <div id="edit-response">

                        </div>
                        <form method="post" action="{{url('/user-data')}}" id="editFormdata" class="edit-form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group ">

                                <input type="hidden" class="form-control id" name="id" id="edit-id" />
                            </div>

                            <div class="form-group ">
                                <label for="name">Name</label>
                                <input type="text" class="form-control edit-name" name="edit-name" id="edit-name" placeholder="Enter name" />
                            </div>
                            <div class="form-group ">
                                <label for="age">Age</label>
                                <input type="number" class="form-control edit-age" name="edit-age" id="edit-age" placeholder="Enter age" />
                            </div>
                            <!--hobbie-->
                            <div class="start form-group">
                                <label class="" for="">Hobbies</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input edit-hobbies" name="hobbies[]" type="checkbox" id="edit-check-games" value="games" />
                                <label class="form-check-label" for="inlineCheckbox31">games</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input edit-hobbies" name="hobbies[]" type="checkbox" id="edit-check-reading" value="reading" />
                                <label class="form-check-label" for="inlineCheckbox2">Reading</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input edit-hobbies" name="hobbies[]" type="checkbox" id="edit-check-dance" value="dance" />
                                <label class="form-check-label" for="inlineCheckbox2">dance</label>
                            </div>
                            <!--end-hobbie-->
                            <!--start-gender-->
                            <fieldset class="form-group">
                                <label class=" col-sm-2 ">gender</label>
                                <div class="row">
                                    <div class="col-sm-10 d-flex">
                                        <div class="form-check px-4">
                                            <input class="form-check-input edit-gender " name="edit-gender" type="radio" id="male" value="Male" />
                                            <label class="form-check-label " for="male">male </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input edit-gender " name="edit-gender" type="radio" id="female" value="Female" />
                                            <label class="form-check-label" for="female">female </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!--end-gender-->
                            <!--start-class-->
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">select you class</label>
                                <select class="form-control select edit-class " id="edit-class" name="edit-class" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <!--end-class-->

                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="edit-submit" class="btn btn-primary edit-submit">Update</button>
                            </div>


                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--- edit-modal-end--->

    <!--- delete-modal-start--->

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">delete</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <input type="hidden" class="form-control id" name="delete-id" id="delete-id" />

                    <h3>are you sure</h3>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="delete-submit" class="btn btn-primary delete-submit">delete</button>
                </div>
            </div>


        </div>
    </div>
    </div>
    <!--- delete-modal-end--->

    <!--form-data-->

    <!--form-data-end-->

    <!--- table area start--->
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-9 ">
                <div class="card py-4 px-4 center mt-6">
                    <div class="response" id="response">

                    </div>
                    <div class="card-header ">
                        <h2>User List
                            <a href="#" class="btn btn-sm float-end btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add student</a>

                        </h2>
                    </div>
                    <div class="card-body">


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Hobbies</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp

                                <!-- <tr>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>
                                        <a href="/delete-user/"><button class="btn btn-danger delete-btn" id="btn-delete" value="">delete</button></a>
                                        <a href="/edit-user/" id="btn-edit"><button class="btn btn-primary edit-btn" value="">edit</button></a>
                                    </td>
                                </tr> -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- table area end--->



</body>




<script>
    $(document).ready(function() {

        //get student data start
        getStudent();

        function getStudent() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "/getdata",
                dataType: "Json",
                success: function(response) {
                    console.log(response.user);
                    $('tbody').html('');
                    $.each(response.user, function(index, value) {
                        $('tbody').append('<tr id="user-table-row_"' + value.id + '>\
                                            <td> ' + value.id + ' </td> \
                                            <td>' + value.name + '  </td> \
                                            <td> ' + value.age + '  </td> \
                                            <td> ' + value.hobbies + '  </td> \
                                            <td> ' + value.sex + ' </td> \
                                            <td> ' + value.class + '  </td> \
                                            <td><button class="btn btn-primary edit-btn" value="' + value.id + '">edit</button></td> \
                                            <td><button class="btn btn-danger delete-btn" id="btn-delete" value="' + value.id + '">delete</button> </td>\ </tr> ');

                    })
                }

            });
        }
        //get student data end

        //add user start
        $(document).on('click', '#btn-submit', function(e) {
            e.preventDefault();
            var name = $('#name').val();
            var age = $('#age').val();
            var className = $('#class').val();
            var sex = $('input[name=gender]').val();
            var hobbiesList = [];
            $("input.hobbies:checked").each(function(item) {
                hobbiesList.push($(this).val());
            });
            var csrf = $('input[name="_token"]').val();

            $.post("{{url('/user-data ')}}", {
                name: name,
                age: age,
                class: className,
                sex: sex,
                hobbies: hobbiesList,
                _token: csrf
            }, function(response) {
                console.log(response);
                if (response.status == 400) {
                    $("#errorData").html("");
                    $("#errorData").addClass("alert alert-danger");
                    $.each(response.error, function(key, value) {
                        $("#errorData").append('<li>' + value + '</li>');

                    })


                } else {
                    $("#response").html("<div class='alert alert-success close'>" + response.message + '</div>');
                    $('#exampleModal').modal('hide');
                    getStudent();



                }




            });

        });



    });


    //add user end

    //edit user start
    $(document).on('click', '.edit-btn', function(e) {
        e.preventDefault();
        var var_id = $(this).val();
        // console.log(var_id);
        $("#editModal").modal('show');
        $.ajax({
            type: 'GET',
            url: "/edit-user/" + var_id,
            success: function(response) {
                //console.log(response);

                if (response.status == 404) {
                    $('#edit-response').html("");
                    $('#edit-response').addClass('alert alert-danger');
                    $('#edit-response').text(response.message);
                } else {
                    $('#edit-id').val(var_id);
                    $('.edit-name').val(response.user.name);
                    $('.edit-age').val(response.user.age);
                    if (response.user.sex == 'Male') {
                        $('#male').prop('checked', true);

                    } else {
                        $('#female').prop('checked', true);

                    }
                    var hobbies = JSON.parse(response.user.hobbies);

                    Array.from(hobbies).forEach(function(hobbi) {

                        $(`#edit-check-${hobbi}`).prop('checked', true);


                    });

                    $('.edit-class').val(response.user.class);
                    // $('.edit-hobbies').val(response.user.hobbies);
                }
            }

        });

        $(document).on('click', '#edit-submit', function(e) {
            e.preventDefault();
            var var_id = $('#edit-id').val();
            var name = $('#edit-name').val();
            var age = $('#edit-age').val();
            var className = $('#edit-class').val();
            var sex = $('input[name=edit-gender]').val();
            var hobbiesList = [];
            $("input.edit-hobbies:checked").each(function(item) {
                hobbiesList.push($(this).val());
            });
            var csrf = $('input[name="_token"]').val();

            var data = {
                "name": name,
                "age": age,
                "sex": sex,
                "class": className,
                "hobbies": hobbiesList,
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
                        $.each(response.error, function(key, value) {
                            $("#errorData").append('<li>' + value + '</li>');
                        });

                    } else if (response.status == 404) {
                        $('#edit-response').html("");
                        $('#edit-response').addClass('alert alert-success');
                        $('#edit-response').text(response.message);

                    } else {
                        $('#edit-response').html("");
                        $("#response").html("<div class='alert alert-success close'>" + response.message + "</div>");
                        $('#editModal').modal('hide');
                        $('#editFormdata').each(function() {
                            this.reset();
                        });
                        $.ajax({
                            type: "GET",
                            url: "/getdata",
                            dataType: "Json",
                            success: function(response) {
                                console.log(response.user);
                                $('tbody').html('');
                                $.each(response.user, function(index, value) {
                                    $('tbody').append('<tr id="user-table-row_"' + value.id + '>\
                                            <td> ' + value.id + ' </td> \
                                            <td>' + value.name + '  </td> \
                                            <td> ' + value.age + '  </td> \
                                            <td> ' + value.hobbies + '  </td> \
                                            <td> ' + value.sex + ' </td> \
                                            <td> ' + value.class + '  </td> \
                                            <td><button class="btn btn-primary edit-btn" value="' + value.id + '">edit</button></td> \
                                            <td><button class="btn btn-danger delete-btn" id="btn-delete" value="' + value.id + '">delete</button> </td>\ </tr> ');

                                })
                            }

                        });




                    }

                }
            })

        })


        //edit user end


        //delete function start
        $(document).on('click', '.delete-btn', function(e) {
            e.preventDefault();
            var var_id = $(this).val();
            $("#delete-id").val(var_id);

            $('#deleteModal').modal('show');



        });
        $(document).on('click', '#delete-submit', function(e) {
            e.preventDefault();
            var val_id = $("#delete-id").val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "DELETE",
                url: "/delete-user/" + val_id,
                success: function(response) {
                    //console.log(response);
                    $('#response').addClass('alert alert-success');
                    $("#response").text(response.message);
                    $('#deleteModal').modal('hide');
                    $("#user-table-row" + val_id).hide();

                    //
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "GET",
                        url: "/getdata",
                        dataType: "Json",
                        success: function(response) {
                            console.log(response.user);
                            $('tbody').html('');
                            $.each(response.user, function(index, value) {
                                $('tbody').append('<tr id="user-table-row_"' + value.id + '>\
                                            <td> ' + value.id + ' </td> \
                                            <td>' + value.name + '  </td> \
                                            <td> ' + value.age + '  </td> \
                                            <td> ' + value.hobbies + '  </td> \
                                            <td> ' + value.sex + ' </td> \
                                            <td> ' + value.class + '  </td> \
                                            <td><button class="btn btn-primary edit-btn" value="' + value.id + '">edit</button></td> \
                                            <td><button class="btn btn-danger delete-btn" id="btn-delete" value="' + value.id + '">delete</button> </td>\ </tr> ');

                            })
                        }

                    });


                }

            })
        })
        //delete function end

    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</html>