

function myFunction(){
    var x = document.getElementsByClassName("hide");
     
    for(i=0 ; i<x.length ; i++){
        if(x[i].style.display === "none"){
            x[i].style.display = "inline-block";
        }
        else x[i].style.display = "none";
    }
}
