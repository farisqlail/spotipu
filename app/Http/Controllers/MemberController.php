<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('frontend.member.member');
    }

    public function admin()
    {
        $member = Member::all();
        return view('admin.member.index', ['member' =>$member]);
    }

    public function bayar()
    {

        return view('frontend.member.pembayaran');
    }

    public function invoice()
    {

        return view('frontend.member.invoice');
    }

    public function checkout()
    {

        return view('frontend.member.checkout');
    }

    public function konfirmasi()
    {

        return view('frontend.member.konfirmasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $harga = 5000;
        // $admin = 1000;
        
        // $lama = $data->input('lama');
        // $tgl = $data->input('tglbeli');
        // $pbayar = $data->input('metodebayar');

        // $totalBayar = new Bayar();
        // $totalBayars = $totalBayar -> totalBayar($harga, $lama) + $admin;

        // $dateNow = date('d');
        // $lamaMember = $dateNow + $lama;
        // $hasilMember = $lamaMember . '-' . date('M-Y');

        // return view('frontend.member.invoice', compact('harga', 'admin','lama', 'hasilMember', 'tgl', 'pbayar', 'totalBayars'));

        $validator = Validator::make(request()->all(), [
            'name_member' => 'required',
            'description_member' => 'required',
            'price' => 'required',
            'account' => 'required'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Berhasil menambahkan member');

            $member = new Member();

            $member->name_member = $request->get('name_member');
            $member->description_member = $request->get('description_member');
            $member->price = $request->get('price');
            $member->account = $request->get('account');
           
            // dd($member);
            $member->save();

            return redirect()->route('admin.member.index');
        }

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
        $member = Member::findOrFail($id);
        return view('admin.member.edit', ['member' =>$member]);
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
        $validator = Validator::make(request()->all(), [
            'name_member' => 'required',
            'description_member' => 'required',
            'price' => 'required',
            'account' => 'required'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Berhasil menambahkan member');

            $member = Member::findOrFail($id);

            $member->name_member = $request->get('name_member');
            $member->description_member = $request->get('description_member');
            $member->price = $request->get('price');
            $member->account = $request->get('account');
           
            // dd($member);
            $member->save();

            return redirect()->route('admin.member.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('admin.member.index');
    }
}
