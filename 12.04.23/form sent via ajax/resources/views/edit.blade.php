<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('bootstrap')
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">

                <div class="col-md-6 ml-8" style="background-Color:gray;  ">

                    <h3 class="mx-sm-5 mb-2" style="text-align: center;">Edit Your Data</h3>

                    <form action="{{url('/update-Student',$data->id)}}" method="post">
                        @csrf
                        <div class=" form-group mx-sm-5 mb-2">
                            <label for="exampleInputEmail1"> Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}">
                        </div>
                        <div class="form-group mx-sm-5 mb-2">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$data->email}}">
                        </div>
                        <div class="form-group mx-sm-5 mb-2">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control" name="address" value="{{$data->address}}">
                        </div>
                        <div class="form-group mx-sm-5 mb-2">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                            <a href="/back"> <button type="submit" class="btn btn-danger ">back</button></a>
                        </div>
                    </form>

                </div>




            </div>
        </div>
    </div>
</body>

</html>