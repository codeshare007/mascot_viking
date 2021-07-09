<style>
    .col-sm-4{
        width : 33.33333%;
    }
    .building-title{
        color : white;
        position : absolute;
        left : 30px;
    }
    .menu-img{
        cursor : pointer;
    }
    .menu-img:hover{
        filter : brightness(0.9);
    }
</style>
<div>
    <div class="w-100 row pb-5">
        <div class="col-md-4 col-sm-4 position-relative">
            <h3 class="building-title">HOME</h3>
            <img class="menu-img w-100" src="assets/images/home.png" onclick="goToURL('home/home.php')"/>
        </div>
        <div class="col-md-4 col-sm-4">
        </div>
        <div class="col-md-4 col-sm-4">
            <h3 class="building-title">LIBRARY</h3>
            <img class="menu-img w-100" src="assets/images/library.png" onclick="goToURL('library/library.php')"/>
        </div>
    </div>
    <div class="w-100 row pt-5">
        <div class="col-md-4 col-sm-4">
            <h3 class="building-title">POLICE</h3>
            <img class="menu-img w-75 ml-5 pl-1" src="assets/images/police.png" onclick="goToURL('police/police.php')"/>
        </div>
        <div class="col-md-4 col-sm-4">
            <h3 class="building-title mt-4">PARK</h3>
            <img class="menu-img w-100 mt-5" src="assets/images/park.png" onclick="goToURL('park/park.php')"/>
        </div>
        <div class="col-md-4 col-sm-4">
            <h3 class="building-title">SCHOOL</h3>
            <img class="menu-img w-100" src="assets/images/school.png" onclick="goToURL('school/school.php')"/>
        </div>
    </div>
</div>