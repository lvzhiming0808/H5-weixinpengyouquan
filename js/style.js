//第二页动画js
$(document).ready(function () {
    setTimeout(function () {
        $(".page1").hide();
        $(".page2").show();
        setTimeout(function () {
            $('.animt-peop-wo').show();
        }, 500);
        setTimeout(function () {
            $('.animt-peop-shi').show();
        }, 1500);
        setTimeout(function () {
            $('.animt-peop-lipng').show();
        }, 2000);
        setTimeout(function () {
            $('.animt-peop-bai').show();
        }, 2500);
        setInterval(function () {
            $(".kaostyle-1").fadeOut(200).fadeIn(200);
        }, 800);
        setInterval(function () {
            $(".kaostyle-2").fadeOut(200).fadeIn(200);
        }, 800);
        setInterval(function () {
            $(".kaostyle-3").fadeOut(200).fadeIn(200);
        }, 800);
        setInterval(function () {
            $(".kaostyle-4").fadeOut(200).fadeIn(200);
        }, 800);
        setInterval(function () {
            msg();
        }, 200)
        function msg() {
            var ys = $(".kaostyle-5")
            if (!($(ys).is(":animated"))) {
                $(ys).animate({"top": "3.7rem",}, 200).animate({"top": "3.6rem",}, 200)
                        .animate({"top": "3.7rem",}, 200).animate({"top": "3.6rem",}, 200)
                        .animate({"top": "3.7rem",}, 200).animate({"top": "3.6rem",}, 200)
                //.animate({"top":"-1px",},200).animate({"top":"-0px",},200);
            }
        }
    }, 2000);
});
//第三页js
$(document).ready(function () {
    $(".choose_btn").on("click", function () {
        var imgurl = $(this).attr("src");
        var maxlength = imgurl.length;
       // console.log(imgurl)
       // console.log(maxlength)
        var changsrc = imgurl.substr(0, (maxlength - 4));
       // console.log(changsrc)
        $(this).attr("src", changsrc + "_1.png")
    })
    $(".imgbtn2").on("click", function () {
        setTimeout(function () {
            $(".page2").hide();
            $(".page3").show();
            setInterval(function () {
                $(".kaostyle-2-2").fadeOut(1000).fadeIn(700);
            }, 1000);
            setInterval(function () {
                $(".kaostyle-3-2").fadeOut(1200).fadeIn(200);
            }, 2000);
            setInterval(function () {
                $(".kaostyle-4-2").fadeOut(2000).fadeIn(600);
            }, 3000);
            setInterval(function () {
                $(".kaostyle-4-3").fadeOut(1500).fadeIn(200);
            }, 4000);
            setInterval(function () {
                $(".kaostyle-4-2-2").fadeOut(1100).fadeIn(200);
            }, 5000);
            setInterval(function () {
                msg();
            }, 200)
            function msg() {
                var ys = $(".animt-peop-li2")
                if (!($(ys).is(":animated"))) {
                    $(ys).animate({"top": "-1.5rem",}, 200).animate({"top": "-1.4rem",}, 200)
                            .animate({"top": "-1.5rem",}, 200).animate({"top": "-1.4rem",}, 200)
                            .animate({"top": "-1.5rem",}, 200).animate({"top": "-1.4rem",}, 200)
                    //.animate({"top":"-1px",},200).animate({"top":"-0px",},200);
                }
            }
        }, 100);
    });
});
//第四页
$(document).ready(function () {
    $(".imgbtn3").click(function () {
        setTimeout(function () {
            $(".page3").hide();
            $(".page4").show();
            setTimeout(function () {
                $('.guiji').show();
            }, 500);
            setTimeout(function () {
                $('.haizi').show();
            }, 800);
            setTimeout(function () {
                $('.starpng').show();
            }, 1500);
            setTimeout(function () {
                $('.redbg').show();
            }, 1200);

            setInterval(function () {
                msg();
            }, 200)
            function msg() {
                var hz = $(".haizi")
                if (!($(hz).is(":animated"))) {
                    $(hz).animate({"top": "2rem",}, 200).animate({"top": "1.9rem",}, 200)
                            .animate({"top": "2rem",}, 200).animate({"top": "1.9rem",}, 200)
                            .animate({"top": "2rem",}, 200).animate({"top": "1.9rem",}, 200)
                }
            }
        }, 100);

    });
});

//第五页微信聊天页js
$(document).ready(function () {
    $(".imgbtn4").click(function () {
    	setTimeout(function () {
            $(".libai").append("<div id='audio_btn' class='off rotate' data-event='11205' style='display: block;'><audio src='source/duanxin.mp3' id='media' autoplay></audio></div>");
        }, 1000);
        setTimeout(function () {
            $(".yingzheng").append("<div id='audio_btn' class='off rotate' data-event='11205' style='display: block;'><audio src='source/duanxin.mp3' id='media' autoplay></audio></div>");
        }, 3000);
        setTimeout(function () {
            $(".wangzhaojun").append("<div id='audio_btn' class='off rotate' data-event='11205' style='display: block;'><audio src='source/duanxin.mp3' id='media' autoplay></audio></div>");
        }, 4000);
        setTimeout(function () {
            $(".wangwei").append("<div id='audio_btn' class='off rotate' data-event='11205' style='display: block;'><audio src='source/duanxin.mp3' id='media' autoplay></audio></div>");
        }, 8000);
        setTimeout(function () {
            $(".libaihongbao").append("<div id='audio_btn' class='off rotate' data-event='11205' style='display: block;'><audio src='source/duanxin.mp3' id='media' autoplay></audio></div>");
        }, 10000);
        setTimeout(function () {
            $(".page4").hide();
            $(".page5").show();

            setTimeout(function () {
                $('.libai').show();
            }, 1000);
            setTimeout(function () {
                $('.wo1zonghe').show();
            }, 2000);
            setTimeout(function () {
                $('.wo1-2').show();
            }, 2500);
            setTimeout(function () {
                $('.wo1-2').addClass("bounceIns");
            }, 2000);
            setTimeout(function () {
                $('.petitle').show();
            }, 2000);
            setTimeout(function () {
                $('.yingzheng').show();
            }, 3000);
            setTimeout(function () {
                $('.wangzhaojun').show();
            }, 4000);
            setTimeout(function () {
                $('.wo2zonghe').show();
            }, 5000);
            setTimeout(function () {
                $('.wo2').show();
            }, 5000);
            setTimeout(function () {
                $('.wo2-1').show();
            }, 5000);
            setTimeout(function () {
                $('.wo3zonghe').show();
            }, 6000);
            setTimeout(function () {
                $('.wo3').show();
            }, 6000);
            setTimeout(function () {
                $('.wo3-1').show();
            }, 6000);
            setTimeout(function () {
                $('.wo4zonghe').show();
            }, 7000);
            setTimeout(function () {
                $('.wo4').show();
            }, 7000);
            setTimeout(function () {
                $('.wo4-1').show();
            }, 7000);
            setTimeout(function () {
                $('.wangwei').show();
            }, 8000);
            setTimeout(function () {
                $('.wo5zonghe').show();
            }, 9000);
            setTimeout(function () {
                $('.wo5').show();
            }, 9000);
            setTimeout(function () {
                $('.wo5-1').show();
            }, 9000);
            setTimeout(function () {
                $('.libaihongbao').show();
            }, 10000);
            
            setTimeout(function () {
                $(".dal-qunliao").hide();
            }, 5000);
            setTimeout(function () {
                $(".dal-time").hide();
            }, 6000);
            setTimeout(function () {
                $(".libai").hide();
            }, 7000);
            setTimeout(function () {
                $(".wo1zonghe").hide();
            }, 8000);
            setTimeout(function () {
                $(".yingzheng").hide();
            }, 9000);
            setTimeout(function () {
                $(".wangzhaojun").hide();
            }, 10000);
            
        }, 100);
    });
    $(".libaihongbao").click(function () {
    	$(".page5").hide();
        $(".page6").show();
    });
});

//禁止用户自己触摸滑动
var jinzhi=0;
document.addEventListener("touchmove",function(e){
if(jinzhi==0){
e.preventDefault();
e.stopPropagation();
}
},false);

//$(".qr").click(function(){   
//   //点击图片后发送跳转到指定页面的事件。
//  window.location.href="http://mobile.sunland.org.cn/activity/mlink/getExtentionPage?channel=weixin&scene=H5&configUser=wangyuexin&pageDetail=homepage&reserveParam1=qianduanbangongshi&reserveParam2=maersi&reserveParam3=qita"；  
//})