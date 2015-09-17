<?php
/**
 * Created by PhpStorm.
 * User: Charan
 * Date: 9/17/2015
 * Time: 4:57 PM
 */
?>
<table>
    <tr>
        <td>Name</td>
        <td>SKU</td>
        <td>Price</td>
    </tr>
    <?php foreach ($products as $product) { ?>
        <tr>
            <td><?php if (isset($product->name)) echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($product->sku)) echo htmlspecialchars($product->sku, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($product->price)) echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    <?php } ?>
</table>
