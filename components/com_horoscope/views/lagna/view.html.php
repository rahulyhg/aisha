<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
jimport('joomla.application.component.controller');
/**
 * HTML View class for the HelloWorld Component
 */
class HoroscopeViewLagna extends JViewLegacy
{
    protected $data;
    function display($tpl = null) 
    {
       
        // Get data from the model
        // Check for errors.
        $this->data  = $this->get('Data');
        if (count($errors = $this->get('Errors'))) 
        {
              
                JError::getError();
                // Add a message to the message queue
               
        }
        if(empty($this->data))
        {
            parent::display($tpl);
        }
        else
        {
            $tpl        = "2";
            parent::display($tpl);
        }
    }
}
