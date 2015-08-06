-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Ağu 2015, 12:05:15
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminbilgileri`
--

CREATE TABLE IF NOT EXISTS `adminbilgileri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kadi` varchar(100) NOT NULL,
  `sifre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `adminbilgileri`
--

INSERT INTO `adminbilgileri` (`id`, `kadi`, `sifre`) VALUES
(1, 'mustafa220', 'mustafa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(200) NOT NULL,
  `ePosta` varchar(200) NOT NULL,
  `mesaj` text NOT NULL,
  `okunma` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adSoyad`, `ePosta`, `mesaj`, `okunma`) VALUES
(1, '', 'dsad', 'dsa', 0),
(2, 'dsa', 'dsad', 'dsa', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategoriAdi` varchar(200) NOT NULL,
  `sira` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `kategoriAdi`, `sira`) VALUES
(1, 'PHP', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE IF NOT EXISTS `yazilar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategoriId` int(11) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `yazi` text NOT NULL,
  `keywords` text NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `begeniSayi` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `kategoriId`, `baslik`, `yazi`, `keywords`, `tarih`, `begeniSayi`) VALUES
(1, 1, 'Deneme baslik', 'deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan deneme yazisi falan filan falan filan ', 'a,b,c,d,e,f', '25 Tem', 35),
(2, 1, 'Denem', 'dsada', 'dsadad,dsada,dsada', '24 Tem', 25),
(3, 1, 'Denem', 'dsada', 'dsadad,dsada,dsada', '23 Tem', 25);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `yaziId` int(11) NOT NULL,
  `yorumId` int(11) NOT NULL,
  `adiSoyadi` varchar(150) NOT NULL,
  `ePosta` varchar(150) NOT NULL,
  `yorum` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `yaziId`, `yorumId`, `adiSoyadi`, `ePosta`, `yorum`) VALUES
(1, 1, 0, 'Mustafa Ã‡olakoÄŸlu', 'musto_220@windowslive.com', 'selamlar'),
(2, 1, 0, 'dsadqdsad', 'dsadsa', 'dsada'),
(3, 1, 0, 'Mustafa Ã‡olakoÄŸlu', 'musto_220@windowslive.com', 'dsadad ad sad sa da '),
(4, 1, 0, 'Mustafa Ã‡olakoÄŸlu', 'musto_220@windowslive.com', 'dsadad ad sad sa da '),
(5, 1, 0, 'Mustafa Ã‡olakoÄŸlu', 'musto_220@windowslive.com', 'dsadad ad sad sa da '),
(6, 1, 0, 'Emrah Ã‡aÄŸlÄ±', 'emrahcagli@gmail.com', 'YazÄ± Ã§ok faydalÄ± oldu teÅŸekkÃ¼rler'),
(7, 1, 0, 'dsa', 'dsa', 'dsa'),
(8, 1, 0, 'dsa', 'dsa', 'dsa'),
(9, 1, 0, 'dsa', 'dsa', 'dsa'),
(10, 1, 0, 'dsa', 'dsa', 'dsa'),
(11, 3, 0, 'dsa', 'dsa', 'dsa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
