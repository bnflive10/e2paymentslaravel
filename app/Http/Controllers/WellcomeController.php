<?php

namespace App\Http\Controllers;

use Explicador\E2PaymentsPhpSdk\Mpesa;
use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function makePayment(Request $request){
        //dd($request);
        $this->pagamento($request);
    }

    public function pagamento($request){

        $phone_number = $request->contato;
        $amount = $request->valor;
        $reference = $request->referencia;
        // Set the consumer key and consumer secret as follows
        $mpesa = new Mpesa();
        $mpesa->setClientId('9830c3d8-6ce9-47c3-84e6-61331496f998');
        $mpesa->setClientSecret('6y8wboidrrKbsi7YDtmJepu9AwdfYhXhQJ8LyWL1');
        $mpesa->setWalletId(484515);// 'live' production environment

//This creates transaction between an M-Pesa short code to a phone number registered on M-Pesa.

        $result = $mpesa->c2b($phone_number, $amount, $reference);
        echo var_dump($result);
    }
}
