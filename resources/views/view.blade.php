<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
</head>
<body>
    <table border="2" >

        <tr>

            <td>id</td>
            <td>Name</td>
            <td>Gender</td>
            <td>Birthdate</td>
            <td>Record</td>
            <td>Username</td>
            <td>Password</td>
            <td>Profile Picture</td>
    
        </tr>

    @foreach ($user as $item )

            <tr>
                        <td>{{ $item['P_ID'] }}</td>
                        <td>{{ $item['P_Name'] }}</td>
                        <td>{{ $item['Gender'] }}</td>
                        <td>{{ $item['B_Date'] }}</td>
                        <td>{{ $item['Record'] }}</td>
                        <td>{{ $item['username'] }}</td>
                        <td>{{ $item['password'] }}</td>
                        <td> <img style="width: 100px; height:100px" src="storage\img\{{ $item['img'] }}"> </td>
                       
            </tr>
            
            
    @endforeach


    </table>
</body>
</html>