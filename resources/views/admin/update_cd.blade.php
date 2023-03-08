@extends('base')
    @section('content')
         <!-- Update:Cd -->
    <h1>Update Data</h1>
            <form action="/edit_cd" method="POST"  class="add">
                @csrf
                <input type="hidden" name="id" value="{{$cd['id']}}">
                Author/Artist/Console<input type="text" name="Artist" id="Artist" value="{{$cd['Artist']}}" required>
                Title<input type="text" name="Title" id="Title" value="{{$cd['Title']}}" required>
                Pages/Duration/Pegi<input type="text" name="Duration" id="Duration"  value="{{$cd['Duration']}}" required>
                Price<input type="text" name="price" id="price" value="{{$cd['price']}}" required>
                <button class="cate-btn">Update</button>
                
            </form>

        

    @endsection