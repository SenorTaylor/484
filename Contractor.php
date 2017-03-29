

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head  >

    <title>Lab 4 - Taylor Johnson Main Menu</title>

</head>
<body style="background-color: #FFFFFF">
    <form name="form1"  style="background-color: #CCCCCC" method="post">
        <div style="background-color: #00FF00"> <h1 dir="ltr" style="font-family: monospace">Lab 4 HR System - Taylor Johnson</h1>
            
                <nav>
    		<ul>
        		<li><a href="/Lab4/index.php">Home</a></li>
	        	<li><a href="/Lab4/Contractor.php">Contractor</a></li>
        		<li><a href="/Lab4/Driver.php">Driver</a></li>
			
    		</ul>
		</nav>
                    
                    

        </div>
 
 
	<table>
	<tr>
	<td>
			
            <span id="lblAddContractor">Add Contractor:</span>
    </td>
	</tr>
	<tr>
	<td>
            <span id="LblContractFirst">First Name:</span>
    </td>
	<td>
            <input name="contractFirst" type="text" id="contractFirst" required/>
    </td>
	<td>
            <span id="lblContractLast">Last Name:</span>
    </td>
	<td>
            <input name="contractLast" type="text" id="contractLast" required/>
    </td>
	<td>
            <span id="lblContractMiddle">Middle Initial</span>
    </td>
	<td>
            <input name="contractMiddle" type="text" id="contractMiddle" />
     </td>
	 </tr>
	 <tr>
	 <td>
            <span id="lblContractHouse">House Number:</span>
     </td>
	 <td>
            <input name="contractHouse" type="number" id="contractHouse" />
     </td>
	 <td>
            <span id="lblContractStreet">Street:</span>
     </td>
	 <td>
            <input name="contractStreet" type="text" id="contractStreet" />
     </td>
	 <td>
            <span id="lblContractCity">City/County:</span>
    </td>
	<td>
            <input name="contractCity" type="text" id="contractCity" />
     </td>
	 </tr>
	 <tr>
	 <td>
            
            <span id="lblContractState">State:</span>
     </td>
	 <td>
            <select name="contractState" id="contractState">

			<option>AL</option>
			<option>CA</option>
			<option>NC</option>
			<option>SC</option>
			<option>VA</option>
</select>
     </td>
	 <td>
            <span id="lblContractCountry">Country:</span>
     </td>
	 <td>
            <select name="contractCountry" id="contractCountry">
			<option>DE</option>
			<option>GB</option>
			<option>IE</option>
			<option>SE</option>
			<option>US</option>
</select>
     </td>
	 <td>
            <span id="lblContractZip">Zip Code:</span>
      </td>
	 <td>
            <input name="contractZip" type="text" id="contractZip" /> 
	</td>
	</tr>
	<tr>
	 <td>			
            <span id="lblContractFee">Fee:</span>
    </td>
	
	 <td>    
            <input name="contractFee" type="number" id="contractFee" />
    </td>
	
	<td>
            <input type="submit" name="commitContract"/>
          
	</td>
	</tr>
	</table>
			            <div id ="infoPane">
             <textarea name="txtOutput" rows="2" cols="20" wrap="off" readonly="readonly" id="txtOutput" style="height:200px;width:841px;">
</textarea>
            </div>
			
					

    </form>
	
	<?php       
	
      if(isset($_POST["commitContract"]))
		{
		$servername = "localhost";
		$username = "root";
		$password = "Taator12";
		$database = "lab4";
		$conn = new mysqli($servername,$username,$password, $database);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
		else
		{
		echo "Connected successfully";
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$lastUpdatedBy = "Taylor Johnson";
		$lastUpdated = "CURRENT_TIMESTAMP";
		//$sql = "INSERT INTO Lab4.Contractor(FirstName, LastName, MiddleInitial, HouseNumber, Street, CityCounty, StateAbb, CountryAbb, ZipCode, Fee, LastUpdatedBy, LastUpdated) VALUES ('A','B','C',3,'D','D','VA','US','43',3,'C',CURRENT_TIMESTAMP);";
		$sql = "INSERT INTO Contractor(FirstName, LastName, MiddleInitial, HouseNumber, Street, CityCounty, StateAbb, CountryAbb, ZipCode, Fee, LastUpdatedBy, LastUpdated) VALUES (?,?,?,?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP);";
		//$sql = "INSERT INTO Contractor(FirstName, LastName, MiddleInitial, HouseNumber, Street, CityCounty, StateAbb, CountryAbb, ZipCode, Fee, LastUpdatedBy, LastUpdated) VALUES (:fname,:lname,:mname,:house,:street,:city,:state,:country,:zip,:lastup,:lastupby);";
		
		$stmt = mysqli_prepare($conn,$sql);
		if($stmt)
		{
	
	
		mysqli_stmt_bind_param($stmt, 'sssisssssds' ,mysql_escape_string($_POST["contractFirst"]), mysql_escape_string($_POST["contractLast"]), mysql_escape_string($_POST["contractMiddle"])
		, mysql_escape_string($_POST["contractHouse"]), mysql_escape_string($_POST["contractStreet"])
		, mysql_escape_string($_POST["contractCity"]), mysql_escape_string($_POST["contractState"]), mysql_escape_string($_POST["contractCountry"]), mysql_escape_string($_POST["contractZip"])
		, mysql_escape_string($_POST["contractFee"]) ,$lastUpdatedBy);
		
		
		/*
		$stmt->bind_param(':fname',mysql_escape_string($_POST["contractFirst"]));
		$stmt->bind_param(':lname',mysql_escape_string($_POST["contractLast"]));
		$stmt->bind_param(':mname',mysql_escape_string($_POST["contractMiddle"]));
		$stmt->bind_param(':house',mysql_escape_string($_POST["contractHouse"]));
		$stmt->bind_param(':street',mysql_escape_string($_POST["contractStreet"]));
		$stmt->bind_param(':city',mysql_escape_string($_POST["contractCity"]));
		$stmt->bind_param(':state',mysql_escape_string($_POST["contractState"]));
		$stmt->bind_param(':country',mysql_escape_string($_POST["contractCountry"]));
		$stmt->bind_param(':zip',mysql_escape_string($_POST["contractZip"]));
		$stmt->bind_param(':fee',mysql_escape_string($_POST["contractFee"]));
		$stmt->bind_param(':lastupby',[$lastUpdatedBy] );
		$stmt->bind_param(':lastup',[$lastUpdated]);
		*/
		$stmt->execute();
		echo "execute";
		if($conn->affected_rows > 0)
		{
			echo $sql;
			echo "Committed to DB";
		}
		
		}
		}
		}
	?>				
</body>


</html>
