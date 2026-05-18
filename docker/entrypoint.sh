#!/usr/bin/env bash
set -euo pipefail

APP_ROOT="/var/www/html"
SITE_DIR="${APP_ROOT}/web/sites/default"
SETTINGS_FILE="${SITE_DIR}/settings.php"
FILES_DIR="${SITE_DIR}/files"
FILES_ARCHIVE="${APP_ROOT}/data/fairview-files.tar.gz"
FILES_MARKER="${FILES_DIR}/.fairview-files-imported"

mkdir -p "${FILES_DIR}"

cp "${SITE_DIR}/default.settings.php" "${SETTINGS_FILE}"
cat >> "${SETTINGS_FILE}" <<'PHP'

$databases['default']['default'] = [
  'database' => getenv('DRUPAL_DB_NAME') ?: 'fairview',
  'username' => getenv('DRUPAL_DB_USER') ?: 'fairview',
  'password' => getenv('DRUPAL_DB_PASSWORD') ?: 'fairview',
  'prefix' => '',
  'host' => getenv('DRUPAL_DB_HOST') ?: 'db',
  'port' => getenv('DRUPAL_DB_PORT') ?: '3306',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'driver' => 'mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
];

$settings['hash_salt'] = getenv('DRUPAL_HASH_SALT') ?: 'fairview-local-demo-change-me';
$settings['trusted_host_patterns'] = [getenv('DRUPAL_TRUSTED_HOST_PATTERN') ?: '.*'];

$sync_directory = realpath('../config/sync');
if (is_dir($sync_directory)) {
  $settings['config_sync_directory'] = $sync_directory;
}
PHP

if [ -f "${FILES_ARCHIVE}" ] && [ ! -f "${FILES_MARKER}" ]; then
  tar -xzf "${FILES_ARCHIVE}" -C "${FILES_DIR}"
  touch "${FILES_MARKER}"
fi

chown -R www-data:www-data "${SITE_DIR}"
chmod 644 "${SETTINGS_FILE}"
find "${FILES_DIR}" -type d -exec chmod 755 {} \;
find "${FILES_DIR}" -type f -exec chmod 644 {} \;

exec "$@"
