<?php include "includes/header.php"; ?>

<section class="banner ">
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner_slide">
                    <img src="./assets/imgaes/banner1.png" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner_slide">
                    <img src="./assets/imgaes/banner2.png" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner_slide">
                    <img src="./assets/imgaes/banner3.png" />
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>

<script>
    var swiper = new Swiper(".mySwiper2", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

