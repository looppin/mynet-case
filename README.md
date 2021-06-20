# Mynet için Backend Case

Başlangıçta genel hatlarıyla ne yaptığımı özetlemek gerekirse, öncelikle bir admin paneli çalıştım. Middleware ile giriş sistemi oluşturdum. Database yapılarını Migration ile ve kolaylık olması açısından otomatik bir kullanıcı oluşturmak için Seeder ayarladım. Admin panelimizde, listeleme, düzenleme, silme ve ekleme kısacası CRUD işlemlerini gerçekleştirebiliyoruz. Ekstra olarak posta kodu girerken doğrulama sistemi koydum. Geçerli bir posta kodu girilmesi zorunlu. Tamamen ORM kullanıldı. Ve form validasyonu izlendi. Ajaxtan genel olarak kaçınıldı. Sadece silme işleminde ajaxtan yararlanıldı. Bunun sebebi de Alertify.js ile silmek istediğinize emin misiniz gibi yapılar için kütüphanesinden yararlanıldı. Versiyon kontrolü için GIT kullanıldı. Küçük bir unit test hazırladım. Middleware koşulunu kaldırarak Admin paneline bağlanıyor. Ayrıca Cache sistemi için Redis kullanıldı. Ekstra olarak admin girişi yaptığınız kullanıcının bilgilerini sağ üsten düzenleyebilirsiniz. Orada güvenli bir şekilde görsel yükleme işlemleri gerçekleştirdim. Aynı yerden Güvenli çıkış (Logout)'ta yapabilirsiniz. Kısacası full pack bir admin paneli çalıştım diyebiliriz.

## Kurulum Aşaması

- .env dosyasından database ayarlarının yapılması.
- Database ayarları yapıldıktan sonra hazırlanan migration'nın kurulması için 'php artisan migrate' komutunun ana dizinde terminale girilmesi
- Daha sonra Seeder'ın kurulması için 'php artisan db:seed' komutunun terminale girilmesi. UserTable seeder'ının içine bir admin ekledim. 'deneme@mynet.com' şifre : 'mynet@2023'
- Bütün bu işlemler yapıldıktan sonra admin paneline giriş artık hazır. /admin veya / dizinden her iki şekilde giriş ekranına ulaşabilirsiniz.

## Unit Test
Burada küçük bir test oluşturdum örnek olması açısından.

- Ana dizindeki phpunit.xml dosyasında db host'un mysql ve db name'in aktif kullandığınız db olduğuna emin olunuz.
- Daha sonra terminale 'php artisan test' diyerek test aşamasını görebilirsiniz. UserTest.php içerisinde source code bulunmakta.

