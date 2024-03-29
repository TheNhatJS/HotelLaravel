    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('hotel/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>

    {{--  <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay: false,
            autoplayTimeout: 5000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:3
                }
            }
        })
    </script>  --}}
    <script>
        $(document).ready(function(){
            // Cấu hình Owl Carousel cho phần slide đầu
            $("#slider .owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000
            });
        
            // Cấu hình Owl Carousel cho phần danh sách các phòng
            $(".room.owl-carousel").owlCarousel({
                loop: false,
                margin: 10,
                nav: true,
                autoplay: false,
                autoplayTimeout: 5000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:4
                    }
                }
            });
        });
    </script>


    <script>
        $(document).ready(function(){
            setTimeout(function(){
                $("#error-message").fadeOut("slow");
            }, 3000); // 3 giây
        });
    </script>

    
    
    
    