// https://www.themealdb.com/api/json/v1/1/filter.php?i={searchterm};
// https://www.themealdb.com/api/json/v1/1/lookup.php?i={id};

// setup var

let searchinput = document.querySelector('.search-input')
let searchbtn = document.getElementById('search-button')
let resultarea = document.querySelector('.result')

// events
searchbtn.addEventListener('click', getrecipes)
function getrecipes()
{
    let searchterm = searchinput.value.trim()
    let apiurl =  'www.themealdb.com/api/json/v1/1/filter.php?c=${Seafood}'

    fetch(apiurl).then((res) =>{
     if (res.ok)
        return res.json()
     
    })
    .then((data) => {
        console.log(data)
    })
    // function displayrecipe (recipes){
    //     if (recipes.meals.length == 0)
    //         resultarea.innerHTML = "no data"
    //     return;
    // }
    // recipes.meals.forEach((recipe) => {
    //     resultarea.innerHTML += `
    //     <div class="card">
    //     <div class="card-img">
    //         <img src="${recipe.strMealThumb}" alt="">
    //     </div>
    //     <div class="card-info1">
    //         <h2> ${recipe.strMeal}</h2>
    //         <a href="#"> get recipe</a>
    //     </div>`
    // }) ;
}
