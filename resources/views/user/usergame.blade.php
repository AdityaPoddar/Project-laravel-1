@extends('base')
    @section('content')
    <!-- A game page were values from the database are being displayed : normal User -->
    <h1 class="heading">Game Data</h1>
    <form action="" method="get" class="items">
            PRICE
                Lower<input type="radio" name="lower" id="price">
                Upper<input type="radio" name="higher" id="price">
                <input type="search" name="search" id="search" placeholder="Enter your Search" value="{{$search}}">
                <button class="search">Search</button>
                <a href="{{url('/usergame')}}"><button class="search"  type="button">Reset</button></a>
                
                </form>
    <div class="container">
        
        <table   class="table">
           <tr>
                    <th>Console</th>
					<th>Title</th>
					<th>Pegi</th>
					<th>Price</th>
                    
					
           </tr> 
           
           @foreach($games as $game)
           
           <tr>
                    <td>{{$game['Console']}}</td>
                    <td>{{$game['Title']}}</td>
                    <td>{{$game['Pegi']}}</td>
                    <td>{{$game['price']}}</td>
                    
                    
           </tr>
           @endforeach
        </table>
        <!-- helps with pagination -->
        {{$games->links()}}
        <button class="cate-btn"><a href="/categories">HomePage</a></button>
    </div>
    @endsection