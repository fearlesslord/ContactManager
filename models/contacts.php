<?php

class Contacts_model extends Model
{
  public $useTable = 'contacts';
  public $validationRules = array(
    'lastname'   => array('notempty','minLength=2','maxLength=25'),
    'firstname'  => array('notempty','minLength=2','maxLength=25'),
    'email'      => array('notempty','email'),
    'homephone'  => array('number', 'maxLength=25'),
    'workphone'  => array('number', 'maxLength=25'),
    'cellphone'  => array('number', 'maxLength=25'),
  );
  public $validationError;

  public function __construct()
  {
    $this->selectTable($this->useTable);
    parent::__construct();
  }

  public function getContactsList($id = false)
  {
    $where = $id ? ' id = '. $id : false;
    $contacts = $this->select('*', $where);

    return $id ? $contacts[0] : $contacts;
  }

  public function save($contact, $id = false)
  {
    $_POST['bestphone'] = $this->getBestPhone($contact);

    if (!$this->validate($_POST, $this->validationRules)) {
      $this->validationError = $this->getErrors();
      return false;
    }

    return $id ? $this->update($_POST, $id) : $this->insert($_POST);
  }

  public function deleteContact($id)
  {
    return $this->delete($id);
  }

  public function getValidatorErrors()
  {
    return $this->validationError;
  }

  public function addEmail ($email)
  {
    $this->insert($email);
  }

  public function getBestPhone($post)
  {
    switch ($post) {
      case $post['bestphone'] == 'homephone':
        return $post['homephone'];
        break;

      case $post['bestphone'] == 'workphone':
        return $post['workphone'];
        break;

      case $post['bestphone'] == 'cellphone':
        return $post['cellphone'];
        break;

      default:
        return '';
    }
  }

  public function prepareEmails($post)
  {
    $emailsInString = htmlentities(rtrim(str_replace(" ", "", $post['contact_list']), ','));
    $emailsFromTextarea = array_map('trim', explode(",", $emailsInString));

    return $emailsFromTextarea;
  }

  public function checkNewContacts($emails)
  {
    $contactsFromDb = $this->getContactsList();
    $emailFromDb = array();
    foreach ($contactsFromDb as $contact => $email) {
      $emailFromDb[] = $email['email'];
    }

    return array_diff($emails, $emailFromDb);
  }
}