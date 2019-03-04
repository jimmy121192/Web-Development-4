var title = document.getElementById("title"),
    desc = document.getElementById("description"),
    accept = document.getElementById("accept");


function clearBG1(){
   
    title.style.backgroundColor="white"
}
function clearBG2(){
   
    desc.style.backgroundColor="white"
}
function clearBG3(){
   
    box3.style.backgroundColor="white"
}

function isBlank(){
    if(!title.value){
        title.style.backgroundColor="red";

    }
    if(!desc.value){
        desc.style.backgroundColor="yellow";

    }
    if(accept.checked == false){
        box3.style.backgroundColor="red";
    }
    
}
function mySubmitFunction(e) {
    e.preventDefault();
    isBlank();
    return false;
  }