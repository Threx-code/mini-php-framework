<?php
namespace Controller;
use Controller\Sanitizer as Sanitizer;

trait Validator{

/*creating a trait*/
	use Sanitizer;
	/*session Id*/
	public function sessionId(){
		Sanitizer::sameSessionId();
	}

	/*destroy session*/
	public function destroySession(){
		Sanitizer::destroySession();
	}

	/*security token*/
	public function crfToken(){
		return Sanitizer::crfToken();
	}

	public function selfURL(){
		return Sanitizer::selfURL();
	}

	/*security token exprire time*/
	public function tokenTime(){
		return Sanitizer::tokenTime();
	}

	public function checkToken($var){
		return Sanitizer::sanitizeString(Sanitizer::checkToken($var));
	}

	/*sanitizing user input*/
	public function sanitizeString($var){
		return Sanitizer::sanitizeString($var);
	}

	/*empty variable*/
	public function isEmpty($string, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::isEmpty($string, $attribute));
	}

	/*variable equality*/
	public function variableAreEqual($variableOne, $variableTwo, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::variableAreEqual($variableOne, $variableTwo, $attribute));
	}

	/*variable not equal*/
	public function variableNotEqual($variableOne, $variableTwo, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::variableNotEqual($variableOne, $variableTwo, $attribute));
	}


	/*email validation*/
	public function emailExpression($email, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::emailExpression($email, $attribute));
	}

	/*password validation*/
	public function passwordSanitize($password, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::passwordSanitize($password, $attribute));
	}

	
	/*name validation*/
	public function inputChecker($name, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::inputChecker($name, $attribute));
	}

	

	/*surname validation*/
	public function allNameChecker($name, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::allNameChecker($name, $attribute));
	}

	/*Opther option validation*/
	public function otherOptions($main, $option, $attribute){
	return Sanitizer::sanitizeString(Sanitizer::otherOptions($main, $option, $attribute));
	}


	/*date validation*/

	public function dateOption($date, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::dateOption($date, $attribute));
	}

	/*textarea validation*/
	public function textArea($string){
		return Sanitizer::sanitizeString(Sanitizer::textArea($string));
	}

	/*phone number validation*/
	public function phoneChecker($phone){
		return Sanitizer::sanitizeString(Sanitizer::phoneChecker($phone));
	}

	public function selectChecker($string, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::selectChecker($string, $attribute));
	}


	/*empty checker*/
	public function accountNumber($var, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::accountNumber($var, $attribute));
	}

	/*only number*/
	public function onlyNumber($var, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::onlyNumber($var, $attribute));
	}

	/*address checker*/
	public function addressChecker($name, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::addressChecker($name, $attribute));
	}

	/*alphaNumeric checker*/
	public function alphaNumeric($var, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::alphaNumeric($var, $attribute));
	}


	/*getting mime types*/
	public function mimeType($fileTemName, $fileUrl, $FileType){
		return Sanitizer::sanitizeString(Sanitizer::mimeType($fileTemName, $fileUrl, $FileType));
	}

	public function unlinkFile($fileUrl){
		return Sanitizer::sanitizeString(Sanitizer::unlinkFile($fileUrl));
	}


	/*THIS METHODS ARE FOR IMAGE*/
	public function imageValidation($imageType, $imageURL, $tempName, $imageSize, $pngSize, $attribute){
		return Sanitizer::sanitizeString(Sanitizer::imageValidation($imageType, $imageURL, $tempName, $imageSize,$pngSize, $attribute));
	}
	/*END OF METHODS FOR IMAGES*/






}


?>