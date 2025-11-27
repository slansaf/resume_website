@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
<div class="box-content">
	@foreach ($data as $element)
        <h3>{{ $element -> subject}}</h3>
        <p>{{$element -> name}}</p>
        <p>{{$element -> email}}</p>
        <p>{{$element -> created_at}}</p>
        <p>{{$element -> message}}</p>
    
    @endforeach
</div>
@endsection