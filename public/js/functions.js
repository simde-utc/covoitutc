function proposerTrajet() {
    tmp = document.getElementById("addRide");
    tmp2 = document.getElementsByClassName("houdini");
    for(var i=0 ; i<tmp2.length ; i++) {
        tmp2[i].style.display = "none";
    }
    tmp.style.display = "block";
}

function chercherTrajet() {
    tmp = document.getElementById("searchRides");
    tmp2 = document.getElementsByClassName("houdini");
    for(var i=0 ; i<tmp2.length ; i++) {
        tmp2[i].style.display = "none";
    }
    tmp.style.display = "block";
}