@extends(layouts.layout)

@section('flightStore')

@parent
<form action="/flightStore" method="post">
    @csrf
    <input type="text" name="Name">
    <br>
    <input type="text" name="origen">
    <br>
    <input type="text" name="destino">
    <br>
    <input type="submit" value="Submit">
</form>

@endsection