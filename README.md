# Laravel 1st project

### 1. Install **Xampp**

### 2. Install **Composer** 

[composer]: https://getcomposer.org/download/	"link"

- **<u>Importance:</u> Link to correct php.exe version** in the xampp folder
- Open cmd `composer -V` to check composer version
- Run: `composer global require laravel/installer`
- Create new project: `laravel new <project name>`
- Modify `.env.json` for DB connection and other config
- Start server: `php artisan server`

### 3. Controller

1. Create a **controller**: `php artisan make:controller <name>`

2. Mapping from Route to controller the 

   -  In the **second args of the route**: `[<controller'name>]::class, '<function's name>']`

   ```php
     Example: Route::get('/pizza', [PizzaController::class, 'index']);
   ```

### 4. **Migration**:

1. Create migration: `php artisan make:magration create_pizzas_table`

2. Run migrate: `php artisan migrate`

3. Some migrate command: `migrate:rollback`, `migrate:status`

4. To **add more column**:

   - Create new migrate file: `php artisan make:magration add_price_to_<table'name>_table'`

     Ex `php artisan make:migration add_price_to_pizzas_table`

   - Then add new column in the new file

   - Run `php artisan migrate`

### 5. Eloquent Models: (Data Object mapping like JPL and Entity Framework)

1. Create model: `php artisan make:model Pizza`

   > **NOTE**: The **model's name** mapping with the **table's name** in DB.
   >
   > 	If you want to manfully connect to table then in the model file 



## Appendix

### Deploy a project

1. Clone project
2. Check `.env` file
3. Migrate database.
4. Many bug can by fixed by run: `composer update --no-scripts`  

### VS Configure for Laravel

**Useful extension:**

1. PHP IntelliSense

2. Laravel Blade Snippets

3. Laravel Extra IntelliSense

4. Then add following code to `settings.json`

   ```json
   "emmet.triggerExpansionOnTab": true, // enable tab to expanse emmet tags
       "blade.format.enable": true,
       "emmet.includeLanguages": {
           "blade": "html"
       },
       "[blade]": {
           "editor.autoClosingBrackets": "always"
       },
   ```

   

### Some bug

1. bootstrap/../vendor/autoload.php. Failed to open stream: No such file or directory. The "vendor" folder does not exist.

   ```php
   Fixed by run: composer update --no-scripts  
   ```

   
