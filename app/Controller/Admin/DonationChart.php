<?php 
 namespace App\Controller\Admin; 
 use App\Controller\BaseController;
use App\Models\FoodDonation;
use System\Database\DB;
use System\Http\Request\Request;

class DonationChart extends BaseController 
 { 
     protected $months = ["Months", "Jan", "Feb", "March", "April", "May", "June", "Jully",
      "Aug", "Sept", "Oct", "Nov", "Dec"];

    public function donationsCharts()
    {
        $request = new Request();
        $donation = $request->get('q');
        $is_specific_user = $request->get('specific', 0);

        $donationChart = array();

        for($i= 1; $i < count($this->months); $i++)
        {
            $query_month = "$i";
            if($i < 10)
            {
                $query_month = "0$i";
            }
            $num_donation = DB::table($donation)->where('month', $query_month)->count();
            if($is_specific_user == 1)
            {
                $user = $_SESSION['user'];
                $num_donation = DB::table($donation)->where('month', $query_month)
                ->where('email', $user->email)->count();  
            }
            $donationChart[] = array("month" => $this->months[$i], "donation" => $num_donation);
        }
        $chartKeys = array();

        foreach($donationChart as $chart)
        {
            array_push($chartKeys, array_keys($chart)); 
        }

        for($i = 1; $i < count($this->months); $i++)
        {
            if(key_exists($this->months[$i], $chartKeys))
            {
                array_push($donationChart, array("month" => $this->months[$i], "donation" => 0));
            }
        }
        echo json_encode($donationChart);
    }
 }