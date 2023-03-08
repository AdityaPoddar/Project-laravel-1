@extends('base')
    @section('content')
    <!-- A cd page were values from the database are being displayed : normal User -->
    <h1 class="heading">CD Data</h1>
    <form action="" method="get" class="items">
            PRICE
                Lower<input type="radio" name="lower" id="price">
                Upper<input type="radio" name="higher" id="price">
                <input type="search" name="search" id="search" placeholder="Enter your Search" value="{{$search}}">
                <button class="search">Search</button>
                <a href="{{url('/usercd')}}"><button class="search"  type="button">Reset</button></a>
                
                </form>
    <div class="container">
        
        <table   class="table">
           <tr>
                    <th>Artist</th>
					<th>Title</th>
					<th>Duration</th>
					<th>Price</th>
                    
					
           </tr> 
           @foreach($cds as $cd)
           
           <tr>
                    <td>{{$cd['Artist']}}</td>
                    <td>{{$cd['Title']}}</td>
                    <td>{{$cd['Duration']}}</td>
                    <td>{{$cd['price']}}</td>
                    
                    
                    
           </tr>
           @endforeach
        </table>
       {{$cds->links()}}
        <button class="cate-btn"><a href="/categories">HomePage</a></button>
    </div>
    @endsection