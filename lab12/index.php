<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab12</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<form action="" id="lab12Form">
    <input type="text" name="tableName1" placeholder="Enter name for table1">
    <input type="text" name="tableName2" placeholder="Enter name for table2">
    <input type="submit" name="OK" value="OK" id="OkButton">
</form>
<?php
if (isset($_REQUEST['OK'])) {
    require_once 'DataBase.php';
    $tableName1 = $_REQUEST['tableName1'];
    $tableName2 = $_REQUEST['tableName2'];;
    $database = new Database();
//Персональные данные клиентов с активацией более 1 года
    $database->query("SELECT p.full_name, p.address, p.region FROM clients AS c INNER JOIN personal_information AS p ON c.id=p.client_id WHERE activation_date <= NOW() - INTERVAL 1 YEAR");
    $database->execute();
    $arr = $database->resultset(); ?>
    <p class="pHeader">Персональные данные клиентов с активацией более 1 года:</p>
    <table>
        <thead>
        <tr>
            <th>Full name</th>
            <th>Address</th>
            <th>Region</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($arr as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    $keys = array_keys($arr[0]);
//Создать новую таблицу и занести в нее результаты запроса
    $database->query("CREATE TABLE IF NOT EXISTS $tableName1  (id INT AUTO_INCREMENT NOT NULL, $keys[0] VARCHAR (255), $keys[1] VARCHAR (255), $keys[2] VARCHAR (255), PRIMARY KEY(id)) ");
    $database->execute();
    $database->query("INSERT INTO $tableName1(full_name,address,region) SELECT p.full_name, p.address, p.region FROM clients AS c INNER JOIN personal_information AS p ON c.id=p.client_id WHERE activation_date <= NOW() - INTERVAL 1 YEAR");
    $database->execute();
//Тарифные планы, на которые в течениии последнего  месяца не было подключений
    $database->query("SELECT t.name FROM clients AS c INNER JOIN tariffs t ON c.tariff_id = t.id WHERE c.tariff_id=t.id AND c.activation_date <= NOW() - INTERVAL 1 MONTH GROUP BY t.name");
    $database->execute();
    $arr = $database->resultset();
    ?>
    <p class="pHeader">Тарифные планы, на которые в течениии последнего месяца не было подключений:</p>
    <table>
        <thead>
        <tr>
            <th>Tariff name</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($arr as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    $keys = array_keys($arr[0]);
//Создать новую таблицу и занести в нее результаты запроса
    $database->query("CREATE TABLE IF NOT EXISTS $tableName2  (id INT AUTO_INCREMENT NOT NULL, $keys[0] VARCHAR (255), PRIMARY KEY(id)) ");
    $database->execute();
    $database->query("INSERT INTO $tableName2($keys[0]) SELECT t.name FROM clients AS c INNER JOIN tariffs t ON c.tariff_id = t.id WHERE c.tariff_id=t.id AND c.activation_date <= NOW() - INTERVAL 1 MONTH GROUP BY t.name");
    $database->execute();
}
?>
</body>
</html>


