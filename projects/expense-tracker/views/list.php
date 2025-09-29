<h3>Expenses</h3>
<table>
    <tr>
        <th>Date</th>
        <th>Amount</th>
        <th>Category</th>
    </tr>
    <?php foreach ($expenses as $expense): ?>
        <tr>
            <td><?= $expense->getDate() ?></td>
            <td><?= '$' . number_format($expense->getAmount(), 2) ?></td>
            <td><?= ucwords($expense->getCategory()->getName()) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<h3>Report</h3>
<table>
    <tr>
        <th>Amount</th>
        <th>Category</th>
    </tr>
    <?php foreach ($totalSpentPerCats as $totalSpentPerCat): ?>
        <tr>
            <td><?= '$' . number_format($totalSpentPerCat['total'], 2) ?></td>
            <td><?= ucwords($totalSpentPerCat['category_name']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>