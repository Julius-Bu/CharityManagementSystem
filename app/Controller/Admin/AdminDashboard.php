<?php 
 namespace App\Controller\Admin;

use App\Controller\AuthController;
use App\Controller\BaseController;
use App\Models\ClothesDonation;
use App\Models\FoodDonation;
use App\Models\OtherDonation;
use App\Models\Payment;
use App\Models\ShoesDonation;
use System\Database\DB;

class AdminDashboard extends BaseController 
 { 

    public function __construct()
    {
        if(!AuthController::isLoggedIn())
        {
            return redirect();
        }
    }
    public function index()
    {
        $context = [
            'title' => "DASHBOARD",
            'user' => session('user')
        ];


        return render('admin.index', $context);
    }

    public function donations($cat)
    {
        $cat = strtolower($cat);
        $columns = 'first_name, last_name, phone_number, donated_at, ';
        switch($cat)
        {
            case 'food':
                $columns .= 'food_donations.id, categories, is_public, donation_status';
                $collection = FoodDonation::join('users', 'food_donations.email', 'users.email')->orderBy('donated_at', 'DESC')->get($columns);
                break;
            case 'shoes': 
                $columns .= 'shoes_donations.id, quantity, is_public, donation_status';
                $collection = ShoesDonation::join('users', 'shoes_donations.email', 'users.email')
                ->orderBy('donated_at', 'DESC')->get($columns);
               
                break;

             case 'clothes': 
                $columns .= 'clothes_donations.id, categories,is_public, donation_status';
                $collection = ClothesDonation::join('users', 'clothes_donations.email', 'users.email')
                ->orderBy('donated_at', 'DESC')->get($columns);
                
                break;

            case 'funds': 
                $columns .= 'payments.id, amount, txt_ref, transaction_id, is_anonymous';
                $collection = Payment::join('users', 'payments.email', 'users.email')
                    ->orderBy('donated_at', 'DESC')->get($columns);
                
                break; 
            case 'others': 
                $columns .= 'other_donations.id, categories,is_public, donation_status';
                $collection = OtherDonation::join('users', 'other_donations.email', 'users.email')
                ->orderBy('donated_at', 'DESC')->get($columns);
                break;
            default: 
         
        }

        $context = [
            'title' => 'Donated Items',
            'cat' => $cat,
            'collection' => $collection,
            'user' => !empty(session('user')) ? session('user') : array_to_object(array())
        ];

 
        return render('admin.donations.listing', $context);
    }

    public function donationCharts()
    {
        $context = [
            'title' => "DASHBOARD | DONATION CHARTS",
            'user' => !empty(session('user')) ? session('user') : array_to_object(array())
        ];

        return render('admin.donations.charts', $context);
    }

    public function donationsReport()
    {
        return render('admin.donations.report', []);  
    }
 }