<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Contact;

class UserController extends Controller
{
    public function Donation()
    {
        return view('User.MyDonation');
    }
    public function submitDonation(Request $request)
    {
        $data=new Donation;

        $data->Yourname=$request->name;

        $data->Address=$request->address;

        $data->Email=$request->email;
        $data->FoodName=$request->foodname;
        $data->Category=$request->catogary;
        $data->Cookedtime=$request->cookedtime;

        $data->Quantity=$request->quantity;


        $data->Message=$request->message;
        

        $data->save();

        return redirect()->back()->with('message','donation Sucessfull');
}
public function Contact()
{
    return view('User.MyLocation');
}

public function submitContact(Request $request)
{
    $data=new Contact;

    $data->Fullname=$request->name;

    $data->Address=$request->address;

    $data->Email=$request->email;
    $data->PhoneNumber=$request->phone;
   
    $data->Message=$request->message;
    

    $data->save();

    return redirect()->back()->with('message','we will contact soon');
}
}
