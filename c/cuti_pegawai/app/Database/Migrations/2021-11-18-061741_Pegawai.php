<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        //
        $fields=[
            'id' => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            'nama' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'jk' => [
                "type" => "ENUM",
                "constraint" => ['L','P'],
                "null" => true
            ],
            'alamat' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'telepon' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'email' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ]
        ];
        $this->forge->addField($fields);
        // membuat primary key
        $this->forge->addKey('id',true);
        // membuat uniq
        $this->forge->addUniqueKey("email");
        // membuat tabel
        $this->forge->createTable("pegawai");
    }

    public function down()
    {
        //
        $this->forge->dropTable('pegawai');
    }
}
