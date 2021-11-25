<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked Flights</title>
</head>
<body>
    <h3>Booked flights</h3>

    <form action="/BookedFlight2" method="POST">
        @csrf
        <select name="passenger">
            @foreach($pasageros as $pas)
                <option value="{{$pas->id}}">{{$pas->name}}</option>
            @endforeach
        </select>

        <select name="flight">
            @foreach($vuelos as $fli)
                <option value="{{$fli->id}}">{{$fli->name}}</option>
            @endforeach
        </select>

        <input type="number" name="ticket">
        <input type="submit" value="Book">
    </form>
</body>
</html>