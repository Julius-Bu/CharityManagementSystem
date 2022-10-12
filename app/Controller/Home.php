<?php
namespace App\Controller;
use App\Controller\BaseController;
use System\Http\Request;

class Home extends BaseController
{
    
    protected $default = array(
        'email' => '',
        'first_name' => '',
        'last_name' => ''
    );
    
    public function index() {
        $default = array(
        'email' => '',
        'first_name' => '',
        'last_name' => '');
    
        $context = [
            'title' => 'HOME',
            'user' => !empty(session('user')) ? session('user') : array_to_object($default)
        ];
        return render('index', $context);
    }
}