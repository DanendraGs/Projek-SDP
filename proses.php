<?php
// proses.php

// 1. DATA UNIVERSITAS DAN FAKULTAS (dengan penambahan min_skor_utbk)
$universities_data = [
    [
        "nama" => "Universitas Indonesia (UI)", "singkatan" => "UI", 
        "lokasi" => ["Depok", "Jakarta Pusat", "Salemba"],
        "min_skor_utbk" => 687,
        "fakultas" => [
            "Fakultas Kedokteran", "Fakultas Kedokteran Gigi", "Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA)",
            "Fakultas Teknik", "Fakultas Hukum", "Fakultas Ekonomi dan Bisnis", "Fakultas Ilmu Pengetahuan Budaya",
            "Fakultas Psikologi", "Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)", "Fakultas Ilmu Komputer",
            "Fakultas Ilmu Administrasi", "Fakultas Kesehatan Masyarakat", "Fakultas Farmasi", "Fakultas Ilmu Keperawatan",
            "Sekolah Ilmu Lingkungan", "Sekolah Kajian Stratejik dan Global", "Program Pendidikan Vokasi"
        ]
    ],
    [
        "nama" => "Universitas Gadjah Mada (UGM)", "singkatan" => "UGM", 
        "lokasi" => ["Yogyakarta", "Sleman"],
        "min_skor_utbk" => 689,
        "fakultas" => [
            "Fakultas Biologi", "Fakultas Ekonomika dan Bisnis", "Fakultas Farmasi", "Fakultas Filsafat",
            "Fakultas Geografi", "Fakultas Hukum", "Fakultas Ilmu Budaya", "Fakultas Ilmu Sosial dan Ilmu Politik (FISIPOL)",
            "Fakultas Kedokteran, Kesehatan Masyarakat, dan Keperawatan", "Fakultas Kedokteran Gigi",
            "Fakultas Kedokteran Hewan", "Fakultas Kehutanan", "Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA)",
            "Fakultas Pertanian", "Fakultas Peternakan", "Fakultas Psikologi", "Fakultas Teknik",
            "Sekolah Pascasarjana", "Sekolah Vokasi"
        ]
    ],
    [
        "nama" => "Institut Teknologi Bandung (ITB)", "singkatan" => "ITB", 
        "lokasi" => ["Bandung", "Jatinangor"],
        "min_skor_utbk" => 694,
        "fakultas" => [
            "Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)", "Sekolah Ilmu dan Teknologi Hayati (SITH)",
            "Sekolah Farmasi (SF)", "Fakultas Ilmu dan Teknologi Kebumian (FITB)",
            "Fakultas Teknik Pertambangan dan Perminyakan (FTTM)", "Sekolah Teknik Elektro dan Informatika (STEI)",
            "Fakultas Teknik Mesin dan Dirgantara (FTMD)", "Fakultas Teknik Sipil dan Lingkungan (FTSL)",
            "Sekolah Arsitektur, Perencanaan, dan Pengembangan Kebijakan (SAPPK)", "Fakultas Seni Rupa dan Desain (FSRD)",
            "Sekolah Bisnis dan Manajemen (SBM)"
        ]
    ],
    [
        "nama" => "Universitas Airlangga (UNAIR)", "singkatan" => "UNAIR", 
        "lokasi" => ["Surabaya"],
        "min_skor_utbk" => 699,
        "fakultas" => [
            "Fakultas Kedokteran", "Fakultas Kedokteran Gigi", "Fakultas Hukum", "Fakultas Ekonomi dan Bisnis", "Fakultas Farmasi", 
            "Fakultas Kedokteran Hewan", "Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)", "Fakultas Sains dan Teknologi (FST)", 
            "Fakultas Kesehatan Masyarakat", "Fakultas Psikologi", "Fakultas Ilmu Budaya", "Fakultas Keperawatan", 
            "Fakultas Perikanan dan Kelautan", "Fakultas Teknologi Maju dan Multidisiplin", "Sekolah Pascasarjana", "Sekolah Vokasi"
        ]
    ],
    [
        "nama" => "IPB University (Institut Pertanian Bogor)", "singkatan" => "IPB", 
        "lokasi" => ["Bogor"],
        "min_skor_utbk" => 714,
        "fakultas" => [
            "Fakultas Pertanian", "Sekolah Kedokteran Hewan dan Biomedis", "Fakultas Perikanan dan Ilmu Kelautan", 
            "Fakultas Peternakan", "Fakultas Kehutanan dan Lingkungan", "Fakultas Teknologi Pertanian", 
            "Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)", "Fakultas Ekonomi dan Manajemen", 
            "Fakultas Ekologi Manusia", "Sekolah Bisnis", "Sekolah Vokasi"
        ]
    ],
    [
        "nama" => "Universitas Padjadjaran (UNPAD)", "singkatan" => "UNPAD", 
        "lokasi" => ["Bandung", "Jatinangor"],
        "min_skor_utbk" => 680,
        "fakultas" => [
            "Fakultas Hukum", "Fakultas Ekonomi dan Bisnis", "Fakultas Kedokteran", "Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)", 
            "Fakultas Pertanian", "Fakultas Kedokteran Gigi", "Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)", "Fakultas Ilmu Budaya", 
            "Fakultas Psikologi", "Fakultas Peternakan", "Fakultas Ilmu Komunikasi", "Fakultas Keperawatan", 
            "Fakultas Perikanan dan Ilmu Kelautan", "Fakultas Teknologi Industri Pertanian", "Fakultas Farmasi", 
            "Fakultas Teknik Geologi", "Sekolah Pascasarjana"
        ]
    ],
    [
        "nama" => "Universitas Diponegoro (UNDIP)", "singkatan" => "UNDIP", 
        "lokasi" => ["Semarang"],
        "min_skor_utbk" => 686,
        "fakultas" => [
            "Fakultas Hukum", "Fakultas Ekonomika dan Bisnis", "Fakultas Teknik", "Fakultas Kedokteran", 
            "Fakultas Peternakan dan Pertanian", "Fakultas Ilmu Budaya", "Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)", 
            "Fakultas Kesehatan Masyarakat", "Fakultas Sains dan Matematika", "Fakultas Perikanan dan Ilmu Kelautan", 
            "Fakultas Psikologi", "Sekolah Pascasarjana", "Sekolah Vokasi"
        ]
    ],
    [
        "nama" => "Universitas Brawijaya (UB)", "singkatan" => "UB", 
        "lokasi" => ["Malang"],
        "min_skor_utbk" => 680,
        "fakultas" => [
            "Fakultas Hukum", "Fakultas Ekonomi dan Bisnis", "Fakultas Ilmu Administrasi", "Fakultas Pertanian", 
            "Fakultas Peternakan", "Fakultas Teknik", "Fakultas Kedokteran", "Fakultas Perikanan dan Ilmu Kelautan", 
            "Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)", "Fakultas Teknologi Pertanian", 
            "Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)", "Fakultas Ilmu Budaya", "Fakultas Kedokteran Hewan", 
            "Fakultas Ilmu Komputer", "Fakultas Kedokteran Gigi", "Program Vokasi", "Pascasarjana"
        ]
    ],
    [
        "nama" => "Universitas Sebelas Maret (UNS)", "singkatan" => "UNS", 
        "lokasi" => ["Surakarta", "Solo"],
        "min_skor_utbk" => 678,
        "fakultas" => [
            "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Ilmu Budaya", "Fakultas Ekonomi dan Bisnis", 
            "Fakultas Ilmu Sosial dan Politik (FISIP)", "Fakultas Hukum", "Fakultas Kedokteran", "Fakultas Pertanian", 
            "Fakultas Teknik", "Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA)", "Fakultas Seni Rupa dan Desain", 
            "Fakultas Keolahragaan", "Sekolah Vokasi", "Sekolah Pascasarjana"
        ]
    ],
    [
        "nama" => "Institut Teknologi Sepuluh Nopember (ITS)", "singkatan" => "ITS", 
        "lokasi" => ["Surabaya"],
        "min_skor_utbk" => 691,
        "fakultas" => [
            "Fakultas Sains dan Analitika Data", "Fakultas Teknologi Industri dan Rekayasa Sistem", 
            "Fakultas Teknik Sipil, Perencanaan, dan Kebumian", "Fakultas Teknologi Kelautan", 
            "Fakultas Teknologi Elektro dan Informatika Cerdas", "Fakultas Desain Kreatif dan Bisnis Digital", 
            "Fakultas Vokasi"
        ]
    ],
    [
        "nama" => "Universitas Hasanuddin (UNHAS)", "singkatan" => "UNHAS", 
        "lokasi" => ["Makassar"],
        "min_skor_utbk" => 674,
        "fakultas" => [
            "Fakultas Ekonomi dan Bisnis", "Fakultas Hukum", "Fakultas Kedokteran", "Fakultas Teknik", 
            "Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)", "Fakultas Ilmu Budaya", "Fakultas Pertanian", 
            "Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA)", "Fakultas Peternakan", "Fakultas Kedokteran Gigi", 
            "Fakultas Kesehatan Masyarakat", "Fakultas Ilmu Kelautan dan Perikanan", "Fakultas Kehutanan", 
            "Fakultas Farmasi", "Fakultas Keperawatan"
        ]
    ],
    [
        "nama" => "Universitas Sumatera Utara (USU)", "singkatan" => "USU", 
        "lokasi" => ["Medan"],
        "min_skor_utbk" => 672,
        "fakultas" => [
            "Fakultas Kedokteran", "Fakultas Hukum", "Fakultas Pertanian", "Fakultas Teknik", 
            "Fakultas Ekonomi dan Bisnis", "Fakultas Kedokteran Gigi", "Fakultas Ilmu Budaya", 
            "Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)", "Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)", 
            "Fakultas Kesehatan Masyarakat", "Fakultas Farmasi", "Fakultas Psikologi", "Fakultas Keperawatan", 
            "Fakultas Ilmu Komputer dan Teknologi Informasi", "Fakultas Kehutanan"
        ]
    ],
    [
        "nama" => "Universitas Sriwijaya (UNSRI)", "singkatan" => "UNSRI", 
        "lokasi" => ["Palembang", "Indralaya"],
        "min_skor_utbk" => 665,
        "fakultas" => [
            "Fakultas Ekonomi", "Fakultas Hukum", "Fakultas Teknik", "Fakultas Kedokteran", "Fakultas Pertanian", 
            "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Ilmu Sosial dan Politik (FISIP)", 
            "Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA)", "Fakultas Ilmu Komputer", "Fakultas Kesehatan Masyarakat"
        ]
    ],
    [
        "nama" => "Universitas Negeri Malang (UM)", "singkatan" => "UM", 
        "lokasi" => ["Malang"],
        "min_skor_utbk" => 660,
        "fakultas" => [
            "Fakultas Ilmu Pendidikan", "Fakultas Sastra", "Fakultas Matematika dan IPA (MIPA)", 
            "Fakultas Ekonomi dan Bisnis", "Fakultas Teknik", "Fakultas Ilmu Keolahragaan", 
            "Fakultas Ilmu Sosial", "Fakultas Psikologi", "Sekolah Pascasarjana", "Pendidikan Vokasi"
        ]
    ],
    [
        "nama" => "Universitas Negeri Yogyakarta (UNY)", "singkatan" => "UNY", 
        "lokasi" => ["Yogyakarta", "Sleman"],
        "min_skor_utbk" => 662,
        "fakultas" => [
            "Fakultas Ilmu Pendidikan dan Psikologi", "Fakultas Bahasa, Seni, dan Budaya", 
            "Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)", "Fakultas Ilmu Sosial, Hukum, dan Ilmu Politik", 
            "Fakultas Teknik", "Fakultas Ilmu Keolahragaan dan Kesehatan", "Fakultas Ekonomi dan Bisnis", 
            "Program Pascasarjana"
        ]
    ],
    [
        "nama" => "Universitas Pendidikan Indonesia (UPI)", "singkatan" => "UPI", 
        "lokasi" => ["Bandung"],
        "min_skor_utbk" => 667,
        "fakultas" => [
            "Fakultas Ilmu Pendidikan", "Fakultas Pendidikan Ilmu Pengetahuan Sosial", 
            "Fakultas Pendidikan Bahasa dan Sastra", "Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam", 
            "Fakultas Pendidikan Teknologi dan Kejuruan", "Fakultas Pendidikan Olahraga dan Kesehatan", 
            "Fakultas Pendidikan Ekonomi dan Bisnis", "Fakultas Pendidikan Seni dan Desain", "Sekolah Pascasarjana"
        ]
    ],
    [
        "nama" => "Universitas Andalas (UNAND)", "singkatan" => "UNAND", 
        "lokasi" => ["Padang"],
        "min_skor_utbk" => 666,
        "fakultas" => [
            "Fakultas Pertanian", "Fakultas Kedokteran", "Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA)", 
            "Fakultas Hukum", "Fakultas Ekonomi dan Bisnis", "Fakultas Peternakan", "Fakultas Teknik", 
            "Fakultas Ilmu Budaya", "Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)", "Fakultas Teknologi Pertanian", 
            "Fakultas Kesehatan Masyarakat", "Fakultas Farmasi", "Fakultas Kedokteran Gigi", "Fakultas Keperawatan", 
            "Fakultas Teknologi Informasi"
        ]
    ],
    [
        "nama" => "Universitas Negeri Semarang (UNNES)", "singkatan" => "UNNES", 
        "lokasi" => ["Semarang"],
        "min_skor_utbk" => 655,
        "fakultas" => [
            "Fakultas Ilmu Pendidikan", "Fakultas Bahasa dan Seni", "Fakultas Ilmu Sosial", 
            "Fakultas Matematika dan IPA", "Fakultas Teknik", "Fakultas Ilmu Keolahragaan", 
            "Fakultas Ekonomi", "Fakultas Hukum", "Program Pascasarjana"
        ]
    ],
    [
        "nama" => "Universitas Negeri Surabaya (UNESA)", "singkatan" => "UNESA", 
        "lokasi" => ["Surabaya"],
        "min_skor_utbk" => 652,
        "fakultas" => [
            "Fakultas Matematika dan IPA", "Fakultas Ilmu Sosial dan Hukum", "Fakultas Teknik", 
            "Fakultas Bahasa dan Seni", "Fakultas Ilmu Keolahragaan dan Kesehatan", "Fakultas Ekonomi dan Bisnis", 
            "Fakultas Ilmu Pendidikan", "Program Vokasi", "Program Pascasarjana"
        ]
    ],
    [
        "nama" => "Universitas Jenderal Soedirman (UNSOED)", "singkatan" => "UNSOED", 
        "lokasi" => ["Purwokerto"],
        "min_skor_utbk" => 650,
        "fakultas" => [
            "Fakultas Pertanian", "Fakultas Biologi", "Fakultas Ekonomi dan Bisnis", "Fakultas Peternakan", 
            "Fakultas Hukum", "Fakultas Ilmu Sosial dan Ilmu Politik", "Fakultas Kedokteran", "Fakultas Teknik", 
            "Fakultas Ilmu-Ilmu Kesehatan", "Fakultas Ilmu Budaya", "Fakultas Matematika dan Ilmu Pengetahuan Alam", 
            "Fakultas Perikanan dan Ilmu Kelautan", "Program Pascasarjana"
        ]
    ],
    [
        "nama" => "Universitas Lampung (UNILA)", "singkatan" => "UNILA", 
        "lokasi" => ["Bandar Lampung"],
        "min_skor_utbk" => 648,
        "fakultas" => [
            "Fakultas Ekonomi dan Bisnis", "Fakultas Hukum", "Fakultas Pertanian", "Fakultas Teknik", 
            "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Ilmu Sosial dan Ilmu Politik", 
            "Fakultas Matematika dan IPA", "Fakultas Kedokteran"
        ]
    ],
    [
        "nama" => "Universitas Riau (UNRI)", "singkatan" => "UNRI", 
        "lokasi" => ["Pekanbaru"],
        "min_skor_utbk" => 647,
        "fakultas" => [
            "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Ilmu Sosial dan Ilmu Politik", 
            "Fakultas Ekonomi dan Bisnis", "Fakultas Perikanan dan Kelautan", "Fakultas Pertanian", 
            "Fakultas Teknik", "Fakultas Matematika dan Ilmu Pengetahuan Alam", "Fakultas Kedokteran", 
            "Fakultas Hukum", "Fakultas Keperawatan"
        ]
    ],
    [
        "nama" => "Universitas Udayana (UNUD)", "singkatan" => "UNUD", 
        "lokasi" => ["Denpasar", "Bali", "Jimbaran", "Badung"],
        "min_skor_utbk" => 649,
        "fakultas" => [
            "Fakultas Ilmu Budaya", "Fakultas Kedokteran", "Fakultas Hukum", "Fakultas Teknik", 
            "Fakultas Pertanian", "Fakultas Ekonomi dan Bisnis", "Fakultas Peternakan", 
            "Fakultas Matematika dan Ilmu Pengetahuan Alam", "Fakultas Kedokteran Hewan", 
            "Fakultas Teknologi Pertanian", "Fakultas Pariwisata", "Fakultas Ilmu Sosial dan Ilmu Politik", 
            "Fakultas Kelautan dan Perikanan"
        ]
    ],
    [
        "nama" => "Universitas Negeri Padang (UNP)", "singkatan" => "UNP", 
        "lokasi" => ["Padang"],
        "min_skor_utbk" => 646,
        "fakultas" => [
            "Fakultas Ilmu Pendidikan", "Fakultas Bahasa dan Seni", "Fakultas Matematika dan IPA", 
            "Fakultas Ilmu Sosial", "Fakultas Teknik", "Fakultas Ilmu Keolahragaan", "Fakultas Ekonomi", 
            "Fakultas Pariwisata dan Perhotelan", "Program Pascasarjana"
        ]
    ],
    [
        "nama" => "Universitas Jambi (UNJA)", "singkatan" => "UNJA", 
        "lokasi" => ["Jambi"],
        "min_skor_utbk" => 644,
        "fakultas" => [
            "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Hukum", "Fakultas Ekonomi dan Bisnis", 
            "Fakultas Pertanian", "Fakultas Peternakan", "Fakultas Sains dan Teknologi", 
            "Fakultas Kedokteran dan Ilmu Kesehatan", "Fakultas Kehutanan"
        ]
    ],
    [
        "nama" => "Universitas Syiah Kuala (USK)", "singkatan" => "USK", 
        "lokasi" => ["Banda Aceh"],
        "min_skor_utbk" => 643,
        "fakultas" => [
            "Fakultas Ekonomi dan Bisnis", "Fakultas Kedokteran Hewan", "Fakultas Hukum", "Fakultas Teknik", 
            "Fakultas Pertanian", "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Kedokteran", 
            "Fakultas Matematika dan Ilmu Pengetahuan Alam", "Fakultas Ilmu Sosial dan Ilmu Politik", 
            "Fakultas Kelautan dan Perikanan", "Fakultas Kedokteran Gigi", "Fakultas Keperawatan"
        ]
    ],
    [
        "nama" => "Universitas Negeri Makassar (UNM)", "singkatan" => "UNM", 
        "lokasi" => ["Makassar"],
        "min_skor_utbk" => 642,
        "fakultas" => [
            "Fakultas Matematika dan IPA", "Fakultas Teknik", "Fakultas Ilmu Keolahragaan dan Kesehatan", 
            "Fakultas Ilmu Pendidikan", "Fakultas Bahasa dan Sastra", "Fakultas Ilmu Sosial dan Hukum", 
            "Fakultas Psikologi", "Fakultas Seni dan Desain", "Fakultas Ekonomi dan Bisnis", "Program Pascasarjana"
        ]
    ],
    [
        "nama" => "Universitas Tadulako (UNTAD)", "singkatan" => "UNTAD", 
        "lokasi" => ["Palu"],
        "min_skor_utbk" => 640,
        "fakultas" => [
            "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Ilmu Sosial dan Ilmu Politik", "Fakultas Ekonomi", 
            "Fakultas Hukum", "Fakultas Pertanian", "Fakultas Teknik", "Fakultas Matematika dan Ilmu Pengetahuan Alam", 
            "Fakultas Kehutanan", "Fakultas Kedokteran", "Fakultas Kesehatan Masyarakat", 
            "Fakultas Peternakan dan Perikanan"
        ]
    ],
    [
        "nama" => "Universitas Mulawarman (UNMUL)", "singkatan" => "UNMUL", 
        "lokasi" => ["Samarinda"],
        "min_skor_utbk" => 638,
        "fakultas" => [
            "Fakultas Ekonomi dan Bisnis", "Fakultas Ilmu Sosial dan Ilmu Politik", "Fakultas Pertanian", 
            "Fakultas Kehutanan", "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Perikanan dan Ilmu Kelautan", 
            "Fakultas Hukum", "Fakultas Teknik", "Fakultas Matematika dan Ilmu Pengetahuan Alam", 
            "Fakultas Kedokteran", "Fakultas Kesehatan Masyarakat", "Fakultas Farmasi", "Fakultas Ilmu Budaya", 
            "Fakultas Ilmu Komputer dan Teknologi Informasi"
        ]
    ],
    [
        "nama" => "Universitas Lambung Mangkurat (ULM)", "singkatan" => "ULM", 
        "lokasi" => ["Banjarmasin", "Banjarbaru"],
        "min_skor_utbk" => 637,
        "fakultas" => [
            "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Hukum", "Fakultas Ekonomi dan Bisnis", 
            "Fakultas Ilmu Sosial dan Ilmu Politik", "Fakultas Pertanian", "Fakultas Kehutanan", 
            "Fakultas Perikanan dan Ilmu Kelautan", "Fakultas Teknik", "Fakultas Kedokteran", 
            "Fakultas Matematika dan IPA", "Fakultas Kedokteran Gigi"
        ]
    ],
    [
        "nama" => "Universitas Mataram (UNRAM)", "singkatan" => "UNRAM", 
        "lokasi" => ["Mataram"],
        "min_skor_utbk" => 635,
        "fakultas" => [
            "Fakultas Pertanian", "Fakultas Ekonomi dan Bisnis", "Fakultas Hukum", "Fakultas Peternakan", 
            "Fakultas Teknik", "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Matematika dan Ilmu Pengetahuan Alam", 
            "Fakultas Kedokteran", "Fakultas Teknologi Pangan dan Agroindustri"
        ]
    ],
    [
        "nama" => "Universitas Cenderawasih (UNCEN)", "singkatan" => "UNCEN", 
        "lokasi" => ["Jayapura"],
        "min_skor_utbk" => 630,
        "fakultas" => [
            "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Hukum", "Fakultas Ilmu Sosial dan Ilmu Politik", 
            "Fakultas Ekonomi dan Bisnis", "Fakultas Matematika dan Ilmu Pengetahuan Alam", "Fakultas Teknik", 
            "Fakultas Kesehatan Masyarakat", "Fakultas Kedokteran"
        ]
    ],
    [
        "nama" => "Universitas Pattimura (UNPATTI)", "singkatan" => "UNPATTI", 
        "lokasi" => ["Ambon"],
        "min_skor_utbk" => 629,
        "fakultas" => [
            "Fakultas Keguruan dan Ilmu Pendidikan", "Fakultas Hukum", "Fakultas Teknik", "Fakultas Pertanian", 
            "Fakultas Ekonomi dan Bisnis", "Fakultas Ilmu Sosial dan Ilmu Politik", 
            "Fakultas Perikanan dan Ilmu Kelautan", "Fakultas Matematika dan Ilmu Pengetahuan Alam", 
            "Fakultas Kedokteran"
        ]
    ],
    [
        "nama" => "Universitas Negeri Medan (UNIMED)", "singkatan" => "UNIMED", 
        "lokasi" => ["Medan"],
        "min_skor_utbk" => 631,
        "fakultas" => [
            "Fakultas Ilmu Pendidikan", "Fakultas Bahasa dan Seni", "Fakultas Ilmu Sosial", 
            "Fakultas Matematika dan IPA", "Fakultas Teknik", "Fakultas Ilmu Keolahragaan", "Fakultas Ekonomi"
        ]
    ],
    [
        "nama" => "Universitas Sam Ratulangi (UNSRAT)", "singkatan" => "UNSRAT", 
        "lokasi" => ["Manado"],
        "min_skor_utbk" => 633,
        "fakultas" => [
            "Fakultas Kedokteran", "Fakultas Teknik", "Fakultas Pertanian", "Fakultas Peternakan", 
            "Fakultas Perikanan dan Ilmu Kelautan", "Fakultas Ekonomi dan Bisnis", "Fakultas Hukum", 
            "Fakultas Ilmu Sosial dan Politik", "Fakultas Ilmu Budaya", "Fakultas Matematika dan Ilmu Pengetahuan Alam", 
            "Fakultas Kesehatan Masyarakat"
        ]
    ],
    [
        "nama" => "Universitas Singaperbangsa Karawang (UNSIKA)", "singkatan" => "UNSIKA",
        "lokasi" => ["Karawang"],
        "min_skor_utbk" => 628,
        "fakultas" => [
            "Fakultas Hukum ", "Fakultas Ekonomi dan Bisnis ","Fakultas Keguruan dan Ilmu Pendidikan ",
            "Fakultas Pertanian ","Fakultas Teknik ","Fakultas Ilmu Komputer ","Fakultas Ilmu Sosial dan Ilmu Politik ",
            "Fakultas Agama Islam", "Fakultas Ilmu Kesehatan "
        ]
    ],
    [
        "nama" => "Universitas Negeri Jakarta (UNJ)", "singkatan" => "UNJ",
        "lokasi" => ["Jakarta", "Jakarta Timur", "Rawamangun"],
        "min_skor_utbk" => 660,
        "fakultas" => [
            "Fakultas Ilmu Pendidikan", "Fakultas Bahasa dan Seni","Fakultas Matematika dan Ilmu Pengetahuan Alam", 
            "Fakultas Ilmu Sosial", "Fakultas Teknik", "Fakultas Ilmu Olahraga", "Fakultas Pendidikan Psikologi", 
            "Fakultas Ekonomi"
        ]
    ]
];

// 2. PEMETAAN MINAT KE KATA KUNCI (disesuaikan dengan opsi di index.php)
$minatKeywords = [
    "teknologi" => ["ilmu komputer", "informatika", "teknik", "elektro", "rekayasa", "sistem informasi", "teknologi informasi", "ftmd", "stei", "fttm", "ftk", "ftsl", "ft", "teknologi industri pertanian", "teknologi kelautan", "teknologi maju", "teknologi pangan", "teknik sipil", "teknik mesin", "teknik kimia", "teknik lingkungan", "informatika dan komputer", "sistem dan teknologi informasi", "transportasi"],
    "sains" => ["matematika", "ipa", "mipa", "fmipa", "biologi", "fisika", "kimia", "sith", "fitb", "geografi", "statistika", "sains", "fst", "sains dan analitika data", "ilmu dan teknologi kebumian"],
    "kesehatan" => ["kedokteran", "kesehatan", "farmasi", "keperawatan", "gigi", "nutrisi", "gizi", "fkm", "fk", "fkg", "ners", "ilmu-ilmu kesehatan", "kesehatan masyarakat", "kedokteran hewan", "biomedis", "kebidanan"],
    "bisnis" => ["bisnis", "ekonomi", "manajemen", "sbm", "wirausaha", "akuntansi", "administrasi niaga", "feb", "ekonomika", "desain kreatif dan bisnis digital", "administrasi perkantoran", "bisnis digital", "manajemen pelabuhan"],
    "soshum" => ["sosial", "politik", "fisip", "fisipol", "hukum", "psikologi", "budaya", "komunikasi", "sastra", "sappk", "filsafat", "administrasi", "fib", "fis", "kajian stratejik", "ilmu lingkungan", "pariwisata", "ilmu sosial dan hukum", "ilmu sosial dan politik", "ilmu pemerintahan", "hubungan internasional", "pancasila dan kewarganegaraan", "sejarah", "sosiologi", "hubungan masyarakat"],
    "seni" => ["seni", "desain", "fsrd", "dkv", "seni rupa", "bahasa, seni, dan budaya", "pendidikan seni dan desain", "pendidikan seni musik", "pendidikan seni tari", "tata boga", "tata busana", "tata rias"],
    "pertanian" => ["pertanian", "agribisnis", "agroteknologi", "peternakan", "perikanan", "kehutanan", "pangan", "faperta", "fpik", "fapet", "fahutan", "fateta", "ekologi manusia", "ilmu kelautan", "perikanan dan kelautan", "teknologi pertanian"],
    "pendidikan" => ["pendidikan", "keguruan", "fkip", "fip", "ilmu pendidikan", "pendidikan ilmu pengetahuan sosial", "pendidikan bahasa dan sastra indonesia", "pendidikan bahasa inggris", "pendidikan bahasa prancis", "pendidikan bahasa jerman", "pendidikan bahasa arab", "pendidikan bahasa jepang", "pendidikan bahasa mandarin", "pendidikan matematika dan ilmu pengetahuan alam", "pendidikan teknologi dan kejuruan", "pendidikan olahraga dan kesehatan", "pendidikan ekonomi dan bisnis", "pendidikan guru sekolah dasar", "pgsd", "pendidikan guru pendidikan anak usia dini", "pg-paud", "teknologi pendidikan", "pendidikan luar biasa", "plb", "manajemen pendidikan", "pendidikan masyarakat", "bimbingan dan konseling", "pendidikan agama islam", "manajemen pendidikan islam", "pendidikan islam anak usia dini", "pendidikan jasmani", "pendidikan kepelatihan olahraga", "pendidikan teknik", "pendidikan kesejahteraan keluarga", "pendidikan tata boga", "pendidikan tata busana", "pendidikan tata rias", "pendidikan teknik elektro", "pendidikan teknik elektronika", "pendidikan teknik mesin", "pendidikan teknik bangunan", "pendidikan teknik informatika dan komputer"],
];

// 3. PETA LOKASI DARI INPUT SELECT KE KOTA-KOTA KAMPUS (gunakan huruf kecil semua)
$petaProvinsiKeKota = [
    "jakarta" => ["jakarta", "jakarta pusat", "jakarta selatan", "jakarta timur", "jakarta barat", "jakarta utara", "salemba", "depok", "rawamangun"],
    "jawa_barat" => ["bandung", "jatinangor", "bogor", "depok", "karawang"], 
    "banten" => ["serang", "tangerang", "cilegon"], 
    "jawa_tengah" => ["semarang", "surakarta", "solo", "purwokerto", "salatiga", "magelang"],
    "yogyakarta" => ["yogyakarta", "sleman", "bantul"],
    "jawa_timur" => ["surabaya", "malang", "jember", "kediri"],
    "sumatera_utara" => ["medan"],
    "sumatera_barat" => ["padang"],
    "sumatera_selatan" => ["palembang", "indralaya"],
    "lampung" => ["bandar lampung"],
    "riau" => ["pekanbaru"],
    "jambi" => ["jambi"], 
    "aceh" => ["banda aceh"], 
    "kalimantan_timur" => ["samarinda", "balikpapan"],
    "kalimantan_selatan" => ["banjarmasin", "banjarbaru"],
    "sulawesi_selatan" => ["makassar"],
    "sulawesi_tengah" => ["palu"], 
    "maluku" => ["ambon"], 
    "papua" => ["jayapura"], 
    "sulawesi_utara" => ["manado"], 
    "nusa_tenggara_barat" => ["mataram"], 
    "bali" => ["denpasar", "jimbaran", "badung"], 
];


// Inisialisasi variabel
$nama_user = "Tamu";
$skor_user = 0;
$minat_input_user_key = ""; 
$lokasi_input_user_key = ""; 

$recommendations_to_display = [];
$jurusan_fallback = "Belum dapat ditentukan";
$kampus_fallback = "";
$alasan_tidak_ada_rekomendasi = "";
$special_motivational_only = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_user = isset($_POST['nama']) ? htmlspecialchars(trim($_POST['nama'])) : 'Tamu';
    $skor_user = isset($_POST['skor']) ? (int)$_POST['skor'] : 0;
    
    $minat_input_user_key = isset($_POST['minat']) ? strtolower(trim($_POST['minat'])) : "";
    $lokasi_input_user_key = isset($_POST['lokasi']) ? strtolower(trim($_POST['lokasi'])) : "";

    $all_possible_matches = []; 
    $keywords_for_minat = [];

    // Validasi input awal
    if (empty($minat_input_user_key)) {
        $alasan_tidak_ada_rekomendasi = "Anda belum memilih minat.";
    } elseif (array_key_exists($minat_input_user_key, $minatKeywords)) {
        $keywords_for_minat = $minatKeywords[$minat_input_user_key];
        if (empty($keywords_for_minat)) { // Seharusnya tidak terjadi jika $minatKeywords lengkap
            $alasan_tidak_ada_rekomendasi = "Pilihan minat ('" . htmlspecialchars($minat_input_user_key) . "') tidak memiliki kata kunci pencarian yang valid.";
        }
    } else {
        $alasan_tidak_ada_rekomendasi = "Pilihan minat ('" . htmlspecialchars($minat_input_user_key) . "') tidak dikenali.";
    }

    // Lanjutkan hanya jika ada keyword dan belum ada alasan error awal
    if (!empty($keywords_for_minat) && empty($alasan_tidak_ada_rekomendasi)) {
        foreach ($universities_data as $univ) {
            if (isset($univ['min_skor_utbk']) && $skor_user < $univ['min_skor_utbk']) {
                continue; 
            }

            $nama_kampus = $univ['nama'];
            $lokasi_kampus_arr_univ_lower = array_map('strtolower', $univ['lokasi']); 
            $lokasi_kampus_str_display = implode(", ", $univ['lokasi']); 
            $is_politeknik_univ = isset($univ['tipe']) && $univ['tipe'] == 'politeknik';

            foreach ($univ['fakultas'] as $fakultas_name) {
                $fakultas_name_lower = strtolower($fakultas_name);
                $minat_cocok_flag = false;
                foreach ($keywords_for_minat as $keyword) {
                    if (str_contains($fakultas_name_lower, $keyword)) {
                        $minat_cocok_flag = true;
                        break;
                    }
                }

                if ($minat_cocok_flag) {
                    $is_vokasi_faculty = (str_contains($fakultas_name_lower, "vokasi") || str_contains($fakultas_name_lower, "politeknik") || preg_match('/\((d3|d4|sarjana terapan)\)/i', $fakultas_name_lower));
                    
                    $lokasi_cocok_flag = false; 
                    if (!empty($lokasi_input_user_key)) {
                        $mapped_cities_for_user_pref = [];
                        if (array_key_exists($lokasi_input_user_key, $petaProvinsiKeKota)) {
                            $mapped_cities_for_user_pref = $petaProvinsiKeKota[$lokasi_input_user_key];
                        }

                        if (!empty($mapped_cities_for_user_pref)) {
                            foreach ($lokasi_kampus_arr_univ_lower as $kotaKampusUniv) {
                                if (in_array($kotaKampusUniv, $mapped_cities_for_user_pref)) {
                                    $lokasi_cocok_flag = true;
                                    break; 
                                }
                            }
                        }
                    }
                    
                    $all_possible_matches[] = [
                        'kampus' => $nama_kampus,
                        'fakultas_jurusan' => $fakultas_name,
                        'lokasi_kampus_display' => $lokasi_kampus_str_display,
                        'is_vokasi' => $is_vokasi_faculty || $is_politeknik_univ,
                        'user_pref_lokasi_cocok' => $lokasi_cocok_flag, 
                    ];
                }
            }
        }

        // Jika setelah semua loop tidak ada match sama sekali (padahal minat valid)
        if (empty($all_possible_matches) && empty($alasan_tidak_ada_rekomendasi)) {
            if ($skor_user < 550) { // Batas "skor kecil"
                $special_motivational_only = true;
            } else {
                $alasan_tidak_ada_rekomendasi = "Skor UTBK Anda (" . $skor_user . ") mungkin belum memenuhi persyaratan minimum di universitas yang sesuai dengan minat Anda, atau tidak ada program yang cocok dengan minat tersebut setelah filter awal.";
            }
        }
    } // Akhir dari if (!empty($keywords_for_minat) && empty($alasan_tidak_ada_rekomendasi))
    

    $filtered_by_score_tier = [];
    if (!$special_motivational_only && !empty($all_possible_matches)) {
        if ($skor_user < 500) { 
            foreach ($all_possible_matches as $rec) {
                if ($rec['is_vokasi']) {
                    $filtered_by_score_tier[] = $rec;
                }
            }
            if (empty($filtered_by_score_tier) && !empty($all_possible_matches)) { 
                 $filtered_by_score_tier = $all_possible_matches; 
            }
        } else { 
             foreach ($all_possible_matches as $rec) {
                 if ($skor_user >= 650) { 
                    if (!$rec['is_vokasi']) {
                        $filtered_by_score_tier[] = $rec;
                    }
                 } else { 
                    $filtered_by_score_tier[] = $rec;
                 }
            }
            if ($skor_user >= 650 && empty($filtered_by_score_tier) && !empty($all_possible_matches)) {
                $filtered_by_score_tier = $all_possible_matches;
            } elseif (empty($filtered_by_score_tier) && !empty($all_possible_matches) && $skor_user < 650) {
                $filtered_by_score_tier = $all_possible_matches;
            }
        }
    }

    $final_candidates = [];
    if (!$special_motivational_only && !empty($filtered_by_score_tier)) { 
        if (!empty($lokasi_input_user_key)) { 
            $matches_in_pref_location = [];
            foreach ($filtered_by_score_tier as $rec) {
                if ($rec['user_pref_lokasi_cocok']) {
                    $matches_in_pref_location[] = $rec;
                }
            }

            if (!empty($matches_in_pref_location)) {
                $final_candidates = $matches_in_pref_location; 
            } else {
                $final_candidates = $filtered_by_score_tier; 
                 if (empty($alasan_tidak_ada_rekomendasi) && !empty($filtered_by_score_tier)) {
                    $alasan_tidak_ada_rekomendasi = "Tidak ditemukan program yang cocok dengan minat Anda di lokasi yang dipilih. Berikut adalah pilihan di lokasi lain (jika ada).";
                }
            }
        } else { 
            $final_candidates = $filtered_by_score_tier;
        }
    } else if (!$special_motivational_only && empty($filtered_by_score_tier) && !empty($all_possible_matches)) {
        // Jika $all_possible_matches ada tapi $filtered_by_score_tier kosong
        if (empty($alasan_tidak_ada_rekomendasi)) {
             $alasan_tidak_ada_rekomendasi = "Tidak ada program yang lolos filter berdasarkan tingkatan skor Anda.";
        }
    }
    
    if (!$special_motivational_only && !empty($final_candidates)) {
        usort($final_candidates, function($a, $b) {
            global $skor_user; 
            if ($skor_user < 500) {
                if ($a['is_vokasi'] && !$b['is_vokasi']) return -1;
                if (!$a['is_vokasi'] && $b['is_vokasi']) return 1;
            } elseif ($skor_user >= 650) {
                 if (!$a['is_vokasi'] && $b['is_vokasi']) return -1;
                 if ($a['is_vokasi'] && !$b['is_vokasi']) return 1;
            }
            return strcmp($a['kampus'], $b['kampus']);
        });
    }
    
    $recommendations_to_display = array_slice($final_candidates, 0, 10); 

    if (empty($recommendations_to_display)) {
        if ($special_motivational_only) {
            $jurusan_fallback = "Nilai UTBK bukan akhir segalanya. Jalanmu menuju masa depan tetap terbuka luas, banyak orang sukses tak dimulai dari angka tinggi, tapi dari semangat pantang menyerah. Terus belajar, terus berjuang. Gagal hari ini bukan berarti gagal selamanya.";
            $kampus_fallback = ""; 
        } else {
            $minat_display_text_fb = !empty($minat_input_user_key) ? ucwords(str_replace('_', ' ', $minat_input_user_key)) : "Minat Anda";
            $lokasi_display_text_fb = "";
            if (!empty($lokasi_input_user_key)) {
                $lokasi_display_text_fb = ucwords(str_replace('_', ' ', $lokasi_input_user_key));
            }

            if (!empty($alasan_tidak_ada_rekomendasi)) {
                $jurusan_fallback = $alasan_tidak_ada_rekomendasi;
                $kampus_fallback = "Mohon coba sesuaikan filter atau periksa kembali data Anda.";
            } else {
                 // Fallback paling umum jika $alasan_tidak_ada_rekomendasi tidak terisi oleh logika di atas
                if ($skor_user >= 700) {
                    $jurusan_fallback = "Untuk skor Anda yang tinggi (" . $skor_user . "), kami tidak menemukan padanan spesifik dengan minat '" . $minat_display_text_fb . "'" . (!empty($lokasi_display_text_fb) ? " di lokasi " . $lokasi_display_text_fb : "") . " setelah semua filter.";
                    $kampus_fallback = "Mohon periksa kembali pilihan Anda atau coba kombinasi lain.";
                } elseif ($skor_user >= 600) {
                    $jurusan_fallback = "Kami tidak menemukan program yang cocok dengan minat '" . $minat_display_text_fb . "'" . (!empty($lokasi_display_text_fb) ? " di lokasi " . $lokasi_display_text_fb : "") . " dan skor Anda (" . $skor_user . ") setelah semua filter.";
                    $kampus_fallback = "Silakan coba sesuaikan filter atau periksa kembali data Anda.";
                } else { // Skor < 500 (tapi bukan kasus $special_motivational_only)
                    $jurusan_fallback = "Kami belum menemukan program vokasi yang cocok dengan minat '" . $minat_display_text_fb . "'" . (!empty($lokasi_display_text_fb) ? " di lokasi " . $lokasi_display_text_fb : "") . " dan skor Anda (" . $skor_user . ") setelah semua filter.";
                    $kampus_fallback = "Silakan coba sesuaikan filter atau periksa kembali data Anda.";
                }
            }
        }
    }
} else { 
    $jurusan_fallback = "Silakan isi formulir prediksi untuk melihat hasilnya.";
    // $special_motivational_only tetap false, jadi akan masuk ke blok else di view
}

$minat_display_text = !empty($minat_input_user_key) ? ucwords(str_replace('_', ' ', $minat_input_user_key)) : "Tidak ditentukan";
$lokasi_display_text = "Semua Lokasi"; 
if (!empty($lokasi_input_user_key)) {
    $lokasi_display_text = ucwords(str_replace('_', ' ', $lokasi_input_user_key));
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hasil Prediksi Jurusan</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif; background-color: #f0f4f8; padding: 20px;
      text-align: center; color: #333;
    }
    .container {
      max-width: 700px; margin: 20px auto; background: white; padding: 25px;
      border-radius: 12px; box-shadow: 0 6px 15px rgba(0,0,0,0.1); text-align: left;
    }
    h1, h2, h3 { color: #1e88e5; margin-bottom: 15px; }
    h1 { text-align: center; font-size: 26px; }
    h2 { font-size: 22px; }
    h3 { font-size: 18px; margin-top: 20px; }
    p { font-size: 16px; line-height: 1.6; margin: 10px 0; }
    .user-info p { margin: 5px 0; }
    .recommendation-item {
      border: 1px solid #e0e0e0; padding: 15px; margin-bottom: 15px;
      border-radius: 8px; background-color: #f9f9f9;
    }
    .recommendation-item p { margin: 8px 0; }
    strong { color: #333; }
    a.button {
      display: block; width: fit-content; margin: 30px auto 0 auto;
      background-color: #1e88e5; color: white; padding: 12px 25px;
      border-radius: 8px; text-decoration: none; font-weight: bold;
      transition: background-color 0.3s ease; text-align: center;
    }
    a.button:hover { background-color: #1565c0; }
    hr { border: 0; height: 1px; background-color: #ddd; margin: 25px 0; }
    .location-status { font-size: 0.9em; font-style: italic; }
    .location-status.match { color: green; }
    .location-status.no-match { color: orange; }
    .motivational-message p {
        font-size: 1.05em; 
        line-height: 1.7;
        color: #555; 
        text-align: justify; 
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Hasil Analisis Potensi Jurusan</h1>
    
    <div class="user-info">
        <p>Halo, <strong><?= htmlspecialchars($nama_user) ?></strong>!</p>
        <p>Skor kamu: <strong><?= $skor_user ?></strong></p>
        <p>Minat: <strong><?= htmlspecialchars($minat_display_text) ?></strong></p>
        <p>Preferensi Lokasi: <strong><?= htmlspecialchars($lokasi_display_text) ?></strong></p>
    </div>
    <hr>

    <?php if (!empty($recommendations_to_display)): ?>
      <h2>Rekomendasi Jurusan dan Kampus:</h2>
      <?php foreach($recommendations_to_display as $index => $rec): ?>
        <div class="recommendation-item">
          <h3>
            <?php
            if (count($recommendations_to_display) > 1) {
                echo 'Pilihan ' . ($index + 1) . ':';
            } else {
                echo 'Rekomendasi untukmu:';
            }
            ?>
          </h3>
          <p>Bidang Studi/Program: <strong><?= htmlspecialchars($rec['fakultas_jurusan']) ?></strong></p>
          <p>Kampus: <strong><?= htmlspecialchars($rec['kampus']) ?></strong></p>
          <p>Lokasi Kampus: <strong><?= htmlspecialchars($rec['lokasi_kampus_display']) ?></strong></p>
          <?php if ($rec['is_vokasi']): ?>
            <p><em>Program ini berorientasi vokasi/keahlian (D3/D4/Sarjana Terapan).</em></p>
          <?php endif; ?>
          
          <?php if (!empty($lokasi_input_user_key)): ?>
            <?php if ($rec['user_pref_lokasi_cocok']): ?>
                <p class="location-status match">Sesuai dengan preferensi lokasimu (<?= htmlspecialchars($lokasi_display_text) ?>).</p>
            <?php else: ?>
                <p class="location-status no-match">Di luar preferensi lokasimu (<?= htmlspecialchars($lokasi_display_text) ?>), namun sesuai minat.</p>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    <?php else: // Tidak ada rekomendasi yang ditampilkan ?>
        <?php if (isset($special_motivational_only) && $special_motivational_only): ?>
            <div class="recommendation-item motivational-message">
                <p>Nilai UTBK bukan akhir segalanya. Jalanmu menuju masa depan tetap terbuka luas, banyak orang sukses tak dimulai dari angka tinggi, tapi dari semangat pantang menyerah. Terus belajar, terus berjuang. Gagal hari ini bukan berarti gagal selamanya.</p>
            </div>
        <?php else: ?>
            <h2>Saran Umum:</h2>
            <div class="recommendation-item">
                <p><?= htmlspecialchars($jurusan_fallback ?? 'Tidak ada rekomendasi spesifik yang dapat kami berikan saat ini.') ?></p>
                <?php if(!empty($kampus_fallback)): ?>
                <p><?= htmlspecialchars($kampus_fallback) ?></p>
                <?php endif; ?>
                <p><em>Silakan gunakan informasi ini sebagai panduan awal dan lakukan riset lebih lanjut. Anda juga bisa mencoba kombinasi minat atau skor yang berbeda, atau memilih "Semua Lokasi".</em></p>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <a href="index.php#prediksi" class="button">Coba Lagi</a>
  </div>
</body>
</html>