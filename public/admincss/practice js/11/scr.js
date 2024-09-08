let bill = document.getElementById("bill")

let tip = document.getElementById("tip")
let btn= document.getElementById("btn")
let total = document.getElementById("total")
let good = document.getElementById("good")
let timer = document.querySelector("h3")

let swap = document.getElementById("swap")

let container = document.getElementById("container")


let body = document.body
btn.onclick = function click(){




    

   
if(bill.value !=""){
    total.value =  +bill.value + +tip.value 
    btn.style.backgroundColor = 'rgb(14, 174, 14)'
    good.classList.add("r")
}else{


total.value =""
btn.style.backgroundColor = 'red'


}


setTimeout(() => {
    bill.value = ""
    tip.value = "";
    total.value = ""
    good.classList.remove("r")


},5000);

}


swap.onclick = function swap(){

    body.style.zIndex = "-1"

}