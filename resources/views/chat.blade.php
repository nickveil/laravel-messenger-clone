@extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
    
        <h1 class="title">ChatRoom</h1>
        
    </div>

    <div class="section mt-5">
        <h2>Something Here
        
        </h2>
        <chat-messages :messages="messages"></chat-messages>
    </div>
    <div class="section mt-5">
        <input type="text">
        <button>Send me something</button>
    </div>


</div>
    
@endsection