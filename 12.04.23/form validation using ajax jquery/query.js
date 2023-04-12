$("#name,#email,#address").css("background-color", "black");

$("$btnSubmit").click(function () {
  var name = $("name").val();
  var email = $("email").val();
  var address = $("address").val();

  $.post("#", {}, function (response) {
    $("#response").html(
      "<div class='alert alert-success'>" + response + message + "</div>"
    );
  });
});


<script>
    $("#btn-submit").click(function() {
        var name = $("name").val();
        var email = $("email").val();
        var address = $("address").val();

        $.post("{{url('/ajax')}}", {
            name: name,
            email: email,
            address: address
        }, function(response) {
            $("#response").html(
                "<div class='alert alert-success'>" + response + message + "</div>"
            );
        });
    });
</script>