<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic AJAX</title>
</head>

<body>
   <input type="button" id='button' value="Click" Submit="Click">
   <br><br>
   <div id="display"></div>
</body>

    <script>
        
        document.getElementById('button').addEventListener('click',ajaxCall);

        function ajaxCall(){
            var xhr = new XMLHttpRequest();

            xhr.open('GET','Text.txt', true);
            
            xhr.onload = function(){
                if(this.status ==200){
                    console.log(this.responseText);
                    document.getElementById('display').innerHTML = this.responseText;
                } else if(this.status == 404){
                    console.log('Sorry File is Not Found.');
                    document.getElementById('display').innerHTML = 'File Is Not Found';
                } else if(this.status == 403){
                    console.log('Access Forbidden');
                }
            };

            xhr.onreadystatechange = function(){
                if(this.readyState == 0){
                    console.log('Request Not Initialized');
                }else if(this.readyState == 1){
                    console.log('Server Connection Established');
                }else if(this.readyState == 2){
                    console.log('Request Received');
                }else if(this.readyState == 3){
                    console.log('Processing Request');
                }else if(this.redayState == 4){
                    console.log('Request Finished and Response is ready');
                }
            };

            xhr.onprogress = function(){
                console.log('Now State is: '+ this.readyState);
            };

            xhr.onerror = function(){
                console.log('Request Error...');
            };


            xhr.send();
        }
    </script>
</html>

