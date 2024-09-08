let btn = document.querySelector(".btn")
let div = document.querySelector(".squer")


var colors = ["red" , "blue", "green"]
var i = 0
btn.onclick = function(){

    div.style.backgroundColor = colors[i]; 
    i++

   if(i == 3 ){
    i=0
   }
}