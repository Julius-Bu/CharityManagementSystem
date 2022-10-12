@extends('base')

@section('content')

<div class="container mt-3">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="card card-body shadow">
				<div class="row">
					<div class="col-lg-6">
						<img src="{{ asset('imgs/site/money.jpg') }}" class="img" width="100%"/>
						<h3>Sanyu Babies Home <i class="fas fa-check-circle text-success"></i> </h3>
						<h5 class="text-muted">
							Hello, welcome to Sanyu Babies Home. Please fill in the required details in the form provided in order to continue and donate to children at <span class="text-success">Sanyu Babies Home <i class="fas fa-heart text-danger"></i> </span>
						</h5>
					</div>

					<div class="col-lg-6">
						<div class="mb-3" id="donate">
							@csrf
							
							<span class="text-success font-weight-bolder">The donations are allowed in UGX shillings</span>
								<hr>
							<a href="https://dashboard.flutterwave.com/donate/fexdgeyiz6gg" class="btn btn-success">  Donate Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection