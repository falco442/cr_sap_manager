<div class="row centered">
    <div class="col">
        <h3><?= __('Systems') ?></h3>
    </div>
</div>

<div class="row centered">
    <div class="col">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($systems as $system): ?>
                <tr>
                        <td><?= $this->Number->format($system->id) ?></td>
                        <td><?= h($system->name) ?></td>
                        <td><?= h($system->created) ?></td>
                        <td><?= h($system->modified) ?></td>
                        <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $system->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $system->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $system->id], ['confirm' => __('Are you sure you want to delete # {0}?', $system->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="row centered">
    <div class="col">
        <nav class="pagination">
            <ul>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </nav>
    </div>
</div>
