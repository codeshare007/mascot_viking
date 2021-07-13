<style scope>
    .phone-image {
        width : 100%;
    }
    .title {
        font-size : 4vw;
        font-weight : 800;
    }
    a {
        cursor : pointer;
        color : black;
    }
    a:hover {
        text-decoration : none;
    }
    .person-name {
        font-size : 2.5vw;
    }
    img {
        width : 100%;
        cursor : pointer;
    }
    img:hover {
        filter : brightness(0.9);
    }
    .col-sm-4 {
        width : 33.33333%;
    }
    .col-sm-9 {
        width : 75%;
    }
    .col-sm-3 {
        width : 25%;
    }
</style>
<script src="src/school/school.js"></script>
<div class="position-relative w-100 h-75 d-flex align-items-center justify-content-center">
    <img class="phone-image" src="assets/images/phone.png" />
    <div class="position-absolute w-75">
        <div class="d-flex justify-content-around">
            <span class="title cursor-default">Encrypted Videos</span>
            <a onclick="goToURL('school/school.php')" class="title">BACK</a>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-9 d-flex flex-wrap align-items-center justify-content-center">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="text-center">
                            <div class="person-name">James</div>
                            <img id="video_0" onclick="selectVideo(0)" src="assets/images/video.png"/>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="text-center">
                            <div class="person-name">Megan/Madison</div>
                            <img id="video_1" onclick="selectVideo(1)" src="assets/images/video.png"/>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="text-center">
                            <div class="person-name">Kyle</div>
                            <img id="video_2" onclick="selectVideo(2)" src="assets/images/video.png"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="text-center">
                            <div class="person-name">Zachary</div>
                            <img id="video_3" onclick="selectVideo(3)" src="assets/images/video.png"/>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="text-center">
                            <div class="person-name">Mrs. Fletcher</div>
                            <img id="video_4" onclick="selectVideo(4)" src="assets/images/video.png"/>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="text-center">
                            <div class="person-name">Jazmine</div>
                            <img id="video_5" onclick="selectVideo(5)" src="assets/images/video.png"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">

            </div>
        </div>
    </div>
</div>