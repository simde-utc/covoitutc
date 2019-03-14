function proposerTrajet() {
    tmp = document.getElementById("proposerTrajetBlock");
    tmp2 = document.getElementsByClassName("houdini");
    for(var i=0 ; i<tmp2.length ; i++) {
        tmp2[i].style.display = "none";
    }
    tmp.style.display = "block";
}

function chercherTrajet() {
    tmp = document.getElementById("chercherTrajetBlock");
    tmp2 = document.getElementsByClassName("houdini");
    for(var i=0 ; i<tmp2.length ; i++) {
        tmp2[i].style.display = "none";
    }
    tmp.style.display = "block";
}