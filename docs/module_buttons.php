<?php require_once '_head.php' ?>
<body>
	<div id="container">

		<?php require_once '_header.php' ?>
		<?php require_once '_toc.php' ?>

		<h2>Buttons module</h2>

		<p>Use the following HTML to create a regular button:</p>

		<pre class="brush: xml;">
			&lt;div class=&quot;buttonHolder&quot;&gt;
				&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;
					&lt;b&gt;&amp;nbsp;&lt;/b&gt;
					&lt;span&gt;Button text&lt;/span&gt;
					&lt;i&gt;&amp;nbsp;&lt;/i&gt;
				&lt;/a&gt;
			&lt;/div&gt;
		</pre>

		<p>This will result in a button:</p>

		<div class="buttonHolder">
			<a href="#" class="button">
				<b>&nbsp;</b>
				<span>Button text</span>
				<i>&nbsp;</i>
			</a>
		</div>

		<br />
		<div class="hr"><hr /></div>

		<p>Now sometimes you want to have 2 buttons next to each other. Simply add another <code>&lt;a&gt;</code> inside the <code>buttonHolder</code>-div.</p>

		<pre class="brush: xml;">
			&lt;div class=&quot;buttonHolder&quot;&gt;
				&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;
					&lt;b&gt;&amp;nbsp;&lt;/b&gt;
					&lt;span&gt;Button text&lt;/span&gt;
					&lt;i&gt;&amp;nbsp;&lt;/i&gt;
				&lt;/a&gt;
				&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;
					&lt;b&gt;&amp;nbsp;&lt;/b&gt;
					&lt;span&gt;Button text&lt;/span&gt;
					&lt;i&gt;&amp;nbsp;&lt;/i&gt;
				&lt;/a&gt;
			&lt;/div&gt;
		</pre>

		<p>This will add some spacing between the two buttons. Tight.</p>

		<div class="buttonHolder">
			<a href="#" class="button">
				<b>&nbsp;</b>
				<span>Button text</span>
				<i>&nbsp;</i>
			</a>
			<a href="#" class="button">
				<b>&nbsp;</b>
				<span>Button text</span>
				<i>&nbsp;</i>
			</a>
		</div>

</div>
	
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'js/syntax/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	</div>
</body>
</html>