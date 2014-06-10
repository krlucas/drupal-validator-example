<?php

namespace Drupal\validator_example\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Checks if some example text input is arbitrarily valid.
 *
 * @Plugin(
 *   id = "ValidExampleInput",
 *   label = @Translation("Valid example input", context = "Validation")
 * )
 */
class ValidExampleInput extends Constraint {

  public $message = 'The input %value is not valid.';

  /**
   * {@inheritdoc}
   */
  public function validatedBy() {
    return '\Drupal\validator_example\Plugin\Validation\Constraint\ValidExampleInputValidator';
  }
}