<!-- file views/listing-bahan.php -->

<h1>Listing bahan-bahan</h1>

<?php if (empty($bahanBahan)): ?>
Belum ada bahan

<?php else: ?>
<ol>
    <?php foreach($bahanBahan as $bahan):?>
        <li><a href='/bahan/<?php echo $bahan['id']; ?>'><?php echo $bahan['nama']; ?></li>
        <?php endforeach; ?>
    </ol>
    <?php endif; ?>
