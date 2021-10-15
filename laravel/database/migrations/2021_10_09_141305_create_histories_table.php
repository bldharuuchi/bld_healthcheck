<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\History;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->string('memo')->nullable();
            $table->bigInteger('score');
            $table->bigInteger('user_id');
            $table->timestamps();
        });

        History::insert([
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 80, 'user_id' => 1,
            'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 83, 'user_id' => 1,
            'created_at' => new DateTime('-1 day'), 'updated_at' => new DateTime('-1 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 70, 'user_id' => 1,
            'created_at' => new DateTime('-2 day'), 'updated_at' => new DateTime('-2 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 89, 'user_id' => 1,
            'created_at' => new DateTime('-3 day'), 'updated_at' => new DateTime('-3 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 80, 'user_id' => 1,
            'created_at' => new DateTime('-4 day'), 'updated_at' => new DateTime('-4 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 95, 'user_id' => 1,
            'created_at' => new DateTime(' -5 day'), 'updated_at' => new DateTime('-5 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 90, 'user_id' => 1,
            'created_at' => new DateTime(' -6 day'), 'updated_at' => new DateTime('-6 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 85, 'user_id' => 1,
            'created_at' => new DateTime(' -7 day'), 'updated_at' => new DateTime('-7 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 60, 'user_id' => 1,
            'created_at' => new DateTime(' -8 day'), 'updated_at' => new DateTime('-8 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 75, 'user_id' => 1,
            'created_at' => new DateTime(' -9 day'), 'updated_at' => new DateTime('-9 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 70, 'user_id' => 1,
            'created_at' => new DateTime(' -11 day'), 'updated_at' => new DateTime('-11 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 70, 'user_id' => 1,
            'created_at' => new DateTime(' -12 day'), 'updated_at' => new DateTime('-12 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 65, 'user_id' => 1,
            'created_at' => new DateTime(' -13 day'), 'updated_at' => new DateTime('-13 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 68, 'user_id' => 1,
            'created_at' => new DateTime(' -14 day'), 'updated_at' => new DateTime('-14 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 63, 'user_id' => 1,
            'created_at' => new DateTime(' -15 day'), 'updated_at' => new DateTime('-15 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 80, 'user_id' => 1,
            'created_at' => new DateTime(' -16 day'), 'updated_at' => new DateTime('-16 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 61, 'user_id' => 1,
            'created_at' => new DateTime(' -17 day'), 'updated_at' => new DateTime('-17 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 50, 'user_id' => 1,
            'created_at' => new DateTime(' -18 day'), 'updated_at' => new DateTime('-18 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 60, 'user_id' => 1,
            'created_at' => new DateTime(' -19 day'), 'updated_at' => new DateTime('-19 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 50, 'user_id' => 1,
            'created_at' => new DateTime(' -20 day'), 'updated_at' => new DateTime('-20 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 52, 'user_id' => 1,
            'created_at' => new DateTime(' -21 day'), 'updated_at' => new DateTime('-21 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 55, 'user_id' => 1,
            'created_at' => new DateTime(' -22 day'), 'updated_at' => new DateTime('-22 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 50, 'user_id' => 1,
            'created_at' => new DateTime(' -23 day'), 'updated_at' => new DateTime('-23 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 58, 'user_id' => 1,
            'created_at' => new DateTime(' -24 day'), 'updated_at' => new DateTime('-24 day')],
            ['status'  => "('_')", 'memo' => '今日は調子が普通だった', 'score' => 53, 'user_id' => 1,
            'created_at' => new DateTime(' -25 day'), 'updated_at' => new DateTime('-25 day')],
            ['status'  => "(-_-;)", 'memo' => '今日は調子が悪かった', 'score' => 48, 'user_id' => 1,
            'created_at' => new DateTime(' -26 day'), 'updated_at' => new DateTime('-26 day')],
            ['status'  => "(-_-;)", 'memo' => '今日は調子が悪かった', 'score' => 45, 'user_id' => 1,
            'created_at' => new DateTime(' -27 day'), 'updated_at' => new DateTime('-27 day')],
            ['status'  => "(-_-;)", 'memo' => '今日は調子が悪かった', 'score' => 42, 'user_id' => 1,
            'created_at' => new DateTime(' -28 day'), 'updated_at' => new DateTime('-28 day')],
            ['status'  => "(-_-;)", 'memo' => '今日は調子が悪かった', 'score' => 20, 'user_id' => 1,
            'created_at' => new DateTime(' -29 day'), 'updated_at' => new DateTime('-29 day')],
            ['status'  => "(-_-;)", 'memo' => '今日は調子が悪かった', 'score' => 38, 'user_id' => 1,
            'created_at' => new DateTime(' -30 day'), 'updated_at' => new DateTime('-30 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 70, 'user_id' => 1,
            'created_at' => new DateTime(' -32 day'), 'updated_at' => new DateTime('-31 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 73, 'user_id' => 1,
            'created_at' => new DateTime(' -33 day'), 'updated_at' => new DateTime('-32 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 71, 'user_id' => 1,
            'created_at' => new DateTime(' -34 day'), 'updated_at' => new DateTime('-33 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 90, 'user_id' => 1,
            'created_at' => new DateTime(' -35 day'), 'updated_at' => new DateTime('-34 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 84, 'user_id' => 1,
            'created_at' => new DateTime(' -36 day'), 'updated_at' => new DateTime('-35 day')],
            ['status'  => '(^^)', 'memo' => '今日は調子が良かった', 'score' => 82, 'user_id' => 1,
            'created_at' => new DateTime(' -37 day'), 'updated_at' => new DateTime('-36 day')],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
