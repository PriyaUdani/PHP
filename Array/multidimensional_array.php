
<?php
$student_master=array(array('Rollno'=>1,'Name'=>'Priya','Surname'=>'Udani','Course'=>'BCA','Div'=>'B1','Semester'=>'Sem-4','Percentage'=>'93%','University_name'=>'Atmiya Univesity','Enrollment_no'=>220801360,'Registration_no'=>15612422095),
array('Rollno'=>2,'Name'=>'Priya','Surname'=>'Udani','Course'=>'BCA','Div'=>'B1','Semester'=>'Sem-4','Percentage'=>'93%','University_name'=>'Atmiya Univesity','Enrollment_no'=>220801360,'Registration_no'=>15612422095),
array('Rollno'=>3,'Name'=>'Priya','Surname'=>'Udani','Course'=>'BCA','Div'=>'B1','Semester'=>'Sem-4','Percentage'=>'93%','University_name'=>'Atmiya Univesity','Enrollment_no'=>220801360,'Registration_no'=>15612422095),
array('Rollno'=>4,'Name'=>'Priya','Surname'=>'Udani','Course'=>'BCA','Div'=>'B1','Semester'=>'Sem-4','Percentage'=>'93%','University_name'=>'Atmiya Univesity','Enrollment_no'=>220801360,'Registration_no'=>15612422095),
array('Rollno'=>5,'Name'=>'Priya','Surname'=>'Udani','Course'=>'BCA','Div'=>'B1','Semester'=>'Sem-4','Percentage'=>'93%','University_name'=>'Atmiya Univesity','Enrollment_no'=>220801360,'Registration_no'=>15612422095),
array('Rollno'=>6,'Name'=>'Priya','Surname'=>'Udani','Course'=>'BCA','Div'=>'B1','Semester'=>'Sem-4','Percentage'=>'93%','University_name'=>'Atmiya Univesity','Enrollment_no'=>220801360,'Registration_no'=>15612422095),
array('Rollno'=>7,'Name'=>'Priya','Surname'=>'Udani','Course'=>'BCA','Div'=>'B1','Semester'=>'Sem-4','Percentage'=>'93%','University_name'=>'Atmiya Univesity','Enrollment_no'=>220801360,'Registration_no'=>15612422095),
array('Rollno'=>8,'Name'=>'Priya','Surname'=>'Udani','Course'=>'BCA','Div'=>'B1','Semester'=>'Sem-4','Percentage'=>'93%','University_name'=>'Atmiya Univesity','Enrollment_no'=>220801360,'Registration_no'=>15612422095));


echo "<table cellspacing=5 cellpadding=5 border=5>";

foreach($student_master as $keys)
{
	echo "<tr>";
	foreach($keys as $my_key)
	{
			echo "<td>";
			echo $my_key;
			echo "</td>";	
	}
	echo "</tr>";
}
echo "</table>";

?>