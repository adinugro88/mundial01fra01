# Panduan Edit Tabel Harga (Price Tables Guide)

## Masalah
Ketika mengedit konten harga di panel admin Filament, jika menggunakan Rich Editor, tabel mungkin akan ditampilkan sebagai teks biasa, bukan sebagai tabel terformat dengan benar.

## Solusi
Gunakan **Textarea** dan paste HTML table langsung. Jangan menggunakan RichEditor untuk price tables.

## Format HTML Tabel yang Benar

Gunakan struktur HTML berikut sebagai template:

```html
<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
  <tr>
    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Service</th>
    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Dès 18 ans</th>
    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">6-17 ans</th>
    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Moins de 6 ans</th>
  </tr>
  <tr style="background-color: #F9F9F9;">
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Carte journalière</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">30.-</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">20.-</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">gratuit</td>
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée simple (3h)</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">20.-</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">15.-</td>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">gratuit</td>
  </tr>
</table>
```

## Penting! 
⚠️ **Jangan gunakan Rich Editor** - hasilnya akan rusak

### Langkah-langkah Edit Tabel:

1. **Di Panel Admin Filament:**
   - Buka **Price Content** menu
   - Edit entry yang ingin diubah
   - Paste HTML table langsung di textarea
   - Jangan copy dari Word, Excel, atau Rich Text Editor
   
2. **Jika ingin membuat tabel baru:**
   - Gunakan tool online seperti:
     - [HTML Table Generator](https://www.tablesgenerator.com/html_tables)
     - Atau copy dari template di atas
   - Copy seluruh HTML `<table>...</table>`
   - Paste ke textarea di Filament

3. **Testing:**
   - Setelah save, buka halaman `/prix` untuk melihat hasilnya
   - Tabel harus ditampilkan dengan border dan warna latar belakang yang benar

## Struktur Warna Baris
- **Warna putih** (default): untuk baris genap
- **Warna abu-abu #F9F9F9**: untuk baris ganjil (alternatif warna)

## Jika Tabel Sudah Corrupt

Jika data tabel sudah disimpan dengan format yang salah, hubungi developer untuk reset ke default atau manual cleanup.

---

**Update 2026-03-17:** Sistem diubah dari Rich Editor ke Textarea untuk mencegah corruption tabel harga.
