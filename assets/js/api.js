//recupere l'url et la stock dans la const queryString
const queryString = window.location.search;

// recupere dans la const queryString  les parametres de l'url
const urlParams = new URLSearchParams(queryString);

// recupere le parametre "id"
const id = urlParams.get('id');

//recupere la data de l'API
const searchTerm = queryString.split("/")[1];
console.log(searchTerm);

fetch('https://fr.openfoodfacts.org/categorie/'+searchTerm+'.json')
// une fois les donnees recuperees via l'url on effectue .then et les transforme en objet json 
.then(res => res.json())
// data contient les données transformées en json
.then(data => {
    updateDOM(data)
});

// afficher tous les mots cles de tous les produits
function updateDOM(data) {
    let keywords = document.getElementById("keywords");
    let prod = document.getElementById("products");
    //console.log(data.products._keywords);
    for(i=0; i<data.products.length; i++){
        for(j=0; j<data.products[i]._keywords.length; j++){
            var key = data.products[i]._keywords[j];
            var option = "<option>"+key+"</option>"
            $("#keywords select").append(option); 
        }
    }
    keywords.querySelector("select").addEventListener("input", (e)=>{document.cookie=`kw=${e.target.value}`; console.log(e.target.value);});
    for(i=0; i<data.products.length; i++){
            var key = data.products[i].product_name;
            var option = "<div>"+key+"</div>";
            var img = "<img style='height: 200px;width: 200px;' src="+data.products[i].image_front_small_url+">";
            $("#products").append(option);
            $("#products").append(img);
        }
    
   
};
