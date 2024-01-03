/***mobile-sidebar****/

function openSidebar (){
    document.getElementById('mobile_sidebar').classList.add('open');
 
}
function closeSidebar (){

    document.getElementById('mobile_sidebar').classList.remove('open')
}


/**header-sticky****/
function stickyHeader (){
    if(window.scrollY > 100){
        document.getElementById('header').classList.add('sticky');
    }
    else{
        document.getElementById('header').classList.remove('sticky');
    }
}
window.addEventListener('scroll',stickyHeader);