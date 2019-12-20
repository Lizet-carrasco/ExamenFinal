<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
        <td>ID ELECTOR</td>
        <td>DNI ELECTOR</td>
        <td>NAME ELECTOR</td>
        <td>LAST NAME ELECTOR</td>
        <td>STATE ELECTOR</td>
        </tr>
        @foreach($Info as $elec)
        <tr>
            <th>{{$elec->id}}</th>
            <th>{{$elec->dni}}</th>
            <th>{{$elec->name}}</th>
            <th>{{$elec->lastName}}</th>
            <th>{{$elec->state}}</th>
            

        </tr>
        @endforeach
    </table>
</body>

</html>