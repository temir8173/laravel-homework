@extends('layouts.default')
@section('content')

	<section id="main" class="pt-4 pb-4">
		<div class="container">

			<?php foreach ($companies as $company) : ?>

				<div class="company-box">
			    	<span>Компания: </span><h5><?= $company->name ?></h5>


			    	<span>Сотрудники: </span>

		    		<?php if ( count($company->employees) !== 0 ) : ?>

		    			<table class="table table-striped table-bordered">

		    				<thead>
							<tr>
								<th style="width: 3%;">#</th>
								<th style="width: 20%">Имя</th>
								<th style="width: 20%">Инфо</th>
								<th style="width: 20%">Зарплата</th>
								<th style="width: 20%">Должность</th>
							</tr>
							</thead>
							<tbody>
			    				<?php foreach ($company->employees as $key => $employee) : ?>
			    					<tr>
			    						<td><?= $key+1 ?></td>
			    						<td><?= $employee->name ?></td>
			    						<td><?= $employee->about ?></td>
			    						<td><?= $employee->salary ?></td>
			    						<td><?= $employee->position->name ?></td>
			    					</tr>
						    	<?php endforeach; ?>
					    	</tbody>

		    			</table>

		    		<?php endif; ?>
			    	
				</div>

			<?php endforeach; ?>

		</div>
	</section>

@stop


