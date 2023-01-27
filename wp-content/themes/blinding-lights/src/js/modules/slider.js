 const sectionSlider = () =>{
     $('.slider__list').slick({
         infinite: true,
         slidesToShow: 1,
         arrows: true,
         dots: true,
         prevArrow: '.slider .slider__navigation .arrows .prev',
         nextArrow: $('.slider .slider__navigation .arrows .next'),
         appendDots: $('.slider .slider__navigation .dots'),
     });
 }
export default sectionSlider;