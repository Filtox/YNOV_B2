@extends("application")

@section("page-title")
	{{ $current_deliverer->name }}
@endsection
@section("page-content")
	<div class="container d-flex justify-content-center">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">{{ "Deliverer : ".$current_deliverer->name }}</h5>
				<h6 class="card-subtitle mb-2 text-muted">{{ "Vehicle : ".$current_deliverer->vehicle }}</h6>

				<p class="mt-5">Works for:</p>
				<ul class="list-group mb-5">
					@foreach($current_deliverer->restaurants as $deliverable_restaurant)
						<li class="list-group-item" aria-current="true">{{ $deliverable_restaurant->name }}</li>
					@endforeach
				</ul>

				<div class="d-flex">
					<a href="{{ route("deliverer.edit", $current_deliverer) }}"
						 class="btn btn-outline-info card-link mr-3">Edit</a>
					<form action="{{ route("deliverer.destroy", $current_deliverer) }}" method="post">
						<input class="btn btn-outline-danger" type="submit" value="Delete"/>
						@method('delete')
						@csrf
					</form>
				</div>

			</div>
		</div>
	</div>
@endsection
