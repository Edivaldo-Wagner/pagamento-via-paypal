
pagamento = async ()=>{

	await fetch("http://localhost/paypal pagamento/facture.php", {

		"method":"POST",

		"headers":{



			"Content-Type":"application/json"

		}

	}).then(promise=>promise.json()).then(function(data){

		console.log(data)

		var ppp = PAYPAL.apps.PPP({
			
		"approvalUrl": data.links[1].href,

		    "placeholder": "ppplus",

		    "mode": "sandbox",

		    "payerEmail": "vaguinitovagner@gmail.com",

		    "payerFirstName":"Edivaldo",

		    "payerLastName":"Wagner",

		    "payerTaxId": "",

		    "language":"pt_BR",

		    "country":"BR"


		});

	

	})


}

pagamento()
