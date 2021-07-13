
var clickEraser = () => {
    if(window.innerWidth>575)
        $(".eraser").addClass("eraser-am1");
    else
        $(".eraser").addClass("eraser-am2");
    setTimeout(() => {
        if(window.innerWidth>575)
            $(".eraser").removeClass("eraser-am1");
        else
            $(".eraser").removeClass("eraser-am2");
        $(".eraser").fadeOut();
        $(".school-room-img").attr('src', "assets/images/SCHOOL---blackboard-solution.png");
    }, 5000);
}