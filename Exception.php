<?php

use Data\Cat;

require_once 'data/LoginRequest.php';
require_once 'helper/Validation.php';

$loginRequest = new LoginRequest();
$loginRequest->username = "Fikri";
$loginRequest->password = " ";

// Exception without try catch
// validateLoginRequest($loginRequest);

// With try catch
// try {
//   validateLoginRequest($loginRequest);
// } catch (ValidationException $exception) {
//   echo "Error : {$exception->getMessage()}" . PHP_EOL ;
// }

// Multiple 
// try {
//   validateLoginRequest($loginRequest);
// } catch (ValidationException $exception) {
//   echo "Validate Error : {$exception->getMessage()}" . PHP_EOL ;
// } catch (Exception $exception) {
//   echo "Error : {$exception->getMessage()}" . PHP_EOL ;
// }

// Multiple (2)
try {
  validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
  echo "Validate Error : {$exception->getMessage()}" . PHP_EOL ;
} 