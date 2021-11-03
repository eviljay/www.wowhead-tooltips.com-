<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<title>Wowhead Tooltips &rsaquo; Log In</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel='stylesheet' id='login-css'  href='http://www.wowhead-tooltips.com/wp-admin/css/login.css?ver=20110121' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='http://www.wowhead-tooltips.com/wp-admin/css/colors-fresh.css?ver=20110121' type='text/css' media='all' />
<script type='text/javascript' src='http://www.wowhead-tooltips.com/wp-includes/js/l10n.js?ver=20101110'></script>
<script type='text/javascript' src='http://www.wowhead-tooltips.com/wp-includes/js/jquery/jquery.js?ver=1.4.4'></script>
<script type='text/javascript' src='http://www.wowhead-tooltips.com/wp-content/plugins/jquery-lightbox-balupton-edition/scripts/jquery.lightbox.min.js?ver=1.4.9'></script>
<script type='text/javascript' src='http://www.wowhead-tooltips.com/wp-content/plugins/jquery-lightbox-balupton-edition/scripts/jquery.lightbox.plugin.min.js?ver=1.0'></script>
<meta name='robots' content='noindex,nofollow' />
</head>
<body class="login">
<div id="login"><h1><a href="http://wordpress.org/" title="Powered by WordPress">Wowhead Tooltips</a></h1>

<form name="loginform" id="loginform" action="http://www.wowhead-tooltips.com/wp-login.php" method="post">
	<p>
		<label>Username<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" /></label>
	</p>
	<p>
		<label>Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
	</p>
<p><label>What is 9 + 13 ?</label><br/><input type="text" id="user_login" class="input" name="mathvalue2" value="" /></p><div style="display:none">Please leave these two fields as-is: <input type='text' name='mathvalue0' value='9' /><input type='text' name='mathvalue1' value='13' /></div><p>Login form protected by <a href='http://www.bad-neighborhood.com/login-lockdown.html'>Login LockDown</a>.<br /><br /><br /></p>	<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" />
		<input type="hidden" name="redirect_to" value="http://www.wowhead-tooltips.com/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
<a href="http://www.wowhead-tooltips.com/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a>
</p>
</div>
<p id="backtoblog"><a href="http://www.wowhead-tooltips.com/" title="Are you lost?">&larr; Back to Wowhead Tooltips</a></p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>
</body>
</html>
