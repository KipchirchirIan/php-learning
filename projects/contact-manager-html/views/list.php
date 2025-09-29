<h2>Contact List</h2>
<ul>
    <?php foreach ($contacts as $contact): ?>
        <li><?= $contact->getName() . ' - ' . $contact->getTelephone() . ' (' . $contact->getEmail() . ')' ?></li>
    <?php endforeach; ?>
</ul>