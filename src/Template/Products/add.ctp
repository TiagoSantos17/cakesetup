<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li><!-- Barra de navegação com as diferentes funcionalidades do site -->
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product,array('enctype'=>'multipart/form-data')) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->input('product_name');
            echo $this->Form->input('cost', array('type'=>'number','min' => 0));
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('imagem', array('type'=>'file')); //Aqui é selecionada uma imagem. Ao submeter, a imagem é guardada no servidor e o caminho + nome armazenado na base de dados.
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
