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
    <title>pagination</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="table-data mt-5 " id="table-data">
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">#</th>

                                <th scope="col">name</th>
                                <th scope="col">age</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $datas)
                            <tr>

                                <th scope="row">#</th>


                                <td value="1">{{$datas->name}}</td>

                                <td>{{$datas->age}}</td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {!!$data->links()!!}


                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>
    $(document).ready(function() {

        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            pagination(page);
        });

        function pagination(page) {

            $.ajax({

                url: '/pagination?page=' + page,
                success: function(res) {
                    console.log(res);
                    $('#table-data').html(res);
                }
            });

        }

    });
</script>

</html>