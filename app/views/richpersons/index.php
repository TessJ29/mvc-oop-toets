<?php echo $data["title"];

?>
<table>
    <thead>
        <th>id</th>
        <th>Naam</th>
        <th>Vermogen</th>
        <th>Leeftijd</th>
        <th>Bedrijf</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?= $data['persons'] ?>
    </tbody>
</table>
