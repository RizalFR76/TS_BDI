<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisCuti extends Migration
{
    public function up()
    {
        ////membuat kolom tabel
        $fields=[
            'id' => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            'nama_jenis' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ]
        ];
        $this->forge->addField($fields);
        // primary key
        $this->forge->addKey("id",true);
        $this->forge->createTable("jenis_cuti",true);
    }

    public function down()
    {
        //
        $this->forge->dropTable("jenis_cuti");
    }
}
