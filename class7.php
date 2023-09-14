<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Sama's Food Dine</title>
    <link rel="stylesheet" href="Class7_process.css">
</head>
<body>
    <div class="title">
        <h1>Online food delivery</h1><hr>    
    </div>

    <div class="C1">
        <!--User Name-->
        <form action="./class7_process.php" method="POST">
            <div class="text">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Customer name" required>
            </div>
            <div class="text">
                <label for="email">Customer email:</label>
                <input type="email" name="email" placeholder="...@gmail.com"      
            required>
            </div>
            <div class="text">
                <label for="number">Number:</label>
                <input type="number" id="number" name="number" placeholder="01*****" required >
            </div>
            <div class="text">
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" placeholder="******" required >
            </div>
            <div class="text">
                <label for="comments">Additional Requirements:</label>
                <textarea name="comments" cols="30" rows="10">Put an extra cheesee!!!</textarea>
            </div>
            <div class="button">
                <input type="submit" value="Submit">
                <input type="Reset" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>