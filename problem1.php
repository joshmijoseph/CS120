<!DOCTYPE html>
<html>
<head>
    <title>Times Table Generator</title>
    <style>
        body { font-family: Arial, sans-serif; }
        label { font-weight: bold; }
        input[type="number"] { width: 50px; }
        button { margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Times Table Generator</h1>
    <?php
    $n = isset($_GET['n']) ? intval($_GET['n']) : 1;
    ?>
    <form id="timesTableForm">
        <label for="numberInput">Enter a number:</label>
        <input type="number" id="numberInput" min="1" max="12" value="<?php echo $n; ?>" required>
        <button type="button" onclick="generateTimesTable()">Generate Table</button>
    </form>

    <div id="timesTableResult">
    </div>

    <script>
        function generateTimesTable() {
            const n = parseInt(document.getElementById("numberInput").value);
            if (isNaN(n) || n < 1 || n > 12) {
                alert("Please enter a valid number between 1 and 12.");
                return;
            }

            let timesTableHTML = "<h2>Times Table for " + n + "</h2>";
            for (let i = 1; i <= 12; i++) {
                const result = i * n;
                timesTableHTML += "<p>" + i + " x " + n + " = " + result + "</p>";
            }

            document.getElementById("timesTableResult").innerHTML = timesTableHTML;
        }

        generateTimesTable();
    </script>
</body>
</html>

