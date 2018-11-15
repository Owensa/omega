!function (e) {
    $("#particles-js").length > 0 && particlesJS("particles-js", {
        particles: {
            number: {
                value: 90,
                density: {enable: !0, value_area: 1000}
            },
            color: {value: "#ffa500"},
            shape: {
                type: "polygon",
                opacity: .1,
                stroke: {width: 1, color: "#fff"},
                polygon: {nb_sides: 5}
            },
            opacity: {value: .3, random: !1, anim: {enable: !1, speed: 1, opacity_min: .12, sync: !1}},
            size: {value: 6, random: !0, anim: {enable: !1, speed: 40, size_min: .08, sync: !1}},
            line_linked: {enable: !0, distance: 30, color: "#fff", opacity: .3, width: 1.3},
            move: {
                enable: !0,
                speed: 5.3,
                direction: "none",
                random: !1,
                straight: !1,
                out_mode: "out",
                bounce: !1,
                attract: {enable: !1, rotateX: 500, rotateY: 1000}
            }
        },
        interactivity: {
            detect_on: "canvas",
            events: {onhover: {enable: !0, mode: "repulse"}, onclick: {enable: !0, mode: "bubble"}, resize: !0},
            modes: {
                grab: {distance: 400, line_linked: {opacity: 1}},
                bubble: {distance: 400, size: 10, duration: 2, opacity: 0.1, speed: 3},
                repulse: {distance: 200, duration: 10},
                push: {particles_nb: 10},
                remove: {particles_nb: 2}
            }
        },
        retina_detect: !0
    })
}(jQuery);