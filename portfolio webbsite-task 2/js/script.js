const texts = ["Full stack Web Developer","Expert Coder at Coding Ninjas"];
let count = 0;
let index = 0;
let currText = "";
let letter = "";

(function type() {
    if(count === texts.length){
        count = 0;
    }

    currText = texts[count];
    letter = currText.slice(0 , index++);

    document.querySelector(".typing").textContent = letter;
    if(letter.length === currText.length){
        count++;
        index = 0;
    }
    setTimeout(type,400);
})();