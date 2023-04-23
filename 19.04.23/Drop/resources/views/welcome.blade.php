<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .form-select {
        margin-top: 10px;
    }

    #prize {
        width: 634px;
        border: solid #212529 1px;
    }

    .outer {
        background-color: #b3bbc7;
        justify-content: center;
        align-items: center;
        align-content: center;
    }
</style>




<body>



    <div class="container">
        <div class="row">
            <div class="col-md-8 justify-content-center">

                <div class="drop-down col-md-10 mt-5 py-5 outer justify-content-center">

                    <div class="drop-down ">
                        <h4>Select your brand</h4>

                        <select class="form-select list" id="list" aria-label="Default select example">
                            <option selected disabled>select</option>
                            @foreach($datas as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>

                            @endforeach


                        </select>

                    </div>

                    <h5>Select your choice</h5>
                    <select class="form-select item" id="prdtId">
                        <option value="">items</option>

                    </select>


                    <div class="priceDrop ">
                        <h6>price</h6>
                        <input type="text" id="prize" />
                    </div>



                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $(document).on('change', "#list", function() {
            var list_id = $(this).val();


            var op = " ";


            $.ajax({
                type: 'get',
                url: '/list',
                data: {
                    'id': list_id

                },

                success: function(data) {
                    op += '<option value="0"> choos product </option>';
                    for (var i = 0; i < data.length; i++) {
                        op = op + ` <option value='${data[i].id}'>${data[i].name}</option>`;

                    }

                    $('#prdtId').html(op);
                },
                error: function() {

                }


            })
        });
        $(document).on('change', "#prdtId", function() {
            var list_id = $(this).val();
            console.log(list_id);

            var op = " ";


            $.ajax({
                type: 'get',
                url: '/price',
                data: {
                    'id': list_id

                },
                dataType: 'json',

                success: function(data) {
                    console.log(data);
                    $('#prize').val(data.prize);


                },
            });
        });



    });
</script>




</html>