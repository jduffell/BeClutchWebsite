 <style type="text/css">
	#container-padding {
    display: inline-block;
}
span.index-top.drop-brightness {
    display: inline-block;
    margin-bottom: 10px;
}
.dev {
    border: 15px ridge #9DA82E;
    text-align: center;
}
.leftdiv, .rightdiv {
    width: 47.5%;
    float: left;
    padding: 1%;
}
.clr {
	clear:both;
}
.leftdiv {
    border-right: 3px dotted #505B1E;
}
.leftdiv h1, .rightdiv h1 {
	font-size:28px;
    color: #505B1E;
}
.leftdiv img, .rightdiv img {
	width:80%;
}
.submenu {
    position: absolute;
    margin-left: -110px;
    margin-top: 30px;
    background: #9DA82E;
    border-radius: 4px;
    padding: 10px 0;
    z-index: 99999;
    box-shadow: 1px 1px 1px #99805A;
    display: none;
}
.dev strong {
    color: #4E5417;
    font-size: 20px;
    font-weight: bold;
}
.submenu a img {
    width: 50px;
    height: 50px;
}
.submenu a {
    font-size: 34px;
    vertical-align: top;
    line-height: 50px;
}
</style>
<script>
$(document).ready(function(){
	$("a.menu-item.devmenu" ).hover(function() {
		$(".submenu").css("display", "inline-block");
	});
	$(".submenu").mouseleave(function() {
		$(this).fadeOut(500);
	});
});
</script>
<div id="header">
	<div id="header-inner">
		<a href="<?php echo $http_root?>" class="left" id="header-logo"></a>

		<?php if(!$_SESSION['id']) include "modules/login-form.php"; ?>

		<div id="menu" class="right">
			<a href="<?php echo $http_root?>" class="menu-item<?php if($page_id == 0) echo ' menu-item-active'?>"><span class="fa">&#xf042;&nbsp;&nbsp;</span>HOME</a>
			<a href="#" class="menu-item devmenu <?php if($page_id == 1) echo ' menu-item-active'?>"><span class="fa">&#xf042;&nbsp;&nbsp;</span>PRODUCTS</a>
            <div class="submenu">
            	<a href="<?php echo $http_root?>/switch" class="menu-item"><img src="<?php echo $http_root?>/switch_frame.png"> TOUCH</a><br><br>
                <a href="<?php echo $http_root?>/thermostat" class="menu-item"><img src="<?php echo $http_root?>/eos_frame.png"> EOS</a>
            </div>
			<a href="<?php echo $http_root?>/contact" class="menu-item <?php if($page_id == 2) echo ' menu-item-active'?>"><span class="fa">&#xf042;&nbsp;&nbsp;</span>CONTACT US</a>

			<?php if(!$_SESSION['id']):?>
				<a href="#" id="login-header-button" class="menu-item <?php if($page_id == 3) echo ' menu-item-active'?>"><span class="fa">&#xf042;&nbsp;&nbsp;</span>LOGIN & REGISTER</a>
			<?php endif; ?>

			<?php if($_SESSION['id']):?>
				<a href="<?php echo $http_root?>/account" class="menu-item <?php if($page_id == 4) echo ' menu-item-active'?>"><span class="fa">&#xf042;&nbsp;&nbsp;</span>ACCOUNT</a>
				<a href="<?php echo $http_root?>/devices" class="menu-item <?php if($page_id == 3) echo ' menu-item-active'?>"><span class="fa">&#xf042;&nbsp;&nbsp;</span>DEVICES</a>
				<a href="<?php echo $http_root?>/modules/logout.php" class="menu-item menu-link-logout"><span class="fa">&#xf042;&nbsp;&nbsp;</span>LOG OUT</a>
			<?php endif; ?>

		</div>
		<div class="header-seperator"></div>
	</div>
</div>