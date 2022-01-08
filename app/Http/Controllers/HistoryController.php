<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index(){

        $trans = Transaction::join('users', 'users.id', '=', 'transactions.id_user')
            ->join('members', 'members.id', '=', 'transactions.id_member')
            ->where('id_user', Auth::user()->id)
            ->get();
        $member = Member::all();
            // dd($trans);

        return view('frontend.history.index', [
            'trans' => $trans,
            'member' => $member 
        ]);
    }
}
