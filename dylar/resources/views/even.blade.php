<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even</title>
</head>
<body>
<script>
    function findEvenNumbers(n) {
        var evenNumbers = [];
        for (var i = 1; i <= n; i++) {
            if (i % 2 === 0) {
                evenNumbers.push(i);
            }
        }
        return evenNumbers;
    }
    var n = prompt("Enter a number: ");
    var evenNumbers = findEvenNumbers(n);
    document.body.innerHTML += "<p>Even numbers in the range of " + n + " are: " + evenNumbers.join(", ") + "</p>";
</script>

</body>
</html>
