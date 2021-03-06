
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateUserGroupsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("user_groups", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('user_id')->unsigned();
						$table->integer('group_id')->unsigned();
						$table->foreign("user_id")->references("id")->on("users");
						$table->foreign("group_id")->references("id")->on("groups");



						// ----------------------------------------------------
						// -- SELECT [user_groups]--
						// ----------------------------------------------------
						// $query = DB::table("user_groups")
						// ->leftJoin("users","users.id", "=", "user_groups.user_id")
						// ->leftJoin("groups","groups.id", "=", "user_groups.group_id")
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
                Schema::dropIfExists("user_groups");
            }
        }
    