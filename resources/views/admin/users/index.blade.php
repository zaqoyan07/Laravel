@extends('admin/admin_template')

@section('content')


<div class="content-wrapper">
	<h2 class="text-center p-3">Բոլոր Օգտատերերը</h2>
	<table class="table">
		<thead class="text-center">
			<tr class="bg-dark">
				<th scope="col">id</th>
				<th scope="col">Անուն</th>
				<th scope="col">Էլ-փոստ</th>
				<th scope="col">Փոփոխել</th>
				<th scope="col">Հեռացնել</th>
			</tr>
		</thead>
		<tbody class="text-center">
			<?php 
			foreach ($users as $key => $value) {
				?>
				<tr>
					<td><?php echo $value['id'] ?></td>
					<td><?php echo $value['name'] ?></td>
					<td><?php echo $value['email'] ?></td>
					<td><a class="btn btn-outline-success w-100" href="{{ URL::to('admin/users/edit') }}/<?php echo  $value['id'] ?>">Փոփոխել</a> </td>
					<td><a class="btn btn-outline-danger w-100" href="{{ URL::to('admin/users/delete') }}/<?php echo  $value['id'] ?>">Հեռացնել</a> </td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
	<a class="btn btn-success col-12 my-3" href="{{ URL::to('admin/users/create') }}">Ավելացնել Նոր Օգտատեր</a>
</div>

<!-- <div class="container">

</div> -->
@endsection
