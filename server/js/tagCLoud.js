const myTags = [
    'JavaScript', 'CSS', 'HTML',
    'C++', 'React',
    'Python', 'Java', 'git',
    'MySQL', 'jQuery', 'Bootstrap'
];

const mediaQuery = window.matchMedia('(max-width: 479px)')

if (mediaQuery.matches) {
    var tagCloud = TagCloud('.content', myTags, {

        // radius in px
        radius: 210,

        // animation speed
        // slow, normal, fast
        maxSpeed: 'fast',
        initSpeed: 'fast',

        // 0 = top
        // 90 = left
        // 135 = right-bottom
        direction: 90,

        // interact with cursor move on mouse out
        keep: true

    });
} else {
    var tagCloud = TagCloud('.content', myTags, {

        // radius in px
        radius: 300,

        // animation speed
        // slow, normal, fast
        maxSpeed: 'fast',
        initSpeed: 'fast',

        // 0 = top
        // 90 = left
        // 135 = right-bottom
        direction: 90,

        // interact with cursor move on mouse out
        keep: true

    });

}


/* var colors = ['#34A853', '#FBBC05', '#4285F4', '#7FBC00', 'FFBA01', '01A6F0'];
var random_color = colors[Math.floor(Math.random() * colors.length)];
document.querySelector('.tagcloud--item').style.color = random_color; */