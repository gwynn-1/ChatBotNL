<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Dialogflow\V2\AgentsClient;

class WebhookController extends Controller
{
    //

    public function getCallback(Request $request){

        try {
//            dd(KEY_FILE);
            $agentsClient = new AgentsClient([
                'credentials' => KEY_FILE
            ]);
            $formattedParent = $agentsClient->projectName('ChatBotNL');
            $response = $agentsClient->getAgent($formattedParent);
            dd($response);
        }catch (\Exception $e){
            dd($e->getMessage());
        }
        finally {
            $agentsClient->close();
        }
//        return response()->json(["status"=>"success"],200);
    }
}
