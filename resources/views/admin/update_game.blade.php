@extends('base')
    @section('content')
         <!-- Update:Game -->
    <h1>Update Data</h1>
            <form action="/edit_game" method="POST"  class="add">
                @csrf
                <input type="hidden" name="id" value="{{$game['id']}}">
                Author/Artist/Console<input type="text" name="Console" id="Console" value="{{$game['Console']}}" required>
                Title<input type="text" name="Title" id="Title" value="{{$game['Title']}}" required>
                Pages/Duration/Pegi<input type="text" name="Pegi" id="Pegi"  value="{{$game['Pegi']}}" required>
                Price<input type="text" name="price" id="price" value="{{$game['price']}}" required>
                <button class="cate-btn">Update</button>
                
            </form>

        

    @endsection