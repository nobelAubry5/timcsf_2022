function ancestor(node, match)
{
    if(!node)
    {
        return null;
    }
    else if(!node.nodeType || typeof(match) != 'string')
    {
        return node;
    }
    if((match = match.split('.')).length === 1)
    {
        match.push(null);
    }
    else if(!match[0])
    {
        match[0] = null;
    }
    do
    {
        if
        (
            (
                !match[0]
                ||
                match[0].toLowerCase() == node.nodeName.toLowerCase())
            &&
            (
                !match[1]
                ||
                new RegExp('( |^)(' + match[1] + ')( |$)').test(node.className)
            )
        )
        {
            break;
        }
    }
    while(node = node.parentNode);

    return node;
}
var objJSONErreurs= {
    "nom": {
        "vide": 'Vous devez entrer votre nom complet',
        "pattern": "Les chiffres, les lettres, les accents français, les espaces, les tirets et les apostrophes sont permis."
    },
    "courriel": {
        "vide": 'Vous devez entrer votre courriel',
        "pattern": "Les chiffres, les lettres, les accents français, les espaces, les tirets et les apostrophes sont permis."
    },
    "responsables":{
        "vide":'Vous devez choisir un destinataire',
        "pattern":""
    },
    "sujetMessage":{
        "vide": 'Vous devez entrer un sujet de message',
        "pattern": "Les chiffres, les lettres, les accents français, les espaces, les tirets et les apostrophes sont permis."
    },
    "message":{
        "vide":'Vous devez entrer un message',
        "pattern":"Les accents français, les espaces, les tirets et les apostrophes sont permis."
    },

}
var page =
    {
        liste: {nom: null, courriel: null, responsables: null, sujetMessage: null, message: null},

        initialiser: function () {
            document.querySelector(".bouton").formNoValidate = true;
        },

        validerChaine:function (evenement)
        {
            // evenement = objet présentant l'ensemble des informations au sujet de l'événement


            let objCible = evenement.currentTarget;
            let monPattern = "^" + objCible.pattern + "$";
            let conteneur =ancestor(objCible, '.col-3');
            let motif = new RegExp(monPattern);
            let strChaine = objCible.value;
            let label= ancestor(objCible,".effect-17");



//console.log(objCible);
            let erreurVerif = document.querySelector("#erreurVerif");
            if(strChaine!="")
            {
                if(motif.test(strChaine)===true)
                {

                    objCible.classList.remove('erreur');
                    conteneur.querySelector('.erreur__message').innerHTML = '';
                    conteneur.classList.remove("shake");
                    erreurVerif.value='true';
                    label.classList.remove("erreur__label");

                    if(!conteneur.querySelector('.spriteRETRO--ok')){
                        var nouveauSpan=document.createElement("span");
                        nouveauSpan.className="spriteRETRO spriteRETRO--ok";
                        conteneur.querySelector('p#parent').appendChild(nouveauSpan);
                    }

                }
                else
                {
                    label.classList.add("erreur__label");
                    conteneur.classList.add("shake");
                    objCible.classList.add('erreur');
                    conteneur.querySelector('.erreur__message').innerHTML = '<span class="spriteRETRO spriteRETRO--warning"></span>' + objJSONErreurs[objCible.id].pattern;
                    erreurVerif.value = 'false';
                    //element.classList.add("shake");
                    if(conteneur.querySelector('.spriteRETRO--ok'))
                    {
                        //conteneur.querySelector('.spriteRETRO--ok').classList.remove('spriteRETRO','spriteRETRO--ok');
                        conteneur.querySelector('.spriteRETRO--ok').remove();

                    }


                }
            }
            else
            {
                label.classList.add('erreur__label');
                objCible.classList.add('erreur');
                conteneur.querySelector('.erreur__message').innerHTML = '<span class="spriteRETRO spriteRETRO--warning"></span>' + objJSONErreurs[objCible.id].vide;
                conteneur.classList.add("shake");
                if(conteneur.querySelector('.spriteRETRO--ok'))
                {
                    //conteneur.querySelector('.spriteRETRO--ok').classList.remove('spriteRETRO','spriteRETRO--ok');
                    conteneur.querySelector('.spriteRETRO--ok').remove();
                }


            }
        },
        validerDestinataire:function (evenement){
            let objCible = evenement.currentTarget;
            let conteneur =ancestor(objCible, '.col-3');
            let select= document.getElementById("responsables");
            let optionSelIndex = select.options[select.selectedIndex].value;
            let optionSelectedText = select.options[select.selectedIndex].text;
            let label= ancestor(objCible,".effect-17");
            if (optionSelIndex == 0) {
                objCible.classList.add('erreur');
                conteneur.querySelector('.erreur__message').innerHTML = '<span class="spriteRETRO spriteRETRO--warning"><i class="fa fa-exclamation-circle" aria-hidden="true" style="font-size:30px;color:#DC0012;"></i></span>' + objJSONErreurs[objCible.id].vide;
                conteneur.classList.add("shake");
                label.classList.add('erreur__label');
            }
            else {
                label.classList.remove('erreur__label');
                conteneur.classList.remove("shake");
                //alert("Success !! You have selected Course : " + optionSelectedText); ;
            }
        }


    };


window.addEventListener("load", page.initialiser.bind(page));

//validations

document.getElementById("nom").addEventListener("blur", page.validerChaine.bind(page));
document.getElementById("courriel").addEventListener("blur", page.validerChaine.bind(page));
document.getElementById("sujetMessage").addEventListener("blur", page.validerChaine.bind(page));
document.getElementById("message").addEventListener("blur", page.validerChaine.bind(page));
document.getElementById("responsables").addEventListener("blur", page.validerDestinataire.bind(page));
