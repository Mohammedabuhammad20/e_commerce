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


const hidden = document.querySelectorAll(".head")

hidden.forEach((el) => observer.observe(el))

let head = document.querySelector(".haed")