<?php
class Firewall extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This is the entry of our Firewall Panel.
     */
    public function panel()
    {
        $panel = new \Shieldon\Firewall\Panel();
        $panel->entry();
    }
}