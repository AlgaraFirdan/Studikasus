<?php
// Program Seleksi Anggota Klub Esports
// ------------------------------------
// Program ini menentukan apakah seorang kandidat lolos seleksi klub esports
// berdasarkan nilai skill, teamwork, dan attitude.
// Syarat kelulusan:
// - Skill minimal 80
// - Teamwork minimal 70
// - Attitude minimal 75

// Nilai peserta
$skill = 85;
$teamwork = 70;
$attitude = 90;

// Cek nilai skill terlebih dahulu
if ($skill >= 80) {
    // Jika skill lolos, cek nilai teamwork
    if ($teamwork >= 70) {
        // Jika teamwork juga lolos, cek attitude
        if ($attitude >= 75) {
            // Semua syarat terpenuhi
            echo "Selamat! Kamu diterima menjadi anggota Klub Esports.";
        } else {
            // Attitude tidak memenuhi syarat
            echo "Maaf, attitude kamu belum memenuhi syarat.";
        }
    } else {
        // Teamwork tidak memenuhi syarat
        echo "Maaf, teamwork kamu kurang baik.";
    }
} else {
    // Skill tidak memenuhi syarat
    echo "Maaf, kemampuan skill kamu masih perlu ditingkatkan.";
}
?>

