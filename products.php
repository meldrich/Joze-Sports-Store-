<?php
require 'header.php';

$discount = 0.1;

$watches = [
    ["Joze Forerunner 55", 10995, 12],
    ["Joze Venu Sq 2", 16995, 8],
    ["Joze Instinct 2 Solar", 25995, 5],
    ["Joze Fenix 7S", 41995, 4]
];

$shoes = [
    ["Joze Runner X1", 3495, 20],
    ["Joze Sprint Pro", 4995, 15],
    ["Joze UltraTrail Max", 5995, 10],
    ["Joze LightStep 2.0", 2595, 25]
];
?>

<div class="section-label">JOZE WATCHES</div>
<table>
    <tr>
        <th>Model</th>
        <th>Original Price</th>
        <th>Discounted Price</th>
        <th>Stock</th>
    </tr>
<?php
for ($i = 0; $i < count($watches); $i++) {
    $discounted = $watches[$i][1] * (1 - $discount);

    if ($watches[$i][2] >= 10) {
        $stockMsg = "Good availability";
    } elseif ($watches[$i][2] > 0) {
        $stockMsg = "Low stock";
    } else {
        $stockMsg = "Out of stock";
    }

    echo "<tr>
            <td>".$watches[$i][0]."</td>
            <td>Php ".$watches[$i][1]."</td>
            <td>Php ".$discounted."</td>
            <td>".$watches[$i][2]." pcs - ".$stockMsg."</td>
          </tr>";
}
?>
</table>

<div class="section-label">JOZE SHOES</div>
<table>
    <tr>
        <th>Model</th>
        <th>Original Price</th>
        <th>Discounted Price</th>
        <th>Stock</th>
    </tr>
<?php
$j = 0;
while ($j < count($shoes)) {
    $discounted = $shoes[$j][1] * (1 - $discount);
    $stockMsg = ($shoes[$j][2] >= 10) ? "Good availability" : "Low stock";

    echo "<tr>
            <td>".$shoes[$j][0]."</td>
            <td>Php ".$shoes[$j][1]."</td>
            <td>Php ".$discounted."</td>
            <td>".$shoes[$j][2]." pcs - ".$stockMsg."</td>
          </tr>";

    $j++;
}
?>
</table>

<?php
require 'footer.php';
?>

