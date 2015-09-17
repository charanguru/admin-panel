<?php
/**
 * Created by PhpStorm.
 * User: Charan
 * Date: 9/15/2015
 * Time: 12:46 AM
 */?>
<?php echo count($testRecords) ?>
<?php print_r ($testRecords) ?>
<table>
    <tr>
        <td>Name</td>
        <td>Description</td>
        <td>Nullable Field</td>
    </tr>
    <?php foreach ($testRecords as $testRecord) { ?>
        <tr>
            <td><?php if (isset($testRecord->name)) echo htmlspecialchars($testRecord->name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($testRecord->description)) echo htmlspecialchars($testRecord->description, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($testRecord->nullable_field)) echo htmlspecialchars($testRecord->nullable_field, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    <?php } ?>
</table>