<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX- and Database</title>
</head>
<body>
    <h2>Using AJAX Insert Data Into The Database</h2>
    <form id="user">
        <input type="text" name="name" id="user_name">
        <input type="submit" name="Save">
    </form>
</body>
    <script>
        document.getElementById('user').addEventListener("submit",saveUser);
        function saveUser(e){
            e.preventDefault();
            var user  =  document.getElementById('user_name').value;
            var input =  "user="+user;
            var xhr   = new XMLHttpRequest();
            xhr.open("POST", "dba.php", true);
            xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');

            xhr.onload = function(){
                if(this.status == 200){
                    console.log(this.responseText);
                }
            };

            xhr.send(input);
        };
    </script>
</html>