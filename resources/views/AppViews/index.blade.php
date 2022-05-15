@extends('include.layout')

@section('title_page', 'Dashboard')

@section('content')
    <div id="content-page">
        @include('AppViews.tasks.tasks')
        @include('AppViews.chatRoom.chat')
        @include('AppViews.notifications.notificationCenter')
    </div>
@stop
