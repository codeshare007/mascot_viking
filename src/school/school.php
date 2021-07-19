<style scope>
    .school-image {
        margin-top:-100px;
        width : 100%;
    }
    .desk-rect {
        position: absolute;
        bottom: 10vw;
        width: 27vw;
        height: 7vw;
        left: 2vw;
        cursor : pointer;
    }
    .trash-bin-rect {
        position: absolute;
        bottom: 0vw;
        width: 9vw;
        height: 10vw;
        left: 29vw;
        cursor : pointer;
    }
    .eraser-rect {
        position: absolute;
        bottom: 24vw;
        width: 5vw;
        height: 3vw;
        left: 29vw;
        cursor : pointer;
    }
    .eraser {
        margin-left: -1vw;
        margin-top: 1.1vw;
        width : 100%;
    }
    .phone-rect {
        position: absolute;
        bottom: 20vw;
        width: 5vw;
        height: 6vw;
        right: 8vw;
        cursor : pointer;
    }
    @media screen and (max-width : 575px) {
        .school-image {
            margin-top : 0px;
            width : 80%;
        }
        .school-room-img {
            margin-top : 10px;
        }
        .desk-rect {
            bottom : 20vw;
            width : 50vw;
        }
        .trash-bin-rect {
            left: 50vw;
            width: 17vw;
            height: 19vw;
        }
        .eraser-rect {
            bottom: 39vw;
            width: 12vw;
            height: 9vw;
            left: 48vw;
        }
        .phone-rect {
            bottom: 34vw;
            right: 14vw;
            width: 15vw;
            height: 14vw;
        }
    }
    .col-md-7, .col-sm-7 {
        padding : 0px;
    }
    .school-room-img {
        width : 100%;
        margin-top : 50px;
    }
    @keyframes eraser_animate1 {
        30% { transform : rotate(-90deg)translate(5vw, -11vw); }
        50% { transform : rotate(-90deg)translate(10vw, -13vw); }
        70% { transform : rotate(-90deg)translate(0vw, -15vw); }
        90% { transform : rotate(-90deg)translate(10vw, -17vw); }
        100% { transform : rotate(-90deg)translate(0vw, -19vw); }
    }
    @keyframes eraser_animate2 {
        30% { transform : rotate(-90deg)translate(5vw, -21vw); }
        50% { transform : rotate(-90deg)translate(10vw, -25vw); }
        70% { transform : rotate(-90deg)translate(0vw, -29vw); }
        90% { transform : rotate(-90deg)translate(10vw, -33vw); }
        100% { transform : rotate(-90deg)translate(0vw, -37vw); }
    }
    .eraser-am1 {
        animation-name : eraser_animate1;
        animation-duration : 5s;
    }
    .eraser-am2 {
        animation-name : eraser_animate2;
        animation-duration : 5s;
    }
</style>
<script src="src/school/school.js"></script>
<div class="w-100 h-100 d-flex align-items-center">
    <div class="w-100">
        <div class="d-flex">
            <img class="ml-auto mr-5 back-map-img" src="assets/images/back-map.png" onclick="goToURL('mainpage/mainpage.php')"/>
        </div>
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div>
                    <img class="school-image" src="assets/images/school.png" />
                </div>
            </div>
            <div class="col-md-7 col-sm-7" align="center">
                <img class="school-room-img" src="assets/images/SCHOOL---Room.png"/>
                <a class="cursor-default" href="assets/images/SCHOOL-Desk.JPG" target="_blank">
                    <div class="desk-rect"></div>
                </a>
                <a class="cursor-default" href="assets/images/SCHOOL-Trash.jpg" target="_blank">
                    <div class="trash-bin-rect"></div>
                </a>
                <div class="eraser-rect" onclick="clickEraser()">
                    <img class="eraser" src="assets/images/eraser.png"/>
                </div>
                <a class="cursor-default" onclick="goToURL('school/phone.php')">
                    <div class="phone-rect"></div>
                </a>
            </div>
        </div>
    </div>
</div>