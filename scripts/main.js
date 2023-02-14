//mobile menu scripting
'use strict';

const menuBtn = document.querySelector('.menu-btn');
const closeBtn = document.querySelector('.close-btn');
const menu = document.querySelector('.nav-list');

function openMenu(){
    menu.classList.remove('hidden');
};//closes openMenu
function closeMenu(){
    menu.classList.add('hidden');
};//closes closeMenu

menuBtn.addEventListener('click', openMenu);
closeBtn.addEventListener('click', closeMenu);

//js taken from kobey's project 
// $(document).ready(function(){$("body").addClass("bfToggle"),$(".dynTop").click(function(a){$("html, body").animate({scrollTop:0},500),a.preventDefault()});var a=$("header").height();$(window).scroll(function(){$(window).scrollTop()>a?$(".dynTop").fadeIn(500):$(".dynTop").fadeOut(500)})});