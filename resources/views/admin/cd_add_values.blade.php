@extends('base')
    @section('content')
        <!-- Add Data -CD -->
    <h1>Add Your Data</h1>
            <form action="/cd" method="POST"  class="add">
                @csrf
                Author/Artist/Console<input type="text" name="Artist" id="Artist" required>
                Title<input type="text" name="Title" id="Title" required>
                Pages/Duration/Pegi<input type="minute" name="Duration" id="Duration" required>
                Price<input type="number" name="price" id="price" required>
                <button class="cate-btn">Submit</button>
                <a href="{{url('/cd')}}"><button class="cate-btn" type="button">Go Back</button></a> 
                
            </form>

        

    @endsection