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

                    <h3 class="mx-sm-5 mb-2" style="text-align: center;">Add Your Datas</h3>

                    <form action="{{url('/')}}" method="post">
                        @csrf
                        <div class=" form-group mx-sm-5 mb-2">
                            <label for="exampleInputEmail1"> Name</label>
                            <input type="text" class="form-control" name="name" placeholder=" Enter your Name">
                        </div>
                        <div class="form-group mx-sm-5 mb-2">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                        </div>
                        <div class="form-group mx-sm-5 mb-2">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter your Address">
                        </div>
                        <div class="form-group mx-sm-5 mb-2"> <button type="submit" class="btn btn-primary mt-2 ">Submit</button></div>
                    </form>

                </div>
                <div class="table">
                    <table class=" table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($data as $datas)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$datas->name}}</td>
                                <td>{{$datas->email}}</td>
                                <td>{{$datas->address }}</td>
                                <td>
                                    <a href="edit-Student/{{$datas->id}}"><button class="btn btn-primary"> Edit </button></a>-
                                    <a href="delete-Student/{{$datas->id}}"><button class="btn btn-danger"> Delete</button> </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</body>

</html>