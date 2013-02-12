<?php
/**
 * User: Zachary Tong
 * Date: 2/6/13
 * Time: 5:20 PM
 */
namespace sherlock\components\queries;
use sherlock\components;
use sherlock\common\exceptions;


/**
 * @method \sherlock\components\queries\Bool must() must($query)  Must clause of Bool - accepts an array of queries
 * @method \sherlock\components\queries\Bool should() should($query)  Should clause of Bool - accepts an array of queries
 * @method \sherlock\components\queries\Bool must_not() must_not($query)  Must clause of Bool - accepts an array of queries
 */
class Bool extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct()
	{
		$this->params['$boost'] = 1;
		$this->params['$minimum_number_should_match'] = 2;
		$this->params['$disable_coord'] = 1;
		$this->params['must'] = array();
		$this->params['should'] = array();
		$this->params['must_not'] = array();

	}
}



