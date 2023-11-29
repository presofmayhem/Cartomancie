
    let togg1 = document.getElementById('titre_cate1');
    let togg2 = document.getElementById('titre_cate2');
    let togg3 = document.getElementById('titre_cate3');
    let conteiner1 = document.getElementById('conteiner1');
    let conteiner2 = document.getElementById('conteiner2');
    let conteiner3 = document.getElementById('conteiner3');

    togg1.addEventListener("click", () => {
    if(getComputedStyle(conteiner1).display == "none"){
        conteiner1.style.display = "grid";
    } else {
        conteiner1.style.display = "none";
    }
    })

    togg2.addEventListener("click", () => {
    if(getComputedStyle(conteiner2).display != "none"){
        conteiner2.style.display = "none";
    } else {
        conteiner2.style.display = "grid";
    }
    })

    togg3.addEventListener("click", () => {
    if(getComputedStyle(conteiner3).display != "none"){
        conteiner3.style.display = "none";
    } else {
        conteiner3.style.display = "grid";
    }
    })