
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateGroupsTagsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("groups_tags", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('group_id')->unsigned();
						$table->integer('tag_id')->unsigned();
						$table->foreign("group_id")->references("id")->on("groups");
						$table->foreign("tag_id")->references("id")->on("tags");



						// ----------------------------------------------------
						// -- SELECT [groups_tags]--
						// ----------------------------------------------------
						// $query = DB::table("groups_tags")
						// ->leftJoin("groups","groups.id", "=", "groups_tags.group_id")
						// ->leftJoin("tags","tags.id", "=", "groups_tags.tag_id")
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
                Schema::dropIfExists("groups_tags");
            }
        }
    