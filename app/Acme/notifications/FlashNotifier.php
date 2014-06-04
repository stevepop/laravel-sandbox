<?php
/**
 * User: steve
 * Date: 03/06/2014
 * Time: 12:47
 */

namespace Acme\notifications;

use Illuminate\Session\Store;


class FlashNotifier {

    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function success($message)
    {
        $this->message($message, 'success');
    }

    public function error($message)
    {
        $this->message($message, 'danger');
    }

    public function overlay($message)
    {
        $this->message($message);
        $this->session->flash('flash.notification.overlay', true);
    }



    public function message($message, $level='info')
    {
        $this->session->flash('flash.notification.message', $message);
        $this->session->flash('flash.notification.level', $level);
    }

} 