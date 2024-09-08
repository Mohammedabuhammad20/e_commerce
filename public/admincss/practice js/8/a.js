async function get(){
    const responsve = await fetch("https://anapioficeandfire.com/api/characters/583")
    const  data = await responsve.json()

    console.log(data[0])

  
}


get()
console.log(screen.width)
console.log(screen.height)