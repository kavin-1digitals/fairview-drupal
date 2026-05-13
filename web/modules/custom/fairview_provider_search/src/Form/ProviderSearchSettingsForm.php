<?php

declare(strict_types=1);

namespace Drupal\fairview_provider_search\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Admin form for /search page copy.
 */
final class ProviderSearchSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'fairview_provider_search_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames(): array {
    return ['fairview_provider_search.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $config = $this->config('fairview_provider_search.settings');

    $form['search_heading'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Search bar heading'),
      '#default_value' => $config->get('search_heading'),
      '#required' => TRUE,
    ];
    $form['search_hint'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Search input placeholder'),
      '#default_value' => $config->get('search_hint'),
      '#required' => TRUE,
    ];
    $form['alert_message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Alert banner below search'),
      '#description' => $this->t('Use a blank line between paragraphs. Shown in one dismissible banner with a close control.'),
      '#default_value' => $config->get('alert_message'),
      '#rows' => 5,
      '#required' => TRUE,
    ];
    $form['results_summary'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Results summary line'),
      '#description' => $this->t('Shown above the provider cards (for example: “3565 providers found”).'),
      '#default_value' => $config->get('results_summary'),
      '#required' => TRUE,
    ];
    $form['footer_schedule_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Footer support title'),
      '#default_value' => $config->get('footer_schedule_title'),
      '#required' => TRUE,
    ];
    $form['footer_schedule_phone'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Footer phone (after “Call:”)'),
      '#default_value' => $config->get('footer_schedule_phone'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $this->config('fairview_provider_search.settings')
      ->set('search_heading', $form_state->getValue('search_heading'))
      ->set('search_hint', $form_state->getValue('search_hint'))
      ->set('alert_message', $form_state->getValue('alert_message'))
      ->set('results_summary', $form_state->getValue('results_summary'))
      ->set('footer_schedule_title', $form_state->getValue('footer_schedule_title'))
      ->set('footer_schedule_phone', $form_state->getValue('footer_schedule_phone'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
