<html>
    <head>
        <title>admin | login</title>
        <link rel="stylesheet" type="text/css" href="./css/adminlogin.css">
    </head>
    <body>
        <form action="adminregistration.php" class="adminlogin-form">
        <h1>Login</h1>
       <label for="Department">Department:</label> 
       <select name="department" id="department">
           <option value="department">select department </option>
           <option value="admin">admin </option>
           <option value="IT">IT </option>
           <option value="CIVIL">CIVIL </option>
           <option value="MEDICAL">MEDICAL </option>
       </select>
       <input type="text" name="admin" placeholder="cpfno">
    
       <input type="password" name="password" placeholder="password">

       <input type="submit" name="submit" value="submit">
    </form>
    </body>
</html>