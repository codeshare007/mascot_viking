<style scope>
    .library-img {
        width : 90%;
        margin-top : -150px;
    }
    .bookcase {
        width : 100%;
    }
    .col-sm-6 {
        width : 50%;
    }
    .book1-rect {
        cursor: pointer;
        position: absolute;
        left: 7.5vw;
        bottom: 31vw;
        width: 3vw;
        height: 10vw;
    }
    .book2-rect {
        cursor: pointer;
        position: absolute;
        left: 23.5vw;
        bottom: 31vw;
        width: 3vw;
        height: 10vw;
    }
    .book3-rect {
        cursor: pointer;
        position: absolute;
        left: 41.5vw;
        bottom: 31vw;
        width: 3vw;
        height: 10vw;
    }
    .book4-rect {
        cursor: pointer;
        position: absolute;
        left: 18.5vw;
        bottom: 21vw;
        width: 3vw;
        height: 10vw;
    }
    .book5-rect {
        cursor: pointer;
        position: absolute;
        left: 52.5vw;
        bottom: 21vw;
        width: 3vw;
        height: 10vw;
    }
    .book6-rect {
        cursor: pointer;
        position: absolute;
        left: 12.5vw;
        bottom: 10vw;
        width: 3vw;
        height: 10vw;
    }
    .book7-rect {
        cursor: pointer;
        position: absolute;
        left: 27.5vw;
        bottom: 10vw;
        width: 3vw;
        height: 10vw;
    }
    .book8-rect {
        cursor: pointer;
        position: absolute;
        left: 12.5vw;
        bottom : 0vw;
        width: 3vw;
        height: 10vw;
    }
    .book9-rect {
        cursor: pointer;
        position: absolute;
        left: 44.5vw;
        bottom: 0vw;
        width: 3vw;
        height: 10vw;
    }
    @media screen and (max-width : 575px) {
        .library-img {
            width : 70%;
            margin-top : 0px;
        }
        .book1-rect{
            left: 12.5vw;
            bottom: 55vw;
            width: 5vw;
            height: 17vw;
        }
        .book2-rect{
            left: 40.5vw;
            bottom: 55vw;
            width: 5vw;
            height: 17vw;
        }
        .book3-rect{
            left: 72.5vw;
            bottom: 55vw;
            width: 5vw;
            height: 17vw;
        }
        .book4-rect{
            left: 32.5vw;
            bottom: 37vw;
            width: 5vw;
            height: 17vw;
        }
        .book5-rect{
            left: 91.5vw;
            bottom: 37vw;
            width: 5vw;
            height: 17vw;
        }
        .book6-rect{
            left: 21.5vw;
            bottom: 19vw;
            width: 5vw;
            height: 17vw;
        }
        .book7-rect{
            left: 48.5vw;
            bottom: 19vw;
            width: 5vw;
            height: 17vw;
        }
        .book8-rect{
            left: 21.5vw;
            width: 5vw;
            height: 17vw;
        }
        .book9-rect{
            left: 77.5vw;
            width: 5vw;
            height: 17vw;
        }
    }
</style>
<div class="w-100">
    <div class="d-flex">
        <img class="ml-auto mr-5 back-map-img" src="assets/images/back-map.png" onclick="goToURL('mainpage/mainpage.php')"/>
    </div>
    <div class="row">
        <div class="col-md-5 col-sm-5">
            <img class="library-img" src="assets/images/library.png" />
        </div>
        <div class="col-md-7 col-sm-7" align="center">
            <img class="bookcase" src="assets/images/bookcase.png"/>
            <a class="cursor-default" href="assets/images/LIBRARY-VikingsBook.png" target="blank">
                <div class="book1-rect"></div>
            </a>
            <a class="cursor-default" href="assets/images/All_About_code.jpg" target="blank">
                <div class="book2-rect"></div>
            </a>
            <a class="cursor-default" href="assets/images/LIBRARY-Dictionary.jpg" target="blank">
                <div class="book3-rect"></div>
            </a>
            <a class="cursor-default" href="assets/images/LIBRARY-StoriesOfTheSea.jpg" target="blank">
                <div class="book4-rect"></div>
            </a>
            <a class="cursor-default" href="assets/images/LIBRARY-SpiesInHistory.jpg" target="blank">
                <div class="book5-rect"></div>
            </a>
            <a class="cursor-default" href="assets/images/LIBRARY-KingsOfFrance.jpg" target="blank">
                <div class="book6-rect"></div>
            </a>
            <a class="cursor-default" href="assets/images/LIBRARY-WordValues.png" target="blank">
                <div class="book7-rect"></div>
            </a>
            <a class="cursor-default" href="assets/images/LIBRARY-TrueCrimes.jpg" target="blank">
                <div class="book8-rect"></div>
            </a>
            <a class="cursor-default" href="assets/images/LIBRARY-FootballPlayers.jpg" target="blank">
                <div class="book9-rect"></div>
            </a>
        </div>
    </div>
</div>