<?php


namespace CRM;

class Sugar {

	private $url = "http://crm.maldena.com.ua/service/v4_1/rest.php";
	private $username = "admin";
	private $password = "ser21dik";
	private $sessionId = '';

	public function __construct() {
		$loginParameters = array("user_auth" => array(
			"user_name" => $this->username,
			"password" => md5($this->password),
			"version" => "1"
			),
			 "application_name" => "MaldenaCRM",
			 "name_value_list" => array(),
		);

		$login_result = $this->call("login", $loginParameters);

		//get session id
		$this->sessionId = $login_result->id;

	}

	private function call($method, $parameters) {
		ob_start();
		$curl_request = curl_init();

		curl_setopt($curl_request, CURLOPT_URL, $this->url);
		curl_setopt($curl_request, CURLOPT_POST, 1);
		curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
		curl_setopt($curl_request, CURLOPT_HEADER, 1);
		curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

		$jsonEncodedData = json_encode($parameters);

		$post = array(
			"method" => $method,
			"input_type" => "JSON",
			"response_type" => "JSON",
			"rest_data" => $jsonEncodedData
		);

		curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
		$result = curl_exec($curl_request);
		curl_close($curl_request);

		$result = explode("\r\n\r\n", $result, 2);
		$response = json_decode($result[1]);
		ob_end_flush();

		return $response;
	}

	/**
	 * @param array $user
	 */
	public function updateContact($user) {
		$set_entry_parameters = array(
			//session id
			"session" => $this->sessionId,

			 //The name of the module from which to retrieve records.
			 "module_name" => "Contacts",

			 //Record attributes
			 "name_value_list" => array(
				//to update a record, you will nee to pass in a record id as commented below
				array("name" => "first_name", "value" => $user['name']),
				array("name" => "description", "value" => $user['text']),
			),
		);

		if (!empty($user['crmId'])) {
			array_push($set_entry_parameters['name_value_list'],
				array("name" => "id", "value" => $user['crmId']));
		}

		if (isset($user['phone']) && $user['phone'] != '') {
			array_push($set_entry_parameters['name_value_list'],
				array("name" => "phone_mobile", "value" => $user['phone']));
		}

		if (isset($user['email']) && $user['email'] != '') {
			array_push($set_entry_parameters['name_value_list'],
				array("name" => "email1", "value" => $user['email']));
		}

		$result = $this->call("set_entry", $set_entry_parameters);

		return $result->id;
	}
}

