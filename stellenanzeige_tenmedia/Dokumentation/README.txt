Schritt 1:
Die Repository bitte in ihre IDE einbinden.

Schritt 2:
php artisan migrate 

Mit der Ausführung des Befehls wird die Datenbank mit dem zum Projekt dazugehörigen Tabellen erstellt.

Schritt 3:
php artisan db:seed --class=UserSeeder   
php artisan db:seed --class=CompanySeeder
php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=JobSeeder

Mit der Ausführung der Befehle werden jeweils 20 Datenssätze mittels faker angelegt. 
JobSeeder sollte in meinem Fall als letztes ausgeführt werden ,weil er die Fremdschlüssel von Company und Category bekommt.

Schritt 4:
php artisan serve

Damit wird die Anwendung gestartet.




