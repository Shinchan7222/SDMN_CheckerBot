<?php

$update = json_decode(file_get_contents("php://input"), false);

$chat_id = isset($update->message->chat->id) ? $update->message->chat->id : null;
$userId = isset($update->message->from->id) ? $update->message->from->id : null;
$firstname = isset($update->message->from->first_name) ? $update->message->from->first_name : null;
$lastname = isset($update->message->from->last_name) ? $update->message->from->last_name : null;
$username = isset($update->message->from->username) ? $update->message->from->username : null;
$chattype = isset($update->message->chat->type) ? $update->message->chat->type : null;
$message = isset($update->message->text) ? $update->message->text : null;
$message_id = isset($update->message->message_id) ? $update->message->message_id : null;
$replytomessageis = isset($update->message->reply_to_message->text) ? $update->message->reply_to_message->text : null;
$data = isset($update->callback_query->data) ? $update->callback_query->data : null;
$callbackfname = isset($update->callback_query->from->first_name) ? $update->callback_query->from->first_name : null;
$callbacklname = isset($update->callback_query->from->last_name) ? $update->callback_query->from->last_name : null;
$callbackusername = isset($update->callback_query->from->username) ? $update->callback_query->from->username : null;
$callbackchatid = isset($update->callback_query->message->chat->id) ? $update->callback_query->message->chat->id : null;
$callbackuserid = isset($update->callback_query->message->reply_to_message->from->id) ? $update->callback_query->message->reply_to_message->from->id : null;
$callbackmessageid = isset($update->callback_query->message->message_id) ? $update->callback_query->message->message_id : null;

$live_array = array(
    'incorrect_cvc', 
    '"cvc_check": "fail"', 
    '"cvc_check": "pass"', 
    'insufficient_funds',
    'lost_card',
    'stolen_card',
    "pickup_card",
    'Your card does not support this type of purchase',
    'transaction_not_allowed',
    'CVV INVALID'
);

?>
