# 🧠 Backend – CompetiZen (version publique)

Ce répertoire contient le backend de l'application **CompetiZen**, une plateforme pour organiser des événements sportifs.

## 🛠️ Stack technique

- **PHP** 8.3
- **Symfony** 7.3 (sans API Platform)
- **Doctrine ORM** (via `orm-pack`)
- **Validation** via `symfony/validator`
- **JSON API** via `JsonResponse` natif
- **Architecture** Clean Architecture + DDD
- **Tests** TDD avec Pest

## 📁 Structure du projet

```bash
apps/backend/
├── config/                   # Fichiers de configuration Symfony
├── public/                   # Point d'entrée (index.php)
├── src/
│   ├── BoundedContextName/   # Périmètre métier clairement délimité
│   │   ├── Application/      # Points dʼentrée métier de lʼapplication
│   │   ├── Domain/           # Règles et acteurs métier (entités, value objects, etc.)
│   │   ├── Infrastructure/   # Détails techniques dʼimplémentation
│   │   └── Presentation/     # Points dʼentrée techniques de lʼapplication
├── tests/                    # Tests (Pest)
└── .env                      # Variables d'environnement
```

## 🚀 Lancer le projet en local

```bash
cd apps/backend/

# Installer les dépendances PHP
composer install

# Lancer le serveur local
symfony server:start
```

## ✅ Tester l’application (Pest)

```bash
vendor/bin/pest
```

## 🧪 Premier test fonctionnel

Un endpoint de test est disponible à l’URL :

```
GET /test
```

Il est couvert par un test automatisé (TDD).

---

## 🔐 À venir (non inclus dans la version publique)

- Authentification / Autorisation
- Gestion avancée des rôles
- Sécurité renforcée
