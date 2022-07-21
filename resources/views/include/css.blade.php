<style>
     
/* ==========================================================================
   =CssReset
   ========================================================================== */

	html, body, div, span, applet, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	a, abbr, acronym, address, big, cite, code,
	del, dfn, em, img, ins, kbd, q, s, samp,
	small, strike, strong, sub, sup, tt, var,
	b, u, i, center,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td,
	article, aside, canvas, details, embed, 
	figure, figcaption, footer, header, hgroup, 
	menu, nav, output, ruby, section, summary,
	time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}
	
	/* HTML5 display-role reset for older browsers */
	
	article,
	aside,
	details,
	figcaption,
	figure,
	footer,
	header,
	hgroup,
	main,
	menu,
	nav,
	section,
	summary {
		display: block;
	}
	
	
	body { line-height: 1; }
	
	ol, 
	ul {
		list-style: none;
	}
	
	blockquote, 
	q {
		quotes: none;
	}
	
	blockquote:before, 
	blockquote:after,
	q:before, 
	q:after {
		content: '';
		content: none;
	}
	
	table {
		border-collapse: collapse;
		border-spacing: 0;
	}
	
	/**
	 * 1. Correct inline-block display not defined in IE 8/9.
	 * 2. Normalize vertical alignment of progress in Chrome, Firefox, and Opera.
	 */

	audio,
	canvas,
	progress,
	video {
		display: inline-block; /* 1 */
		vertical-align: baseline; /* 2 */
	}

	/**
	 * Prevent modern browsers from displaying audio without controls.
	 * Remove excess height in iOS 5 devices.
	 */

	audio:not([controls]) {
		display: none;
		height: 0;
	}

	/**
	 * Address [hidden] styling not present in IE 8/9/10.
	 * Hide the template element in IE 8/9/11, Safari, and Firefox < 22.
	 */

	[hidden],
	template {
		display: none;
	}
	
	/**
	 * 1. Address margins set differently in Firefox 4+, Safari, and Chrome.
	 * 2. Correct color not being inherited.
	 *    Known issue: affects color of disabled elements.
	 * 3. Correct font properties not being inherited.
	 */

	button,
	input,
	optgroup,
	select,
	textarea {
		padding: 0;
		margin: 0; 		/* 1 */
	  	color: inherit; /* 2 */
	  	font: inherit;  /* 3 */
	}

	/**
	 * Address overflow set to hidden in IE 8/9/10/11.
	 */

	button { overflow: visible; }

	/**
	 * Address inconsistent text-transform inheritance for button and select.
	 * All other form control elements do not inherit text-transform values.
	 * Correct button style inheritance in Firefox, IE 8/9/10/11, and Opera.
	 * Correct select style inheritance in Firefox.
	 */

	button,
	select {
		text-transform: none;
	}

	/**
	 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native audio
	 *    and video controls.
	 * 2. Correct inability to style clickable input types in iOS.
	 * 3. Improve usability and consistency of cursor style between image-type
	 *    input and others.
	 */

	button,
	html input[type="button"], 		  /* 1 */
	input[type="reset"],
	input[type="submit"] {
		-webkit-appearance: button;   /* 2 */
		cursor: pointer; 			  /* 3 */
	}

	/**
	 * Re-set default cursor for disabled elements.
	 */

	button[disabled],
	html input[disabled] {
		cursor: default;
	}

	/**
	 * Remove inner padding and border in Firefox 4+.
	 */

	button::-moz-focus-inner,
	input::-moz-focus-inner {
		padding: 0;
		border: 0;
	}

	/**
	 * Address Firefox 4+ setting line-height on input using !important in
	 * the UA stylesheet.
	 */

	input { line-height: normal; }

	/**
	 * It's recommended that you don't attempt to style these elements.
	 * Firefox's implementation doesn't respect box-sizing, padding, or width.
	 *
	 * 1. Address box sizing set to content-box in IE 8/9/10.
	 * 2. Remove excess padding in IE 8/9/10.
	 */

	input[type="checkbox"],
	input[type="radio"] {
		box-sizing: border-box; /* 1 */
		padding: 0; 			/* 2 */
	}

	/**
	 * Fix the cursor style for Chrome's increment/decrement buttons. For certain
	 * font-size values of the input, it causes the cursor style of the
	 * decrement button to change from default to text.
	 */

	input[type="number"]::-webkit-inner-spin-button,
	input[type="number"]::-webkit-outer-spin-button {
		height: auto;
	}

	/**
	 * 1. Address appearance set to searchfield in Safari and Chrome.
	 * 2. Address box-sizing set to border-box in Safari and Chrome
	 *    (include -moz to future-proof).
	 */

	input[type="search"] {
		-webkit-appearance: textfield; 		/* 1 */
		-webkit-box-sizing: content-box;    /* 2 */
		   -moz-box-sizing: content-box;
				box-sizing: content-box;
	}

	/**
	 * Remove inner padding and search cancel button in Safari and Chrome on OS X.
	 * Safari (but not Chrome) clips the cancel button when the search input has
	 * padding (and textfield appearance).
	 */

	input[type="search"]::-webkit-search-cancel-button,
	input[type="search"]::-webkit-search-decoration {
		-webkit-appearance: none;
	}

	/**
	 * 1. Always force vertical scroll
	 * 2. Prevent iOS text size adjust after orientation change, without disabling user zoom.
	 * 3. For animations
	 */
	
	html { 
		overflow-y: scroll; 					 /* 1 */ 
		-ms-text-size-adjust: 100%; 			 /* 2 */
    	-webkit-text-size-adjust: 100%;			 /* 2 */
		-webkit-font-smoothing: antialiased; 
		overflow-x: hidden; 					 /* 3 */
	}
	
 
/* ==========================================================================
   =Typography
   ========================================================================== */
   	 
	body {
		background-color: #fff;
		color: #858585;
		font: 14px "Open Sans", Arial, sans-serif; 
		line-height: 25px;	
	}
	
	@media (max-width: 767px) {
	
		/**
		 * 1. Hide background on mobile devices
		 */
	 
		body { 
			background: none; 	/* 1 */
			background-color: #fff; 
		}
		
	}	

	h1, 
	h2, 
	h3, 
	h4, 
	h5, 
	h6 {
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif;
		font-weight: 700; 
	}
		
	h1 a, 
	h2 a, 
	h3 a, 
	h4 a, 
	h5 a, 
	h6 a {
		color: #3b3e43; 
		font-weight: inherit; 
	}
	
	h1 a:hover, 
	h2 a:hover, 
	h3 a:hover, 
	h4 a:hover, 
	h5 a:hover, 
	h6 a:hover {
		color: #93c274;  
	}
	
	h1 {
		margin-bottom: 14px; 	 
		font-size: 36px; 
		line-height: 54px;
		font-weight: 300; 
	}
	
	h2 { 
		margin-bottom: 10px;	
		font-size: 24px; 
		line-height: 36px;  
	}
	
	h3 { 
		margin-bottom: 8px;
		font-size: 18px; 
		line-height: 28px;   
	}
	
	h4 {
		margin-bottom: 4px; 
		font-size: 16px; 
		line-height: 24px;   
	}
	
	h5 { 
		font-size: 14px; 
		line-height: 22px; 
	}
	
	h6 { 
		font-size: 13px; 
		line-height: 20px; 
	}

	p { margin-bottom: 20px; }
	
	em { font-style: italic; }
	
	strong { font-weight: 700; }
	
	small { font-size: 90%; }
	
	big { font-size: 125%; }
	
	sub { 
		vertical-align: sub; 
		font-size: 75%; 
	}
	
	sup { 
		vertical-align: super; 
		font-size: 75%; 
	}
	
	abbr[title] {  
		border-bottom: 1px dotted #b8b8b8; 
		cursor: help;
	}
	
	address { 
		display: block; 
		margin-bottom: 20px; 
	}
	
	blockquote {}
	
	blockquote p { font-style: italic; }
	
	hr { 
		height: 0; 
		border: solid #e1e1e1; 
		border-width: 1px 0 0 0;
		margin: 30px 0;
	}

	kbd,
	tt,
	var,
	samp,	
	code, 
	pre { font-family: Monaco, Menlo, Consolas, "Courier New", monospace; }
	
	code { 
		padding: 1px 4px;
		border: 1px solid #e1e1e1;
		border-radius: 3px;	
		background-color: #f8f8f8;  
		color: #ff0030;  
	}
	
	pre { 
		overflow-x: auto; 
		display: block;
		padding: 20px;
		border: 1px solid #e1e1e1;
		border-radius: 3px;		
		margin-bottom: 20px;		
		background-color: #f8f8f8; 
		white-space: pre-wrap;
	}
	
	mark,
	ins {
		padding: 1px 4px;
		border: 1px solid #e1e1e1;
		border-radius: 3px;	
		background-color: #f8f8f8; 
		text-decoration: none;
	}
	
	s,
	del { text-decoration: line-through; }
	
	/* Typography Helper Classes */
	
	/**
	 * <div class="hr"></div> acts like an <hr>
	 */
	
	.hr { 
		border-top: 1px solid #e1e1e1;  
		margin: 30px 0;
	}
	
	.text-left { text-align: left; }
	.text-right { text-align: right; }
	.text-center { text-align: center; }
	.text-justify { text-align: justify; }
	
	.text-uppercase { text-transform: uppercase; }
	
	.text-highlight { color: #93c274; }

	.mute{ color: #b8b8b8; }
	
	.no-margin-bottom,
	.last { margin-bottom: 0 !important; }
	
	@media (max-width: 767px) {

		.last { margin-bottom: 20px !important; }
		
		.text-right { text-align: left; }

	}

/* ==========================================================================
   =Links
   ========================================================================== */
	
	a, 
	a:visited { 
		color: #93c274; 
		text-decoration: none; 
	}
	
   /**
	* 1. Remove the gray background color from active links in IE 10.
	*/
	
	a:active {
 		background: transparent; /* 1 */
	}
	
	a:active,
	a:hover, 
	a:focus {
		outline: 0; 
		text-decoration: underline;
	}	
	
/* ==========================================================================
   =Lists
   ========================================================================== */
	
	ul, 
	ol { 
		margin-bottom: 20px;
		list-style-position: inside; 
	}
	 
	li > ul, 
	li > ol { 
		margin-bottom: 0; 
		margin-left: 30px; 
	}
	
	li {}
	
	ul { list-style-type: disc; }
	ol { list-style-type: decimal; }
	
	dl { margin-bottom: 20px; }

	dt { font-weight: bold; }

	dd  { margin-bottom: 20px; }
	
	/* List Helper Classes */

	ul.last,
	ol.last,
	dl.last { margin-bottom: 0; }
	
	@media (max-width: 767px) {

		ul.last, 
		ol.last { margin-bottom: 20px; }
		
	}
	
/* =Custom lists
   ========================================================================== */	

	/**
 	 * Custom lists
 	 *
	 * 1. unstyled list
	 * 2. list with squares for bullets
	 * 3. list with discs for bullets
	 *
	 */
	 
	ul.unstyled { list-style-type: none; } /* 1 */
	ul.square { list-style-type: square; } /* 2 */
	ul.circle { list-style-type: circle; } /* 3 */
	
	/**
 	 * FontAwesome lists
 	 *
	 * 1. Check list
	 *
	 */
	 
	ul.check { list-style: none; }	/* 1 */
	
	ul.check li:before,
	ul.plus li:before,
	ul.pin li:before { 
		position: relative;
		top: -1px;
		width: auto;
		height: auto;
		margin-right: 8px;
		color: #93c274;
		font-family: 'FontAwesome';
		font-size: 16px;
		font-style: normal;
	}
	
	ul.check li:before { content: "\f00c"; }
	
	ul.check li { margin-bottom: 10px; }
	ul.check li:last-child { margin-bottom: 0; }	

/* ==========================================================================
   =Images
   ========================================================================== */
	
	img { 
		max-width: 100%;
		height: auto;
		border: none; 
		vertical-align: middle;
	}

/* ==========================================================================
   =Tables
   ========================================================================== */

	table,
	th,
	td { border: 1px solid #e1e1e1; }

	/**
	 * 1. Prevents HTML tables from becoming too wide
	 */

	table {
		border-collapse: separate;
		border-spacing: 0;
		border-width: 1px 0 0 1px;
		margin-bottom: 20px;
		table-layout: fixed; 	/* 1 */
		width: 100%;
	}

	caption,
	th,
	td {
		font-weight: normal;
		text-align: left;
	}

	caption { margin-bottom: 20px; }
	
	th {
		border-width: 0 1px 1px 0;
		font-weight: 700;
	}

	td { border-width: 0 1px 1px 0; }

	th, 
	td { padding: 8px; }
	
	@media (max-width: 480px) {
	
		/**
		 * 1. Force table to not be like tables anymore
		 */
		 
		table, 
		thead, 
		tbody, 
		th, 
		td, 
		tr { display: block; /* 1 */ }

		/**
		 * Hide table headers
		 */
	
		th{ 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

		td:first-child { border-top: none !important; }
	  
	}
	
/* ==========================================================================
   =Forms
   ========================================================================== */

	form {}
	
	fieldset {}

	fieldset legend {
		padding: 0 10px;
		margin: 0;
		margin-left: -2px;
		background: #fff;
		font-weight: 700;								
	}
	
	::-moz-placeholder,
	::-webkit-input-placeholder,
	:-ms-input-placeholder {
		color: #b8b8b8;
	}
	
	label {
		display: block;
		margin-bottom: 5px;
	}
	
	/**
	 * 1. we need to supply the font color for situations when you place the inputs in a div that has color:#fff
	 *    normally because of the #fff the text in inputs would not be visible but giving the color explicitly here ovrwrites that
	 */
	
	input[type="text"],
	input[type="password"],
	input[type="date"],
	input[type="datetime"],
	input[type="datetime-local"],
	input[type="month"],
	input[type="week"],
	input[type="email"],
	input[type="number"],
	input[type="search"],
	input[type="tel"],
	input[type="time"],
	input[type="url"],
	input[type="color"],
	textarea {
		display: block;
		width: 100%;
		-webkit-appearance: none;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
			    box-sizing: border-box;
		padding: 12px 15px;		
		border: 2px solid #e1e1e1;
		margin-bottom: 10px;
		background-color: #fff;
		color: #858585; /* 1 */
	}

	input[type="text"]:focus,
	input[type="password"]:focus,
	input[type="date"]:focus,
	input[type="datetime"]:focus,
	input[type="datetime-local"]:focus,
	input[type="month"]:focus,
	input[type="week"]:focus,
	input[type="email"]:focus,
	input[type="number"]:focus,
	input[type="search"]:focus,
	input[type="tel"]:focus,
	input[type="time"]:focus,
	input[type="url"]:focus,
	input[type="color"]:focus,
	textarea:focus {
		border-color: #75ae6a;
		outline: none;
	}

	input[type="text"]:disabled,
	input[type="password"]:disabled,
	input[type="date"]:disabled,
	input[type="datetime"]:disabled,
	input[type="datetime-local"]:disabled,
	input[type="month"]:disabled,
	input[type="week"]:disabled,
	input[type="email"]:disabled,
	input[type="number"]:disabled,
	input[type="search"]:disabled,
	input[type="tel"]:disabled,
	input[type="time"]:disabled,
	input[type="url"]:disabled,
	input[type="color"]:disabled,
	textarea:disabled {
		background-color: #f8f8f8;
		cursor: not-allowed;
	}

	input[type="text"][disabled],
	input[type="text"][readonly],
	fieldset[disabled] input[type="text"],
	input[type="password"][disabled],
	input[type="password"][readonly],
	fieldset[disabled] input[type="password"],
	input[type="date"][disabled],
	input[type="date"][readonly],
	fieldset[disabled] input[type="date"],
	input[type="datetime"][disabled],
	input[type="datetime"][readonly],
	fieldset[disabled] input[type="datetime"],
	input[type="datetime-local"][disabled],
	input[type="datetime-local"][readonly],
	fieldset[disabled] input[type="datetime-local"],
	input[type="month"][disabled],
	input[type="month"][readonly],
	fieldset[disabled] input[type="month"],
	input[type="week"][disabled],
	input[type="week"][readonly],
	fieldset[disabled] input[type="week"],
	input[type="email"][disabled],
	input[type="email"][readonly],
	fieldset[disabled] input[type="email"],
	input[type="number"][disabled],
	input[type="number"][readonly],
	fieldset[disabled] input[type="number"],
	input[type="search"][disabled],
	input[type="search"][readonly],
	fieldset[disabled] input[type="search"],
	input[type="tel"][disabled],
	input[type="tel"][readonly],
	fieldset[disabled] input[type="tel"],
	input[type="time"][disabled],
	input[type="time"][readonly],
	fieldset[disabled] input[type="time"],
	input[type="url"][disabled],
	input[type="url"][readonly],
	fieldset[disabled] input[type="url"],
	input[type="color"][disabled],
	input[type="color"][readonly],
	fieldset[disabled] input[type="color"],
	textarea[disabled],
	textarea[readonly],
	fieldset[disabled] textarea {
		background-color: #f8f8f8;
		cursor: not-allowed;
	}

	textarea[rows] { height: auto; }

	/**
	 *  1. Disallow resize out of parent
	 */
	
	textarea { max-width: 100%; /* 1 */ }
	
	/**
	 * 1. we need to supply the font color for situations when you place the inputs in a div that has color:#fff
	 *    normally because of the #fff the text in inputs would not be visible but giving the color explicitly here ovrwrites that
	 */
	
	select {
		padding: 6px 10px;	
		height: 40px;
		width: 100%;
		border: 1px solid #e1e1e1;
		background-color: #fff;
		-webkit-appearance: none !important;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
			    box-sizing: border-box;
		color: #858585; /* 1 */		
	}

	select:disabled {
		background-color: #f8f8f8;
		cursor: not-allowed;
	}
	
	select:focus { border-color: #bbb; }

	select[multiple] { height: auto; }

	input[type="range"] { width: 100%; }
	
	input[type="file"],
	input[type="checkbox"],
	input[type="radio"],
	select {
		margin: 0 0 10px;
	}

	input[type="checkbox"] + label,
	input[type="radio"] + label {
		display: inline-block;
		margin-right: 10px;
		margin-bottom: 0;
		margin-left: 5px;
		vertical-align: baseline;
	}

	input[type="file"] { width: 100%; }
	
	button,
	input[type="reset"],
	input[type="submit"],
	input[type="button"] {
		position: relative;
		display: inline-block;
		padding: 15px 35px;
		border: 1px solid #75ae6a;
		background-color: #75ae6a;
		-webkit-background-clip: padding-box;
		   -moz-background-clip: padding-box;
				background-clip: padding-box;
		color: #fff;
		text-align: center;
		text-decoration: none;
		cursor: pointer;
		-webkit-appearance: none;
	}
	
	input[type="reset"]:hover,
	input[type="submit"]:hover,
	input[type="button"]:hover { background-color: #93c274; }
	
/* =Responsive Form Inputs
   ========================================================================== */
	
	/**
	 * 1. Reset float inherited from .span*	
 	 * 2. Change padding inherited from .span* with the one set for inputs
 	 */
	 
	button[class*="span"],
	input[type="reset"][class*="span"],
	input[type="submit"][class*="span"],
	input[type="button"][class*="span"],
	input[type="range"][class*="span"],
	input[type="color"][class*="span"],
	input[type="text"][class*="span"],
	input[type="password"][class*="span"],
	input[type="date"][class*="span"],
	input[type="datetime"][class*="span"],
	input[type="datetime-local"][class*="span"],
	input[type="month"][class*="span"],
	input[type="week"][class*="span"],
	input[type="email"][class*="span"],
	input[type="number"][class*="span"],
	input[type="search"][class*="span"],
	input[type="tel"][class*="span"],
	input[type="time"][class*="span"],
	input[type="url"][class*="span"],
	textarea[class*="span"],
	select[class*="span"] {
		float: none; 		/* 1 */
		padding: 12px 10px;  /* 2 */
	}
	
	@media (min-width: 767px) {
	
		button.span12,
		input[type="range"].span12,
		input[type="color"].span12,
		input[type="reset"].span12,
		input[type="submit"].span12,
		input[type="button"].span12,
		input[type="text"].span12,
		input[type="password"].span12,
		input[type="date"].span12,
		input[type="datetime"].span12,
		input[type="datetime-local"].span12,
		input[type="month"].span12,
		input[type="week"].span12,
		input[type="email"].span12,
		input[type="number"].span12,
		input[type="search"].span12,
		input[type="tel"].span12,
		input[type="time"].span12,
		input[type="url"].span12,
		textarea.span12,
		select.span12 { width: 100%; }
		
		button.span11,
		input[type="range"].span11,
		input[type="color"].span11,
		input[type="reset"].span11,
		input[type="submit"].span11,
		input[type="button"].span11,
		input[type="text"].span11,
		input[type="password"].span11,
		input[type="date"].span11,
		input[type="datetime"].span11,
		input[type="datetime-local"].span11,
		input[type="month"].span11,
		input[type="week"].span11,
		input[type="email"].span11,
		input[type="number"].span11,
		input[type="search"].span11,
		input[type="tel"].span11,
		input[type="time"].span11,
		input[type="url"].span11,
		textarea.span11,
		select.span11 { width: 91.66666667%; }
		
		button.span10,
		input[type="range"].span10,
		input[type="color"].span10,
		input[type="reset"].span10,
		input[type="submit"].span10,
		input[type="button"].span10,
		input[type="text"].span10,
		input[type="password"].span10,
		input[type="date"].span10,
		input[type="datetime"].span10,
		input[type="datetime-local"].span10,
		input[type="month"].span10,
		input[type="week"].span10,
		input[type="email"].span10,
		input[type="number"].span10,
		input[type="search"].span10,
		input[type="tel"].span10,
		input[type="time"].span10,
		input[type="url"].span10,
		textarea.span10,
		select.span10 { width: 83.33333333%; }
		
		button.span9,
		input[type="range"].span9,
		input[type="color"].span9,
		input[type="reset"].span9,
		input[type="submit"].span9,
		input[type="button"].span9,
		input[type="text"].span9,
		input[type="password"].span9,
		input[type="date"].span9,
		input[type="datetime"].span9,
		input[type="datetime-local"].span9,
		input[type="month"].span9,
		input[type="week"].span9,
		input[type="email"].span9,
		input[type="number"].span9,
		input[type="search"].span9,
		input[type="tel"].span9,
		input[type="time"].span9,
		input[type="url"].span9,
		textarea.span9,
		select.span9 { width: 75%; }
		
		button.span8,
		input[type="range"].span8,
		input[type="color"].span8,
		input[type="reset"].span8,
		input[type="submit"].span8,
		input[type="button"].span8,
		input[type="text"].span8,
		input[type="password"].span8,
		input[type="date"].span8,
		input[type="datetime"].span8,
		input[type="datetime-local"].span8,
		input[type="month"].span8,
		input[type="week"].span8,
		input[type="email"].span8,
		input[type="number"].span8,
		input[type="search"].span8,
		input[type="tel"].span8,
		input[type="time"].span8,
		input[type="url"].span8,
		textarea.span8,
		select.span8 { width: 66.66666667%; }
		
		button.span7,
		input[type="range"].span7,
		input[type="color"].span7,
		input[type="reset"].span7,
		input[type="submit"].span7,
		input[type="button"].span7,
		input[type="text"].span7,
		input[type="password"].span7,
		input[type="date"].span7,
		input[type="datetime"].span7,
		input[type="datetime-local"].span7,
		input[type="month"].span7,
		input[type="week"].span7,
		input[type="email"].span7,
		input[type="number"].span7,
		input[type="search"].span7,
		input[type="tel"].span7,
		input[type="time"].span7,
		input[type="url"].span7,
		textarea.span7,
		select.span7 { width: 58.33333333%; }
		
		button.span6,
		input[type="range"].span6,
		input[type="color"].span6,
		input[type="reset"].span6,
		input[type="submit"].span6,
		input[type="button"].span6,
		input[type="text"].span6,
		input[type="password"].span6,
		input[type="date"].span6,
		input[type="datetime"].span6,
		input[type="datetime-local"].span6,
		input[type="month"].span6,
		input[type="week"].span6,
		input[type="email"].span6,
		input[type="number"].span6,
		input[type="search"].span6,
		input[type="tel"].span6,
		input[type="time"].span6,
		input[type="url"].span6,
		textarea.span6,
		select.span6 { width: 50%; }
		
		button.span5,
		input[type="range"].span5,
		input[type="color"].span5,
		input[type="reset"].span5,
		input[type="submit"].span5,
		input[type="button"].span5,
		input[type="text"].span5,
		input[type="password"].span5,
		input[type="date"].span5,
		input[type="datetime"].span5,
		input[type="datetime-local"].span5,
		input[type="month"].span5,
		input[type="week"].span5,
		input[type="email"].span5,
		input[type="number"].span5,
		input[type="search"].span5,
		input[type="tel"].span5,
		input[type="time"].span5,
		input[type="url"].span5,
		textarea.span5,
		select.span5 { width: 41.66666667%; }
		
		button.span4,
		input[type="range"].span4,
		input[type="color"].span4,
		input[type="reset"].span4,
		input[type="submit"].span4,
		input[type="button"].span4,
		input[type="text"].span4,
		input[type="password"].span4,
		input[type="date"].span4,
		input[type="datetime"].span4,
		input[type="datetime-local"].span4,
		input[type="month"].span4,
		input[type="week"].span4,
		input[type="email"].span4,
		input[type="number"].span4,
		input[type="search"].span4,
		input[type="tel"].span4,
		input[type="time"].span4,
		input[type="url"].span4,
		textarea.span4,
		select.span4 { width: 33.33333333%; }
		
		button.span3,
		input[type="range"].span3,
		input[type="color"].span3,
		input[type="reset"].span3,
		input[type="submit"].span3,
		input[type="button"].span3,
		input[type="text"].span3,
		input[type="password"].span3,
		input[type="date"].span3,
		input[type="datetime"].span3,
		input[type="datetime-local"].span3,
		input[type="month"].span3,
		input[type="week"].span3,
		input[type="email"].span3,
		input[type="number"].span3,
		input[type="search"].span3,
		input[type="tel"].span3,
		input[type="time"].span3,
		input[type="url"].span3,
		textarea.span3,
		select.span3 { width: 25%; }
		
		button.span2,
		input[type="range"].span2,
		input[type="color"].span2,
		input[type="reset"].span2,
		input[type="submit"].span2,
		input[type="button"].span2,
		input[type="text"].span2,
		input[type="password"].span2,
		input[type="date"].span2,
		input[type="datetime"].span2,
		input[type="datetime-local"].span2,
		input[type="month"].span2,
		input[type="week"].span2,
		input[type="email"].span2,
		input[type="number"].span2,
		input[type="search"].span2,
		input[type="tel"].span2,
		input[type="time"].span2,
		input[type="url"].span2,
		textarea.span2,
		select.span2 { width: 16.66666667%; }
		
		button.span1,
		input[type="range"].span1,
		input[type="color"].span1,
		input[type="reset"].span1,
		input[type="submit"].span1,
		input[type="button"].span1,
		input[type="text"].span1,
		input[type="password"].span1,
		input[type="date"].span1,
		input[type="datetime"].span1,
		input[type="datetime-local"].span1,
		input[type="month"].span1,
		input[type="week"].span1,
		input[type="email"].span1,
		input[type="number"].span1,
		input[type="search"].span1,
		input[type="tel"].span1,
		input[type="time"].span1,
		input[type="url"].span1,
		textarea.span1,
		select.span1 { width: 8.33333333%; }
		
	}	

 
/* ==========================================================================
   =Base grid
   ========================================================================== */

	.container ,
	.container-fluid {
		position: relative;
		margin-right: auto;
		margin-left: auto;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
				box-sizing: border-box;
	}

	.container {
		padding-right: 15px;
		padding-left: 15px;
	}

	.row {
		position: relative;
		margin-right: -15px;
		margin-left: -15px;
	}

	/**
 	 * Automatically clear rows
 	 */
	 
	.row:after {
		visibility: hidden;
		display: block;
		font-size: 0;
		content: " ";
		clear: both;
		height: 0;
	}	
	
	.span1, 
	.span2, 
	.span3, 
	.span4, 
	.span5, 
	.span6, 
	.span7, 
	.span8, 
	.span9, 
	.span10, 
	.span11, 
	.span12 {
		min-height: 1px;
		padding-right: 15px;
		padding-left: 15px;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
				box-sizing: border-box;
	}

	@media (min-width: 768px) {

		.span1, 
		.span2, 
		.span3, 
		.span4, 
		.span5, 
		.span6, 
		.span7, 
		.span8, 
		.span9, 
		.span10, 
		.span11, 
		.span12 {
			float: left;
		}
		
		.span12 { width: 100%; }
		.span11 { width: 91.66666667%; }
		.span10 { width: 83.33333333%; }
		.span9  { width: 75%; }
		.span8  { width: 66.66666667%; }
		.span7  { width: 58.33333333%; }
		.span6  { width: 50%; }
		.span5  { width: 41.66666667%; }
		.span4  { width: 33.33333333%; }
		.span3  { width: 25%; }
		.span2  { width: 16.66666667%; }
		.span1  { width: 8.33333333%;  }
		
		.offset12 { margin-left: 100%; }
		.offset11 { margin-left: 91.66666667%; }
		.offset10 { margin-left: 83.33333333%; }
		.offset9  { margin-left: 75%; }
		.offset8  { margin-left: 66.66666667%; }
		.offset7  { margin-left: 58.33333333%; }
		.offset6  { margin-left: 50%; }
		.offset5  { margin-left: 41.66666667%; }
		.offset4  { margin-left: 33.33333333%; }
		.offset3  { margin-left: 25%; }
		.offset2  { margin-left: 16.66666667%; }
		.offset1  { margin-left: 8.33333333%; }
		.offset0  { margin-left: 0%; }

	}

	.visible-phone,
	.visible-tablet,
	.visible-desktop,
	.visible-desktop-large {
		display: none !important;
	}

	.visible-phone-block,
	.visible-phone-inline,
	.visible-phone-inline-block,
	.visible-tablet-block,
	.visible-tablet-inline,
	.visible-tablet-inline-block,
	.visible-desktop-block,
	.visible-desktop-inline,
	.visible-desktop-inline-block,
	.visible-desktop-large-block,
	.visible-desktop-large-inline,
	.visible-desktop-large-inline-block {
		display: none !important;
	}
		
/* ==========================================================================
   =Extra small devices: Phones (< 768px)
   ========================================================================== */

/* =Portrait and landscape
   ========================================================================== */
   
	@media (max-width: 767px) {
		
		.container { width: auto; }
		
		.span1, 
		.span2, 
		.span3, 
		.span4, 
		.span5, 
		.span6, 
		.span7, 
		.span8, 
		.span9, 
		.span10, 
		.span11, 
		.span12 {
			width: 100%;
		}
		
		.visible-phone { display: block !important; }
		
		table.visible-phone { display: table; }
		
		tr.visible-phone { display: table-row !important; }
		
		th.visible-phone,
		td.visible-phone { display: table-cell !important; }

		.visible-phone-block { display: block !important; }
		
		.visible-phone-inline { display: inline !important; }
		
		.visible-phone-inline-block { display: inline-block !important; }

		.hidden-phone { display: none !important; }
		
	}
	
/* =Landscape
   ========================================================================== */
	
	@media only screen and (min-width: 480px) and (max-width: 767px) {
		
		
		
	}	

/* ==========================================================================
   =Small devices: Tablets (>= 768px)
   ========================================================================== */

	@media (min-width: 768px) and (max-width: 991px) {
		
		.container {	width: 750px; }

		.visible-tablet { display: block !important; }
		
		table.visible-tablet { display: table; }
		
		tr.visible-tablet { display: table-row !important; }
		
		th.visible-tablet,
		td.visible-tablet { display: table-cell !important; }

		.visible-tablet-block { display: block !important; }
		
		.visible-tablet-inline { display: inline !important; }
		
		.visible-tablet-inline-block { display: inline-block !important; }

		.hidden-tablet { display: none !important; }
		
	}
	
/* ==========================================================================
   =Medium devices: Desktops (>= 992px )
   ========================================================================== */
   
	@media (min-width: 992px) and (max-width: 1199px) {
		
		.container { width: 970px; }
		
		.visible-desktop { display: block !important; }
		
		table.visible-desktop { display: table; }
		
		tr.visible-desktop { display: table-row !important; }
		
		th.visible-desktop,
		td.visible-desktop { display: table-cell !important; }

		.visible-desktop-block { display: block !important; }
		
		.visible-desktop-inline { display: inline !important; }
		
		.visible-desktop-inline-block { display: inline-block !important; }

		.hidden-desktop { display: none !important; }
		
	}	

/* ==========================================================================
   =Large devices: Desktops (>= 1200px )
   ========================================================================== */

	@media (min-width: 1200px) {
	
		.container { width: 1170px; }
		
		.visible-desktop-large { display: block !important; }
		
		table.visible-desktop-large { display: table; }
		
		tr.visible-desktop-large { display: table-row !important; }
		
		th.visible-desktop-large,
		td.visible-desktop-large { display: table-cell !important; }

		.visible-desktop-large-block { display: block !important; }
		
		.visible-desktop-large-inline { display: inline !important; }
		
		.visible-desktop-large-inline-block { display: inline-block !important; }

		.hidden-desktop-large { display: none !important; }
		
	}

/* ==========================================================================
   =Clearing
   ========================================================================== */

	/**
 	 * ClearFix Hack
	 * Usage:  add  class="fixed"  to parents of floated elements
 	 */
	 
	.fixed:after {
		visibility: hidden;
		display: block;
		font-size: 0;
		content: " ";
		clear: both;
		height: 0;
	}
	
	/**
 	 * Clear content
	 * Usage:  <br class="clear"> 
 	 */	
	 
	.clear {
		clear: both;
		display: block;
		overflow: hidden;
		visibility: hidden;
		width: 0;
		height: 0;
	}

 
/* ==========================================================================
   =Wrap
   ========================================================================== */

	#wrap {
		position: relative;
		background-color: #fff;
	}

/* ==========================================================================
	=Header Top
	========================================================================== */
   
   #header-top {
		background-color: #2b2b2b;
		color: #858585;
   }
   
    #header-top a,
	#header-top h1,
	#header-top h2,
	#header-top h3,
	#header-top h4,
	#header-top h5,
	#header-top h6 { color: #858585; }
	
	#header-top a:hover { color: #75ae6a; }
   
   @media (max-width: 767px) {

		#header-top { display: none; }

	}
	
/* ==========================================================================
	=Header Wrap
	========================================================================== */
   
   /**
 	 * 1. z-index is 105 because the .tp-rightarrow.default and .tp-leftarrow.default is 100
 	 */
   
   	#header-wrap { 
		z-index: 105; 	/* 1 */
	}
	
	/**
	 * 1. The height of the #header-top should be increased or decreased to accommodate the header
	 */
	
	.header-style-2 #header-wrap {
		position: absolute;
		top: 71px; /* 1 */
		left: 0;
		right: 0;			
	}
	
	@media (max-width: 767px) {
		
		.header-style-2 #header-wrap { top: 0; }
		
	}
   
/* ==========================================================================
   =Header 
   ========================================================================== */
   	
	#header {
		border-top: 8px solid #93c274;
		margin: 0 auto; 
	}
	
/* ==========================================================================
   =Logo
   ========================================================================== */
   
	#logo {  
		padding: 25px 0;
	}
	
	/**
	 * 1. we need the <a> to be only the size of it's child <img> element
	 * 2. it shouldn't extend beyond the size of it's parent if it's child <img> is very large e.g 1000x1000 px
	 */
	
	#logo a {
		display: inline-block; /* 1 */
		max-width: 100%; 	   /* 2 */
	}
	
	#logo img { display: block; }	
	
	@media (max-width: 767px) {

		/**
		 * 1. on mobile devices logo padding right needs to be the width of the
		 *	  mobile menu trigger + some spacing so as to not let the logo <a>
		 *    overlap the mobile menu trigger
		 */
	
		#logo {  
			padding-right: 50px; 	/* 1 */
		}
		
	}
	
/* ==========================================================================
   =Menu 
   ========================================================================== */

/* =Menu Basics
   ========================================================================== */
   
	.sf-menu,
	.sf-menu ul {
		padding: 0;
		margin: 0;
		list-style: none;
	}
	
	.sf-menu > li { float: left; }

	.sf-menu > li > a {
		position: relative;
		display: block;
	}
	
	/**
 	 * 1. z-index is 1025 because the sticky menu is 1020
 	 */
	
	.sf-menu .sf-mega,
	.sf-menu li.dropdown ul {
		position: absolute;
		z-index: 1025;		/* 1 */
		top: 100%;
		left: 0;
		display: none;
	}
	
	.sf-menu li.dropdown { position: relative; }
	
	.sf-menu li.dropdown ul ul {
		top: 0;
		left: 100%;
	}
	
	.sf-menu li:hover > .sf-mega,
	.sf-menu li.sfHover > .sf-mega,
	.sf-menu li.dropdown:hover > ul,
	.sf-menu li.dropdown.sfHover > ul { display: block; }

/* =Menu Skin
   ========================================================================== */
	
	.sf-menu { float: right; } 
	
	.sf-menu a {
		display: block;
		padding: 15px 0;
		font: 14px 'Quicksand', Arial, sans-serif;
		line-height: 18px;
		color: #fff; 
		text-decoration: none;
		-webkit-transition: color 0.3s;
				transition: color 0.3s;
	}
	
	.sf-menu li.dropdown a { padding: 12px 30px; }
	
	.sf-menu li:last-child > a { border-bottom: none; }
	
	.sf-menu > li > a,
	.sf-menu > li.dropdown > a {
		padding: 63px 15px 37px 0;
		border: none;
		margin-right: 30px;
		color: #2b2b2b;
		font-size: 13px;
		font-weight: 700;
		letter-spacing: 0.5px;
		text-transform: uppercase;	
	}
	
	.header-style-2 .sf-menu > li > a,
	.header-style-2 .sf-menu > li.dropdown > a { color: #fff; }
	
	.sf-menu > li > a:before,
	.sf-menu > li.dropdown > a:before {
		position: absolute;
		top: 0;
		left: 50%;
		width: 0; 
		height: 0; 
		border-top: 15px solid transparent;
		border-right: 10px solid transparent;
		border-left: 10px solid transparent;
		margin-left: -18px;
		content: "";
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.sf-menu > li > a:hover:before,
	.sf-menu > li.dropdown > a:hover:before, 
	.sf-menu > li.current > a:before, 
	.sf-menu > li.sfHover > a:before { border-top-color: #93c274; }
	
	.sf-menu > li a i { margin-right: 5px; }
	
	.sf-menu > li.current > a,
	.sf-menu li.sfHover > a,
	.sf-menu a:hover,
	.sf-menu li.sfHover a:hover, 
	.header-style-2 .sf-menu > li.current > a,
	.header-style-2 .sf-menu li.sfHover > a,
	.header-style-2 .sf-menu a:hover,
	.header-style-2 .sf-menu li.sfHover a:hover {
		color: #93c274;
		text-decoration: none;	
	}

/* =DropDown
   ========================================================================== */
	
	/**
 	 * 1. allow long menu items to determine submenu width
 	 */
	
	.sf-menu li.dropdown ul {
		padding: 12px 0;
		min-width: 200px; 	/* 1 */	
		background-color: #2b2b2b;			
	}
	
	.sf-menu li.dropdown ul li a { position: relative; }
	
	.sf-menu li.dropdown ul li a:before {
		position: absolute;
		top: 0;
		left: 0;
		width: 0; 
		height: 0; 
		border-top: 20px solid transparent; 
		border-right: 20px solid transparent;
		content: "";
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.sf-menu li.dropdown ul li.sfHover > a:before,
	.sf-menu li.dropdown ul li a:hover:before { border-top-color: #93c274; }
		
/* =Mega Menu Section
   ========================================================================== */
	
	.sf-mega {
		width: 100%;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
				box-sizing: border-box;
		padding: 12px 0;
		background-color: #2b2b2b;
		color: #fff;
	}

	.sf-mega-section {
		float: left;
		padding: 0 20px;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
				box-sizing: border-box;
	}
	
	.sf-mega-section:last-child { border-right: none; }

	/**
 	 * 1. set mega menu section size, as a percentage of the mega menu width
 	 */
	
	.sf-mega.sf-mega-1-col .sf-mega-section{ width: 100%; } /* 1 */
	
	.sf-mega.sf-mega-2-col .sf-mega-section{ width: 50%; }
	
	.sf-mega.sf-mega-3-col .sf-mega-section{ width: 33.3333333333%; }
	
	.sf-mega.sf-mega-4-col .sf-mega-section{ width: 25%; }
	
	.sf-mega-section ul li a {
		position: relative;
		padding: 12px 30px; 
	}
	
	.sf-mega-section ul li a:before {
		position: absolute;
		top: 0;
		left: 0;
		width: 0; 
		height: 0;
		border-top: 20px solid transparent; 
		border-right: 20px solid transparent;
		content: "";
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.sf-mega-section ul { margin: 0 -20px; }
	
	.sf-mega-section ul li a:hover:before { border-top-color: #93c274; }
	
	.sf-mega-section-title {
		margin: 10px 0 20px 0;
		font-weight: 700;
		text-transform: uppercase;
	}
	
/* =Menu Arrows
   ========================================================================== */
	
	.sf-arrows .sf-with-ul:after {
		position: absolute;
		top: 50%;
		right: 0;
		display: none;
		width: 0;
		height: 0;
		border: 4px solid transparent;
		border-top-color: #b8b8b8;
		margin-top: 11px;
		content: "";
	}
		
	.sf-arrows > li > .sf-with-ul:focus:after,
	.sf-arrows > li:hover > .sf-with-ul:after,
	.sf-arrows > .sfHover > .sf-with-ul:after { border-top-color: #93c274; }
		
	.sf-arrows ul .sf-with-ul:after {
		display: block;
		border-color: transparent;
		border-left-color: #b8b8b8;
		margin-top: -5px;
		margin-right: 10px;
	}
	
	.sf-arrows ul li > .sf-with-ul:focus:after,
	.sf-arrows ul li:hover > .sf-with-ul:after,
	.sf-arrows ul .sfHover > .sf-with-ul:after { border-left-color: #93c274; }
	
	@media (min-width: 768px) and (max-width: 991px) {

		#menu { display: none; }

	}
	
	@media (max-width: 767px) {

		#menu { display: none; }
	
	}
	
/* ==========================================================================
   =Mobile Menu 
   ========================================================================== */
			
	#mobile-menu {
		border-bottom: 1px solid #e1e1e1;
		margin-bottom: 0;
		background-color: #2b2b2b;
	}
	
	#mobile-menu li {	
		display: block;
		margin: 0;
	}
		
	#mobile-menu > li > ul, 
	#mobile-menu > li > ul > li > ul {
		display: none;
		margin-left: 0;
	}
	
	#mobile-menu .sf-mega {
		display: none;
		padding: 0;
		border: none;
		margin: 0;
	}
	
	#mobile-menu .sf-mega-section {
		float: none;
		width: 100%;
		padding: 0;
		border: none;
	}
	
	#mobile-menu .sf-mega-section ul { margin-left: 0; }
	
	#mobile-menu .sf-mega-section ul li a:before { content: none; }

	#mobile-menu li a {
		position: relative;
		display: block;
		padding: 15px 25px;
		border-top: 1px solid #e1e1e1;
		color: #fff;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 14px;
		text-align: left;
		text-decoration: none;
	}
	
	#mobile-menu > li > a {
		font-size: 13px;
		font-weight: 700;
		text-transform: uppercase;
	}
	
	#mobile-menu ul a { padding-left: 45px; }
	
	#mobile-menu ul li ul a  { padding-left: 65px; }
	
	#mobile-menu .mobile-menu-submenu-arrow {
		position: absolute;
		top: 0;
		right: 0;
		width: 70px;
		height: 100%;
		border-left: 1px solid #e1e1e1;
		color: #fff;
		font-size: 20px;
		line-height: 50px;
		text-align: center;
		cursor: pointer;
	}
	
	#mobile-menu .mobile-menu-submenu-arrow:hover { background-color: #93c274; }
	
	#mobile-menu li a:hover {}
	
	#mobile-menu { display: none; }

/* ==========================================================================
   =Mobile menu trigger
   ========================================================================== */
				
	#mobile-menu-trigger { 
		float: right;
		display: none;
		font-size: 32px;
	}

	@media (min-width: 768px) and (max-width: 991px) {

		#mobile-menu-trigger { 
			display: block;
			margin-top: 54px;
			margin-right: 0;
		}	

	}

	@media (max-width: 767px) {

		#mobile-menu-trigger { 
			position: absolute;
			top: 43px;
			right: 5px;
			display: block;
			padding: 10px;
			margin-top: 0;
		}

	}

	@media only screen and (min-width: 480px) and (max-width: 767px) {

		#mobile-menu-trigger {}
	
	}		
		
/* ==========================================================================
   =Custom search form 
   ========================================================================== */
	
	#custom-search-button + nav { margin-right: 30px; }
	
	#custom-search-button { 
		position: absolute;
		top: 62px;
		right: 15px;
		display: block;
		width: 16px;
		height: 18px;
		background: url(../images/bg-search.png) no-repeat center center;
	}
	
	.header-style-2 #custom-search-button { background-image: url(../images/bg-search-2.png); }
	
	/**
 	 * 1. z-index is 1030 because the menu has a z-index of 1025 
 	 */
	 
	#custom-search-form {
		position: absolute;
		z-index: 1030; 	/* 1 */
		top: 118px;
		right: 5px;
		display: none;
	}

	#custom-search-form:before {
		position: absolute; 
		z-index: 1; 
		top: -10px; 
		right: 10px; 
		width: 0; 
		height: 0;
		border-right: 7px solid transparent; 
		border-bottom: 10px solid #e1e1e1; 
		border-left: 7px solid transparent; 
		content: "";
	}
	
	#custom-search-form:after {
		position: absolute;
		z-index: 2; 
		top: -7px; 
		right: 10px; 
		width: 0; 
		height: 0; 
		border-right: 7px solid transparent; 
		border-bottom: 10px solid #fff; 
		border-left: 7px solid transparent; 
		content: "";
	}
	
	#custom-search-submit { display: none; }
	
	#custom-search-form #s {
		width: 250px;
		padding: 8px 10px;
		border-radius: 0;	
		background-color: #fff; 
	}
	
	#custom-search-form #s:focus { border-color: #e1e1e1; }
	
	
	@media (min-width: 768px) and (max-width: 991px) {

		#custom-search-button { right: 65px; }
		#custom-search-form { right: 55px; }
		
	}
	
	@media (max-width: 767px) {

		/**
		 * Hide search on mobile
		 */
		 
		/**
		 * 1. !important is needed to overwrite the display:block added by the js
		 */ 
	
		#custom-search-form { 
			display: none !important; /* 1 */
		}
		
		#custom-search-button { display: none; }
		
	}

/* ==========================================================================
   =Sticky Header
   ========================================================================== */

	@media (min-width: 1025px) {
		
		/**
		 * 1. The height of the #header-wrap should be increased or decreased to accommodate the logo
		 */
		 
		#header-wrap {
			position: relative;
			height: 126px; /* 1 */
		}
		
		#header {
			position: absolute;
			top: 0; 					
			right: 0;
			left: 0;
			margin: 0 auto; 
			
		}
		
		/**
		 * 1. The z-index has to be 1020 so it is bigger than the back to top buttons z-index that is 1010
		 */
		
		#header.stuck {
			position: fixed;
			z-index: 1020; /* 1 */
			top: 0;
			width: 100%;
			padding: 5px 0 0 0;
			border-top: none;
			margin: 0 auto;		
			background-color: #2b2b2b;
			-webkit-transition: padding 0.3s;
					transition: padding 0.3s;
		}
		
		#header.stuck #logo { padding: 5px 0; }
		
		#header.stuck .sf-menu > li > a,
		#header.stuck .sf-menu > li.dropdown > a { 
			padding: 40px 15px 40px 0;
			color: #fff;
		}
		
		#header.stuck .sf-menu > li > a:before,
		#header.stuck .sf-menu > li.dropdown > a:before { content: none; }
		
		#header.stuck .sf-menu > li.current > a,
		#header.stuck .sf-menu li.sfHover > a,
		#header.stuck .sf-menu a:hover,
		#header.stuck .sf-menu li.sfHover a:hover { color: #93c274; }
		
		#header.stuck .sf-mega { margin-top: 0; }

		#header.stuck .sf-arrows .sf-with-ul:after { margin-top: -6px; }		
	
		#header.stuck #custom-search-button { 
			top: 38px;
			background-image: url(../images/bg-search-2.png);
		}
		
		#header.stuck #custom-search-form { top: 98px; }
	
	}
	
/* ==========================================================================
   =Content
   ========================================================================== */
   	
	#content { padding-bottom: 50px; }

/* ==========================================================================
   =Page Header
   ========================================================================== */
   	
	#page-header { 
		padding: 75px 0;
		margin-bottom: 100px;
		background: no-repeat center center; 
		color: #fff;
		text-align: center;
	}
	
	.header-style-2 #page-header { padding: 200px 0 90px 0; }
	
	#page-header h2 { 
		margin-bottom: 0;
		color: #fff;
		text-transform: uppercase;
	}

/* ==========================================================================
   =Fullwidth Section
   ========================================================================== */
   
    /**
 	 * Full width section
 	 *
	 * 1. background-image must be supplied using inline css as it is different for every .fullwidth-section
	 *
	 */
	 
   .fullwidth-section {
		position: relative;
		overflow: hidden;
		z-index: 0;	
		padding: 50px 0;
		margin-bottom: 100px;
		background-color: #f8f8f8;
		background-attachment: scroll;
		background-repeat: no-repeat; /* 1 */ 
		background-position: 50% 0;		
	}

	.fullwidth-section-content {
		position: relative;
		z-index: 3;
	}
   
   	.fullwidth-section-overlay {
		position: absolute;
		z-index: 2;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-repeat: repeat;
		background-position: center top;
		background-image: url(../images/pattern.png);	
	}
	
	.fullwidth-section-video {
		position: absolute;
		overflow: hidden;
		z-index: 1;
		top: 0;
		width: 100%;
		height: 100%;
	}
	
	.yt-player { display: none; }
	
	/**
 	 *
	 * 1. We add background-size cover so the parallax looks ok if you provide smaller images
	 *
	 */
	
	.parallax.parallax-enabled { 
		background-attachment: fixed !important;
		-webkit-background-size: cover;
				background-size: cover;	/* 1 */
	}
	
	.horizontal-parallax { background-repeat: repeat-x; }
	
	.animated-parallax { background-repeat: repeat-x; }
	
	@media (max-width: 767px) {

		.fullwidth-section {
			-webkit-background-size: cover;
					background-size: cover;		
		}
		
	}
	
/* ==========================================================================
   =Footer Top
   ========================================================================== */

	#footer-top { 
		background-color: #93c274;
		color: #fff;
	}
	
	#footer-top a,
	#footer-top h1,
	#footer-top h2,
	#footer-top h3,
	#footer-top h4,
	#footer-top h5,
	#footer-top h6 { color: #fff; }
	
	#footer-top .btn-white { border-color: #fff; }
	
	#footer-top-widget-area-1 {}
	#footer-top-widget-area-2 {}
	#footer-top-widget-area-3 {}
	#footer-top-widget-area-4 {}
   
/* ==========================================================================
   =Footer
   ========================================================================== */		
	
	#footer { 
		padding: 110px 0;	
		background-color: #161616;
		color: #a9a9a9;
	}
	
	#footer a,
	#footer h1,
	#footer h2,
	#footer h3,
	#footer h4,
	#footer h5,
	#footer h6 { color: #a9a9a9; }
	
	#footer a:hover { color: #93c274; }
	
	#footer-widget-area-1 {}
	#footer-widget-area-2 {}
	#footer-widget-area-3 {}
	#footer-widget-area-4 {}
	
	@media (max-width: 767px) {
		
		#footer-widget-area-1 + #footer-widget-area-2 { margin-top: 60px; }
		#footer-widget-area-2 + #footer-widget-area-3 { margin-top: 60px; }
		#footer-widget-area-3 + #footer-widget-area-4 { margin-top: 60px; }
		
	}
	
/* ==========================================================================
   =Footer Bottom
   ========================================================================== */	
  
	#footer-bottom { 
		padding: 40px 0;	
		background-color: #0a0d0b;	
		color: #3b3b3b;
	}
	
	#footer-bottom a,
	#footer-bottom h1,
	#footer-bottom h2,
	#footer-bottom h3,
	#footer-bottom h4,
	#footer-bottom h5,
	#footer-bottom h6 { color: #3b3b3b; }
	
	#footer-bottom a:hover { color: #93c274; }
	
	#footer-bottom-widget-area-1 {}
	#footer-bottom-widget-area-2 {}
	#footer-bottom-widget-area-3 {}
	#footer-bottom-widget-area-4 {}
	
	@media (max-width: 767px) {
		
		#footer-bottom-widget-area-1 + #footer-bottom-widget-area-2 { margin-top: 30px; }
		#footer-bottom-widget-area-2 + #footer-bottom-widget-area-3 { margin-top: 30px; }
		#footer-bottom-widget-area-3 + #footer-bottom-widget-area-4 { margin-top: 30px; }
		
	}
	
/* ==========================================================================
   =Back to top
   ========================================================================== */

	#back-to-top {
		position: fixed;
		z-index: 1010;
		right: -40px;
		bottom: 20px;
		width: 40px;
		height: 40px;
		background-color: #3b3e43;
		color: #fafafa;
		font-size: 24px;
		text-align: center;					
		opacity: 0.5;
		cursor: pointer;
		text-decoration: none;
		-webkit-transition: all 0.4s ease 0s;
				transition: all 0.4s ease 0s;
	}
	
	#back-to-top i {
		font-size: 24px;
		line-height: 40px;
		font-weight: normal;
		vertical-align: top;
		-webkit-transition: all 0.4s ease 0s;
				transition: all 0.4s ease 0s;
	}
	
	#back-to-top:hover { background-color: rgba(0, 0, 0, 0.7); }
	#back-to-top:hover i { color: #fff; }
	#back-to-top.visible { right: 40px; }
	#back-to-top.gone { right: -40px; }	

/* ==========================================================================
   =Misc
   ========================================================================== */
   
	.javascript-required,
	.modern-browser-required {
	    padding: 15px 0;
		background-color: #ff0030;
		color: #fff;
		font-weight: 700;
		text-align: center;
	}

/* ==========================================================================
   #Slider
   ========================================================================== */
   
	.main-slider {
		position: relative;
		overflow: hidden;
		margin: 0 auto 60px auto;
	}

	.main-slider .main-slider__slides {
		margin-bottom: 0;
		list-style: none;
		position: relative;
	}

	.main-slider .main-slider__slides li {
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
		padding: 50px 30px;
		min-height: 250px;
	}

	@media (min-width: 768px) {
		.main-slider .main-slider__slides li {
			padding: 75px 15px;
		}
	}

	@media (min-width: 992px) {
		.main-slider .main-slider__slides li {
			padding: 75px 20px;
		}
	}

	@media (min-width: 1200px) {
		.main-slider .main-slider__slides li {
			padding: 100px 30px;
		}
	}

	.main-slider .main-slider__slides li .main-slider-slide__overlay {
		position: absolute;
		z-index: 1;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background-color: rgba(0, 0, 0, 0.25);
	}

	.main-slider .main-slider__slides li .main-slider-slide__content {
		position: relative;
		z-index: 2;
	}

	@media (min-width: 768px) {
		.main-slider .main-slider__slides li .main-slider-slide__content {
			width: 730px;
			min-height: 300px;
			margin: 0 auto;
		}
	}

	@media (min-width: 992px) {
		.main-slider .main-slider__slides li .main-slider-slide__content {
			width: 940px;
			min-height: 350px;
		}
	}

	@media (min-width: 1200px) {
		.main-slider .main-slider__slides li .main-slider-slide__content {
			width: 1140px;
			min-height: 450px;
		}
	}

	@media (min-width: 768px) {
		.main-slider-slide__content--align-center {
			text-align: center;
		}
		.main-slider-slide__content--align-right {
			text-align: right;
		}
	}

	.main-slider .main-slider-slide__content-wrap *:last-child {
		margin-bottom: 0;
	}

	@media (min-width: 768px) {
		.main-slider-slide__content--valign-middle .main-slider-slide__content-wrap {
			position: absolute;
			top: 50%;
			width: 100%;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
		}
		.main-slider-slide__content--valign-bottom .main-slider-slide__content-wrap {
			position: absolute;
			bottom: 0;
			width: 100%;
		}
	}
	
	.main-slider-slide__content h1 {
		color: #fff;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 30px;
		font-weight: 700;
		text-transform: uppercase;
	}
	
	.main-slider-slide__content h2 {}
	
	.main-slider-slide__content p {
		color: #fff;
		font-size: 14px;
		font-weight: 600;
	}
	
	.main-slider-slide__content .btn {}
	

	.main-slider .main-slider__pager {
		position: absolute;
		width: 100%;
		bottom: 0;
		padding: 15px;
		z-index: 3;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	@media (min-width: 768px) {
		.main-slider .main-slider__pager {
			left: 50%;
			bottom: 10px;
			padding: 15px 0;
			width: 730px;
			-webkit-transform: translateX(-50%);
			-ms-transform: translateX(-50%);
			transform: translateX(-50%);
		}
	}

	@media (min-width: 992px) {
		.main-slider .main-slider__pager {
			width: 940px;
			bottom: 15px;
		}
	}

	@media (min-width: 1200px) {
		.main-slider .main-slider__pager {
			width: 1140px;
		}
	}

	@media (min-width: 1400px) {
		.main-slider .main-slider__pager {
			bottom: 25px;
		}
	}

	.main-slider .main-slider__pager .slick-dots {
		list-style: none;
		margin-bottom: 0;
	}

	.main-slider .main-slider__pager .slick-dots:after {
		display: block;
		visibility: hidden;
		height: 0;
		font-size: 0;
		content: ' ';
		clear: both;
	}

	.main-slider .main-slider__pager.main-slider__pager--align-left .slick-dots {
		text-align: left;
	}

	.main-slider .main-slider__pager.main-slider__pager--align-center .slick-dots {
		text-align: center;
	}

	.main-slider .main-slider__pager.main-slider__pager--align-right .slick-dots {
		text-align: right;
	}

	.main-slider .main-slider__pager .slick-dots li {
		position: relative;
		z-index: 2;
		display: inline-block;
		border-radius: 50%;
		padding: 1px;
		margin-right: 3px;
	}

	.main-slider .main-slider__pager .slick-dots li:last-child {
		margin-right: 0;
	}

	.main-slider .main-slider__pager .slick-dots li button {
		display: block;
		padding: 0;
		width: 12px;
		height: 12px;
		border: 2px solid #93c274;
		border-radius: 50%;
		background-color: transparent;
		cursor: pointer;
		outline: none;
		color: transparent;
		font-size: 0;
		line-height: 0;
	}

	.main-slider .main-slider__pager .slick-dots li.slick-active button {
		background-color: #93c274;
	}

	.main-slider .main-slider__arrows a {
		position: absolute;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		transform: translateY(-50%);
		color: #fff;
		font-size: 24px;
		text-decoration: none;
	}

	.main-slider .main-slider__arrows a:hover {
		color: #fff;
	}

	.main-slider .main-slider__arrows .slick-prev {
		left: 5px;
	}

	.main-slider .main-slider__arrows .slick-next {
		right: 5px;
	}

	@media (min-width: 767px) {
		.main-slider .main-slider__arrows a {
			font-size: 30px;
		}
	}

	@media (min-width: 992px) {
		.main-slider .main-slider__arrows .slick-prev {
			left: 10px;
		}
		.main-slider .main-slider__arrows .slick-next {
			right: 10px;
		}
	}

	@media (min-width: 1400px) {
		.main-slider .main-slider__arrows .slick-prev {
			left: 25px;
		}
		.main-slider .main-slider__arrows .slick-next {
			right: 25px;
		}
	}
	 
/* ==========================================================================
   =Accordions and Toggles
   ========================================================================== */

/* =Accordion
   ========================================================================== */
	
	.accordion { margin-bottom: 30px; }

	.accordion-item {
		position: relative;
		display: block;
		padding: 17px 25px;
		border: 1px solid #e1e1e1;
		margin-bottom: 20px;
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif; 
		font-weight: 700;
		text-transform: uppercase;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	a.accordion-item { color: #3b3e43; }
	
	.accordion-item:after {
		position: absolute;
		top: 17px;
		right: 15px;
		font-size: 18px;
		content: "+";
	}
	
	.accordion-item.active:after { content: "-"; }
	
	.accordion-item:hover,
	.accordion-item.active {
		border-color: #93c274;
		background-color: #93c274;
		color: #fff;
		text-decoration: none;
	}
	
	.accordion-item-content { 
		display: none; 
		padding: 10px 0 20px 0; 
	}
	
	.accordion-item-content h5 {
		margin-bottom: 10px;
		color: #93c274;
		text-transform: uppercase;
	}
	
	.accordion-item-content *:last-child { margin-bottom: 0; }
	
	/*
	 * 1. Clearfix hack 
	 */
	 
	.accordion-item-content:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;
	}
	
/* =Toggle
   ========================================================================== */
	
	.toggle { margin-bottom: 30px; }

	.toggle-item {
		position: relative;
		display: block;
		padding: 17px 25px;
		border: 1px solid #e1e1e1;
		margin-bottom: 20px;
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif; 
		font-weight: 700;
		text-transform: uppercase;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	a.toggle-item { color: #3b3e43; }
	
	.toggle-item:after {
		position: absolute;
		top: 17px;
		right: 15px;
		font-size: 18px;
		content: "+";
	}
	
	.toggle-item.active:after { content: "-"; }
	
	.toggle-item:hover,
	.toggle-item.active {
		border-color: #93c274;
		background-color: #93c274;
		color: #fff;
		text-decoration: none;
	}
	
	.toggle-item-content { 
		display: none; 
		padding: 10px 0 20px 0; 
	}
	
	.toggle-item-content h5 {
		margin-bottom: 10px;
		color: #93c274;
		text-transform: uppercase;
	}
	
	.toggle-item-content *:last-child { margin-bottom: 0; }
	
	/*
	 * 1. Clearfix hack 
	 */
	 
	.toggle-item-content:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;
	}

/* ==========================================================================
   =Alerts
   ========================================================================== */

	.alert {
		padding: 13px 15px;
		border: 1px solid #e1e1e1;	
		margin-bottom: 30px;
		background-color: #fff;
		color: #858585;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 18px;
		font-weight: 700;
		text-align: center;
	}
	
	.alert i {
		position: relative;
		top: 1px;
		margin-right: 7px;
		font-size: 16px;
	}
	
	.alert.info {
		border: 1px solid #e1e1e1;
		background-color: #e1e1e1;
		color: #fff;
	}
	
	.alert.success {
		border: 1px solid #93c274;
		background-color: #93c274;
		color: #fff;
	}
	
	.alert.error {
		border: 1px solid #d50f25;
		background-color: #d50f25;
		color: #fff;
	}
	
	.alert.warning {
		border: 1px solid #75ae6a;
		background-color: #75ae6a;
		color: #fff;
	}
	
	h1.error {
		margin: 30px 0 20px 0;
		font-size: 60px;
		line-height: 80px;
		font-weight: 700;
		text-align: center;
		text-transform: uppercase;
	}
	
/* ==========================================================================
   =Animations
   ========================================================================== */
   
   .animate {
		-webkit-animation-duration: 1s;
				animation-duration: 1s;
		-webkit-animation-fill-mode: both;
				animation-fill-mode: both;
		visibility: hidden;
	}

	.animate.visible { visibility: visible; }
	.animate.hidden { visibility: hidden; }

/* ==========================================================================
   =Boxes
   ========================================================================== */

	.box { 
		padding: 40px; 
		margin-bottom: 50px;
		text-align: center;
	}
	
	.box  > *:last-child { margin-bottom: 0; } 

	.box.box-style-1 {
		border-radius: 2px;
		border: 1px solid #93c274;
	}

	.box.box-style-2 { 
		background-color: #93c274;
		color: #fff;
	}
	
	.box.box-style-2 h1,
	.box.box-style-2 h2,
	.box.box-style-2 h3,
	.box.box-style-2 h4,
	.box.box-style-2 h5,
	.box.box-style-2 h6 { color: #fff; }
   
	/*
	 * 1. Clearfix hack 
	 */
	 
	.box:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;
	}
	
/* ==========================================================================
   =Buttons
   ========================================================================== */

/* =Default Button
   ========================================================================== */
   
	.btn {
		position: relative;
		overflow: hidden;
		display: inline-block; 
		padding: 15px 45px 15px 35px; 
		margin: 0 5px 20px 0;
		background-color: #75ae6a;
		color: #fff;
		font-family: 'Quicksand', Arial, sans-serif;
		line-height: 18px;
		font-weight: 700;
		text-decoration: none !important;
		text-transform: uppercase;
		vertical-align: middle;
		cursor: pointer;
		-webkit-transition: all 0.3s;
				transition: all 0.3s; 	
	}
	
	.btn:after {
		position: absolute;
		top: 0;
		right: 0;
		width: 0; 
		height: 0; 
		border-top: 48px solid #93c274; 
		border-left: 48px solid transparent; 
		content: "";
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	a.btn { color: #fff; }
	
	.btn:focus { outline: 0; }
	
	.btn-large {
		padding: 20px 50px 20px 40px;
		font-size: 16px;
	}
	
	.btn-large:after {
		border-top: 58px solid #93c274; 
		border-left: 58px solid transparent; 
	}
	
	.btn i,
	.btn-large i { 
		float: left; 
		margin: 2px 8px 0 -4px;
		font-size: 14px; 
		line-height: 14px; 
	}
	
	.btn:hover:after {
		top: -28px;
		right: -28px;
	}

/* =Colored Buttons
   ========================================================================== */
	
	.btn-white {
		padding: 15px 35px;
		border: 2px solid #858585;
		background-color: transparent;
		color: #858585;
	}
	
	a.btn-white { color: #858585; }
	
	.btn-white:after { content: none; }
	
	.btn-white.btn-large { padding: 20px 40px; }
	
	.btn-white:hover { 
		background: #858585;
		color: #fff;
	}

/* ==========================================================================
   =Callouts
   ========================================================================== */

	.callout {
		padding: 30px 0;
		margin-bottom: 30px;
	}	
	
	.callout-action { 
		padding-top: 5px;
		text-align: right;
	}
	
	.callout-action .btn { margin-right: 0; }

	.callout-content > *:last-child,
	.callout-action > *:last-child {
		margin-bottom: 0; 
	}

	/*
	 * 1. Clearfix hack 
	 */
	 
	.callout:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;
	}
	
	@media (max-width: 767px) {
		
		.callout-action {
			margin-top: 20px;
			text-align: left;
		}
		
	}
	
/* ==========================================================================
   =Clients logos
   ========================================================================== */
	
	.clients-logos {
		margin: 50px 0;
		list-style: none;
		text-align: center;
	}
	
	.clients-logos li {
		position: relative;
		float: left;
		width: 20%;
		-webkit-transition: background-color 0.3s;
				transition: background-color 0.3s;
	}
	
	.clients-logos li:hover { background-color: #93c274; }
	
	/*
	 * 1. Clearfix hack 
	 */
	.clients-logos:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}
	
	@media (max-width: 767px) {
		
		.clients-logos li {
			float: none;
			width: 100%;
			margin-bottom: 10px;
		}
		
		.clients-logos li:last-child { margin-bottom: 0; }
		
	}
   
/* ==========================================================================
   =Contact form
   ========================================================================== */
  
	#contact-form { 
		overflow: hidden; 
		margin: 40px 0; 
	}
	
	#contact-form fieldset {}
	
	label.validation-error { color: #ff0030; }
	
	input.validation-error,
	textarea.validation-error,
	select.validation-error { border: 1px solid #e1e1e1; }
	
	#contact-form #formstatus {}
		
	#contact-form textarea {}	
	
	/*
	 * 1. Clearfix hack 
	 */
	#contact-form:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}

/* ==========================================================================
   =Countdown
   ========================================================================== */
	
	#countdown {
		margin: 100px 0;
		text-align: center;
	}
	
	.countdown-section {
		float: left;
		width: 25%;
	}
	
	.countdown-amount {
		display: block;
		width: 165px;
		height: 165px;
		border: 5px solid #3b3e43;
		border-radius: 50%;
		margin: 0 auto 40px auto;
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 36px;
		line-height: 165px;
		font-weight: 700;
	}
	
	.countdown-period {
		display: block;
		margin-bottom: 40px;
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 18px;
		font-weight: 700;
		text-transform: uppercase;
	}
	
	/*
	 * 1. Clearfix hack 
	 */
	#countdown:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}
	
	@media (min-width: 768px) and (max-width: 991px) {
		
		.countdown-amount {
			width: 120px;
			height: 120px;
			line-height: 120px;
		}
		
	}
	
	@media (max-width: 767px) {
		
		.countdown-section {
			float: left;
			width: 50%;
		}
		
		.countdown-amount {
			width: 120px;
			height: 120px;
			line-height: 120px;
		}
		
	}
	
/* ==========================================================================
   =Dividers
   ========================================================================== */

	.divider { margin: 50px 0; }
	
	.divider.single-line { border-top: 2px solid #e1e1e1; }
	
	.divider.double-line { border-top: 6px double #e1e1e1; }

/* ==========================================================================
   =Dropcaps
   ========================================================================== */
   
	.dropcap {
		float: left;
		display: block;
		margin: 5px 10px 0 0;
		font-size: 34px;
		line-height: 38px;
	}
	
	.dropcap.dropcap-square {
		width: 42px;
		height: 42px;
		border-radius: 2px;
		background-color: #93c274;		
		color: #ffffff;
		font-size: 20px;		
		line-height: 42px;
		text-align: center;
		
	}
	
	.dropcap.dropcap-circle {
		width: 42px;
		height: 42px;
		border-radius: 50%;
		background-color: #93c274;		
		color: #ffffff;
		font-size: 20px;		
		line-height: 42px;
		text-align: center;
	}
   
/* ==========================================================================
   =Galleries
   ========================================================================== */
	
	
	
/* ==========================================================================
   =Google Maps
   ========================================================================== */

	.google-map {
		width: 100%; 
		height: 400px;
	}
	
	/**
	 * 1. needed so that Google Maps controls are not distorted
	 */
	
	.google-map  img { max-width: none; }	/* 1 */
	
	.map { margin: 40px 0; }
	
	@media (max-width: 767px) {

		.map { padding: 0 20px; }
		.row .map { padding: 0; }
		
	}

/* ==========================================================================
   =Headlines
   ========================================================================== */

	.headline {
		margin-bottom: 100px;
		text-align: center;
		text-transform: uppercase;
	}
	
	.headline:after {
		display: block;
		width: 100px;
		border-top: 4px solid #93c274;
		margin: 15px auto 0 auto;
		content: "";
	}
	
	.headline h2 { margin-bottom: 5px; }
	
	.headline p {
		margin-bottom: 0;
		font-weight: 600;
		letter-spacing: 1px;
	}
	
	.headline-2 {
		margin-bottom: 50px;
		text-transform: uppercase;
	}
	
	.headline-2:after {
		display: block;
		width: 100px;
		border-top: 4px solid #93c274;
		margin-top: 15px;
		content: "";
	}
	
	.headline-2 h2 { margin-bottom: 5px; }
	
	.headline-2 p {
		margin-bottom: 0;
		font-weight: 600;
		letter-spacing: 1px;
	}
	
/* ==========================================================================
   =Icon Boxes
   ========================================================================== */

/* =Icon Box 1
   ========================================================================== */
   
	.icon-box-1 { 
		position: relative; 
		margin-bottom: 50px;
		text-align: center; 
	}
	
	.icon-box-1 > span {
		display: block;
		width: 80px;
		height: 80px;
		border: 2px solid #93c274;
		margin: 0 auto 45px auto; 
		content: "";
		-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
				transform: rotate(45deg);
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
		
	.icon-box-1 > span i {
		display: block;
		color: #93c274; 
		font-size: 32px;
		line-height: 82px;
		-webkit-transform: rotate(-45deg);
			-ms-transform: rotate(-45deg);
				transform: rotate(-45deg);
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.icon-box-1 h5 {
		margin-bottom: 20px;
		text-transform: uppercase;
	}
	
	.icon-box-1 .icon-box-content {}	
	
	.icon-box-1:hover > span i { color: #fff; }
	.icon-box-1:hover > span { background-color: #93c274; }
	
/* =Icon Box 2
   ========================================================================== */
   
	.icon-box-2 { 
		position: relative; 
		margin-bottom: 50px;
		text-align: center; 
	}
		
	.icon-box-2 > i {
		display: block;
		margin-bottom: 30px;
		color: #93c274; 
		font-size: 32px;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.icon-box-2 h5 {
		margin-bottom: 20px;
		text-transform: uppercase;
	}
	
	.icon-box-2 .icon-box-content {}	
	
	.icon-box-2:hover > i {
		-webkit-transform: scale(1.5);
			-ms-transform: scale(1.5);
				transform: scale(1.5);
	}

/* =Icon Box 3
   ========================================================================== */
   
	.icon-box-3 { 
		position: relative; 
		margin-bottom: 50px; 
	}	
	
	.icon-box-3 > i { 
		float: left;
		margin-right: 20px;		 
		color: #93c274; 
		font-size: 32px; 
		-webkit-transition: color 0.3s;
				transition: color 0.3s;
	}  
	
	.icon-box-3 .icon-box-content {}
	
	.icon-box-3 h5 {
		padding-top: 5px;
		margin-bottom: 20px;
		text-transform: uppercase;
	}
	
	.icon-box-3:hover > i { color: #75ae6a }

/* =Icon Box 4
   ========================================================================== */
   
	.icon-box-4 { 
		position: relative; 
		margin-bottom: 50px;
		text-align: right; 
	}	
	
	.icon-box-4 > i { 
		float: right;
		margin-left: 20px;		 
		color: #93c274; 
		font-size: 32px;
		-webkit-transition: color 0.3s;
				transition: color 0.3s; 
	}  
	
	.icon-box-4 .icon-box-content {}
	
	.icon-box-4 h5 {
		padding-top: 5px;
		margin-bottom: 20px;
		text-transform: uppercase;
	}
	
	.icon-box-4:hover > i { color: #75ae6a }

/* ==========================================================================
   =Image Box
   ========================================================================== */
	
	/**
 	 * 1. z-index is 25 because the .fullwidthbanner ul li is 20
 	 */
	 
	.image-box {
		position: relative;
		z-index: 25; /* 1 */
		overflow: hidden;
		margin-bottom: 50px;
		text-align: center;
		box-shadow: 1px 5px 3px rgba(0, 0, 0, 0.4);
	}
	
	.image-box-overlay {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color: rgba(255, 255, 255, 0.7);
		opacity: 0;
		-webkit-transition: opacity 0.3s;
				transition: opacity 0.3s;
	}
	
	.image-box-img img {
		display: block;
		width: 100%;
	}
	
	.image-box h4 a {
		position: absolute;
		top: 50%;
		left: 50%;
		display: block;
		width: 60%;
		padding: 15px;
		background-color: #93c274;
		color: #fff;
		text-transform: uppercase;
		-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
				transform: translate(-50%, -50%);
		-webkit-transition: background-color 0.3s;
				transition: background-color 0.3s; 
	}
	
	.image-box h4 a:hover {
		background-color: #75ae6a;
		text-decoration: none; 
	}
	
	.image-box > *:last-child { margin-bottom: 0; }
	
	.image-box:hover .image-box-overlay { opacity: 1; }
	
/* ==========================================================================
   =Info box
   ========================================================================== */
	
	.info-box {
		position: relative;
		overflow: hidden;
		padding: 100px 0 80px 0;
		margin: 50px 0 100px 0;
		background-color: #f8f8f8;
	}
	
	.info-box-img {
		position: absolute;
		z-index: 0;
		top: 0;
		width: 50%;
		height: 100%;
	}
	
	.info-box-img-left, 
	.info-box-img-right {
		position: absolute;
		z-index: 0;
		top: 0;
		width: 25%;
		height: 100%;
		background: no-repeat center center;
	}
	
	.info-box-img-left { left: 0; } 
	.info-box-img-right { right: 0; }
	
	.info-box-img-left img,
	.info-box-img-right img { display: none; }
	
	@media (min-width: 1200px) {
		
		.info-box-img-left, 
		.info-box-img-right { width: 30%; }
		
	}
	
	@media (max-width: 767px) {
		
		.info-box { 
			padding: 0;
			margin-top: 100px;
		}
		
		.info-box-img-left, 
		.info-box-img-right {
			position: relative;
			width: 100%;
			background: none !important;		 
		}
		
		.info-box-img-left { margin-bottom: 30px; }
		.info-box-img-right { margin-top: 30px; }
		
		.info-box-img-left img,
		.info-box-img-right img {
			display: block;
			width: 100%;
		}
		
	}
   
/* ==========================================================================
   =Milestones
   ========================================================================== */

	.milestone {
		position: relative;
		margin-bottom: 30px;
		text-align: center;
	}
	
	/*
	 * 1. Clearfix hack 
	 */
	.milestone:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}
	
	.milestone i {
		display: inline-block;
		margin-bottom: 50px;
		color: #75ae6a;
		font-size: 32px;
	}
	
	.milestone .milestone-content {
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 36px;
		line-height: 48px;
		font-weight: 700;
		letter-spacing: 1px;
	}
	
	.milestone .milestone-description {
		margin-top: 25px; 
		font-size: 18px; 
		line-height: 21px;
		text-transform: uppercase;
	}

/* ==========================================================================
   =Modal window
   ========================================================================== */	
   
	.white-popup {
		position: relative;
		width: auto;
		max-width: 500px;
		padding: 20px;
		margin: 20px auto;
		background: #fff;
	}
	
/* ==========================================================================
   =Our Process
   ========================================================================== */

/* =Horizontal process
   ========================================================================== */

	.horizontal-process-builder { 
		position: relative;
		margin-bottom: 50px;
		list-style: none;
		text-align: center; 
	}
	
	.horizontal-process-builder:before {
		position: absolute;
		z-index: 1;
		top: 60px;
		left: 130px;
		display: block;
		width: 75%;
		border-top: 1px solid #75ae6a;
		content: "";
	}
	
	.horizontal-process-builder li { 
		float: left;
		width: 25%;  
	}
	
	.horizontal-process-builder li i,
	.horizontal-process-builder li h1 {
		position: relative;
		z-index: 2;
		display: block;
		width: 120px; 
		height: 120px;
		overflow: hidden;  
		border: 1px solid #75ae6a;
		border-radius: 50%;
		margin: 0 auto 40px auto;
		outline: 5px solid #fff;
		background-color: #fff;
		background-clip: padding-box;
		color: #3b3e43;
		font-size: 48px; 
		line-height: 120px;
		-webkit-transition: all 0.3s;
				transition: all 0.3s; 
	}
	
	.horizontal-process-builder li:hover i,
	.horizontal-process-builder li:hover h1 {
		background-color: #75ae6a;
		color: #fff;
	}

	.horizontal-process-builder.three-items li { width: 33.3333333333%; }
	.horizontal-process-builder.four-items li { width: 25%; }
	.horizontal-process-builder.five-items li { width: 20%; }
	
	.process-description { padding: 0 15px; }
	
	.process-description h4 {
		margin-bottom: 15px;
		text-transform: uppercase; 
	}
	
	/*
	 * 1. Clearfix hack 
	 */
	.horizontal-process-builder:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}
	
	@media (max-width: 767px) {
		
		.horizontal-process-builder li { 
			float: none;
			width: 100%;
			margin-bottom: 40px; 
		}
		
		.horizontal-process-builder:before { content: none; }
		
		.horizontal-process-builder.three-items li { width: 100%; }
		.horizontal-process-builder.four-items li { width: 100%; }
		.horizontal-process-builder.five-items li { width: 100%; }
		
	}
	
/* ==========================================================================
   =Pie charts
   ========================================================================== */

	.pie-chart-wrap {
		position: relative;
		margin-bottom: 50px;
	}
	
	.pie-chart {
		position: relative;	
		margin: 0 auto 30px;
		text-align: center;
	}
	
	.pie-chart canvas {
		position: absolute;
		z-index: 1;
		top: 0;
		left: 0;
	}
	 
	.pie-chart .pie-chart-custom-text, 
	.pie-chart .pie-chart-percent {
		position: absolute;
		z-index: 2;
		top: 20px;
		left: 0;
		display: block;
		width: 100%;
		color: #3b3e43;
		text-align: center;
	}
	
	.pie-chart i {
		position: absolute;
		top: -20px;
		left: 50%;
		color: #3b3e43;
		font-size: 32px !important;
		-webkit-transform: translateX(-50%);
			-ms-transform: translateX(-50%);
				transform: translateX(-50%);
	}
	
	.pie-chart img {
		max-width: 100%;
		vertical-align: middle;
	}
	
	.pie-chart .pie-chart-custom-text {
		font-size: 18px;
	}
	
	.pie-chart .pie-chart-percent {
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 18px;
		font-weight: 700;
	}
	
	.pie-chart-title {
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 18px;
		font-weight: 700;
		text-align: center;
		text-transform: uppercase;
	}
	
	.pie-chart-description {
		position: absolute;
		z-index: 1;
		bottom: -150px;
		left: 0;
		right: 0;
		padding: 15px;
		box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.3);
		background-color: #fff;
		color: #3b3e43;
		text-align: center;
		opacity: 0;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.pie-chart-wrap .pie-chart-description *:last-child { margin-bottom: 0; }
	
	.pie-chart-description:before {
		position: absolute;
		z-index: 1;
		top: -15px;
		left: 50%;
		width: 0; 
		height: 0; 
		border-left: 12px solid transparent; 
		border-right: 12px solid transparent; 
		border-bottom: 15px solid #e1e1e1;
		margin-left: -6px;
		content: "";
	}
	
	.pie-chart-description:after {
		position: absolute;
		z-index: 2;
		top: -15px;
		left: 50%;
		width: 0; 
		height: 0; 
		border-left: 8px solid transparent; 
		border-right: 12px solid transparent; 
		border-bottom: 15px solid #fff;
		content: "";
		margin-left: -5px;
	}
	
	.pie-chart-wrap:hover .pie-chart-description {
		bottom: -120px;
		opacity: 1;
	}
	
	@media (max-width: 767px) {
		
		.pie-chart-wrap { margin-bottom: 150px; }
		
	}

/* ==========================================================================
   =Pricing Tables
   ========================================================================== */

	.pricing-table {
		position: relative;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
				box-sizing: border-box;
		padding: 60px 10px 40px 10px;
		border: 1px solid #f8f8f8;
		margin-bottom: 50px;
		background-color: #f8f8f8;
		text-align: center;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.pricing-table:before {
		position: absolute;
		top: 0;
		left: 0;
		width: 0; 
		height: 0; 
		border-top: 120px solid #75ae6a; 
		border-right: 100px solid transparent;
		content: "";
	}

	.pricing-table-header {	margin-bottom: 20px; }

	.pricing-table-header h1 {
		margin-bottom: 40px;
		font-size: 60px;
		line-height: 48px;	
		-webkit-transition: color 0.3s;
				transition: color 0.3s;
	}
	
	.pricing-table-header h1 sup {
		margin: 0 -12px;
		font-size: 18px;
		font-weight: 700;
		vertical-align: text-top;
	}
	
	.pricing-table-header h1 small {
		display: block;
		font-size: 14px;
		font-weight: 700;
		text-transform: uppercase;
	}

	.pricing-table-header h3 {
		margin-bottom: 40px;
		text-transform: uppercase; 
		-webkit-transition: color 0.3s;
				transition: color 0.3s;
	}	
		
	.pricing-table-offer { margin-bottom: 50px; }
	
	.pricing-table-offer ul { 
		font-weight: 600;
		letter-spacing: 0.5px;
		list-style: none;
	}
	
	.pricing-table-offer ul li { margin-bottom: 10px; }
	.pricing-table-offer ul li:last-child { margin-bottom: 0; }
	
	.pricing-table:hover { 
		background-color: #93c274; 
		color: #fff;
	}
	
	.pricing-table:hover .pricing-table-header h1,
	.pricing-table:hover .pricing-table-header h3 { color: #fff; }
	
	@media (min-width: 768px) and (max-width: 991px) {
		
		.pricing-table:before { 
			border-top: 80px solid #75ae6a; 
			border-right: 70px solid transparent;
		}
		
	}

/* ==========================================================================
   =Progress Bar
   ========================================================================== */

	.progress-bar-description {
		display: inline-block;
		margin-bottom: 15px;
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif;
		font-weight: 700;
		text-transform: uppercase;		
	}
	
	.progress-percentage {
		position: absolute;
		top: -40px;
		right: 0;
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif;
		font-weight: 700;
	}
	
	.progress-bar {
		position: relative;
		display: block;
		height: 7px;
		margin-bottom: 20px;
		background-color: #e1e1e1;
	}
	
	.progress-bar .progress-bar-outer {
		position: absolute;
		top: 0;
		left: 0;
		height: 100%;
		background-color: #93c274;
	}
	
	.progress-bar .progress-bar-outer .progress-bar-inner {
		position: absolute;
		z-index: 1;
		overflow: hidden;
		top: 0;
		left: 0;
		display: block;
		height: 100%;
		width: 100%;
	}

/* ==========================================================================
   =Revolution Slider
   ========================================================================== */
   
/* =Rev Slider Basics
   ========================================================================== */   
   
	.fullwidthbanner-container {
		position: relative;
		overflow: hidden;
		width: 100% !important;
		padding: 0;
		margin: 0; 
	}

	.fullwidthbanner-container ul { list-style: none; }

	.fullwidthbanner-container .fullwidthbanner {
		position: relative;
		width: 100% !important;
	}
	
	/**
 	 * 1. We apply the max-height using an extra class to make the transition to WP more easy
	 *    If we apply the max-heigh directly to .fullwidthbanner-container, in WP, it would overwrite the height setting you make in the plugin
 	 */
	
	.slider-revolution.fullwidthbanner-container {
		max-height: 655px !important; /* 1 */
		margin-bottom: 100px; 
	}

	.slider-revolution.fullwidthbanner-container .fullwidthbanner {
		max-height: 655px !important; /* 1 */
	}

/* =Rev Slider Pager
   ========================================================================== */

   /**
 	 * 1. changing the z-index from 1000 so that the bullets don't go over the sticky menu
 	 */
   
	.tp-bullets { 
		z-index: 100; /* 1 */
	}
	   
	.tp-bullets.simplebullets.round .bullet {
		width: 7px;
		height: 7px;
		border: 2px solid #93c274;
		border-radius: 50%;
		margin: 0 5px;
		background: transparent;
	}

	.tp-bullets.simplebullets.round .bullet.selected { background: #93c274; }

/* =Rev Slider navigation
   ========================================================================== */

	.tp-leftarrow.default,
	.tp-rightarrow.default {
		width: 33px;
		height: 33px;
		opacity: 0.5;
	}

	.tp-leftarrow.default:hover,
	.tp-rightarrow.default:hover { opacity: 1; }

	.tp-leftarrow.default { background: url(../images/left.png) no-repeat center center; }
	.tp-rightarrow.default { background: url(../images/right.png) no-repeat center center; }
	
/* =Rev Slider typography
   ========================================================================== */
   	
	.caption.title {
		color: #fff;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 30px;
		font-weight: 700;
		text-transform: uppercase;
	}
	
	.caption.title-2 {
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 30px;
		font-weight: 700;
		text-transform: uppercase;
	}
	
	.caption.subtitle {
		color: #93c274;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 18px;
		font-weight: 700;
		text-transform: uppercase;
	}
	
	.caption.text {
		color: #fff;
		font-size: 14px;
		font-weight: 600;
	}
	
	.caption.text-2 {
		color: #3b3e43;
		font-size: 14px;
		font-weight: 600;
		text-align: right;
	}
	
	.caption .btn:hover { color: #fff; }

	@media (min-width: 768px) and (max-width: 991px) {
		
		.tp-leftarrow.default,
		.tp-rightarrow.default { display: none; }
		
		.caption .btn {
			padding: 5px 25px 5px 15px;
		}
		
		.caption .btn:after {
			border-top-width: 28px; 
			border-left-width: 28px; 
		}
		
	}

	@media (max-width: 767px) {
		
		.slider-revolution.fullwidthbanner-container { margin-bottom: 100px; }
		
		.tp-leftarrow.default,
		.tp-rightarrow.default { display: none; }
		
		.tp-bullets { bottom: 0 !important; }
		
		.caption .btn {
			padding: 3px 15px 3px 05px;
			line-height: 10px;
		}
		
		.caption .btn:after {
			border-top-width: 18px; 
			border-left-width: 18px; 
		}
		
	}
	
/* ==========================================================================
   =Social Media
   ========================================================================== */

	a.social-icon {
		display: inline-block;
		margin-right: 20px;
		margin-bottom: 1px;
		color: #858585;
		text-align: center;
	}

	a.social-icon:last-child { margin-right: 0; }

	a.social-icon i {
		font-size: 18px;
		line-height: 30px;
	}
	
	a.social-icon:hover { text-decoration: none; }
	
	a.facebook-icon:hover { color: #0e59a0 !important; }
	a.twitter-icon:hover { color: #0ea4ff !important; }
	a.dribble-icon:hover { color: #ea73a0 !important; }
	a.pinterest-icon:hover { color: #d73532 !important; }
	a.googleplus-icon:hover { color: #282927 !important; }
	a.tumblr-icon:hover { color: #586980 !important; }
	a.instagram-icon:hover { color: #82685a !important; }
	a.rss-icon:hover { color: #f79638 !important; }
	a.linkedin-icon:hover { color: #018faf !important; }
	a.skype-icon:hover { color: #00b0f6 !important; }
	a.flickr-icon:hover { color: #0061db !important; }
	a.vimeo-icon:hover { color: #63879c !important; }
	a.github-icon:hover { color: #3b3b3b !important; }
	a.youtube-icon:hover { color: #cc181e !important; }
	a.windows-icon:hover { color: #6dc2e9 !important; }
	a.dropbox-icon:hover { color: #007ee5 !important; }
	a.xing-icon:hover { color: #026566 !important; }	
	a.adn-icon:hover { color: #1ea076 !important; }
	a.android-icon:hover { color: #98cb02 !important; }
	a.apple-icon:hover { color: #000000 !important; }
	a.behance-icon:hover { color: #2d9ad2 !important; }
	a.bitbucket-icon:hover { color: #214f81 !important; }
	a.bitcoin-icon:hover { color: #f7931b !important; }
	a.codepan-icon:hover { color: #000000 !important; }
	a.css3-icon:hover { color: #3289ce !important; }
	a.delicious-icon:hover { color: #3399fe !important; }
	a.deviantart-icon:hover { color: #c8da30 !important; }
	a.digg-icon:hover { color: #0080c2 !important; }
	a.drupal-icon:hover { color: #0077b9 !important; }
	a.empire-icon:hover { color: #000000 !important; }
	a.foursquare-icon:hover { color: #daecb0 !important; }
	a.git-icon:hover { color: #f34f29 !important; }
	a.gitti-icon:hover { color: #634c3e !important; }
	a.hacker-news-icon:hover { color: #f18642 !important; }
	a.html5-icon:hover { color: #e54c1f !important; }
	a.joomla-icon:hover { color: #016fb9 !important; }
	a.jsfiddle-icon:hover { color: #4679a4 !important; }
	a.linux-icon:hover { color: #fece0e !important; }
	a.maxcdn-icon:hover { color: #f36f20 !important; }
	a.openid-icon:hover { color: #fe6101 !important; }
	a.pagelines-icon:hover { color: #3783e3 !important; }
	a.pied-piper-icon:hover { color: #0c7b48 !important; }
	a.qq-icon:hover { color: #23286c !important; }
	a.rebel-icon:hover { color: #000000 !important; }
	a.reddit-icon:hover { color: #cee3f8 !important; }
	a.renren-icon:hover { color: #0d81e4 !important; }
	a.share-icon:hover { color: #252525 !important; }
	a.slack-icon:hover { color: #453744 !important; }
	a.soundcloud-icon:hover { color: #fe4e00 !important; }
	a.spotify-icon:hover { color: #80bb41 !important; }
	a.stack-exchange-icon:hover { color: #265a93 !important; }
	a.stackoverflow-icon:hover { color: #fea501 !important; }
	a.steam-icon:hover { color: #191919 !important; }
	a.stumbleupon-icon:hover { color: #f04f23 !important; }
	a.tencent-weibo-icon:hover { color: #0063a7 !important; }
	a.trello-icon:hover { color: #226784 !important; }
	a.vine-icon:hover { color: #00b081 !important; }
	a.vk-icon:hover { color: #50769d !important; }
	a.wechat-icon:hover { color: #a4dc31 !important; }
	a.weibo-icon:hover { color: #d82828 !important; }
	a.wordpress-icon:hover { color: #454442 !important; }
	a.yahoo-icon:hover { color: #4b04a8 !important; }

/* ==========================================================================
   =Tabs
   ========================================================================== */

/* =Horizontal tabs
   ========================================================================== */
		
   /*
    *  1. Wraps around a horizontal tab group
	*/
   
	.tabs-container {} /* 1 */

	.tabs-container .tabs-menu { 
		border-bottom: 1px solid #e1e1e1;
		margin-top: 10px; 
		margin-bottom: 0;
		list-style: none; 
	}
	
	.tabs-container .tabs-menu li { display: inline; }
	
	.tabs-container .tabs-menu li a { 
		float: left; 
		display: block;
		padding: 15px 25px; 
		border: 1px solid #e1e1e1;
		border-left: none;		
		margin-bottom: -1px; 
		color: #858585;
		font-family: 'Quicksand', Arial, sans-serif;
		font-weight: 700;
		text-decoration: none;
		text-transform: uppercase;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.tabs-container .tabs-menu li a:hover { text-decoration: none; }
	
	.tabs-container .tabs-menu li:first-child a { border-left: 1px solid #e1e1e1; }
	
	.tabs-container .tabs-menu li a:hover,
	.tabs-container .tabs-menu li.active a {
		padding-top: 20px; 
		border-left: 1px solid #93c274;
		border-bottom-color: #fff; 
		margin-top: -5px;
		background-color: #93c274;
		color: #fff; 
	}
	
	.tabs-container .tabs {
		border: 1px solid #e1e1e1; 
		border-top: none;   
		margin-bottom: 30px;
	}
	
	.tabs-container .tab-content { padding: 25px 25px 5px 25px; }
	
	/*
	 * 1. Clearfix hack 
	 */
	.tabs-container .tab-content:after,
	.tabs-container .tabs-menu:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}
	
	@media (min-width: 768px) and (max-width: 991px) {
		
		.tabs-container .tabs-menu li a { padding: 7px 15px;  }
		
		.tabs-container .tabs-menu li a:hover,
		.tabs-container .tabs-menu li.active a { padding-top: 12px; }
		
	}
	
	@media (max-width: 767px) {
	
		.tabs-container .tabs-menu { border-bottom: none; }
		
		.tabs-container .tabs-menu li { display: block; }
	
		.tabs-container .tabs-menu li a { 
			float: none; 
			display: block;
			padding: 20px 25px;
			border: 1px solid #e1e1e1;
			border-top: none;
			margin: 0;
		}
		
		.tabs-container .tabs-menu li a:hover { text-decoration: none; }
		
		.tabs-container .tabs-menu li:first-child a { border-top: 1px solid #e1e1e1; }
		
		.tabs-container .tabs-menu li a:hover,
		.tabs-container .tabs-menu li.active a { 
			padding-top: 20px; 
			margin-top: 0;
		}
		
		.tabs-container .tabs-menu li.active a {  
			padding: 20px 25px;
			border-bottom-color: #e1e1e1;
			margin: 0;
			background-color: #93c274;
			color: #fff; 
		}	
		
		.tabs-container .tab-content .alignleft { float: none; }
	  
	}
	
/* ==========================================================================
   =Testimonials
   ========================================================================== */

	.testimonial { 
		margin-bottom: 30px;
		text-align: center;
	}
	
	.testimonial:before {
		display: block;
		width: 68px;
		height: 68px;
		border: 2px solid #93c274;
		border-radius: 50%;
		margin: 0 auto 40px auto;
		color: #93c274;
		font-family: "FontAwesome";
		font-size: 32px;
		line-height: 68px;
		content: "\f0e6";
	}
	
	.testimonial.alt:before { content: none; }
	
	.testimonial blockquote {
		margin-bottom: 40px;
		font-size: 18px;
		font-weight: 600;
	}
	
	.testimonial.alt blockquote {
		position: relative;
		padding-left: 50px;
		color: #3b3e43;
		font-size: 16px;
	}
	
	.testimonial.alt blockquote:before {
		position: absolute;
		top: 0;
		left: 0;
		width: auto;
		height: auto;
		border: none;
		color: #93c274;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 72px;
		content: "\201c";
	}
	
	.testimonial.alt blockquote p { font-style: normal; }
	
	.testimonial img {
		display: inline-block;
		border-radius: 50%;
		margin-bottom: 40px;
	}
	
	.testimonial h5 span {
		display: block;
		color: #75ae6a;
		text-transform: uppercase;
	}
	
	.testimonial h5 + blockquote { margin-top: 50px; }
	
	@media (max-width: 767px) {
		
		.testimonial.alt blockquote { padding-left: 25px; }
		.testimonial.alt blockquote:before { font-size: 48px; }
		
	}
	
/* ==========================================================================
   =Team Member
   ========================================================================== */

	.team-member { 
		margin-bottom: 30px;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.team-member-preview, 
	.team-member-description {
		position: relative;
		float: left;
		width: 50%;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
			    box-sizing: border-box;
	}
	
	.team-member-preview { padding: 20px 30px 20px 0; }
	
	.team-member-preview img {
		display: block;
		width: 100%;
	}
	
	.team-member-description {
		z-index: 1; 
		padding: 15px 10px 35px 0;
		-webkit-transform: translateZ(0);
			-ms-transform: translateZ(0);
				transform: translateZ(0);
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.team-member-description h3 {
		margin-bottom: 0;
		text-transform: uppercase; 
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.team-member-description h5 { 
		margin-bottom: 40px;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.team-member-description .social-media { margin-top: 40px; }
	
	.team-member .team-member-description:after {
		position: absolute;
		z-index: -1;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color: #75ae6a;
		opacity: 0;
		content: "";
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.team-member .team-member-description:before {
		position: absolute;
		top: 50%;
		left: -20px;
		width: 0; 
		height: 0; 
		border-top: 12px solid transparent; 
		border-right: 20px solid #75ae6a; 
		border-bottom: 12px solid transparent;
		content: "";
		opacity: 0;
		-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
				transform: translateY(-50%);
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.team-member:hover .team-member-description:before,
	.team-member:hover .team-member-description:after {
		margin-left: -30px;
		opacity: 1;
	}
	
	.team-member:hover .team-member-description,
	.team-member:hover .team-member-description h3,
	.team-member:hover .team-member-description h5, 
	.team-member:hover .team-member-description .social-media a.social-icon { color: #fff; }
	
	.team-member.alt { text-align: right; }
	
	.team-member.alt .team-member-preview {
		padding-left: 30px;
		padding-right: 0;
	}
	
	.team-member.alt:hover .team-member-description:before,
	.team-member.alt:hover .team-member-description:after {
		margin-left: 0;
		margin-right: -30px; 
	}
	
	.team-member.alt .team-member-description:before {
		left: auto;
		right: -20px;
		border-right: none; 
		border-left: 20px solid #75ae6a; 
	}
	
	/*
	 * 1. Clearfix hack 
	 */
	.team-member:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}	
	
	@media (min-width: 768px) and (max-width: 991px) {
		
		.team-member-preview {
			float: none;
			width: 100%;
			padding: 0;
		}
		
		.team-member-description {
			float: none;
			width: 100%;
			padding: 20px;
		}				
		
		.team-member .team-member-description:before {
			top: 0;
			left: 50%;
			border-right: 12px solid transparent; 
			border-bottom: 20px solid #75ae6a;
			border-left: 12px solid transparent;
			-webkit-transform: translateX(-50%);
				-ms-transform: translateX(-50%);
					transform: translateX(-50%);
		}
		
		.team-member .team-member-description:after { margin-top: 30px; }
		
		.team-member:hover .team-member-description:before { top: -30px; margin: 0; }	
		.team-member:hover .team-member-description:after { margin: 0; }
		
		.team-member.alt .team-member-preview { padding-left: 0; }
		
		.team-member.alt:hover .team-member-description:before,
		.team-member.alt:hover .team-member-description:after { margin-right: 0; }
		
		.team-member.alt .team-member-description:after { 
			margin-top: 0;
			margin-bottom: 30px;
		}
		
		.team-member.alt .team-member-description:before {
			top: auto;
			bottom: 10px;
			left: 50%; 
			border-top: 20px solid #75ae6a;
			border-right: 12px solid transparent;
			border-bottom: none;
			border-left: 12px solid transparent;
		}
		
		.team-member.alt:hover .team-member-description:after { margin-bottom: 0; }
		.team-member.alt:hover .team-member-description:before { bottom: -20px; }
		
	}
	
	@media (max-width: 767px) {
		
		.team-member-preview {
			float: none;
			width: 100%;
			padding: 0;
		}
		
		.team-member-description {
			float: none;
			width: 100%;
			padding: 20px;
		}				
		
		.team-member .team-member-description:before {
			top: 0;
			left: 50%;
			border-right: 12px solid transparent; 
			border-bottom: 20px solid #75ae6a;
			border-left: 12px solid transparent;
			-webkit-transform: translateX(-50%);
				-ms-transform: translateX(-50%);
					transform: translateX(-50%);
		}
		
		.team-member .team-member-description:after { margin-top: 30px; }
		
		.team-member:hover .team-member-description:before { top: -30px; margin: 0; }	
		.team-member:hover .team-member-description:after { margin: 0; }
		
		.team-member.alt .team-member-preview { padding-left: 0; }
		
		.team-member.alt:hover .team-member-description:before,
		.team-member.alt:hover .team-member-description:after { margin-right: 0; }
		
		.team-member.alt .team-member-description:after { 
			margin-top: 0;
			margin-bottom: 30px;
		}
		
		.team-member.alt .team-member-description:before {
			top: auto;
			bottom: 10px;
			left: 50%; 
			border-top: 20px solid #75ae6a;
			border-right: 12px solid transparent;
			border-bottom: none;
			border-left: 12px solid transparent;
		}
		
		.team-member.alt:hover .team-member-description:after { margin-bottom: 0; }
		.team-member.alt:hover .team-member-description:before { bottom: -20px; }
		
	}
	
/* ==========================================================================
   =Portfolio Item
   ========================================================================== */
	
	.portfolio-item { 
		position: relative;
		margin-bottom: 40px;
	}
	
	.portfolio-item-preview { 
		position: relative;
		overflow: hidden;
		margin-bottom: 30px;
	}
	
	.portfolio-item-preview > img {
		display: block;
		width: 100%;
	}
	
	.portfolio-item-overlay {
		position: absolute;
		z-index: 1;
		top: 0; 
		right: 0; 
		bottom: 0; 
		left: 0; 
		background-color: rgba(0, 0, 0, 0.7);
		opacity: 0;
		-webkit-transform: translateZ(0);
			-ms-transform: translateZ(0);
				transform: translateZ(0);
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.portfolio-item-overlay:after {
		position: absolute;
		z-index: 2;
		top: 0;
		right: 0;
		width: 100%;
		height: 100%;
		background-color: #93c274;
		opacity: 0;
		content: "";
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.portfolio-item:hover .portfolio-item-overlay { opacity: 1; }
	
	.portfolio-item:hover .portfolio-item-overlay:after { 
		opacity: 0.5;
		-webkit-transform: skew(30deg);
			-ms-transform: skew(30deg);
				transform: skew(30deg);
	}	
		
	.portfolio-item-overlay-actions {
		position: absolute;
		z-index: 3;
		top: 50%;
		left: 50%;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
				box-sizing: border-box;
		text-align: center;
		-webkit-transform: translate(-50%,-50%);
			-ms-transform: translate(-50%,-50%);
				transform: translate(-50%,-50%);
	}
	
	.portfolio-item-overlay-actions a {
		color: #fff;
		font-size: 26px;
	}
	
	.portfolio-item-overlay-actions a:hover {
		color: #93c274;
		text-decoration: none;
	}
	
	.portfolio-item-description + .portfolio-item-overlay-actions { top: 40%; }
	
	.portfolio-item-description h3 { 
		margin-bottom: 0;
		text-transform: uppercase;
	}
	
	.portfolio-item-description h3 a { color: #3b3e43; }
	
	.portfolio-item-description h3 + p {
		font-size: 12px;
		font-weight: 600;
		text-transform: uppercase;
	}
	
	.portfolio-item-overlay .portfolio-item-description {
		position: absolute;
		z-index: 3;
		top: 50%;
		left: 0;
		width: 100%;
		text-align: center;
		color: #93c274;
	}
	
	.portfolio-item-overlay .portfolio-item-description h3 a { color: #fff; }
	
	.portfolio-item-description h3 a:hover { 
		color: #93c274;
		text-decoration: none; 
	}
	
	.portfolio-item-preview + .portfolio-item-description { 
		margin: 40px 0;
		text-align: center;
	}
	
/* ==========================================================================
   =Portfolio Filter
   ========================================================================== */
	
	.portfolio-filter ul {
		margin-bottom: 100px;
		text-align: center;
		list-style: none;
	}
	
	.portfolio-filter ul li { 
		display: inline-block;
		margin-right: 20px;
	}
	
	.portfolio-filter ul li:last-child { margin-right: 0; }
	
	.portfolio-filter ul li a {
		display: block;
		padding: 12px 25px;
		border: 2px solid #e1e1e1;
		color: #3b3e43;
		font-weight: 600;
		letter-spacing: 0.5px;
		text-decoration: none;
		text-transform: uppercase;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.portfolio-filter ul li a:hover,
	.portfolio-filter ul li a.active {
		border-color: #75ae6a;
		background-color: #75ae6a; 
		color: #fff;
	}	
	
	@media (max-width: 767px) {
		
		.portfolio-filter ul li { 
			display: block;
			margin-right: 0;
			margin-bottom: 10px;
		}
		
		.portfolio-filter ul li:last-child { margin-bottom: 0; }  
		
	}

/* ==========================================================================
   =Portfolio Pagination
   ========================================================================== */
	
	.portfolio-pagination { 
		margin-bottom: 50px;
		text-align: center;
	}

	/*
	 * 1. Clearfix hack 
	 */
	.portfolio-pagination:after { /* 1 */
		visibility: hidden;
		display: table;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}	
	
	.portfolio-pagination .nav-links {}

	.portfolio-pagination .page-numbers {
		display: inline-block;
		width: 42px;
		height: 42px;
		border: 2px solid #e1e1e1;
		margin-right: 5px;
		line-height: 42px;
		font-weight: 600;
		text-align: center;
		text-decoration: none;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.portfolio-pagination .page-numbers:last-child { margin-right: 0; }

	.portfolio-pagination .page-numbers:hover,
	.portfolio-pagination .page-numbers.current {
		border-color: #93c274;
		background-color: #93c274;
		color: #fff;
	}

	.portfolio-pagination .current {}
	
	.portfolio-pagination .page-numbers.dots { border: none; }
	
	.portfolio-pagination .page-numbers.dots:hover {
		background-color: transparent;
		color: #00c5e9;
	}

	.portfolio-pagination .prev,
	.portfolio-pagination .next {}

	.portfolio-pagination .prev:before,
	.portfolio-pagination .next:before { font-family: "FontAwesome"; }

	.portfolio-pagination .prev:hover,
	.portfolio-pagination .prev:focus,
	.portfolio-pagination .next:hover,
	.portfolio-pagination .next:focus {}

	.portfolio-pagination .prev {}

	.portfolio-pagination .prev:before { content: "\f104"; }

	.portfolio-pagination .next {}

	.portfolio-pagination .next:before { content: "\f105"; }
   
/* ==========================================================================
   =Portfolio Grid
   ========================================================================== */

   .portfolio-grid {
		margin-bottom: 100px;
		list-style: none;
	}
	
	.portfolio-grid.gutter { margin: -15px -15px 100px -15px; }
	
	.portfolio-grid .item {
		float: left;
		width: 33.333333%;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
				box-sizing: border-box;
	}
	
	.portfolio-grid.gutter .item { padding: 15px; }
	
	.portfolio-grid .portfolio-item,
	.portfolio-grid .portfolio-item-preview { margin-bottom: 0; } 
	
	/*
	 * 1. Clearfix hack 
	 */
	.portfolio-grid:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}	
	
	@media (min-width: 768px) and (max-width: 991px) {
		
		.portfolio-grid .item { width: 50%;  }
		
	}
	
	@media (max-width: 767px) {
		
		.portfolio-grid .item {
			float: none;
			width: 100%; 
		}
		
	}
   
/* ==========================================================================
   =Portfolio Strip
   ========================================================================== */
   
   .portfolio-strip {
		margin-bottom: 30px;
		list-style: none;
	}
	
	.portfolio-strip .item {
		float: left;
		width: 25%;
	}
	
	.portfolio-strip .item:last-child { display: none; }
	
	.portfolio-strip .portfolio-item { margin-bottom: 0; } 
	
	/*
	 * 1. Clearfix hack 
	 */
	.portfolio-strip:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}
	
	@media (min-width: 1200px) {
		
		.portfolio-strip .item { width: 20%; }
		.portfolio-strip .item:last-child { display: block; } 
		
	}
	
	@media (min-width: 768px) and (max-width: 991px) {
		
		.portfolio-strip .item { width: 33.3333333333%; }
		.portfolio-strip .item:last-child { display: block; } 
		
	}
	
	@media (max-width: 767px) {
		
		.portfolio-strip .item {
			float: none;
			width: 100%; 
		}
		
		.portfolio-strip .item:last-child { display: block; } 
		
	}
	
	@media only screen and (min-width: 480px) and (max-width: 767px) {
		
		.portfolio-strip .item {
			float: left;
			width: 50%; 
		}
		
	}
	
/* ==========================================================================
   =Bx Slider
   ========================================================================== */
   
/* =Bx Slider reset
   ========================================================================== */
   
	.bx-wrapper { margin: 0 auto 40px; }
   
	.bx-pager,
	.bx-controls-auto,
	.bx-controls-direction  { z-index: 100; }
   
/* =Bx Slider theme
   ========================================================================== */   
   
   .bx-wrapper {		
		border: none;
		-webkit-box-shadow: none;
		   -moz-box-shadow: none;
				box-shadow: none;		
		background: none;
	}

/* =Bx Slider Pager
   ========================================================================== */
   	
	.bx-wrapper .bx-pager.bx-default-pager a {
		width: 7px;
		height: 7px;
		border: 2px solid #93c274;
		border-radius: 50%;
		background: transparent;
	}
	
	.bx-wrapper .bx-pager.bx-default-pager a:hover,
	.bx-wrapper .bx-pager.bx-default-pager a.active,
	.bx-wrapper .bx-pager.bx-default-pager a:focus {
		background: #93c274;
	} 
   
	.bx-wrapper .bx-pager,
	.bx-wrapper .bx-controls-auto { bottom: -30px; }
	
/* =Bx Slider Dir Nav
   ========================================================================== */ 
   
	.bx-wrapper .bx-prev {
		left: 0;
		background: #3b3e43 url(../images/left.png) no-repeat center center;
	}

	.bx-wrapper .bx-next {
		right: 0;
		background: #3b3e43 url(../images/right.png) no-repeat center center;
	}
	
	.bx-wrapper .bx-prev:hover, 
	.bx-wrapper .bx-next:hover { background-position: center center; }
	
	/*
	 * 1. We are changing the original z-index from 9999 to 1000 so that it doesn't overlap other elements that need to be above this one
	 */
	.bx-wrapper .bx-controls-direction a {
		width: 48px;
		height: 48px;
		z-index: 1000; /* 1 */	
	}	
	
	.images-slider-vertical .bx-wrapper img { margin: 0 auto; }
	
	.images-slider-vertical .bx-wrapper .bx-pager, 
	.images-slider-vertical .bx-wrapper .bx-controls-auto { 
		top: 50%;
		-webkit-transform: translateY(-25%);
			-ms-transform: translateY(-25%);
				transform: translateY(-25%);
	}
	
	.images-slider-vertical .bx-wrapper .bx-pager-item, 
	.images-slider-vertical .bx-wrapper .bx-controls-auto .bx-controls-auto-item {
		display: block;
		margin: 5px 0;
	}
	
	.images-slider { margin-bottom: 100px; }
	
/* ==========================================================================
   =Fullwidth Section
   ========================================================================== */
   	
	.fullwidth-section.custom-color-selected {
		background-color: #3b3e43;
		color: #fff;
	}
	
	.fullwidth-section.custom-color-selected a,
	.fullwidth-section.custom-color-selected h1,
	.fullwidth-section.custom-color-selected h2,
	.fullwidth-section.custom-color-selected h3,
	.fullwidth-section.custom-color-selected h4,
	.fullwidth-section.custom-color-selected h5,
	.fullwidth-section.custom-color-selected h6, 
	.fullwidth-section.custom-color-selected .milestone .milestone-content, 
	.fullwidth-section.custom-color-selected .pie-chart .pie-chart-custom-text, 
	.fullwidth-section.custom-color-selected .pie-chart .pie-chart-percent,
	.fullwidth-section.custom-color-selected .pie-chart i,
	.fullwidth-section.custom-color-selected .pie-chart-title, 
	.fullwidth-section.custom-color-selected .progress-percentage,
	.fullwidth-section.custom-color-selected .progress-bar-description, 
	.fullwidth-section.custom-color-selected .tabs-container .tabs-menu li a, 
	.fullwidth-section.custom-color-selected .ewf_widget_latest_posts ul li .title, 
	.fullwidth-section.custom-color-selected .testimonial.alt blockquote { color: inherit; }
	
	.fullwidth-section.custom-color-selected .btn-white { border-color: inherit; }
	
	.fullwidth-section.custom-color-selected .pie-chart-description:before { border-bottom: none; }
	
	.fullwidth-section .horizontal-process-builder li i,
	.fullwidth-section .horizontal-process-builder li h1 {
		color: #3b3e43;
		outline: none;
	}
	
	.fullwidth-section .horizontal-process-builder li:hover i,
	.fullwidth-section .horizontal-process-builder li:hover h1 { color: #fff; }
	
	.fullwidth-section.custom-color-selected .pricing-table { background-color: transparent; }
	.fullwidth-section.custom-color-selected .pricing-table:hover { background-color: #93c274; }
	
	
	#bg-1 {
		padding: 150px 0 130px 0;		
		margin-top: 50px;
		margin-bottom: 0;
		background-image: url(../../content/backgrounds/1920x1080-1.jpg);
	}
	
	#bg-2 {
		border-top: 10px solid #93c274;
		background-image: url(../../content/backgrounds/1920x800-1.jpg); 
	}
	
	#bg-3 {
		padding: 200px 0 150px 0;
		margin-top: 50px;
		background-image: url(../../content/backgrounds/1920x1080-2.jpg);
	}
	
	#bg-4 {
		padding: 10px 0;
	}
	
	#bg-5 {
		margin-top: 100px;
		margin-bottom: 0;
		background-image: url(../../content/backgrounds/1920x800-2.jpg);
	}
	
	#bg-6 {
		padding: 200px 0 180px 0;
		background-image: url(../../content/backgrounds/2500x700.jpg);
		background-repeat: no-repeat;
	}
	
	#bg-7 {
		padding-bottom: 0;
		margin-top: 50px;
		margin-bottom: 0;
		background-color: #93c274;
	}
	
	#bg-8 {
		padding: 10px 0;
		margin-top: 50px;
		margin-bottom: 0;
	}
	
	#bg-9 {
		padding-top: 250px;
		margin-bottom: 20px;
		background-color: #fff;
	}
	
	#bg-9:before {
		position: absolute;
		top: 0;
		left: 0;
		width: 0; 
		height: 0; 
		border-top: 600px solid #93c274; 
		border-left: 1920px solid transparent; 
		content: "";
	}
	
	#bg-10 {
		padding: 40px 0 20px 0;
		margin-top: 100px;
		background-image: url(../../content/backgrounds/1920x800-3.jpg);
	}
	
	#bg-11 {
		overflow: visible;
		padding: 0;
		margin-top: 120px;
		margin-bottom: -50px;
		background-image: url(../../content/backgrounds/1920x1080-3.jpg);
	}
	
	#bg-11 img { margin-top: -60px; }
	
	#bg-12 {
		padding: 40px 0 20px 0;
		margin-top: -100px;
		background-image: url(../../content/backgrounds/1920x800-4.jpg);
	}
	
	#bg-13 {
		padding: 300px 0 200px;
		margin-top: 80px;
	}
	
	#bg-14 {
		padding: 100px 0 70px 0;
		margin-top: 80px;
		background-image: url(../../content/backgrounds/1920x1080-4.jpg);
	}
	
	#bg-15 {
		padding: 100px 0;
		margin-top: 50px;
		margin-bottom: -70px;
		background: url(../../content/backgrounds/1920x800.png) no-repeat center bottom;
	}
	
	#bg-16 {
		padding: 100px 0;
		margin-bottom: 0;
		background: #fff url(../../content/backgrounds/1920x1700.jpg) no-repeat center top;
	}
	
	#bg-17 {
		padding: 60px 0;
		margin-bottom: -50px;
		background-color: #2b2b2b;
	}
	
	#bg-18 {
		padding: 120px 0 100px 0;
		margin-bottom: 0;
		background-image: url(../../content/portfolio/1920x1080-1.jpg);
	}
	
	#bg-19 {
		padding: 150px 0;
		margin-bottom: 0;
		background-image: url(../../content/portfolio/1920x1080-2.jpg);
	}
	
	#bg-20 {
		padding: 150px 0;
		margin-bottom: 0;
		background-image: url(../../content/portfolio/1920x1080-3.jpg);
	}
	
	#bg-21 {
		padding: 150px 0;
		margin-bottom: -50px;
		background-image: url(../../content/portfolio/1920x1080-4.jpg);
	}
	
	#bg-22 {
		padding-top: 20px;
		background-color: #fff;
		box-shadow: inset 0px -40px 40px 0px rgba(0, 0, 0, 0.05);
	}
	
	#bg-23 {
		padding: 10px 0;
		margin: 100px 0 -50px 0;
	}

 
/* ==========================================================================
   =WordPress Default Classes
   ========================================================================== */
   
    .ewf-inline-style { display: none; }
	
	/* Align */

	.alignleft {
		float: left;
		display: inline;
	}

	.alignright {
		float: right;
		display: inline;
	}

	.aligncenter {
		display: block;
		margin-right: auto;
		margin-left: auto;
	}

	blockquote.alignleft,
	.wp-caption.alignleft,
	.caption.alignleft,
	img.alignleft {
		margin: 5px 20px 20px 0;
	}

	blockquote.alignright,
	.wp-caption.alignright,
	.caption.alignright,
	img.alignright {
		margin: 5px 0 20px 20px;
	}

	blockquote.aligncenter,
	.wp-caption.aligncenter,
	.caption.aligncenter,
	img.aligncenter {
		margin-top: 5px;
		margin-bottom: 20px;
		clear: both;
	}

	.wp-caption.alignleft,
	.wp-caption.alignright,
	.wp-caption.aligncenter,
	.caption.alignleft,
	.caption.alignright,
	.caption.aligncenter	{
		margin-bottom: 20px;
	}

	/* Caption */

	.caption,	
	.wp-caption {
		max-width: 100%;
		margin-bottom: 20px;
	}

	.wp-caption img[class*="wp-image-"] { margin: 0; }

	.caption-text,
	.wp-caption-text {
		padding: 10px 0;
		color: #bbbbbb;
	}

	/* Gallery */

	.gallery { margin-bottom: 20px; }

	.gallery-item {
		float: left;
		display: block;
		width: 100%;
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
				box-sizing: border-box;
		padding: 1.79104477%;
		text-align: center;
		vertical-align: top;
	}

	.gallery-columns-2 .gallery-item { max-width: 50%; }
	.gallery-columns-3 .gallery-item { max-width: 33.33%; }
	.gallery-columns-4 .gallery-item { max-width: 25%; }
	.gallery-columns-5 .gallery-item { max-width: 20%; }
	.gallery-columns-6 .gallery-item { max-width: 16.66%; }
	.gallery-columns-7 .gallery-item { max-width: 14.28%; }
	.gallery-columns-8 .gallery-item { max-width: 12.5%; }
	.gallery-columns-9 .gallery-item { max-width: 11.11%; }

	.gallery-icon img { margin: 0 auto; }

	.gallery-caption {
		display: block;
		padding: 10px 0;
		color: #bbbbbb;
	}

	.gallery-columns-6 .gallery-caption,
	.gallery-columns-7 .gallery-caption,
	.gallery-columns-8 .gallery-caption,
	.gallery-columns-9 .gallery-caption {
		display: none;
	}
	
	/* Text meant only for screen readers */
	
	.says,
	.screen-reader-text { 
		position: absolute !important;
		overflow: hidden;
		width: 1px;
		height: 1px;
		clip: rect(1px, 1px, 1px, 1px);		
	}

/* ==========================================================================
   =WordPress Post(s) 
   ========================================================================== */

	.post { 
   		position: relative;
		margin-bottom: 50px;
	}
   
   .post-thumbnail {
		display: block;
		margin-bottom: 25px;
	}
	
	.post-thumbnail img { display: block; }

	a.post-thumbnail {}
   
	.sticky {
	    padding: 40px 40px 10px;
		border: 1px solid #e1e1e1; 
	}
	
	.sticky.has-post-thumbnail { padding-top: 0; }
	
	.sticky.has-post-thumbnail .post-thumbnail {
		margin-right: -40px;
		margin-left: -40px;
	}
	
	.sticky-post {
		position: absolute;
		top: 0;
		right: 0;
		padding: 3px 6px;
		background-color: #75ae6a;
		color: #fff;
		font-weight: 700;		
		text-transform: uppercase;
	}
	
	.post-header {
		position: relative;
		padding: 0; 
	}

	.post-title {
		margin-bottom: 0;
		font-size: 18px; 
		line-height: 34px;
		text-transform: uppercase;
	}
	
	.post-content,
	.post-summary { padding: 30px 0; }
	
	/*
	 * 1. Clearfix hack 
	 */
	.post-content:after,
	.post-summary:after {	/* 1 */
		visibility: hidden;
		display: block;
		font-size: 0;
		content: " ";
		clear: both;
		height: 0;
	}
	
	.post-content > :last-child,
	.post-summary > :last-child { margin-bottom: 0; }
	
	.post-content iframe { max-width: 100%; }
	
	.post-content .more-link { 
		margin-top: 20px;
		margin-bottom: 0;
	}
	
	.post-content .more-link,
	.post-summary .more-link:after { white-space: nowrap; }
	
   .post-footer { padding: 0; }
	
	/*
	 * 1. Clearfix hack 
	 */
	.post-header:after, 
	.post-content:after, 
	.post-summary:after, 
	.post-footer:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;
	}
	
	.sticky .posted-on { display: none; }
	
	.posted-on:before,
	.byline:before,
	.cat-links:before,
	.tags-links:before,
	.comments-link:before,
	.post-format:before,
	.edit-link:before,
	.full-size-link:before {
		position: relative;
		margin-right: 5px;
		font-weight: 400;
	}

	.posted-on,
	.byline,
	.cat-links,
	.tags-links,
	.comments-link,
	.post-format,
	.full-size-link { 
		margin-right: 10px;
		color: #75ae6a;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 12px;
		font-weight: 700;
		text-transform: uppercase;
	}
	
	.has-post-thumbnail .comments-link {
		position: absolute;
		top: -60px;
		left: 0;
		padding-left: 10px;
		color: #fff;
		font-size: 18px;
		-webkit-transform: translateZ(0);
			-ms-transform: translateZ(0);
				transform: translateZ(0);
	}
	
	.has-post-thumbnail .comments-link:before {
		position: absolute;
		z-index: -1;
		top: -50px;
		left: 0;
		width: 0; 
		height: 0; 
		border-right: 100px solid transparent;
		border-bottom: 85px solid #93c274; 
		content: "";
	}
	
	.has-post-thumbnail .comments-link:after {
		position: absolute;
		z-index: -1;
		top: -40px;
		left: 0;
		width: 0; 
		height: 0; 
		border-right: 90px solid transparent;
		border-bottom: 75px solid #75ae6a; 
		content: "";
	}
	
	.has-post-thumbnail.sticky .comments-link { left: -40px; }
	
	.has-post-thumbnail .comments-link a { 
		color: #fff;
		text-decoration: none;
	}

	.posted-on:before {
		font-family: 'FontAwesome';
		content: "\f017";
	}

	.byline:before {
		font-family: 'FontAwesome';
		content: "\f007";
	}

	.cat-links:before {
		font-family: 'FontAwesome';
		content: "\f02b";
	}

	.tags-links:before {
		font-family: 'FontAwesome';
		content: "\f02c";
	}

	.comments-link a:before {
		margin-right: 5px;
		font-family: 'FontAwesome';
		font-size: 14px;
		content: "\f075";
	}

	.full-size-link:before {
		font-family: 'FontAwesome';
		content: "\f402";
	}

	.edit-link:before {
		font-family: 'FontAwesome';
		content: "\f040";
	}
	
	.comments-link,
	.edit-link { white-space: nowrap; }

   .format-standard .post-format:before {
		font-family: 'FontAwesome';
		content: "\f0f6";
	}
	
	.format-aside .post-format:before {
		font-family: 'FontAwesome';
		content: "\f10c";
	}

	.format-image .post-format:before {
		font-family: 'FontAwesome';
		content: "\f03e";
	}

	.format-gallery .post-format:before {
		font-family: 'FontAwesome';
		content: "\f00a";
	}

	.format-video .post-format:before {
		font-family: 'FontAwesome';
		content: "\f1c8";
	}

	.format-status .post-format:before {
		font-family: 'FontAwesome';
		content: "\f044";
	}

	.format-quote .post-format:before {
		font-family: 'FontAwesome';
		content: "\f10e";
	}

	.format-link .post-format:before {
		font-family: 'FontAwesome';
		content: "\f0c1";
	}

	.format-chat .post-format:before {
		font-family: 'FontAwesome';
		content: "\f18d";
	}

	.format-audio .post-format:before {
		font-family: 'FontAwesome';
		content: "\f027";
	}
	
	.format-aside {}
	
	.format-image {}
	
	.format-video {}
	
	.format-quote {}
	
	.format-gallery {}
	
	.format-status {}
	
	.format-link {}
	
	.format-audio {}
	
	.format-chat {}
	
/* ==========================================================================
   =WordPress pagination and navigation
   ========================================================================== */
   
   .pagination { margin: 20px 0 70px 0; }

	/*
	 * 1. Clearfix hack 
	 */
	.pagination:after { /* 1 */
		visibility: hidden;
		display: table;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;		
	}	
	
	.pagination .nav-links {}

	.pagination .page-numbers {
		display: inline-block;
		width: 42px;
		height: 42px;
		border: 2px solid #e1e1e1;
		margin-right: 5px;
		line-height: 42px;
		font-weight: 600;
		text-align: center;
		text-decoration: none;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.pagination .page-numbers:last-child { margin-right: 0; }

	.pagination .page-numbers:hover,
	.pagination .page-numbers.current {
		border-color: #93c274;
		background-color: #93c274;
		color: #fff;
	}

	.pagination .current {}
	
	.pagination .page-numbers.dots { border: none; }
	
	.pagination .page-numbers.dots:hover {
		background-color: transparent;
		color: #00c5e9;
	}

	.pagination .prev,
	.pagination .next {}

	.pagination .prev:before,
	.pagination .next:before { font-family: "FontAwesome"; }

	.pagination .prev:hover,
	.pagination .prev:focus,
	.pagination .next:hover,
	.pagination .next:focus {}

	.pagination .prev {}

	.pagination .prev:before { content: "\f104"; }

	.pagination .next {}

	.pagination .next:before { content: "\f105"; }

/* ==========================================================================
   =WordPress Comments
   ========================================================================== */
   
	.comments-area {
		margin-top: 60px;
	}

	.comments-area > :last-child { margin-bottom: 0; }

	.comment-list + .comment-respond,
	.comment-navigation + .comment-respond { padding-top: 20px; }

	.comments-title,
	.comment-reply-title { text-transform: uppercase; }

	.comments-title { margin: 20px 0; }

	.comment-list {
		margin: 40px 0 80px 0;
		list-style: none;
	}

	.comment-list .pingback,
	.comment-list .trackback {
		padding-bottom: 20px;
		border-bottom: 1px solid #e1e1e1;
		margin-bottom: 20px;
	}

	.comment-list .children {
		margin: 0;
		list-style: none;
	}
	
	.comment-body {
		position: relative;
		padding-left: 135px;
		margin-bottom: 50px;
	}

	.comment-list .children > li { padding-left: 60px; }

	.comment-author {
		display: inline-block;
		margin-bottom: 5px; 
	}
	
	.comment-author:after {
		content: "|";
	}
	
	.comment-author a {
		color: #3b3e43;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 16px;
		font-weight: 700;
	}

	.comment-author a:hover {}

	.comment-author .avatar {
		position: absolute;
		top: 5px;
		left: 0;
		width: 100px;
		height: 100px;
		margin-right: 10px; 
	}

	.comment-meta {
		display: inline-block;
		margin-bottom: 5px; 
	}
	
	.comment-meta a {
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 16px;
		font-weight: 700;
	}
	
	.comment-metadata,
	.pingback .edit-link {}

	.comment-metadata a,
	.pingback .edit-link a {}

	.comment-metadata a:hover,
	.pingback .edit-link a:hover {}

	.comment-metadata a:hover,
	.comment-metadata a:focus,
	.pingback .edit-link a:hover,
	.pingback .edit-link a:focus {}

	.comment-metadata { margin-bottom: 20px; }

	.comment-metadata .edit-link { margin-left: 15px; }

	.pingback .edit-link { margin-left: 15px; }

	.pingback .edit-link:before { top: 0; }

	.comment-content ul,
	.comment-content ol { margin: 0 0 20px 20px; }

	.comment-content li > ul,
	.comment-content li > ol { margin-bottom: 0; }

	.comment-content > :last-child { margin-bottom: 0; }

	.comment-list .reply { margin-top: -20px; }

	.comment-list .reply a { 
		display: inline-block;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 16px;
		font-weight: 700;
	}

	.comment-list .reply a:hover,
	.comment-list .reply a:focus {}
	
	@media (max-width: 767px) {
	
		.comment-list .children > li { padding-left: 0; }
		
		.comment-body { padding-left: 0; }
		
		.comment-author .avatar { 
			position: relative;
			display: block;
			margin-bottom: 20px;
		}
		
		.comment-author,
		.comment-meta { display: block; }
		
		.comment-author:after { content: none; }
		
		.comment-meta { margin-bottom: 20px; }
		
		.comment-list .reply { margin-top: 0; }
	
	}

/* ==========================================================================
   =WordPress Comments Navigation
   ========================================================================== */
  
	.comment-navigation { text-transform: uppercase; }

	.comment-navigation a {}

	.comment-navigation a:hover,
	.comment-navigation a:focus {}

	.comment-navigation .nav-previous:not(:empty),
	.comment-navigation .nav-next:not(:empty) { display: inline-block; }

	.comment-navigation .nav-previous:not(:empty) + .nav-next:not(:empty):before {
		margin: 0 10px;
		font-weight: 400;
		content: "\2215";
	}

	.comment-navigation .nav-previous a:before {
		position: relative;
		margin-right: 3px;
		font-family: "FontAwesome";
		content: "\f104";
	}

	.comment-navigation .nav-next a:after {
		position: relative;
		margin-left: 3px;
		font-family: "FontAwesome";
		content: "\f105";
	}

	.comment-navigation {
		padding: 20px 0;
		border-top: 1px solid #e1e1e1;
		border-bottom: 1px solid #e1e1e1;
	}

	.comments-title + .comment-navigation { border-bottom: 0; }
	
/* ==========================================================================
   =WordPress Comment Form
   ========================================================================== */	
	
	.comment-form { margin: 40px 0; }

	.comment-form label {}

	.comment-form input[type="text"],
	.comment-form input[type="email"],
	.comment-form input[type="url"],
	.comment-form textarea {
		width: 100%;
	}

	.comment-notes,
	.comment-awaiting-moderation,
	.logged-in-as,
	.form-allowed-tags {}

	.logged-in-as a:hover {}

	.no-comments {
		border-top: 1px solid #e1e1e1;
		padding-top: 20px;
	}

	.comment-navigation + .no-comments { border-top: 0; }

	.form-allowed-tags code {}

	.form-submit { margin-bottom: 0; }

	.required { color: #ff0030; }

	.comment-reply-title small {}

	.comment-reply-title small a {}

/* ==========================================================================
   =WordPress Widgets
   ========================================================================== */
	
/* =Widgets default
   ========================================================================== */
	
	.widget { margin-bottom: 60px; }
	
	#header-top .widget:first-child { padding-top: 20px; }
	
	#header-top .widget:last-child {
		padding-bottom: 20px;
		margin-bottom: 0;
	}
	
	#footer-top .widget:first-child { padding-top: 60px; }
	
	#footer-top .widget:last-child {
		padding-bottom: 60px;
		margin-bottom: 0;
	}
	
	#footer .widget:last-child,
	#footer-bottom .widget:last-child { margin-bottom: 0; }
	
	/**
	 * 1. The last element of every widget shouldn't have a margin bottom. used for spacing purposes
	 */
	
	.widget > :last-child { 
		margin-bottom: 0; /* 1 */
	}
	
	.widget-title { 
		margin-bottom: 40px;
		line-height: 18px;
		letter-spacing: 0.5px;
		text-transform: uppercase;
	}
	
	#footer .widget-title {
		margin-bottom: 60px;
		color: #93c274;
		font-size: 18px;
	}
	
/* =Text Widget
   ========================================================================== */
	
	.widget_text {}
	
	.textwidget {}
	
	/**
	 * 1. The last element inside text widget shouldn't have margin bottom
	 */
	
	.textwidget > :last-child {
		margin-bottom: 0; /* 1 */
	}
	
/* =Search Widget
   ========================================================================== */
	
	.widget_search {}
	
	#searchform { position: relative; }

	#s { 
		display: inline-block; 
		width: 100%;
		height: 45px;
		padding-right: 85px;
		-webkit-box-sizing: border-box; 
		   -moz-box-sizing: border-box; 
		   		box-sizing: border-box; 
	}
	
	#searchsubmit {
		position: absolute;
		top: 0;
		right: 0;
		height: 47px;
		background: #75ae6a url(../images/bg-search-2.png) no-repeat center center;
		-webkit-transition: background-color 0.3s;
				transition: background-color 0.3s;
	}
	
	#searchsubmit:hover { background-color: #93c274; }

/* =Recent Entries Widget
   ========================================================================== */
	
	.widget_recent_entries {}
	
	.widget_recent_entries ul { list-style: none; }
	
	.widget_recent_entries ul li { padding-bottom: 20px; }
	
	.widget_recent_entries ul li:last-child { padding-bottom: 0; }
	
	.widget_recent_entries ul li a {}
	
	.widget_recent_entries ul li .post-date { display: block; }
	
/* =Pages Widget
   ========================================================================== */
	
	.widget_pages {}
	
	.widget_pages ul {
		margin-left: 15px;
		list-style: none;
	}	
	
	.widget_pages ul li { margin-bottom: 7px; }
	.widget_pages ul li:last-child { margin-bottom: 0; } 
	
	.widget_pages a { color: #3b3e43; }
	
	.widget_pages a:before {
		position: relative;
		top: -2px;
		margin-right: 15px;
		font-family: "FontAwesome";
		font-size: 8px;
		content: "\f111";
	}
	
	.widget_pages a:hover, 
	.widget_pages li.current_page_item a { 
		color: #75ae6a;
		text-decoration: none;
	}
	
	
	#footer-bottom .widget_pages ul { 
		text-align: right;
		margin-left: 0;
	}
	
	#footer-bottom .widget_pages ul li {
		display: inline-block;
		margin-bottom: 0;
	}
	
	#footer-bottom .widget_pages ul li:after {
		margin: 0 15px;
		content: "|";
	}
	
	#footer-bottom .widget_pages ul li:last-child:after { content: none; }
	
	#footer-bottom .widget_pages a:hover, 
	#footer-bottom .widget_pages li.current_page_item a { color: #93c274; }
	
	#footer-bottom .widget_pages a:before { content: none; }
	
	@media (min-width: 768px) and (max-width: 991px) {
	
		#footer-bottom .widget_pages ul li:after { margin: 0 6px; }
		
	}
	
	@media (max-width: 767px) {
		
		#footer-bottom .widget_pages ul { text-align: left; }
		
	}
	
/* =Archive Widget
   ========================================================================== */
	
	.widget_archive {}
	
	.widget_archive ul {
		margin-left: 15px;
		list-style: none;
	}	
	
	.widget_archive ul li { margin-bottom: 7px; }
	.widget_archive ul li:last-child { margin-bottom: 0; } 
	
	.widget_archive a { color: #3b3e43; }
	
	.widget_archive a:before {
		position: relative;
		top: -2px;
		margin-right: 15px;
		font-family: "FontAwesome";
		font-size: 8px;
		content: "\f111";
	}
	
	.widget_archive a:hover { 
		color: #75ae6a;
		text-decoration: none;
	}
	
/* =Categories Widget
   ========================================================================== */
	
	.widget_categories {}
	
	.widget_categories ul {
		margin-left: 15px;
		list-style: none;
	}	
	
	.widget_categories ul li { margin-bottom: 7px; }
	.widget_categories ul li:last-child { margin-bottom: 0; } 
	
	.widget_categories a { color: #3b3e43; }
	
	.widget_categories a:before {
		position: relative;
		top: -2px;
		margin-right: 15px;
		font-family: "FontAwesome";
		font-size: 8px;
		content: "\f111";
	}
	
	.widget_categories a:hover { 
		color: #75ae6a;
		text-decoration: none;
	}
	
	.widget_categories ul ul.children {}
	
	.widget_categories select{}
	
	.widget_categories select#cat {}
	
	.widget_categories select.postform {}
	
	.widget_categories option {}
	
	.widget_categories .level-0 {}
	
	.widget_categories .level-1 {}
	
	.widget_categories .level-2 {}
	
	.widget_categories .level-3 {}
	
/* =Meta Widget
   ========================================================================== */
	
	.widget_meta {}
	
	.widget_meta ul {
		margin-left: 15px;
		list-style: none;
	}	
	
	.widget_meta ul li { margin-bottom: 7px; }
	.widget_meta ul li:last-child { margin-bottom: 0; } 
	
	.widget_meta a { color: #3b3e43; }
	
	.widget_meta a:before {
		position: relative;
		top: -2px;
		margin-right: 15px;
		font-family: "FontAwesome";
		font-size: 8px;
		content: "\f111";
	}
	
	.widget_meta a:hover { 
		color: #75ae6a;
		text-decoration: none;
	}
	
/* =Recent Comments Widget
   ========================================================================== */
	
	.widget_recent_comments {}
	
	#recentcomments { list-style: none; }
	
	#recentcomments li {}
	
	#recentcomments li a {}
	
	.recentcomments {}
	
/* =Tag Cloud Widget
   ========================================================================== */
	
	.widget_tag_cloud {}
	
	.widget_tag_cloud a {
		float: left;
		display: block;
		padding: 8px 15px;
		margin: 0 3px 3px 0;
		background-color: #2a2a2a;
		color: #fff;
		text-decoration: none;
		-webkit-transition: all 0.3s;
				transition: all 0.3s;
	}
	
	.widget_tag_cloud a:hover { 
		background-color: #93c274;
		color: #fff;
	}
	
	.widget_tag_cloud a:after {}
	
	.widget_tag_cloud a:before {}
	
	#header-top .widget_tag_cloud a { 
		background-color: #75ae6a;
		color: #fff;
	}
	
	#header-top .widget_tag_cloud a:hover { background-color: #93c274; }
	
	#footer .widget_tag_cloud a:hover, 
	#footer-bottom .widget_tag_cloud a:hover { color: #161616; }
	
	/*
	 * 1. Clearfix hack 
	 */
	 
	.widget_tag_cloud:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;
	}
	
/* =Calendar Widget
   ========================================================================== */
	
	.widget_calendar {}
	
	#calendar_wrap {}
	
	#calendar_wrap th,
	#calendar_wrap td {
		padding: 0;
		line-height: 2.5;
		text-align: center;
	}
	
	#wp-calendar tr td {}
	
	#wp-calendar caption {
		font-weight: 700;
		text-transform: uppercase;
	}
	
	#wp-calendar tbody a {
		display: block;
		background-color: #75ae6a;
		color: #fff;
		font-weight: 700;
	}
	
	#wp-calendar #today {}
	
	#wp-calendar #prev {}
	
	#wp-calendar #next {}
	
	#wp-calendar #next a {}
	
	#wp-calendar #prev a {}
	
/* =Nav Menu Widget
   ========================================================================== */
	
	.widget_nav_menu {}	
	
	.widget_nav_menu ul {
		margin-left: 15px;
		list-style: none;
	}	
	
	.widget_nav_menu ul li { margin-bottom: 7px; }
	.widget_nav_menu ul li:last-child { margin-bottom: 0; } 
	
	.widget_nav_menu a { color: #3b3e43; }
	
	.widget_nav_menu a:before {
		position: relative;
		top: -2px;
		margin-right: 15px;
		font-family: "FontAwesome";
		font-size: 8px;
		content: "\f111";
	}
	
	.widget_nav_menu a:hover { 
		color: #75ae6a;
		text-decoration: none;
	}
	
/* =RSS Widget
   ========================================================================== */
	
	.widget_rss {}

	.widget_rss ul {
		margin: 0;
		list-style: none;
	}

	.widget_rss li { margin-bottom: 20px; }

	.widget_rss ul:last-child,
	.widget_rss li:last-child { margin-bottom: 0; }

	.widget_rss .rsswidget {}

	.widget_rss .rsswidget img { margin-top: -4px; }

	.widget_rss .rss-date,
	.widget_rss cite {
		display: block;
		line-height: 3;
		font-weight: 700;
	}
	
/* ==========================================================================
   =WordPress Custom Widgets
   ========================================================================== */
   
/* =EWF Twitter widget
   ========================================================================== */
	
	.ewf_widget_latest_tweets{}
	
	.ewf-tweet-list .tweet { word-wrap: break-word; }
	
	.ewf-tweet-list ul { list-style: none; }
	
	.ewf-tweet-list .interact { text-align: center; }
	
	.ewf-tweet-list .interact a { margin-right: 10px; }
	
	.ewf-tweet-list .interact a:last-child { margin-right: 0; }
	
/* =EWF Flickr widget
   ========================================================================== */
	
	.ewf_widget_flickr {}
	
	.flickr-feed {}
	
	.flickr-feed .flickr_badge_image { display: inline; }
	
	.flickr-feed img { 
		width: 75px; 
		height: auto;
		padding: 0 5px 5px 0; 
		border: none;
	}
	
/* =EWF Contact Info widget
   ========================================================================== */	
	
	.ewf_widget_contact_info {}
	
	.ewf_widget_contact_info ul {
		margin-bottom: 0;
		list-style: none;
	}
	
	.ewf_widget_contact_info ul li {
		position: relative;
		margin-bottom: 20px; 
	}
	
	.ewf_widget_contact_info ul li:last-child { margin-bottom: 0; }
	
	.ewf_widget_contact_info ul li i {
		margin-right: 5px; 
		color: #93c274;
		font-size: 14px;
	}	
	
	.ewf_widget_contact_info ul li a { color: #858585; }
	
	#header-top .ewf_widget_contact_info ul li {
		margin-top: 3px;
		font-size: 12px; 
	}
	
/* =EWF Newsletter subscribe widget
   ========================================================================== */

	.ewf_widget_newsletter {}
	
	#newsletter-subscribe-form { position: relative; }
	
	#newsletter-subscribe-form input[type="text"] { 
		width: 100%;
		height: 45px;
		margin-bottom: 0;
	}
	
	#newsletter-subscribe-form input[type="submit"] {
		position: absolute;
		top: 0;
		right: -1px;
		height: 45px;
		padding: 11px 25px;
		margin: 0;
	}

/* =EWF Latest posts widget
   ========================================================================== */

	.ewf_widget_latest_posts {}
	
	.ewf_widget_latest_posts ul { list-style: none; }
	
	.ewf_widget_latest_posts ul li { margin-bottom: 30px; }
	.ewf_widget_latest_posts ul li:last-child { margin-bottom: 0; }
	
	.ewf_widget_latest_posts ul li img { 
		float: left;
		margin: 5px 15px 0 0;
	}
	
	.ewf_widget_latest_posts ul li .title {
		color: #3b3e43;
		font-weight: 700;
	}	
	
	.ewf_widget_latest_posts ul li .title:hover {
		color: #75ae6a;
		text-decoration: none;
	}
	
	.ewf_widget_latest_posts ul li .post-date {
		margin-bottom: 0;
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 12px;
		font-weight: 700;
		text-transform: uppercase;
	}
	
	#footer .ewf_widget_latest_posts ul li { 
		font-family: 'Quicksand', Arial, sans-serif;
		font-size: 12px;
	}
	
	#footer .ewf_widget_latest_posts ul li .title { 
		color: #93c274;
		font-size: 14px;
		text-transform: uppercase; 
	}
	
	#footer .ewf_widget_latest_posts ul li .title:hover { color: #a9a9a9; }

	#footer .ewf_widget_latest_posts ul li .post-date { text-transform: none; }

	/*
	 * 1. Clearfix hack 
	 */
	 
	.ewf_widget_latest_posts ul li:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;
	}
	
	@media (min-width: 768px) and (max-width: 991px) {
		
		.ewf_widget_latest_posts ul li img { display: none; }
		
	}
	
/* =EWF Navigation widget
   ========================================================================== */
	
	.ewf_widget_navigation {}
	
	.ewf_widget_navigation ul {  
		list-style-type: none; 
		list-style-position: outside; 
	}
	
	.ewf_widget_navigation li { border-bottom: 1px solid #e1e1e1; }
	
	.ewf_widget_navigation li:last-child { border-bottom: none; }
	
	.ewf_widget_navigation li a { 
		display: block; 
		padding: 10px 0; 
	}
	
	.ewf_widget_navigation li a:hover { text-decoration: none; }

/* =EWF Social media widget
   ========================================================================== */
	
	.ewf_widget_social_media {}
	
	#header-top .ewf_widget_social_media { text-align: right; }
	
	#header-top .ewf_widget_social_media a.social-icon i { font-size: 16px; }
	
	/*
	 * 1. Clearfix hack 
	 */
	 
	.ewf_widget_social_media:after { /* 1 */
		visibility: hidden;
		display: block;
		height: 0;
		font-size: 0;
		content: " ";
		clear: both;
	}		
</style>
