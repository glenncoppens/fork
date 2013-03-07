


{option:widgetFacebookLoggedin}
	<!--<a href="{$widgetFacebookLogoutUrl}">Logout</a>-->
	<div>

		<p>Hi {$widgetFacebookProfile.name}</p>
		<p><a href="{$widgetFacebookLogoutUrl}">Logout</a></p>
	</div>
{/option:widgetFacebookLoggedin}

{option:!widgetFacebookLoggedin}
	{*<div class="fb-login-button show-faces"></div>*}
	<p><a href="{$widgetFacebookLoginUrl}">Login</a></p>
{/option:!widgetFacebookLoggedin}
