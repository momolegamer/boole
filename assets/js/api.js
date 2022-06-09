//recupere l'url et la stock dans la const queryString
const queryString = window.location.search;

// recupere dans la const queryString  les parametres de l'url
const urlParams = new URLSearchParams(queryString);

// recupere le parametre "id"
const id = urlParams.get('id');

//recupere la data de l'API

fetch('https://fr.openfoodfacts.org/categorie/laits.json')
// une fois les donnees recuperees via l'url on effectue .then et les transforme en objet json 
.then(res => res.json())
// data contient les données transformées en json
.then(data => {
    updateDOM(data)
});

// afficher tous les mots cles de tous les produits
function updateDOM(data) {
    let keywords = document.getElementById("keywords");
    //console.log(data.products._keywords);
    for(i=0; i<data.products.length; i++){
        for(j=0; j<data.products[i]._keywords.length; j++){
            var key = data.products[i]._keywords[j];
            var option = "<option>"+key+"</option>"
            $("#keywords select").append(option); 
        }
        
    }
   
};
