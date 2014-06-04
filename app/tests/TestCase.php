<?php
require __DIR__.'/support/ViewHelpers.php';

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    /**  Trait used by tests to search views for text */
    use ViewHelpers;

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

}
