
<?php

include "checkout.php";

$f = new checkout;

 $facture = '{
  "intent": "sale",
  "payer": {
    "payment_method": "paypal"
  },
  "transactions": [{
    "amount": {
      "currency": "BRL",
      "total": "93.00",
      "details": {
        "shipping": "11",
        "subtotal": "75",
        "shipping_discount": "1.00",
        "insurance": "1.00",
        "handling_fee": "1.00",
        "tax": "6.00"
      }
    },
    "description": "This is the payment transaction description",
    "payment_options": {
      "allowed_payment_method": "IMMEDIATE_PAY"
    },
    "item_list": {
      "shipping_address": {
        "recipient_name": "PP Plus Recipient",
        "line1": "Gregório Rolim de Oliveira, 42",
        "line2": "JD Serrano II",
        "city": "Votorantim",
        "country_code": "BR",
        "postal_code": "18117-134",
        "state": "São Paulo",
        "phone": "0800-761-0880"
      },
      "items": [{
        "name": "handbag",
        "description": "red diamond",
        "quantity": "1",
        "price": "75",
        "tax": "6",
        "sku": "product34",
        "currency": "BRL"
      }]
    }
  }],
  "redirect_urls": {
    "return_url": "https://example.com/return",
    "cancel_url": "https://example.com/cancel"
  }
}';


echo $f->sendFacture($facture);


?>