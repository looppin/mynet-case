<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Addresses;
use App\Models\Persons;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['persons'] = Persons::all()->sortBy('id');
        return view('backend.default.persons',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.default.addperson');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|min:3',
            'secondName' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'firstAddress' => 'required|min:3',
            'postcode' => 'required|postal_code:TR,NL,DE,FR,BE,USA|min:3',
            'city' => 'required|min:3',
            'country' => 'required|min:3',
        ]);

        $birthday = date('Y-m-d', strtotime($request->birthday));
        $person = Persons::insert([
            "name" => $request->firstName. ' '. $request->secondName,
            "birthday" => $birthday,
            "gender" => $request->gender
        ]);

        $Addresses = Addresses::insert([
            'person_id' => Persons::latest()->value('id'),
            'address' => $request->firstAddress,
            'post_code' => $request->postcode,
            'city_name' => $request->city,
            'country_name' => $request->country
        ]);

        if( $person && $Addresses )
        {
            return redirect(route('person.index'))->with('success','Kişi Kayıt Edildi!');
        }else{
            return back()->with('error','Kişi Kayıt Edilmedi!');
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
        $person = Persons::all()->where('id',$id)->first();
        $address = Addresses::all()->where('person_id',$id)->first();


        return view('backend.default.editperson')->with('person',$person)->with('address',$address);
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
        $request->validate([
            'firstName' => 'required|min:3',
            'secondName' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'firstAddress' => 'required|min:3',
            'postcode' => 'required|postal_code:TR,NL,DE,FR,BE,USA|min:3',
            'city' => 'required|min:3',
            'country' => 'required|min:3',
        ]);

        $birthday = date('Y-m-d', strtotime($request->birthday));
        $person = Persons::where('id',$id)->update([
            "name" => $request->firstName. ' '. $request->secondName,
            "birthday" => $birthday,
            "gender" => $request->gender
        ]);

        $Addresses = Addresses::where('person_id',$id)->update([
            'address' => $request->firstAddress,
            'post_code' => $request->postcode,
            'city_name' => $request->city,
            'country_name' => $request->country
        ]);

        if( $person && $Addresses )
        {
            return redirect(route('person.index'))->with('success','Kişi Güncellendi!');
        }else{
            return back()->with('error','Kişi Güncellenirken Hata Oluştu!');
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
        $person = Persons::find(intval($id));
        if ($person->delete())
        {
            return 1;
        }
        return 0;
    }
}
