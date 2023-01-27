 const searchHeader = () => {
    $('.header .custom-form button').on('click',function(e){
        e.preventDefault();
        const form = $(this).closest('form');
        const input = $(".header .custom-form input");

        if ($(this).hasClass('active') && input.val()){
            form.submit();
            return false;
        }
        $(this).toggleClass('active');

        input.animate({width:'toggle'},350);
    })
    $('.header .custom-form input').focusout(function (){
         $(this).hide();

     });

    $('.hamburger-lines').on('click',function (){
        $(this).toggleClass('active');
        $('.menu-header-menu-container').toggleClass('show');
    });
 }
 export default searchHeader;