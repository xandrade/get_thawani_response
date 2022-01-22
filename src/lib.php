<?php
/**
 * @author Muhannad Al-Risi
 */

if(!defined('THAWANI_PLUGIN_DIR')) {
    die('not defined');
    // replace  this with notification  
}else  { 
    require_once THAWANI_PLUGIN_DIR.'thawani-for-woocommerce/src/WC_Gateway_ThawaniGateway.php';
    require_once THAWANI_PLUGIN_DIR.'thawani-for-woocommerce/src/RestAPI.php';


    class GetThawaniResponse extends Thawani\WC_Gateway_ThawaniGateway { 

        private $api; 
        public function __construct(){ 
            $this->init();
            $secret_key = $this->get_option('secret_key');
            $publishable_key = $this->get_option('publishable_key');
            $environment = $this->get_option('environment');

            $this->api = new Thawani\RestAPI( $secret_key , $publishable_key, $environment);
        }

        public function get_session_json(){
            $session = $_POST['thawani_session'];
        }
    }

// end of if
}