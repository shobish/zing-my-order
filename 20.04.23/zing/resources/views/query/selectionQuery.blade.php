<script>
    $(document).ready(function() {
      
        //addding table start
        var html = '<tr><th><input type="text" name="pname[]" ></th><td><input type = "text" name="pdes[]"></td><td><input type = "text" name ="pprice[]"></td><td><button type ="button" class = "btn btn-danger" id ="remove" > remove </button> </td></tr>';
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

      
        //addding table start
        var edithtml = '<tr><th><input type="text" name="pname[]" value="" ></th><td><input type = "text" name="pdes[]"></td><td><input type = "text" name ="pprice[]"></td><td><button type ="button" class = "btn btn-danger" id ="editremove" > remove </button> </td></tr>';
        var max = 3;
        var x = 1;
        $("#editadd").click(function() {
            if (x < max) {
                $('#edittable').append(edithtml);

            }
        });

        $('#edittable').on('click', '#editremove', function() {
            $(this).closest('tr').remove();


        });


        $(document).on('click', '#dataEdit', function(e) {
            e.preventDefault();
            var val_id = $(this).val();
            console.log(val_id);
        });


    });
</script>