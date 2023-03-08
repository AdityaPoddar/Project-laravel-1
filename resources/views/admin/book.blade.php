@extends('base')
    @section('content')
    <!-- A Book page were values from the database are being displayed  -->
    <h1 class="heading">Book Data</h1>
    
    <form action="" method="get" class="items">
    <!-- {{method_field('DELETE')}} -->
        PRICE
        Lower<input type="radio" name="lower" id="price">
        Upper<input type="radio" name="higher" id="price">
        <input type="search" name="search" id="search" placeholder="Enter your Search" value="{{$search}}">
        <button class="search">Search</button>
        <a href="{{url('/book')}}"><button class="search"  type="button">Reset</button></a>
        
    </form>
    <div class="container">
        <table   class="table">
            <tr>
                <th>Author</th>
                <th>Title</th>
                <th>Pages</th>
                <th>Price</th>
                <th>Action</th>
                
            </tr> 
            @foreach($books as $book)
            
            <tr>
                <td>{{$book['Author']}}</td>
                <td>{{$book['Title']}}</td>
                <td>{{$book['Pages']}}</td>
                <td>{{$book['price']}}</td>
                <td>
                    <!-- incomplete hai ye  -->
                    <a href={{"delete_book/".$book['id']}}>Delete</a>
                    {{method_field('DELETE')}}
                    <!-- the use of delete http request -->
                    /
                    <a href={{"edit_book/".$book['id']}}>Edit</a>
                </td>
                
            </tr>
            @endforeach
            
        </table>
      
        <!-- it will help in pagination -->
        {{$books->links()}} 
        <button class="cate-btn"><a href="/book_add_values">Add Data</a></button>
        <button class="cate-btn"><a href="/categories">HomePage</a></button>
        
    </div>
    
    @endsection