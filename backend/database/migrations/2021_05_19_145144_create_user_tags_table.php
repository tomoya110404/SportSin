
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateUserTagsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("user_tags", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('user_id')->unsigned();
						$table->integer('tag_id')->unsigned();
						//$table->foreign("user_id")->references("id")->on("users");
						//$table->foreign("tag_id")->references("id")->on("tags");



						// ----------------------------------------------------
						// -- SELECT [user_tags]--
						// ----------------------------------------------------
						// $query = DB::table("user_tags")
						// ->leftJoin("users","users.id", "=", "user_tags.user_id")
						// ->leftJoin("tags","tags.id", "=", "user_tags.tag_id")
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
                Schema::dropIfExists("user_tags");
            }
        }
    