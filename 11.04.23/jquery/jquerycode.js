$("document").ready(function () {
  $("#pic").fadeToggle(3000);

  $("#change").fadeToggle(5000);
  function changecolor() {
    $(".sec1").css("background-color", "red");
  }

  $("#btn").click(function () {
    $("#imgs").css("width", "500px");
    $("#pic").fadeToggle(3000);
  });
});
