// Provjera forme prije slanja
document.getElementById("slanje").onclick = function(event) {
  var slanjeForme = true;

  // title news (5-30 znakova)
  var poljeTitle = document.getElementById("title");
  var title = document.getElementById("title").value;
  if (title.length < 5 || title.length > 55) {
    slanjeForme = false;
    poljeTitle.style.border="2px solid red";
    document.getElementById("porukaTitle").style.color = "red";
    document.getElementById("porukaTitle").style.padding = "0 5px";
    document.getElementById("porukaTitle").innerHTML="title news mora imati između 5 i 55 znakova!<br>";
  }

  // Kratki sadržaj (10-100 znakova)
  var poljeAbout = document.getElementById("abstract");
  var about = document.getElementById("abstract").value;
  if (about.length < 10 || about.length > 100) {
    slanjeForme = false;
    poljeAbout.style.border="2px solid red";
    document.getElementById("porukaAbout").style.color = "red";
    document.getElementById("porukaAbout").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
  }

  // Sadržaj mora biti unesen
  var poljeContent = document.getElementById("text");
  var content = document.getElementById("text").value;
  if (content.length == 0) {
    slanjeForme = false;
    poljeContent.style.border="2px solid red";
    document.getElementById("porukaContent").style.color = "red";
    document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
  }

  // image mora biti unesena
  var poljeimage = document.getElementById("image");
  var pphoto = document.getElementById("image").value;
  if (pphoto.length == 0) {
    slanjeForme = false;
    poljeimage.style.border="2px dashed red";
    poljeimage.style.padding="13px 0 0 10px";
    document.getElementById("porukaimage").style.color = "red";
    document.getElementById("porukaimage").style.padding = "0 5px";
    document.getElementById("porukaimage").innerHTML="image mora biti unesena!<br>";
  }

  // category mora biti odabrana
  var poljeCategory = document.getElementById("category");
  if(document.getElementById("category").selectedIndex == 0) {
    slanjeForme = false;
    poljeCategory.style.border="2px dashed red";
    document.getElementById("porukacategory").style.color = "red";
    document.getElementById("porukacategory").style.padding = "0 5px";
    document.getElementById("porukacategory").innerHTML="category mora biti odabrana!<br>";
  }

  if (slanjeForme != true) {
    event.preventDefault();
  }
};
