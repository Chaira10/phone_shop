const btn = document.querySelector(".logo1");
const sectionOne = document.querySelector(".section1");
let menuOpen = false;
btn.addEventListener("click", ( )=>{
    let btnClick = gsap.timeline()
    if(!menuOpen){
        btn.classList.add("open");
        menuOpen = true;
        btnClick.to(".section1",{
            autoAlpha : 0
        })
        btnClick.to(".content-ul",{
            autoAlpha : 1,
            y : 0
        })
    }else{
        btn.classList.remove("open");
        btnClick.to(".content-ul",{
            autoAlpha : 0,
            y : -40
        })
        btnClick.to(".section1",{
            autoAlpha : 1
        })
        menuOpen = false;
    }
})

// =====================  smooth scroll  ==========================================
// gsap.registerPlugin(ScrollTrigger);
// locomotive scroll
// const locoScroll = new LocomotiveScroll({
//     el: document.querySelector(".container"),
//     smooth: true
// });

// GSAP Animation
const tl = gsap.timeline({defaults: {duration: 0.7, ease: Back.easeOut.config(1.7)} })

tl.from(".logo",{
    scale : 0,
})
// .from("nav ul li",{
//     y : -50,
//     stagger : 0.2
// })
.from(".social-media a",{
    y : 100,
    rotate : "180deg",
    autoAlpha : 0,
    stagger : 0.2
})
.from(".text h1",{
    y : 100,
    autoAlpha : 0,
})
.from(".text p",{
    y : 100,
    autoAlpha : 0,
})
.from(".text a",{
    y : 100,
    autoAlpha : 0,
})
.from("#town1", {
    scaleY : 0,
    transformOrigin : "bottom",
    duration: 0.5
})
.from("#town2", {
    scaleY : 0,
    transformOrigin : "bottom",
    duration: 0.5
})
.from("#town3", {
    scaleY : 0,
    transformOrigin : "bottom",
    duration: 0.5
})
.from("#town4", {
    scaleY : 0,
    transformOrigin : "bottom",
    duration: 0.5
})
.from("#town5", {
    scaleY : 0,
    transformOrigin : "bottom",
    duration: 0.5
})
.from("#town6", {
    scaleY : 0,
    transformOrigin : "bottom",
    duration: 0.5
})
.from("#pencil", {
    x : 50,
    autoAlpha : 0,
    duration: 0.5
})
.from("#paper", {
    x : 50,
    autoAlpha : 0,
    duration: 0.5
})
.from("#town7", {
    scaleY : 0,
    transformOrigin : "bottom",
    duration: 0.5
})
.from("#man", {
    x : -50,
    autoAlpha : 0,
    duration: 0.5
})
.from("#phone", {
    x : -50,
    autoAlpha : 0,
    duration: 0.5
})
.from("#town8", {
    scaleY : 0,
    transformOrigin : "bottom",
    duration: 0.5
})
.from("#town9", {
    scaleY : 0,
    transformOrigin : "bottom",
    duration: 0.5
})

// Animation when Scroll

let tlsvg = gsap.timeline({
    scrollTrigger: {
        trigger: ".text",
        start: "top bottom",
        end: "center top",
        scrub: true,
        // markers: true
      }
})
tlsvg.to(".svg", {
    scale : 1.8,
    duration :1
})

let tltop = gsap.timeline({
    scrollTrigger: {
        trigger: ".teks2 h4",
        start: "top bottom",
        end: "center top",
        scrub: true,
        // markers: true
      }
})
tltop.from(".teks2 h1", {
    x : -150, 
    autoAlpha : 0,
    duration : 1
})
tltop.from(".teks2 p", {
    autoAlpha : 0,
    x : 150, 
    duration : 1
})
tltop.from(".teks2 a", {
    autoAlpha : 0,
    x : -150, 
    duration : 1
})
let tl1 = gsap.timeline({
    scrollTrigger: {
        trigger: ".about2",
        start: "top bottom",
        end: "center top",
        scrub: true,
        // markers: true
      }
})
tl1.from(".about2-teks h4", {
    y : 150, 
    duration : 1
})
tl1.from(".about2-teks h1", {
    y : 150, 
    duration : 1
})
tl1.from(".about2-teks p", {
    y : 150, 
    duration : 1
})
tl1.from(".about2-teks a", {
    y : 150, 
    duration : 1
})
tl1.from("#box-top", {
    y : 150, 
    duration : 1
}, "2")
tl1.from("#box-left", {
    x : -150, 
    duration : 1
}, "2")
tl1.from("#box-right", {
    x : 150, 
    duration : 1
}, "2")
tl1.from("#part-right", {
    y : -150, 
    duration : 1
}, "2")
tl1.from("#part-left", {
    x : 150, 
    duration : 1
}, "2")


let tl2 = gsap.timeline({
    scrollTrigger: {
        trigger: ".section4 p",
        start : "top center",
        scrub: true,
        // pin : true,
    }
})
tl2.to("#chart-done", {
    y : -150, 
    duration : 1
})

let tl3 = gsap.timeline({
    scrollTrigger: {
        trigger: "#token-information",
        start : "top center",
        scrub: true,
        // pin : true,
    }
})
tl3.from("#force1", {
    x : 1154, 
    duration : 1,
    autoAlpha : 0,
})
tl3.from("#token-name", {
    x : 991, 
    autoAlpha : 0,
    duration : 1,
}, "-= 2")

let tl4 = gsap.timeline({
    scrollTrigger: {
        trigger: ".section5",
        start : "top center",
        scrub: true,
        // pin : true,
    }
})
tl4.from(".h1-members", {
    y : -400, 
    duration : 1,
}, "-= 2")
tl4.from("#container2-card51", {
    x : 300, 
    duration : 1,
}, "-= 2")
tl4.from("#container2-card52", {
    x : -300, 
    duration : 1,
}, "-= 2")
tl4.from("#container2-card53", {
    x : 300, 
    duration : 1,
}, "-= 2")
tl4.from(".container-card5-advisors .card5", {
    y : 200, 
    stagger : 0.2,
    duration : 0.4,
}, "-= -2")
tl4.from(".h1-advisor", {
    scale : 0, 
    duration : 1,
}, "-= -2")

// Token Allocation
let tl5 = gsap.timeline({
    scrollTrigger: {
        trigger: "#token-allocation",
        start : "top center",
        scrub: true,
        // pin : true,
    }
})
tl5.from("#svg-container", {
    rotation : 360,
    scale : 0,
    transformOrigin : "center",
}, "-= 2")
tl5.from("#elipse-bg", {
    scale :0,
    transformOrigin : "center",
}, "-= 2")
tl5.from("#Group_6, #Group_5, #Group_4, #Group_3, #Group_2, #Group_1", {
    autoAlpha : 0, 
    y : -100
}, "-= 2").from("#Group", {
    autoAlpha : 0
}, "-= 2")

// Roadmap
let tl6 = gsap.timeline({
    scrollTrigger: {
        trigger: "#roadmap",
        start : "top center",
        scrub: true,
        // pin : true,
    }
})
tl6.from(".animation", {
    scaleY : 0,
})