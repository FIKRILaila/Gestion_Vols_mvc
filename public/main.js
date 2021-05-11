


var check = document.querySelector("#aller-retour");
if(check.checked){
    document.querySelector("#show_type").style.display="block";
}else{
    document.querySelector("#show_type").style.display="none";
}

check.addEventListener('click',()=>{
    document.querySelector("#show_type").style.display="block"
});
document.querySelector("#aller-simple").addEventListener('click',()=>{
    document.querySelector("#show_type").style.display="none"
}); 

