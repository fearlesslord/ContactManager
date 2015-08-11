<?php

/**
 * @property Contacts_model $contacts
 * @property Emails_model $emails
 */
class Contacts extends AppController
{
  public function __construct()
  {
    $this->useModels = array('contacts','emails');
    parent::__construct();
    $this->set('js', array('contacts/selectAll','contacts/tableSorter'));
  }

  public function index()
  {
    $defaultOrderCondition = array('lastname', 'asc');
    $paginatedContacts = $this->paginator->paginate($defaultOrderCondition, $this->contacts);
    $newDir = $paginatedContacts['params']['orderDir'] == 'asc' ? 'desc' : 'asc';
    $this->set('orderDir', $newDir);
    $this->set('page', $paginatedContacts['params']['currentPage']);
    $this->set('paginationMenu', $paginatedContacts['params']);
    $this->set('contactsList', $paginatedContacts['paginatedData']);
    $this->view->render('contacts/index');
  }

  public function add()
  {
    if (!empty($_POST)) {
      if ($this->contacts->save($_POST)) {
        Session::setFlash('New contact has been saved');
        $this->redirect('contacts');
      }

      $this->set('errors', $this->contacts->getValidatorErrors());
      $this->set('data', $_POST);
    }

    $this->view->render('contacts/add');
  }

  public function edit($id)
  {
    if (!empty($_POST)) {
      $_POST['id'] = $id;
      if ($this->contacts->save($_POST, $id)) {
        Session::setFlash('Contact has been updated');
        $this->redirect('contacts');
      }
    }

    $data = $this->contacts->getValidatorErrors() ? $_POST : $this->contacts->getContactsList($id);
    $this->set('errors', $this->contacts->getValidatorErrors());
    $this->set('data', $data);
    $this->view->render('contacts/edit');
  }

  public function delete($id)
  {
    $message = $this->contacts->deleteContact($id) ?
      'Contact has been deleted' : 'Contact has not been deleted, some error occurred';
    Session::setFlash($message);
    $this->redirect('contacts');
  }

  public function select()
  {
    $this->set('contactsList', $this->contacts->getContactsList());
    $this->view->render('contacts/select');
  }

  public function accept()
  {
    if (!empty($_POST['contactsEmail'])) {
      $this->set('emails', $_POST['contactsEmail']);
    }

    $this->view->render('contacts/accept');
  }

  public function check()
  {
    $emails = $this->contacts->prepareEmails($_POST);
    $this->emails->sentEmails($emails, $_POST['subject'], $_POST['text_message']);

    $newEmails = $this->contacts->checkNewContacts($emails);

    if (empty($newEmails)) {
      $this->redirect('contacts/select');
    }

    $this->set('contactsList', $newEmails);
    $this->view->render('contacts/addNewEmails');
  }

  public function addEmail()
  {
    foreach ($_POST['email'] as $email){
      $this->contacts->addEmail(array('email' => $email));
    }

    $this->redirect('contacts/select');
  }
}