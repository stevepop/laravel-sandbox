<?php
class FlashTest extends TestCase {

    public function setUp()
    {
        parent::setUp();

        Session::start();
    }

    /** @test **/
    public function it_displays_default_flash_notifications()
    {
        Flash::message('Welcome Aboard');

        $this->call('GET','/');

        $this->see('Welcome Aboard','.alert-info');
    }

    /** @test **/
    public function it_displays_success_flash_notifications()
    {
        Flash::success('Welcome Aboard');

        $this->call('GET','/');

        $this->see('Welcome Aboard','.alert-success');
    }

    /** @test **/
    public function it_displays_error_flash_notifications()
    {
        Flash::error('Uh oh');

        $this->call('GET','/');

        $this->see('Uh oh','.alert-danger');
    }

    /** @test **/
    public function it_displays_flash_overlay_notifications()
    {
        Flash::overlay('Welcome Aboard');

        $this->call('GET','/');

        $this->see('Welcome Aboard','.modal');
    }
}
