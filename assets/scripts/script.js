
// header active
window.addEventListener('load', function () {
  let ch=window.location.href;
  let chStr=String(ch);
  if(chStr.indexOf('.php')===-1){
      document.querySelector('.sarNavLink').classList.add('activeSarkari');
  }
  let chLen=chStr.lastIndexOf('/');
  let chStrSlice=chStr.slice(chLen+1);
  const savLink2=document.querySelectorAll('.sarNavLink');
  for(let link of savLink2){
      if(link.getAttribute('href')===chStrSlice){
          link.classList.add('activeSarkari');
      }
  }
  if(chStrSlice==="HVAC.php"){
      document.querySelector('.induClrBtn').style.cssText+="color: #000;";
  }else{
      document.querySelector('.induClrBtn').style.cssText+="color: #486284;";
  }
})
/* Header Dropdown */
function myheaderFunction() {
  if(!document.getElementById('myheaderDropdown').classList.contains('show')){
      document.querySelector('.clsSpan').innerHTML='<i class="fa-solid fa-angle-up"></i>';
      document.getElementById("myheaderDropdown").classList.add("show");
  }else{
      document.querySelector('.clsSpan').innerHTML='<i class="fa-solid fa-angle-down"></i>';
      document.getElementById("myheaderDropdown").classList.remove("show");
  }
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

/* sidebar Dropdown */
function mysidebarFunction() {
  document.getElementById("mysidebarDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}




/***mobile-sidebar****/

function openSidebar() {
  document.getElementById('mobile_sidebar').classList.add('open');

}
function closeSidebar() {

  document.getElementById('mobile_sidebar').classList.remove('open')
}


/**header-sticky****/
function stickyHeader() {
  if (window.scrollY > 100) {
      document.getElementById('header').classList.add('sticky');
  }
  else {
      document.getElementById('header').classList.remove('sticky');
  }
}
window.addEventListener('scroll', stickyHeader);



// *****accodian*****

document.addEventListener("DOMContentLoaded", function () {
  const accordionItems = document.querySelectorAll(".acc-item");

  accordionItems.forEach((item) => {
      const title = item.querySelector(".acc-item h3");
      const content = item.querySelector(".acc-item p");
      const chevron = item.querySelector(".acc-chevron");

      title.addEventListener("click", () => {
          const isExpanded = content.style.display === "block";

          // Close all accordion items
          accordionItems.forEach((otherItem) => {
              if (otherItem !== item) {
                  otherItem.querySelector(".acc-item p").style.display = "none";
                  otherItem.querySelector(".acc-chevron").style.transform =
                      "rotate(180deg)";
              }
          });

          // Toggle the clicked accordion item

          content.style.display = isExpanded ? "none" : "block";
          chevron.style.transform = isExpanded ? "rotate(180deg)" : "rotate(0deg)";
      });
  });
});




// ****From DropDown****
function myfromFunction() {
  document.getElementById("myFromDropdown").classList.toggle("show");
}
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
          }
      }
  }
}



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








