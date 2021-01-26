<?php
$file = $_POST['file'];
$readCsv = array_map('str_getcsv', $file);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
</head>

<body>
<?php
foreach ($readCsv as $itemCsv) {
    echo "<tr>";
    foreach ($itemCsv as $elementoItemCSV) {
        echo "<td>$elementoItemCSV</td>";
    }
    echo "</tr>";
}
?>
</body>
</html>