<h1> Login </h1>
<p> Enter your username & password: </p>
<?php echo $this->Form->create();
 	echo $this->Form->control('email');
 	echo $this->Form->control('password');
 	echo $this->Form->button('Login');
 	echo $this->Form->end() 
    ?>



