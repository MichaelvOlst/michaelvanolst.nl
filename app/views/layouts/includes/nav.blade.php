
<nav class="main-nav">
	<ul class="nav">
		@foreach ( $pages as $page)
			<li> {{ link_to($page->pages, $page->title, ['class' => set_active($page->pages)] ) }}</li>
		@endforeach
	 </ul>
</nav>