
let row = document.getElementById("rows")
let columns = document.getElementById("column")

let btn = document.getElementById("btn")

let body =document.body
btn.addEventListener('click', createtable) 
 function createtable (){


let body = document.body
let table = document.createElement("table")

  
    for( var i =0 ; i<row.value ; i++){
        let tr = document.createElement("tr")
     
        table.appendChild(tr)
        for( var j =0 ; j < columns.value ; j++){
            let td = document.createElement("td")
            let txt =  document.createTextNode("item text")
           td.appendChild(txt)
        //    or td.innerhtml = ("item text")




         tr.appendChild(td)
        }
    }
columns.value = ""
row.value = ""

    body.appendChild(table)



    }
  


