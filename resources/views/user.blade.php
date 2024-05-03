<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>
<body>
    <table border="2" >

        <tr>

            <td>Patient ID</td>
            <td>Patient Name</td>
            <td>Gender</td>
            <td>BirthDate</td>
            <td>username</td>
            <td>password</td>

    
        </tr>

    @foreach ($users as $item )

            <tr>
                        <td>{{ $item['P_ID'] }}</td>
                        <td>{{ $item['P_Name'] }}</td>
                        <td>{{ $item['Gender'] }}</td> 
                        <td>{{ $item['B_Date'] }}</td>
                        <td>{{ $item['username'] }}</td>
                        <td>{{ $item['password'] }}</td>

                       
            </tr>
            
            
    @endforeach


    </table>
</body>
</html>