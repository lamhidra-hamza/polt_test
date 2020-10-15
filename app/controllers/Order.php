<?php

class Order extends Controller {
    public function __construct() {
       
    }

    public function index(){
        $data = [
            'pickup' => 'Paris center',
            'destination' => 'Outside Paris',
            'amount' => '10',
            'currensy' => '$',
        ];
        $this->view('order/index', $data);
    }

    // public function about() {
    //     $this->view('pages/about');
    // }
}