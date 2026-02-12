gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
// ================= REAL-TIME HERO MOTION =================
const layers = document.querySelectorAll(".layer");

document.addEventListener("mousemove", (e) => {
  const x = (window.innerWidth / 2 - e.clientX) / 25;
  const y = (window.innerHeight / 2 - e.clientY) / 25;

  layers.forEach(layer => {
    const depth = layer.getAttribute("data-depth");
    gsap.to(layer, {
      x: x * depth * 20,
      y: y * depth * 20,
      duration: 0.6,
      ease: "power2.out"
    });
  });
});
// Scroll depth
gsap.to(".hero", {
  y: 150,
  scrollTrigger: {
    trigger: ".hero",
    start: "top top",
    end: "bottom top",
    scrub: true
  }
});

  // ========= HERO CINEMATIC INTRO =========
  gsap.from(".brand-name", {
    y: 120,
    opacity: 0,
    filter: "blur(15px)",
    duration: 11.6,
    ease: "power4.out"
  });

  gsap.from(".tagline", {
    y: 80,
    opacity: 0,
    delay: 0.4,
    duration: 8.2,
    ease: "power3.out"
  });


  // ========= SECTION REVEALS =========
  gsap.utils.toArray(".content-section").forEach((sec, i) => {
    gsap.from(sec, {
      y: 100,
      opacity: 0,
      duration: 1.2,
      ease: "power4.out",
      scrollTrigger: {
        trigger: sec,
        start: "top 80%",
      }
    });
  });


  // ========= WHAT WE DO PIN EFFECT =========
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".whatwedo-section",
      start: "top top",
      end: "+=2000",
      scrub: true,
      pin: true
    }
  });

  tl.from(".left-text", { x: -500, opacity: 0, duration: 1 })
    .from(".right-text", { x: 500, opacity: 0, duration: 1 }, "<")
    .to(".left-text, .right-text", { opacity: 0, y: -100, duration: 1 })
    .to(".services", { opacity: 1, duration: 1 })
    .from(".service", {
      y: 100,
      opacity: 0,
      stagger: 0.4,
      duration: 1
    });


  // ========= WORD REVEAL HEADINGS =========
  gsap.utils.toArray(".text-reveal").forEach(text => {
    const words = text.innerText.split(" ");
    text.innerHTML = words.map(w => `<span class="word">${w}</span>`).join(" ");

    gsap.from(text.querySelectorAll(".word"), {
      y: 60,
      opacity: 0,
      stagger: 0.06,
      duration: 0.8,
      ease: "power3.out",
      scrollTrigger: {
        trigger: text,
        start: "top 85%",
      }
    });
  });

});




 
gsap.from("#neoNavbar", {
  y: -80,
  opacity: 0,
  duration: 1,
  ease: "power3.out"
});

window.addEventListener("scroll", () => {
  if(window.scrollY > 80){
    document.getElementById("neoNavbar").classList.add("scrolled");
  } else {
    document.getElementById("neoNavbar").classList.remove("scrolled");
  }
});

// Mobile toggle
const toggle = document.getElementById("menuToggle");
const links = document.querySelector(".nav-links");

toggle.addEventListener("click", () => {
  links.classList.toggle("active");
  gsap.fromTo(".nav-links",
    {x:100, opacity:0},
    {x:0, opacity:1, duration:.5}
  );
}); 
