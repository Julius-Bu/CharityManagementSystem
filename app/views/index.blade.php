@extends('base')
@section('content')
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="co-lg-8">
                    <div class="card card-body shadow">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <img src="{{ asset('imgs/icons/logo.png') }}" alt="site logo"/>
                                    <h3 class="text-pup">Sanyu Babies Home <i class="fas fa-check-circle text-success"></i> </h3>
                                </div>
                                <form action="{{ url('auth/user') }}" method="post" id="loginForm">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username" class="w-100">Email 
                                            <i class="fas fa-user text-success"></i> 
                                            <input type="email" name="email" class="form-control bg-light" 
                                            placeholder="someone@example.com" autocomplete="off" required/>
                                        </label>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="w-100">Password
                                            <div class="input-group">
                                                <a href="javascript:void(0)" class="text-success" id="show-password"><i class="fas fa-eye-slash text-success"></i></a>
                                                <a href="javascript:void(0)" class="text-success d-none" id="hide-password"><i class="fas fa-eye text-success"></i></a>
                                            </div>
                                            <input type="password" name="password" id="password" 
                                            placeholder="password" class="form-control bg-light"
                                             autocomplete="off" required/>
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success w-100 login-btn">LOGIN</button>
                                    </div>
                                </form>
                                <div class="response"></div>
                            </div>

                            <div class="col-lg-6">
                                <h4 class="text-success">Choose Item to Donate <i class="fas fa-heart text-danger"></i> </h4>
                                <div class="row">
                                    <div class="col-lg-6 mt-3">
                                        <div class="card card-body shadow h-100 zoom">
                                            <img src="{{ asset('imgs/site/food-charity.jpg') }}" class="card-img img-responsive"/>
                                            <a href="{{ url('donations/food') }}" class="stretched-link text-pup"><h5>Food</h5></a>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 mt-3">
                                        <div class="card card-body shadow h-100 zoom">
                                            <img src="{{ asset('imgs/site/clothes.jpeg') }}" class="card-img img-responsive"/>
                                            <a href="{{ url('donations/clothes') }}" class="stretched-link text-pup"><h5>Clothes</h5></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-3">
                                        <div class="card card-body shadow h-100 zoom">
                                            <img src="{{ asset('imgs/site/shoes.jpeg') }}" class="card-img img-responsive"/>
                                            <a href="{{ url('donations/shoes') }}" class="stretched-link text-pup"><h5>Shoes</h5></a>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 mt-3">
                                        <div class="card card-body shadow h-100 zoom">
                                            <img src="{{ asset('imgs/site/money.jpg') }}" class="card-img img-responsive"/>
                                            <a href="{{ url('donations/funds') }}" class="stretched-link text-pup"><h5>Funds</h5></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection