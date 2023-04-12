<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Modal Example</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">click</button>
        <div>
            <div id="response">

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/ajax')}}" method="post" id="formdatas" enctype="multipart/form-data">
                            @csrf
                            <div class=" form-group mx-sm-5 mb-2">
                                <label for="exampleInputEmail1"> Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder=" Enter your Name">
                            </div>
                            <div class="form-group mx-sm-5 mb-2">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email">
                            </div>
                            <div class="form-group mx-sm-5 mb-2">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Address">
                            </div>
                            <div class="form-group mx-sm-5 mb-2"> <button type="submit" class="btn btn-primary mt-2" id="btn-submit" data-dismiss="modal">Submit</button></div>

                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>

</body>
<script>
    $("#btn-submit").click(function(e) {
        e.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var address = $("#address").val();
        var csrf = $('input[name="_token"]').val();


        console.log(name);
        console.log(email);
        $.post("{{url('/ajax')}}", {
            name: name,
            email: email,
            address: address,
            _token: csrf

        }, function(response) {
            console.log(response);
            $("#response").html(
                "<div class='alert alert-success'>" + response.message + "</div>"
            );
            $('#formdatas').each(function() {
                this.reset();
            });

        });
    });
</script>

</html>