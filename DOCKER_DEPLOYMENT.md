# Docker Demo Deployment

This setup runs the Drupal site with Apache/PHP 8.4 and MariaDB 11.8.

## Required Files

Keep the database dump at:

```bash
data/fairview-db.sql.gz
```

If you have uploaded files, place the archive at:

```bash
data/fairview-files.tar.gz
```

## Start The Site

From the project root on the Linux demo machine:

```bash
docker compose up -d --build
```

Open:

```text
http://localhost:8080
```

The database dump is imported automatically by the MariaDB container the first time the `db-data` volume is created.

## Re-Import The Database

If the database was already initialized and you want to restore `data/fairview-db.sql.gz` again, remove the database volume and start fresh:

```bash
docker compose down -v
docker compose up -d --build
```

This deletes the local Docker database volume before importing the dump again.

## Run Drupal Commands

Clear Drupal caches:

```bash
docker compose exec web vendor/bin/drush cache:rebuild
```

Check Drupal status:

```bash
docker compose exec web vendor/bin/drush status
```

## Optional Environment Overrides

The compose file has defaults for demo use. You can override them when needed:

```bash
WEB_PORT=8081 DRUPAL_HASH_SALT="change-this" docker compose up -d --build
```
