$(document).ready(function () {
  $("#calculatorForm").submit(function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $("#resultOrErrorContainer").hide();
    $('button[type="submit"]').prop("disabled", true);
    $(".loader").show();
    $.ajax({
      type: "POST",
      url: "index.php?action=calculate",
      data: formData,
      dataType: "json",
      success: function (response) {
        $(".loader").hide();
        $('button[type="submit"]').prop("disabled", false);
        if (response.hasOwnProperty("result")) {
          $("#resultOrErrorValue").text("Result: " + response.result);
        } else {
          console.error("Error: Result not found in response");
          $("#resultOrErrorValue").text(response.error);
        }
        $("#resultOrErrorContainer").show();
      },
      error: function (xhr, status, error) {
        console.error("Error:", xhr.responseText);
        $(".loader").hide();
        $('button[type="submit"]').prop("disabled", false);
        $("#resultOrErrorValue").text(xhr.responseText);
        $("#resultOrErrorContainer").show();
      },
    });
  });
});
