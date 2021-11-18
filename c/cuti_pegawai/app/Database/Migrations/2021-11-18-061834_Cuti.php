<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cuti extends Migration
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
            'pegawai_id' => [
                "type" => "INT",
                "constraint" => 11,
                "null" => false
            ],
            'jenis_cuti_id' => [
                "type" => "INT",
                "constraint" => 11,
                "null" => false
            ],
            'tanggal_mulai' => [
                "type" => "DATE",
                "null" => false
            ],
            'tanggal_selesai' => [
                "type" => "DATE",
                "null" => false
            ],
            'tanggal_pengajuan' => [
                "type" => "DATE",
                "null" => false
            ],
            'tanggal_approval' => [
                "type" => "DATE",
                "null" => true
            ],
            'keterangan' => [
                "type" => "TEXT",
                "null" => false
            ],
            'bukti' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'status' => [
                "type" => "ENUM",
                "constraint" => ["0","1"],
                "null" => true
            ]

        ];
        $this->forge->addField($fields);
        // primary key
        $this->forge->addKey("id",true);
        $this->forge->createTable("cuti",true);
    }

    public function down()
    {
        //
        $this->forge->dropTable("cuti");
    }
}
