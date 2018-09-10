console.log('Everything is loaded up!');

const animationDiv = document.querySelector('#myDiv');

    animationDiv.addEventListener('click',(e)=>{
        e.preventDefault();
        // add the animation effect
        animationDiv.classList.add('anotherCoolStyle');
        // remove animation effect after 3 seconds.
        setTimeout(function(){
            animationDiv.classList.remove('anotherCoolStyle');
        },1200);
    });
