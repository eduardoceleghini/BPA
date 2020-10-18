function populate(s1, s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";
    if (s1.value == "assistenciaTecnica"){
        var optionArray = ["|", "aparelhoDeSom|Aparelho de Som", "notebook|Notebook", "celular|Celular", "arCondicionado|Ar Condicionado", "computadorDesktop|Computador Desktop"];
    }else if (s1.value == "designTecnologia"){
        var optionArray = ["|", "desenvolvimentoSites|Desenvolvimento de Sites", "webDesign|Web Design", "criacaoLogos|Criação de Logos", "criacaoMarcas|Criação de Marcas"];
    }else if (s1.value == "servicosDomesticos"){
        var optionArray = ["|", "diarista|Diarista", "baba|Babá", "cozinheiro|Cozinheiro", "limpezaPiscina|Limpeza de Piscina"];
    }else if (s1.value == "reformas"){
        var optionArray = ["|", "eletricista|Eletricista", "pintor|Pintor", "chaveiro|Chaveiro", "pedreiro|Pedreiro", "encanador|Encanador"];
    }
    for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}