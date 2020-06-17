alert('test');
console.log('test');

var pw = document.getElementById('pw');
var clickPw = document.getElementById('clickPw');
var show = document.getElementById("showPw").value;

console.log(clickPw);
console.log(pw);

pw.addEventListener(onKeyDown, function () {
  console.log(pw.value);
  show.innerHTML = pw.value;
});

function showHint() {
    if (pw.length == 0) {
        console.log('Erreur, veuillez entrer un caractère !');
        return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("show").innerHTML = pw;
        }
      };
      xmlhttp.open("GET", "gethint.php?q=" + pw, true);
      xmlhttp.send();
    }
  }