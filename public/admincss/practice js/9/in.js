let arrow = document.getElementById("arrow")
let arrow2 = document.getElementById("arrow-right")
let sidebar =  document.getElementById("sidebar")
let fav = document.getElementById("fav")
arrow.addEventListener('click', function close(){
   sidebar.style.display= ("none")
    arrow2.style.display = ("block")
    fav.style.display = ("block")
   
   
   })
   arrow2.onclick = function open(){
    sidebar.style.display = ("block")
   arrow2.style.display = ("none")
    arrow.style.display = ("block")
   }
  