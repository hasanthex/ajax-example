<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX- Call External API</title>
    <style>
        ul li{
            list-style:none;
        }
    </style>
</head>
<body>
    <input type="submit" name='Get Events' id='get-events' value="Get Events">
    <h1>Git Hub Users Events List</h1>
    <div id="processing"></div>
    <div id="events"></div>
</body>
    <script>
        document.getElementById('get-events').addEventListener('click', getEvents);
        var process = document.getElementById('processing');
        var events  = document.getElementById('events');

        var output  = '';
        function getEvents(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','https://api.github.com/events', true);
            xhr.onload = function(){
                if(this.status ==200){
                    var data = JSON.parse(this.responseText);
                    
                    for(var i in data){
                        output += '<div>'+
                              '<ul><li>'+(parseInt(i)+1) +'  Git Type: '+ data[i].type+'</li>'+
                              '<li>'+'Git ID: '+ data[i].id+'</li></ul></div>';
                        
                    }
                }
                events.innerHTML = output;
            };

            xhr.onreadystatechange = function(){
                if(this.readyState == 3){
                    process.innerHTML = 'Request Processing...';
                }
                else if(this.readyState == 4){
                    process.innerHTML = '';
                }
            };

            xhr.send();
        }
    </script>
</html>