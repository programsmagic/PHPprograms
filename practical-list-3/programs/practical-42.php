<html>

<body>
    
    <h1 align="center">Movie reviews</h1>
    <form action="next.php" method="post">
    <table bgcolor="lightblue" cellpadding="10" align="center">
        <tr>
            <th>NAME OF THE MOVIE </th>
            <td><input type="text" name="a" placeholder="Name.." /></td>
        </tr>
        <tr>
            <th>RELEASE DATE </th>
            <td><input type="date" name="b" placeholder="date.." /></td>
        </tr>
        <tr>
            <th>NAME OF DIRECTOR  </th>
            <td><input type="text" name="c" placeholder="Name.." /></td>
        </tr>
        <tr>
            <th>Story Of the movie  </th>
            <td><select name="d">
                <option value="0">Choose anyone</option>
                <option value="Excellent">Excellent</option>
                <option value="Very good">Very good</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Bad">Bad</option>
                <option value="Wrost">Wrost</option>
                
                </select></td>
        </tr>
        <tr>
            <th>Performance of the performers  </th>
            <td>
              <input type="checkbox" name="e" value="Excellent"/>Excellent 
                 <input type="checkbox" name="e1" value="Very Good " />Very Good 
                 <input type="checkbox" name="e2" value="Good" />Good  
                <input type="checkbox" name="e3" value="averge" /> Average
                 <input type="checkbox" name="e4" value="bad" />Bad 
                 <input type="checkbox" name="e5" value="wrost" />Worst </td>
        </tr>
        <tr>
            <th>Camera Work </th>
            <td> <input type="radio" name="f" />Excellent 
                 <input type="radio" name="f" />Very Good 
                 <input type="radio" name="f" />Good  
                <input type="radio" name="f" /> Average
                 <input type="radio" name="f" />Bad 
                 <input type="radio" name="f    " />Worst </td>
        </tr>
        <tr>
            <th>Music of the movie </th>
            <td><input type="range" name="g" placeholder="Name.." min="1" max="100" value="1-100" title="! to 100" /></td>
        </tr>
        <tr>
            <th>Overall Rating of movie</th>
            <td><input type="checkbox" name="h" >֍1 
                 <input type="checkbox" name="h" >֍2 
                 <input type="checkbox" name="h" >֍3 
                <input type="checkbox" name="h" >֍4
                 <input type="checkbox" name="h" >֍5 </td>
        </tr>
        <tr>
        <th colspan="2" align="center"><input type="submit" name="ok" value="submit"></th>
        </tr>

    </table>
    </form>


</body>

</html>