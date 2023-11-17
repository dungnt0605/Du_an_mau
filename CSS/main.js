
let slide = document.querySelector('.banner');
    let arr = ["https://images.pexels.com/photos/384555/pexels-photo-384555.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", 
    "https://images.pexels.com/photos/2181171/pexels-photo-2181171.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", 
    "https://images.pexels.com/photos/6456287/pexels-photo-6456287.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", 
    "https://images.pexels.com/photos/8414449/pexels-photo-8414449.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
];
    let count = 0;
    var Time;
    function slider() {
        slide.style.backgroundImage = "url(" + arr[count] + ")";

    }
    function next() {
        count++;
        if (count > arr.length - 1) {
            count = 0;
        }
        slider();
    }
    function back() {
        count--;
        if (count < 0) {
            count = arr.length - 1;
        }
        slider();
    }
    Time = setInterval(function () {
            next();
        }, 3000)
    
    