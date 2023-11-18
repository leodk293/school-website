const formBtn = document.getElementById("send");

const body = document.querySelector("body");

body.classList.add("animePage");

formBtn.addEventListener("click",(event)=>{
    alert('Your messsage was sended');
    event.preventDefault();
})

const animeText = document.querySelector("header .text h1")

document.addEventListener("DOMContentLoaded",()=>{
    setTimeout(
        animeText.style.transform = "scale(1.05)"
    ),1000
})