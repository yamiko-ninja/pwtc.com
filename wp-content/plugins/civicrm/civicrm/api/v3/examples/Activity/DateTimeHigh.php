<?php
/**
 * Test Generated example demonstrating the Activity.get API.
 *
 * Demonstrates _high filter (at time of writing doesn't work if contact_id is set.
 *
 * @return array
 *   API result array
 */
function activity_get_example() {
  $params = array(
    'source_contact_id' => 1,
    'filter.activity_date_time_high' => '20120101000000',
    'sequential' => 1,
  );

  try{
    $result = civicrm_api3('Activity', 'get', $params);
  }
  catch (CiviCRM_API3_Exception $e) {
    // Handle error here.
    $errorMessage = $e->getMessage();
    $errorCode = $e->getErrorCode();
    $errorData = $e->getExtraParams();
    return array(
      'is_error' => 1,
      'error_message' => $errorMessage,
      'error_code' => $errorCode,
      'error_data' => $errorData,
    );
  }

  return $result;
}

/**
 * Function returns array of result expected from previous function.
 *
 * @return array
 *   API result array
 */
function activity_get_expectedresult() {

  $expectedResult = array(
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 1,
    'values' => array(
      '0' => array(
        'id' => '1',
        'activity_type_id' => '51',
        'subject' => 'Make-it-Happen Meeting',
        'activity_date_time' => '2011-01-01 00:00:00',
        'duration' => '120',
        'location' => 'Pennsylvania',
        'details' => 'a test activity',
        'status_id' => '1',
        'priority_id' => '1',
        'is_test' => 0,
        'is_auto' => 0,
        'is_current_revision' => '1',
        'is_deleted' => 0,
        'is_star' => 0,
        'source_contact_id' => '1',
      ),
    ),
  );

  return $expectedResult;
}

/*
* This example has been generated from the API test suite.
* The test that created it is called "testGetFilterMaxDate"
* and can be found at:
* https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/ActivityTest.php
*
* You can see the outcome of the API tests at
* https://test.civicrm.org/job/CiviCRM-master-git/
*
* To Learn about the API read
* http://wiki.civicrm.org/confluence/display/CRMDOC/Using+the+API
*
* Browse the api on your own site with the api explorer
* http://MYSITE.ORG/path/to/civicrm/api
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/
