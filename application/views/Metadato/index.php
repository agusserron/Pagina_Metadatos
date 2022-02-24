<h2><?php echo $titulo; ?></h2>

<?php foreach ($metadato as $metadato_item): ?>

        <h3><?php echo $metadato_item['titulo']; ?></h3>
        <div class="main">
                <?php echo $metadato_item['descripcion']; ?>
        </div>
        <p><a href="<?php echo site_url('metadato/'.$metadato_item['slug']); ?>">Ver metadato</a></p>

<?php endforeach; ?>