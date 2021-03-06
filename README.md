# Laravel 1st project

### 1. Install **Xampp**

### 2. Install **Composer** 

[composer]: https://getcomposer.org/download/	"link"

- **<u>Importance:</u> Link to correct php.exe version** in the xampp folder

- Open cmd `composer -V` to check composer version
- Run: `composer global require laravel/installer`
- Create new project`laravel new <project name>`
- Start server: `php artisan server`

### 3. Controller

1. Create a **controller**: `php artisan make:controller <name>`

2. Mapping from Route to controller the 

   -  In the **second arg of the route**: `[<controller'name>]::class, '<function's name>']`

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

### 5. Eloquent Models: (Data mapping like JPL or Entity Framework)

1. Create model: `php artisan make:model Pizza`

   > **NOTE**: The **model's name** mapping with the **table's name** in DB.
   >
   > 	If you want to manfully connect to table then in the model file 
   >
   > ```php
   > project $table = 'table_name'
   > ```

   

2. Use model:

   ```php
   ...
   use App\Models\Pizza;
   
   class PizzaController extends Controller
   {
       public function index() {
           $pizzas = Pizza::all(); 
           $pizzas = Pizza::where('type', 'hawaiian')->get();
           $pizzas = Pizza::find($id); //select where id
           $pizzas = Pizza::findOrFail($id);// return to 404 page
           $pizzas = Pizza::orderBy('name')->get();
           
       }
    ...
   ```

   ### 6. Naming Conventions

![image-20201215185901333](C:\Users\meoco\AppData\Roaming\Typora\typora-user-images\image-20201215185901333.png)
