<?php

declare(strict_types=1);

namespace Drupal\fairview_provider_search\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provider search landing page.
 */
final class ProviderSearchController extends ControllerBase {

  /**
   * Builds the /search page.
   *
   * @return array<string, mixed>
   *   A render array using the provider_search_page theme.
   */
  public function build(): array {
    return [
      '#theme' => 'provider_search_page',
      '#providers' => $this->getMockProviders(),
      '#attached' => [
        'library' => ['fairview/provider-search'],
      ],
      '#cache' => [
        'tags' => ['config:fairview_provider_search.settings'],
      ],
    ];
  }

  /**
   * Two-letter initials from a display name like "Pat Smith, MD".
   */
  private function initialsFromName(string $name): string {
    $before = trim(explode(',', $name, 2)[0]);
    $parts = $before === '' ? [] : preg_split('/\s+/', $before);
    if ($parts === FALSE || $parts === []) {
      return '?';
    }
    if (count($parts) === 1) {
      return mb_strtoupper(mb_substr($parts[0], 0, min(2, mb_strlen($parts[0]))));
    }
    $first = mb_substr($parts[0], 0, 1);
    $last = mb_substr($parts[count($parts) - 1], 0, 1);
    return mb_strtoupper($first . $last);
  }

  /**
   * Demo provider rows; replace with a View or API integration later.
   *
   * @return list<array<string, mixed>>
   *   Provider card data.
   */
  private function getMockProviders(): array {
    $rows = [
      [
        'name' => 'Ben Williams, MD',
        'specialties' => 'Cardiac Imaging, Cardiology',
        'badge' => 'Accepting New Patients',
        'clinic' => 'M Health Fairview Heart Clinic Burnsville',
        'address' => '14101 Fairview Drive, Suite 140, Burnsville, MN 55337',
        'phone' => '612-365-5000',
        'more_locations' => '+3 locations',
      ],
      [
        'name' => 'Abraham Jacob, MD',
        'specialties' => 'Pediatrics, Internal Medicine',
        'badge' => '',
        'clinic' => "M Health Fairview Children's",
        'address' => '2535 University Avenue Southeast, Minneapolis, MN 55414',
        'phone' => '612-672-2350',
        'more_locations' => '+1 location',
      ],
      [
        'name' => 'Sarah Chen, MD',
        'specialties' => 'Obstetrics & Gynecology',
        'badge' => 'Accepting New Patients',
        'clinic' => 'M Health Fairview Clinic & Surgery Center',
        'address' => '640 Jackson Street, Minneapolis, MN 55455',
        'phone' => '612-273-8383',
        'more_locations' => '',
      ],
      [
        'name' => 'Michael Torres, DO',
        'specialties' => 'Family Medicine',
        'badge' => '',
        'clinic' => 'M Health Fairview Primary Care — Snelling',
        'address' => '3024 Snelling Avenue South, Saint Paul, MN 55408',
        'phone' => '651-641-8000',
        'more_locations' => '+2 locations',
      ],
      [
        'name' => 'Emily Nakamura, MD',
        'specialties' => 'Dermatology',
        'badge' => 'Accepting New Patients',
        'clinic' => 'M Health Fairview Dermatology',
        'address' => '420 Delaware Street SE, Minneapolis, MN 55455',
        'phone' => '612-273-6258',
        'more_locations' => '',
      ],
      [
        'name' => 'James Okafor, MD',
        'specialties' => 'Orthopedic Surgery, Sports Medicine',
        'badge' => '',
        'clinic' => 'M Health Fairview Orthopedic Clinic',
        'address' => '2000 Plymouth Road, Minnetonka, MN 55305',
        'phone' => '952-993-4000',
        'more_locations' => '+4 locations',
      ],
      [
        'name' => 'Priya Patel, MD',
        'specialties' => 'Neurology',
        'badge' => 'Accepting New Patients',
        'clinic' => 'M Health Fairview Neurology Clinic',
        'address' => '516 Delaware Street SE, Minneapolis, MN 55455',
        'phone' => '612-626-6000',
        'more_locations' => '+1 location',
      ],
      [
        'name' => 'David Nguyen, MD',
        'specialties' => 'Gastroenterology',
        'badge' => '',
        'clinic' => 'M Health Fairview Digestive Care',
        'address' => '3366 Oakdale Avenue North, Robbinsdale, MN 55422',
        'phone' => '763-520-5200',
        'more_locations' => '',
      ],
      [
        'name' => 'Rachel Morrison, MD',
        'specialties' => 'Psychiatry, Mental Health',
        'badge' => 'Accepting New Patients',
        'clinic' => 'M Health Fairview Mental Health Clinic',
        'address' => '606 24th Avenue South, Minneapolis, MN 55454',
        'phone' => '612-273-8383',
        'more_locations' => '+2 locations',
      ],
    ];
    foreach ($rows as &$row) {
      $row['initials'] = $this->initialsFromName($row['name']);
      $row['avatar_tone'] = (crc32($row['name']) % 6);
    }
    unset($row);
    return $rows;
  }

}
