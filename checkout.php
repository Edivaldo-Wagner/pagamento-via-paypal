<?php

	define("Modo", "sandbox");

	if(Modo == "sandbox"){

		define("CLIENTID", "Aa42uO6zaBFot0-r3vn2UIzBJUkwPmg98dE195lb4k9PQuj-_tBniNTx-cmE7Z5kvS_CHy_ryySRftkE");

		define("SECRETID", "EKHhbtIUPR6uOuTHtBQav3Gfv1az5oF4bqY-WRWhgpTaI7Eu_GsLo4dSMIAJ69eYJg0zbtRvTwgZGgCS");

	}else{

		define("CLIENTID", "ATOfeQSdXGr4-W6xm_p_ENfDCPdQtxNkZDIkR9uP4km9sVdKaWDTpMY_6XSFpofRxTylKKEZwHETe73j");

		define("SECRETID", "EGKU2Lu7x5HYqpsOFYt63oJNBZ4x0H476kwnv_ia_IUw6U0fvZHKmUI0Vnz9vP1Qd_GLfe5iOCvbXFln");

	}

?>


<?php


	class checkout{

		private $url;

		private $token;

		private $credentials;


		private function curl($accao){


			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, $this->url);

			if($accao == "PegarToken"){

				curl_setopt($ch, CURLOPT_HEADER, false);

			}else{


				curl_setopt($ch,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$this->token->access_token.""));



			}

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

			curl_setopt($ch, CURLOPT_POST, true);

			curl_setopt($ch, CURLOPT_POSTFIELDS, $this->credentials);

			if($accao == "PegarToken"){

				curl_setopt($ch, CURLOPT_USERPWD, CLIENTID . ":" . SECRETID);

			}else{

				false;

			}

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$dados = curl_exec($ch);

			curl_close($ch);

			return json_decode($dados);



		}


		public function getToken(){

			$this->url = "https://api-m.sandbox.paypal.com/v1/oauth2/token";

			$this->credentials = "grant_type=client_credentials";

			$this->token = $this->curl("PegarToken");


		}

		public function sendFacture($facture){

			$this->getToken();

			$this->url = "https://api-m.sandbox.paypal.com/v1/payments/payment";

			$this->credentials = $facture;

			return json_encode($this->curl("MandarFactura"));


		}



	}



	?>




	