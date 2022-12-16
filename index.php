<html>

<head>
</head>

<style>
    div {
        margin-top: 5%;
        margin-left: 5%;
    }
    button {
        border-radius: 3px;
        background-color: rgb(88, 131, 160);
    }
    #input {
        width: 80%;
    }
   
</style>

<body>
    <h2>PHP Form Validation Example</h2>
    <div>
        <form action="lab9.php" method="POST" target="_blank">
            <label>E-mail : </label>
            <input id="input" type="text" placeholder="Enter your Email" name="email">
           
            <br><br>
            <label>Password : </label>
            <input id="input" type="password" placeholder="Enter your passwordd" name="pass">
            <span class="error">*</span>
            <br><br>
    
            <label>select gender : </label>
            <input type="radio" name="rad" value="Female">Female
            <input type="radio" name="rad" value="Male">Male
            <input type="radio" name="rad" value="Other">Other
            <br><br>
            <label>checkbox: </label> <input type="checkbox" name="option" value="option1">Check
            <br><br>
            <button name="submit">Submit</button>
        </form>
    </div>
</body>
</html>