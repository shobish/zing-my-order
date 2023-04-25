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

        // addding user without refresh end


        //addding user start
        // $(document).on('click', "#sumbit", function(e) {
        //     e.preventDefault(); //
        //     var category = $('#category').val();
        //     var pname = $('#pname').val();
        //     var pdes = $('#pdes').val();
        //     var pprice = $('#pprice').val();
        //     var csrf = $('input[name="_token"]').val();
        //     $.post("{{url('/addselection ')}}", {

        //         category: category,
        //         pname: pname,
        //         pdes: pdes,
        //         pprice: pprice,
        //         _token: csrf

        //     }, function(response) {
        //         if (response.status == 400) {
        //             console.log(response.error);
        //             $('.errordata').html("");
        //             $('.errordata').addClass("alert alert-danger");
        //             $.each(response.error, function(index, value) {

        //                 $('.errordata').append('<li>' + value + '</li>')
        //             })
        //         } else {
        //             $('.errordata').html("<div class='alert alert-success close'>" + response.message + "</div>");
        //             $('#selectionform').trigger('reset');
        //         }


        //     });


        // });
        //addding user end

        //delette
        // $(document).on('click', '#dataDelete', function(e) {
        //         e.preventDefault();
        //         var val_id = $(this).val();
        //         console.log(val_id);

        //     })

        //     <
        //     !--
    });
</script>