@extends('base')
    @section('content')
        <!-- Update:book -->
    <h1>Update Data</h1>
            <form action="/edit_book" method="POST"  class="add">
                {{method_field('PUT')}}
                <!-- the use of put http request -->
                @csrf
                <input type="hidden" name="id" value="{{$book['id']}}">
                Author/Artist/Console<input type="text" name="Author" id="Author" value="{{$book['Author']}}" required>
                Title<input type="text" name="Title" id="Title"  value="{{$book['Title']}}" required>
                Pages/Duration/Pegi<input type="text" name="Pages" id="Pages"  value="{{$book['Pages']}}" required>
                Price<input type="text" name="price" id="price"   value="{{$book['price']}}" required>
                <button class="cate-btn">Update</button>
                
            </form>

        

    @endsection