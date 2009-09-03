<?php
/*
Template Name: Modalbox
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<title>ModalBox &mdash; An easy way to create popups and wizards</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="ModalBox is a JavaScript technique for creating modern (Web 2.0-style) modal dialogs or even wizards (sequences of dialogs) without using conventional popups and page reloads." /> 
<meta name="Keywords" content="modal box popup technique window standard javascript web2.0 development web site modalbox dialogue wizard AJAX JS" />
<meta name="robots" content="follow" /> 
<meta name="copyright" content="okonet.ru" /> 
<meta name="language" content="en" />


<link rel="stylesheet" href="<?php bloginfo('url'); ?>/projects/modalbox/css/global.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/projects/modalbox/css/frame.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/projects/modalbox/includes/modalbox.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/projects/modalbox/favicon.ico" type="image/x-icon" />

<script type="text/javascript" src="<?php bloginfo('url'); ?>/projects/modalbox/includes/prototype.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/projects/modalbox/includes/scriptaculous.js?load=builder,effects"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/projects/modalbox/includes/modalbox.js"></script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>

</head>
<body>
<div id="badge">
	<h2>New version!</h2>
</div>
<div id="page">
	<div id="header">
		<p id="wildbit"><a href="<?php bloginfo('url'); ?>/labs/" titlr="Go to Labs Home">Wildbit Labs<span></span></a></p>
		<h1 id="logo"><a>Modal Box<span></span></a></h1>
	</div>
	<div id="container">
		<div class="xtop"><div class="xb1"></div><div class="xb2"></div><div class="xb3"></div><div class="xb4"></div></div>
		<div class="xboxcontent">
			
			<div id="announce">
				<h2 class="heading">ModalBox 1.5.5 released</h2>
				<p>This is mostly a bug fixes version of ModalBox. Thanks all contributors and users for your bug reports!</p>
				<a href="<?php bloginfo('url'); ?>/projects/modalbox/frame-demo-step1.php" class="demo-btn" title="Click to see the demo" onclick="this.blur(); Modalbox.show(this.href, {title: 'Welcome to ModalBox demo', width: 600}); return false;"><span>Start Demo</span></a>
			</div>
			
			<div id="content">
				<h2>Download latest version. It's free!</h2>
				<div class="download">
					<ul>
						<li><a href="http://modalbox.googlecode.com/files/modalbox_1.5.5.zip" title="Download!">ModalBox 1.5.5</a> &mdash; full package. Includes prototype.js, script.aculo.us library, unit- and functional tests!</li>
					</ul>
					<p class="link-to-log"><a href="http://code.google.com/p/modalbox/wiki/ChangeLog155" title="See version log on Google.code ModalBox page">See version log</a></p>
				</div>
				
				<div class="twocolwrapper">
					<div class="firstcol">
						<h2>What is ModalBox?</h2>
						<p>ModalBox is a JavaScript technique for creating modern (Web 2.0-style) modal dialogs or even wizards (sequences of dialogs) without using conventional popups and page reloads. It's inspired by <a href="http://www.apple.com/macosx/tiger/" title="Go to Apple Mac OS X web-site">Mac OS X</a> modal dialogs. And yes, it may also be useful for showing bigger versions of images. :) </p>
						<p>ModalBox is built with pure JavaScript and is based on Sam Stephenson's excellent <a href="http://www.prototypejs.org/" title="Go to Prototype JS Framework home">Prototype JavaScript Framework</a>, <a href="http://script.aculo.us/" title="Go to script.aculo.us home">script.aculo.us</a> and valid XHTML/CSS. ModalBox uses AJAX to load content.</p>
						<p>ModalBox technique is still in development. Please feel free to comment or submit your bugs here: <a href="http://code.google.com/p/modalbox/" title="Go to ModalBox Google Code home">http://code.google.com/p/modalbox/</a></p>
						
						<h2>Sources of inspiration</h2>
						<p>Basically, ModalBox is based on <a href="http://amix.dk/projects/?page_id=5" title="Read more about GrayBox">GrayBox technique</a> by <a href="http://amix.dk">Amir Salihefendic</a>. But you can find a lot of similar techniques around the web: <a href="http://www.huddletogether.com/projects/lightbox/">Lightbox JS</a>, <a href="http://particletree.com/features/lightbox-gone-wild/">Lightbox gone wild</a>, <a href="http://codylindley.com/Javascript/257/thickbox-one-box-to-rule-them-all">ThickBox</a> etc.</p>
						<p>There also a clone of ModalBox, the <a href="http://forum.mootools.net/topic.php?id=682#post-3047" title="Go to MOOdalBox home">MOOdalBox</a>, written on great and lightweight <a href="http://mootools.net/" title="Go to Mootools Framework home">Mootools Framework</a>.</p>
						
						<h2>Screenshot</h2>
						<p><img src="<?php bloginfo('url'); ?>/projects/modalbox/images/screenshot.jpg" width="375" height="274" alt="ModalBox Screenshot" /></p>
						
					</div>
					<div class="secondcol">
						<h2>ModalBox Features</h2>
						<ul id="features">
							<li><strong>Web 2.0-ready.</strong> ModalBox uses industry-standard libraries &mdash; <a href="http://prototypejs.org/" title="Go to Prototype JavaScript Framework home">prototype</a> and <a href="http://script.aculo.us/" title="Go to script.aculo.us home">script.aculo.us</a>.</li>
							<li><strong class="new">NEW!</strong> <strong>&ldquo;Offline-mode&rdquo;.</strong> Use dynamic- or plain-HTML without any Ajax-calls to fill out your dialog windows.</li>
							<li><strong>AJAX pages loading.</strong> ModalBox uses AJAX instead of deprecated <code>iframe</code> for content loading. It's also more secure &mdash; you can't access pages which are not on your host.</li>
							<li><strong>Callbacks support.</strong> You can attach your own JavaScript events after showing or hiding (and more) the ModalBox</li>
							<li><strong class="new">NEW!</strong> <strong>Automatic height adjustment.</strong> ModalBox adjust it's height depending on your content. No more height tweaking!</li>
							<li><strong class="new">NEW!</strong> <strong>&ldquo;Scrolling mode&rdquo;.</strong> If your content might be long just define the height of the ModalBox and it will be switched into &ldquo;scrolling mode&rdquo;</li>
							<li><strong>Browser and platform independent.</strong> Since most of modern browsers use popup blockers, it's hard to find another way to create 100% browser-compatible modal dialogs.</li>
							<li><strong>Multi-purpose.</strong> You can create complex wizards to guide users through the process. Image slideshows can be done too.</li>
							<li><strong>Keystrokes support.</strong> Use ESC key to close ModalBox.</li>
							<li><strong>Customizable Look &amp; Feel.</strong> Use CSS to make ModalBox look like you want.</li>
							<li><strong>Supports transitional effects.</strong> Slide down appearing and on-the-fly resizing.</li>
							<li><strong>Lightweight.</strong> Just about 10 KB of code.</li>
							<li><strong>Works in most modern browsers.</strong> Tested in IE6, IE7, Firefox 1.0, 1.5, 2.0, Safari, Camino, Opera 8 and 9.</li>
						</ul>
					</div>
				</div>
				
				<h2>ModalBox on Google.Code</h2>
				<div id="gcode">
					<p><a href="http://code.google.com/p/modalbox/issues/entry" title="Submit a bug report">Found a bug</a> or have something to say? Just check ModalBox project on Google.Code: <a href="http://code.google.com/p/modalbox/" title="Go to ModalBox Google Code home">http://code.google.com/p/modalbox/</a></p>
					<p>There is also a <a href="http://groups.google.com/group/modalbox" title="Visit Modalbox Google Group">Modalbox Google Group</a> exist, there you might find a solution or ask for the help. You may also use this email to post to this group: <a href="mailto:modalbox@googlegroups.com" title="Write a message to the Modalbox group">modalbox@google.com</a></p>
				</div>
				
				<h2>Installation</h2>
				<ol>
					<li><a href="http://modalbox.googlecode.com/files/modalbox_1.5.5.zip" title="Download latest version of ModalBox">Download</a> ModalBox and unpack to your <code>/includes</code> directory (you also need a <a href="http://prototypejs.org" title="Go to PrototypeJS home">prototype</a> + <a href="http://script.aculo.us" title="Go to script.aculo.us home">script.aculo.us</a> files there. Included to ModalBox package.)</li>
					<li>
						Include the following JavaScript files in your pages:
						<pre>&lt;script type="text/javascript" src="includes/prototype.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="includes/scriptaculous.js? &raquo; 
    load=builder,effects"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="includes/modalbox.js"&gt;&lt;/script&gt;</pre>
					</li>
					<li>Include the CSS file <code>modalbox.css</code> in your pages:
						<pre>&lt;link rel="stylesheet" href="includes/modalbox.css" type="text/css" 
media="screen" /&gt;</pre>
					</li>
				</ol>
				
				<a name="reference"></a>
				<h2>Reference</h2>
				<h3>The <code>Modalbox</code> Object</h3>
				ModalBox is a JS OO-style object. It has several public methods which can be called on ModalBox object.
				
				<h4>Method <code>show</code></h4>
				<p>Shows and redraws (if the ModalBox is already open) the ModalBox window with the given parameters.</p>
				<pre>show: function(content, options)</pre>
				
				<p><code>content</code> &mdash; <em>URL or HTML</em>. URL to load inside the window using Ajax method or HTML (plain, existing node or object) to insert into the window.</p>
				<p><code>options</code> &mdash; set of options.</p>
				
				<h5>Options</h5>
				<ul>
					<li><code>title: <em>string</em></code> Titile of the window. Default is <em><strong>ModalBox Window</strong></em>.</li>
					<li><code>overlayClose: <em>boolean</em></code> Close modal box by clicking on overlay. Default is <em><strong>true</strong></em>.</li>
					<li><code>width: <em>integer</em></code> Width in pixels. Default is <em><strong>500px</strong></em>.</li>
					<li><code>height: <em>integer</em></code> Height in pixels. Default is <em><strong>90px</strong></em>.</li>
					<li><code>loadingString: <em>string</em></code> The message to show during loading. Default is <em><strong>&ldquo;Please wait. Loading...&rdquo;</strong></em>.</li>
					<li><code>method: <em>get | post</em></code> Method of passing variables to a server. Default is <em><strong>&#x27;get&#x27;</strong></em>.</li>
					<li><code>params: {param1: value1 [param2: value2 [&hellip;]]}</code> Collection of parameters to pass on AJAX request. Should be URL-encoded. See <a  href="http://code.google.com/p/modalbox/wiki/PassingFormValues">PassingFormValues</a> for details.</li>
					<li><code>closeString</code>: Defines title attribute for close window link. Default is <em><strong>&quot;Close window&quot;</strong></em>.</li>
					<li><code>overlayOpacity</code>: Defines opacity for the overlay. Value should be 0&ndash;1. Default is <em><strong>.75</strong></em></li>
					<li><code>overlayDuration</code>: Overlay fade in/out duration in seconds.</li>
					<li><code>slideDownDuration</code>: Modalbox appear slide down effect in seconds.</li>
					<li><code>slideUpDuration</code>: Modalbox hiding slide up effect in seconds.</li>
					<li><code>resizeDuration</code>: Modalbox resize duration in seconds.</li>
					<li><code>inactiveFade: <em>boolean</em></code> Fades out ModalBox window on inactive state.</li>
					<li><code>transitions: <em>boolean</em></code> Toggles transition effects. Transitions are enabled by default.</li>
					<li>Any supported callback. See <a href="#callbacks">callbacks</a> section for details.</li>
				</ul>
				<br />

				<h4>Method <code>hide</code></h4>
				<p>Hides ModalBox window. You can pass <code>afterHide</code> callback using <code>options</code> parameter.</p>
				<pre>hide: function(options)</pre>
				
				<h4>Method <code>resize</code></h4>
				<p>Changes the dimensions of the ModalBox window without loading content into it.</p>
				<pre>resize: function(byWidth, byHeight, options)</pre>
				<p>Use relative values. If you want to shrink the ModalBox window, use negative values. For example: <code>Modalbox.resize(0, -200);</code> will shrink ModalBox window by height for 200 px.</p>
				
				<h4>Methods <code>activate</code> &amp; <code>deactivate</code></h4>
				<p>Makes ModalBox window active / inactive. Useful to prevent closing dialog window while some action is in progress. For example, uploading files etc.</p>
				<pre>Modalbox.deactivate(options);
Modalbox.activate(options)</pre>
				<p>Use <code>inactiveFade: <strong>true</strong> |  false</code> option to toggle between fade and no-fade styles.</p>
				
				<a name="callbacks"></a>
				<h4>Callbacks</h4>
				<p>There are couple of callbacks supported by ModalBox:</p>
				<ul>
					<li><code>beforeLoad</code> &mdash; fires right before content into the ModalBox. If the callback function returns <code>false</code>, content loading will skipped.</li>
					<li><code>afterLoad</code> &mdash; fires after loading content into the ModalBox (i.e. after showing or updating existing window).</li>
					<li><code>afterHide</code> &mdash; fires after hiding ModalBox from the screen.</li>
					<li><code>afterResize</code> &mdash; fires after calling <code>resize</code> method.</li>
					<li><code>onShow</code> &mdash; fires on first appearing of ModalBox before the contents are being loaded.</li>
					<li><code>onUpdate</code> &mdash; fires on updating the content of ModalBox (on call of <code>Modalbox.show</code> method from active ModalBox instance).</li>
				</ul>
				
				<a name="usage"></a>
				<h2>How to use</h2>

				<h3>Showing ModalBox</h3>
				<p>To invoke ModalBox all you need to do is call <code>Modalbox.show(params);</code> code on event.</p>
				<p>For example, let's create a link with <code>href</code> and <code>title</code> attibutes filled. We will use them as parameters in our example:</p>
				<pre>&lt;a href="frame_send-link.html" title="Simple form" 
onclick="<strong>Modalbox.show(this.href, {title: this.title, width: 600}); &raquo;
    return false;</strong>"&gt; Send link to a friend&lt;/a&gt;</pre>

				<p><a href="<?php bloginfo('url'); ?>/projects/modalbox/frame-demo-step1.php" class="demo-btn" title="Click to see the demo" onclick="this.blur(); Modalbox.show(this.href, {title: 'Welcome to ModalBox demo', width: 600}); return false;"><span>Start Demo</span></a></p>
				
				<br class="clear" />

				<p>From the version 1.5.4 you also may use &ldquo;Offline-mode&rdquo; to show modal dialogs without Ajax-requests and use instead pure HTML. Modalbox supports:</p>
				<ul>
					<li>plain HTML</li>
					<li>DOM nodes</li>
					<li>HTML JavaScript objects</li>
				</ul>
				<p>You can find more info and demos on each method below</p>
				
				<h3>Plain HTML</h3>
				<p>Let's say you're about to show some kind of short confirmation dialog. Something like &ldquo;Are you sure to delete this item?&rdquo; Obviously, it's too much to use a separated HTML page and an additional Ajax request to do that. ModalBox is the solution:</p>
				<pre>Modalbox.show('&lt;div class=\'warning\'&gt;&lt;p&gt;Are you sure to delete this &raquo; 
item?&lt;/p&gt; &lt;input type=\'button\' value=\'Yes, delete!\' &raquo;
onclick=\'Modalbox.hide()\' /&gt; or &lt;input type=\'button\' 
value=\'No, leave it!\' onclick=\'Modalbox.hide()\' /&gt;&lt;/div&gt;', &raquo;
{title: this.title, width: 300});</pre>

				<p><a href="#" class="demo-btn" title="Plain HTML demo" onclick="Modalbox.show('<div class=\'warning\'><p>Are you sure to delete this item?</p><input type=\'button\' value=\'Yes, delete!\' onclick=\'Modalbox.hide()\' /> or <input type=\'button\' value=\'No, leave it!\' onclick=\'Modalbox.hide()\' /></div>', {title: this.title, width: 300}); return false;"><span>See it in action</span></a></p>
				
				<br class="clear" />
				
				<h3>DOM Node</h3>
				<p>Now, let's say you already have a DOM node in your HTML document which could be referenced via ID or className attributes. Let's improve the above technique.</p>
				<p>Here's how our existing DOM node looks like:</p>
				
				<div class="warning" id="domexample" style="border: 1px solid #CCC"><p>Are you sure to delete this item?</p><input type='button' value='Yes, delete!' onclick='Modalbox.hide()' /> or <input type='button' value='No, leave it!' onclick='Modalbox.hide()' /></div>
				
				<p>This block has an <code>ID="domexample"</code>. We'll use it to show in ModalBox. Here's the code:</p>
				<pre>Modalbox.show($('domexample'), {title: this.title, width: 300});</pre>
				<p><a href="#" class="demo-btn" title="DOM node demo" onclick="Modalbox.show($('domexample'), {title: this.title, width: 300}); return false;"><span>See it in action</span></a></p>
				
				<br class="clear" />
				
				<p>Notice, all attributes were copied into the new DOM node which was then used to show as ModalBox contents.</p>
				
				<h3>HTML JavaScript objects</h3>
				<p>The most advanced usage could be a JavaScript object containing HTML code. Let's use Script.aculo.us Builder for our example.</p>
				
				<pre>&lt;script type=&quot;text/javascript&quot; charset=&quot;utf-8&quot;&gt;
	var node = new Element('div', {className: 'warning', style: 'border: 1px solid #0F0; display:none'}).update(
		new Element('p').update('Are you sure to delete this item?')
	).insert(
		new Element('input', {type: 'button', value: 'Yes, delete it!', id: 'deleteBut'})
	).insert(
		new Element('span').update(' or ')
	).insert(
		new Element('input', {type: 'button', value: 'No, leave it', id: 'cancelBut'})
	);
	
	var hideObserver = Modalbox.hide.bindAsEventListener(Modalbox);

	function setObservers ()
	{
		$('deleteBut').observe('click', hideObserver);
		$('cancelBut').observe('click', hideObserver);
	}
	function removeObservers ()
	{
		$('deleteBut').stopObserving('click', hideObserver);
		$('cancelBut').stopObserving('click', hideObserver);
	}
&lt;/script&gt;

&lt;a href=&quot;#&quot; class=&quot;demo-btn&quot; title=&quot;JavaScript Object demo&quot; 
onclick=&quot;Modalbox.show(node, {title: this.title, width: 300, 
	afterLoad: setObservers, onHide: removeObservers }); return false;&quot;&gt;Link&lt;/a&gt;
</pre>
				
				<script type="text/javascript" charset="utf-8">
					var node = new Element('div', {className: 'warning', style: 'border: 1px solid #0F0; display:none'}).update(
						new Element('p').update('Are you sure to delete this item?')
					).insert(
						new Element('input', {type: 'button', value: 'Yes, delete it!', id: 'deleteBut'})
					).insert(
						new Element('span').update(' or ')
					).insert(
						new Element('input', {type: 'button', value: 'No, leave it', id: 'cancelBut'})
					);

					var hideObserver = Modalbox.hide.bindAsEventListener(Modalbox);

					function setObservers ()
					{
						$('deleteBut').observe('click', hideObserver);
						$('cancelBut').observe('click', hideObserver);
					}
					function removeObservers ()
					{
						$('deleteBut').stopObserving('click', hideObserver);
						$('cancelBut').stopObserving('click', hideObserver);
					}
				</script>
				
				<p><a href="#" class="demo-btn" title="JavaScript Object demo" onclick="Modalbox.show(node, {title: this.title, width: 300, afterLoad: setObservers, beforeHide: removeObservers }); return false;"><span>See it in action</span></a></p>
				<br class="clear" />
				
				<h3>Wizards creation</h3>				
				<p>To create a simple process (as shown in the Examples) you need to call <code>Modalbox.show(params);</code> again from your ModalBox window:</p>
				<pre>&lt;button type="button" onclick="<strong>Modalbox.show('frame_send-link-done.html', &raquo;
{width: 460, title: 'Sending status'}); return false;</strong>"&gt; &raquo;
Send link&lt;/button&gt;</pre>
				
				<h3>Hiding ModalBox</h3>
				<p>To hide a ModalBox window with a custom link inside it, use the following:</p>
				<pre>&lt;a href="#" title="Close window" onclick="<strong>Modalbox.hide(); &raquo;
return false;</strong>"&gt;Close&lt;/a&gt;</pre>
				
				<h2>Disabling Interactions</h2>
				<p>If you want to disable all interactions with ModalBox during the process (for example, during file uploading), use <code>deactivate</code> and <code>activate</code> methods. Since deactivated, ModalBox will not respond to ESC key and &ldquo;Close&rdquo; button will disappear. If you don't want ModalBox to fade out in inactive state, set <code>inactiveFade</code> parameter to <code>false</code>.</p>
				
				<p><a href="#" class="demo-btn" title="Deactivate example" onclick="Modalbox.show('<h1>Activate / Deactivate Example</h1><input type=\'button\' value=\'Deactivate\' onclick=\'Modalbox.deactivate()\' /><input type=\'button\' value=\'Activate\' onclick=\'Modalbox.activate()\' /><br /><br />', {title: this.title }); return false;"><span>See it in action</span></a></p>
				<br class="clear" />
				
			</div>
			
		</div>
		<div class="xbottom"><div class="xb4"></div><div class="xb3"></div><div class="xb2"></div><div class="xb1"></div></div>					
	</div>
	
	<div id="footer">
		<p>&copy; 2006&ndash;2007 <a href="mailto:andrej.okonetschnikow@gmail.com?subject=ModalBox" title="Email me!">Andrew Okonetchnikov</a>. All rights reserved by Wildbit LLC.</p>
	</div>
</div>
<script type="text/javascript">
<!--
_uacct = "UA-507677-2";
urchinTracker();
-->
</script>
</body>
</html>
