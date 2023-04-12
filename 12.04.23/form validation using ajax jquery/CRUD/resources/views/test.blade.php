<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 center">

                <!---form --->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-5">

                            <div class="col-md-6 ml-8" style="background-Color:gray;  ">

                                <h3 class="mx-sm-5 mb-2" style="text-align: center;">Add Your Datas</h3>

                                <form action="{{url('/ajax')}}" method="post" id="formdatas" enctype="multipart/form-data">
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
                                    <div class="form-group mx-sm-5 mb-2"> <button type="submit" class="btn btn-primary mt-2" id="btn-submit">Submit</button></div>
                                </form>

                            </div>
                        </div>
                    </div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="query.js" type="text/javascript"></script>


</html>