<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Transaction;
use App\Models\Member;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $member = Member::findOrFail($id);
// dd($member);
        return view('frontend.member.pembayaran', ['member' => $member]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Alert::success('Berhasil', 'Music berhasil ditambahkan');

        $paket = $request->get('paket');
        $dateNow = date('d');
        $lamaMember = $dateNow + $paket;
        $hasilMember = date('Y-m'). '-' .'0'.$lamaMember ;
        // dd($hasilMember);
        
        $transaction = new Transaction();

        $transaction->id_user = $request->get('id_user');
        $transaction->id_member = $request->get('id_member');
        $transaction->method = $request->get('method');
        $transaction->active = date('Y-m-d');
        $transaction->duedate = $hasilMember;
        $transaction->total = $request->get('total');

        // dd($music);
        $transaction->save();

        return redirect()->route('frontend.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
