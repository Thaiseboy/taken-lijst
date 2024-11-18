# 📋 Takenlijst Applicatie

Dit is een eenvoudige **Takenlijst Applicatie** gebouwd met het Laravel framework. De applicatie ondersteunt basis-CRUD functionaliteiten waarmee gebruikers taken kunnen toevoegen, bekijken, bewerken, voltooien en verwijderen.

## 🛠️ Gebruikte Technologieën
- **Laravel 10**: PHP framework voor back-end logica en routing.
- **Blade Templates**: Voor de views en layout.
- **Bootstrap 5**: Voor responsieve styling en een moderne UI.
- **MySQL**: Voor database-opslag.
- **PHP 8.2**: Voor server-side scripting.

## ✨ Functionaliteiten
- **Taken Overzicht**: Bekijk een lijst van alle taken.
- **Nieuwe Taak Toevoegen**: Voeg een nieuwe taak toe met titel en beschrijving.
- **Taak Bewerken**: Pas de details van een bestaande taak aan.
- **Taak Voltooien**: Markeer een taak als voltooid.
- **Taak Verwijderen**: Verwijder een taak permanent uit de lijst.
- **Responsieve Layout**: De applicatie gebruikt Bootstrap 5 voor een moderne en responsieve gebruikersinterface.

## 📂 Project Structuur
- **app/Http/Controllers/TaskController.php**: Bevat de logica voor het beheren van taken.
- **app/Models/Task.php**: Het model voor de taken.
- **database/migrations/**: Bevat de migratiebestanden voor de `tasks` tabel.
- **resources/views/**: Bevat de Blade templates voor de applicatie.
- **routes/web.php**: Bevat de route-definities voor de takenlijst applicatie.

## ⚙️ Installatie
Volg de onderstaande stappen om het project lokaal op te zetten:

1. **Kloon de Repository**:
   git clone https://github.com/gebruikersnaam/takenlijst-app.git
   cd takenlijst-app

2. **Installeer Afhankelijkheden**
* composer install
* npm install
* npm run dev

3. **Database Configuratie**
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=takenlijst
DB_USERNAME=root
DB_PASSWORD=

4. **Voer de Migraties uit**
* php artisan migrate

5. **Start de Server**
* php artisan serve

6. **Bekijk de Applicatie**
* http://127.0.0.1:8000/tasks# taken-lijst
