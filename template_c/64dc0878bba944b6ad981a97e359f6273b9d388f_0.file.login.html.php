<?php /* Smarty version 3.1.27, created on 2016-03-16 09:03:28
         compiled from "template\Admin\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:2826856e8b0e0973f87_10843191%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0878bba944b6ad981a97e359f6273b9d388f' => 
    array (
      0 => 'template\\Admin\\login.html',
      1 => 1457959173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2826856e8b0e0973f87_10843191',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e8b0e0d48a66_58474833',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e8b0e0d48a66_58474833')) {
function content_56e8b0e0d48a66_58474833 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2826856e8b0e0973f87_10843191';
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>登录 - 360商城后台管理系统</title>
        <?php echo '<script'; ?>
 src="<?php echo TPL_PATH;?>
/Admin/js/jquery.min.js"><?php echo '</script'; ?>
>
        <STYLE>
	        body{
	        	background: #f8f8f8;
	        	font-family: "Helvetica Neue","Hiragino Sans GB","Microsoft YaHei","\9ED1\4F53",Arial,sans-serif;
	        	color: #222;
	        	font-size: 12px;
	        }
	        *{
	        	padding: 0px;margin: 0px;
	        }
	        .top_div{
	        	background: #89D92B;
	        	width: 100%;
	        	height: 400px;
	        	line-height: 220px;
	        	font-size: 80px;
	        	font-family: '方正正中黑简体','microsoft Yahei';
	        	color:white;
	        	text-align:center;
	        	text-shadow: 0px 6px 0px #7CAC42;
	        }
	        .ipt{
	        	border: 1px solid #d3d3d3;
	        	padding: 10px 10px;
	        	width: 290px;
	        	border-radius: 4px;
	        	padding-left: 35px;
	        	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	        	box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	        	-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	        	-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	        	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	        }
	        .ipt:focus{
	        	border-color: #66afe9;
	        	outline: 0;
	        	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
	        	box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
	        }
            .verify-input{
                display:inline-block;
                margin-top:10px;
                border: 1px solid #d3d3d3;
                padding: 10px 10px;
                width: 170px;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
                -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            }
            .verify-input:focus{
                border-color: #66afe9;
                outline: 0;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
            }
            .left{
                float:left;
                margin-left: 32px;
                width: 180px;
            }
            .right{
                float:left;
                margin-left: 2px;
                width: 170px;
            }
            #verify-img{
                margin-top:10px;
                display:inline-block;
            }
	        .u_logo{
	        	background: url("<?php echo TPL_PATH;?>
/Admin/images/username.png") no-repeat;
	        	padding: 10px 10px;
	        	position: absolute;
	        	top: 43px;
	        	left: 40px;

	        }
	        .p_logo{
	        	background: url("<?php echo TPL_PATH;?>
/Admin/images/password.png") no-repeat;
	        	padding: 10px 10px;
	        	position: absolute;
	        	top: 12px;
	        	left: 40px;
	        }
	        a{
	        	text-decoration: none;
	        }
	        .tou{
	        	background: url("<?php echo TPL_PATH;?>
/Admin/images/tou.png") no-repeat;
	        	width: 97px;
	        	height: 92px;
	        	position: absolute;
	        	top: -87px;
	        	left: 140px;
	        }
	        .left_hand{
	        	background: url("<?php echo TPL_PATH;?>
/Admin/images/left_hand.png") no-repeat;
	        	width: 32px;
	        	height: 37px;
	        	position: absolute;
	        	top: -38px;
	        	left: 150px;
	        }
	        .right_hand{
	        	background: url("<?php echo TPL_PATH;?>
/Admin/images/right_hand.png") no-repeat;
	        	width: 32px;
	        	height: 37px;
	        	position: absolute;
	        	top: -38px;
	        	right: -64px;
	        }
	        .initial_left_hand{
	        	background: url("<?php echo TPL_PATH;?>
/Admin/images/hand.png") no-repeat;
	        	width: 30px;
	        	height: 20px;
	        	position: absolute;
	        	top: -12px;
	        	left: 100px;
	        }
	        .initial_right_hand{
	        	background: url("<?php echo TPL_PATH;?>
/Admin/images/hand.png") no-repeat;
	        	width: 30px;
	        	height: 20px;
	        	position: absolute;
	        	top: -12px;
	        	right: -112px;
	        }
	        .left_handing{
	        	background: url("<?php echo TPL_PATH;?>
/Admin/images/left-handing.png") no-repeat;
	        	width: 30px;
	        	height: 20px;
	        	position: absolute;
	        	top: -24px;
	        	left: 139px;
	        }
	        .right_handinging{
	        	background: url("<?php echo TPL_PATH;?>
/Admin/images/right_handing.png") no-repeat;
	        	width: 30px;
	        	height: 20px;
	        	position: absolute;
	        	top: -21px;
	        	left: 210px;
	        }

            .submit{
                outline:none;
                border:none;
                display:block;
                font-family: 'microsoft Yahei';
                font-size: 18px;
                padding:15px 170px;
                margin:0 auto;
                margin-top: 10px;
                color:white;
                font-weight: bold;
                background: #89D92B;
                transition:all .3s;
            }

            .submit:hover{
                background: #98E83B;
            }

            .submit:active{
                background: #81C335;
            }
            .clear{
                clear:both;
            }
        </STYLE>
        <SCRIPT type="text/javascript">
        //验证码切换
        function verifyChange(){
            document.getElementById('verify-img').setAttribute('src',"<?php echo U('Common/verify/r/');?>
"+Math.random()+'.png');
        }
        
        $(function(){
        	//得到焦点
        	$("#password").focus(function(){
        		$("#left_hand").animate({
        			left: "150",
        			top: " -38"
        		},{step: function(){
        			if(parseInt($("#left_hand").css("left"))>140){
        				$("#left_hand").attr("class","left_hand");
        			}
        		}}, 2000);
        		$("#right_hand").animate({
        			right: "-64",
        			top: "-38px"
        		},{step: function(){
        			if(parseInt($("#right_hand").css("right"))> -70){
        				$("#right_hand").attr("class","right_hand");
        			}
        		}}, 2000);
        	});
        	//失去焦点
        	$("#password").blur(function(){
        		$("#left_hand").attr("class","initial_left_hand");
        		$("#left_hand").attr("style","left:100px;top:-12px;");
        		$("#right_hand").attr("class","initial_right_hand");
        		$("#right_hand").attr("style","right:-112px;top:-12px");
        	});
        });
        </SCRIPT>
        
        <META name="GENERATOR" content="MSHTML 11.00.9600.17496"></HEAD> 
    </head>
    <body>
        <form action="<?php echo U('admin/login');?>
" method="POST">
            <div class="top_div">
                360商城后台
            </div>
            <div style="background: rgb(255, 255, 255); margin: -100px auto auto; border: 1px solid rgb(231, 231, 231); border-image: none; width: 400px; text-align: center;">
                <div style="width: 165px; height: 96px; position: absolute;">
                    <div class="tou"></div>
                    <div class="initial_left_hand" id="left_hand"></div>
                    <div class="initial_right_hand" id="right_hand"></div>
                </div>
                <p style="padding: 30px 0px 10px; position: relative;">
                    <span class="u_logo"></span>
                    <input class="ipt" type="text" name="username" placeholder="请输入用户名" value=""> 
                </p>
                <p style="position: relative;"><span class="p_logo"></span>         
                  <input class="ipt" id="password" name="password" type="password" placeholder="请输入密码" value="">   
                </p>
                <p style="position: relative;height:">  
                    <div class="left"><input class="verify-input" id="verify" name="verify" type="text" placeholder="请输入验证码"  value=""></div>      
                    <div class="right"><img id='verify-img' src="<?php echo U('Common/verify/r/0.png');?>
" onclick="verifyChange();"></div>      
                </p>
                <div class="clear"></div>
                <div style="height: 75px; margin-top: 10px; border-top-color: rgb(231, 231, 231); border-top-width: 1px; border-top-style: solid;">
                    <button class="submit" type="submit">登 录</button>
                </div>
            </div>
        </form>
	</body>
</html><?php }
}
?>