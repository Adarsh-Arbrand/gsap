
let next = gsap.timeline()

function landing(){
    let a = 0
    setInterval(() => { 
        a = a + Math.floor(Math.random()*15)
        document.querySelector('.loding h1').innerHTML = a+"%"
        
        if (a < 100){
            document.querySelector('.loding h1').innerHTML = a+"%"
        }else{
            document.querySelector('.loding h1').innerHTML = "100"+"%"
            next.to(".loding", {
                transform:"translateY(-100%)",
                // opacity:0,
                
            })
        }

    }, 150);

}

landing()


next.to(".page h1",{
    transform:"translateX(-100%)",
    fontWeight:"100",
    scrollTrigger:{
        trigger:".page",
        scroll:"body",
        // markers:true,
        start:" top 0",
        end:"top -100%",
        scrub:3,
        pin:true,
    }
})