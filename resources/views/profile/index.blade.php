@extends('layouts.default')
@section('content')

	<section id="main" class="pt-4 pb-4">
		<div class="container">

			@if ($message = Session::get('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ $message }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif

				<div class="company-box">
			    	<span>Компания: </span><h5><?= $company->name ?></h5>
			    	<span>Год основания: </span><h5><?= $company->founded_year ?></h5>
			    	<?php if ($company->logo !== '') : ?>
			    		<img src="/images/<?= $company->logo ?>" width="200">
			    	<?php else : ?>
			    		<div style="width: 200px; height: 200px; background-color: #ccc;"></div>
			    	<?php endif ?>
			    	<form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
			    		@csrf
			    		<input type="hidden" name="id" value="<?= $company->id ?>">
				    	<input type="file" name="image" class="form-control">
	                    <input type="submit" class="btn btn-success" value="<?= ($company->logo !== '') ? 'Изменить логотип' : 'Добавить логотип' ?>">
	                </form>
			    	<span>О компании: </span><h5><?= $company->description ?></h5>
			    	<form action="{{ route('info.update') }}" method="POST">
			    		@csrf
			    		<input type="hidden" name="id" value="<?= $company->id ?>">
			    		<textarea name="description" id="" cols="30" rows="10"><?= $company->description ?></textarea>
			    		<input type="submit" value="Сохранить">
			    	</form>

			    	
				</div>


		</div>
	</section>

@stop


