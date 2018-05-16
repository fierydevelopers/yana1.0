let post_header = document.querySelectorAll('.post');
const app = document.getElementById('#app-wrapper');
const loader = document.querySelector('.loader')



const controller = new ScrollMagic.Controller();

post_header.forEach((head) => {
    let timeline = new TimelineMax();
    let heading = head.querySelector('h3');
    let postContent = head.querySelector('p');
    let link = head.querySelector('.link');
    let counter = head.querySelector('.counter');
    let image = head.querySelector('.image');

    timeline
        .from(counter, .5, {
            x: 30,
            autoAlpha: 0,
            ease: Expo.ease
        })

        .from(image, .5, {
            x: -30,
            autoAlpha: 0,
            ease: Expo.ease
        })

        .from(heading, .3, {
            y: 30,
            autoAlpha: 0,
            ease: Expo.ease
        })

        .from(postContent, .3, {
            y: 30,
            autoAlpha: 0,
            ease: Expo.ease
        })

        .from(link, .3, {
            x: 30,
            autoAlpha: 0,
            ease: Expo.ease
        })

    const scene = new ScrollMagic.Scene({
        triggerElement: head,
        triggerHook: .5,
        reverse: true
    })

        .setTween(timeline)
        .addTo(controller)


})

const section = document.querySelector('#app-wrapper')
const smooth = new Smooth({
    native: false,
    section: section,
    ease: 0.1
})

smooth.init()

