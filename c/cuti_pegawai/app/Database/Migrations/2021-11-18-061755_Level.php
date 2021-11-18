<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Level extends Migration
{
    public function up()
    {
        //membuat kolom tabel
        $fields=[
            'id' => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            'nama_level' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ]
        ];
        $this->forge->addField($fields);
        // primary key
        $this->forge->addKey("id",true);
        $this->forge->createTable("level",true);
    }

    public function down()
    {
        //menghapus tabel
        $this->forge->dropTable("level");
    }
}
