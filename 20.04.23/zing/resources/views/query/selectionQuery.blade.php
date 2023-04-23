<script>
    $(document).ready(function() {
        //addding table start
        var html = '<tr><th><input type="text" name="pname[]"></th><td><input type = "text" name="pdes[]"></td><td><input type = "text" name ="pprice[]"></td><td><button type ="button" class = "btn btn-danger" id ="remove" > remove </button> </td></tr>';
        var max = 3;
        var x = 1;
        $("#add").click(function() {
            if (x < max) {
                $('#addtable').append(html);

            }
        });

        $('#addtable').on('click', '#remove', function() {
            $(this).closest('tr').remove();


        });
        //addding table end

        //addding user without refresh
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
                    console.log(response);

                }

            });
        }
        // addding user without refresh end




    });
</script>