<?php
/**
 * Person class Tests
 *
 * @group App
 */
class Test_Person extends TestCase {
	public function test_get_gender() {
		$person = new Person('Rintaro', 'male', '1991/12/14');
		$test = $person->get_gender();
		$expected = 'male';
		$this->assertEquals($expected, $test);
	}
}