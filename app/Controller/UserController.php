<?php 
 namespace App\Controller; 
 use App\Controller\BaseController;
use App\Models\User;
use \System\Http\Request\Request; 

 class UserController extends BaseController 
 { 
	 
		public function __construct()
		{
			if(!AuthController::isLoggedIn())
			{
				return redirect();
			}
		}
 		/**
		* Display a listing of the resource.
		* @return \System\Http\Response\Response
		*/
		public function index()
		{
			$context = [
				'title' => "Users All",
				'collection' => User::all(),
				'user' => !empty(session('user')) ? session('user') : array_to_object(array())
			];

			return render('users.list', $context);

 		}

		/**
		* Show the form for creating a new resource.
		* @return \System\Http\Response\Response
		*/
		public function create()
		{
			// 
 		}

		/**
		* Store a newly created resource in storage.
		* @param \System\Http\Request\Request $request
		* @return \System\Http\Response\Response
		*/
		public function store(Request $request)
		{
			$fname = $request->post('fname');
			$lanme = $request->post('lname');
			$email = $request->post('email');
			$phone = $request->post('phone');

			$password = password()->hash($request->post('password'));

			$user = [
				'email' => $email,
				'first_name' => $fname,
				'last_name' => $lanme,
				'phone_number' => $phone,
				'password' => $password
			];

			if(User::find($email, 'email')->doesNotExist())
			{
				$newUser = new User($user);
				$message = alert()->success("Your account was created successfully!");
				if(!$newUser->save())
				{
					$message = alert()->failure("Failed to create your account!");
				}

				return response()->send(200, $message);
			}

			if(!User::find($email, 'email')->update($user))
			{
				return response()->send(202, alert()->failure('Accont not created!'));
			}

			return response()->send(200, alert()->success('Accont created successfully!'));


 		}

		/**
		* Display the specified resource.
		* @param int|string $id
		* @return \System\Http\Response\Response
		*/
		public function show($id)
		{
			// 

 		}

		/**
		* Show the form for editing the specified resource.
		* @param int|string $id
		* @return \System\Http\Response\Response
		*/
		public function edit($id)
		{
			// 

 		}

		/**
		* Update the specified resource in storage.
		* @param \System\Http\Request\Request $request
		* @return \System\Http\Response\Response
		*/
		public function update(Request $request)
		{
			$account = $request->post('account');
			$email = $request->post('user');
			$data = [
				'account_type' => $account
			];

			$updated = User::find($email, 'email')->update($data);
			if(!$updated)
			{
				$message = "Account type not changed! Please try again later!";
				return response()->send(201, alert()->danger($message));
			}
			
			$account = strtoupper($account);

			return response()->send(200, alert()->success("Account type changed to {$account} successfully!"));

 		}

		/**
		* Remove the specified resource from storage.
		* @param int|string $id
		* @return \System\Http\Response\Response
		*/
		public function destroy($id)
		{
			// 

 		}

}