<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;

class CreateBtMessagesExtendTable extends Migration
{
    protected $connection = 'mongodb';

    protected $table = 'bt_messages_extend';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->table(
            $this->table,
            function (Blueprint $collection) {
                $collection->unique('msg_id', 'msg_id_unique');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->table(
            $this->table,
            function (Blueprint $collection) {
                $collection->dropIfExists();
            }
        );
    }
}
