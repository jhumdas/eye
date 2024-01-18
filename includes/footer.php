<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src='assets/scripts/script.js'></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<section class="footer">
    <div class="Cust_container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="logo">
                    <img src='assets/imgaes/logo.png' alt='' />
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="boxx">
                    <h3>Contact</h3>
                    <ul>
                        <li class="mb-3">The Address, 5th Floor Work Ez Featherlite, 203/10B, 200 ft. MMRD Road, Pallavaram, Chennai - 600044 TN, India</li>
                        <li>Tel: +91 73050 34294</li>
                        <li> Email: sales@asset-eyes.com</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div>
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="HVAC.php">HVAC</a> </li>
                        <li><a href="FAQ.php">FAQs</a> </li>
                        <li> <a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact Us</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    AOS.init();
</script>



<!-- FAQ aCCODIAN -->
<script>
    {
  (function($){
    $.fn.extend({
        mAccord: function(options) {
            var defaults = {
            };
            var options = $.extend(defaults, options);

            return this.each(function() {
              var o = options,
                  // container = $(this).find(".accordion-container"),
                  trigger = $(this).find(".accordion h3"),
                  content = $(this).find(".accordion-content"),
                 
                  obj = $(trigger).prev();
                  $(".accordion-container .accordion:nth-child(1) h3").addClass("active");
                  $(".accordion-container .accordion:nth-child(1) h3").next().slideDown(500);
              trigger.click(function (e) {
                e.stopPropagation();
                var target = $(this).next();

                $(this).addClass('active'),
                trigger.not(this).removeClass('active'),
                target.stop().delay().slideDown(500);

                if (target.is(':visible')) { 
                  $(this).removeClass('active'),
                  target.stop().slideUp();
                } else if (content.not(target).is(':visible')){
                  $(content.not(target)).stop().slideUp(500);
                }
              });
              
					});
        }
    });













    
})(jQuery);

(function($) { 
  $('.accordion-container').mAccord();
})(jQuery);
}


</script>
</body>

</html>
