<?php require_once '_head.php' ?>
<body>
	<div id="container">

		<?php require_once '_header.php' ?>
		<?php require_once '_toc.php' ?>

		<div class="id1">
			<div class="content">

				<p class="intro">You are not building websites anymore. You are building full-fledged web applications. In order to build the best you can, in order to have room for innovation, you need a set of defaults so you don't have to deal with the <em>monkey jobs</em> anymore &ndash; to be able to spend more time solving the real design issues instead of booting up your Windows machine for the umptheenth time to solve <em>that</em> cross browser bug.</p>
				
				<p class="intro">That's Winston for you.</p>

				<hr />

				<h3 id="whatis">What is Winston?</h3>

				<p>Winston is a user interface library consisting of common elements in websites and web applications. These elements work together in an ecosystem of conventions, guidelines and best practices. The goal of this library is to provide designers and developers with a solid base to build user interfaces. Think of it as <a href="http://rubyonrails.org/">Rails</a> for designers.</p>

				<h3 id="download">Download</h3>
				
				<p>Download Winston from Github:</p>
				
				<ul>
					<li>Do it the cool way using git: <code class="marked">git clone git@github.com:Wolfr/winston.git</code></li>
					<li>Alternatively, go to <a href="http://github.com/Wolfr/winston/tree/master">Winston's Github page</a> and click the download button. You can choose to download a .zip or .tar file then.</li>
				</ul>
				
				<h3 id="why">Why should I use this?</h3>
				
				<ul>
					<li>Use code that has been tested in various browsers, leaving you with fewer worries</li>
					<li>Be able to quickly mock up a page using good defaults, straight in your code</li>
					<li>Slice 'n dice faster than ever before by consistently avoiding repeat tasks</li>
				</ul>
				
				<h3 id="usage">How do I use Winston?</h3>
				
				<p><strong>Ideally, you start using Winston when you start a new project.</strong> You could theoretically integrate it into an older project but that would probably result in a lot of code duplication.</p>
				
				<p>After you downloaded Winston, you will see that the directory structure looks like this:</p>
				
				<pre class="brush: xml;">
					+ [docs]
					+ [start_project]
				</pre>

				<p>The docs are included with each version of Winston, but if you are using the latest version, you can just use the online docs and safely delete the [docs] folder.</p>

				<p>Inside [start_project] you will find a few other files:</p>
				
				<pre class="brush: xml;">
					- [start_project]
						index.html
						- [css]
							- [modules]
							  winston.full.0.5.css
							  winston.ie6.full.0.5.css
							  winston.ie7.full.0.5.css
						- [images]
						- [js]
							+ [cufon]
							+ [jquery]
				</pre>
				
				<p>This file structure is meant to help you get to work fast. The index.html file includes jQuery and the full Winston file, so you can just start coding without any hassle.</p>
				
				<p>If you want customize Winston to your specific needs, you're going to want to strip out the parts that you don't need. There's 2 way to go about this:</p>
				
				<ol>
					<li>Delete the [modules] folder. Open the winston.full css file and delete the parts you don't need. Every module is clearly marked so it's just a matter of going through the file.</li>
					<li>The other option is to start out with an empty file and then add modules when you need them by copy pasting those from the [modules] folder.</li>
				</ol>
				
				<p>Have fun with your project!</p>
				
				<p class="secondaryContent mute">I know this isn't ideal: for later versions I plan to make a "builder" so you can just check the modules you need and then you're good to go. For instance, the [images] folder probably contains a lot of things you don't need at this point.</p>

				<h3 id="testsuite">Test suite</h3>

				<p>Nobody likes plowing through documentation and sets of conventions without knowing first what to expect. Time is valuable to anyone.</p>
				
				<p>Check out the test suite pages for <a href="../test_suite/typography/index.html">typography</a>, <a href="../test_suite/buttons/index.html">buttons</a> and <a href="../test_suite/layout/index.html">layout</a>.</p>
				
				<p>So you can get a sense of what you can do before investing any time in this.</p>
			
			</div>
		</div>
		
		<div class="hr"><hr /></div>

		<h3 id="thanks">Thanks for your feedback and/or support:</h3>
			
		<div id="feedback">
			<ul class="people clearfix">
				<li>
					<a href="http://www.abconcerts.be/nl/profielen/p/detail/feedback-master">
						<img src="images/fbm.jpg" width="48" height="48" alt="Fbm" />
					</a>
					<p><a href="http://www.abconcerts.be/nl/profielen/p/detail/feedback-master">饋還 達人</a></p>
				</li>
				<li>
					<a href="http://www.bram.us">
						<img src="images/bramus.jpg" width="48" height="48" alt="Bramus" />
					</a>
					<p><a href="http://www.bram.us">Bramus!</a></p>
				</li>
				<li>
					<a href="http://www.thinkjavache.be">
						<img src="images/javache.jpg" width="48" height="48" alt="Javache" />
					</a>
					<p><a href="http://www.thinkjavache.be">Javache</a></p>
				</li>
				<li>
					<a href="http://www.openminds.be">
						<img src="images/frank.jpg" width="48" height="48" alt="Frank" />
					</a>
					<p><a href="http://www.openminds.be">Frank</a></p>
				</li>
				<li>
					<a href="http://dimitrivanheucke.be/blog/">
						<img src="images/default.gif" width="48" height="48" alt="" />
					</a>
					<p><a href="http://dimitrivanheucke.be/blog/">Dimitri</a></p>
				</li>
				<li>
					<a href="http://www.idoe.be/en/home">
						<img src="images/default.gif" width="48" height="48" alt="" />
						<p>Geert</p>
					</a>
				</li>
				<li>
					<a href="http://www.spoon-library.be">
						<img src="images/dave-twitter.jpg" width="48" height="48" alt="Dave" />
					</a>
					<p><a href="http://www.spoon-library.be">Dave</a></p>
				</li>
				<li>
					<a href="http://www.roam.be">
						<img src="images/default.gif" width="48" height="48" alt="" />
					</a>
					<p><a href="http://www.roam.be">Kevin</a></p>
				</li>
				<li>
					<a href="http://www.thehotseat.be/">
						<img src="images/bytte.jpg" width="48" height="48" alt="" />
					</a>
					<p><a href="http://www.thehotseat.be/">Bytte</a></p>
				</li>
				<li>
					<a href="http://www.greencurry.be/">
						<img src="images/default.gif" width="48" height="48" alt="" />
					</a>
					<p><a href="http://www.greencurry.be/">Dieter</a></p>
				</li>
				<li>
					<a href="http://blog.joggink.be/">
						<img src="images/joggink.png" width="48" height="48" alt="Joggink" />
					</a>
					<p><a href="http://blog.joggink.be/">Joggink</a></p>
				</li>
			</ul>
		</div>

		<div class="hr"><hr /></div>

	<p class="secondaryContent">By <a href="http://www.johanronsse.be">Johan Ronsse (Wolf)</a>. See <a href="../LICENSE" rel="license">the license</a> for usage details.</p>

</div>
	
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'js/syntax/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	</div>
</body>
</html>