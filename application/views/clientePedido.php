<div class="container">
    <H1>Resumo de Pedidos</H1>

    <?php if (!empty($pedidos)): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Número do Pedido</th>
                    <th>Data</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidos as $venda): ?>
                    <tr>
                        <td><?= htmlspecialchars($venda['id_venda']); ?></td>
                        <td><?= date('Y/m/d H:i', strtotime($venda['data_venda'])); ?></td>
                        <td>R$ <?= number_format($venda['total']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum Pedido encontrado.</p>
    <?php endif; ?>



    <a href="<?= base_url('cliente') ?>" class="btn btn-default">Voltar</a>

</div>