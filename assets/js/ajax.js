// var pass = document.getElementById("acc_pass").value;
// var hidden = document.getElementById("hidden");
// var show = document.getElementById("show");

$(document).ready(function () {
    $("#hidden").hide("fast");
    $("#show").on("click", function () {
      $("#hidden").show("fast");
      return false;
    });

    $("a#show").on("blur", function () {
      $("#hidden").hide("fast");
      return fals;
    });
  });

// function change_pass() {
//   if (!empty(pass)) {
//     text.style.display = "block";
//     console.log(pass);
//   } else {
//     console.log("false");
//   }
// }