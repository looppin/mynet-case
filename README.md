# Mynet için Backend Case

Başlangıçta genel hatlarıyla ne yaptığımı özetlemek gerekirse, öncelikle bir admin paneli çalıştım. Middleware ile giriş sistemi oluşturdum. Database yapılarını Migration ile ve kolaylık olması açısından otomatik bir kullanıcı oluşturmak için Seeder ayarladım. Admin panelimizde, listeleme, düzenleme, silme ve ekleme kısacası CRUD işlemlerini gerçekleştirebiliyoruz. Tamamen ORM kullanıldı. Ve form validasyonu izlendi. Ajaxtan genel olarak kaçınıldı. Sadece silme işleminde ajaxtan yararlanıldı. Bunun sebebi de Alertify.js ile silmek istediğinize emin misiniz gibi yapılar için kütüphanesinden yararlanıldı. Versiyon kontrolü için GIT kullanıldı. Küçük bir unit test hazırladım. Middleware koşulunu kaldırarak Admin paneline bağlanıyor.

## Kurulum Aşaması

- .env dosyasından database ayarlarının yapılması.
- Database ayarları yapıldıktan sonra hazırlanan migration'nın kurulması için 'php artisan migrate' komutunun ana dizinde terminale girilmesi
- Daha sonra Seeder'ın kurulması için 'php artisan db:seed' komutunun terminale girilmesi. UserTable seeder'ının içine bir admin ekledim. 'deneme@mynet.com' şifre : 'mynet@2023'
- Bütün bu işlemler yapıldıktan sonra admin paneline giriş artık hazır. /admin veya / dizinden her iki şekilde giriş ekranına ulaşabilirsiniz.
