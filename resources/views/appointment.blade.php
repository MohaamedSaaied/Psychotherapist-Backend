<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointments</title>
</head>
<body>
    <table border="2" >

        <tr>

            <td>Appointment ID</td>
            <td>Patient ID</td>
            <td>Doctor ID</td>
            <td>Date</td>
            <td>Time</td>
            <td>Order</td>

    
        </tr>

    @foreach ($appointments as $item )

            <tr>
                        <td>{{ $item['Ap_ID'] }}</td>
                        <td>{{ $item['P_ID'] }}</td>
                        <td>{{ $item['D_ID'] }}</td> 
                        <td>{{ $item['Date'] }}</td>
                        <td>{{ $item['Time'] }}</td>
                        <td>{{ $item['Order'] }}</td>

                       
            </tr>
            
            
    @endforeach


    </table>
</body>
</html>