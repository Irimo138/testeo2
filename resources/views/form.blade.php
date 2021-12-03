<form action="/store" method="post">
    @csrf
    <label>Name:<input type="text" name="Name"></label>
    <br>
    <label>DNI<input type="text" name="dni"></label>
    <br>
    <label>age<input type="number" name="age"></label>
    <br>
    <input type="submit" value="Submit">
</form>