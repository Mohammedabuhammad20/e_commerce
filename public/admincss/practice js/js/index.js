
// loop

// for( let i = 0; i < 10; i++){
//     console.log(i);
// }
// // 
// let myfreinds = [ "osama" , "mohaamed" , "ahmed", "ali", "khaled"];

// for( let i = 0; i < 5; i++) {
//     console.log(myfreinds[i]);
// }


// // 
// let myfreind = [ 1, 2, "osama", "mohaamed", "ahmed",  6,"ali", "khaled"];

// let onlyname = [];

// for (let i = 0; i < myfreind.length; i++){
//     if ( typeof myfreind[i] === "srting"){
//         onlyname.push(myfreind[i]);
//     }
// }
// console.log(onlyname); 
// // 

// let proudcts = ["keyboaed", "mouse", "pen", "pad", "mointor"];

// let colors = ["Red", "green", "black"];
// let showcounts = 3;

let modles = [ 2020, 2021];

for(let i = 0; i < proudcts.length; i++) {
    console.log("#".repeat(15));

  console.log(proudcts[i]);
  console.log("#".repeat(15));
  console.log("colors: ")

  for ( let j = 0; j < colors.length; j++){
    console.log(colors[j]);
  }
  console.log("models : ")
  for( let k = 0; k < modles.length; k++ ){
    console.log(modles[k]);
  }
}
// practice
document.write(`<h1>show ${showcounts} proudcts<h1/>`);
for(let i = 0; i < showcounts; i++){
  document.write(`<div>`);
  document.write( `<h3> [${i+1}] ${proudcts[i]}</h3> `)
  for( let j = 0; j < colors.length; j++){
    document.write(`<p>${colors[j]}</p>`);
  }
  document.write(`<p>${colors.join("|")}</p>`)
}

// function practice( parametrs , Defult , Rest , loop , condition)

function showinfo(us = "unknwon", age = "unknwon", rt = 0, show = "yes",  ...sk){
document.write(`<div>`);
document.write(`<h2> welcome, ${us}</h2>`);
document.write(`<p> age: ${age}</p>`);
document.write(`<p> hour rate: $${rt}</p>`);
if (show=== "yes"){
  if (sk.length > 0){ 
    document.write(`<p> skills: ${sk.join(" | ")} </p>`)
  } else{
    document.write(`<p> skills: no skills </p>`);
  }
}else{
  document.write(`<p> skills is hidden</p>`);
}
  document.write(`</div>`);
}
showinfo("mohammed" , 38 ,20, "yes"  , "html");


// anonyumos function 

document.getElementById("show").onclick = function (){
  console.log("show");
};

// foreach

let alllis = document.querySelectorAll("ul li");
let alldvs = document.querySelectorAll(".contnt div") 

alllis.forEach(function (ele){
  ele.onclick = function(){
alllis.forEach(function (ele){
  ele.classList.remove("active")
})

    this.classList.add("active")
  }

  alldvs.forEach(function(ele) {
    ele.style.display = "none";
  });
})
// nented object

let user = {
  name: "mohammed",
  age: 27,
  skills: ["html", "css", "js"],
  availabke: false,
  adresses: {
    jordan: "amman",
    ksa: {
     one: "riadah",
      two: "mecca",
    },
  },
  checkav: function (){
    if (user.availabke === true){
      return `Free for work`;
    }
    else{
      return `not free`;
    }
  },
};

console.log(user.name);
console.log(user.age);
console.log(user.skills);
console.log(user.skills.join(" | "));
console.log(user.skills[2]);
console.log(user.adresses.jordan);
console.log(user.adresses.ksa);
console.log(user.adresses.ksa.one);
console.log(user.adresses.ksa.two);
console.log(user["adresses"].jordan);
console.log(user["adresses"].ksa.two);
console.log(user["adresses"]["jordan"]);
console.log(user["adresses"]["ksa"]['two']);

//this

let use = {
  age : 38,
  ageindays: function(){
    console.log(this);
    return this.age * 365;
  },
};

console.log(use.age)
console.log(use.ageindays)

// create and append element

let myelement= document.createElement("div");
let myattr = document.createAttribute("data");
let mytext = document.createTextNode("product");
let mycomment = document.createComment("this is div");

myelement.className="product";
myelement.setAttributeNode(myattr);
myelement.setAttribute("data", "test");

myelement.appendChild(mytext);
myelement.appendChild(mycomment);

document.body.appendChild(myelement);




function startCountdown() {

  let div = document.getElementById("con")

  let seconds = 5; // عدد الثواني

  function updateCountdown() {
    document.write(seconds );
      seconds--;

      if (seconds >= 0) {
          setTimeout(updateCountdown, 1000); // استدعاء نفس الدالة بعد ثانية واحدة
      } else {
         document.write(div)
      }
  }

  updateCountdown();
}

startCountdown();
// ----------------------------------



var targetValue = 500;
var progressBar = document.getElementById('progressBar');
var progressContainer = document.getElementById('progressContainer');


function calculateProgress() {
  var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  var documentHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (scrollTop / documentHeight) * 100;
  return scrolled;
}

function updateProgress() {
  var progress = calculateProgress();
  progressBar.style.width = progress + '%';
}

window.addEventListener('scroll', function() {
  if (calculateProgress() >= targetValue) {
    progressBar.style.width = targetValue + '%';
    window.removeEventListener('scroll', updateProgress);
  } else {
    updateProgress();
  }
});