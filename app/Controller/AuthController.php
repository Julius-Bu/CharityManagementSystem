<?php 
 namespace App\Controller; 
 use App\Controller\BaseController;
use App\Models\User;
use System\Http\Request\Request;

class AuthController extends BaseController 
 { 

    public function authenticate(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        if(User::find($email, 'email')->doesNotExist())
        {
            return response()->json(202, 'Opps, account does not exist!');
        }

        $user = User::find($email, 'email')->get();

        if(!password()->verify($password, $user->password))
        {
            return response()->json(202, 'Opps, invalid email or password!');  
        }

        $response = [
            'alert' => "Authenticated"
        ];

        switch($user->account_type)
        {
            case 'admin': 
                $response['redirect'] = 'admin/dashboard';
                break;
            default: 
                $response['redirect'] = 'user/dashboard';
        }
        session(['user' => $user]);
        return response()->json(200, $response);
    }


    public static function isLoggedIn()
    {
        return (new self)->session()->contains('user');
    }

    public function logout()
    {
        return $this->session()->end('/');
    }
 }