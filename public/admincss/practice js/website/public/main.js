








let btn = document.getElementById("btn")
let land = document.getElementById("land")
let header = document.getElementById("header")

let home = document.querySelector('.active')
let body = document.body

let containe = document.querySelector(".containe")

let social = document.querySelector(".soical-media")
let contact = document.querySelector(".Contact-me")
let bar = document.getElementById("bar")





btn.onclick = function show(){

    containe.style.display = "flex"
// btn.style.display = 'none'
btn.classList.add('dis')
contact.style.display = "block"


header.classList.add('side')


header.classList.add('header-side')
button.style.display = "block"



}






home.onclick = function home() {
   land.classList.remove('hide')

   header.classList.remove('side') 

}
let word = document.getElementById("word")




setInterval(() => {
    word.classList.toggle("word")

}, 1000);


// let wordd = document.getElementById("word2")

// setInterval(() => {
//     wordd.classList.toggle("word")

 
// }, 2500);
// let img = document.getElementById("img")
// let imgs = ["1.jpg" ,"2.jpg", "3.jpg" , "4.jpg" , "5.jpg"]


// setInterval(() => {
//     let back = Math.floor(Math.random() * imgs.length)
// img.style.backgroundImage = 'url("img/'+  imgs[back]+'")'
// }, 1000);



const spans = document.querySelectorAll('.skills-progress span')

spans.forEach((span) =>
{span.style.width = span.dataset.width;

span.innerHTML = span.dataset.width
})


const observer = new IntersectionObserver ((entries) =>{
    entries.forEach((entry) => {
        console.log(entry)

        if(entry.isIntersecting){
            entry.target.classList.add('show')
        }else{
            entry.target.classList.remove('show')
        }

    })
})


let skills = document.querySelectorAll(".skills-progress")
skills.forEach((el) => observer.observe(el))


let head = document.getElementById("head")

window.onload = function(){
    head.classList.add("showhead")
}

let langauge = document.querySelectorAll(".langauge-level")


const observerr = new IntersectionObserver ((entries) =>{
    entries.forEach((entry) => {
        console.log(entry)

        if(entry.isIntersecting){
            entry.target.classList.add('show')
        }else{
            entry.target.classList.remove('show')
        }

    })
})

langauge.forEach((el) => observerr.observe(el))






myskills.onclick = function to(){
    window.scrollTo({
        top : 600,
        behavior: 'smooth'
    })
};


let mycourses = document.getElementById("mycourses")

mycourses.onclick = function(){
    window.scrollTo({
        top : 1796,
        behavior : "smooth"
        

    })
};







console.log(scrollY)

let contactme = document.getElementById("contact")

contactme.onclick = function(){

    window.scrollTo({
        top : 2905,
        behavior: 'smooth',
        
    })
};


let soicalmedia = document.querySelector(".soical_media")

soicalmedia.onclick = function(){

    window.scrollTo({
        top : 2580,
        behavior :'smooth'
    })
};

let button = document.getElementById("button")

button.onclick = function(){

    window.scrollTo({
        top: 0,
        behavior:'smooth'
    })


}

let facebook = document.getElementById("face")
facebook.onclick = function (){
    open("https://www.facebook.com/mohammed.abuhammad.9?mibextid=LQQJ4d")
}

let insta = document.getElementById("insta")

insta.onclick = function(){
    open("https://www.instagram.com/mohammedabuhammad96/?igsh=MXdwOXZpMTQ2aHo4aQ%3D%3D&fbclid=IwZXh0bgNhZW0CMTAAAR2ZP7BM7fMYIc5ZJOz1I9dAIq4JFLXyhMG-6GJdhNdX1KLyEV2CX7NFNDs_aem_AdlEDGbb52RmF81Vn3MIm2ua2Np0JFbm1rM6XuA64kYy3Akzi2Cp8wPGBMa0XXuH3uF5WsAcqURULuhVBc8518Ff")
}


let linkedin = document.getElementById("linkedin")
linkedin.onclick = function(){

    open("https://www.linkedin.com/in/mohammed-abu-hammad-803986263/")
}


let github = document.getElementById("git")
github.onclick = function(){
    open("https://github.com/Mohammedabuhammad20/git_project/commits?author=Mohammedabuhammad20")
}


