<?php require_once '_head.php' ?>
<body>
	<div id="container">

		<?php require_once '_header.php' ?>
		<?php require_once '_toc.php' ?>

		<h2 id="layout">Layout module</h2>

		<div class="col-5 content">
			<p>Ah, layout. Every web designers' favorite part.</p>

			<p>To use the layout module you will need:</p>
			<ul>
				<li><code>winston.reset.0.4.css</code></li>
				<li><code>winston.layout.0.4.css</code></li>
				<li><code>winston.ie6.full.0.4.css</code> (IE6 support for vertical centering)</li>
			</ul>

			<p>Or alternatively the full versions of each file:</p>
			<ul>
				<li><code>winston.full.0.4.css</code></li>
				<li><code>winston.ie6.full.0.4.css</code> (IE6 support for vertical centering)</li>
			</ul>

		</div>

		<h3 id="buildingLayouts">Building layouts using the column systems</h3>

		<div class="content">
			<div class="col-5">

				<p>To layout our user interface, we use a grid. The grid depends on the application. We know a few things: we want to keep things within a 960px wide frame; we want enough space (>20px) between columns; and we want the reading length of text to be proper.</p>
				<p>This is what the CSS for the default 10 column grid looks like:</p>
			</div>
		</div>

		<pre class="brush: css;">
			.col { width: 72px; margin-right: 24px; float: left; }
			.col-2 { width: 168px; }
			.col-3 { width: 264px; }
			.col-4 { width: 360px; }
			.col-5 { width: 456px; }
			.col-6 { width: 552px; }
			.col-7 { width: 648px; }
			.col-8 { width: 744px; }
			.col-9 { width: 840px; }
			.col-10 { width: 936px; }
			.last { margin-right: 0 !important; }
		</pre>

		<div class="col-5">
			<p>In Winston all columns live in a <code>&lt;div&gt;</code> with a <code>.cols</code> class.</p>
			<p>The system uses floats to define columns. Because of this it is necessary to wrap the floats in a container that gets cleared.</p>
			<p>I tend to use the <a href="http://www.positioniseverything.net/easyclearing.html">clearfix</a> method. Some people prefer to clutter their markup with nonsense like <code>&lt;br style=&quot;clear: both&quot; /&gt;</code>. Don't do this.</p>
			<p>Here's an example of three:</p>
		</div>

		<div class="cols">
			<div class="col col-2">
				This is column A.
			</div>
			<div class="col col-2">
				This is column B.
			</div>
			<div class="col col-2 last">
				This is column C.
			</div>
		</div>

		<br />

		<p>And the code for this:</p>

		<pre class="brush: xml;">
			&lt;div class=&quot;cols&quot;&gt;
				&lt;div class=&quot;col col-2&quot;&gt;
					This is column A.
				&lt;/div&gt;
				&lt;div class=&quot;col col-2&quot;&gt;
					This is column B.
				&lt;/div&gt;
				&lt;div class=&quot;col col-2&quot;&gt;
					This is column C.
				&lt;/div&gt;
				&lt;div class=&quot;col col-2 last&quot;&gt;
					This is column D.
				&lt;/div&gt;
			&lt;/div&gt;
		</pre>

		<div class="content col-5">
			<p>We can use this column system to create layouts. However, not everything fits on the grid. Websites and web applications are not a piece of paper: we can't go Joseph Muller Brockmann-style when rewiring the latest Wordpress interface. Depending on the situation, you might consider working with another type of column system, based on percentages.</p>
		</div>

		<h3 id="centerAnythingHorizontally">Center anything horizontally</h3>
		
		<p>This is a div structure that you can use to center anything horizontally. Normally block elements need a defined width to center them in CSS. Using this div structure you can center anything. It's ugly but it works.</p>

		<pre class="brush: xml;">
		<div class="centerHorizontallyWrap">
			<div class="centerHorizontally">
				<div class="centerHorizontallyInner">

					Center anything horizontally...!

				</div>
			</div>
		</div>
		</pre>

		<h3 id="centerAnythingVertically">Center anything vertically</h3>
		
		<p>This is a div structure that you can use to center anything vertically without resorting to a table.</p>

		<pre class="brush: xml;">
		<div class="centerVerticallyWrap">
			<div class="centerVertically">
				<div class="centerVerticallyInner">

					Center anything vertically...!

				</div>
			</div>
		</div>
		</pre>
		
		<p>Make sure to define a height on the element that wraps around the div structure. Example with inline CSS to make this point clear:</p>

		<pre class="brush: xml;">
		<div id="elementWithHeight" style="height: 200px;">
			<div class="centerVerticallyWrap">
				<div class="centerVertically">
					<div class="centerVerticallyInner">

						Center anything vertically...!

					</div>
				</div>
			</div>
		</div>
		</pre>
		

</div>
	
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'js/syntax/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	</div>
</body>
</html>

