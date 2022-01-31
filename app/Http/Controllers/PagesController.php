<?php
namespace App\Http\Controllers;

class PagesController extends Controller {
    public function index(){
        return view('pages.user.dashboard');
    }

    public function login(){
        return view('pages.login');
    }

    public function orderPage(){
        return view('pages.user.orders.index');
    }

    public function DealerComplainForm(){
        return view('pages.user.complain.dealer-complain');
    }

    public function SalesLeadPage(){
        return view('pages.user.sales.index');
    }

    public function TransactionPage(){
        return view('pages.user.transactions.transactions');
    }

    public function SalesLeadForm(){
        return view('pages.user.sales.form');
    }

    public function FeedbackPage(){
        return view('pages.user.feedback.index');
    }

    public function OthersPage(){
        return view('pages.user.others.index');
    }
}
?>