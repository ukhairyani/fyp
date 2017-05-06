<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartsController extends Controller
{

    public function index()
    {
        return view('active.list_ride');

    }


    public function create()
    {
        //
    }

    function sendemail()
{
    var url = '/mail.php';

    new Ajax.Request(url,{
            onComplete:function(transport)
            {
                var feedback = transport.responseText.evalJSON();
                if(feedback.result==0)
                    alert('There was a problem sending the email, please try again.');
            }
        });

}

    public function store(Request $request)
    {
        if(isset($_POST['button_pressed']))
        {
            $to      = 'ummikhairyani2@yahoo.com';
            $subject = 'the subject';
            $message = 'hello';
            $headers = 'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);

            echo 'Email Sent.';
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
