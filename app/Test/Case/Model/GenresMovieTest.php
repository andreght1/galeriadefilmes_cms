<?php
App::uses('GenresMovie', 'Model');

/**
 * GenresMovie Test Case
 */
class GenresMovieTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.genres_movie',
		'app.genre',
		'app.movie',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GenresMovie = ClassRegistry::init('GenresMovie');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GenresMovie);

		parent::tearDown();
	}

}
