create table Toko(
	ID_Toko char(5) not null,
    Lokasi varchar(20) not null,
    Jumlah_Pegawai int,
    primary key (ID_Toko)
);
create table Pegawai(
	ID_Pegawai char(4) not null,
    Nama_Pegawai varchar(30) not null,
    ID_Toko char(5) not null,
    primary key (ID_Pegawai),
    constraint fk_toko_pegawai foreign key (ID_Toko) references Toko(ID_Toko)
);
create table Barang(
	ID_Barang char(3) not null,
    Nama_Barang varchar(20) not null,
    Harga_Barang int not null,
    Jenis_Barang varchar(20),
    Status_Rilis varchar(20),
    Gambar varchar(250),
    Deskripsi text,
    Stok_Barang bigint,
    primary key (ID_Barang)
);
create table Pembeli(
	ID_Pembeli char(6) not null,
    Nama_Pembeli varchar(30),
    primary key (ID_Pembeli)
);
create table Transaksi(
	ID_Transaksi char(3) not null,
    Tanggal varchar(15) not null,
    Total_Pembayaran int not null,
    ID_Pegawai char(4) not null,
    ID_Barang char(3) not null,
    ID_Pembeli char(6) not null,
    Jumlah_Barang int default 0,
    primary key (ID_Transaksi),
    constraint fk_pegawai_transaksi foreign key (ID_Pegawai) references Pegawai(ID_Pegawai),
    constraint fk_barang_transaksi foreign key (ID_Barang) references Barang(ID_Barang),
    constraint fk_pembeli_transaksi foreign key (ID_Pembeli) references Pembeli(ID_Pembeli)
);
insert into toko values('00001', 'Royal Plaza', 0),
	('00002', 'Tunjungan Plaza', 0),
    ('00003', 'Grand City', 0),
    ('00004', 'Galaxy Mall', 0);

insert into pegawai values('0001', 'Fahmi', '00001'),
	('0002', 'Dwiki', '00002'),
    ('0003', 'Rifan', '00003'),
    ('0004', 'Jefri', '00004');

insert into barang values('001', 'Nusantara', 299900, 'Pakaian', 'Baru', 'Nusantara.jpg', 'Size<br>
S,M,L,XL<br>
Color<br>
Black<br>

Rp 299.900,- (*)<br>
- Material katun tidak transparan, ringan dan tidak stretch<br>
- Kerah bulat<br>
- Unlined<br>
- Regular fit<br>
Petunjuk perawatan<br>
- Cuci terpisah<br>
- Gunakan detergen yang lembut<br>
- Jangan direndam terlalu lama<br>
- Jangan gunakan pemutih<br>
- Jangan diputar dalam mesin cuci saat pengeringan<br>
- Keringkan dengan diletakkan pada permukaan datar<br>
- Setrika suhu rendah<br>
', 50),
	('002', 'Thiago', 359900, 'Pakaian', 'Baru', 'Thiago.jpg', 'Size<br>
S,M,L,XL<br>
Color<br>
Navy Red <br>White

Rp 359.900,- (*)<br>
- Material katun tidak transparan, ringan dan tidak stretch<br>
- Detail kerah<br>
- Unlined<br>
- Regular fit<br>
- Kancing depan<br>
Petunjuk perawatan<br>
- Cuci terpisah<br>
- Gunakan detergen yang lembut<br>
- Jangan direndam terlalu lama<br>
- Jangan gunakan pemutih<br>
- Jangan diputar dalam mesin cuci saat pengeringan<br>
- Keringkan dengan diletakkan pada permukaan datar<br>
- Setrika suhu rendah<br>
', 50),
    ('003', 'Espozia', 609900, 'Pakaian', 'Baru', 'Espozia.jpg', 'Size<br>
S,M,L,XL<br>
Color<br>
Navy White Red<br>

Rp 609.900,- (*)<br>
- Material poliester, tidak transparan, ringan, dan tidak stretch<br>
- Kerah stand up<br>
- Unlined<br>
- Regular fit<br>
- Resleting depan<br>
- 2 kantong samping<br>
- Detail cuff dan hem elastis<br>
Petunjuk perawatan<br>
- Cuci terpisah<br>
- Gunakan detergen yang lembut<br>
- Jangan direndam terlalu lama<br>
- Jangan gunakan pemutih<br>
- Jangan diputar dalam mesin cuci saat pengeringan<br>
- Keringkan dengan diletakkan pada permukaan datar<br>
- Setrika suhu rendah<br>
', 50),
    ('004', 'Culture III', 269900, 'Pakaian', 'Baru', 'Culture III.jpg', 'Size<br>
S,M,L,XL<br>
Color<br>
Navy<br>

Rp 269.900,- (*)<br>
- Kerah bulat<br>
- Unlined<br>
- Regular fit<br>
- Material katun tidak transparan, ringan dan tidak stretch<br>
Petunjuk perawatan<br>
- Cuci terpisah<br>
- Gunakan detergen yang lembut<br>
- Jangan direndam terlalu lama<br>
- Jangan gunakan pemutih<br>
- Jangan diputar dalam mesin cuci saat pengeringan<br>
- Keringkan dengan diletakkan pada permukaan datar<br>
- Setrika suhu rendah<br>
', 50),
    ('005', 'Hugo', 479900, 'Aksesoris', 'Baru', 'Hugo.jpg', 'Size<br>
Color<br>
Navy<br>

Rp 479.900,- (*)<br>
- Material poliester<br>
- 1 kompartemen utama dengan resleting<br>
- 1 kantong depan dengan resleting<br>
- 1 kantong slot dalam<br>
- 1 kantong dalam dengan resleting<br>
- Adjustable strap<br>
', 50),
    ('006', 'Ravel', 459900, 'Aksesoris', 'Baru', 'Ravel.jpg', 'Size<br>
Color<br>
Navy<br>

Rp 459.900,- (*)<br>
- Material poliester<br>
- 1 kompartemen utama dengan resleting<br>
- 1 kantong depan dengan resleting<br>
- 2 kantong slot samping<br>
- 1 kantong slot dalam<br>
- Adjustable strap<br>
', 50),
    ('007', 'Marcello B', 239900, 'Aksesoris', 'Baru', 'Marcello B.jpg', 'Size<br>
Color<br>
Navy <br>

Rp 239.900,- (*)<br>
- Material poliester<br>
- Desain curved peak<br>
- Adjustable slot through closure<br>
', 50),
    ('008', 'Contento II', 269900, 'Aksesoris', 'Baru', 'Contento II.jpg', 'Size<br>
Color<br>
Navy White Red<br>

Rp 269.900,- (*)<br>
- Reversible Bucket Hat<br>
- Material katun twill<br>
Petunjuk perawatan<br>
- Cuci terpisah<br>
- Gunakan detergen yang lembut<br>
- Jangan direndam terlalu lama<br>
- Jangan gunakan pemutih<br>
- Jangan diputar dalam mesin cuci saat pengeringan<br>
- Keringkan dengan diletakkan pada permukaan datar<br>
- Setrika suhu rendah<br>
', 50);

insert into pembeli values('000001', 'Atay'),
	('000002', 'Endy'),
    ('000003', 'Tian'),
    ('000004', 'Haidar');
    
insert into transaksi values('001', '04/04/2019', '150000', '0001', '001', '000001', 2),
	('002', '04/04/2019', '95000', '0002', '002', '000002', 1),
    ('003', '04/04/2019', '250000', '0003', '003', '000003', 3),
    ('004', '04/04/2019', '125000', '0004', '004', '000004', 5);