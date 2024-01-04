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
        const contentbtn = item.querySelector(".acc-item .accsBtn");
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
            contentbtn.style.display = isExpanded ? "none" : "block";
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
