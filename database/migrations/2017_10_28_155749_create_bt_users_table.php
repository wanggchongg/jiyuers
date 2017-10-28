<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 用户数据表创建
 * Class CreateBtUsersTable
 */
class CreateBtUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bt_users', function (Blueprint $table) {
            $table->increments('user_id')->comment('用户ID');
            $table->integer('user_type')->default(0)->index()->comment('用户类型：0 普通，1 商家');
            $table->tinyInteger('user_status')->default(0)->index()->comment('用户状态：0 正常，1 注销');
            $table->string('account', 100)->unique()->comment('账户');
            $table->string('phone', 50)->unique()->nullable()->comment('用户手机');
            $table->string('email', 100)->unique()->nullable()->comment('用户邮箱');
            $table->string('qq', 20)->unique()->nullable()->comment('用户QQ');
            $table->string('password', 500)->comment('密码');
            $table->string('nickname', 100)->nullable()->comment('昵称');
            $table->char('gender', 1)->nullable()->index()->comment('性别');
            $table->date('birthday')->nullable()->comment('生日');
            $table->string('region', 20)->nullable()->comment('地区: adcode');
            $table->string('portrait', 500)->nullable()->comment('用户头像');
            $table->string('career', 100)->nullable()->comment('用户职业');
            $table->string('hobby', 100)->nullable()->comment('用户爱好');
            $table->text('description')->comment('个性签名');
            $table->rememberToken()->comment('用户session');
            $table->dateTime('created_at')->nullable()->comment('创建时间');
            $table->dateTime('updated_at')->nullable()->comment('修改时间');
            $table->dateTime('last_login_at')->nullable()->comment('最后登录时间');
            $table->ipAddress('last_login_ip')->nullable()->comment('最后登录IP');
            $table->timestamp('version')->default(\DB::raw('CURRENT_TIMESTAMP'))->comment('当前时间戳');
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
        Schema::dropIfExists('bt_users');
    }
}
