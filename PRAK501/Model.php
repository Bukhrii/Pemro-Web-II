<?php 
    require_once 'Koneksi.php';

        // Member
        function getAllMember($conn) {
            $stmt = $conn->query("SELECT * FROM member");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function getByIdMember($conn, $id) {
            $stmt = $conn->prepare("SELECT * FROM member WHERE id_member = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function insertMember($conn, $data) {
            $stmt = $conn->prepare("INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) VALUES (?, ?, ?, ?, ?)");
            return $stmt->execute([
                $data['nama_member'], $data['nomor_member'], $data['alamat'], $data['tgl_mendaftar'], $data['tgl_terakhir_bayar']
            ]);
        }

        function updateMember($conn, $id, $data) {
            $stmt = $conn->prepare("UPDATE member SET nama_member=?, nomor_member=?, alamat=?, tgl_terakhir_bayar=? WHERE id_member=?");
            return $stmt->execute([
                $data['nama_member'], $data['nomor_member'], $data['alamat'], $data['tgl_terakhir_bayar'], $id
            ]);
        }

        function deleteMember($conn, $id)  {
            $stmt = $conn->prepare("DELETE FROM member WHERE id_member=?");
            return $stmt->execute([$id]);
        }


        // Buku
        function getAllBuku($conn) {
            $stmt = $conn->query("SELECT * FROM buku");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function getByIdBuku($conn, $id) {
            $stmt = $conn->prepare("SELECT * FROM buku WHERE id_buku = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function insertBuku($conn, $data) {
            $stmt = $conn->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
            return $stmt->execute([
                $data['judul_buku'], $data['penulis'], $data['penerbit'], $data['tahun_terbit']
            ]);
        }

        function updateBuku($conn, $id, $data) {
            $stmt = $conn->prepare("UPDATE buku SET judul_buku=?, penulis=?, penerbit=?, tahun_terbit=? WHERE id_buku=?");
            return $stmt->execute([
                $data['judul_buku'], $data['penulis'], $data['penerbit'], $data['tahun_terbit'], $id
            ]);
        }

        function deleteBuku($conn, $id)  {
            $stmt = $conn->prepare("DELETE FROM buku WHERE id_buku=?");
            return $stmt->execute([$id]);
        }


        // Peminjaman
        function getAllPeminjaman($conn) {
            $sql = "SELECT p.id_peminjaman, m.nama_member, b.judul_buku, p.tgl_pinjam, p.tgl_kembali
                    FROM peminjaman p
                    JOIN member m ON p.id_member = m.id_member
                    JOIN buku b ON p.id_buku = b.id_buku";
            return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }

        function getPeminjamanById($conn, $id) {
            $stmt = $conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function insertPeminjaman($conn, $data) {
            $stmt = $conn->prepare("INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)");
            return $stmt->execute([$data['id_member'], $data['id_buku'], $data['tgl_pinjam'], $data['tgl_kembali']]);
        }

        function updatePeminjaman($conn, $id, $data) {
            $stmt = $conn->prepare("UPDATE peminjaman SET id_member=?, id_buku=?, tgl_pinjam=?, tgl_kembali=? WHERE id_peminjaman=?");
            return $stmt->execute([$data['id_member'], $data['id_buku'], $data['tgl_pinjam'], $data['tgl_kembali'], $id]);
        }

        function deletePeminjaman($conn, $id) {
            $stmt = $conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
            return $stmt->execute([$id]);
}


?>