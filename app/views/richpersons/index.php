<?php echo $data["title"];

?>
<table>
    <thead>
        <th>id</th>
        <th>Land</th>
        <th>capital</th>
        <th>Continent</th>
        <th>Population</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?= $data['persons'] ?>
    </tbody>
</table>
