let trigger = document.querySelectorAll('.trigger');
let trigerContent = document.querySelectorAll('.trigger .triger-content');

if(trigger.length > 0){
    trigger.forEach(element => {
        element.addEventListener("click", (event) => {
            element.classList.toggle('open')
        });
    }); 
}   