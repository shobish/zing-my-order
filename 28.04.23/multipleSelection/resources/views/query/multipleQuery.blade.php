<script>
$(document).ready(function(){

    
        
        var html='<tr><th><select class="form-group" id="categoryoption" name="categoryoption[]"><option>--select--</option><option>FOOD</option><option>DRESS</option><option>ELECTRONICS</option><option>HOMEAPPLIANCES</option><option>ACCESSORIES</option></select></th><th> <input type="text" name="categoryname[]" id="product_name"> </th><td><input type="text" name="categorydescription[]" id="product_description"> </td><td><input type="text" name="categoryprice[]" id="product_price"> </td><td><button type="button" class="btn btn-danger" id="removebtn">remove </button></td></tr>'
        var max=3;
        var x=1;
        $("#addbtn").click(function() {
            if (x < max) {
                $('#addtable').append(html);

            }
        });

        $('#addtable').on('click', '#removebtn', function() {
            $(this).closest('tr').remove();


        });
   

});





</script>