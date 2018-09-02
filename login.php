<?php require("header.php");?>

<style type="text/css">
	body {
		color: #4e4e4e;
		background: #e2e2e2;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
		background: #f2f2f2;
        font-size: 18px;
		border-color: transparent;
		box-shadow: none !important;
	}
	.form-control:focus {
		border-color: #91d5a8;
        background: #e9f5ee;
	}
    .form-control, .btn {
        border-radius: 2px;
    }
	.login-form {
		width: 450px;
		margin: 0 auto;
	}
    .login-form h2 {
        margin: 0;
        padding: 30px 0;
        font-size: 34px;
    }

    .login-form form {
		color: #7a7a7a;
		border-radius: 4px;
    	margin-bottom: 20px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form .btn {
		font-size: 16px;
		line-height: 26px;
		min-width: 120px;
        font-weight: bold;
		background: #4aba70;
		border: none;
    }
	.login-form .btn:hover, .login-form .btn:focus{
		background: #40aa65;
        outline: none !important;
	}
	.checkbox-inline {
		margin-top: 14px;
	}
	.checkbox-inline input {
		margin-top: 3px;
	}
    .login-form a {
		color: #4aba70;
	}
	.login-form a:hover {
		text-decoration: underline;
	}
	.hint-text {
		color: #999;
        text-align: center;
		padding-bottom: 15px;
	}
</style>

<div class="login-form">
  <h2 class="text-center">Member Login</h2>
  <form action="loginH.php" method="post">

    <div class="form-group">
      <input type="text" class="form-control input-lg" name="uid" placeholder="Username" required="required">
    </div>
    <div class="form-group">
      <input type="password" class="form-control input-lg" name="pwd" placeholder="Password" required="required">
    </div>

    <div class="form-group clearfix">
      <button type="submit" class="btn btn-primary btn-lg pull-right">Sign in</button>
    </div>
  </form>
</div>




<?php require("footer.php");?>
