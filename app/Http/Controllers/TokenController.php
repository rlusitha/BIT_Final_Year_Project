<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Token;
use Illuminate\Http\Request;
use PDF;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patient.index_token')->with([
            'patients' => $patients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $patients = Patient::all();
        // return view('patient.issue_token')->with([
        //     'patients' => $patients
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tokens = new Token([
            'patient_id' => $request['patient_id'],
            'patient_name' => $request['patient_name'],
            'token_number' => $request['token_number'],
            'token_date' => $request['token_date'],
        ]);

        $tokens->save();

        return redirect()->action('TokenController@getAllTokens');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function show(Token $token)
    {
        return view('patient.full_token')->with([
            'tokens' => $token
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function edit(Token $token)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Token $token)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function destroy(Token $token)
    {
        //
    }

    public function search($Key)
    {
        // dd($SearchKey);
        $patients = Patient::search($Key)->get();

        return view('patient.index_token', compact('patients'));
    }

    public function issueToken(Patient $id)
    {
        $date = date('Y-m-d');

        return view('patient.issue_token')->with([
            'patient_id' => $id->id,
            'patient_name' => $id->name,
            'token_date' => $date,
        ]);
    }

    public function getAllTokens()
    {
        $tokens = Token::all();

        return view('patient.show_token', compact('tokens'));
    }

    public function createPDF($id)
    {
        // set_time_limit(300);
        $tokens = Token::find($id);

        // view()->share('patients',$data);
        $pdf = PDF::loadView('patient.full_token', compact('tokens'));
        return $pdf->download('token.pdf');
    }
}
