<html>
    <header>
        <title>Nikhil Jha</title>
    </header>
    <style>
        form, h1{
            margin-left: 40%
        }
        body {
            background-color: coral;
        }
        #submit{
            background-color: blue;
            color: white;
            width: 100px;
            height: 30px;
            border-radius: 7px;
            border: none;
            margin-top: 10px;
        }
        .inputBox{
            margin-top: 10px;
            height: 40px;
            width: 300px;
            border-radius: 10px;
            border: none;
            text-align: center;
        }
    </style>
    <body>
        <h1>Register Form</h1>
        <form action="Data.php" method="get">
            <input type="text" class="inputBox" name="name" placeholder="Name"/>
            <br>
            <input type="password" class="inputBox" name="password" placeholder="Password"/>
            <br>
            <input type="email" class="inputBox" name="email" placeholder="Email"/>
            <br>
            <p>DOB:</p>
            <input type="date" class="inputBox" name="DOB"/>
            <p>Gender:</p>
            <input type="radio" name="gender" value="Male">
            <label for="html">Male</label><br>
            <input type="radio" name="gender" value="Female">
            <label for="css">Female</label><br>

            <input type="submit" id="submit" />
        <form>
    </body>
<html>