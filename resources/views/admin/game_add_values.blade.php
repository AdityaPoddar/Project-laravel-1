@extends('base')
    @section('content')
        <!-- Add Data -GAME -->
    <h1>Add Your Data</h1>
            <form action="/game" method="POST"  class="add">
                @csrf
                Author/Artist/Console<input type="text" name="Console" id="Console" required>
                Title<input type="text" name="Title" id="Title" required>
                Pages/Duration/Pegi<input type="number" name="Pegi" id="Pegi" required>
                Price<input type="number" name="price" id="price" required>
                <button class="cate-btn">Submit</button>
                <a href="{{url('/game')}}"><button class="cate-btn" type="button">Go Back</button></a> 
                
            </form>

        

    @endsection