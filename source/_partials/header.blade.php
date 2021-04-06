	<header class="header">
		<div class="header__top">
			<div class="header__brand">
				<a href="/"><span>{{ $page->site->title }}</span></a>
			</div>

			<nav>
				<ul class="header__nav">
					<li class="header__navitem"><a href="/about">About</a></li>
					<li class="header__navitem"><a href="mailto:hi@jaysbrowne.com">Email</a></li>
				</ul>
			</nav>
		</div>
		<hr />
		<div class="header__bottom">
			<span>{{ $page->site->role }}</span>
		</div>
	</header>


