document.getElementById("form-2").style.marginTop = 200 + "px";
document.getElementById("btn-2").style.display = "";
let nav = document.getElementById("form");
nav.style.display = "block";

// pareil mais en affichant seulement le bon en consult/creation
let btn2 = document.getElementById("btn-2");
btn2.addEventListener('click', function show(){
    // Si sonculstation
  if(document.getElementById('consulter').checked) {
    document.getElementById('consultation').style.display = "block";
    document.getElementById('creation').style.display = "none";

    // Si creation
  }else if(document.getElementById('creer').checked) {
    document.getElementById('creation').style.display = "block";
    document.getElementById('consultation').style.display = "none";
  }
  else { // Si aucune des deux
    document.getElementById('consultation').style.display = "none";
    document.getElementById('creation').style.display = "none";
  }
})
