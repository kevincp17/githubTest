<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>To Do Website</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-color:#ecffb3;">
        <div class="text-capitalize mb-3 mt-3">
            <h1 align="center">Masukkan aktivitas-aktivitas yang akan anda lakukan</h1>
        </div>
        
        <div class="input-group mb-3 rounded-3 mx-auto" style="width:50%;">
            <input type="text" id="actItem" class="form-control" placeholder="Masukkan aktivitas" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button style="background-color:gray;color:white" class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="insertItem()"><b>Simpan</b></button>
        </div>
                  
        <div id="demo" class="rounded-3 mx-auto" style="width:50%;">
       
        </div>
              
        <script>
            const list = []; 
            var i=0;
            var x=0;
           
            function insertItem() {                
              list.push(document.getElementById('actItem').value);  
              document.getElementById('actItem').value="";
              document.getElementById('demo').innerHTML +="<div class='row border p-2' style='background-color:white'><div class='col'>"+list[i]+"</div><div class='col d-flex justify-content-end'><button onclick='deleteItem("+i+")' class='btn btn-danger'>X</button></div></div>"+"<br>";    
              i++;
            }
            
            function deleteItem(a) {   
              list.splice(a,1);
              
              while(x<list.length+1){
                  var newList="<div class='row border p-2' style='background-color:white'><div class='col'>"+list[x]+"</div><div class='col d-flex justify-content-end'><button onclick='deleteItem("+x+")' class='btn btn-danger'>X</button></div></div>"+"<br>";  
                  x++;
              }
              x=0;
              document.getElementById('demo').innerHTML=newList;
            }
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
