$(() => {
    // const stuckClass = 'is-stuck';
    const $stickyTopElements = $('.navbar');

    const determineSticky = () => {
        $stickyTopElements.each((i, el) => {
            const $el = $(el);
            const stickPoint = parseInt($el.css('top'), 10);
            const currTop = el.getBoundingClientRect().top;
            const isStuck = currTop <= stickPoint;
            if (!isStuck)
                document.querySelector(".navbar-brand").style.display = "none";
            else
                document.querySelector(".navbar-brand").style.display = "block";
            //$el.toggleClass(stuckClass, isStuck);
        });
    };

    determineSticky();
    $(window).on('resize scroll', () => determineSticky());

    // Switch to restore password pill
    $(".forgotPassLink").click(() => new bootstrap.Tab($('.restoreBtn')).show());


    $(".signIn").click(() => {
        // Make the button active
        $(".signUpBtn").removeClass("active");
        $(".restoreBtn").removeClass("active");
        $(".signInBtn").addClass("active");

        // Make the pill active
        $(".signUpPill").removeClass("active");
        $(".restorePill").removeClass("active");
        $(".signInPill").addClass("active");
    });

    $(".signUp").click(() => {
        // Make the button active
        $(".signInBtn").removeClass("active");
        $(".restoreBtn").removeClass("active");
        $(".signUpBtn").addClass("active");

        // Make the pill active
        $(".signInPill").removeClass("active");
        $(".restorePill").removeClass("active");
        $(".signUpPill").addClass("active");
    });
});