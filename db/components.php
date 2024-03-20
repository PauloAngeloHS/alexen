<?php
function navigation()
{
	$banana = true;
?>
	<header id="header">
		<span id="title">Banana</span>
		<div id="header-side">
			<?php if ($banana) : ?>
				<button class="nav-button">Login</button>
			<?php else : ?>
				<button class="nav-button">Logout</button>
			<?php endif; ?>
			<div>
	</header>
<?php
}
function footer()
{
?>
	<footer>
		<span>Pudding</span>
	</footer>
<?php
}
?>
