<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX-PHP</title>
</head>


<body>
   <h1>AJAX-PHP (GET & PHP) Call</h1>
   <hr>

   <h2>GET Request</h2>
   <form id='get_form'>
        <input type="text" name="name" id="get_name">
        <input type="submit" name="Get Request">
   </form>

   <h2>Post Request</h2>
   <form id='post_form'>
        <input type="text" name="name" id="post_name">
        <input type="submit" name="Post Request">
   </form>


</body>

    <script>
        document.getElementById('get_form').addEventListener('submit',getMethod);
        document.getElementById('post_form').addEventListener('submit',postMethod);
        
        function getMethod(e){
            e.preventDefault();
           var input = document.getElementById('get_name').value;
           var xhr = new XMLHttpRequest();
           xhr.open('GET', 'Connect.php?name='+input, true);
           xhr.onload = function(){
             if(this.status == 200){
                console.log(this.responseText);
             }
           };
           xhr.send();
        }    

        function postMethod(e){
           e.preventDefault();
           var input = document.getElementById('post_name').value;
           var post_name = "name="+input;
           var xhr = new XMLHttpRequest();
           xhr.open('POST', 'Connect.php', true);
           xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
           xhr.onload = function(){
             if(this.status == 200){
                console.log(this.responseText);
             }
           };
           xhr.send(post_name);
        }

    </script>
</html>