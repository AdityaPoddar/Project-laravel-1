@extends('base')
    @section('content')
    <!-- A Book page were values from the database are being displayed  -->
    <h1 class="heading">CD Data</h1>
    <form action="" method="get" class="items">
            PRICE
                Lower<input type="radio" name="lower" id="price">
                Upper<input type="radio" name="higher" id="price">
                <input type="search" name="search" id="search" placeholder="Enter your Search" value="{{$search}}">
                <button class="search">Search</button>
                <a href="{{url('/cd')}}"><button class="search"  type="button">Reset</button></a>
                </form>
    <div class="container">
        
        <table   class="table">
           <tr>
                    <th>Artist</th>
					<th>Title</th>
					<th>Duration</th>
					<th>Price</th>
                    <th>Action</th>
					
           </tr> 
           @foreach($cds as $cd)
           
           <tr>
                    <td>{{$cd['Artist']}}</td>
                    <td>{{$cd['Title']}}</td>
                    <td>{{$cd['Duration']}}</td>
                    <td>{{$cd['price']}}</td>
                    <td>
                       <a href={{"delete_cd/".$cd['id']}}>Delete</a>
                       /
                    <a href={{"edit_cd/".$cd['id']}}>Edit</a>
                    </td>
                    
                    
           </tr>
           @endforeach
        </table>
        {{$cds->links()}}
        <button class="cate-btn"><a href="/cd_add_values">Add Data</a></button>
        <button class="cate-btn"><a href="/categories">HomePage</a></button>
    </div>
    @endsection