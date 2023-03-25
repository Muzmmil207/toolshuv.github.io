<?php

// Function to send notifications to subscribers

function sendNotification() {

  $subscribers = array(

    // Add subscriber IDs here

  );

  $message = array(

    'title' => 'Breaking news !',

    'body' => 'Check out the latest Breaking news on our website',

    'url' => 'https://ocenfeed.blogspot.com/'

  );

  $headers = array(

    'Authorization: key=AAAAevKon5g:APA91bHiApaHXmjU8Wx4CtnL8nRIh5MkTECEqjeBB96lnR3Np_RQqN-uyWF55ahE0oHF5YJiDvtYz3Pqebv-YtFxHGw2JMEfAoTy0BWZuyF8vVRvwQZR_fwJE5sPA8nQ9aduc4Uuilea',

    'Content-Type: application/json'

  );

  $data = array(

    'registration_ids' => $subscribers,

    'notification' => $message

  );

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

  curl_setopt($ch, CURLOPT_POST, true);

  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

  $response = curl_exec($ch);

  curl_close($ch);

  return $response;

}

// Call sendNotification function when a new article is published

sendNotification();

?>

