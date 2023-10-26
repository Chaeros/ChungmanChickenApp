<!DOCTYPE html>
<html>
<head>
    <title>충만치킨 주문하기</title>
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

    <!-- 푸터 -->
    <style>
        #main_footer {
            padding: 10px;
            text-align: left;
            background-color:rgb(51,51,51);
            color:gray;
        }
    </style>

    <!--상단 메뉴 선택창-->
    <style>
        #section_header {
            text-align:center;
            background-color:orange;
        }

        #section_article {
            overflow: hidden;
            border-bottom: 1px solid black;
            background: orange;
        }
        #section_article > div > a {
            /* 수평 정렬 */
            float: left; width: 33%;

            /* 크기 및 색상, 정렬 */
            height: 35px;
            line-height: 35px;
            text-align: center;
            color: white;
        }
    </style>

    <!--단일 메뉴 묶어주는 컨테이너-->
    <style>
        .menu-container {
            overflow:hidden;
        }
        .item {
            float:left;
            margin: 0 3px;
            padding:10px;
        }

        .menuBox {
            margin-left:auto;
            margin-right:auto;
            max-width:80vw;

        }

        .menuImage {
            width:100%;
            border-radius:5px;
        }

        .backBtn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            /*border: 1px solid transparent;*/
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            color: black;
            background-color: orange;
            border-color: black;
            margin-bottom:5vh;
            margin-left:auto;
            margin-right:auto;
            width:100%;
        }
    </style>

    </head>
    <body>
        <header>
            <div id="main_header">
            <a class="center" href='mainInterface.php'></a>
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

        <section id="main_section">
            <header id="section_header">
            </header>
            <div id="section_header"><h2><b>주문 카트</b></h2></div>
            
            <article id="section_article2">
                <?php
                    $db_host="localhost";
                    $db_user="root";
                    $db_password="1234";
                    $db_name="prepare";
                    $con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
                
                    if(mysqli_connect_error($con))
                    {
                        echo "MySQL 접속 실패", "<br>";
                        echo "오류 원인 : ", mysqli_connect_error();
                        exit();
                    }
                
                    echo "<br>";
                    $sql="SELECT * FROM menu";
                    $result=mysqli_query($con,$sql);
                    $loginConfirm="0";
                    while($query_data=mysqli_fetch_row($result))
                    {
                        echo "<div class='menuBox'>";
                        $_img="../img/".$query_data[4];
                        echo "<img src=$_img class='menuImage'>";
                        echo "<p>".$query_data[1]."</p>";
                        echo "<p>가격: ";
                        echo $query_data[2]."원</p>";
                        echo "<form METHOD='post'  ACTION='buy_result.php'>";
                        echo "<label for=$query_data[0].>선택</label>";
                        echo "<input type='checkbox' name=modifyChk[] value=$query_data[0]>";
                        echo "<input type='text' id=menu_$query_data[0] name=menu_$query_data[0] value=0>개";
                        echo "</div><br>";
                    }

                    echo "<br><hr>";
                    echo "<div class='menuBox'>";
                    echo "<h2><지점 선택></h2><br>";
                    $sql="SELECT * FROM branch";
                    $result=mysqli_query($con,$sql);
                    $loginConfirm="0";
                    echo "<select name='branch' style='margin-bottom:10px;width:100%'>";
                    while($query_data=mysqli_fetch_row($result))
                    {
                        echo "<option value=$query_data[0]>$query_data[1]</option>";
                    }
                    echo "</select><br>";

                    echo "<INPUT TYPE='submit'  VALUE='주문하기' class='backBtn'>";
                    echo "</form>";
                    echo "</div>";
                    mysqli_close($con);
                ?>
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
</body>
</html>
