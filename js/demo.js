let inputTexte = document.getElementById("inputTexte");
let btnSaisie = document.getElementById("btnSaisie");


btnSaisie.addEventListener("click", () => {
    console.log(inputTexte.value);
})



console.log(btnSaisie);


let maVariable = 456;
let secondVariable = "Bonjour";



const CODE_ERREUR_1 = 789;

maVariable = 123;


if (true) {
    let secondVariable = 123;
    if (true) {
        console.log("seconde variable : " + secondVariable);
    }
} else {
    console.log("PAS OK");
    console.log(maVariable);
    console.log(secondVariable);
}

console.log("seconde variable programme : " + secondVariable);




