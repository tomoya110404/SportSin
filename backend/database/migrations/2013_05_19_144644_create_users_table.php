
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateUsersTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("users", function (Blueprint $table) {

						$table->increments('id');
						$table->text('name');
						$table->string('email')->unique();
						$table->string('password')->unique();
						$table->datetime('birthday')->nullable();
						$table->string('gender')->nullable();
						$table->string('prefecture')->nullable();
                        $table->string('remember_token')->nullable();
                        $table->timestamp('updated_at')->nullable(); 
                        $table->timestamp('created_at')->nullable(); 



						// ----------------------------------------------------
						// -- SELECT [users]--
						// ----------------------------------------------------
						// $query = DB::table("users")
						// ->get();
						// dd($query); //For checking



                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("users");
            }
        }
    