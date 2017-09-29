<?php 
include __DIR__.'/../../includes/header.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1" />
    <title>会员注册</title>
    <link rel="stylesheet" type="text/css" href="../../css/base.css">
    <link rel="stylesheet" type="text/css" href="../../css/nctouch_member.css">
</head>

<body>
    <header id="header">
        <div class="header-wrap">
            <div class="header-l"><a href="../../index.html"><i class="home"></i></a></div>
            <div class="header-title">
                <h1>会员注册</h1>
            </div>
            <div class="header-r"> <a id="header-nav" href="login.html" class="text">登录</a> </div>
        </div>
    </header>
    <div class="nctouch-main-layout fixed-Width">
        <div class="nctouch-single-nav mb5 register-tab">
            <ul>
                <li><a href="register.html"><i class="reg"></i>普通注册</a></li>
                <li class="selected"><a href="javascript: void(0);"><i class="regm"></i>手机注册</a></li>
            </ul>
        </div>
        <div class="nctouch-inp-con">
            <form action="" method="">
                <ul class="form-box">
                    <li class="form-item">
                        <h4>手&nbsp;机&nbsp;号</h4>
                        <div class="input-box">
                            <input type="tel" placeholder="请输入手机号" class="inp" name="usermobile" id="usermobile" oninput="writeClear($(this));" maxlength="11" />
                            <span class="input-del"></span></div>
                    </li>
                    <li class="form-item">
                        <h4>验&nbsp;证&nbsp;码</h4>
                        <div class="input-box">
                            <input type="text" id="captcha" name="captcha" maxlength="4" size="10" class="inp" autocomplete="off" placeholder="输入4位验证码" oninput="writeClear($(this));" />
                            <span class="input-del code"></span>
                            <a href="javascript:void(0)" id="refreshcode" class="code-img"><img border="0" id="codeimage" name="codeimage"></a>
                            <input type="hidden" id="codekey" name="codekey" value="">
                        </div>
                    </li>
                </ul>
                <div class="remember-form">
                    <input id="checkbox" type="checkbox" checked="">
                    <label for="checkbox">同意</label>
                    <a class="reg-cms" href="document.html" target="_blank">用户注册协议</a> </div>
                <div class="error-tips"></div>
                <div class="form-btn"><a href="javascript:void(0);" class="btn" id="refister_mobile_btn">获取验证码</a></div>
                <div class="form-notes">绑定手机不收任何费用，一个手机只能绑定一个账号，若需修改或解除已绑定的手机，请登录商城PC端进行操作。</div>
            </form>
        </div>
        <input type="hidden" name="referurl">
    </div>
    <footer id="footer" class="bottom"></footer>
    
    <script type="text/javascript" src="../../js/zepto.min.js"></script>
    <script type="text/javascript" src="../../js/common.js"></script>
    <script type="text/javascript" src="../../js/simple-plugin.js"></script>
    <script type="text/javascript" src="../../js/tmpl/footer.js"></script>
    <script type="text/javascript" src="../../js/tmpl/register_mobile.js"></script>
</body>

</html>
<?php 
include __DIR__.'/../../includes/footer.php';
?>