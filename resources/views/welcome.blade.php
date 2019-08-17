@extends('layouts.main')

@section('content')
    <notifications></notifications>

    <form action="{{ route('order') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="order" value="Pedido completo">
        <input type="text" name="time" value="15 min">
        <input type="text" name="status" value="1">
        <input type="text" name="user_id" value="1">
        <button>Testar</button>
    </form>
@endsection
