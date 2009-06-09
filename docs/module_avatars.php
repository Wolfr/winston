<?php require_once '_head.php' ?>
<body>
	<div id="container">

		<?php require_once '_header.php' ?>
		<?php require_once '_toc.php' ?>
		
		<h2 id="avatars">Avatars module</h3>

		<p>Lists of users are a common thing in web applications, especially the so-called <em>&ldquo;social&rdquo;</em> ones.</p>

		<div class="example">
			<span class="ex">Example</span>

			<ul class="people clearfix">
				<li>
					<div class="avatar av48">
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
				<li>
					<div class="avatar av48">
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
				<li>
					<div class="avatar av48">
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
				<li>
					<div class="avatar av48">
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
			</ul>
		</div>

		<div class="example">
			<span class="ex">Example: circle style avatars</span>

			<ul class="people clearfix">
				<li>
					<div class="avatar av48">
						<div class="avOverlay">&nbsp;</div>
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
				<li>
					<div class="avatar av48">
						<div class="avOverlay">&nbsp;</div>
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
				<li>
					<div class="avatar av48">
						<div class="avOverlay">&nbsp;</div>
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
				<li>
					<div class="avatar av48">
						<div class="avOverlay">&nbsp;</div>
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
			</ul>
		</div>

		<div class="example">
			<span class="ex">Example: different sizes (24, 48, 96 and 128 sq.)</span>

			<ul class="people clearfix">
				<li>
					<div class="avatar av24">
						<div class="avOverlay">&nbsp;</div>
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
				<li>
					<div class="avatar av48">
						<div class="avOverlay">&nbsp;</div>
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
				<li>
					<div class="avatar av96">
						<div class="avOverlay">&nbsp;</div>
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
				<li>
					<div class="avatar av128">
						<div class="avOverlay">&nbsp;</div>
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
			</ul>
		</div>

		<p>And a code example (this is for one avatar only, of course):</p>

		<pre class="brush: xml;">
			<ul class="people clearfix">
				<li>
					<div class="avatar av48">
						<a href="#">
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
			</ul>
		</pre>

		<p>If you want to use funky overlays (e.g. add a bit of gloss to each avatar) you can use the <code>avOverlay</code> class. The default images for avOverlay turn square avatars into round ones. Note that this only works on a white (#FFF) background. For other colors, you're going to have to roll your own images.</p>

		<pre class="brush: xml;">
			<ul class="people clearfix">
				<li>
					<div class="avatar av48">
						<a href="#">
							<div class="avOverlay">&nbsp;</div>
							<img src="images/default.gif" />
						</a>
					</div>
					<p><a href="#">Username</a></p>
				</li>
			</ul>
		</pre>
	
</div>
	
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'js/syntax/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	</div>
</body>
</html>