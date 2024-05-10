<!-- // API's
API stands for Application Programming Interface. It acts as a bridge between client and server.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    
<table border="1">
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>gender</td>
            <td>status</td>
        </tr>
    </thead>
    <tbody id="userdata">

    </tbody>
</table>
<script>
    async function callapi()  //it is important to handle promises when dealing with API
    {
        let result = await fetch('https://gorest.co.in/public/v2/users');
        result = await result.json();  // json() converts out data into jason format, await is apply again because result again is a promise
        console.warn(result);
        document.getElementById('userdata').innerHTML=result.map((user)=> //to fetch data into a table we use map()
        `<tr>
        <td> ${user.id} </td>
        <td> ${user.name} </td>
        <td> ${user.email} </td>
        <td> ${user.gender} </td>
        <td> ${user.status} </td>
        </tr>`
    ).join("");
    }
    callapi();
</script>
</body>
</html>