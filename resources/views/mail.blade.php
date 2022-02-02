<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        img{

        }
        </style>
        </head>
</head>
<body>
    <h1>{{  $details['title']  }}</h1>
    <p>{{  $details['body']  }}</p>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$details['id']}}</td>
                <td>{{$details['name']}}</td>
                <td>{{$details['email']}}</td>
            </tr>
            <tbody>
    </table><br/>
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/Manchester_United_FC_crest.svg/1200px-Manchester_United_FC_crest.svg.png" alt="Logo of code karkhana" style="width:128px;height:128px;"><br/>

</body>
</html>