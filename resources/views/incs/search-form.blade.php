<h1 class="title center">Photo Gallery</h1>
<p class="subtitle center">Search over 850K awesome free high-resolution photos!</p>
<form method="POST" action="/search" class="form">
	@csrf
	<div class="form__group">
		<input type="text" class="form__input" id="photo" placeholder="Search Photo" name="keyword" required>
		<label for="photo" class="form__label">Search Photo</label>
	</div>
	<div class="u_margin_top_lg center">
		<button type="submit" class="btn btn_white">
			<svg width="28px" height="28px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="-" transform="translate(-1753.000000, -13.000000)" fill="#000" stroke="#000"> <g id="Group-3" transform="translate(1754.000000, 14.000000)"> <path d="M10.9871775,1.99692915 C15.961791,1.99692915 19.9739414,6.00966202 19.9739414,10.9849978 C19.9739414,15.9641085 15.961791,19.9768414 10.9871775,19.9768414 C6.01256398,19.9768414 2.00041363,15.9641085 2.00041363,10.9849978 C2.00041363,6.00966202 6.01256398,1.99692915 10.9871775,1.99692915 M10.9871775,0 C4.93309549,0 0,4.93003681 0,10.9849978 C0,17.0399588 4.93309549,21.9737705 10.9871775,21.9737705 C13.6556538,21.9737705 16.1052169,21.0111676 18.0112714,19.4219291 L24.2616204,25.6731856 C25.2014373,26.654663 26.654568,25.2013214 25.673233,24.261368 L19.422884,18.0101115 C21.0118918,16.1037803 21.974355,13.6538615 21.974355,10.9849978 C21.974355,4.93003681 17.0412595,0 10.9871775,0" id="Fill-1"/> </g> </g> </g></svg>
			Search
		</button>
	</div>
</form>