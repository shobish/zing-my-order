<script>
    $(document).ready(function() {
        var html = '<tr><th><input type="text"name = "name[]" > </th> <td> <input type = "text" name = "dec[]" > </td>  <td> <input type = "text" name = "price[]" > </td><td> <button type ="button" class = "btn btn-danger" id ="remove" > remove </button> </td></tr>';
        var max = 3;
        var x = 1;
        $("#add").click(function() {
            if (x < max) {
                $('.table-dark').append(html);


            }
        });

        $('.table-dark').on('click', '#remove', function() {
            $(this).closest('tr').remove();


        });

    });
</script>