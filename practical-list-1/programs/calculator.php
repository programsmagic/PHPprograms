<html>
<head>
    <title>this is calculator make using javaScript,css,html</title>
    
    <!--javaScript--->
    <script>
    function insert(num)
        {
            document.form.textview.value = document.form.textview.value+num
        }
    </script>
    <!--style for css-->
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .button{
            width: 50;
            height: 50;
            font-size:25;
            margin:2;
            cursor:pointer;
            
        }
        .textview{
            width: 217;
            margin: 5;
            font-size: 25;
            padding: 5;
        }
        
    </style>
    </head>

    <body>
    
        <div class="main">
            
            <form name="form">
             <input class="textview" />
            </form>
        
            <table>
            <tr>
                <td><input type="button" value="C" class="button"/></td>
                <td><input type="button" value="<" class="button"/></td>
                <td><input type="button" value="/" class="button"/></td>
                <td><input type="button" value="X" class="button"/></td>
                </tr>
            <tr>
                <td><input type="button" value="7" class="button"/></td>
                <td><input type="button" value="8" class="button"/></td>
                <td><input type="button" value="9" class="button"/></td>
                <td><input type="button" value="+" class="button"/></td>
            </tr>
            
            <tr>
                <td><input type="button" value="4" class="button"/></td>
                <td><input type="button" value="5" class="button"/></td>
                <td><input type="button" value="6" class="button"/></td>
                <td><input type="button" value="-" class="button"/></td>
            </tr>    
            
            <tr>
                <td><input type="button" value="1" class="button" onclick="insert(1)"/></td>
                <td><input type="button" value="2" class="button" onclick="insert(2)"/></td>
                <td><input type="button" value="3" class="button"/></td>
                <td><input type="button" value="=" class="button"/></td>
            </tr>    
            </table>
            
        </div>
    </body>
</html>