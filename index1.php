<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>这3道小学历史题居然难倒了这么多人？!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/jquery.min.js"></script>
	<?php 
header("Content-type: text/html; charset=utf-8"); 
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($user_agent, 'MicroMessenger') === false){
	   $nickname="我";
       $headimgurl="img/peoptitle.png";
} else {
 	$appId="wxadfd8159e6da1d4f";
    $appsecret ="f9a5bc0b5fc9820e8e7a9fa84547d0dc";
    if(!isset($_GET['code'])){
		$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxadfd8159e6da1d4f&redirect_uri=http://h5.sc.ministudy.com/index1.php&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
	    echo "<script>location.href='$url'</script>";die;	
    }else{
       $code = $_GET['code'];
       $token_url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appId."&secret=".$appsecret."&code=".$code."&grant_type=authorization_code";
    $token = json_decode(file_get_contents($token_url));
	$opendid= $token->openid;
	$access_token = $token->access_token;
	$info_url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$opendid."⟨=zh_CN";
	$info = json_decode(file_get_contents($info_url));
	$data['name'] = $info->nickname;
	$data['image'] = $info->headimgurl;
	$nickname=$info->nickname;
    $headimgurl=$info->headimgurl;
    }
}
?>
<style>
.friends .part_1 .header_user div{width:1.35rem;height:1.35rem;background:url(<?php echo $headimgurl;?>);background-size: 100%;margin-right:.2rem}
</style>
</head>
<!-- 第一步：首先加载一个微信JS-SDK -->
<script src="js/jweixin-1.0.0.js"></script>
<!-- 第2步：写一些配置 -->
<script>
    function autoPlayAudio() {
        wx.config({
            // 配置信息, 即使不正确也能使用 wx.ready
            debug: false,
            appId: '',
            timestamp: 1,
            nonceStr: '',
            signature: '',
            jsApiList: []
        });
        wx.ready(function () {
            var globalAudio = document.getElementById("media");
            globalAudio.play();
        });
    }
    ;
    // 解决ios音乐不自动播放的问题
    autoPlayAudio();
</script>
<script>
    //初始化分享参数
    function initShareInfo() {
        $.ajax({
            method: "GET",
            url: 'http://luntan.sunlands.com/community-pc-war/base/getWxJsSign.action',
            data: {
                url: encodeURIComponent(location.href.split('#')[0])
            },
            dataType: 'jsonp',
            success: function (data) {
                console.log(data)
                //  wxConfig(data.resultMessage.appId, data.resultMessage.timestamp, data.resultMessage.nonceStr, data.resultMessage.signature);
                wx.config({
                    debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
                    appId: "wx79b494663f198825", // 必填，公众号的唯一标识
                    //  appId: data.resultMessage.appId, // 必填，公众号的唯一标识
                    timestamp: data.resultMessage.timestamp,  // 必填，生成签名的时间戳
                    nonceStr: data.resultMessage.nonceStr,  // 必填，生成签名的随机串
                    signature: data.resultMessage.signature, // 必填，签名，见附录1
                    jsApiList: [
                        'onMenuShareTimeline',
                        'onMenuShareAppMessage'
                    ] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
                });
                wx.ready(function () {
                    //分享到朋友圈
                    wx.onMenuShareTimeline({

                        title: "分享标题", // 分享标题
                        desc: "分享描述", // 分享描述
                        link: "https://sueuan.github.io/shangde/", // 分享链接
                        imgUrl: "http://share.sunlands.com/img/app-icon.png", // 分享图标
                        success: function () {
                            // 用户确认分享后执行的回调函数
                            alert("分享成功！");
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                            alert("分享失败！");
                        }
                    });
                    //分享给朋友
                    wx.onMenuShareAppMessage({
                        title: "分享标题", // 分享标题
                        desc: "分享描述", // 分享描述
                        link: "https://sueuan.github.io/shangde/", // 分享链接
                        imgUrl: "http://share.sunlands.com/img/app-icon.png", // 分享图标
                        //				type: '', // 分享类型,music、video或link，不填默认为link
                        //				dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                        success: function () {
                            // 用户确认分享后执行的回调函数
                            alert("分享成功！");
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                            alert("分享失败！");
                        }
                    });

                });
            }
        });
    }
    // initShareInfo()
</script>
<script>
    var htmls = document.getElementsByTagName('html')[0];
    var deviceWidth = document.documentElement.clientWidth;
    htmls.style.fontSize = deviceWidth * 0.1333333 + 'px';
    if (parseInt($('html').css('fontSize')) > 100) {
        $('html').css('fontSize', '100px')
    }
    window.onresize = function () {
        var htmls = document.getElementsByTagName('html')[0];
        var deviceWidth = document.documentElement.clientWidth;
        htmls.style.fontSize = deviceWidth * 0.1333333 + 'px';
        if (parseInt($('html').css('fontSize')) > 100) {
            $('html').css('fontSize', '100px')
        }
    };

</script>
<body>
<script type="text/javascript">
    window._pt_lt = new Date().getTime();
    window._pt_sp_2 = [];
    _pt_sp_2.push('setAccount,2a7dc278');
    var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    (function () {
        var atag = document.createElement('script');
        atag.type = 'text/javascript';
        atag.async = true;
        atag.src = _protocol + 'js.ptengine.cn/2a7dc278.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(atag, s);
    })();
</script>

<div style="display: none">
    <h1>有的时候我会选择保持沉默</h1>
    <!-- <img src="img/share.png" alt=""/>-->
</div>
<div id="audio_btn" class="off rotate" data-event="11205" style="display: block;">
    <!--  <audio loop="loop" src="source/1.mp3" id="media"></audio> -->
    <audio src="source/music_1.mp3" id="media" autoplay></audio>
</div>

</div>
<!--第一页-->
<div class="start page page1" style="display: block;">
    <!--<img src="img/start.gif">-->
</div>

<!--第二页-->
<div class="background page page2">
    <div class="who">
        <img src="img/who.png" class="animated fadeInLeft animt-who">
    </div>
    <div class="are">
        <img src="img/are.png" class="animated fadeInLeft animt-are">
    </div>
    <div class="you">
        <img src="img/you.png" class="animated fadeInLeft animt-you">
    </div>
    <div class="peopoli">
        <img src="img/libaitu.png" class="animated fadeInDown animt-peop-li libai2">
        <img src="img/wo.png" class="animated rubberBand animt-peop-wo">
        <img src="img/shi.png" class="animated rubberBand animt-peop-shi">
        <img src="img/li.png" class="animated rubberBand animt-peop-lipng">
        <img src="img/bai.png" class="animated rubberBand animt-peop-bai">
    </div>
    <div class="kao">
        <img src="img/kao.png" class="animated rubberBand animt-kao">
        <img src="img/kao.png" class="animated rubberBand animt-kao2">
        <img src="img/ni.png" class="animated rubberBand animt-ni">
        <img src="img/kaostare1.png" class="animated rubberBand kaostyle-1">
        <img src="img/kaostare2.png" class="animated rubberBand kaostyle-2">
        <img src="img/kaostare3.png" class="animated rubberBand kaostyle-3">
        <img src="img/kaostare4.png" class="animated rubberBand kaostyle-4">
        <img src="img/ceyice.png" class="animated rubberBand kaostyle-5">
    </div>
    <div class="onetitle">
        <img src="img/onetitle.png" class="animated lightSpeedIn kaostyle-6">
        <img src="img/a.png" class="animated lightSpeedIn kaostyle-7">
        <img src="img/b.png" class="animated lightSpeedIn kaostyle-8">
        <img src="img/c.png" class="animated lightSpeedIn kaostyle-9">
        <img src="img/jianshu.png" class="animated lightSpeedIn kaostyle-10 imgbtn2 choose_btn ">
        <img src="img/guqin.png" class="animated lightSpeedIn kaostyle-11 imgbtn2 choose_btn">
        <img src="img/xieshi.png" class="animated lightSpeedIn kaostyle-12 imgbtn2 choose_btn">
    </div>
</div>

<!--第三页-->
<div class="background page page3">
    <div class="zhanwei">

    </div>
    <div class="peopoli">
        <img src="img/libaitu2.png" class="animated fadeInLeft animt-peop-li animt-peop-li2">
    </div>
    <div class="kao">
        <img src="img/yun.png" class="animated rubberBand animt-kao  animt-yun">
        <img src="img/kaostare2-1.png" class="animated rubberBand kaostyle-2 kaostyle-2-2">
        <img src="img/kaostare2-2.png" class="animated rubberBand kaostyle-3 kaostyle-3-2">
        <img src="img/kaostare2-3.png" class="animated rubberBand kaostyle-4 kaostyle-4-2">
        <img src="img/kaostare2-4.png" class="animated rubberBand kaostyle-4 kaostyle-4-3">
        <img src="img/kaostare2-3.png" class="animated rubberBand kaostyle-4 kaostyle-4-2-2">
        <img src="img/jiangzhuo.png" class="animated rubberBand kaostyle-5-2">
    </div>
    <div class="onetitle">
        <img src="img/onetitle2.png" class="animated lightSpeedIn kaostyle-6 kaostyle-6-2">
        <img src="img/a.png" class="animated lightSpeedIn kaostyle-7 kaostyle-7-2">
        <img src="img/b.png" class="animated lightSpeedIn kaostyle-8 kaostyle-8-2">
        <img src="img/c.png" class="animated lightSpeedIn kaostyle-9 kaostyle-9-2">
        <img src="img/guqin2-1.png" class="animated lightSpeedIn kaostyle-10 kaostyle-10-2 imgbtn3 choose_btn">
        <img src="img/guqin2-2.png" class="animated lightSpeedIn kaostyle-11 kaostyle-11-2 imgbtn3 choose_btn">
        <img src="img/guqin2-3.png" class="animated lightSpeedIn kaostyle-12 kaostyle-12-2 imgbtn3 choose_btn">
    </div>
</div>

<!--第四页-->
<div class="background page page4">
    <div class="liubei">
        <img src="img/liubei.png" class="animated fadeInLeft animt-peop-liubei">
        <img src="img/haizi.png" class="animated bounceInLeft animt-peop-haizi haizi">
        <img src="img/star.png" class="animated flash animt-peop-haizi starpng">
        <img src="img/redbg.png" class="animated fadeInLeft animt-peop-haizi redbg">
        <img src="img/guji.png" class="animated fadeInLeft animt-peop-haizi guiji">
    </div>
    <div class="onetitle">
        <img src="img/onetitle3.png" class="animated lightSpeedIn kaostyle-6 kaostyle-6-3">
        <img src="img/a.png" class="animated lightSpeedIn kaostyle-7 kaostyle-7-3">
        <img src="img/b.png" class="animated lightSpeedIn kaostyle-8 kaostyle-8-3">
        <img src="img/c.png" class="animated lightSpeedIn kaostyle-9 kaostyle-9-3">
        <img src="img/guqin3-1.png" class="animated lightSpeedIn kaostyle-10 kaostyle-10-3 imgbtn4 choose_btn">
        <img src="img/guqin3-2.png" class="animated lightSpeedIn kaostyle-11 kaostyle-11-3 imgbtn4 choose_btn">
        <img src="img/guqin3-3.png" class="animated lightSpeedIn kaostyle-12 kaostyle-12-3 imgbtn4 choose_btn">
    </div>
</div>

<!--第五页-->
<div class="twobg page page5">
    <div class="head">
    	<div><img src="img/dal-quniao.png" class="dal-qunliao animated fadeInDown"></div>
        <div><img src="img/dal-time.png" class="dal-time animated fadeInDown"></div>
    </div>
    <div class="cont">
        <div><img src="img/libai.png" class="user libai animated fadeInUp"></div>
        <div class="wo1zonghe" style="display: none;">
        	<img src="img/wo1-1.png" class=" wo1 wo1-1">
        	<img src="img/wo1-2.png" class=" wo1 wo1-1 wo1-2 animated fadeInUp">
        	<img src="<?php echo $headimgurl;?>" class="petitle">
        </div>
        <div><img src="img/yingzheng.png" class="user user-left yingzheng animated fadeInUp"></div>
        <div><img src="img/wangzhaojun.png" class="user user-left wangzhaojun animated fadeInUp"></div>
        <div><img src="img/wo2.png" class="user wo2 animated fadeInUp"></div>
        <div><img src="img/wo3.png" class="user wo3 animated fadeInUp"></div>
        <div><img src="img/wo4.png" class="user wo4 animated fadeInUp"></div>
        <div><img src="img/wangwei.png" class="user user-left wangwei animated fadeInUp"></div>
        <div><img src="img/wo5.png" class="user wo5 animated fadeInUp"></div>
        <div><img src="img/libaihongbao.png" class="user user-left libaihongbao animated fadeInUp"> <img class="hand" src="img/hand.png" alt=""/></div>
    </div>
</div>
<!--画板-->
<div style="display: none" class=" canvas_box page6">
    <div class="my_vanvas  clearfix">
        <canvas class="fl" id="myCanvas"></canvas>
    </div>
    <div class="operate_btn clearfix">
        <button class="btn_clean fl" onclick="clean();"></button>
        <button class="btn_save fr" onclick="save();"></button>
    </div>
</div>
<!--小人-->
<div style="display: none" class="canvas_img page7">
    <img src="img/canvas_img.jpg" id='img' alt='请涂鸦……'/>
</div>
<!--朋友圈-->
<div class="warp my_interact page8">
    <div style="display: none" class="friends">
        <div class="part_1 clearfix">
            <div class="header_user clearfix fr">
                <h1 class="fl">尚德机构</h1>

                <div class="fl">

                </div>
            </div>
        </div>
    </div>
    <div style="display: none" class="friends_list">
        <ul>
            <!--1-->
            <li class="clearfix">
                <div class="left_header fl clearfix">
                    <img class="fl" src="img/header_1.jpg" alt=""/>
                </div>
                <div style="min-height: 7.5rem;" class="rigth_con fl">
                    <h1>嬴政</h1>

                    <p class="title">
                        六国统一
                        <br/>
                        朕的freestyle正式开始！
                    </p>

                    <div class="img_box clearfix">
                        <img class="img_1 fl" src="img/img_1.gif" alt=""/>
                    </div>
                    <div class="testing_centre">
                        <div class="times clearfix">
                            <span class="act fl">考点</span>
                            <span class="fl">秦朝&bull;咸阳&nbsp;&nbsp; 公元前221年</span>
                        </div>
                        <div class="content clearfix">
                            <span class="fl">秦大一统，统一度量衡，焚书坑儒 <em class="right_icon"></em></span>
                            <img class="fr" src="img/iocn_2.jpg" alt=""/>
                        </div>
                        <div class="interaction">
                            <div class="like clearfix">
                                <img class="trigon" src="img/trigon.png" alt=""/>
                                <img class="fl like_icon" src="img/like.png" alt=""/>
                                <span class="fl">王翦</span><i class="fl">，</i>
                                <span class="fl">蒙毅</span><i class="fl">，</i>
                                <span class="fl">李斯</span><i class="fl">，</i>
                                <span class="fl">王贲</span>
                            </div>
                            <div class="comment">
                                <dl>
                                    <dt class="clearfix">
                                        <span>李斯</span>
                                        <i>：威武我的皇！</i>
                                        <img class=" expression" src="img/expression_1.png" alt=""/>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>齐王</span>
                                        <i>：如果我统一我肯定不这样！</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>燕王</span>
                                        <i>：手动点屎。</i>
                                        <img class=" expression" src="img/expression_1.png" alt=""/>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>楚王</span>
                                        <i>：及至秦之季世,焚诗书,坑术士,六艺从此缺焉我百度的....</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>嬴政</span>
                                        <i>：不点赞的都来我办公室！！</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>尚王</span>
                                        <i>：嗯…？我的书都在App上，随便你烧</i>
                                        <img class=" expression" src="img/expression_2.png" alt=""/>
                                    </dt>
                                </dl>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!--2-->
            <li class="clearfix">
                <div class="left_header fl clearfix">
                    <img class="fl" src="img/header_2.png" alt=""/>
                </div>
                <div style="min-height: 7.2rem;" class="rigth_con fl">
                    <h1>昭君_王 <img class="expression_name" src="img/expression_3.png" alt=""/></h1>

                    <p class="title">
                        匈奴苦寒之地，我要带几件衣服，
                        <br/>
                        我能怎么办？我也很绝望啊！！
                    </p>

                    <div class="img_box clearfix">
                        <img class="img_1 fl" src="img/img_2.png" alt=""/>
                    </div>
                    <div class="testing_centre">
                        <div class="times clearfix">
                            <span class="act fl">考点</span>
                            <span class="fl">汉朝&bull;长安&nbsp;&nbsp;公元前202年</span>
                        </div>
                        <div class="content clearfix">
                            <span class="fl">汉统一，令天下郡国设立学校<em class="right_icon"></em></span>
                            <img class="fr" src="img/iocn_2.jpg" alt=""/>
                        </div>
                        <div class="interaction">
                            <div class="like clearfix">
                                <img class="trigon" src="img/trigon.png" alt=""/>
                                <img class="fl like_icon" src="img/like.png" alt=""/>
                                <span class="fl">呼韩邪单于</span><i class="fl">，</i>
                                <span class="fl">汉元帝 </span>
                            </div>
                            <div class="comment">
                                <dl>
                                    <dt class="clearfix">
                                        <span>呼韩邪单于</span>
                                        <i>：我滴爱妃</i>
                                        <img class=" expression  expression4" src="img/expression_4.png" alt=""/>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>匈奴官微</span>
                                        <i>：上好的酒肉欢迎我们滴王妃~</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>汉元帝</span>
                                        <i>回复</i>
                                        <span>呼韩邪单于</span>
                                        <i>：…还我美人</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>蔡伦</span>
                                        <i>：我穿越而来只为让你带去用纸张书写的文化~</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>尚德App</span>
                                        <i>回复</i>
                                        <span>蔡伦</span>
                                        <i>：一个App知识装兜兜</i>
                                        <img class=" expression  expression5" src="img/expression_5.png" alt=""/>
                                    </dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!--3-->
            <li class="clearfix">
                <div class="left_header fl clearfix">
                    <img class="fl" src="img/header_3.png" alt=""/>
                </div>
                <div style="min-height:5.99rem" class="rigth_con fl">
                    <h1>鲁肃</h1>

                    <p class="title">
                        子明，士别三日当刮目相看啊！
                        <br/>
                        厉害了我的弟！
                        <img class=" expression_name  " src="img/expression_16.png" alt=""/>
                    </p>

                    <div class="img_box clearfix">
                        <img class="img_1 fl" src="img/img_3.png" alt=""/>
                    </div>
                    <div class="testing_centre">
                        <div class="times clearfix">
                            <span class="act fl">考点</span>
                            <span class="fl">三国&bull;邺城&nbsp;&nbsp;公元22年</span>
                        </div>
                        <div class="content clearfix">
                            <span class="fl">设立中央学府各个势力求贤若渴<em class="right_icon"></em></span>
                            <img class="fr" src="img/iocn_2.jpg" alt=""/>
                        </div>
                        <div class="interaction">
                            <div class="like clearfix">
                                <img class="trigon" src="img/trigon.png" alt=""/>
                                <img class="fl like_icon" src="img/like.png" alt=""/>
                                <span class="fl">孙权</span><i class="fl">，</i>
                                <span class="fl">吕蒙</span><i class="fl">，</i>
                                <span class="fl">陆逊  </span><i class="fl">，</i>
                                <span class="fl"><?php echo $nickname;?></span>
                            </div>
                            <div class="comment">
                                <dl>
                                    <dt class="clearfix">
                                        <span>孙权</span>
                                        <i>：我推荐他用的App学的</i>
                                        <img class=" expression expression5 " src="img/expression_5.png" alt=""/>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>吕蒙要努力</span>
                                        <i>：我天天刷题！</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>蒋钦</span>
                                        <i>回复</i>
                                        <span>孙权</span>
                                        <i>我也学了！</i>
                                        <img class=" expression  expression5" src="img/expression_6.png" alt=""/>
                                    </dt>
                                    <dt class="clearfix">
                                        <span> 尚德技术部</span>
                                        <i>回复</i>
                                        <span>孙权</span>
                                        <i>主公，给红包吗？</i>
                                    </dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!--4-->
            <li class="clearfix">
                <div class="left_header fl clearfix">
                    <img class="fl" src="img/header_4.png" alt=""/>
                </div>
                <div style="min-height:8.27rem" class="rigth_con fl">
                    <h1>状元王维</h1>

                    <p class="title">
                        “红豆生南国，春来发几枝。”
                        <br/>
                        写首诗都是爱你的形状@某人。<img class="expression_name" src="img/expression_7.png" alt=""/>
                    </p>

                    <div class="img_box clearfix">
                        <img class="img_1 fl" src="img/img_4.gif" alt=""/>
                    </div>
                    <div class="testing_centre">
                        <div class="times clearfix">
                            <span class="act fl">考点</span>
                            <span class="fl">唐朝&bull;洛阳&nbsp;&nbsp;公元618年</span>
                        </div>
                        <div class="content clearfix">
                            <span class="fl">唐朝出现了科举制度，分科取士，士子应举<em class="right_icon"></em></span>
                            <img class="fr" src="img/iocn_2.jpg" alt=""/>
                        </div>
                        <div class="interaction">
                            <div class="like clearfix">
                                <img class="trigon" src="img/trigon.png" alt=""/>
                                <img class="fl like_icon" src="img/like.png" alt=""/>
                                <span class="fl">你的小可爱玉真公主 </span><i class="fl">，</i>
                                <span class="fl">王维</span><i class="fl">，</i>
                                <span class="fl">李白 </span><i class="fl">，</i>
                                <span class="fl"> 孟浩然</span>
                            </div>
                            <div class="comment">
                                <dl>
                                    <dt class="clearfix">
                                        <span>你的小可爱玉真公主</span>
                                        <i>：人生若只如那天天天见</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>王维</span>
                                        <i>：李白点赞是什么意思？</i>
                                        <img class="expression" src="img/expression_8.png" alt=""/>
                                    </dt>
                                    <dt>
                                        <span> 李白</span>
                                        <i>回复</i>
                                        <span>王维</span>
                                        <i>：手滑。</i>
                                    </dt>
                                    <dt>
                                        <span>  白居易</span>
                                        <i>回复</i>
                                        <span>王维</span>
                                        <i>：长安户口了不起吗？</i>
                                    </dt>
                                    <dt>
                                        <span> 李白</span>
                                        <i>回复</i>
                                        <span>白居易</span>
                                        <i>：确实比你厉害。</i>
                                        <img class="expression" src="img/expression_1.png" alt=""/>
                                    </dt>
                                    <dt>
                                        <span> 唐太宗</span>
                                        <i>：都是我完善了科举制度。</i>
                                    </dt>
                                    <dt style="height:1rem ;">
                                        <span> 王维</span>
                                        <i></i>
                                    <div style="display: none" class="aa">：@all 用了尚德机构App，人人都能考上本科</div>
                                    <!--<img class="expression" src="img/expression_9.png" alt=""/>-->
                                    </dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!--5-->
            <li class="clearfix">
                <div class="left_header fl clearfix">
                    <img class="fl" src="img/header_5.png" alt=""/>
                </div>
                <div style="min-height:6.73rem" class="rigth_con fl">
                    <h1>秦观</h1>

                    <p class="title">
                        新婚当日为难自己的夫君，
                        <br/>
                        现在的女子，不提也罢。
                        <img class="expression_name" src="img/expression_10.png" alt=""/>
                    </p>

                    <div class="img_box clearfix">
                        <img class="img_1 fl" src="img/img_5.gif" alt=""/>
                    </div>
                    <div class="testing_centre">
                        <div class="times clearfix">
                            <span class="act fl">考点</span>
                            <span class="fl">宋朝&bull;东京&nbsp;&nbsp;公元960年</span>
                        </div>
                        <div class="content clearfix">
                            <span class="fl">宋朝私人办学的潮流兴起<em class="right_icon"></em></span>
                            <img class="fr" src="img/iocn_2.jpg" alt=""/>
                        </div>
                        <div class="interaction">
                            <div class="like clearfix">
                                <img class="trigon" src="img/trigon.png" alt=""/>
                                <img class="fl like_icon" src="img/like.png" alt=""/>
                                <span class="fl">苏洵</span><i class="fl">，</i>
                                <span class="fl">苏轼</span><i class="fl">，</i>
                                <span class="fl">苏辙 </span><i class="fl">，</i>
                                <span class="fl">苏小妹</span>
                            </div>
                            <div class="comment">
                                <dl>
                                    <dt class="clearfix">
                                        <span>苏洵</span>
                                        <i>：老夫一手培养的好女儿</i>
                                        <img class=" expression" src="img/expression_11.png" alt=""/>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>苏轼</span>
                                        <i>：我的妹妹</i>
                                        <img class=" expression" src="img/expression_15.png" alt=""/>

                                    </dt>
                                    <dt>
                                        <span>  苏辙</span>
                                        <i>回复</i>
                                        <span>苏洵</span>
                                        <i>：我前几天发现小妹玩手机</i>
                                    </dt>
                                    <dt>
                                        <span>    苏小妹</span>
                                        <i>回复</i>
                                        <span>苏辙</span>
                                        <i>：我在用尚德App补课！！</i>
                                    </dt>
                                    <dt>
                                        <span>    秦观</span>
                                        <i>：忘记屏蔽你们了！！！！</i>
                                        <img class=" expression" src="img/expression_12.png" alt=""/>
                                    </dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!--6-->
            <li class="clearfix">
                <div class="left_header fl clearfix">
                    <img class="fl" src="img/header_6.png" alt=""/>
                </div>
                <div style="min-height:7.46rem" class="rigth_con fl">
                    <h1>明熹宗</h1>

                    <p class="title">
                        我可能当了个假皇帝！
                        <br/>
                        大明皇家木匠铺子开业啦~
                        <img class=" expression_name" src="img/expression_13.png" alt=""/>
                    </p>

                    <div class="img_box clearfix">
                        <img class="img_1 fl" src="img/img_6.gif" alt=""/>
                    </div>
                    <div class="testing_centre">
                        <div class="times clearfix">
                            <span class="act fl">考点</span>
                            <span class="fl">明朝&bull;应天&nbsp;&nbsp;公元1368年</span>
                        </div>
                        <div class="content clearfix">
                            <span class="fl">明朝思想控制加重，八股取士盛行<em class="right_icon"></em></span>
                            <img class="fr" src="img/iocn_2.jpg" alt=""/>
                        </div>
                        <div class="interaction">
                            <div class="like clearfix">
                                <img class="trigon" src="img/trigon.png" alt=""/>
                                <img class="fl like_icon" src="img/like.png" alt=""/>
                                <span class="fl">明熹宗 </span>
                            </div>
                            <div class="comment">
                                <dl>
                                    <dt class="clearfix">
                                        <span>老臣</span>
                                        <i>：使不得呀皇上贵体保重！</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>     明熹宗</span>
                                        <i>回复</i>
                                        <span>老臣</span>
                                        <i>：科举兴八股后，人才辈出，<br/> 压力大。。学门手艺饿不死。。</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>      老臣</span>
                                        <i>回复</i>
                                        <span>明熹宗</span>
                                        <i>：私聊皇上！民间流行一个叫尚德机构的App，学子们都是靠的这个考上的科举！！</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>     明熹宗</span>
                                        <i>回复</i>
                                        <span>老臣</span>
                                        <i>：我下一个看看！！</i>
                                        <img class="expression_name" src="img/expression_11.png" alt=""/>
                                    </dt>
                                </dl>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!--7-->
            <li class="clearfix">
                <div class="left_header fl clearfix">
                    <img class="fl" src="img/header_7.png" alt=""/>
                </div>
                <div style="min-height:7.09rem" class="rigth_con fl">
                    <h1>纳兰性德</h1>

                    <p class="title">
                        少女们，来尚德APP看我直播！
                        <br/>
                        #纳兰性德个人巡回演出又双叒叕来了#
                    </p>

                    <div class="img_box clearfix">
                        <img class="img_1 fl" src="img/img_7.gif" alt=""/>
                    </div>
                    <div class="testing_centre">
                        <div class="times clearfix">
                            <span class="act fl">考点</span>
                            <span class="fl">清朝&bull;北京&nbsp;&nbsp;公元1644年</span>
                        </div>
                        <div class="content clearfix">
                            <span class="fl">清朝建立思想控制，文化专制，大兴“文字狱”<em class="right_icon"></em></span>
                            <img class="fr" src="img/iocn_2.jpg" alt=""/>
                        </div>
                        <div class="interaction">
                            <div class="like clearfix">
                                <img class="trigon" src="img/trigon.png" alt=""/>
                                <img class="fl like_icon" src="img/like.png" alt=""/>
                                <span class="fl">明珠</span><i class="fl">，</i>
                                <span class="fl">卢氏</span><i class="fl">，</i>
                                <span class="fl">沈宛</span>
                            </div>
                            <div class="comment">
                                <dl>
                                    <dt class="clearfix">
                                        <span>明珠</span>
                                        <i>：儿子千万别乱说话！！当心文字狱</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>     纳兰性德</span>
                                        <i>回复</i>
                                        <span>明珠</span>
                                        <i>好的DADDY</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>       明珠</span>
                                        <i>回复</i>
                                        <span>纳兰性德</span>
                                        <i>观看老师演出直播请下载,<br/>尚德机构官方App</i>
                                        <img class=" expression" src="img/expression_14.png" alt=""/>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>纳兰官微</span>
                                        <i>：下载尚德机构官方App获得网红 <br/>纳兰老师签名写真 </i>
                                        <img class=" expression_name" src="img/expression_11.png" alt=""/>
                                    </dt>
                                </dl>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!--8-->
            <li class="clearfix">
                <div class="left_header fl clearfix">
                    <img class="fl" src="img/header_8.png" alt=""/>
                </div>
                <div style="min-height:7.38rem" class="rigth_con fl">
                    <h1>喜儿</h1>

                    <p class="title">
                        爹爹，我已经考到了法律本科！
                        <br/>
                        我们终于可以好好过年了。
                    </p>

                    <div class="img_box clearfix">
                        <img class="img_1 fl" src="img/img_8.jpg" alt=""/>
                    </div>
                    <div class="testing_centre">
                        <div class="times clearfix">
                            <span class="act fl">考点</span>
                            <span class="fl">清灭亡后&bull;北京&nbsp;&nbsp;1915年</span>
                        </div>
                        <div class="content clearfix">
                            <span class="fl">“反传统、反孔教、反文言”的思想文化革新、文学革命运动。<em class="right_icon"></em></span>
                            <img class="fr" src="img/iocn_2.jpg" alt=""/>
                        </div>
                        <div class="interaction">
                            <div class="like clearfix">
                                <!-- <img class="trigon" src="img/trigon.png" alt=""/>
                                 <img class="fl like_icon" src="img/like.png" alt=""/>
                                 <span class="fl">王翦</span><i class="fl">，</i>
                                 <span class="fl">蒙毅</span><i class="fl">，</i>
                                 <span class="fl">李斯</span><i class="fl">，</i>
                                 <span class="fl">王贲</span>-->
                            </div>
                            <div style="position: relative" class="comment">
                                <img class="trigon trigon2" src="img/trigon.png" alt="">
                                <dl>
                                    <dt class="clearfix">
                                        <span>穆仁智</span>
                                        <i>：这就是衙门口，你到哪说理去？</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>杨白劳</span>
                                        <i>：闺女，爹买了一条红头绳给你。</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>黄世仁</span>
                                        <i>：父债女偿~来按手印吧！</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>喜儿</span>
                                        <i>回复</i>
                                        <span>黄世仁</span>
                                        <i>：爹爹我在尚德机构App分期付款学完了法律本科，我现在是一名律师，让喜儿来养你！</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>       喜儿</span>
                                        <i>回复</i>
                                        <span>杨白劳</span>
                                        <i>：根据我国法律规定的民间借贷</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>      喜儿</span>
                                        <i>：分期付款 学本科没压力！@all</i>
                                    </dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!--9-->
            <li class="clearfix">
                <div class="left_header fl clearfix">
                    <img class="fl" src="img/header_9.png" alt=""/>
                </div>
                <div style="min-height:7.41rem" class="rigth_con fl">
                    <h1>来广营彭于晏</h1>

                    <p class="title">
                        这样就可以拿到学历了！
                    </p>

                    <div class="img_box clearfix">
                        <img class="img_1 fl" src="img/img_9.png" alt=""/>
                    </div>
                    <div class="testing_centre">
                        <div class="times clearfix">
                            <span class="act act2 fl">改革</span>
                            <span style="font-size: 0.23rem;width: 4.6rem"
                                  class="fl">高等学历继续教育专业设置管理办法&nbsp;&nbsp;2017年<em class="right_icon"></em></span>
                            <img class="fr iocn_2" src="img/iocn_2.jpg" alt=""/>
                        </div>
                        <!-- <div class="content clearfix">
                             <span class="fl">秦大一统，统一度量衡，焚书坑儒</span>
                         </div>-->
                        <div class="interaction">
                            <div class="like clearfix">
                                <img class="trigon" src="img/trigon.png" alt=""/>
                                <img class="fl like_icon" src="img/like.png" alt=""/>
                                <span class="fl">常州陈伟停 </span><i class="fl">，</i>
                                <span class="fl">武汉牛诗诗</span><i class="fl">，</i>
                                <span class="fl">外滩鹿寒</span>
                            </div>
                            <div class="comment">
                                <dl>
                                    <dt class="clearfix">
                                        <span>外滩鹿寒</span>
                                        <i>：啥?你都拿到本科毕业证了！</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span> 来广营彭于晏</span>
                                        <i>回复</i>
                                        <span>外滩鹿寒</span>
                                        <i>：可不嘛！明年就改革了</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>武汉牛诗诗</span>
                                        <i>：</i>
                                        <img class=" expression" src="img/expression_15.png" alt=""/>
                                        <i>本仙女早在尚德考完了本科，正在学MBA</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span>陈伟霆</span>
                                        <i>：我昨天还用App和我的粉丝互动</i>
                                    </dt>
                                    <dt class="clearfix">
                                        <span><?php echo $nickname;?></span>
                                        <i>：我高中毕业5年，还能考本科吗？</i>
                                    </dt>
                                    <dt style="height:1.15rem ;" class="clearfix">
                                        <span>小康老师</span>
                                        <i>回复</i>
                                        <span>我</span>
                                        <i></i>
                                    <div style="display: none" class="bb">：当然可以，现在下载App，每天都有免费的本科课程，我给你发二维码你扫一扫</div>
                                    <!-- <img class="expression_name" src="img/expression_11.png" alt=""/>-->
                                    </dt>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!--<div class="hb" style="display: none">
   	 	<img style="display: none" class="my_btn" src="img/btn.png" alt=""/>
   	 	<img style="display: none" class="my_btn2" src="img/arrow.png" alt=""/>
    </div>-->
    <!--点赞评论弹窗-->
    <div style="display: none" class="like_pop clearfix ">
        <div class="fl like_btn"><img class="like1" src="img/like1.png" alt=""/>赞 <img class="hand"
                                                                                       src="img/hand.png" alt=""/>
        </div>
        <div class="fr comment_btn"><img class="mes" src="img/mes.png" alt=""/>评论</div>
    </div>
</div>
<!--二维码-->
<div style="display: none" class="qr page9">
	<img src="img/sharr.png" class="sharr animated bounceIns">
	<p class="sharrp">点我分享！</p>
    <img src="img/marrs.jpg">
</div>
<script src="js/style.js"></script>
<script src="js/canvas.js"></script>

</body>
</html>