<style scope>
.park-image {
    position : absolute;
    top : 0px;
    width : 100%;
    height : 100%;
}
.paper-rect {
    position: absolute;
    width: 10vw;
    height: 90px;
    bottom: 167px;
    left: 25vw;
    cursor : pointer;
}
.envelope-rect {
    position: absolute;
    width: 13vw;
    height: 120px;
    bottom: 122px;
    right: 13vw;
    cursor : pointer;
}
</style>
<div class="w-100 h-75">
    <img class="park-image" src="assets/images/PARK---GRASS.png"/>
    <div class="row w-100">
        <div class="col-md-6">
            <img class="w-75" src="assets/images/park.png" />
        </div>
        <div class="col-md-6" align="center">
            <img class="back-map-img" src="assets/images/back-map.png" onclick="goToURL('mainpage/mainpage.php')"/>
        </div>
    </div>
    <a class="cursor-default" href="assets/images/PARK-CrumpledPaper.jpg" target="blank">
        <div class="paper-rect"></div>
    </a>
    <a class="cursor-default" href="assets/images/PARK---EnvelopeContents.jpg" target="blank">
        <div class="envelope-rect"></div>
    </a>
</div>