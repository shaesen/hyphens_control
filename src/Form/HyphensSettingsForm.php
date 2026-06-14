<?php

namespace Drupal\hyphens_control\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class HyphensSettingsForm extends ConfigFormBase {

  protected function getEditableConfigNames() {
    return ['hyphens_control.settings'];
  }

  public function getFormId() {
    return 'hyphens_control_settings_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('hyphens_control.settings');

    $form['disable_hyphens'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Disable hyphenation in Olivero'),
      '#default_value' => $config->get('disable_hyphens'),
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('hyphens_control.settings')
      ->set('disable_hyphens', $form_state->getValue('disable_hyphens'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}