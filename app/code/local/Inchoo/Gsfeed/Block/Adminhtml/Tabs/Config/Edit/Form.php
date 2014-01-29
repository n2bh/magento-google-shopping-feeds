<?php

class Inchoo_Gsfeed_Block_Adminhtml_Tabs_Config_Edit_Form extends
    Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/configure', array('id' => $this->getRequest()->getParam('id'))),
            'method' => 'post',
            'enctype' => 'multipart/form-data'
        ));

        $form->setUseContainer(true);
        $this->setForm($form);

        $fieldset = $form->addFieldset('gsfeed_form', array(
            'legend' => Mage::helper('inchoo_gsfeed')->__('Configure Google Shopping Feed')
        ));

        $fieldset->addField('name', 'text', array(
            'label' => Mage::helper('inchoo_gsfeed')->__('Feed name'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'name'
        ));

        $fieldset->addField('link', 'text', array(
            'label' => Mage::helper('inchoo_gsfeed')->__('Feed link'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'link'
        ));

        $fieldset->addField('title', 'text', array(
            'label' => Mage::helper('inchoo_gsfeed')->__('Feed title'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'title'
        ));

        $fieldset->addField('description', 'textarea', array(
            'label' => Mage::helper('inchoo_gsfeed')->__('Feed decription'),
            'class' => 'required-entry',
            'required' => true,
            'name' => 'description'
        ));

        return parent::_prepareForm();

    }
}
