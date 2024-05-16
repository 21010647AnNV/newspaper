document.getElementById("LOGIN").onclick = function(event) {
  var slanjeForme = true;

  // name usera mora biti uneseno
  var poljename = document.getElementById("name");
  var name = document.getElementById("name").value;
  if (name.length == 0) {
    slanjeForme = false;
    poljename.style.border="1px dashed red";
    document.getElementById("porukaname").innerHTML="<br>Unesite name!<br>";
  }

  // lastname usera mora biti uneseno
  var poljelastname = document.getElementById("lastname");
  var lastname = document.getElementById("lastname").value;
  if (lastname.length == 0) {
    slanjeForme = false;
    poljelastname.style.border="1px dashed red";
    document.getElementById("porukalastname").innerHTML="<br>Unesite lastname!<br>";
  }

  // name account mora biti uneseno
  var poljeUsername = document.getElementById("username");
  var username = document.getElementById("username").value;
  if (username.length == 0) {
    slanjeForme = false;
    poljeUsername.style.border="1px dashed red";
    document.getElementById("porukaUsername").innerHTML="<br>Unesite name account!<br>";
  }

  // Provjera podudaranja lozinki
  var poljePass = document.getElementById("password");
  var pass = document.getElementById("password").value;
  var poljePassRep = document.getElementById("passwordRep");
  var passRep = document.getElementById("passwordRep").value;
  if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
    slanjeForme = false;
    poljePass.style.border="1px dashed red";
    poljePassRep.style.border="1px dashed red";
    document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>";
    document.getElementById("porukaPassRep").innerHTML="<br>Lozinke nisu iste!<br>";
  }

  if (slanjeForme != true) {
    event.preventDefault();
  }
};

function myFunction1() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction2() {
  var x = document.getElementById("passwordRep");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
