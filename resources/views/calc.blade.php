<html>
<body>
<form method="post" action="/calc">
        
        Enter number 1: <input type="text" name="number1"/><br>
        Enter number 2: <input type="text" name="number2"/><br>
        <input type="submit" name="submit" value="Submit" />
            {{csrf_field()}}
            </form>
</body>
</html>