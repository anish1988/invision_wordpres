<?php
//wp_die('it works');

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_directory_uri(), $dependencies ); 
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );


function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );


function change_email_form() { ?>
    <form action="" method="post">
        <label for="current_email">Enter your current Email:</label>
        <input class="form-control" id="current_email" type="text" name="current_email" title="current_email" placeholder="" required>
        </br>
        <label for="new_emial">Enter your New Email:</label>
        <input class="form-control" id="new_email" type="text" name="new_email" title="new_email" placeholder="" required>
        </br><input type="submit" value="Change Email">
    </form>
<?php }


function change_email(){
    if(isset($_POST['current_email'])){
        //echo 'saSAS';DIE();
              $_POST = array_map('stripslashes_deep', $_POST);
              $current_email = sanitize_text_field($_POST['current_email']);
              $new_emial = sanitize_text_field($_POST['new_email']);
              $user_id = get_current_user_id();
              $errors = array();
              $current_user = get_user_by('id', $user_id);
              global $wpdb;
              $dbData = array();
              $dbData['user_email'] = $new_emial;
              $result = $wpdb->update('wp_users', $dbData, array('ID' => $user_id));
              if($result > 0){
                echo "Successfully Updated";
                }
                else{
                    echo 'Something wrong.';
                  exit( var_dump( $wpdb->last_query ) );
                }
                $wpdb->flush();
        }
    }

 

    

 function cp_form_shortcode(){
        change_email();
            change_email_form();
}
add_shortcode('changeemail_form', 'cp_form_shortcode');