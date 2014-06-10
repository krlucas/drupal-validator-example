<?php

/**
 * @file
 * Form class ton help demonstrate using validators.
 */

namespace Drupal\validator_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\validator_example\Plugin\Validation\Constraint;


class ValidatorExampleForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'validator_example_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {
    $form['textfield1'] = array(
      '#title' => $this->t('Textfield 1'),
      '#type' => 'textfield',
    );

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
    drupal_set_message('You submitted the form.');
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {
    $validator = new Constraint\ValidExampleInputValidator();
    $result = $validator->validate($form_state['values']['textfield1']);
  }

}
