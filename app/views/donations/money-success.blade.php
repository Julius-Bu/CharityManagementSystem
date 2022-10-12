@extends('base')

@section('content')

<div class="container mt-3">
	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="card card-body shadow">
				<h4 class="text-success">Thank you, 
                    <span class="text-warning">{{ $user->first_name . " " .  $user->last_name}}</span>
                 for your donation of {{ number_format($user->amount)}} (UGX) to 
                Sanyu Babies Home. <i class="fas fa-heart text-danger"></i></h4>
			</div>
		</div>
	</div>
</div>

@endsection