@extends('layouts.default')
@section('content')

	<section id="main" class="pt-4 pb-4">
		<div class="container">


				<div class="company-box">
			    	<span>Компания: </span><h5><?= $company->name ?></h5>
			    	<span>О компании: </span><h5><?= $company->about ?></h5>
			    	<span>Год основания: </span><h5><?= $company->founded_year ?></h5>

			    	
				</div>


		</div>
	</section>

@stop


