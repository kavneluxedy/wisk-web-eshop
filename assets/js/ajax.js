var pass = document.getElementById("acc_pass").value;
var hidden = document.getElementById("hidden");
var show = document.getElementById("show");

$(document).ready(function () {
  $("#hidden").hide();
  $("a#show").on("click", function () {
    $("#hidden").show("");
    return false;
  });

  $("a#show").on("blur", function () {
    $("#hidden").hide("");
    return false;
  });
});

$(document).ready(function () {
  $("#hidden").hide();

  $("a#show").on("click", function () {
    $("#hidden").show("");
    return false;
  });

  $("a#show").on("blur", function () {
    $("#hidden").hide("");
    return false;
  });
});

function change_pass() {
  if (!empty(pass)) {
    text.style.display = "block";
    console.log(pass);
  } else {
    console.log("false");
  }
}