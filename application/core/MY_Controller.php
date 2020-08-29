<?php
class MY_Controller extends CI_Controller
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        // Composer autoloader
        require_once APPPATH . 'core/vendor/autoload.php';

        // This directory must be writable.
        $storage =  APPPATH . 'core\shieldon';

        $firewall = new \Shieldon\Firewall\Firewall();
        $firewall->configure($storage);

        // The base url for the control panel.
        $firewall->controlPanel('/firewall/panel/');

        $response = $firewall->run();

        if ($response->getStatusCode() !== 200) {
            $httpResolver = new \Shieldon\Firewall\HttpResolver();
            $httpResolver($response);
        }
    }

    /**
     * Shieldon Firewall protection.
     */
    public function firewall()
    {
        $firewall = \Shieldon\Container::get('firewall');
        $firewall->run();
    }
}