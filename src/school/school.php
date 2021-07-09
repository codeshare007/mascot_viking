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
    }
    .trash-bin-rect {
        position: absolute;
        bottom: 0vw;
        width: 9vw;
        height: 10vw;
        left: 29vw;
    }
    .eraser-rect {
        position: absolute;
        bottom: 24vw;
        width: 5vw;
        height: 3vw;
        left: 29vw;
    }
    .eraser {
        margin-left: -1vw;
        margin-top: 1.5vw;
    }
    .phone-rect {
        position: absolute;
        bottom: 20vw;
        width: 5vw;
        height: 6vw;
        background: red;
        right: 8vw;
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
            bottom: 40vw;
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
</style>
<div class="w-100 h-75">
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
            <a class="cursor-default" href="assets/images/SCHOOL-Desk.jpg" target="blank">
                <div class="desk-rect"></div>
            </a>
            <a class="cursor-default" href="assets/images/SCHOOL-Trash.jpg" target="blank">
                <div class="trash-bin-rect"></div>
            </a>
            <div class="eraser-rect">
                <img class="eraser" src="assets/images/eraser.png"/>
            </div>
            <a class="cursor-default" onclick="">
                <div class="phone-rect"></div>
            </a>
        </div>
    </div>
</div>