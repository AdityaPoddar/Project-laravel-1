<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    
        <div class="lower">
        <!-- <h1>Choose your Category</h1> -->
            <div class="lower-middle">
            @admin
            
            <Button class="btn"><a href="/book">
                <img src="../book.jpg" alt="book" >BOOK</a></Button>
            
            @else
                
                <Button class="btn"><a href="/userbook">
                     <img src="../book.jpg" alt="book" >BOOK</a></Button>
            
                
            @endadmin
            @admin
                <Button class="btn"><a href="/cd">
                <img src="../cd1.jpg" alt="cd" >CD</a></Button>
                @else
                <Button class="btn"><a href="/usercd">
                <img src="../cd1.jpg" alt="cd" >CD</a></Button>
                @endadmin
                @admin
                <Button class="btn"><a href="/game">
                     <img src="../game2.jpg" alt="game" >GAME</a></Button>
                     @else
                <Button class="btn"><a href="/usergame">
                     <img src="../game2.jpg" alt="game" >GAME</a></Button>
                     @endadmin
            </div>
            
        </div>
        </x-app-layout>