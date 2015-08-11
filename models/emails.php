<?php

class Emails_model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function sentEmails($emails, $subject, $message)
  {
    $emailsTo = implode($emails,',');
    $mail['recipients'] = $emailsTo;
    $mail['subject'] = $subject;
    $mail['message'] = $message;

    return $this->sent($mail);
  }

  public function sent($mail)
  {
    $sent = mail($mail['recipients'], $mail['subject'], $mail['message']);

    if (!$sent) {
      return false;
    }

    $this->insertSentMessages($mail);
    return true;
  }

  public function insertSentMessages($mail)
  {
    $this->selectTable('emails');
    $this->insert($mail);
  }
  
}