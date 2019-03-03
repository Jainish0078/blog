@extends('layout.master')

@Section('title' , 'Reputed Clients List')

@section('content')

    
   <section class="stores section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Reputed Clients List</h2>
				</div>
				<!-- First Letter -->
				<div class="block">
					<!-- Store First Letter -->
					<h5 class="store-letter">#</h5>
					<hr>
					<!-- Store Lists -->
					<div class="row">
						<!-- Store List 01 -->
						<div class="col-md-3 col-sm-6">
							<ul class="store-list">
								<li><a href="#">Kalathiya Engineering</a></li>
								<li><a href="#">Vraj Contruction</a></li>
								<li><a href="#">Aniraj Builder</a></li>
								<li><a href="#">Sky Spintex Pvt. Ltd.</a></li>
							</ul>	
						</div>
						<!-- Store List 02 -->
						<div class="col-md-3 col-sm-6">
							<ul class="store-list">
								<li><a href="#">Lathi NagarPalika</a></li>
								<li><a href="#">Vallabhipur NagarPalika</a></li>
								<li><a href="#">Damnagar NagarPalika</a></li>
								<li><a href="#">Morbi NagarPalika</a></li>
							</ul>	
						</div>
						<!-- Store List 03 -->
						<div class="col-md-3 col-sm-6">
							<ul class="store-list">
								<li><a href="#">Botad NagarPalika</a></li>
								<li><a href="#">1000 bulbs.com</a></li>
								<li><a href="#">180 packrat.com</a></li>
								<li><a href="#">3 day blinds</a></li>
							</ul>	
						</div>
						<!-- Store List 04 -->
						<div class="col-md-3 col-sm-6">
							<ul class="store-list">
								<li><a href="#">1 - 800 - Got - Junk?</a></li>
								<li><a href="#">1000 bulbs.com</a></li>
								<li><a href="#">180 packrat.com</a></li>
								<li><a href="#">3 day blinds</a></li>
							</ul>	
						</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection