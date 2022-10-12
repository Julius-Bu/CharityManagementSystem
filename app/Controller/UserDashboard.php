<?php 
 namespace App\Controller; 
 use App\Controller\BaseController;
use App\Models\ClothesDonation;
use App\Models\FoodDonation;
use App\Models\OtherDonation;
use App\Models\Payment;
use App\Models\ShoesDonation;

class UserDashboard extends BaseController 
 { 

    public function index()
    {
        if(!AuthController::isLoggedIn())
        {
            return redirect();
        }

        $context = [
            'title' => "DASHBOARD",
            'user' => !empty(session('user')) ? session('user') : ''
        ];
        return render('users.index', $context);
    }

    public function userDonations($cat)
    {
        $user = $_SESSION['user'];
        $email = $user->email;
        $cat = strtolower($cat);
        switch($cat)
        {
            case 'food': 
                $collection = FoodDonation::join('users', 'food_donations.email', 'users.email')
                ->where('food_donations.email', $email)->orderBy('donated_at', 'DESC');
                break;
            case 'shoes': 
                $collection = ShoesDonation::join('users', 'shoes_donations.email', 'users.email')
                ->where('shoes_donations.email', $email)->orderBy('donated_at', 'DESC');
                break;

            case 'funds': 
                $collection = Payment::join('users', 'payments.email', 'users.email')
                ->where('payments.email', $email)->orderBy('donated_at', 'DESC');
                break; 
            case 'others': 
                $collection = OtherDonation::join('users', 'other_donations.email', 'users.email')
                ->where('other_donations.email', $email)->orderBy('donated_at', 'DESC');
                break;
            default: 
            $collection = ClothesDonation::join('users', 'clothes_donations.email', 'users.email')
            ->where('clothes_donations.email', $email)->orderBy('donated_at', 'DESC');
        }

        $context = [
            'title' => 'Donated Items',
            'cat' => $cat,
            'collection' => $collection->get(),
            'user' => !empty(session('user')) ? session('user') : ''
        ];

        return render('users.donations.listing', $context);
    }

    public function userDonationCharts()
    {
        $context = [
            'title' => "DASHBOARD | DONATION CHARTS",
            'user' => !empty(session('user')) ? session('user') : ''
        ];

        return render('users.donations.charts', $context);
    }

    public function userDonationsReport()
    {
        return render('users.donations.report', []);  
    }
 }