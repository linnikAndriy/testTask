const bannerArrow = () => {

    $("body").on("click", '.banner-arrow', function () {
        let heightSection = $(this).closest('.banner').outerHeight();
        $('html,body').animate({
            scrollTop: heightSection
        },1000)
    });
};

export default bannerArrow;