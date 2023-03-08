<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class GameController extends Controller
{
    // show():to display all the data for the admin user pagination and search
    public function show(Request $request)
    {
        $search=$request['search'];
        $higher=$request['higher'];
        $lower=$request['lower'];

        if($search !="" || $higher !="")
        {
            $data=Game::where('Console','LIKE',"%$search%")->orWhere('Title','LIKE',"%$search%")->orderBy('price', 'DESC')->paginate(20);
        }
        else if($lower !="")
        {
            $data=Game::orderBy('price', 'ASC')->paginate(20);
        }
        else
        {
        $data=Game::latest()->paginate(20);
        }
        return view('admin.game',['games'=>$data,'search'=>$search]);
         
    }
    //  addCdData():'C'RUD 
    public function addGameData(Request $request)
    {
        // $game=new Game;
        // $game->Console=$request->Console;
        // $game->Title=$request->Title;
        // $game->Pegi=$request->Pegi;
        // $game->price=$request->price;
        //  $game->save();
        // return redirect('/game');

        $game = request()->validate([
            'Console' => 'required',
            'Title' =>'required',
            'Pegi' => 'required',
            'price' => 'required',
            
        ]);
        
        Game::create($game);
        return redirect('/game');
    }
    // deleteGameData():CRU'D' 
    public function deleteGameData($id)
    {
        
        
        $game=Game::find($id);
        $game->delete();
        return redirect('game');
    }
    public function updateShowGameData($id)
    {
        $data=Game::find($id);
        return view('admin.update_game',['game'=>$data]);

    }
    // updateGameData():CR'U'D
    public function updateGameData(Request $request)
    {
        $game=Game::find($request->id);
        $game->Console=$request->Console;
        $game->Title=$request->Title;
        $game->Pegi=$request->Pegi;
        $game->price=$request->price;
        $game->save();
        return redirect('/game');
    }

    // Usershow():to display all the data for the regular user with pagination and search 

    public function Usershow(Request $request)
    {
        $search=$request['search'];
        $higher=$request['higher'];
        $lower=$request['lower'];

        if($search !="" || $higher !="")
        {
            $data=Game::where('Console','LIKE',"%$search%")->orWhere('Title','LIKE',"%$search%")->orderBy('price', 'DESC')->paginate(20);
        }
        else if($search !="" ||$lower !="")
        {
            $data=Game::where('Console','LIKE',"%$search%")->orderBy('price', 'ASC')->paginate(20);
        }
        else
        {
        $data=Game::latest()->paginate(20);
        }
        return view('user.usergame',['games'=>$data,'search'=>$search]);
        
    }
}
