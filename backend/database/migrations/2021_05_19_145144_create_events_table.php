
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateEventsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("events", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name');
						$table->string('participants'); //現在の参加者
						$table->string('area'); //集合場所、会場
						$table->string('skill_level'); //Lv1〜10のようなレベル表記
						$table->integer('target_number'); //目標人数
						$table->string('event_img')->nullable(); //イベントの画像
						$table->datetime('start_day');
						$table->integer('group_id')->unsigned(); //親テーブルグループのid
						$table->timestamps();
						//$table->foreign("group_id")->references("id")->on("groups");



						// ----------------------------------------------------
						// -- SELECT [events]--
						// ----------------------------------------------------
						// $query = DB::table("events")
						// ->leftJoin("groups","groups.id", "=", "events.group_id")
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
                Schema::dropIfExists("events");
            }
        }
    