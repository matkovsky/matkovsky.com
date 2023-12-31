<?php
	date_default_timezone_set("UTC");
	$age_of_mine = (date("Y", (time() - mktime(00, 00, 00, 05, 05, 1988)))) - 1970;
?>
<!doctype html>
<html lang="en">
<head>

	<?php include_once(__DIR__ . '/snippets/head.php') ?>
	<title>Peter Matkovsky</title>
	<meta name="description" content="All the important info and contact details about Peter Matkovsky from Budapest, Hungary.">

</head>
<body>

	<div id="comp">

		<header>
			<img src="/img/portrait.png" alt="Portrait of Peter">
			<h1>Peter Matkovsky</h1>
		</header>

		<article>
			<section id="personal">
				<p>is a <?php echo $age_of_mine; ?> year old frontend developer and web-oriented UX expert from Budapest. He's the co-founder of <a href="https://kuix.co">kuix</a>, a small company of web experts who are passionate about good UX design and professional web apps.</p>
				<p>He also loves coffee.</p>
			</section>

			<section id="social">
				<p>is mostly active on these social networks:</p>
				<ul>
					<li><a href="https://mastodon.world/@matkovsky" rel="me"><img src="/img/social/mastodon.png"><span>Mastodon</span></a></li>
					<li><a href="https://instagram.com/pmatkovsky" rel="me"><img src="/img/social/instagram.png"><span>Instagram</span></a></li>
					<li><a href="https://open.spotify.com/user/11124146557" rel="me"><img src="/img/social/spotify.png"><span>Spotify</span></a></li>
					<li><a href="https://facebook.com/matkovsky" rel="me"><img src="/img/social/facebook.png"><span>Facebook</span></a></li>
					<li><a href="https://twitter.com/matkovsky" rel="me"><img src="/img/social/twitter.png"><span>Twitter</span></a></li>
					<li><a href="https://linkedin.com/in/matkovsky" rel="me"><img src="/img/social/linkedin.png"><span>LinkedIn</span></a></li>
					<li><a href="https://dribbble.com/matkovsky" rel="me"><img src="/img/social/dribbble.png"><span>Dribbble</span></a></li>
					<li><a href="https://vimeo.com/matkovsky" rel="me"><img src="/img/social/vimeo.png"><span>Vimeo</span></a></li>
					<li><a href="https://youtube.com/matkovskyp" rel="me"><img src="/img/social/youtube.png"><span>YouTube</span></a></li>
				</ul>
			</section>

			<section id="contact">
				<p>has an awesome email address too:<br>
				<script>
					//<![CDATA[
					eval(unescape('%76%61%72%20%73%3D%27%61%6D%6C%69%6F%74%70%3A%74%65%72%65%6D%40%74%61%6F%6B%73%76%79%6B%63%2E%6D%6F%27%3B%76%61%72%20%72%3D%27%27%3B%66%6F%72%28%76%61%72%20%69%3D%30%3B%69%3C%73%2E%6C%65%6E%67%74%68%3B%69%2B%2B%2C%69%2B%2B%29%7B%72%3D%72%2B%73%2E%73%75%62%73%74%72%69%6E%67%28%69%2B%31%2C%69%2B%32%29%2B%73%2E%73%75%62%73%74%72%69%6E%67%28%69%2C%69%2B%31%29%7D%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%27%3C%61%20%68%72%65%66%3D%22%27%2B%72%2B%27%22%3E%70%65%74%65%72%40%6D%61%74%6B%6F%76%73%6B%79%2E%63%6F%6D%3C%2F%61%3E%27%29%3B'))
					//]]>
				</script>.</p>
			</section>

		</article>

	</div>

	<?php include_once(__DIR__ . '/snippets/foot.php') ?>

</body>
</html>