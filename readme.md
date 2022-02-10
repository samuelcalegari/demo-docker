### Prérequis

* PHP 7.3
* Composer
* Symfony CLI
* Docker
* Docker Compose

```bash
symfony check:requirements
```

### Lancer l'environnement de développement

```bash
docker-compose up -d
symfony serve -d
```

### Lancer les tests unitaires

```bash
php bin/phpunit --testdox
```
