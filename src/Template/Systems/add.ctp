<div class="row centered">
    <div class="col">
        <div class="systems form large-9 medium-8 columns content">
            <?= $this->Form->create($system) ?>
            <fieldset>
                <legend><?= __('Add System') ?></legend>
                <div class="form-item">
                    <?= $this->Form->input('name'); ?>
                </div>
                <div class="form-item">
                    <?= $this->Form->button(__('Submit'),['class'=>'button primary']) ?>
                </div>
            </fieldset>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
