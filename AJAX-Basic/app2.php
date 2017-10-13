<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Internal Json File</title>
</head>
<body>
    <button id="btn">Get All Students</button>
    <br><br>
    <div id="std"></div>
</body>
<script>
    document.getElementById('btn').addEventListener('click', getData);
    function getData(){
        var xhr = new XMLHttpRequest();
        xhr.open('GET','students.json',true);
        
        xhr.onload = function(){
            if(this.status == 200){
                // console.log(this.responseText);
                var data = JSON.parse(this.responseText);

                var output = '';

                for(var i in data){
                    output += '<ul>'+'<li>Student Name: '+data[i].name+'</li>'+
                              '<li>Student Address: '+data[i].address+'</li>'+
                              '<li>Student Roll: '+data[i].roll+'</li>'+'</ul>';
                            console.log(output);
                }
                     document.getElementById('std').innerHTML = output;
            }
        }
        xhr.send();
       
    };
</script>
</html>