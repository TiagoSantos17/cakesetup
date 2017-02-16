<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset> <!-- Aqui é feito o login -->
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<p><?= $this->Html->link('Create an Account', ['action' => 'add']) //Link para adicionar user ?></p>
<?= $this->Form->end() ?>
</div>