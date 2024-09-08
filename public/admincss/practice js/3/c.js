// set var
let input = document.getElementById("in")
let btn = document.getElementById("btn")

// event
btn.addEventListener('click' , change)
// or btn.onclick = function (){}

// function
function change(){
    if(input.getAttribute('data-text') == "show"){
        input.setAttribute('type', 'text')
        input.setAttribute('data-text', 'hide')
        btn.innerHTML = "hide"
    }else{
        input.setAttribute('type', 'password')
        input.setAttribute('data-text', 'show')
        btn.innerHTML = "show"
    }
}