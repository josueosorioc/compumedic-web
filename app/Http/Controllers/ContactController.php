<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Mail\Contact;
use Validator;
use Mail;
use Log;

class ContactController extends Controller {

    public function sendLead(Request $req) {
        try {
            $validator = Validator::make($req->all(), [
                'nombre' => 'required',
                'telefono' => 'required',
                'correo' => 'required',
            ], [], [
                'nombre' => 'Nombre',
                'telefono' => 'Teléfono',
                'correo' => 'Correo Electrónico'
            ]);

            if ($validator->passes()) {

                $emails = ['adriana.contreras@futurite.com'];
                Mail::to($emails)->send(new Contact($req));

                Log::info("se supone envio mail");

                $client = new Client();
                $resOmnia = $client->request('POST', 'https://omnia.futurite.com/api/save-lead-form', [
                    'verify' => false,
                    'json' => [
                        'nombre' => $req->input('nombre'),
                        'correo' => $req->input('correo'),
                        'telefono' => $req->input('telefono'),
                        'mensaje' =>  $req->input('mensaje'),
                        'utm_id' => $req->input('utm_id'),
                        'utm_source' => $req->input('utm_source'),
                        'utm_medium' => $req->input('utm_medium'),
                        'utm_campaign' => $req->input('utm_campaign'),
                        'utm_content' => $req->input('utm_content'),
                        'utm_term' => $req->input('utm_term'),
                        'token' => 'RnV0dXJpdGUyMDIw',
                        'client' => 147
                    ]
                ]);

                Log::info($resOmnia->getBody());
                Log::info("omnia - se supone envio mail");
                return redirect()->route('gracias');
            } else {
                return redirect()->back()->withError($validator->errors()->all());
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
