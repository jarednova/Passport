<h2>Edit School</h2>

<?php echo $this->html->object_link($object, array('controller' => 'schools', 'text' => 'View')); ?>
<?php echo $this->form->create($model->name); ?>
<?php echo $this->form->input('name'); ?>
<?php echo $this->form->input('url', array('label' => 'URL', 'style' => 'width: 300px;')); ?>
<?php echo $this->form->input('address1', array('label' => 'Address 1')); ?>
<?php echo $this->form->input('address2', array('label' => 'Address 2')); ?>
<?php echo $this->form->input('description'); ?>
<?php echo $this->form->end('Update'); ?>