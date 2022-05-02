-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 May 2022, 19:54:37
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `xyzmedia`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriler`
--

CREATE TABLE `favoriler` (
  `id` int(11) NOT NULL,
  `hesapid` int(11) NOT NULL,
  `yaziid` int(11) NOT NULL,
  `icerik` varchar(125) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `favoriler`
--

INSERT INTO `favoriler` (`id`, `hesapid`, `yaziid`, `icerik`) VALUES
(151, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesaplar`
--

CREATE TABLE `hesaplar` (
  `id` int(11) NOT NULL,
  `ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hesaplar`
--

INSERT INTO `hesaplar` (`id`, `ad`, `soyad`, `mail`, `sifre`) VALUES
(1, 'admin', 'admin', 'meliksari35@gmail.com', 'melik34'),
(2, 'MELİK', 'SARI', 'meliksari35@gmail.com', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazi`
--

CREATE TABLE `yazi` (
  `id` int(11) NOT NULL,
  `baslik` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(4000) COLLATE utf8_turkish_ci NOT NULL,
  `dil` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` varchar(160) COLLATE utf8_turkish_ci NOT NULL,
  `ozet` varchar(125) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yazi`
--

INSERT INTO `yazi` (`id`, `baslik`, `icerik`, `dil`, `seo`, `ozet`) VALUES
(1, 'Makale Nedir ? Makale Nasıl Yazılır?', 'Bu yazıda şu konular üzerinde durulacaktır:\r\n\r\n1. Makale nedir?\r\n2. Makale türünün özellikleri\r\n3. Makale çeşitleri ve özellikleri\r\n4. Makalenin bölümleri\r\n5. Makale yazımının temel kuralları\r\n6. Makalelerden örnekler\r\nMakale, belirli bir konuda, bir görüşü, bir düşünceyi savunmak ve kanıtlamak için yazılan yazı türüne denir. Gazete, dergi ve internette yayınlanır. Ayrıca herhangi gerçeği açıklığa kavuşturmak, bir konuda görüş ve tezler ortaya koymak ve bir hipotezi savunmak, desteklemek için yazılmış olan yazılara da makale denir.\r\n\r\nMetinler genel olarak \"edebî\" ve \"öğretici\" olarak iki başlık altında değerlendirilir. Öğretici metinler bilimsel veya bilgilendirici metinler olarak da adlandırılır. Edebî metinler hem dili kullanış biçimleri hem de kurmaca oluşlarıyla bilgilendirici metinlerden ayrılır. Edebî metinlerde dilin etkili ve çok anlamlılığa açık biçimde kullanılması amaçlanırken bilgilendirici metinlerin anlatımı olabildiğince açık ve anlaşılır olmak durumundadır. Çünkü bu tür metinlerde önemli olan, bir bilgiyi veya düşünceyi doğru ve anlaşılır bir şekilde sunmaktır.\r\n\r\nBilimsel metin türlerinin en önemlilerinden biri makaledir. Makaleler, belli bir düşünceyi kanıtlara dayandırarak açıklayan yazılardır. Makaleler bir görüşün doğruluğunu veya yanlışlığını ispatlamak amacıyla da yazılabilir. Makalede önemli olan ortaya konulan düşüncelerin bilimsel temellere ve bilgilere dayandırılarak sunulmasıdır.\r\n\r\nGazetelerde güncel konular hakkında nesnel bir bakış açısıyla yayımlanan yazılar da makale olarak nitelendirilir. Bilimsel veya akademik makaleler ise genellikle bu türde yayın yapan dergi veya kitaplarda yayımlanır. Bilgisayarın yaygınlaşması ile birlikte İnternet\'te her gün çok sayıda bilimsel makale okurla buluşmaktadır. Bilimsel makale, tarama yazıları, değerlendirme yazıları veya herhangi bir bilimsel konferansın ve toplantının tutanakları da makale türünde değerlendirilebilecek yazı türleridir.', '', 'makale, makale nedir, makale ne işe yarar, makale nasıl yazılır?', 'Bilimsel metin türlerinin en önemlilerinden biri makaledir. Makaleler, belli bir düşünceyi kanıtlara dayandırarak açıklayan y'),
(2, 'THİS TEXT ENGLİSH TEST', 'THİS TEXT ENGLİSH TEST', 'en', 'THİS TEXT ENGLİSH TEST', 'ozet eng'),
(3, 'THİS TEXT ENGLİSH TEST 2', 'THİS TEXT ENGLİSH TEST 2', 'en', 'THİS TEXT ENGLİSH TEST 2', 'ozet eng 2'),
(4, 'Roman Yazı Türü Özellikleri, Türleri, Tarihi Gelişimi', 'ROMAN\r\n\r\nOlmuş ya da olabilir nitelikteki olayları ve konuları ele alan edebî türlere Roman denir. Diğer türlerden ayrılan en önemli özelliği, uzunluğudur. Romanlarda, toplumsal olaylar ve ilişkiler gerçeklere uygun bir tarzda ele alınır.\r\n\r\n\"Roman\" kelimesi, Roma İmparatorluğu sınırları içinde yaşayan halk kitlelerinin konuştuğu halk Lâtincesine verilen addır. Sonraları herkesin anlayabilmesi için bu dille yazılan destan ve hikâyelere \"roman\" adı verilmiştir. Kelimenin aslı buradan gelir. (H. F. GÖZLER, Örnekleriyle Türkçe ve Edebiyat Bilgileri, s. 303)\r\n\r\nİyi bir roman ilgi çekici olmalı, herkesi ilgilendiren insancıl bir tema taşımalıdır. Romandaki olaylar arasında dengeli bir sıralama ve bağ bulunmalıdır. Olaylar akla yakın olmalı, romanın konusundan doğmalıdır. Romandaki varlıkların kişilikleri baştan sona dek konuya uygun nitelikte olmalı, birbiriyle çelişmemelidir.\r\n\r\nRoman yazarı; romanda yarattığı kişilerini kendi kişiliği içinden görebilmelidir. Romandaki davranışlar ve konuşmaların, kişilerin karakterlerinden çıkmasını sağlamalıdır.\r\n\r\nOkuyucu, romanı iş olsun diye okumaz. Roman okurken avunmak, kendinden uzaklaşmak ister. Romandaki kişilerle ilgilenmeye başlar. Olaylar karşısındaki davranışlarının ne olacağını merak eder. Onların başarılarından mutluluk duyar. Onların sıkıntılarına üzülür. Kendisini onların yerine koyar. Onların davranışlarını eleştirir. Bu davranışlar içinde yapılmaması gerekeni, yapılmamış olanları bulur. Romanı okuyup bitirince genel bir yargıda bulunur.\r\n\r\nTürk edebiyatında önceki yüzyıllarda roman türüne benzer edebî eserler mevcuttur. Bunlar:\r\n\r\nHalk Hikâyeleri (Kerem ile Aslı, Ferhat ile Şirin gibi.)\r\nMeddah Hikâyeleri\r\nDinî Hikâyeler (Hz. Ali\'nin Cenkleri gibi)\r\nDestanî Hikâyeler (Dede Korkut Hikâyeleri, Battal Gazi Destanı gibi)\r\nAvrupaî tarzda ilk roman, Tanzimat döneminde yazılmıştır. Namık Kemal\'in \"İntibah\", ilk Türk romanıdır. Nabizâde Nazım\'ın \"Karabibik\", ilk köy romanıdır. Yusuf Kâmil Paşa\'nın Fenelon\'dan çevirdiği \"Telemak\", ilk çeviri romandır.\r\n\r\nRomanlarda, şu ögeler üzerinde önemle durulmalıdır:\r\n\r\nKonu,\r\nkişiler (şahıslar, kahramanlar)\r\nçevre (mekân)\r\nzaman,\r\nana düşünce ve\r\nanlatım tarzı (üslûp).', '', 'LOREM İPSUMİTT, test test, test', 'ROMAN, ROMAN TÜRLERİ, ROMAN ÖZET'),
(5, 'Tiyatro (Piyes, Oyun)', 'TİYATRO\r\n\r\nBatılı tiyatro eserlerinin kaynağı Eski Yunan\'dır. Eski Yunan\'daki bağ bozumu tanrısı \"dionizos\" adına düzenlenen şenliklerden ortaya çıktığı bilinmektedir.\r\n\r\nİlk tiyatro ürünleri \"trajedi\"dir. Sonraları ise \"dram\", \"komedi\", \"müzikal komedi\" gibi türlerde tiyatro eserleri görülmektedir. \"Bale\" ve \"opera\" da Batılı anlamdaki tiyatro türlerindendir.\r\n\r\n\"Dram\", Yunanca \"darama\" sözünden gelmektedir. Kelime anlamı; hareket hâlindeki olayların bütünü demektir. Dramatik eser denince; \"Hayatı, hareket hâlinde gösteren eserlerin tamamı\" akla gelir. İnsan hayatını konu olarak alan tiyatro, insan hayatının iki önemli özelliği üzerinde kuruludur: 1) Keder 2) Neşe\r\n\r\nBundan ötürü de tiyatro eserlerini ikiye ayırmak gerekir:\r\n\r\n1) Trajik eserler\r\n\r\n2) Komik eserler (H. F. Gözler, Örnekleriyle Türkçe ve Edebiyat Bilgileri, s. 328/329)\r\n\r\nBatılı anlamda tiyatro çeşitleri şunlardır:\r\n\r\n1) Trajedi: \"Çok acıklı, yürekler acısı\" anlamına gelmektedir. Oyun türü olan trajedinin konusu da çok acıklı konulardır. Trajedide olaylar, genellikle tarihten ve efsanelerden alınır. Kişiler ise; eski Yunan tanrıları başta olmak üzere, hükümdarlar ve soylulardır.\r\n\r\n2) Komedi: İnsanların, olayların gülünç yönlerini sunan, hem güldüren, hem eğlendiren ve hem de iğneleyen bir tür tiyatrodur.\r\n\r\n3) Dram: Trajedi ile komedi arasında bir tür sahne eseridir. Türkçe karşılığı \"acıklı olay\" dır. Konularını günlük olaylardan ya da tarihten alabilir. Kişiler; halk arasından seçilir. Olay; hem acıklı, hem güldürücü olabilir.\r\n\r\n4) Müzikli Tiyatro:\r\n\r\na) Opera: Sözlerinin tümü ya da çoğu \"koro, solo, düet\" biçiminde şarkılı olarak söylenen müzikli tiyatro eseridir. Oyunculara, orkestra eşlik eder.\r\n\r\nb) Operet: Eğlenceli, hafif konulu, içinde bestesiz konuşmalar da bulunan müzikli tiyatrodur. Daha çok halk için yazılmış eserlerdir.\r\n\r\nc) Opera Komik: Operetin, yüksek sınıf için yazılmış, besteli biçimidir.\r\n\r\nç) Vodvil: Hareketli, eğlenceli bir konuya dayanan, içinde şarkılara da yer verilen hafif komedidir. Bu nedenle vodvil, bir \"komedi türü\" olarak da gösterilir.\r\n\r\nd) Bale: Konusu; türlü dans ve davranışlarla anlatılan müzikli, sözsüz tiyatro türüdür. (S. Sarıca - M. Gündüz, Güzel Konuşma Yazma, s. 413/414)\r\n\r\nBatılı anlamda tiyatro ilk defa Tanzimat döneminde görülmektedir. Şinasi\'nin \"Şair Evlenmesi\", ilk yayımlanan tiyatro eseridir. Namık Kemal\' in \"Vatan Yahut Silistre\" ise, ilk defa sahneye konan tiyatro eseridir.\r\n\r\nBu eserlerden önce ise çeviri ve uyarlama (adapte) tiyatro eserleri görülmektedir. Sonraki dönemlerde ise, teknik açıdan daha etkili tiyatro eserleri yazılmış ve sahneye konmuştur.\r\n\r\nBatılı özellikte tiyatro ürünlerinin Türk edebiyatına girmesinden önceki yüzyıllarda geleneksel Türk tiyatrosu vardı.', '', 'Tiyatro, Tiyatro nedir, Tiyatro Piyes, Batılı Tiyatro', 'Batılı özellikte tiyatro ürünlerinin Türk edebiyatına girmesinden önceki yüzyıllarda geleneksel Türk tiyatrosu vardı.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `favoriler`
--
ALTER TABLE `favoriler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hesapid` (`hesapid`),
  ADD KEY `yaziid` (`yaziid`);

--
-- Tablo için indeksler `hesaplar`
--
ALTER TABLE `hesaplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazi`
--
ALTER TABLE `yazi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `favoriler`
--
ALTER TABLE `favoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- Tablo için AUTO_INCREMENT değeri `hesaplar`
--
ALTER TABLE `hesaplar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yazi`
--
ALTER TABLE `yazi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `favoriler`
--
ALTER TABLE `favoriler`
  ADD CONSTRAINT `favoriler_ibfk_1` FOREIGN KEY (`hesapid`) REFERENCES `hesaplar` (`id`),
  ADD CONSTRAINT `favoriler_ibfk_2` FOREIGN KEY (`yaziid`) REFERENCES `yazi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
