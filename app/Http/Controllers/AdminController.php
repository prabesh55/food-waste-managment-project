<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Contact;
use App\models\Agent;
use Notification;
use App\Models\MyFirstNotification;


class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function MyDonation()
    {
       
        $data=Donation::all();
        return view('admin.Donation')->with('data',$data);

    }

    public function MyLocation()
    {
       
        $data=Contact::all();
        return view('admin.Contact')->with('data',$data);

    }

    public function search(Request $request)
    {
        $search= $request->search;
        $data=Donation::where('Yourname','Like','%'.$search.'%')->get();
        return view('admin.Donation')->with('data',$data);

    }

    public function DOedit(Request $request, $id)
    {
        $data =Donation::findOrFail($id);
        return view('admin.DOedit')->with('data',$data);;

    }

    public function roleupdate(Request $request, $id)
    {
        $data =Donation::find($id);
        $data->Yourname = $request->input('name');
        $data->Address = $request->input('address');
        $data->Email = $request->input('email');
        $data->FoodName = $request->input('foodname');
        $data->Quantity = $request->input('quantity');
        $data->Cookedtime = $request->input('cooktime');
        $data->Message = $request->input('message');
        
        $data->save();
        return redirect()->back()->with('message','User Updated Successfully');

    }



public function Contactedit(Request $request, $id)
{
    $data =Contact::findOrFail($id);
    return view('admin.contactedit')->with('data',$data);;

}

public function contactupdate(Request $request, $id)
{
    $data =Contact::find($id);
    $data->Fullname = $request->input('name');
    $data->Address = $request->input('address');
    $data->Email = $request->input('email');
    $data->PhoneNumber = $request->input('phone');
    $data->Message = $request->input('message');
    
    $data->save();
    return redirect()->back()->with('message','User Updated Successfully');

}



public function ManageAgent()
    {
        $data = Agent::all();
        return view ('admin.ManageAgent')->with('data', $data);
    }
 
    
    public function create()
    {
        return view('data.create');
    }

    public function AddAgent()
    {
        $data =Agent::all();
        return view ('admin.AddAgent')->with('data', $data);
    }


    public function uploadagent(Request $request)
    {
        $data = new Agent;
        $data->name=$request->name;

        $data->address=$request->address;
        $data->mobile=$request->mobile;
        $data->email=$request->email;
        $data->joindate=$request->joindate;
    
    
    
        $data->save();
    
        return redirect()->back()->with('message','Food Added Successfully');


    }

public function editAgent(Request $request, $id)
{
    $data =Agent::findorFail($id);
    return view('admin.editAgent')->with('data',$data);;

}

public function agentupdate(Request $request, $id)
{
    $data =Agent::find($id);
    $data->name = $request->input('name');
    $data->address = $request->input('address');
    $data->mobile = $request->input('mobile');
    $data->email = $request->input('email');
    $data->joindate = $request->input('joindate');
    
    $data->save();
    return redirect()->back()->with('message','User Updated Successfully');

}

public function Showemail()
{
    $data =Donation::all();
    return view ('admin.Showemail')->with('data', $data);
}




public function mail()
{
    $user=Donation::all();
    $details=[
        'greetings'=> $request->greetings,
        'body'=> $request->body,
        'actiontext'=> $request->actiontext,
        'actionurl'=> $request->actionurl,
        'lastline'=> $request->lastLine



    ];
    Notification::send($user,new MyFirstNotification($details) );
    dd('done');

}

public function Dodelete($id)
    {
        $data=Donation::find($id);
        $data->delete();
        return redirect()->back()->with('message',' Deleted');
    }
    public function Contactdelete($id)
    {
        $data=Contact::find($id);
        $data->delete();
        return redirect()->back()->with('message',' Deleted');
    }
    public function Agentdelete($id)
    {
        $data=Agent::find($id);
        $data->delete();
        return redirect()->back()->with('message',' Deleted');
    }
    





}



    

   






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
   

