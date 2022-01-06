const letters = document.querySelectorAll(".pismeno");

/* const lettersPortfolio = document.querySelectorAll(".pismeno_portfolio");
const lettersMe = document.querySelectorAll(".pismeno_me");
const lettersContact = document.querySelectorAll(".pismeno_contact"); */


setTimeout(() => {
    Array.from(letters).forEach((letter, index) => {
        setTimeout(() => {
            letter.classList.toggle("show");
        }, index * 150)
    });
}, 1000)


/* function testScroll(ev) {
    if (window.pageYOffset > 0 && window.pageYOffset < 200) {
        setTimeout(() => {
            Array.from(lettersPortfolio).forEach((letter, index) => {
                setTimeout(() => {
                    letter.classList.toggle("show");
                }, index * 150)
            });
        }, 1000)

    } else if (window.pageYOffset > 600 && window.pageYOffset < 1200) {
        setTimeout(() => {
            Array.from(lettersMe).forEach((letter, index) => {
                setTimeout(() => {
                    letter.classList.toggle("show");
                }, index * 150)
            });
        }, 1000);

    } else if (window.pageYOffset > 1500 && window.pageYOffset < 2000) {
        setTimeout(() => {
            Array.from(lettersContact).forEach((letter, index) => {
                setTimeout(() => {
                    letter.classList.toggle("show");
                }, index * 150)
            });
        }, 1000);


    }
}
window.onscroll = testScroll; */



// dots is an array of Dot objects,
// mouse is an object used to track the X and Y position
// of the mouse, set with a mousemove event listener below
var dots = [],
    mouse = {
        x: 0,
        y: 0
    };

// The Dot object used to scaffold the dots
var Dot = function() {
    this.x = 0;
    this.y = 0;
    this.node = (function() {
        var n = document.createElement("div");
        n.className = "trail";
        document.body.appendChild(n);
        return n;
    }());
};
// The Dot.prototype.draw() method sets the position of 
// the object's <div> node
Dot.prototype.draw = function() {
    this.node.style.left = this.x + "px";
    this.node.style.top = this.y + "px";
};

// Creates the Dot objects, populates the dots array
for (var i = 0; i < 12; i++) {
    var d = new Dot();
    dots.push(d);
}

// This is the screen redraw function
function draw() {
    // Make sure the mouse position is set everytime
    // draw() is called.
    var x = mouse.x,
        y = mouse.y;

    // This loop is where all the 90s magic happens
    dots.forEach(function(dot, index, dots) {
        var nextDot = dots[index + 1] || dots[0];

        dot.x = x;
        dot.y = y;
        dot.draw();
        x += (nextDot.x - dot.x) * .6;
        y += (nextDot.y - dot.y) * .6;

    });
}

addEventListener("mousemove", function(event) {
    //event.preventDefault();
    mouse.x = event.pageX;
    mouse.y = event.pageY;
});

// animate() calls draw() then recursively calls itself
// everytime the screen repaints via requestAnimationFrame().
function animate() {
    draw();
    requestAnimationFrame(animate);
}

// And get it started by calling animate().
animate();



/* Mobile header */

const menuButton = document.getElementsByClassName("menu-button")[0];
const menu = document.querySelector(".menu");
const menuBranding = document.querySelector(".menu-branding");
const menuNav = document.querySelector(".menu-nav");
const navItem = document.querySelectorAll(".nav-item");

let showMenu = false;

//initiAL SETUP

//ADD CLASS
menuButton.addEventListener("click", toggolmenu);

function toggolmenu() {
    if (!showMenu) {
        menuButton.classList.add("close");
        menu.classList.add("show");
        menuBranding.classList.add("show");
        menuNav.classList.add("show");
        navItem.forEach(item => item.classList.add("show"));

        showMenu = true;
    } else {
        menuButton.classList.remove("close");
        menu.classList.remove("show");
        menuBranding.classList.remove("show");
        menuNav.classList.remove("show");
        navItem.forEach(item => item.classList.remove("show"));

        showMenu = false;
    }
}