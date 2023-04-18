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
    <!--main Model start-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                                <input class="form-check-input hobbies" class="hobbies" name="hobbies[]" type="checkbox" id="inlineCheckbox1" value="games" />
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
    <!--main Model end-->

    <!--card start-->
    <div class="container-fluid">
        <div class="row justify-content-md-center mt-5 ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>User List
                            <a href="#" class="btn btn-sm float-end btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add student</a>

                        </h2>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--card end-->





</body>
<script>
    $(document).ready(function() {

        $(document).on('click', 'btn-submit', function(e) {

            e.preventDefault();
            var name = $('#name').val();
            var age = $('#age').val();
            var className = $('#class').val();
            var sex = $('input[name=gender]:checked').val();
            var hobbiesList = [];
            $("input.hobbies:checked").each(function(item) {
                hobbiesList.push($(this).val());
            });
            console.log(name);
        });



    });
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</html>