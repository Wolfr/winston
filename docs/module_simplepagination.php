<?php require_once '_head.php' ?>
<body>
	<div id="container">

		<?php require_once '_header.php' ?>
		<?php require_once '_toc.php' ?>

		<h2 id="simplePagination">Simple pagination</h3>

		<div class="col-6">

			<p>What is simple pagination, one might ask? Pagination in it's purest form is a previous and a next link or button.</p>

			<div class="example">
				<span class="ex">Poor example from a well known CMS</span>
				<p>
					<a href="#">Previous</a> - <a href="#">Next</a>
				</p>
			</div>

			<p>When you're at the last page, it would look this:</p>

			<div class="example">
				<span class="ex">It gets even worse</span>
				<p>
					<a href="#">Previous</a>
				</p>
			</div>

			<p>This is kind of lame. Any kind of navigation should stay in the same place (and not jump around the website or application). An option can't just dissapear. We need to give the pagination more context: where exactly am I? And why can't I go to the next page now?</p>

			<p>Here's my proposal:</p>

			<div class="example">
				<span class="ex">Example</span>
				<div class="simplePagination">
					<ul class="clearfix">
						<li><span>Previous</span></li>
						<li><strong>1/13</strong></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>
			</div>

			<div class="example">
				<span class="ex">Example</span>
				<div class="simplePagination">
					<ul class="clearfix">
						<li><a href="#">Previous</a></li>
						<li><strong>2/13</strong></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>
			</div>

			<div class="example">
				<span class="ex">Example</span>
				<div class="simplePagination">
					<ul class="clearfix">
						<li><a href="#">Previous</a></li>
						<li><strong>13/13</strong></li>
						<li><span>Next</span></li>
					</ul>
				</div>
			</div>

			<p>And some example code:</p>

			<pre class="brush: xml">
				<div class="simplePagination">
					<ul class="clearfix">
						<li><span>Previous</span></li>
						<li><strong>1/13</strong></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>
			</pre>

			<div class="content">

				<p>You HTML purists might wonder why we wrap the text in three different elements. The reasoning behind this is:</p>

				<ul>
					<li><code>&lt;a&gt;</code> is for links</li>
					<li><code>&lt;strong&gt;</code> is for your current location</li>
					<li><code>&lt;span&gt;</code> is used as a generic inline element to mute the unavailable options</li>
				</ul>

				<p>Alternatively one could use the <code>select</code>-element coupled with some javascript to quickly skip to a certain page. However, it is very speculative to assume a user wants to be at some page exactly. Pagination is for browsing long lists of generic items and should by no means be used as a navigation.</p>

			</div>

			<div class="example">
				<span class="ex">Example</span>
				<div class="simplePagination">
					<ul class="clearfix">
						<li><a href="#">Previous</a></li>
						<li>
							<select>
								<option>1</option>
								<option>2</option>
								<option selected="selected">3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
							</select>
						</li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>
			</div>

</div>
	
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'js/syntax/scripts/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	</div>
</body>
</html>

