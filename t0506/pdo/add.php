<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">  
<table  border="1px" width="80%">
        <tr>
            <th>id</th>
            <th>店名</th>
            <th>區域</th>
            <th>營業額</th>
            <th>來客數</th>
        </tr>
        <td>id</td>

        <td><input type="text" name="name" id="name"></td>
        <td>
        <select id="location" name="location">
    <option value="北區">北區</option>
    <option value="中區">中區</option>
    <option value="南區">南區</option>
    </select>
        </td>

        <td><input type="number" name="price" id="price"></td>
        <td><input type="number" name="people" id="people"></td>

    <tr>
        <td colspan=5> <input type="submit" value="查詢"></td>
        </tr>
        </form>
</body>
</html>