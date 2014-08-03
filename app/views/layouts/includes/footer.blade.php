<footer>
	<div class="social-contact">
		<ul>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	</div>
	
	<p class="copyright">Copyright Michaelvanolst | {{ link_to_route('login.index', 'Login') }}</p>

	
</footer>

{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
{{ HTML::script('assets/js/main.js') }}

@yield('scripts')
	
</body>
</html>