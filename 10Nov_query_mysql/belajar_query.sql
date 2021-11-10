#ini query untuk membuat data base
CREATE DATABASE 10Nov;

#ini query untuk menghapus data base =============================================================================================================================================
DROP DATABASE 10Nov;

USE 10Nov;

#ini query membuat tabel ========================================================================================================================================================
CREATE TABLE nama_tabel (
	nama_kolom TYPE (100)
);

#memunculkan tabel  =============================================================================================================================================================
SELECT * FROM belajar_tabel;


#ini query membuat tabel ========================================================================================================================================================
CREATE TABLE belajar_tabel (
	id CHAR (5),
	nama_pegawai VARCHAR (30),
	jenis_kelamin VARCHAR (10),
	no_telp VARCHAR (15),
	email VARCHAR (40),
	alamat VARCHAR (100)
);

#menambah kolom pada tabel yang sudah ada  ====================================================================================================================================
ALTER TABLE belajar_tabel ADD id VARCHAR (100) PRIMARY KEY NOT NULL;

#menghapus kolom pada tabel  ==================================================================================================================================================
ALTER TABLE belajar_tabel DROP id;

#mengganti nama kolom pada tabel  =============================================================================================================================================
ALTER TABLE belajar_tabel CHANGE departemen kantor VARCHAR(40);

#mengganti nama nama tabel  ===================================================================================================================================================
ALTER TABLE belajar_tabel CHANGE id id CHAR (6) NOT NULL;
ALTER TABLE belajar_tabel CHANGE no_telp no_hp VARCHAR (15) NOT NULL;

#edit type data  =============================================================================================================================================================
ALTER TABLE belajar_tabel MODIFY COLUMN jenis_kelamin TEXT (15) NOT NULL;
ALTER TABLE belajar_tabel MODIFY COLUMN alamat TEXT NOT NULL;
ALTER TABLE belajar_tabel MODIFY COLUMN nama_pegawai VARCHAR (15) NOT NULL;

#primary key  ================================================================================================================================================================
ALTER TABLE belajar_tabel ADD CONSTRAINT id PRIMARY KEY (id);
ALTER TABLE belajar_tabel DROP PRIMARY KEY;

#membuat tabel baru  =========================================================================================================================================================
CREATE TABLE jabatan (
	id_jabatan CHAR (5),
	nama_jabatan VARCHAR (30)
);

#modify primary key  ========================================================================================================================================================
ALTER TABLE belajar_tabel MODIFY COLUMN id_jabatan INT NOT NULL;
ALTER TABLE jabatan MODIFY COLUMN id INT NOT NULL;

#menambahkan foreign key  ===================================================================================================================================================
ALTER TABLE belajar_tabel ADD id_jabatan VARCHAR (100) NOT NULL;
ALTER TABLE belajar_tabel ADD FOREIGN KEY (id_jabatan) REFERENCE jabatan(id);

#insert data into pegawai ==================================================================================================================================================
INSERT INTO jabatan (id, nama_jabatan) VALUES (37, 'admin_1');

INSERT INTO belajar_tabel (
	id,
	nama_pegawai,
	jenis_kelamin,
	no_hp,
	email,
	alamat,
	id_jabatan
)VALUES(
	33,
	'si siapa',
	'L',
	'093427',
	'afafkjj@gmail.com',
	'jalan jalan jangan lupa',
	37
);

#menampilkan join  =========================================================================================================================================================
SELECT 
belajar_tabel.id AS id_pegawai,
belajar_tabel.nama_pegawai AS nama_pegawai,
jabatan.nama_jabatan AS jabatan
FROM belajar_tabel
JOIN jabatan
ON belajar_tabel.id_jabatan = jabatan.id;

#