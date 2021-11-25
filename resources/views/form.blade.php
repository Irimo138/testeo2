<form action="/store" method="post">
    @csrf
    <input type="text" name="Name">
    <br>
    <input type="text" name="dni">
    <br>
    <input type="number" name="age">
    <br>
    <input type="submit" value="Submit">
</form>