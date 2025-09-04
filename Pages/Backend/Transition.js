document.addEventListener("DOMContentLoaded", () => {
        const faders = document.querySelectorAll(".fade-in");

        const appearOptions = {
            threshold: 0.2,  // 20% visible
            rootMargin: "0px 0px -50px 0px"
        };

        const appearOnScroll = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target); // animate only once
            }
            });
        }, appearOptions);

        faders.forEach(fader => {
            appearOnScroll.observe(fader);
        });
        });