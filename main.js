let mymessage = document.querySelector(".message");
let uname = document.getElementById("uname");
let myeye = document.getElementById("icons");

function showmessage () {  
    if(uname.value.length <= 8){
    mymessage.classList.add("show")
    message.innerHTML = "Please make sure characters is more than 8" ;
    return false;
    }else{
    mymessage.classList.add("show")
    message.innerHTML = "Done" ;
    return true;
    }
}
showpass.onclick = function (){
    myeye.className = '';
    myeye.className = 'far fa-eye';
    pass.type = "text" 
}