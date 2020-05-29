const button=document.getElementById('burger');
const nav=document.getElementById('navbar');
let isOpen=false;


// Open/Close Menus when clicked
button.addEventListener('click',()=>{
        if (isOpen){
            nav.style.maxHeight='75px';
            nav.style.paddingBottom='1.5rem';
            button.classList.remove("btnDown");
        }
        else{
            nav.style.maxHeight='500px';
            nav.style.paddingBottom='0';
            button.classList.add("btnDown");
        }
        isOpen = !isOpen;
});
