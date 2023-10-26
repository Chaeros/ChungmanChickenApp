<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>충만치킨</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimun-scale=1.0, user-scalable=no" />
    <!-- 초기화 -->
    <style>
        * { margin: 0; padding: 0; }
        body { font-family: 'Helvetica', sans-serif; }
        li { list-style: none; }
        a { text-decoration: none; }
    </style>
    <!-- 헤더 -->
    <style>
        #main_header {
            /* 배경 지정 */
            left:0;top:0;right:0;
            height: 60px;
            background-color:white;

            /* 자손 위치 지정 */
            z-index:90;
            position: fixed;
            text-align: center;
            line-height: 45px;
        }
        #main_header > h1 {
            color: white;
        }
        #main_header > a, #main_header > label {
            display: block;
            height: 32px;
            position: absolute;
        }
        #main_header > a.left {
            width: 34px;
            left: 20px; top: 12px;
        }

        #main_header > a.center {
            width: 100px;
            left: 50%; top : 15px;
            margin-left:-50px;
        }
        #main_header > a.right {
            width: 34px;
            height: 34px;
            right: 20px; top: 15px;
        }
    </style>
    <!-- 스프라이트 이미지 -->
    <style>
        #main_header > a.left {
            background: url('../img/list_button.png');
            background-position: 0px 50%;
            background-repeat: no-repeat;
            text-indent: -99999px ;
            display:none;
        }
        #main_header > a.center{
            background: url('../img/logo.png');
            background-position: 50% 50%;
            background-size:100%;
            background-repeat: no-repeat;
        }
        #main_header > a.right {
            background: url('../img/buy_button.png');
            background-position: 0px 0px;
            background-repeat: no-repeat;
            background-size:80%;
            text-indent: -99999px;
        }

        @media screen and (max-width:767px){
            #main_header > a.left{
                display:block;
            }
        }
    </style>
    <!-- 네비게이션(1) -->
    <style>
        #top_gnb {
            overflow: hidden;
            border-bottom: 1px solid black;
            background: #B42111;
        }
        #top_gnb > div > a {
            /* 수평 정렬 */
            float: left; width: 20%;

            /* 크기 및 색상, 정렬 */
            height: 35px;
            line-height: 35px;
            text-align: center;
            color: white;
        }
        .menu{
            display:block;
        }

        @media screen and (max-width:767px){
            .menu{
                display:none;
            }
        }
    </style>
    <!--사이드메뉴창-->
    <style>
    .inner-container{
        margin-top:10px;
    }
   .sidenav {
        height:100%;
        width: 0;
        position: fixed;
        z-index:100;
        top: 0;
        left: 0;
        background-color: rgb(0,0,0);
        overflow-x: hidden;
        transition:0.5s ease-in-out;
        padding-top: 60px;
    }
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #fff;
        display: block;
        transition: 0.2s ease-in-out;
    }
    .closebtn {
        position: absolute;
        top: 0px;
        right: 25px;
        font-size: 36px !important;
        margin-left: 50px;
    }
    /* 미디어쿼리 적용 */
    @media screen and (max-height:450px) {
        .sidenav {
            padding-top:15px;
        }
        .sidenav a {
            font-size: 18px;
        }
    }
	</style>
    <!-- 본문 -->
    <style>
        #section_header { padding: 20px; }
        #section_article { padding: 10px; }
    </style>

    <!--비디오-->
    <style>
        /* video container */
        .video {
        width: 100%;
        max-width: 900px;
        margin: 0px auto;
        }

        .video-container {
            z-index:80;
        position: relative;
        width: 100%;
        height: auto;
        padding-top: 50%;
        }

        iframe {
        z-index: 1;
        top: 0;
        left: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        }

    </style>
    <!--sns-->
    <style>
        #bottom_gnb {
            overflow: hidden;
            border-bottom: 1px solid black;
            background: orange;
        }
        #bottom_gnb > div > img {
            /* 수평 정렬 */
            float: left; width: 33%;

            /* 크기 및 색상, 정렬 */
            height: 35px;
            line-height: 35px;
            align: center;
            color: white;
        }
    </style>
    <!-- 푸터 -->
    <style>
        #main_footer {
            padding: 10px;
            text-align: left;
            background-color:rgb(51,51,51);
            color:gray;
        }
    </style>
    
    <link rel="stylesheet" href="../css/slide.css">

    <script src="../javascript/slide.js"></script>
    </head>
    <body>
        <header>
            <div id="main_header">
            <!--<a class="left" href="#"></a>-->
            <!--<label class="left" for="toggle" onclick="">Toggle</label>-->
            <a class="center" href='mainInterface.php'></a>
            <!--<label class="right" for="toggle" onclick="">Toggle</label>-->
            <a class="right" href='buyInterface.php'></a>

            <!--사이드 메뉴-->
            <div id="mysidenav" class="sidenav">
                <a href="#" class="closebtn" onclick='closeNav()'>X</a>
                <a href="menuIntroduce.php">메뉴 소개</a>
                <a href="searchBranch.php">매장 찾기</a>
                <a href="buylist.php">결재 목록</a>
                <a href="modifyInformation.php">개인정보 변경</a>
                <a href="logout.php">로그아웃</a>
            </div>
            <a class="left" onclick='openNav()'></a>

            <script>
                function openNav() {
                document.getElementById('mysidenav').style.width = '250px';
                }
                function closeNav() {
                document.getElementById('mysidenav').style.width = '0';
                }
            </script>
            </div>
        </header>

        <div class="inner-container">

        <!--모바일이 아닌 환경에서의 메뉴창-->
        <nav id="top_gnb" class="menu">
            <div><a href="#">메뉴 소개</a></div>
            <div><a href="#">이벤트</a></div>
            <div><a href="#">매장 찾기</a></div>
            <div><a href="#">결재 목록</a></div>
            <div><a href="#">개인정보 변경</a></div>
        </nav>

        <section id="main_section" style='min-height:80vh'>
            <header id="section_header">
            </header>
            <article id="section_article">

            <div class="slideshow-container">
                <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../img/main_image1.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../img/main_image2.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../img/main_image3.png" style="width:100%">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
            </div>

            </article>
            <div class="video">
                <div class="video-container">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/oq8ZkhmVHPo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <article>
                <div id="bottom_gnb">
                </div>
            </article>
        </section>
        <footer id="main_footer">
            <h2 class="logo">
                <img src="../img/footer_logo.png" alt="CM Logo">
            </h2>
            <b>
                <p>광주광역시 광산구 신가동 992-5번지 | 전화 1899-6769</p>
                <p>관리책임자 이메일 marketing@choongman.co.kr</p>
                <p>Copyright 2019 CM., Ltd. All right Reserved</p>
            </b>
        </footer>
        </div>
        <script language='javascript'> currentSlide(1) </script>
</body>
</html>
