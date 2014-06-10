<?php

namespace Drupal\validator_example\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ValidExampleInputValidator extends ConstraintValidator {
  /**
   * {@inheritdoc}
   */
  public function validate($value, Constraint $constraint) {
    // TODO: Implement validate() method.
    $this->context->addViolation($constraint->message, array("%value" => $value));
  }

}
