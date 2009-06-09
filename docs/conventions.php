<?php require_once '_head.php' ?>
<body>
	<div id="container">

		<?php require_once '_header.php' ?>
		<?php require_once '_toc.php' ?>

		<h2 id="conventions">Conventions</h2>
		
		<div class="cols id1">
			<div class="col col-8">

				<p>This part of the documentation documents the conventions used in Winston stylesheets and markup to keep code understandable and readable. These conventions provide a good start to build websites and apps with Winston in a proper manner. You can, of course, always use your own ways of doing things. These are guidelines.</p>
				
				<h3 id="commenting">Comments in Winston</h3>
				
				<p>Every CSS file starts with some metadata: author, copyright, license (if any).</p>
				<pre class="brush: css;">
					/*

						Stylesheet for PROJECTNAME

						Media:      screen, projection
						Copyright:  Company Name &lt;http://www.companyname.com&gt;
						Author:     Name Surname &lt;name@domain.com&gt;

					*/
				</pre>

				<p>This is the standard way of marking up block comments in your CSS: (e.g. "this is the css for the buttons")</p>

				<pre class="brush: css;">
					/*
						Buttons
					*/
				</pre>
				
				<p>And inline comments:</p>

				<pre class="brush: css;">
					#container {
						display: inline; /* Fix double margin bug */
					}
				</pre>

				<div class="hr"><hr /></div>
				
				<h3 id="indentation">Indentation is important</h3>
				
				<p>Properly indent your files to produce readable code, for yourself and for your team. Don't do this:</p>
				
				<pre class="brush: xml;">
					&lt;ul&gt;
					&lt;li&gt;Don&#x27;t do this&lt;/li&gt;
					&lt;/ul&gt;
				</pre>

				<pre class="brush: xml;">
					&lt;ul&gt;&lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span&gt;Nor&lt;/span&gt; &lt;strong&gt;this&lt;/strong&gt; one line crap&lt;/a&gt;&lt;/li&gt;
					&nbsp;
				</pre>

				<div class="col-5">
					<p>As a general rule, block elements should live on their own line, e.g. the opening &lt;ul&gt; and closing &lt;/ul&gt; should be on the same line. Inline elements can be on the same line as long as things stay clear. If lines get too long (longer than 100 characters for instance) then you should start putting inline elements on separate lines. This happens, for instance, when constructing button CSS that includes a lot of inline elements to work around lacking browsers.</p>
					<p>So do this (preferred):</p>
				</div>

				<pre class="brush: xml;">
					&lt;div class=&quot;buttonHolder&quot;&gt;
						&lt;a href=&quot;#&quot; class=&quot;button buttonSmall&quot;&gt;
							&lt;span&gt;Something&lt;/span&gt;
						&lt;/a&gt;
					&lt;/div&gt;
				</pre>

				<p>Or this:</p>

				<pre class="brush: xml;">
					&lt;div class=&quot;buttonHolder&quot;&gt;
						&lt;a href=&quot;#&quot; class=&quot;button buttonSmall&quot;&gt;&lt;span&gt;Something&lt;/span&gt;&lt;/a&gt;
					&lt;/div&gt;
				</pre>

				<p>Not this:</p>

				<pre class="brush: xml;">
					&lt;div class=&quot;buttonHolder&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;button buttonSmall&quot;&gt;&lt;span&gt;Something&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;
				</pre>

				<div class="hr"><hr /></div>
				
				<h3 id="namingIDsAndClasses">Naming IDs and classes</h3>
				<div class="content">
					<ul>
						<li>Use camelCase for everything</li>
						<li>Use non-trivial, English language <code>id</code> and <code>class</code>-names</li>
					</ul>
				</div>

				<div class="hr"><hr /></div>

				<h3 id="handlingDFC">How Winston handles the default styling problem</h3>

				<div class="col-5">
					<p>Browsers have their default way of styling HTML elements. In order to get a consistent look across browsers, we use a CSS reset to reset every element, and then build the styling back up. The problem with this is that it leads to a horrendous amount of extra CSS. Let's clarify with an example.</p>

					<p>One of the most commonly used elements in building websites is the unordered list. It default to what you would think an unordered list looks like: bullet points and a bit of margin and/or padding on the <code>&lt;ul&gt;</code> and <code>&lt;li&gt;</code> elements.</p>

					<p>This is what it looks like:</p>

					<iframe src="unorderedlist.html" style="height: 75px; width; 200px;"></iframe>

					<p>When we reset the unordered list, this is what it looks like:</p>

					<ul>
						<li>Item one</li>
						<li>Item two</li>
					</ul>
					<br />
					<p>So, the common thing for a web designer to do is to define some styles so it ends up looking like this:</p>

					<div class="content">
						<ul>
							<li>Item one</li>
							<li>Item two</li>
						</ul>
					</div>
					
					<p>This fits with the other styling. Good. But now, for the problem. The designer has to build a navigation and he doesn't need to the bullets. This is what he's going to do:</p>

					<pre class="brush: css;">
						#navigation ul {
							list-style: none;
							padding: 0;
						}
					</pre>

						<p>Reset, build up again, reset again. Not good. Winston has a better way to handle this, and it's called the <code>.content</code> class. Whenever you add the <code>.content</code> class to a parent elements, the HTML elements within are styled accordingly.</p>

					<p>In <code>base.css</code> you might find rules like these one then:</p>

					<pre class="brush: css;">
						.content ul,
						.content ol {
							padding: 0 0 12px 24px;
						}

						.content ul {
							list-style: disc;
						}

						.content ol {
							list-style-type: decimal;
							padding: 0 0 12px 24px;
						}
					</pre>

					<p><strong>Why?</strong> Most of the unordered lists you use when building a website or web application do not function as standard unordered lists, but as navigation, step selectors et cetera. The content class can clearly define which areas are actual content.</p>
				</div>
				
				<h3 id="presentationalMarkup">On presentational markup</h3>
				
				<div class="col-5">
					<p>Winston occasionally uses presentational markup. Many HTML purists won't like this. But they're the only ones who care. For designers and developers, the HTML and CSS decisions made lead to cleaner and maintainable code. Users will be served a lighter page. You might not think there's too much difference between <code>&lt;span class=&quot;item&quot;&gt;</code> and <code>&lt;b&gt;</code>, but when a list contains a thousand items there is indeed a difference, namely one of many bytes.</p>
					<p>For example, when hooking up an image via a CSS sprite, we might use the <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> tags, since they are short and offer us another option instead of yet another classname. Much of this has to do with the way the cascade in CSS works and <a href="http://meyerweb.com/eric/thoughts/2004/08/23/markup-missive/">document weight</a>.</p>
				</div>
				
			</div>
		</div>
		
		<div class="hr"><hr /></div>

</div>
	
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'js/syntax/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	</div>
</body>
</html>