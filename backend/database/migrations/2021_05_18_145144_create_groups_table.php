
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateGroupsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("groups", function (Blueprint $table) {

						$table->increments('id');
                        $table->string('name');
						$table->text('description');
						$table->string('desc_mini'); //一覧画面の見出し
						$table->string('age_group')->nullable(); //おおよその年齢層
						$table->string('about_level')->nullable(); //初心者、中級者、上級者などの括り
						$table->string('img')->nullable(); //画像のURL（保存場所はS3?）
						$table->string('groups_prefecture'); //グループ活動が行われる都道府県
                        $table->integer('member');
						$table->timestamps();
						$table->integer('user_id')->unsigned();
						

                    //*********************************
                    // Foreign KEY [ Uncomment if you want to use!! ]
                    //*********************************
                        $table->foreign("user_id")->references("id")->on("users");



						// ----------------------------------------------------
						// -- SELECT [groups]--
						// ----------------------------------------------------
						// $query = DB::table("groups")
						// ->leftJoin("users","users.id", "=", "groups.user_id")
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
                Schema::dropIfExists("groups");
            }
        }
    