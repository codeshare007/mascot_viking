<style scope>
    .intro-doc-img {
        width : 60%;
        margin-left : 12vw;
        cursor : pointer;
    }
    .intro-doc-img:hover {
        filter : brightness(0.9);
    }
    .col-sm-6{
        width : 50%;
    }
</style>
<div class="row w-100">
    <div class="col-md-6 col-sm-6">
        <div>
            <img class="w-75" src="assets/images/home.png" />
        </div>
        <div>
            <a href="assets/docs/intro.pdf" target="_blank">
                <img class="intro-doc-img" src="assets/images/intro-doc.png"/>
            </a>
        </div>
    </div>
    <div class="col-md-6 col-sm-6" align="center">
        <div>
            <img class="back-map-img" src="assets/images/back-map.png" onclick="goToURL('mainpage/mainpage.php')"/>
        </div>
        <div class="mt-4">
            <a href='resource/newcast.php' target="_blank">
                <img class="item" src="assets/images/intro-video.png"/>
            </a>
        </div>
    </div>
</div>