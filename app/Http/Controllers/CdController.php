<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cd;
use DB;

class CdController extends Controller
{
    // show():to display all the data for the admin user pagination and search
    public function show(Request $request)
    {
        $search=$request['search'];
        $higher=$request['higher'];
        $lower=$request['lower'];
        if($search !="" || $higher !="")
        {
            $data=Cd::where('Artist','LIKE',"%$search%")
            ->orWhere('Title','LIKE',"%$search%")->orderBy('price', 'DESC')->paginate(20);
        }
        else if($search !="" ||$lower !="")
        {
            $data=Cd::where('Artist','LIKE',"%$search%")->orderBy('price', 'ASC')->paginate(20);
        }
        else
        {
        $data=Cd::latest()->paginate(20);
        }
        return view('admin.cd',['search'=>$search,'cds'=>$data]);
    }
    //  addCdData():'C'RUD 
    public function addCdData(Request $request)
    {
        // $cd=new Cd;
        // $cd->Artist=$request->Artist;
        // $cd->Title=$request->Title;
        // $cd->Duration=$request->;
        // $cd->price=$request->price;
        //  $cd->save();
        // return redirect('/cd');

        $cd = request()->validate([
            'Artist' => 'required',
            'Title' =>'required',
            'Duration' => 'required',
            'price' => 'required',
            
        ]);
        
        Cd::create($cd);
        return redirect('/cd');
    }
     // deleteCdData():CRU'D' 
    public function deleteCdData($id)
    {
        
        $cd=Cd::find($id);
        if($cd !=null)
        {
        $cd->delete();
        return redirect('cd');
        }
        echo "no value";
    }

    public function updateShowCdData($id)
    {
        $data=Cd::find($id);
        return view('admin.update_cd',['cd'=>$data]);

    }
    // updateBookData():CR'U'D 
    public function updateCdData(Request $request)
    {
        $cd=Cd::find($request->id);
        $cd->Artist=$request->Artist;
        $cd->Title=$request->Title;
        $cd->Duration=$request->Duration;
        $cd->price=$request->price;
         $cd->save();
        
        return redirect('/cd');
    }
// Usershow():to display all the data for the regular user with pagination and search 

public function Usershow(Request $request)
    {
        $search=$request['search'];
        $higher=$request['higher'];
        $lower=$request['lower'];

        if($search !="" || $higher !="")
        {
            $data=Cd::where('Artist','LIKE',"%$search%")->orWhere('Title','LIKE',"%$search%")->orderBy('price', 'DESC')->paginate(20);
        }
        else if($search !="" ||$lower !="")
        {
            $data=Cd::where('Artist','LIKE',"%$search%")->orderBy('price', 'ASC')->paginate(20);
        }
        else
        {
        $data=Cd::latest()->paginate(20);
        }
        return view('user.usercd',['cds'=>$data,'search'=>$search]);
        
    }
}
