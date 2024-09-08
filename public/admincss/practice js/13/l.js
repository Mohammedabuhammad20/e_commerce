let btn = document.getElementById("btn")


let div =document.getElementById("div")

let imgs = ["1.jpg" , "2.jpg", "3.png" , "4.webp" , "5.webp" , "6.webp"]


let back = Math.floor(Math.random() * imgs.length)




setInterval(() => {
      div.style.backgroundImage = 'url("img/'+  imgs[back]+'")'
}, 1000);  



window.onscroll = function scroll(){

    if ( window.scrollY >= 700){
    btn.style.display = "block"
   
  

    


       
    }else{

    
        btn.style.display = "none"
    }
}

btn.onclick = function(){
    window.scrollTo ({
        top : 0,
        behavior: "smooth"
    })
}

window.onscroll = function(){
let divoffsettop = div.offsetTop


    let divoutertheight = div.offsetHeight



    let windowheigt = this.innerHeight

console.log(windowheigt)
    let windowtop = this.pageYOffset
}


array = ["s" , "s" , "f" , ]

console.log(...array)