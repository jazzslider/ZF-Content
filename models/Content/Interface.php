<?php

interface Content_Model_Content_Interface
{
  public function __construct($data, 
                              Zend_Application_Bootstrap_Bootstrapper $bootstrap);
  public function preInit();
  public function postInit();

  public function populate($data);
  public function toArray();

  public function getBootstrap();
  public function setBootstrap(Zend_Application_Bootstrap_Bootstrapper $bootstrap);

  public function __get($property);
  public function __set($property, $value);
  public function __isset($property);
  public function __unset($property);

  public function save();
  public function delete();

  public function getForm();

  /**
   * @return Zend_Form
   */
  public function populateForm(Zend_Form $form);

  /**
   * @return Content_Model_Content_Interface provides a fluent interface
   */
  public function populateFromForm(Zend_Form $form);

  public function getActionNavigation($type = 'instance');
  public function getIndexPage();
  public function getCreatePage();
  public function getViewPage();
  public function getEditPage();
  public function getDeletePage();
}
