# arinal-dzikrul-backend-test

# requirement

PHP >= 8

# Balanced Bracket Checker

## Deskripsi

Fungsi `solve` digunakan untuk memeriksa keseimbangan bracket dalam sebuah string yang terdiri dari karakter '(', ')', '{', '}', '[' dan ']'. Fungsi ini menggunakan pendekatan berbasis stack untuk memastikan setiap bracket pembuka memiliki pasangan bracket penutup yang sesuai dalam urutan yang benar.

## Kompleksitas

- **Waktu**: O(n), di mana n adalah panjang string input. Ini karena kita hanya melakukan satu kali iterasi melalui string dan setiap operasi pada stack (push dan pop) memiliki kompleksitas O(1).
- **Ruang**: O(n), dalam kasus terburuk, semua karakter dalam string adalah bracket pembuka dan harus disimpan dalam stack.

## Contoh Penggunaan

```php
$input1 = "{ [ ( ) ] }";
$input2 = "{ [ ( ] ) }";
$input3 = "{ ( ( [ ] ) [ ] ) [ ] }";

echo solve($input1) . "\n"; // Output: YES
echo solve($input2) . "\n"; // Output: NO
echo solve($input3) . "\n"; // Output: YES
```
