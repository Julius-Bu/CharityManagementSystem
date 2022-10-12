<?php 
 namespace App\Controller; 
 use App\Controller\BaseController;
use App\Models\ClothesDonation;
use App\Models\FoodDonation;
use App\Models\OtherDonation;
use App\Models\Payment;
use App\Models\ShoesDonation;
use App\Models\User;
use System\Http\Request\Request;

class DonationController extends BaseController 
 { 

    protected $default = array(
        'email' => '',
        'first_name' => '',
        'last_name' => '',
        'phone_number' => ''
    );

    public function donateMoney()
    {
        $context = [
            'title' => 'DONATE MONEY',
            'user' => !empty(session('user')) ? session('user') : array_to_object($this->default)
        ];

        return render('donations.money', $context);
    }

    
    public function createAccount()
    {
        $context = [
            'title' => 'CREATE ACCOUNT'
        ];

        return render('account', $context); 
    }

    public function donateClothes()
    {
        $context = [
            'title' => 'DONATE CLOTHES',
            'user' => !empty(session('user')) ? session('user') : array_to_object($this->default)
        ];
// value="{{ $user->email !== '' ? $user->email : '' }}"
        return render('donations.clothes', $context);
    }


    public function donateFood()
    {
        $context = [
            'title' => 'DONATE SHOES',
            'user' => !empty(session('user')) ? session('user') : array_to_object($this->default)
        ];

        return render('donations.food', $context);
    }

    public function donateShoes()
    {
        $context = [
            'title' => 'DONATE FOOD',
            'user' => !empty(session('user')) ? session('user') : array_to_object($this->default)
        ];

        return render('donations.shoes', $context);
    }

    public function storeDonations(Request $request)
    {
        $userSaved = $this->createUserAccount($request);
        if(!$userSaved)
        {
            return response()->send(202, alert()->failure("Failed to initiate the donating proccess! Please refresh the page and try again."));
        }

        $category = $request->post('cat');

        $donation = [
            'email' => $request->post('email'),
            'categories' => implode(',', $request->body->categories),
            'expected_on' => $request->post('expected_donation_date'),
            'month' => date('m'),
            'is_public' => $request->post('consent')
        ];

        switch(intval($category))
        {
            case 2: 
                $donation = [
                    'email' => $request->post('email'),
                    'quantity' => $request->post('quantity'),
                    'expected_on' => $request->post('expected_donation_date'),
                    'month' => date('m'),
                    'is_public' => $request->post('consent')
                ];
                $donate = new ShoesDonation($donation);
                $category = "Shoes";
                break;
            case 3: 
                $donate = new FoodDonation($donation);
                $category = "Food";
                break;
            
            case 4: 
                $donate = new OtherDonation($donation);
                $category = "Items";
                break;
            default: 
                $donate = new ClothesDonation($donation);
                $category = "Clothes";
        }

        if(!$donate->save())
        {
            return response()->send(202, alert()->failure("Failed to complete the donating proccess! Please try again later."));
        }

        return response()->send(200, alert()->success("Donated {$category} successfully! Thank you for donating to Sanyu Babies' Home <i class='fas fa-heart text-danger'></i> "));
    }

    protected function createUserAccount($request)
    {
        $fname = $request->post('fname');
        $lanme = $request->post('lname');

        $email = $request->post('email');
        $phone = $request->post('phone');

        $password = password()->hash($email);

        $user = [
            'email' => $email,
            'first_name' => $fname,
            'last_name' => $lanme,
            'phone_number' => $phone,
            'user_agent' => $this->server()->browser()->agent,
            'password' => $password
        ];
        if(User::find($email, 'email')->exists())
        {
            return true;
        }
        $newUser = new User($user);
        return $newUser->save();
    }


    public function donatedItems($cat)
    {
        $cat = strtolower($cat);
        switch($cat)
        {
            case 'food': 
                $collection = FoodDonation::join('users', 'food_donations.email', 'users.email')
                ->where('is_public', 1)->orderBy('donated_at', 'DESC');
                break;
            case 'shoes': 
                $collection = ShoesDonation::join('users', 'shoes_donations.email', 'users.email')
                ->where('is_public', 1)->orderBy('donated_at', 'DESC');
                break;
            case 'funds': 
                $collection = Payment::join('users', 'payments.email', 'users.email')
                ->where('is_anonymous', 1)->orderBy('donated_at', 'DESC');
                break; 
            case 'others': 
                $collection = OtherDonation::join('users', 'other_donations.email', 'users.email')
                ->where('is_public', 1)->orderBy('donated_at', 'DESC');
                break;
            default: 
            $collection = ClothesDonation::join('users', 'clothes_donations.email', 'users.email')
            ->where('is_public', 1)->orderBy('donated_at', 'DESC');
        }

        $context = [
            'title' => 'Donated Items',
            'cat' => $cat,
            'collection' => $collection->get(),
            'user' => !empty(session('user')) ? session('user') : array_to_object($this->default)
        ];

        return render('donations.public_list', $context);
    }

    public function successfullMoneyDonation()
    {
        $context = [
            'title' => "Successful Money Donation",
            'user' => session('user')
        ];
        return render('donations.money-success', $context);
    }

    public function otherDonations()
    {
        $context = [
            'title' => 'OTHET DONATIONS',
            'user' => !empty(session('user')) ? session('user') : array_to_object($this->default)
        ];

        return render('donations.others', $context);
    }

    public function updateStatus($id,$table_name)
    {
         $data = [
            'donation_status'=>'Received'
         ];

        if($table_name == "clothes")

            ClothesDonation::where('id',$id)->update($data);

        elseif($table_name == "food")

           FoodDonation::where('id',$id)->update($data);

        elseif($table_name == "others")

            OtherDonation::where('id',$id)->update($data);

        elseif($table_name == "funds")

            Payment::where('id',$id)->update($data);
            
        elseif($table_name == "shoes")

            ShoesDonation::where('id',$id)->update($data);

        return redirect()->back();
    }
 }