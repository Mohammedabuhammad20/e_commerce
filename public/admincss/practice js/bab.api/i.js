


let usd = document.getElementById("usd") 
let amount = document.getElementById("amount")
let jod = document.getElementById("jod")


async function get (){
    const respo = await fetch ("https://api.currencyfreaks.com/v2.0/rates/latest?apikey=306c14f1b50544f69e45eb2fb7282997")
    const data = await respo.json()


jod.value = data.rates["JOD"]
usd.value = data.rates["USD"]

 amount.onkeyup = function aa(){

    usd.value *0.70
 }



}
get()
