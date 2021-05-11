

form = document.querySelector("#passager");
document.querySelector("#nbr_person").addEventListener("keyup",function(){
    var nbr=document.querySelector("#nbr_person").value;
    
    for(i=0;i<nbr;i++){
        var div = document.createElement("div");
        div.className = "form-control mb-4";
        var nom = "nom" + i ;
        var prenom = "prenom" + i;
        var dateNaiss = "dateNaiss" + i ;
        div.innerHTML = `<div class="mb-3">
        
                            <label for="${nom}" class="mb-2">Nom </label>
                            <input type="text" name="${nom}" id="${nom}" class="form-control">

                            <label for="${prenom}" class="mb-2">Prénom </label>
                            <input type="text" name="${prenom}" id="${prenom}" class="form-control">

                            <label for="${dateNaiss}" class="mb-2">Date de naissance </label>
                            <input type="date" name="${dateNaiss}" id="${dateNaiss}" class="form-control">
                            
                        </div>`   
                                
                        form.appendChild(div);   
    }
});

