-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 21 Şub 2023, 22:27:38
-- Sunucu sürümü: 10.2.44-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Veritabanı: `mcelalco_sarki`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `artists`
--

CREATE TABLE `artists` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lyrics`
--

CREATE TABLE `lyrics` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `lyric` text DEFAULT NULL,
  `views` int(11) NOT NULL,
  `submitter_id` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Tablo için indeksler `lyrics`
--
ALTER TABLE `lyrics`
  ADD PRIMARY KEY (`id`,`slug`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `lyrics`
--
ALTER TABLE `lyrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
