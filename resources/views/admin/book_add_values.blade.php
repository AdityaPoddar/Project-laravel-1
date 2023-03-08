@extends('base')
    @section('content')
        <!-- Add Data -BOOK -->
    <h1>Add Your Data</h1>
            <form action="/book" method="POST" class="add">
                @csrf
                Author/Artist/Console<input type="text" name="Author" id="Author" required>
                Title<input type="text" name="Title" id="Title" required>
                Pages/Duration/Pegi<input type="number" name="Pages" id="Pages" required>
                Price<input type="number" name="price" id="price" required>
                <button class="cate-btn">Submit</button>
             <a href="{{url('/book')}}"><button class="cate-btn" type="button">Go Back</button></a> 
                
            </form>

        

    @endsection