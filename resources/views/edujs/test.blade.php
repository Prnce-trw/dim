<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>foreach loop</h2><br>
    <div id="demo"></div>

    <h2>while loop</h2><br>
    <p>Insert Your Point (1 - 5)</p>
    <input type="number" name="" id="mypoint"> <button onclick="getpoint()">Click Me</button>
    <div id="yourpoint"></div>

    <h2>do while loop</h2><br>
    <div id="mynumber"></div>

    <script>
        // for loop
        var sum = 0;
        for (var i = 1; i <= 5; i++) {
            sum += i;
        }

        // foreach loop
        var fruits = ["apple", "orange", "cherry"];
        fruits.forEach(myFunction);

        function myFunction(item, index) {
            document.getElementById("demo").innerHTML += index + ":" + item + "<br>"; 
        }

        // while loop 
        function getpoint() {
            var x = document.getElementById("mypoint").value;
            while (x <= 5) {
                text += "<br>The number is " + x;
                x++;
            }
            document.getElementById("yourpoint").innerHTML = text;
        }

        // do while loop 
        let a = 1, b = 5;
        while (a <= b) {
            document.getElementById("mynumber").innerHTML = a;
            a += 1;
        }
    </script>
</body>
</html>