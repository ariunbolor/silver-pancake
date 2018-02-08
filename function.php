/*
 * Create cutsom post from JSON Request
 */

require get_template_directory() . '/inc/cutom-post-type-import.php';

 add_action ( 'init', function() {

   // break time in the demo... run on the front and watch the posts pile up
   if( is_admin() ) return;

   // Create posts from remote data?
   $to_create_posts = true;

   // Load the feed
   $data = CryptoCoins::LoadRemoteCryptoCoins( $to_create_posts );

 });

