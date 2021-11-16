<?php

namespace app\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        //// Membuat kolom/field untuk tabel menu
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'jenis'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'harga' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'penyajian'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel menu
		$this->forge->createTable('menu', TRUE);
    }

    public function down()
    {
        //// menghapus tabel menu
		$this->forge->dropTable('menu');
    }
}
