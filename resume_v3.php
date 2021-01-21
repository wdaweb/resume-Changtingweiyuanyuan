<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resume_v3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
include_once "base.php";
?>


<div class="banner">
    <div class="topnav d-flex">
        <!-- <a href="#intro">
            <span>Introduction</span>
        </a>       
        <a href="#wk">
            <span>Work Experience</span>
        </a> 
        <a href="#skill">
            <span>Skills</span>
        </a>
        <a href="#por">
            <span>Portfolio</span>
        </a>
        <a href="#email">
            <span>Contact Me</span>
        </a> -->
        <a href="login.html">
            <span>login</span>
        </a>
    </div>
    <!-- <div class="topnav_icon">
        <div class="topnav_icon_burger"></div>
    </div> -->


    <h2 id="text" class="container-fluid">Resumeee</h2>
    <div class="clouds">
        <img src="image/cloud1.png" style="--a:1;">
        <img src="image/cloud2.png" style="--a:2;">
        <img src="image/cloud3.png" style="--a:3;">
        <img src="image/cloud4.png" style="--a:4;">
        <img src="image/cloud5.png" style="--a:5;">
        <img src="image/cloud1.png" style="--a:10;">
        <img src="image/cloud2.png" style="--a:9;">
        <img src="image/cloud3.png" style="--a:8;">
        <img src="image/cloud4.png" style="--a:7;">
        <img src="image/cloud5.png" style="--a:6;">
    </div>
    <div class="moon"></div>
    <div class="star">
        <div class="layer"></div>
        <div class="layer"></div>
        <div class="layer"></div>
        <div class="layer"></div>
        <div class="layer"></div>
    </div>
</div>

<!--
<div class="test">
    <img class="img" src="image/bg.png">
    <span class="star1"></span>
</div>
-->
<!-- introduction -->

<div class="for_all_bg">
    <div class="intro_interval"></div>
    <div class="main_block">
    <div class="introduction">
    <p class="intro_title text-left col-12" id="intro">Introduction...</p>
<?php
$bis=$BasicIntro->all();
// print_r($bis);
?>
    <div class="intro_line col-3"></div>
    <div class="intro_contents row">
        <div class="intro_pic col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <?php
            $pic=$SelfPic->find(['intro'=>'1','sh'=>'1']);
            ?>
            <img src="self_pic/<?=$pic['img'];?>">
        </div>
        <div class="intro_text col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 p-4">
            <span class="intro_h3">About me</span><br>
            我是
            <span id="intro_name">
                <?=$bis[0]['name']?>
            </span>, 
            個性較活潑, 對生活充滿好奇心
            <br>
            畢業於
            <span id="intro_graduation">
                <?=$bis[0]['graduate']?>
            </span><br>
            現居地
            <span id="intro_addr">
                <?=$bis[0]['addr']?>
            </span><br>
            目前期望職位
            <span id="intro_position">
                <?=$bis[0]['position']?>
            </span><br>
            <span id="intro_email">
                <?=$bis[0]['email']?>
            </span>

            <hr>
<?php
$sis=$SelfIntro->find(['sh'=>'1']);
// print_r($sis);
?>
<div id="self_intro_c">
<?= nl2br($sis['textC']);?>
</div>
            <br>
            <br>
<div id="self_intro_e">
<?= nl2br($sis['textE']);?>
</div>
        </div>
    </div>
    </div>



<!-- work experience -->

    <!-- <img src="image/r3bg1.png" class="img-fluid work_bgpic1"> -->
    <!-- <img src="image/r3bg2.png" class="img-fluid work_bgpic2"> -->
<div class="work_experience">
<?php
$wks=$Work->all();
// print_r($wks);

$wkpic=$SelfPic->all(['wk'=>'1','sh'=>'1']);
// print_r($wkpic);

?>
    <p class="work_title col-12 text-right" id="wk">Work Experience.</p>
    <div class="work_line offset-9 col-3"></div>
    <div class="work_content">
        <div class="work-items wi1">
<?= nl2br($wks[0]['text']);?>
            <img src="self_pic/<?=$wkpic[0]['img'];?>" class="work-img1 img-fluid">
        </div>
        <div class="work-items wi2">
<?= nl2br($wks[1]['text']);?>
        </div>
        <div class="work-items wi3">
<?= nl2br($wks[2]['text']);?>
            <img src="self_pic/<?=$wkpic[1]['img'];?>" class="work-img3 img-fluid">
        </div>
    </div>
</div>

<!-- skills -->

<div class="skills">
    <p class="skill_title text-left col-12" id="skill">Skills...</p>
    <div class="skill_line col-3"></div>

    <div class="skill_nav offset-0 col-12 offset-sm-0 col-sm-12 offset-lg-5 col-lg-7">
        <div class="skill_loader loader1">
            <span></span>
        </div>
        <div class="skill_loader loader2">
            <span></span>
        </div>
        <div class="skill_loader loader3">
            <span></span>
        </div>
    </div>


<?php
$skts=$Skt->all();
// print_r($skts);
?>
    <div class="skill_content">
        <!-- 長條圖 -->
        <div class="skill_front col-6">
            <div>
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <span><?=$skts[0]['title']?></span>
            </div>
            <div class="skill_front_text">
<?= nl2br($skts[0]['text']);?>
            </div>
            <div class="skills_op">
                <!-- 輸入具備技能 -->
                <?php
                $sks=$Sk->all(['ct'=>'frontend','sh'=>'1']);
                foreach($sks as $sk){
                    // print_r($sk);
                ?>
                <span class="skill_option">
                    <?=$sk['name'];?>
                </span>
                <?php
                }?>
            </div>
        </div>

        <div class="skill_backend col-6">
            <div>
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <span><?=$skts[1]['title']?></span>
            </div>
            <div class="skill_backend_text">
<?= nl2br($skts[1]['text']);?>
            </div>
            <div class="skills_op">
                <!-- 輸入具備技能 -->
                <?php
                $sks=$Sk->all(['ct'=>'backend','sh'=>'1']);
                foreach($sks as $sk){
                    // print_r($sk);
                ?>
                <span class="skill_option">
                    <?=$sk['name'];?>
                </span>
                <?php
                }?>
            </div>
        </div>

        <div class="skill_content_line col-12"></div>

        <div class="skill_graphic col-6">
            <div>
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <span><?=$skts[2]['title']?></span>
            </div>
            <div class="skill_graphic_text">
<?= nl2br($skts[2]['text']);?>
            </div>
            <div class="skills_op">
                <!-- 輸入具備技能 -->
                <?php
                $sks=$Sk->all(['ct'=>'graphic_design','sh'=>'1']);
                foreach($sks as $sk){
                    // print_r($sk);
                ?>
                <span class="skill_option">
                    <?=$sk['name'];?>
                </span>
                <?php
                }?>
            </div>
        </div>

        <div class="skill_others col-6">
            <div>
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <span><?=$skts[3]['title']?></span>
            </div>
            <div class="skill_others_text">
<?= nl2br($skts[3]['text']);?>
            </div>
            <div class="skills_op">
                <!-- 輸入具備技能 -->
                <?php
                $sks=$Sk->all(['ct'=>'others','sh'=>'1']);
                foreach($sks as $sk){
                    // print_r($sk);
                ?>
                <span class="skill_option">
                    <?=$sk['name'];?>
                </span>
                <?php
                }?>
            </div>
        </div>
        
    </div>
</div>


<!-- 作品 -->
<div class="portfolio">
    <p class="por_title col-12 text-right" data-text="Contact Me." id="por">Portfolio.</p>
    <div class="work_line offset-9 col-3"></div>
    <div class="por_text">
        下面是我在泰山職訓半年的作品<br>

    </div>
    <div class="por_content">
    
    <?php
    $pors=$Por->all(['sh'=>'1']);
    // print_r($pors);
    foreach($pors as $por){
    // print_r($por);
    $porbgs=$SelfPic->find(['porName'=>$por['name']]);

    echo '<div class="por_card card"><span></span><span></span><span></span><span></span><div class="card_content"><h2>';
    echo ($por['php'])?'php<br>':'';
    echo ($por['mysql'])?'mySQL<br>':'';
    echo ($por['js'])?'javaScript<br>':'';
    echo ($por['jquery'])?'jQuery<br>':'';
    echo ($por['css'])?'css<br>':'';
    echo ($por['bootstrap'])?'bootstrap<br>':'';
    echo ($por['ps'])?'photoshop<br>':'';
    echo ($por['ai'])?'illustrator<br>':'';
    echo'</h2><h3>'.$por['name'].'</h3>';
    echo (!empty($por['href']))?'<a href="'.$por['href'].'" target="_blank">':'';
    echo '<div class="porimg"><img class="porimgg" src="';
    echo 'self_pic/'.($porbgs['img']);
    echo '"><div class="porimgg wave1"></div><div class="porimgg wave2"></div><div class="porimgg wave3"></div><div class="porimgg wave4"></div><div class="porimgg wave5"></div></div>';
    echo (!empty($por['href']))?"</a>":'';
    echo '</div></div>'
    ?>
        <!--
兩個版本=>網址!=NULL
        <div class="por_card card">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="card_content">
                <h2>
                    技能+<BR>
                </h2>
                <h3>作品名稱</h3>
                <div class="porimg">
                    <img class="porimgg" src="圖片">
                    <div class="porimgg wave1"></div>
                    <div class="porimgg wave2"></div>
                    <div class="porimgg wave3"></div>
                    <div class="porimgg wave4"></div>
                    <div class="porimgg wave5"></div>
                </div>
            </div>
        </div>
-->

<!--
    =>NULL
        <div class="por_card card">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="card_content">
                <h2>
                    技能+<BR>
                </h2>
                <h3>作品名稱</h3>
                <a href="網址" target="_blank">   ＊
                <div class="porimg">
                    <img class="porimgg" src="圖片">
                    <div class="porimgg wave1"></div>
                    <div class="porimgg wave2"></div>
                    <div class="porimgg wave3"></div>
                    <div class="porimgg wave4"></div>
                    <div class="porimgg wave5"></div>
                </div>
                </a>   ＊
            </div>
        </div>
-->
<!--
        <div class="por_card card">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="card_content">
                <h2>php<br>css</h2>
                <h3>萬年曆作品</h3>
                <div class="porimg">
                    <img class="porimgg" src="z/starry3.jpg">
                    <div class="porimgg wave1"></div>
                    <div class="porimgg wave2"></div>
                    <div class="porimgg wave3"></div>
                    <div class="porimgg wave4"></div>
                    <div class="porimgg wave5"></div>
                </div>
            </div>
        </div>
    -->
<?php
}?>

    </div>

</div>




<!-- contact me -->

<!-- <div class="for_email_bg"> -->
    <!-- <div class="email_bgpic"> -->
<div class="contact_me d-flex">
    <div class="title_email col-12 text-center" data-text="Contact Me." id="email">Contact Me.
        <div class="email_line line_left col-2"></div>
        <div class="email_line line_right col-2"></div>
    </div>
    <div class="contact_content col-12 d-flex">
        <div class="contact_block col-4 email">
            <a href="?">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
        </div>
        <div class="contact_block col-4 github">
            <a href="?">
                <i class="fa fa-github" aria-hidden="true"></i>
            </a>
        </div>
        <div class="contact_block col-4 tel">
            <a href="?">
                <i class="fa fa-phone-square" aria-hidden="true"></i>
            </a>
        </div>
    <!-- <div class="col-12 d-flex"> -->
            <!-- <div class="email_text col-6">
            <span class="email_textp">&nbsp;感謝您觀看至此:)</span><br>
            </div> -->
            
    </div>

    <div class="email_copyright col-12">
        Copyright©2021 Chang Ting-Wei
    </div>
    <!-- </div>
    </div> -->
</div>
<!-- resume template -->
<!-- https://www.thenewslens.com/article/72424#&gid=1&pid=1 -->
<!-- https://gumroad.com/clementloyer -->

<!-- <div class="reserve_spacing"></div> -->
</body>
</html>


<script>
// topnav_burger
const topnavBtn=document.getElementsByClassName("topnav_icon_burger");
    let topnavOpen = false;
    topnavBtn.addEventListener("click",function(){
        console.log(1234)
    })

$(document).ready(function(){
    
    // $("#yuan_img").hide();
    // $("#Capa_2").hide();
    // $("#Capa_1").css('z-index','1');
    // $("#Capa_1").click(function(){
    //     console.log(123);
    //         $("#Capa_1").css('z-index','0'),$("#Capa_1").fadeToggle(1000);
    //         $("#Capa_2").css('z-index','1'),$("#Capa_2").fadeToggle(1000);
    //         $("#yuan_img").css('z-index','2'),$("#yuan_img").delay(1000).slideToggle(2000);
            
    //     });
    //     $("#Capa_2").click(function(){
    //         $("#Capa_1").css('z-index','1'),$("#Capa_1").fadeToggle(500);
    //         $("#Capa_2").css('z-index','0'),$("#Capa_2").fadeToggle(0);
    //         $("#yuan_img").css('z-index','0'),$("#yuan_img").fadeToggle(0);
    //     });

// work experience block
$(".wi1").mouseover(function(){
    $(this).css({'background-color':'#e1e1e180','z-index':'5'});
    $(".work-img1").css('z-index','6');
    $(this).mouseout(function(){
        $(this).css({'background-color':'#e1e1e150','z-index':''});
        $(".work-img1").css('z-index','');
    })
})
$(".wi2").mouseover(function(){
    $(this).css({'background-color':'#e1e1e180','z-index':'5'});
    $(this).mouseout(function(){
        $(this).css({'background-color':'#e1e1e150','z-index':''});
    })
})
$(".wi3").mouseover(function(){
    $(this).css({'background-color':'#1e1e1e80','z-index':'5'});
    $(".work-img3").css('z-index','6');
    $(this).mouseout(function(){
        $(this).css({'background-color':'#1e1e1e50','z-index':''});
        $(".work-img3").css('z-index','');
    })
})


// skill_loader
let circle=$(".skill_loader span");
console.log($(document));

// 當window在滾動捲軸時!
$(window).scroll(function(){
    // 等等用ㄉfunction
    function c(deg){
        for(i=0;i<=deg;i++){
            circle.css({'background':`conic-gradient(#F47060 0,#F47060 ${deg}deg,transparent ${deg}deg)`});
        }
    }

    // console.log($(this).scrollTop())
    if($(this).scrollTop()>'3200'){
        console.log(12324);
        
        $(".skill_bar .bar_bg::before").animate({left:'-80%'});
        // console.log($.keyframe.isSupported());

        // c('220');

        // 測試 : 為什麼抓不到define？
        /*
        const skillp=$(".root");
        for(i=0;i<=100;i++){
            $.keyframe.define([{
                name:'rotate','background':`conic-gradient(var(--main-or) 0,var(--main-or) ${i}deg,transparent ${i}deg)`
                // root.style.setProperty('--skillDeg',i);
            }]);
        }
        */
    }
});






})



</script>