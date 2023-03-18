<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Services\CheckFormService;
use App\Http\Requests\StoreContactRequest;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $contacts = ContactForm::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->get();

        // ペジネーション対応
        // $contacts = ContactForm::select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        // ->paginate(20);

        // 検索対応
        $search = $request->search;
        $query = ContactForm::search($search);
        $contacts = $query->select('id','username','age','gender','pstartage','totalhistory','pianohon','soundproofhon','community')
        ->paginate(20);

        // return view('Contacts.index', compact('contacts','age','gender','pstartage','totalhistory','pianohon','soundproofhon'));
        return view('Contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        // dd($request, $request->name);
        
        ContactForm::create([
            'username' => $request->username,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender,
            'pstartage' => $request->pstartage,
            'totalhistory' => $request->totalhistory,
            'pianohon' => $request->pianohon,
            'soundproofhon' => $request->soundproofhon,
            'community' => $request->community,
        ]);

        return to_route('Contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactForm::find($id);

        $gender = CheckFormService::checkGender($contact);
        $age = CheckFormService::checkAge($contact);
        $pstartage = CheckFormService::checkPstartage($contact);     
        $totalhistory = CheckFormService::checkTotalhistory($contact);
        $pianohon = CheckFormService::checkPianohon($contact);
        $soundproofhon = CheckFormService::checkSoundproofhon($contact);

        return view('Contacts.show', compact('contact','age','gender','pstartage','totalhistory','pianohon','soundproofhon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactForm::find($id);

        return view('Contacts.edit', compact('contact'));
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
        $contact = ContactForm::find($id);
        $contact->username = $request->username;
        $contact->email = $request->email;
        $contact->age = $request->age;
        $contact->gender = $request->gender;
        $contact->pstartage = $request->pstartage;
        $contact->totalhistory = $request->totalhistory;
        $contact->pianohon = $request->pianohon;
        $contact->soundproofhon = $request->soundproofhon;
        $contact->community = $request->community;
        $contact->save();

        return to_route('Contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactForm::find($id);
        $contact->delete();

        return to_route('Contacts.index');
    }
}
