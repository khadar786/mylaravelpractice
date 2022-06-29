@extends('layouts.main')

@section('content')
  <h1>Contact Us</h1>
  @if(count($users)>0)
    <ul>
      @foreach($users as $user)
        <li>{{$user}}</li>
      @endforeach
    </ul>
  @endif
@stop

@section('script')
@stop