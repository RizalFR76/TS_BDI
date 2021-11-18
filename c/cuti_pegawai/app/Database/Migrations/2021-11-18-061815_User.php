<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //////membuat kolom tabel
        $fields=[
            'id' => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            'username' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'password' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'pegawai_id' => [
                "type" => "INT",
                "constraint" => 11,
                "null" => false
            ],
            'level_id' => [
                "type" => "INT",
                "constraint" => 11,
                "null" => false
            ],
            'level_active' => [
                "type" => "INT",
                "constraint" => 11,
                "null" => false
            ]
        ];
        $this->forge->addField($fields);
        // primary key
        $this->forge->addKey("id",true);
        $this->forge->addUniqueKey("username");
        $this->forge->createTable("user",true);
    }

    public function down()
    {
        //
        $this->forge->dropTable("user");
    }
}
