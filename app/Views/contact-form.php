<?php helper('form'); ?>

<?php if($error): ?>
<p class="error"><strong>Hibásan kitöltve!</strong><br><?= $error ?></p>
<?php endif; ?>

<?=form_open(base_url('contact'))
.view('templates/contactcontent')?>


<div>
	<?= form_label('Teljes név', 'fullname') ?>
	<?= form_input('fullname', set_value('fullname'), ['id' => 'fullname', 'placeholder' => 'Például: Boldog Pista']) ?>
</div>
<div>
	<?= form_label('E-mail cím', 'email') ?>
	<?= form_input('email', set_value('email'), ['id' => 'email', 'placeholder' => 'Például: boldog@gmail.com', 'email']) ?>
</div>
<div>
	<?= form_label('Telefonszám', 'phone') ?>
	<?= form_input('phone', set_value('phone'), ['id' => 'phone', 'placeholder' => 'Például: +36301234567', 'phone']) ?>
</div>
<div>
	<?= form_label('Tárgy', 'subject') ?>
	<?= form_dropdown('subject', ['Vásárlás', 'Ajánlatkérés', 'Információ', 'Egyéb fajra beszerzési igény'], set_value('subject', 0), ['id' => 'subject']) ?>
</div>
<div>
	<?= form_label('Üzenet szövege', 'message') ?>
	<?= form_textarea('message', set_value('message'), ['id' => 'message']) ?>
</div>
<div class="check">
	<?= form_checkbox('accept', 1, false, ['id' => 'accept']) ?>
	<?= form_label('Elfogadom az adatkezelési szabályzatot', 'accept') ?>
</div>
<?= form_submit('send', 'Küldés') ?>
<?= form_close() ?>


