## PHP ile validator işlemi
### HTML ve CSS ile yapılan formların arka-uç tarafında işleme alınmadan önce ilk başta bir Validate işleminden gemesi lazım . Bunlardan en basiti bir inputun boş olup olmaması veya girilen şifrenin minumum 8 karakterli olması gibi
----
## Gereksinim
* PHP 7.5>= sürümlerinde çalışır
## Kurulum ve Çalıştırma 
### github üzerinden indirilen dosyanın sadece 'Validator' dosyasını alıp kendi projenize dahil edebilirsiniz
----
### Yardım
form sayfasında (form.php olarak belirlendi) var olan formunuzun üs tarafında bir php tagları arasında, projenize dahil ettiğiniz Validator dosyasını include ediyoruz

```
Validator::validator([
    'name' => 'require' // burda belirtilen 'name' alanı formda belirttiğiniz name alanıdır
]);
```
### Şuanda sunulan yapı 'require,email,password' yapılarıdır.
* Require : inputunuzun boş mu yoksa dolu mu olduğunu söyler
* Email : Email inputundaki verinin geçerli bir email olup olmadığına bakar
* Password : Gelen password değerini hashler


