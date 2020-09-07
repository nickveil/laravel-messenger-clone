{{-- @extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
    
        <h1 class="title">ChatRoom</h1>
        
    </div>

    <div class="section mt-5">
        <chat-messages :messages="messages"></chat-messages>
    </div>
    <div class="section mt-5">
        <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
    </div>


</div>
    
@endsection --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>

                <div class="panel-body">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer">
                    <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection