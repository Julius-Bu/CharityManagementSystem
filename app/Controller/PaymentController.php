<?php 
 namespace App\Controller; 
 use App\Controller\BaseController;
use App\Models\Payment;
use App\Models\User;
use System\Http\Request\Request;

class PaymentController extends BaseController 
 { 

    public function initPaymentProcess(Request $request)
    {
        if(!$this->createUserAccount($request))
        {
            return response()->json(202, 'Failed to initiate the transaction.
             Please reflesh the page and try again');
        }
        return response()->json(200, 'success');
        
    }


    public function verifyPayment()
    {
        $request = new Request();
        $status = $request->get('status');
        $tx_ref = $request->get('tx_ref');
        $transaction_id = $request->get('transaction_id');

        if($status !== 'successful')
        {
            $error = "Payment operation failed! Please re-initiate the process";
            session(['paymentError' => $error]);
            return redirect('donations.money');
        }

        $user = $_SESSION['user'];

        $paymentData = [
            'email' => $user->email,
            'amount' => $user->amount,
            'txt_ref' => $tx_ref,
            'transaction_id' => $transaction_id,
            'is_anonymous' => $user->consent,
            'month' => date('m')
        ];

        print_r($user);

        $payment = new Payment($paymentData);

        if($payment->save())
        {
            unset($_SESSION['paymentDetails']);
            return redirect('donations.money.success');
        }

    }

    protected function createUserAccount($request)
    {
        $fullName = $request->post('fullName');
        $fullName = explode(' ', $fullName);
        $fname = $fullName[0];
        $lanme = $fullName[1];
        if(count($fullName) > 2)
        {
            $lanme = $fullName[1] . " " . $fullName[2];
        }
        $email = $request->post('email');
        $phone = $request->post('phoneNumber');

        $password = password()->hash($request->post('password', $request->post('email')));

        $user = [
            'email' => $email,
            'first_name' => $fname,
            'last_name' => $lanme,
            'phone_number' => $phone,
            'password' => $password
        ];

        if(User::find($email, 'email')->exists())
        {
            $user['consent'] = $request->post('consent', 0);
            $user['amount'] = $request->post('amount');
            session(['user' => array_to_object($user)]);
            return true;
        }
        $newUser = new User($user);
        $user['consent'] = $request->post('consent', 0);
        $user['amount'] = $request->post('amount');
        session(['user' => array_to_object($user)]);
        return $newUser->save();
    }
 }
