<!DOCTYPE html>
<html>
    <head>
        <title>Edit HTML Table Selected Row</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }
            table tr:not(:first-child):hover{background-color: #ddd;}
        </style>
    </head>
    <body>
        First Name:<input type="text" name="fname" id="fname"><br><br>
        Last Name:<input type="text" name="lname" id="lname"><br><br>
        Age:<input type="text" name="age" id="age"><br><br>
        <button onclick="editRow();">Edit Row</button><br><br>
        
                   <table class="table table-bordered" id="table" >
					
                        <thead class="table-grey">
                                        <tr>
                                            <th><center><p style="color: black;font-size: 12px;margin-bottom: 5px;">
                            Rekomendasi</p></center></th>
                                            <th><p style="color: black;font-size: 12px;margin-bottom: 5px;">
                            Harga</p></th>
                                            <th><p style="color: black;font-size: 12px;margin-bottom: 5px;">
                            Start</p></th>
                                            <th><p style="color: black;font-size: 12px;margin-bottom: 5px;">
                            End</p></th>
                                        </tr>
                         </thead>
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            Dist. Pertama</p></td>
                            <td><p class="mt-1" style="color: black;font-size: 10px;margin-bottom: 5px;">
                            224.000</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            01/03/2023</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            11/03/2023</p></td>
                        </tr>
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            Dist. hapapis</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            326.000</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            02/03/2023</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            13/03/2023</p></td>
                        </tr>
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                             Group Mega Jaya</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            437.500</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            03/03/2023</p></td>
                            <td><p  style="color: black;font-size: 10px;margin-bottom: 5px;">
                            14/03/2023</p></td>
                        </tr>

                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            Toko melan D</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            438.600</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            05/03/2023</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            15/03/2023</p></td>
                        </tr>
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            Agen Junto</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            237.500</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            13/03/2023</p></td>
                            <td><p  style="color: black;font-size: 10px;margin-bottom: 5px;">
                            15/03/2023</p></td>
                        </tr>
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            Budi Jaya</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            257.500</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            12/03/2023</p></td>
                            <td><p  style="color: black;font-size: 10px;margin-bottom: 5px;">
                            21/03/2023</p></td>
                        </tr>
                   </table>
        
        
        <script> 
            
            // get selected row
            // display selected row data in text input
            
            var table = document.getElementById("table"),rIndex;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                table.rows[i].onclick = function()
                {
                    rIndex = this.rowIndex;
                    console.log(rIndex);
                    
                    document.getElementById("fname").value = this.cells[0].innerHTML;
                    document.getElementById("lname").value = this.cells[1].innerHTML;
                    document.getElementById("age").value = this.cells[2].innerHTML;
                };
            }
            
            
           // edit the row
            function editRow()
            {
                table.rows[1].cells[0].innerHTML = document.getElementById("fname").value;
                table.rows[1].cells[1].innerHTML = document.getElementById("lname").value;
                table.rows[1].cells[2].innerHTML = document.getElementById("age").value;
            }
            
        </script>    
        
    </body>
</html>