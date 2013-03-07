(function($) 
{
	$.fn.cookieLaw = function(options)
	{	
		var idSelector = false;
		var message = null;
		
		// options
		var opts = $.extend(true, 
							{
								message: 'CookieLaw',
								messageCookiesNotEnabled: 'CookiesNotEnabled',
								closeBtn: true,
								animate: true,
								persistent: false,
								cssSelector: '#cookieLaw'
							}, 
							options
						);

		/**
		 * do some checks
		 * -----------------------------------------------------------------------------------
		 */

				// check selector
				if(opts.cssSelector)
				{
					if (opts.cssSelector.toLowerCase().indexOf('#') >= 0) idSelector = true;
				}
				else 
				{
					return false;
				}


				// which message to show ?
				if(utils.cookies.isEnabled()) 
				{
					message = opts.message;
				}
				else 
				{
					message = opts.messageCookiesNotEnabled;	
					opts.closeBtn = false;
				}

		/**
		 * create html container
		 * -----------------------------------------------------------------------------------
		 */

				var divContainer = $('<div>');
					if (idSelector) divContainer.attr('id', opts.cssSelector.replace('#', ''))
					else divContainer.addClass(opts.cssSelector.replace('.', ''));

				// create content
				var divContent = $('<div>');
					divContent.attr('id','cookieLawContent');

					var pContent = $('<p>');
					pContent.append(jsFrontend.locale.msg(message));
					divContent.append(pContent);

				// close button ?
				if(opts.closeBtn)
				{
					// p btn holder -> html validation
					var pBtnHolder = $('<p>');
					pBtnHolder.attr('id', 'cookieLawCloseBtn');

						// create closeButton
						var aCloseBtn = $('<a>');
							aCloseBtn.attr('href', '#');
							aCloseBtn.attr('class', 'linkedImage');
							aCloseBtn.append('×');

					pBtnHolder.append(aCloseBtn);

					// append to content
					divContent.append(pBtnHolder);
				}
				
				// put content in container
				divContainer.append(divContent);

		/**
		 * append message to body & set cookie
		 * ------------------------------------------------------------------------------
		 */

				// cookies enabled?
				if(utils.cookies.isEnabled()) 
				{
					// some cookie properties
					var cookieHostname = document.location.hostname;
					var cookieName = cookieHostname + '_' + opts.message;

					// siteCookieLaw not set?
					if (!utils.cookies.readCookie(cookieName) || opts.persistent) 
					{
						// append cookieLaw message to body
						$(this).append(divContainer);

						// listener close btn
						aCloseBtn.click(function(e){
							
							e.preventDefault();

							// set new cookieLaw
							if(!opts.persistent) utils.cookies.setCookie(cookieName, true, 365);

							// fadeOut message
							if(opts.animate) $(divContainer).fadeOut();
							else $(divContainer).hide();

						});
					}
				}
				// no cookies? no site! :p
				else 
				{	
					// show no cookies container
					$(this).append(divContainer);
				}
	};

})(jQuery);