let myarray = [1, 3 , 4 , 5 ,6]
let menew = []

for( i = 0 ; i < myarray.length; i++){

    menew.push(myarray[i] + myarray[i])
    console.log(menew)


}
console.log("example loop (2)")



function g (start , end ,only){
    for( i = start; i<= end; i++){

        if( i === only )
            {
                continue;

        }
        console.log(i)
    
    }
    

    }
    g(1996 ,2024 , 2018 )
    






console.log("###############################################################")

// map //////////////////////////////////////////////////////////////////////////////////
let swap = "mOHAmmed"

let sw = swap.split("").map(
    function(ele){
        return ele === ele.toUpperCase() ? ele.toLocaleLowerCase() : ele.toUpperCase()
    } ).join("")

    console.log(sw)

console.log("example.map (2)")

let myarrayy = [1, 3 , 4 , 5 ,6]
let meneww =[]
let add = myarrayy.map(
    function(element , index , arr){
        console.log(element)
        console.log(index)
        console.log(arr)
     console.log(this)   
    }
)
// map //////////////////////////////////////////////////////////////////////////////////


console.log("fllter ///////////////////////////////////////////////////////////////////////////////")


let friends =  [ "ali" , "mohammd", "ahmad", "hamza", "abdulla", "fadi" ]

let filterfriend = friends.filter(
    function(el){
      return el.startsWith("a")
      
    }  
)
console.log(filterfriend)


let number = [0,1,2,3,4,5,6,7,8,9,10]
let evevnumber = number.filter (
    function(e){
        return e % 2 === 0
    }
)
console.log(evevnumber)
// //////////////////////////////////////////


let mix = "AVFS5432FD";

 let mixed = mix.split("")
 .filter(
    function(ee){
        return !isNaN(parseInt(ee))
    }).map(function(ee){
      return  ee *ee
    }).join("")
    console.log(mixed)

    let fff = "mohammed fda"

    console.log(fff.includes("o", 1))



console.log("return return return return return return return return return return return ")
    function a(s , e)
    {
        for(let  i =s ; i<= e ; i++){
            if (i === 15){
                return 'intrupting'
            }
            console.log(i)
        }
        
    }
a (1 ,20)
// ///////////////////////////////////////////

let array = [1 , 2 ,3 ,4];
let newarray = []
for( let j=0 ; j <array.length ; j++){
newarray.push(array[j] + array[j])
}
console.log(newarray)
