// admin
var imgFeature = document.querySelector('.img-feature');
var list_box = document.querySelectorAll('.home_list_box img');
var prev_home = document.querySelector('.prev');
var next_home = document.querySelector('.next');

list_box.forEach(imgElement=>{
    imgElement.addEventListener('click', e=>{
        imgFeature.src = e.target.getAttribute('src');
    })
});