
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
</head>

<body>
<?php
function arrayFromCSV($file, $hasFieldNames = false, $delimiter = ',', $enclosure='') {
    $result = Array();
    $size = filesize($file) +1;
    $file = fopen($file, 'r');
    #TO DO: There must be a better way of finding out the size of the longest row... until then
    if ($hasFieldNames) $keys = fgetcsv($file, $size, $delimiter, $enclosure);
    while ($row = fgetcsv($file, $size, $delimiter, $enclosure)) {
        $n = count($row); $res=array();
        for($i = 0; $i < $n; $i++) {
            $idx = ($hasFieldNames) ? $keys[$i] : $i;
            $res[$idx] = $row[i];
        }
        $result[] = $res;
    }
    fclose($file);
    return $result;
}
?>
</body>
</html>