<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 用户数据表创建
 * Class CreateBtUsersTable
 */
class CreateBtMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bt_messages', function (Blueprint $table) {
            $table->bigIncrements('msg_id')->comment('消息ID');
            $table->unsignedInteger('user_id')->nullable()->index()->comment('所属用户ID');
            $table->unsignedInteger('room_id')->nullable()->index()->comment('所属房间ID');
            $table->unsignedBigInteger('comment_id')->index()->comment('评论ID');
            $table->integer('msg_type')->default(0)->index()->comment('消息类型：0 短文字 1 长文章 2 广告');
            $table->tinyInteger('msg_status')->defalut(0)->index()->comment('消息状态：0 正常，1 收藏，2 删除');
            $table->string('title', '128')->nullable()->comment('消息标题');
            $table->longText('content')->comment('消息内容');
            $table->dateTime('created_at')->nullable()->comment('创建时间');
            $table->dateTime('updated_at')->nullable()->comment('修改时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('bt_messages');
    }
}
