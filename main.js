const sr = ScrollReveal ({
    distance: '20px',
    duration: 3000,
    reset: true
});
sr.reveal('.home, #contact', {delay: 190, origin: 'bottom'});
sr.reveal('.custom-p, .versity, .project-one', {delay: 200, origin: 'left'});

sr.reveal('.school, .project-two', {delay: 200, origin: 'right'});
