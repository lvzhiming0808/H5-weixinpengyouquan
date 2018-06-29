var canvas, board, img;
canvas = document.getElementById('myCanvas');
img = document.getElementById('img');
//获取屏幕的宽度
var clientWidth = document.documentElement.clientWidth;
//根据设计图中的canvas画布的占比进行设置
var designWidth = 660;
var designHeight = 600;
var canvasWidth = Math.floor(clientWidth * designWidth / 750);
var canvasHeight = Math.floor(designHeight * canvasWidth / designWidth);
canvas.setAttribute('width', canvasWidth + 'px');
canvas.setAttribute('height', canvasHeight + 'px');
$(".my_vanvas").css("width", canvasWidth);
$(".my_vanvas").css("height", canvasHeight);
//translate方法也可以直接传入像素点坐标
board = canvas.getContext('2d');
var mousePress = false;
var hasCanvas = false;
var last = null;
function beginDraw() {
    mousePress = true;
}
function drawing(event) {
    hasCanvas = true;
    //  console.log('画板已有内容')
    event.preventDefault();
    if (!mousePress)return;
    var xy = pos(event);
    if (last != null) {
        board.beginPath();
        board.moveTo(last.x, last.y);
        board.lineTo(xy.x, xy.y);
        board.stroke();
    }
    last = xy;
}
function endDraw(event) {
    mousePress = false;
    event.preventDefault();
    last = null;
}
//缩小比例
k = $(window).width() / 750;
var parentx = ($(window).width() - $(".my_vanvas  ").width()) / 2;
var parenty = (parseInt($(".my_vanvas  ").css("margin-top")) );
/*var parentx = $(".my_vanvas")[0].offsetLeft;
 var parenty = $(".my_vanvas")[0].offsetTop;*/
function pos(event) {
    var x, y;
    if (isTouch(event)) {
        x = event.touches[0].pageX - parentx;
        y = event.touches[0].pageY - parenty;
        // console.log(x)
        // console.log(y)
    } else {
        x = event.offsetX + event.target.offsetLeft;
        y = event.offsetY + event.target.offsetTop;
        //   console.log(2)
    }
    // log('x='+x+' y='+y);
    return {x: x, y: y};
}

function log(msg) {
    var log = document.getElementById('log');
    var val = log.value;
    log.value = msg + 'n' + val;
}

function isTouch(event) {
    var type = event.type;
    if (type.indexOf('touch') >= 0) {
        return true;
    } else {
        return false;
    }
}
var n = 0;
//console.log(k)
function save() {
    var dataUrl = canvas.toDataURL();
    img.src = dataUrl;
    if (hasCanvas) {
        $(".canvas_box").hide();
        $(".friends").show();
        $(".friends_list").show();
        $(".my_btn").show();
        $(".canvas_img").show();
        //debugger;
        var arr = []; //每条朋友圈li距父元素ul的距离
        for (var i = 0; i < $(".friends_list ul li").length; i++) {
            arr.push(parseInt($(".friends_list ul li").eq(i).offset().top));
            //  console.log(arr[i]);
        }
        $("body").css("height", 'auto')
        function scroll() {
            n++;
            $("body")[0].scrollTop = n;
            if (n == arr[0]) {
                /*嬴政*/
                clearInterval(time);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .content em").eq(0).fadeIn();
                }, 500);

                /*点赞4*/
                //   $(".friends_list ul li .rigth_con .testing_centre .content").eq(0).find('span').css({    'text-decoration': 'underline', 'text-decoration-color': 'red'})
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(0).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(0).find("span").eq(0).css('visibility', ' visible');
                }, 1000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(0).find("span").eq(1).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(0).find("i").eq(0).css('visibility', ' visible')
                }, 1500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(0).find("span").eq(2).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(0).find("i").eq(1).css('visibility', ' visible')
                }, 2000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(0).find("span").eq(3).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(0).find("i").eq(2).css('visibility', ' visible')
                }, 2500);
                /*评论6*/
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(0).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(0).find("dt").eq(0).css('visibility', ' visible')
                }, 3000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(0).find("dt").eq(1).css('visibility', ' visible')
                }, 3500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(0).find("dt").eq(2).css('visibility', ' visible')
                }, 4000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(0).find("dt").eq(3).css('visibility', ' visible')
                }, 4500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(0).find("dt").eq(4).css('visibility', ' visible')
                }, 5000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(0).find("dt").eq(5).css('visibility', ' visible')
                }, 5500);
                setTimeout(run, 6000)
                //350
            } else if (n == arr[1]) {
                /*昭君_王*/
                clearInterval(time2);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .content em").eq(1).fadeIn();
                }, 500);
                /*点赞2*/
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(1).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(1).find("span").eq(0).css('visibility', ' visible');
                }, 1000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(1).find("span").eq(1).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(1).find("i").eq(0).css('visibility', ' visible')
                }, 1500);
                /*评论5*/
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(1).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(1).find("dt").eq(0).css('visibility', ' visible')
                }, 2000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(1).find("dt").eq(1).css('visibility', ' visible')
                }, 2500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(1).find("dt").eq(2).css('visibility', ' visible')
                }, 3000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(1).find("dt").eq(3).css('visibility', ' visible')
                }, 3500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(1).find("dt").eq(4).css('visibility', ' visible')
                }, 4000);
                setTimeout(function () {
                    $(".canvas_img").animate({right: "5.2rem", top: '6.3rem'}, '2000', function () {
                        $(".canvas_img").fadeOut(1500);
                    });
                }, 5000)
                setTimeout(run, 7000);
                //650
            } else if (n == arr[2]) {
                /*鲁肃*/
                clearInterval(time2);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .content em").eq(2).fadeIn();
                }, 500);
                /*点赞3*/
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(2).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(2).find("span").eq(0).css('visibility', ' visible');
                }, 1000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(2).find("span").eq(1).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(2).find("i").eq(0).css('visibility', ' visible')
                }, 1500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(2).find("span").eq(2).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(2).find("i").eq(1).css('visibility', ' visible')
                }, 2000);
                /*评论4*/
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(2).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(2).find("dt").eq(0).css('visibility', ' visible')
                }, 2500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(2).find("dt").eq(1).css('visibility', ' visible')
                }, 3000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(2).find("dt").eq(2).css('visibility', ' visible')
                }, 3500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(2).find("dt").eq(3).css('visibility', ' visible')
                }, 4000);
                setTimeout(function () {
                    $(".like_pop").show();
                    // $("body").css("height", '100%')
                    $(".like_btn").on("click", function () {
                        $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(2).find("span").eq(3).css('visibility', ' visible');
                        $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(2).find("i").eq(2).css('visibility', ' visible');
                        $(".like_pop").hide();
                        setTimeout(run, 500)
                    })
                }, 4500);

            } else if (n == arr[3]) {
                /*状元王维*/
                clearInterval(time2);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .content em").eq(3).fadeIn();
                }, 500);
                //点赞4
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(3).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(3).find("span").eq(0).css('visibility', ' visible');
                }, 1000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(3).find("span").eq(1).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(3).find("i").eq(0).css('visibility', ' visible')
                }, 1500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(3).find("span").eq(2).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(3).find("i").eq(1).css('visibility', ' visible')
                }, 2000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(3).find("span").eq(3).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(3).find("i").eq(2).css('visibility', ' visible')
                }, 2500);
                //评论7
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(3).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(3).find("dt").eq(0).css('visibility', ' visible')
                }, 3000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(3).find("dt").eq(1).css('visibility', ' visible')
                }, 3500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(3).find("dt").eq(2).css('visibility', ' visible')
                }, 4000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(3).find("dt").eq(3).css('visibility', ' visible')
                }, 4500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(3).find("dt").eq(4).css('visibility', ' visible')
                }, 5000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(3).find("dt").eq(5).css('visibility', ' visible')
                }, 5500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(3).find("dt").eq(6).css('visibility', ' visible');
                    text8()
                }, 6000);
                setTimeout(run, 9000)
            } else if (n == arr[4]) {
                /*秦观*/
                clearInterval(time2);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .content em").eq(4).fadeIn();
                }, 500);
                //点赞4
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(4).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(4).find("span").eq(0).css('visibility', ' visible');
                }, 1000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(4).find("span").eq(1).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(4).find("i").eq(0).css('visibility', ' visible')
                }, 1500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(4).find("span").eq(2).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(4).find("i").eq(1).css('visibility', ' visible')
                }, 2000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(4).find("span").eq(3).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(4).find("i").eq(2).css('visibility', ' visible')
                }, 2500);
                //评论5
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(4).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(4).find("dt").eq(0).css('visibility', ' visible')
                }, 3000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(4).find("dt").eq(1).css('visibility', ' visible')
                }, 3500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(4).find("dt").eq(2).css('visibility', ' visible')
                }, 4000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(4).find("dt").eq(3).css('visibility', ' visible')
                }, 4500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(4).find("dt").eq(4).css('visibility', ' visible')
                }, 5000);
                setTimeout(run, 5500)
            } else if (n == arr[5]) {
                /*明熹宗*/
                clearInterval(time2);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .content em").eq(5).fadeIn();
                }, 500);
                //点赞1
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(5).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(5).find("span").eq(0).css('visibility', ' visible');
                }, 1000);
                //评论4
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(5).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(5).find("dt").eq(0).css('visibility', ' visible')
                }, 1500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(5).find("dt").eq(1).css('visibility', ' visible')
                }, 2000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(5).find("dt").eq(2).css('visibility', ' visible')
                }, 2500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(5).find("dt").eq(3).css('visibility', ' visible')
                }, 3000);
                setTimeout(run, 3500)
            } else if (n == arr[6]) {
                /*纳兰性德*/
                clearInterval(time2);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .content em").eq(6).fadeIn();
                }, 500);
                //点赞3
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(6).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(6).find("span").eq(0).css('visibility', ' visible');
                }, 1000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(6).find("span").eq(1).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(6).find("i").eq(0).css('visibility', ' visible')
                }, 1500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(6).find("span").eq(2).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(6).find("i").eq(1).css('visibility', ' visible')
                }, 2000);
                //评论4
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(6).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(6).find("dt").eq(0).css('visibility', ' visible')
                }, 2500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(6).find("dt").eq(1).css('visibility', ' visible')
                }, 3000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(6).find("dt").eq(2).css('visibility', ' visible')
                }, 3500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(6).find("dt").eq(3).css('visibility', ' visible')
                }, 4000);
                setTimeout(run, 4500)
            } else if (n == arr[7]) {
                /*喜儿*/
                clearInterval(time2);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .content em").eq(7).fadeIn();
                }, 500);
                //评论6
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(7).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(7).find("dt").eq(0).css('visibility', ' visible')
                }, 1000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(7).find("dt").eq(1).css('visibility', ' visible')
                }, 1500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(7).find("dt").eq(2).css('visibility', ' visible')
                }, 2000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(7).find("dt").eq(3).css('visibility', ' visible')
                }, 2500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(7).find("dt").eq(4).css('visibility', ' visible')
                }, 3000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(7).find("dt").eq(5).css('visibility', ' visible')
                }, 3500);
                setTimeout(run, 4000)
            } else if (n == arr[8]) {
                /*来广营彭于晏*/
                clearInterval(time2);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .times span em").eq(0).fadeIn();
                }, 500);
                //点赞3
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(8).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(8).find("span").eq(0).css('visibility', ' visible');
                }, 1000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(8).find("span").eq(1).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(8).find("i").eq(0).css('visibility', ' visible')
                }, 1500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(8).find("span").eq(2).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .interaction .like").eq(8).find("i").eq(1).css('visibility', ' visible')
                }, 2000);
                //评论5
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(8).css('visibility', ' visible');
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(8).find("dt").eq(0).css('visibility', ' visible')
                }, 2500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(8).find("dt").eq(1).css('visibility', ' visible')
                }, 3000);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(8).find("dt").eq(2).css('visibility', ' visible')
                }, 3500);
                setTimeout(function () {
                    $(".friends_list ul li .rigth_con .testing_centre .comment").eq(8).find("dt").eq(3).css('visibility', ' visible')
                }, 4000);
                setTimeout(function () {
                    $(".like_pop").show();
                    $(".like_pop").css('top', '6.4rem');
                    $(".like_pop .hand").css('margin-left', '1.2rem');
                    $(".like_btn").on("click", function () {
                        $(".like_pop").hide();
                        $(".friends_list ul li .rigth_con .testing_centre .comment").eq(8).find("dt").eq(4).css('visibility', ' visible')
                        setTimeout(function () {
                            $(".friends_list ul li .rigth_con .testing_centre .comment").eq(8).find("dt").eq(5).css('visibility', ' visible');
                            text9();
                            clearInterval(time2);
                        }, 500);
						setTimeout(function () {
							$(".page7").hide();
                            $(".page8").hide();
        					$(".page9").show();
                        }, 5000);
//                      setTimeout(function () {
//                          $(".my_btn").addClass("bounceIns");
//                      }, 3000);
//                      $(".my_btn").on("click", function () {
//                          $(".canvas_img").hide();
//                          $(".my_interact").hide();
//                          $(".my_btn").hide();
//                          $(".qr").show()
//                      })

                    })
                }, 4500);
            }
        }

        time = setInterval(scroll, 1);
        function run() {
            $(".canvas_img").css({top: '3.67rem', right: '0.2rem'});
            $(".canvas_img").fadeIn();
            time2 = setInterval(scroll, 1)
        }

        function text8() {
            var index1 = 0;
            var word1 = $(".aa").html();
            var maxlength1 = word1.length;

            function type() {
                if (index1 > maxlength1) {
                    clearInterval(time8)
                }
                $(".friends_list ul li .rigth_con .testing_centre .comment").eq(3).find("dt").eq(6).find("i").html(word1.substring(0, index1++))
            }

            time8 = setInterval(type, 100);
        }

        function text9() {
            var index1 = 0;
            var word1 = $(".bb").html();
            var maxlength1 = word1.length;

            function type() {
                if (index1 > maxlength1) {
                    clearInterval(time8)
                }
                $(".friends_list ul li .rigth_con .testing_centre .comment").eq(8).find("dt").eq(5).find("i").eq(1).html(word1.substring(0, index1++))
            }

            time8 = setInterval(type, 100);
        }
    } else {
        alert("请创建人物形象哦")
    }
}

function clean() {
    board.clearRect(0, 0, canvas.width, canvas.height);

}
board.lineWidth = 5;
board.strokeStyle = "#000";
canvas.onmousedown = beginDraw;
canvas.onmousemove = drawing;
canvas.onmouseup = endDraw;
canvas.addEventListener('touchstart', beginDraw, false);
canvas.addEventListener('touchmove', drawing, false);
canvas.addEventListener('touchend', endDraw, false)




