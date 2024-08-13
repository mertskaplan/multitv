
# Multi TV

**EN |** It allows to watch many television news channels at the same time via YouTube.

**TR |** Aynı anda birden fazla haber kanalını, televizyonu ya da YouTube kanalını izleyebileceğiniz bir çoklu ekran uygulaması.

#### Çevrim içi adres / Online address: [lab.mertskaplan.com/multitv](https://lab.mertskaplan.com/multitv "https://lab.mertskaplan.com/multitv")

## Açıklamalar (tr)
 - 16:9 oranındaki ekranlar için **4, 9, 16 ve 25 kanal**ı aynı anda izleme seçeneği üzerine hazırlandı. 1.5 numaralı sürümle birlikte kanal sayısının isteğe göre belirlenebilmesi sağlandı.
 - İzlenmek istenilen kanallar ve sıraları **arayüz üzerinden değiştirilebilir**.
 - **Varsayılan haber kanalları** olarak *NTV, Habertürk, Haber Global, TRT Haber, TV 100, Halk TV, 24 TV, TGRT Haber, KRT TV, TELE 1, Bengü Türk, Bloomberg HT, Ulusal Kanal, Artı TV, TVNET, Ülke TV* ve *Flash Haber TV* eklendi.
 - **CNN Türk** canlı yayını yayıncının diğer web sitelerinde oynatmayı devre dışı bıraktığı için kullanılamıyor.
 - **A Haber** canlı yayını Turkuvaz Medya avukatlarının gönderdiği telif hakkı ihlali bildiriminin ardından kaldırıldı.
 - Televizyon kanallarının YouTube bağlantıları zaman içinde değişebiliyor. Uygulamanın canlı versiyonunda zaman zaman yayın adresleri kontrol edilerek güncelleniyor. Ancak yazılım kaynak kodunda bu değişiklikler başka bir değişiklik yapılmadığı sürece yapılmayacak. (*[mertskaplan.com/iletisim](https://mertskaplan.com/iletisim) adresindeki iletişim kanalları üzerinden bildirebilirsiniz.*)

## Release notes / Sürüm notları
### v2.0 (2024.08.13)

**EN**
- A Spanish language option has been added.
- The default language option is now selected based on the browser's language.
- The "cs" (channel slug) tag used for the channel address has been changed to "vs" (video slug) for the video address, and code has been added to ensure compatibility with older versions.
- The grid structure has been completely redesigned to provide better compatibility for 16:9 screens when viewing multiple channels simultaneously.
- The resetting of current channel settings when the number of channels is changed has been prevented.
- The unused changeChannel function has been removed.
- A custom function named translate has been created for translation texts that include variables.
- Icons in different sizes have been added.
- Adjustments have been made to the CSS code within the page.
- The number of channels that work in full compatibility with 16:9 screens has been added to the settings section.
- A typo in the $channels variable has been fixed.
- The option to add new channels has been made compatible with different language options.

**TR**
- İspanyolca dil seçeneği eklendi.
- Varsayılan dil seçeneğinin tarayıcının diline göre seçilmesi sağlandı.
- Kanal adresi için kullanılan "cs" (channel slug) etiketi video adresi için "vs" (video slug) olarak değiştirildi ve eski sürümlerle uyumluluk sağlanması için kod eklendi.
- Aynı anda izlenmek istenilen kanal sayılarında 16:9 ekranlar için daha fazla uyumluluk sağlamak için grid yapısı tamamen değiştirildi.
- Kanal sayısı değiştirildiğinde mevcut kanal ayarlarının sıfırlanması engellendi.
- Kullanılmayan changeChannel fonksiyonu kaldırıldı.
- Değişken içeren çeviri metinleri için "translate" adlı özel fonksiyon hazırlandı.
- Farklı boyutlarda ikonlar eklendi.
- Sayfa içi CSS kodlarında düzenlemeler yapıldı.
- Ayarlar bölümüne 16:9 ekranlarla tam uyumu çalışan kanal sayıları eklendi.
- $channels değişkenindeki yazım hatası giderildi.
- Yeni kanal ekleme seçeneği farklı dil seçeneklerine uyumlu hale getirildi.

### v1.6 (Not published)

**EN**
- The application has been made multilingual, with English and French language options added.
- The number of channels displayed on the screen has been limited to the defined number of channels to remove unnecessary blank space when the number of channels to be viewed simultaneously exceeds the defined number.
- A colorful animation has been added to the settings button to make it more noticeable.
- The option to disable autoplay has been removed from the Settings section. For compatibility, the setting is still available.
- To optimize JS codes, the CDN for Bootstrap, jQuery, and jQuery UI has been abandoned, and the codes have been merged into a single file.

**TR**
- Uygulama çok dilli hale getirilerek İngilizce ve Fransızca dil seçenekleri eklendi.
- Aynı anda izlenmek istenilen kanal sayısı tanımlı kanal sayısıdan fazla olduğunda ekranda oluşan gereksiz boşluğu kaldırmak için ekrandaki kanal sayısı tanımlı kanal sayısı ile sınırlandırıldı.
- Ayarlar butonunun daha fark edilebilir olması için butona renkli animasyon eklendi.
- Otomatik oynatmayı kapatma ayarı Ayarlar bölümünden kaldırıldı. Uyumluluk için ayar halen kullanılabilir şekilde bırakıldı.
- JS kodlarını optimize etmek için Bootstrap, jQuery ve jQuery UI kodları için CDN terk edilerek kodlar tek dosyada birleştirildi.

### [v1.5](https://github.com/mertskaplan/multitv/releases/tag/v1.5) (2023.02.11)

**EN**
- The number of channels has been made optional.
- Provided compatibility for 16:9 screens for each channel count.
- Prevented resetting the current settings when changing the number of channels.
- Changed the number of channels visible for horizontal screens on mobile devices to 4.

**TR**
- Kanal sayısı isteğe göre belirlenebilir hale getirildi.
- Her kanal sayısı için 16:9 ekranlara uyumluluk sağlandı
- Kanal sayısı değiştirirken mevcut ayarların korunması sağlandı.
- Mobil cihazlarda yatay ekranlar için görünen kanal sayısı 4 olarak değiştirildi.

## Technologies / Teknolojiler

 - PHP 5.4 >= (Release: March 1, 2012)
 - HTML / CSS / JS
 - Bootstrap 5.2.2
 - jQuery 3.6.3
 - jQuery UI 1.13.2

## License / Lisans
[MIT License](https://github.com/mertskaplan/multitv/blob/main/LICENSE)
