<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd</title>
</head>
<body>
<script>
    function findOddNumbers(n) {
        var oddNumbers = [];
        for (var i = 1; i <= n; i++) {
            if (i % 2 !== 0) {
                oddNumbers.push(i);
            }
        }
        return oddNumbers;
    }
    var n = prompt("Enter a number: ");
    var oddNumbers = findOddNumbers(n);
    document.body.innerHTML += "<p>Odd numbers in the range of " + n + " are: " + oddNumbers.join(", ") + "</p>";
</script>

</body>
</html>
