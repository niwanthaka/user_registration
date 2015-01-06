<?php echo form_open('user/login',array('id'=>'login_form')); ?>

<p>Username :
<?php echo form_input(array('name'=>'username','placeholder'=>'Username','value'=>set_value('username'))); ?> <!--username-->
</p>
<p>Password :
<?php echo form_password(array('name'=>'password','placeholder'=>'Password','value'=>set_value('password'))); ?><!--password-->
</p>
<p>
<?php echo form_submit(array('name'=>'sbm_btn','value'=>'Login')); ?>
</p>
<?php echo form_close(); ?>