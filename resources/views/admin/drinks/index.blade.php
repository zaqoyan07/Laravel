@extends('admin/admin_template')

@section('content')


<div class="content-wrapper">
	<table class="table">
		<thead class="text-center">
			<tr class="bg-dark">
				<th scope="col">Անվանում</th>
				<th scope="col">Նկար</th>
				<th scope="col">Նկարագրություն</th>
				<th scope="col">Չափս</th>
				<th scope="col">Գին</th>
				<th scope="col">Փոփոխել</th>
				<th scope="col">Հեռացնել</th>
			</tr>
		</thead>
		<tbody class="text-center">
			<?php 
			foreach ($drinks as $key => $value) {
				?>
				<tr>
					<td><?php echo $value['title'] ?></td>
					<td><?php echo $value['image'] ?></td>
					<td><?php echo $value['description'] ?></td>
					<td><?php echo $value['size'] ?></td>
					<td><?php echo $value['price'] ?></td>
					<td><a class="btn btn-outline-success w-100" href="{{ URL::to('admin/drinks/edit') }}/<?php echo  $value['id'] ?>">Փոփոխել</a> </td>
					<td><a class="btn btn-outline-danger w-100" href="{{ URL::to('admin/drinks/delete') }}/<?php echo  $value['id'] ?>">Հեռացնել</a> </td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
	<a class="btn btn-success col-12 my-3" href="{{ URL::to('admin/drinks/create') }}">Ավելացնել</a>
</div>

<!-- <div class="container">

</div> -->
@endsection

