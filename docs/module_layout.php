<?php require_once '_head.php' ?>
<body>
	<div id="container">

		<?php require_once '_header.php' ?>
		<?php require_once '_toc.php' ?>

		<h2 id="layout">Layout module</h2>

		<div class="col-6 content">
			<p>Ah, layout. Every web designers' favorite part.</p>

			<p>To use the layout module you will need:</p>
			<ul>
				<li><code>winston.reset.0.5.css</code></li>
				<li><code>winston.layout.0.5.css</code></li>
				<li><code>winston.ie6.layout.0.5.css</code> (IE6 support for vertical centering)</li>
				<li><code>winston.ie7.layout.0.5.css</code> (IE7 clearfix)</li>
			</ul>

			<p>Or alternatively the full versions of each file:</p>
			<ul>
				<li><code>winston.full.0.5.css</code></li>
				<li><code>winston.ie6.full.0.5.css</code> (IE6 support for vertical centering)</li>
				<li><code>winston.ie7.full.0.5.css</code> (IE7 clearfix)</li>
			</ul>

		</div>

		<h3 id="gridBasedColumns">Grid based column system</h3>

		<div class="content">
			<p>To layout our user interface, we use a grid. The grid depends on the application. We know a few things: we want to keep things within a 960px wide frame; we want enough space (>20px) between columns; and we want the reading length of text to be proper.</p>
			<p>This is what the CSS for the default 10 column grid looks like:</p>
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

		<p>In Winston all columns live in a <code>&lt;div&gt;</code> with a <code>.cols</code> class.</p>
		<p>The system uses floats to define columns. Because of this it is necessary to wrap the floats in a container that gets cleared.</p>
		<p>Winston uses the <a href="http://www.positioniseverything.net/easyclearing.html">clearfix</a> method. Some people prefer to clutter their markup with nonsense like <code>&lt;br style=&quot;clear: both&quot; /&gt;</code>. Don't do this.</p>
		<p>Here's an example of three columns:</p>

		<style type="text/css" media="screen">
			
			.col {
				background: #DDD;
			}
			
		</style>
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


		<h3 id="percentageBasedColumns">Percentage based column system</h3>

		<p>The grid system is an easy way to create layouts. However, not everything fits on the grid. Websites and web applications are not a piece of paper: we can't go Joseph Muller Brockmann-style when rewiring the latest Wordpress interface. Depending on the situation, you might consider working with another type of column system, based on percentages.</p>
		<p>Winston provides such a system: structurally it works like the grid system but it uses different class names.</p>
		<p>Here's the 3 columns again, but with the percentage based system:</p>
		
		<style type="text/css" media="screen">
			
			.col-1d3, .col-1d2 {
				background: #DDD;
			}
			
		</style>
		<div class="cols">
			<div class="col col-1d3">
				This is column A.
			</div>
			<div class="col col-1d3">
				This is column B.
			</div>
			<div class="col col-1d3">
				This is column C.
			</div>
		</div>
		
		<br />
		
		<p>This is what the code looks like:</p>
		
		<pre class="brush: xml;">
		<div class="cols">
			<div class="col col-1d3">
				This is column A.
			</div>
			<div class="col col-1d3">
				This is column B.
			</div>
			<div class="col col-1d3">
				This is column C.
			</div>
		</div>
		</pre>
		
		<p>1d3 stands for 1/3. Since we can't use slashes in class names, we use 'd'. So if you wanted to have 2 columns, each 50/50, then you would code it like this:</p>
		
		<pre class="brush: xml;">
		<div class="cols">
			<div class="col col-1d2">
				This is column A.
			</div>
			<div class="col col-1d2">
				This is column B.
			</div>
		</div>
		</pre>
		
		<p>Which would result in:</p>

		<div class="cols">
			<div class="col col-1d2">
				This is column A.
			</div>
			<div class="col col-1d2">
				This is column B.
			</div>
		</div>
		<br />
		<p>If you want some spacing inside those columns, you can use the provided classes to do this:</p>
		
		<pre class="brush: css;">
			.cols .spacingLeft { margin-left: 24px; }
			.cols .spacingLeftHalf { margin-left: 12px; }
			.cols .spacingRight { margin-right: 24px; }
			.cols .spacingRightHalf { margin-right: 12px; }
			.cols .spacingBothHalf { margin-right: 12px; margin-left: 12px; }
		</pre>
		
		<p>Using these classes you can get a result like this:</p>
		
		<div class="example">
			<span class="ex">Percentage Columns example</span>
			<div class="cols">
				<div class="col col-1d3">
					<div class="spacingRight">
						This is column A. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id magna. Proin euismod vestibulum tortor. Vestibulum eget nisl. Donec interdum quam at nunc. In laoreet orci sit amet sem. In sed metus ac nunc blandit ultricies. Maecenas sed tortor. 
					</div>
				</div>
				<div class="col col-1d3">
					<div class="spacingBothHalf">
						This is column B. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id magna. Proin euismod vestibulum tortor. Vestibulum eget nisl. Donec interdum quam at nunc. In laoreet orci sit amet sem. In sed metus ac nunc blandit ultricies. Maecenas sed tortor. 
					</div>
				</div>
				<div class="col col-1d3">
					<div class="spacingLeft">
						This is column C. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id magna. Proin euismod vestibulum tortor. Vestibulum eget nisl. Donec interdum quam at nunc. In laoreet orci sit amet sem. In sed metus ac nunc blandit ultricies. Maecenas sed tortor. 
					</div>
				</div>
			</div>
		</div>

		<h3 id="centerAnythingHorizontally">Center anything horizontally</h3>
		
		<p>This is a div structure that you can use to center anything horizontally. Normally block elements need a defined width to center them in CSS. Using this div structure you can center anything. It's ugly but it works.</p>
		
		<p>Some extra measures have to be taken for older browsers like IE6 and Firefox though, so use with caution (see: test_suite/layout/).</p>

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

