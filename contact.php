<?php 

/* Template Name: creationkit*/

 get_header();?>


<?php 


if (isset($_POST['submit'])) {
	$name = htmlspecialchars($_POST['myname']);

	$email = sanitize_email($_POST['myemail']);
	$mesage = wp_kses_post($_POST['mymessage']);



	$contact_post = array('');


	wp_insert_post($contact_post);










}else{

}


 ?>

 <form action="<?php echo the_permalink(); ?>" method="POST">
 <br>
 <label for="name">nom</label>
 <input type="text" name="myname" id="name" placeholder="votre nom "/>

 <br>


  <label for="name">adresse mail </label>
 <input type="text" name="myemail" id="email" placeholder="votre email "/>
 <br>


 <label for="name">message</label>
 <textarea name="mymessage" id="message" cols="50" rows="10" placeholder="message" ></textarea>
 <br>


 <input type="submit" name="submit" value="envoyer votre message">



 </form>

<?php get_footer(); ?>