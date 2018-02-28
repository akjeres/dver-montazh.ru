-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 11 2016 г., 14:00
-- Версия сервера: 5.6.24
-- Версия PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `homedoors`
--

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_blog_blog`
--

CREATE TABLE IF NOT EXISTS `yupe_blog_blog` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `description` text,
  `icon` varchar(250) NOT NULL DEFAULT '',
  `slug` varchar(150) NOT NULL,
  `lang` char(2) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `member_status` int(11) NOT NULL DEFAULT '1',
  `post_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_blog_post`
--

CREATE TABLE IF NOT EXISTS `yupe_blog_post` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `publish_time` int(11) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `lang` char(2) DEFAULT NULL,
  `title` varchar(250) NOT NULL,
  `quote` text,
  `content` text NOT NULL,
  `link` varchar(250) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT '0',
  `comment_status` int(11) NOT NULL DEFAULT '1',
  `create_user_ip` varchar(20) NOT NULL,
  `access_type` int(11) NOT NULL DEFAULT '1',
  `keywords` varchar(250) NOT NULL DEFAULT '',
  `description` varchar(250) NOT NULL DEFAULT '',
  `image` varchar(300) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_blog_post_to_tag`
--

CREATE TABLE IF NOT EXISTS `yupe_blog_post_to_tag` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_blog_tag`
--

CREATE TABLE IF NOT EXISTS `yupe_blog_tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_blog_user_to_blog`
--

CREATE TABLE IF NOT EXISTS `yupe_blog_user_to_blog` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  `note` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_category_category`
--

CREATE TABLE IF NOT EXISTS `yupe_category_category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `slug` varchar(150) NOT NULL,
  `lang` char(2) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `short_description` text,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_category_category`
--

INSERT INTO `yupe_category_category` (`id`, `parent_id`, `slug`, `lang`, `name`, `image`, `short_description`, `description`, `status`) VALUES
(1, NULL, 'primery-raboty', 'ru', 'Примеры работы', NULL, '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_comment_comment`
--

CREATE TABLE IF NOT EXISTS `yupe_comment_comment` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `model` varchar(100) NOT NULL,
  `model_id` int(11) NOT NULL,
  `url` varchar(150) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(20) DEFAULT NULL,
  `level` int(11) DEFAULT '0',
  `root` int(11) DEFAULT '0',
  `lft` int(11) DEFAULT '0',
  `rgt` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_contentblock_content_block`
--

CREATE TABLE IF NOT EXISTS `yupe_contentblock_content_block` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `content` text NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_dictionary_dictionary_data`
--

CREATE TABLE IF NOT EXISTS `yupe_dictionary_dictionary_data` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `value` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL DEFAULT '',
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_dictionary_dictionary_group`
--

CREATE TABLE IF NOT EXISTS `yupe_dictionary_dictionary_group` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL DEFAULT '',
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_feedback_feedback`
--

CREATE TABLE IF NOT EXISTS `yupe_feedback_feedback` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `answer_user` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) DEFAULT NULL,
  `theme` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `answer` text NOT NULL,
  `answer_time` datetime DEFAULT NULL,
  `is_faq` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_image_image`
--

CREATE TABLE IF NOT EXISTS `yupe_image_image` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `description` text,
  `file` varchar(250) NOT NULL,
  `create_time` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `alt` varchar(250) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_mail_mail_event`
--

CREATE TABLE IF NOT EXISTS `yupe_mail_mail_event` (
  `id` int(11) NOT NULL,
  `code` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_mail_mail_template`
--

CREATE TABLE IF NOT EXISTS `yupe_mail_mail_template` (
  `id` int(11) NOT NULL,
  `code` varchar(150) NOT NULL,
  `event_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text,
  `from` varchar(150) NOT NULL,
  `to` varchar(150) NOT NULL,
  `theme` text NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_menu_menu`
--

CREATE TABLE IF NOT EXISTS `yupe_menu_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_menu_menu`
--

INSERT INTO `yupe_menu_menu` (`id`, `name`, `code`, `description`, `status`) VALUES
(1, 'Верхнее меню', 'top-menu', 'Основное меню сайта, расположенное сверху в блоке mainmenu.', 1),
(2, 'Главное меню', 'main-menu', 'Главное меню сайта', 1),
(3, 'Главное меню 2', 'main2', 'right', 1),
(4, 'О компании', 'about-menu', 'Футер', 1),
(5, 'Покупателям', 'customer-menu', 'Футер', 1),
(6, 'Каталог', 'catalog-menu', 'Футер', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_menu_menu_item`
--

CREATE TABLE IF NOT EXISTS `yupe_menu_menu_item` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `regular_link` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL,
  `href` varchar(150) NOT NULL,
  `class` varchar(150) NOT NULL,
  `title_attr` varchar(150) NOT NULL,
  `before_link` varchar(150) NOT NULL,
  `after_link` varchar(150) NOT NULL,
  `target` varchar(150) NOT NULL,
  `rel` varchar(150) NOT NULL,
  `condition_name` varchar(150) DEFAULT '0',
  `condition_denial` int(11) DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_menu_menu_item`
--

INSERT INTO `yupe_menu_menu_item` (`id`, `parent_id`, `menu_id`, `regular_link`, `title`, `href`, `class`, `title_attr`, `before_link`, `after_link`, `target`, `rel`, `condition_name`, `condition_denial`, `sort`, `status`) VALUES
(1, 0, 1, 1, 'Главная', '/', '', 'Главная страница сайта', '', '', '', '', '', 0, 1, 0),
(2, 0, 1, 0, 'Блоги', '/blog/blog/index', '', 'Блоги', '', '', '', '', '', 0, 2, 0),
(3, 2, 1, 0, 'Пользователи', '/user/people/index', '', 'Пользователи', '', '', '', '', '', 0, 3, 0),
(4, 0, 1, 0, 'Wiki', '/wiki/default/index', '', 'Wiki', '', '', '', '', '', 0, 9, 0),
(5, 0, 1, 0, 'Войти', '/user/account/login', 'login-text', 'Войти на сайт', '', '', '', '', 'isAuthenticated', 1, 11, 0),
(6, 0, 1, 0, 'Выйти', '/user/account/logout', 'login-text', 'Выйти', '', '', '', '', 'isAuthenticated', 0, 12, 0),
(7, 0, 1, 0, 'Регистрация', '/user/account/registration', 'login-text', 'Регистрация на сайте', '', '', '', '', 'isAuthenticated', 1, 10, 0),
(8, 0, 1, 0, 'Панель управления', '/yupe/backend/index', 'login-text', 'Панель управления сайтом', '', '', '', '', 'isSuperUser', 0, 13, 0),
(9, 0, 1, 0, 'FAQ', '/feedback/contact/faq', '', 'FAQ', '', '', '', '', '', 0, 7, 0),
(10, 0, 1, 0, 'Контакты', '/feedback/contact/index', '', 'Контакты', '', '', '', '', '', 0, 7, 1),
(11, 0, 2, 0, 'Каталог', '/store/', '', 'Магазин', '', '', '', '', '', 0, 1, 1),
(12, 0, 3, 1, 'Распродажа', '/store/sale', '', '', '', '', '', '', '', 0, 14, 1),
(13, 0, 3, 1, 'Магазины', '/contacts', '', '', '', '', '', '', '', 0, 15, 1),
(15, 0, 1, 1, 'О компании', '/company', '', '', '', '', '', '', '0', 0, 17, 1),
(16, 0, 1, 1, 'Замер и установка', '/zamer-i-ustanovka', '', '', '', '', '', '', '0', 0, 18, 1),
(17, 0, 1, 1, 'Услуги и цены', '/uslugi-i-ceny', '', '', '', '', '', '', '0', 0, 19, 1),
(18, 0, 1, 1, 'Монтаж дверей', '/montazh-dverey', '', '', '', '', '', '', '0', 0, 20, 0),
(19, 0, 1, 1, 'Пороги', '/porogi', '', '', '', '', '', '', '0', 0, 21, 1),
(20, 0, 4, 1, 'Адреса магазинов', '/contacts', '', '', '', '', '', '', '', 0, 22, 1),
(21, 0, 4, 1, 'Отзывы', '/reviews', '', '', '', '', '', '', '', 0, 23, 0),
(22, 0, 4, 1, 'Новости', '/news', '', '', '', '', '', '', '', 0, 24, 0),
(23, 0, 4, 1, 'Наши работы', '/gallery', '', '', '', '', '', '', '', 0, 25, 1),
(24, 0, 5, 1, 'Услуги и цены', '/uslugi-i-ceny', '', '', '', '', '', '', '', 0, 27, 1),
(25, 0, 5, 1, 'Акции', '/store/sale', '', '', '', '', '', '', '', 0, 28, 1),
(26, 0, 5, 1, 'Пороги', '/porogi', '', '', '', '', '', '', '', 0, 29, 1),
(27, 0, 6, 1, 'Межкомнатные двери', '/store/mezhkomnatnye-dveri', '', '', '', '', '', '', '', 0, 30, 1),
(28, 0, 6, 1, 'Входные двери', '/store/vhodnye-dveri', '', '', '', '', '', '', '', 0, 31, 1),
(29, 0, 5, 1, 'Замер и установка', '/zamer-i-ustanovka', '', '', '', '', '', '', '', 0, 26, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_migrations`
--

CREATE TABLE IF NOT EXISTS `yupe_migrations` (
  `id` int(11) NOT NULL,
  `module` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_migrations`
--

INSERT INTO `yupe_migrations` (`id`, `module`, `version`, `apply_time`) VALUES
(1, 'user', 'm000000_000000_user_base', 1464858471),
(2, 'user', 'm131019_212911_user_tokens', 1464858472),
(3, 'user', 'm131025_152911_clean_user_table', 1464858472),
(4, 'user', 'm131026_002234_prepare_hash_user_password', 1464858473),
(5, 'user', 'm131106_111552_user_restore_fields', 1464858473),
(6, 'user', 'm131121_190850_modify_tokes_table', 1464858473),
(7, 'user', 'm140812_100348_add_expire_to_token_table', 1464858473),
(8, 'user', 'm150416_113652_rename_fields', 1464858473),
(9, 'user', 'm151006_000000_user_add_phone', 1464858474),
(10, 'yupe', 'm000000_000000_yupe_base', 1464858474),
(11, 'yupe', 'm130527_154455_yupe_change_unique_index', 1464858475),
(12, 'yupe', 'm150416_125517_rename_fields', 1464858475),
(13, 'yupe', 'm160204_195213_change_settings_type', 1464858475),
(14, 'category', 'm000000_000000_category_base', 1464858476),
(15, 'category', 'm150415_150436_rename_fields', 1464858476),
(16, 'image', 'm000000_000000_image_base', 1464858477),
(17, 'image', 'm150226_121100_image_order', 1464858477),
(18, 'image', 'm150416_080008_rename_fields', 1464858477),
(19, 'mail', 'm000000_000000_mail_base', 1464858479),
(20, 'comment', 'm000000_000000_comment_base', 1464858481),
(21, 'comment', 'm130704_095200_comment_nestedsets', 1464858482),
(22, 'comment', 'm150415_151804_rename_fields', 1464858483),
(23, 'blog', 'm000000_000000_blog_base', 1464858486),
(24, 'blog', 'm130503_091124_BlogPostImage', 1464858487),
(25, 'blog', 'm130529_151602_add_post_category', 1464858487),
(26, 'blog', 'm140226_052326_add_community_fields', 1464858488),
(27, 'blog', 'm140714_110238_blog_post_quote_type', 1464858488),
(28, 'blog', 'm150406_094809_blog_post_quote_type', 1464858488),
(29, 'blog', 'm150414_180119_rename_date_fields', 1464858488),
(30, 'blog', 'm160518_175903_alter_blog_foreign_keys', 1464858488),
(31, 'page', 'm000000_000000_page_base', 1464858490),
(32, 'page', 'm130115_155600_columns_rename', 1464858490),
(33, 'page', 'm140115_083618_add_layout', 1464858491),
(34, 'page', 'm140620_072543_add_view', 1464858491),
(35, 'page', 'm150312_151049_change_body_type', 1464858491),
(36, 'page', 'm150416_101038_rename_fields', 1464858491),
(37, 'store', 'm140812_160000_store_attribute_group_base', 1464858492),
(38, 'store', 'm140812_170000_store_attribute_base', 1464858492),
(39, 'store', 'm140812_180000_store_attribute_option_base', 1464858493),
(40, 'store', 'm140813_200000_store_category_base', 1464858493),
(41, 'store', 'm140813_210000_store_type_base', 1464858493),
(42, 'store', 'm140813_220000_store_type_attribute_base', 1464858493),
(43, 'store', 'm140813_230000_store_producer_base', 1464858493),
(44, 'store', 'm140814_000000_store_product_base', 1464858494),
(45, 'store', 'm140814_000010_store_product_category_base', 1464858495),
(46, 'store', 'm140814_000013_store_product_attribute_eav_base', 1464858495),
(47, 'store', 'm140814_000018_store_product_image_base', 1464858496),
(48, 'store', 'm140814_000020_store_product_variant_base', 1464858497),
(49, 'store', 'm141014_210000_store_product_category_column', 1464858497),
(50, 'store', 'm141015_170000_store_product_image_column', 1464858497),
(51, 'store', 'm141218_091834_default_null', 1464858497),
(52, 'store', 'm150210_063409_add_store_menu_item', 1464858498),
(53, 'store', 'm150210_105811_add_price_column', 1464858498),
(54, 'store', 'm150210_131238_order_category', 1464858499),
(55, 'store', 'm150211_105453_add_position_for_product_variant', 1464858499),
(56, 'store', 'm150226_065935_add_product_position', 1464858499),
(57, 'store', 'm150416_112008_rename_fields', 1464858499),
(58, 'store', 'm150417_180000_store_product_link_base', 1464858500),
(59, 'store', 'm150825_184407_change_store_url', 1464858500),
(60, 'store', 'm150907_084604_new_attributes', 1464858501),
(61, 'store', 'm151218_081635_add_external_id_fields', 1464858502),
(62, 'store', 'm151218_082939_add_external_id_ix', 1464858502),
(63, 'store', 'm151218_142113_add_product_index', 1464858502),
(64, 'store', 'm151223_140722_drop_product_type_categories', 1464858503),
(65, 'store', 'm160210_084850_add_h1_and_canonical', 1464858504),
(66, 'store', 'm160210_131541_add_main_image_alt_title', 1464858505),
(67, 'store', 'm160211_180200_add_additional_images_alt_title', 1464858505),
(68, 'store', 'm160215_110749_add_image_groups_table', 1464858505),
(69, 'store', 'm160227_114934_rename_producer_order_column', 1464858505),
(70, 'store', 'm160309_091039_add_attributes_sort_and_search_fields', 1464858505),
(71, 'store', 'm160413_184551_add_type_attr_fk', 1464858506),
(72, 'contentblock', 'm000000_000000_contentblock_base', 1464858506),
(73, 'contentblock', 'm140715_130737_add_category_id', 1464858507),
(74, 'contentblock', 'm150127_130425_add_status_column', 1464858507),
(75, 'menu', 'm000000_000000_menu_base', 1464858507),
(76, 'menu', 'm121220_001126_menu_test_data', 1464858507),
(77, 'feedback', 'm000000_000000_feedback_base', 1464858510),
(78, 'feedback', 'm150415_184108_rename_fields', 1464858510),
(79, 'dictionary', 'm000000_000000_dictionary_base', 1464858514),
(80, 'dictionary', 'm150415_183050_rename_fields', 1464858514),
(81, 'news', 'm000000_000000_news_base', 1464858515),
(82, 'news', 'm150416_081251_rename_fields', 1464858515);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_news_news`
--

CREATE TABLE IF NOT EXISTS `yupe_news_news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `lang` char(2) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `date` date NOT NULL,
  `title` varchar(250) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `short_text` text,
  `full_text` text NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `is_protected` tinyint(1) NOT NULL DEFAULT '0',
  `keywords` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_page_page`
--

CREATE TABLE IF NOT EXISTS `yupe_page_page` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `lang` char(2) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `change_user_id` int(11) DEFAULT NULL,
  `title_short` varchar(150) NOT NULL,
  `title` varchar(250) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `body` mediumtext NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `layout` varchar(250) DEFAULT NULL,
  `view` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_page_page`
--

INSERT INTO `yupe_page_page` (`id`, `category_id`, `lang`, `parent_id`, `create_time`, `update_time`, `user_id`, `change_user_id`, `title_short`, `title`, `slug`, `body`, `keywords`, `description`, `status`, `is_protected`, `order`, `layout`, `view`) VALUES
(1, NULL, 'ru', NULL, '2016-06-02 12:14:26', '2016-06-02 12:50:27', 1, 1, 'Главная', 'Главная', 'index', '<p>Проверка</p>', '', '', 1, 0, 0, '', 'index'),
(2, NULL, 'ru', NULL, '2016-06-03 11:16:41', '2016-06-11 14:22:59', 1, 1, '', 'О компании', 'company', '<p>Что создает уютную обстановку в квартире илилюбом другом помещении? Мебель? Да. Цветовое решение интерьера? Да.<br>Но одним из самых важных элементов<br>интерьера безусловно остаются двери!<br>Именно двери задают характер окружающей обстановке.<br>Внешний вид межкомнатных дверей помогает<br>создать нужное впечатление от интерьера.<br>Двери придают помещению классический либо, наоборот, неформальный вид.<br>И в тоже время нельзя недооценивать<br>практическую функцию, которую выполняют <i>межкомнатные двери</i>,<br>ведь разделяя пространство, двери ежедневно<br>подвергаются серьезным нагрузкам.<br>Для более полного удовлетворения нужд и потребностей покупателей <i>ООО «ХоумДорс»</i><br>ведет тесное сотрудничество с<br>различными производителями дверей.<br>С помощью нашей компании вы можете<br><i>купить двери</i> оптом как шпонированные<br>так и двери ценных пород дерева, таких как дуб и бук.</p>', '', '', 1, 0, 0, '', ''),
(3, NULL, 'ru', NULL, '2016-06-03 11:17:38', '2016-06-11 14:05:21', 1, 1, '', 'Замер и установка', 'zamer-i-ustanovka', '<p>Перед покупкой дверей вы можете пригласить мастера на замер — это исключит недоразумения после покупки, а специалист не только грамотно произведёт замер, но и даст ценные рекомендации по выбору двери, фурнитуры и погонажа. Кроме того, мастер определит объём работ и сориентирует Вас по стоимости монтажа.</p><p>Монтаж дверей производится квалифицированными специалистами, имеющими богатый опыт. Используя современный и надежный инструмент, что позволяет избежать порчи продукции и производить монтажные работы оперативно и качественно.</p><p>Осуществлять монтаж дверей собственными силами не рекомендуется, так как самостоятельный монтаж может повлечь за собой самые неожиданные последствия.</p><p>До момента установки рекомендуется хранить межкомнатные двери в заводской упаковке в помещении с постоянной температурой (от +15 до +30°C), со стабильной влажностью не более(60-70%), горизонтально на ровной поверхности. Перед установкой желательно, чтобы дверь акклиматизировалась в помещении (в течение нескольких суток). В холодное (зимнее) время — 72 часа, (лето)— 24 часа.</p><p>Следует избегать резких колебаний температуры и влажности в помещении, где хранится дверь, так как это может привести к деформации полотна и комплектующих, а также не допускать попадания прямых солнечных лучей на двери в упаковке — это может вызвать неравномерное изменение цвета полотна (свет синтез).</p><p>Если межкомнатные двери были куплены без замера, мастер не несет ответственность за несоответствие размеров и комплектации. Двери устанавливаются по образцу выставочных экземпляров. Желательно устанавливать двери после завершения всех влажных ремонтных работ.</p><p>Возможна установка в 2 этапа: на первом этапе осуществляется установка дверного полотна с коробкой и добора, На втором этапе наличников и ловушки на замок. Оплата производится также поэтапно.</p><p>Выезды на установку в отдаленные районы оплачиваются дополнительно из расчета 20 руб./км. к стоимости монтажа.</p><p>Повторный выезд (т. е. 2-ой этап установки) оплачивается повторно.</p><p>Сервисное обслуживание в течение 6 месяцев со дня установки осуществляется бесплатно независимо от расстояния.</p><p>Стандартный монтаж возможен при соответствии дверных проемов (рекомендации завода изготовителя дверей). Монтаж двери производится строго вертикально.</p><p>Исправление невертикальных стен, заполнение (не плотного) прилегания между наличником и стеной по причине неровности стен, штукатурно-малярные работы монтажниками не производятся.</p><p>Электропроводка, сигнализация и телефонные провода должны быть убраны Заказчиком до начала работ; т.к. мастер не несет ответственности за их сохранность.</p><p>Заказчик или доверенное лицо обязан быть на объекте во время монтажа дверей.</p>', '', '', 1, 0, 0, '', ''),
(4, NULL, 'ru', NULL, '2016-06-03 11:19:41', '2016-06-03 11:19:41', 1, 1, '', 'Оплата и доставка', 'oplata-i-dostavka', '<p>Оплата и доставка</p>', '', '', 0, 0, 0, '', ''),
(5, NULL, 'ru', NULL, '2016-06-11 13:43:39', '2016-06-11 14:06:38', 1, 1, 'Услуги и цены', 'Услуги и цены', 'uslugi-i-ceny', '<center><span class="caption_1">СБОРКА И УСТАНОВКА МЕЖКОМНАТНЫХ ДВЕРЕЙ</span></center><p><br>\r\n</p><p><span style="font-size: 14pt; color: rgb(103, 165, 31);">Монтаж дверей производится квалифицированными специалистами, имеющими богатый опыт. Используя современный и надежный инструмент, что позволяет избежать порчи продукции и производить монтажные работы оперативно и качественно.</span>\r\n</p><p><br><br>\r\n</p><!-- Images --><div class="zooms">\r\n	Врезка замка с использованием ручного фрезера:<br>\r\n	<a class="nivoZoom center" href="/images/montazh/1/1.JPG"><img src="/images/montazh/1/1.JPG" height="100"></a>\r\n	<a class="nivoZoom center" href="/images/montazh/1/3.JPG"><img src="/images/montazh/1/3.JPG" height="100"></a>\r\n	<a class="nivoZoom center" href="/images/montazh/1/6.JPG"><img src="/images/montazh/1/6.JPG" height="100"></a>\r\n	<a class="nivoZoom center" href="/images/montazh/1/8.JPG"><img src="/images/montazh/1/8.JPG" height="100"></a>\r\n</div><div class="zooms">\r\n	Облицовка проёма и монтаж откатной двери:<br>\r\n	<a class="nivoZoom center" href="/images/montazh/2/1.JPG"><img src="/images/montazh/2/1.JPG" height="100"></a>\r\n	<a class="nivoZoom center" href="/images/montazh/2/6.JPG"><img src="/images/montazh/2/6.JPG" height="100"></a>\r\n	<a class="nivoZoom center" href="/images/montazh/2/7.JPG"><img src="/images/montazh/2/7.JPG" height="100"></a>\r\n	<a class="nivoZoom center" href="/images/montazh/2/8.JPG"><img src="/images/montazh/2/8.JPG" height="100"></a>\r\n</div><div class="zooms">\r\n	Врезка разъёмной петли:<br>\r\n	<a class="nivoZoom center" href="/images/montazh/3/1.JPG"><img src="/images/montazh/3/1.JPG" height="100"></a>\r\n	<a class="nivoZoom center" href="/images/montazh/3/2.JPG"><img src="/images/montazh/3/2.JPG" height="100"></a></div><!-- End of images --><p><br><span style="font-size: 14pt;">Осуществлять монтаж дверей собственными силами не рекомендуется, так как самостоятельный монтаж может повлечь за собой самые неожиданные последствия.</span>\r\n</p><p>До момента установки рекомендуется хранить межкомнатные двери в заводской упаковке в помещении с постоянной температурой (от +15 до +30°C), со стабильной влажностью не более(60-70%), горизонтально на ровной поверхности. Перед установкой желательно, чтобы дверь акклиматизировалась в помещении (в течение нескольких суток). В холодное (зимнее) время — 72 часа, (лето)— 24 часа.\r\n</p><p>Следует избегать резких колебаний температуры и влажности в помещении, где хранится дверь, так как это может привести к деформации полотна и комплектующих, а также не допускать попадания прямых солнечных лучей на двери в упаковке — это может вызвать неравномерное изменение цвета полотна (свет синтез).\r\n</p><p>Если межкомнатные двери были куплены без замера, мастер не несет ответственность за несоответствие размеров и комплектации. Двери устанавливаются по образцу выставочных экземпляров. Желательно устанавливать двери после завершения всех влажных ремонтных работ.\r\n</p><p>Возможна установка в 2 этапа: на первом этапе осуществляется установка дверного полотна с коробкой и добора, На втором этапе наличников и ловушки на замок. Оплата производится также поэтапно.\r\n</p><p>Выезды на установку в отдаленные районы оплачиваются дополнительно из расчета 20 руб./км. к стоимости монтажа.\r\n</p><p>Повторный выезд (т. е. 2-ой этап установки) оплачивается повторно.\r\n</p><p>Сервисное обслуживание в течение 6 месяцев со дня установки осуществляется бесплатно независимо от расстояния.\r\n</p><p>Стандартный монтаж возможен при соответствии дверных проемов (рекомендации завода изготовителя дверей). Монтаж двери производится строго вертикально.\r\n</p><p>Исправление невертикальных стен, заполнение (не плотного) прилегания между наличником и стеной по причине неровности стен, штукатурно-малярные работы монтажниками не производятся.\r\n</p><p>Электропроводка, сигнализация и телефонные провода должны быть убраны Заказчиком до начала работ; т.к. мастер не несет ответственности за их сохранность.\r\n</p><p>Заказчик или доверенное лицо обязан быть на объекте во время монтажа дверей.</p><div id="printer">\r\n	В стоимость стандартной установки двери входит врезка 2 петель, межкомнатной защелки и ручки. Установка двери в заранее подготовленный проем, установка наличника на обе стороны,\r\n	<br>а также расходные материалы. При установке только одной двери, стандартная стоимость составляет 2500 руб.\r\n	<br><br>\r\n	<center>\r\n	<table cellspacing="0" style="border:1px solid #78340B;">\r\n	<tbody>\r\n	<tr>\r\n		<td class="capt">Наименование услуги\r\n		</td>\r\n		<td class="capt">Стоимость (руб.)\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Стандартная установка 1 полотно\r\n		</td>\r\n		<td class="std">2100\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Распашная дверь\r\n		</td>\r\n		<td class="std">3900\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Откатная дверь 1 полотно\r\n		</td>\r\n		<td class="std">2800\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Откатная дверь 2 полотна\r\n		</td>\r\n		<td class="std">4000\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Устройство арочного проема\r\n		</td>\r\n		<td class="std">1800\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Монтаж доборов (ширина до 120 мм)\r\n		</td>\r\n		<td class="std">800\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Монтаж доборов (свыше 120 мм до 400 мм)\r\n		</td>\r\n		<td class="std">1300\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Монтаж фрамуги\r\n		</td>\r\n		<td class="std">700\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Распил наличника вдоль\r\n		</td>\r\n		<td class="std">150\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Установка банкеток и розеток (1шт.)\r\n		</td>\r\n		<td class="std">50\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Установка портала 1 сторона\r\n		</td>\r\n		<td class="std">250\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Установка порогов\r\n		</td>\r\n		<td class="std">250\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Устройство вентиляционных отверстий\r\n		</td>\r\n		<td class="std">600\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Уменьшение дверного полотна по высоте\r\n		</td>\r\n		<td class="std">600\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Демонтаж старой двери\r\n		</td>\r\n		<td class="std">250\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Монтаж притворной планки (двухстворчатая дверь)\r\n		</td>\r\n		<td class="std">250\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td colspan="2" class="capt">Фурнитура\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Врезка замка (купе)\r\n		</td>\r\n		<td class="std">500\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Врезка замка ключ\r\n		</td>\r\n		<td class="std">600\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Врезка сан.техн. замка\r\n		</td>\r\n		<td class="std">500\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Врезка магнитного замка\r\n		</td>\r\n		<td class="std">500\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Врезка ригеля\r\n		</td>\r\n		<td class="std">200\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Врезка доп. петли\r\n		</td>\r\n		<td class="std">250\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">скрытый монтаж ( цена за 1 проем) +\r\n		</td>\r\n		<td class="std">400\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Монтаж порога (умный порог)\r\n		</td>\r\n		<td class="std">500\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td colspan="2" class="capt">Вклейка стекол (установка)\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">Установка стекла (фрамуга)\r\n		</td>\r\n		<td class="std">500\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">1 стекло на 1/2 двери\r\n		</td>\r\n		<td class="std">300\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">1 стекло на 1/2 двери с разбивкой на 6 частей\r\n		</td>\r\n		<td class="std">450\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">1 стекло на всю дверь\r\n		</td>\r\n		<td class="std">500\r\n		</td>\r\n	</tr>\r\n	<tr>\r\n		<td class="std">стекло на всю дверь с разбивкой на 12 частей\r\n		</td>\r\n		<td class="std">800\r\n		</td>\r\n	</tr>\r\n	</tbody>\r\n	</table>\r\n	</center>\r\n	<br>\r\n	Гарантия на установку 12 месяцев при условии соблюдения заказчиком рекомендаций завода.\r\n	<br>\r\n	Установка нестандартных дверей, высотой превышающих 2100мм. + 20% к комиссии установки\r\n	<br>\r\n	Уменьшение дверного полотна ведет за собой снятие гарантии. Все работы по изменению дверного проема оцениваются на месте монтажниками в зависимости от сложности работ.\r\n	<br>\r\n	Выезд замерщика - 500руб. Стоимость замера учитывается при установке 5-ти и более полотен.\r\n	<br>\r\n	Повторный выезд по вине заказчика 1 раб. день - 500руб.<br>\r\n	Выезд в пригород - 20руб./км от черты города.\r\n</div>', '', '', 1, 0, 0, '', ''),
(6, NULL, 'ru', NULL, '2016-06-11 13:54:29', '2016-06-11 14:03:49', 1, 1, 'Монтаж дверей', 'Монтаж дверей', 'montazh-dverey', 'Перед покупкой дверей вы можете пригласить мастера на замер — это исключит недоразумения после покупки, а специалист не только грамотно произведёт замер, но и даст ценные рекомендации по выбору двери, фурнитуры и погонажа. Кроме того, мастер определит объём работ и сориентирует Вас по стоимости монтажа. <br><br>Монтаж дверей производится квалифицированными специалистами, имеющими богатый опыт. Используя современный и надежный инструмент, что позволяет избежать порчи продукции и производить монтажные работы оперативно и качественно. <br><br>Осуществлять монтаж дверей собственными силами не рекомендуется, так как самостоятельный монтаж может повлечь за собой самые неожиданные последствия. <br><br>До момента установки рекомендуется хранить межкомнатные двери в заводской упаковке в помещении с постоянной температурой (от +15 до +30°C), со стабильной влажностью не более(60-70%), горизонтально на ровной поверхности. Перед установкой желательно, чтобы дверь акклиматизировалась в помещении (в течение нескольких суток). В холодное (зимнее) время — 72 часа, (лето)— 24 часа. <br><br>Следует избегать резких колебаний температуры и влажности в помещении, где хранится дверь, так как это может привести к деформации полотна и комплектующих, а также не допускать попадания прямых солнечных лучей на двери в упаковке — это может вызвать неравномерное изменение цвета полотна (свет синтез). <br><br>Если межкомнатные двери были куплены без замера, мастер не несет ответственность за несоответствие размеров и комплектации. Двери устанавливаются по образцу выставочных экземпляров. Желательно устанавливать двери после завершения всех влажных ремонтных работ. <br><br>Возможна установка в 2 этапа: на первом этапе осуществляется установка дверного полотна с коробкой и добора, На втором этапе наличников и ловушки на замок. Оплата производится также поэтапно. <br><br>Выезды на установку в отдаленные районы оплачиваются дополнительно из расчета 20 руб./км. к стоимости монтажа. <br><br>Повторный выезд (т. е. 2-ой этап установки) оплачивается повторно. <br><br>Сервисное обслуживание в течение 6 месяцев со дня установки осуществляется бесплатно независимо от расстояния. <br><br>Стандартный монтаж возможен при соответствии дверных проемов (рекомендации завода изготовителя дверей). Монтаж двери производится строго вертикально. <br><br>Исправление невертикальных стен, заполнение (не плотного) прилегания между наличником и стеной по причине неровности стен, штукатурно-малярные работы монтажниками не производятся. <br><br>Электропроводка, сигнализация и телефонные провода должны быть убраны Заказчиком до начала работ; т.к. мастер не несет ответственности за их сохранность. <br><br>Заказчик или доверенное лицо обязан быть на объекте во время монтажа дверей.', '', '', 0, 0, 0, '', ''),
(7, NULL, 'ru', NULL, '2016-06-11 13:57:14', '2016-06-11 14:02:17', 1, 1, 'Пороги', 'Пороги', 'porogi', '<table border="0" cellspacing="4" width="100%">\r\n<tbody>\r\n<tr>\r\n	<td>\r\n		<div class="items">\r\n			Порог Planet FT<br>\r\n			<hr>\r\n			<img src="/images/porog/ft.jpg" height="250"><br>\r\n			<strong>2 500 р.</strong>\r\n		</div>\r\n	</td>\r\n	<td>\r\n		<div class="items">\r\n			Порог Planet HS<br>\r\n			<hr>\r\n			<img src="/images/porog/hs.jpg" height="250"><br>\r\n			<strong>2 500 р.</strong>\r\n		</div>\r\n	</td>\r\n	<td>\r\n		<div class="items">\r\n			Порог Planet RF<br>\r\n			<hr>\r\n			<img src="/images/porog/rf.jpg" height="250"><br>\r\n			<strong>2 500 р.</strong>\r\n		</div>\r\n	</td>\r\n	<td>\r\n		<div class="items">\r\n			Порог Planet RH<br>\r\n			<hr>\r\n			<img src="/images/porog/rh.jpg" height="250"><br>\r\n			<strong>2 500 р.</strong>\r\n		</div>\r\n	</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br>\r\n</p>\r\n<div style="border-radius: 3px; padding: 5px; font-weight: bold; background-color: #ddd; padding-left: 20px;">\r\n	ЗВУКОИЗОЛЯЦИОННЫЕ ДВЕРНЫЕ ПОРОГИ PLANET (ШВЕЙЦАРИЯ).\r\n</div>\r\n<p><br>\r\n</p>\r\n<p><span style="font-size: 18pt;"><strong>Швейцарские пороги Planet принесут тишину и безопасность в ваш дом!</strong></span>\r\n</p>\r\n<p><br><br>Кто из нас не просыпался ночью от криков – это муж или жена опять ударились чувствительными пальцами ноги о порог в дверном проёме туалета. Кто из нас сам не «собирал» ногами косяки и пороги. Все знают как это больно. В эту минуту хочется взять молоток и снести все эти пороги с пути, и к черту красоту полов!\r\n</p>\r\n<p><br><br><i>Если Вы хотите обеспечить дополнительную звукоизоляцию в своей квартире - купите дверные звукоизоляционные пороги Planet. Звоните - (812) 904-30-04, (812) 646-70-46<br>пишите - masterdverey@gmail.com, приезжайте - ТК "Строй двор" пр.Энгельса д.138 литер А, модуль 12</i>\r\n</p>\r\n<p><br><br><strong>Харакетристики дверных порогов "Планет"</strong>\r\n</p>\r\n<p><br><br>\r\n</p>\r\n<li>Звукоизоляционные харакетристики - 48дБ (при сохранении зазора 7мм)</li>\r\n<li>Возможность беспрепятсвенного перетаскивания мебели, проезда кресла-каталки и прохода</li>\r\n<li>Ограничивают пропускание сквозняков, света и дыма</li>\r\n<li>Поаробезопсаные харакетеристики - обладают дымозащитными и огнестойкими EI30 свойствами</li>\r\n<li>Пригодны для любых полов - автоматическое выравнивание на наклонном и волнистому полу<br><br><strong>Виды дверных порогов "Планет"</strong><br><br><img src="/images/porog/planet.jpg"><br><br><span style="font-size: 18pt;"><strong>Как фунционирует система звукоизоляиции Planet?</strong></span><br><img src="/images/porog/planet2.jpg" style="float: left; margin: 5px;"><br>При закрытии двери происходит нажим на спусковую кнопку (Фиг.1) со стороны дверной петли рамы, и уплотнительная система Planet опускается плотно к полу. При открытии двери воздействие на спусковую кнопку и пружину исчезает, и уплотнительная система снова поднимается так, что дверь можно открыть без трения уплотнителя по полу (Фиг. 2).<br><br><strong>Planet не пропускает:</strong><br><br>- Сквозняк<br>- Шум<br>- Свет<br>- Холод и тепло<br>- Дым и огонь<br><br>Учитывая функционирование, характеристику и качество Ваших дверей, выберите из обзорной таблицы подходящий уплотнитель Planet!<br><br><a href="/images/porog/auswahltabelle_ru.pdf" class="pdf">Таблица продуктов (PDF, 69.84 KB)</a><br><br><a href="/images/porog/zubehoer_ru.pdf" class="pdf">Принадлежности (PDF, 245.96 KB)</a><br><br><a href="/images/porog/werbematerial_ru.pdf" class="pdf">Материал для показа (PDF, 293.8 KB)</a><br><br><br><br><br><br><span style="font-size: 16pt;"><strong>Дизайн и качество!</strong></span><br><br>Но компромисс между красотой и удобством есть! Имя ему – автоматические пороги от фирмы "Planet". Вы больше не будете ночью спотыкаться о порог между комнатой и коридором, а дверь будет закрываться так же плотно. Отличие этих порогов от обычных в том, что они крепятся не к полу, а к двери! В закрытом положении дверь не пропускает звуков или запахов, но стоит потянуть ручку – и этот порог бесшумно убирается в дверь и она открывается без затруднений.<br><br><span style="font-size: 16pt;"><strong>Выдвижные пороги Planet (Швеция)</strong></span><br><br>Пороги фирмы Planet из Нюренсдорфа (Швейцария) являются лидером в своих разработках, пороги работают как швейцарские часы. Задача порога Planet создать полную герметичность дверного проема в результате сохраняеться тепло и звуко изоляция. Секрет опускающихся уплотнителей Planet заключается в особом механизме. При закрытии дверей механизм опускаеться на пол в самый последний момент, облигая все неровности пола, создовая тем самым герметичность и поднимается снова, когда дверь открывается – совершенно бесшумно.<br><br><span style="font-size: 16pt;"><strong>Установка дверных порогов Planet</strong></span><br><br>Выдвижные пороги Planet устанавливаються снизу в паз дверного полотна, который пропиливаеться установщиками , при отсутствии возможности установки в паз (например стеклянные двери) пороги устанавливаються на полотно при помощи специального механизма. Наши установщики помогут вам установить пороги фирмы Planet.<br><br>Технические характеристики автоматического звукоизоляционного порога Planet<br><br></li>\r\n<li>Ход 20 мм</li>\r\n<li>Материал профиля-обоймы: алюминий 13~30 мм</li>\r\n<li>Приведение в действие с одной стороны с равномерным опусканием</li>\r\n<li>Отсутствие трения по полу</li>\r\n<li>Самовыравнивание на наклонном полу</li>\r\n<li>Одна ширина паза для всех требований</li>\r\n<li>Также для 2-створчатых дверей с кромочной или приводной задвижками</li>\r\n<li>Также для накладной установки</li>\r\n<li>Величина снижения шума 48 дБ (расстояние до пола 7 мм)</li>\r\n<li>Укорачивается до меньшей длины, имеющейся на складе</li>\r\n<li>Высококачественная силиконовая губа-манжета,простая настройка хода</li>\r\n<li>Крепление: снизу винтами или гвоздями/стержнями Заказчика</li>\r\n<li>5 лет гарантии или 500 000 открываний/закрываний</li>\r\n<li>Исполнения - дымозащитное, огнестойкое и дымозащитное, встраивание сверху, для раздвижных дверей, для складных перегородок, особые исполнения по запросу<br><br><span style="font-size: 16pt;"><strong>Установка проста и надежна!</strong></span><br><br>Установить автоматический порог Planet проще простого, более того, они подходят ко всем дверям – ширина паза этих порогов универсальна. Автоматический порог не требует абсолютной ровности пола, наоборот - он сам выравнивает все неровности и уклоны.</li>', '', '', 1, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_attribute`
--

CREATE TABLE IF NOT EXISTS `yupe_store_attribute` (
  `id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `unit` varchar(30) DEFAULT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `is_filter` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_attribute`
--

INSERT INTO `yupe_store_attribute` (`id`, `group_id`, `name`, `title`, `type`, `unit`, `required`, `sort`, `is_filter`) VALUES
(1, 1, 'krasnoe-derevo', 'Красное дерево', 1, '', 0, 1, 1),
(2, 1, 'yasen-ton-7', 'Ясень тон 7', 0, '', 0, 2, 0),
(3, 1, 'yasen-ton-4', 'Ясень тон 4', 2, '', 0, 3, 0),
(4, 2, 'steklo', 'Стекло', 2, '', 0, 4, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_attribute_group`
--

CREATE TABLE IF NOT EXISTS `yupe_store_attribute_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_attribute_group`
--

INSERT INTO `yupe_store_attribute_group` (`id`, `name`, `position`) VALUES
(1, 'Шпон', 1),
(2, 'Стекло', 2),
(3, 'Обрамление', 3),
(4, 'Ручки/петли', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_attribute_option`
--

CREATE TABLE IF NOT EXISTS `yupe_store_attribute_option` (
  `id` int(11) NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `position` tinyint(4) DEFAULT NULL,
  `value` varchar(255) DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_attribute_option`
--

INSERT INTO `yupe_store_attribute_option` (`id`, `attribute_id`, `position`, `value`) VALUES
(1, 3, 1, 'Ясень - тон 7'),
(2, 3, 2, 'Ясень - тон 4'),
(3, 3, 3, 'Красное дерево'),
(4, 3, 4, 'Ясень - тон 6'),
(5, 3, 5, 'Натуральная вишня'),
(6, 4, 6, 'Без стекла'),
(7, 4, 7, 'Версаль гравировка стразы'),
(8, 4, 8, 'Витраж Валенсия бронза'),
(9, 4, 9, 'Витраж Виттори бронза'),
(10, 4, 10, 'Витраж Колосья'),
(11, 4, 11, 'Витраж Павлин'),
(12, 4, 12, 'Витраж Сантори 2'),
(13, 4, 13, 'Витраж цветы'),
(14, 4, 14, 'Виттория 2 Бронза Гравировка'),
(15, 4, 15, 'Виттория 2 гравировка');

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_category`
--

CREATE TABLE IF NOT EXISTS `yupe_store_category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `slug` varchar(150) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `short_description` text,
  `description` text,
  `meta_title` varchar(250) DEFAULT NULL,
  `meta_description` varchar(250) DEFAULT NULL,
  `meta_keywords` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL DEFAULT '1',
  `external_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `meta_canonical` varchar(255) DEFAULT NULL,
  `image_alt` varchar(255) DEFAULT NULL,
  `image_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_category`
--

INSERT INTO `yupe_store_category` (`id`, `parent_id`, `slug`, `name`, `image`, `short_description`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `sort`, `external_id`, `title`, `meta_canonical`, `image_alt`, `image_title`) VALUES
(1, NULL, 'mezhkomnatnye-dveri', 'Межкомнатные двери', NULL, '', '', '', '', '', 1, 1, NULL, '', '', '', ''),
(2, NULL, 'vhodnye-dveri', 'Входные двери', NULL, '', '<p>Входные двери</p>', '', '', '', 1, 2, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_producer`
--

CREATE TABLE IF NOT EXISTS `yupe_store_producer` (
  `id` int(11) NOT NULL,
  `name_short` varchar(150) NOT NULL,
  `name` varchar(250) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `short_description` text,
  `description` text,
  `meta_title` varchar(250) DEFAULT NULL,
  `meta_keywords` varchar(250) DEFAULT NULL,
  `meta_description` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_producer`
--

INSERT INTO `yupe_store_producer` (`id`, `name_short`, `name`, `slug`, `image`, `short_description`, `description`, `meta_title`, `meta_keywords`, `meta_description`, `status`, `sort`) VALUES
(1, 'Varador', 'Varador', 'varador', NULL, '', '', '', '', '', 1, 1),
(2, 'Mario Rioli', 'Mario Rioli', 'mario-rioli', NULL, '', '<p>Mario Rioli</p>', '', '', '', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_product`
--

CREATE TABLE IF NOT EXISTS `yupe_store_product` (
  `id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `producer_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sku` varchar(100) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `price` decimal(19,3) NOT NULL DEFAULT '0.000',
  `discount_price` decimal(19,3) DEFAULT NULL,
  `discount` decimal(19,3) DEFAULT NULL,
  `description` text,
  `short_description` text,
  `data` text,
  `is_special` tinyint(1) NOT NULL DEFAULT '0',
  `length` decimal(19,3) DEFAULT NULL,
  `width` decimal(19,3) DEFAULT NULL,
  `height` decimal(19,3) DEFAULT NULL,
  `weight` decimal(19,3) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `in_stock` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `meta_title` varchar(250) DEFAULT NULL,
  `meta_keywords` varchar(250) DEFAULT NULL,
  `meta_description` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `average_price` decimal(19,3) DEFAULT NULL,
  `purchase_price` decimal(19,3) DEFAULT NULL,
  `recommended_price` decimal(19,3) DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '1',
  `external_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `meta_canonical` varchar(255) DEFAULT NULL,
  `image_alt` varchar(255) DEFAULT NULL,
  `image_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_product`
--

INSERT INTO `yupe_store_product` (`id`, `type_id`, `producer_id`, `category_id`, `sku`, `name`, `slug`, `price`, `discount_price`, `discount`, `description`, `short_description`, `data`, `is_special`, `length`, `width`, `height`, `weight`, `quantity`, `in_stock`, `status`, `create_time`, `update_time`, `meta_title`, `meta_keywords`, `meta_description`, `image`, `average_price`, `purchase_price`, `recommended_price`, `position`, `external_id`, `title`, `meta_canonical`, `image_alt`, `image_title`) VALUES
(1, 1, 1, 1, '', 'Ankona', 'ankona', '7200.000', NULL, NULL, '<p>123</p>', '<p>321</p>', '<p>333</p>', 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2016-06-02 13:17:59', '2016-06-02 18:11:46', '', '', '', 'ea0d8d4b66e97d8448cf42599525a07b.png', '0.000', '0.000', '0.000', 1, NULL, '', '', '', ''),
(2, NULL, 1, 1, '', 'Alikante', 'alikante', '8200.000', NULL, NULL, '<p>Здесь будет описание товара</p>', '<p>Здесь будет короткое описание товара</p>', '', 0, NULL, NULL, NULL, NULL, NULL, 1, 1, '2016-06-02 13:49:25', '2016-06-02 13:49:25', '', '', '', '1bad9cc24f03040ec4991a0d26a70884.png', '0.000', '0.000', '0.000', 2, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_product_attribute_value`
--

CREATE TABLE IF NOT EXISTS `yupe_store_product_attribute_value` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `number_value` double DEFAULT NULL,
  `string_value` varchar(250) DEFAULT NULL,
  `text_value` text,
  `option_value` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_product_category`
--

CREATE TABLE IF NOT EXISTS `yupe_store_product_category` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_product_image`
--

CREATE TABLE IF NOT EXISTS `yupe_store_product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_product_image_group`
--

CREATE TABLE IF NOT EXISTS `yupe_store_product_image_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_product_link`
--

CREATE TABLE IF NOT EXISTS `yupe_store_product_link` (
  `id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `linked_product_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_product_link`
--

INSERT INTO `yupe_store_product_link` (`id`, `type_id`, `product_id`, `linked_product_id`) VALUES
(1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_product_link_type`
--

CREATE TABLE IF NOT EXISTS `yupe_store_product_link_type` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_product_link_type`
--

INSERT INTO `yupe_store_product_link_type` (`id`, `code`, `title`) VALUES
(1, 'similar', 'Похожие'),
(2, 'related', 'Сопутствующие');

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_product_variant`
--

CREATE TABLE IF NOT EXISTS `yupe_store_product_variant` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `attribute_value` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_type`
--

CREATE TABLE IF NOT EXISTS `yupe_store_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_type`
--

INSERT INTO `yupe_store_type` (`id`, `name`) VALUES
(1, 'Межкомнатные двери');

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_store_type_attribute`
--

CREATE TABLE IF NOT EXISTS `yupe_store_type_attribute` (
  `type_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_store_type_attribute`
--

INSERT INTO `yupe_store_type_attribute` (`type_id`, `attribute_id`) VALUES
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_user_tokens`
--

CREATE TABLE IF NOT EXISTS `yupe_user_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `expire_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_user_tokens`
--

INSERT INTO `yupe_user_tokens` (`id`, `user_id`, `token`, `type`, `status`, `create_time`, `update_time`, `ip`, `expire_time`) VALUES
(4, 1, '6wphqbKo9GddT~Y4tDLkw0A5zyOvuz6C', 4, 0, '2016-06-11 13:41:48', '2016-06-11 13:41:48', '::1', '2016-06-18 13:41:48');

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_user_user`
--

CREATE TABLE IF NOT EXISTS `yupe_user_user` (
  `id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `middle_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `nick_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  `birth_date` date DEFAULT NULL,
  `site` varchar(250) NOT NULL DEFAULT '',
  `about` varchar(250) NOT NULL DEFAULT '',
  `location` varchar(250) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT '2',
  `access_level` int(11) NOT NULL DEFAULT '0',
  `visit_time` datetime DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `avatar` varchar(150) DEFAULT NULL,
  `hash` varchar(255) NOT NULL DEFAULT '33ce9b207721b25376b0ec4553c445560.96922100 1464858472',
  `email_confirm` tinyint(1) NOT NULL DEFAULT '0',
  `phone` char(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_user_user`
--

INSERT INTO `yupe_user_user` (`id`, `update_time`, `first_name`, `middle_name`, `last_name`, `nick_name`, `email`, `gender`, `birth_date`, `site`, `about`, `location`, `status`, `access_level`, `visit_time`, `create_time`, `avatar`, `hash`, `email_confirm`, `phone`) VALUES
(1, '2016-06-02 12:10:57', '', '', '', 'admin', 'a@a.a', 0, NULL, '', '', '', 1, 1, '2016-06-11 13:41:48', '2016-06-02 12:10:57', NULL, '$2y$13$BKNIv89NnNaKoxky8ZaEhOH.V.XEIHR5rR.5jYetDmztTQCv8N/bq', 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `yupe_yupe_settings`
--

CREATE TABLE IF NOT EXISTS `yupe_yupe_settings` (
  `id` int(11) NOT NULL,
  `module_id` varchar(100) NOT NULL,
  `param_name` varchar(100) NOT NULL,
  `param_value` varchar(500) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `yupe_yupe_settings`
--

INSERT INTO `yupe_yupe_settings` (`id`, `module_id`, `param_name`, `param_value`, `create_time`, `update_time`, `user_id`, `type`) VALUES
(1, 'yupe', 'siteDescription', 'Итальянские двери', '2016-06-02 12:11:46', '2016-06-02 12:11:46', 1, 1),
(2, 'yupe', 'siteName', 'HomeDoors', '2016-06-02 12:11:46', '2016-06-02 12:11:46', 1, 1),
(3, 'yupe', 'siteKeyWords', 'mario riolli, varadoor', '2016-06-02 12:11:46', '2016-06-02 12:11:46', 1, 1),
(4, 'yupe', 'email', 'a@a.a', '2016-06-02 12:11:46', '2016-06-02 12:11:46', 1, 1),
(5, 'yupe', 'theme', 'shop', '2016-06-02 12:11:46', '2016-06-02 19:08:42', 1, 1),
(6, 'yupe', 'backendTheme', '', '2016-06-02 12:11:46', '2016-06-02 12:11:46', 1, 1),
(7, 'yupe', 'defaultLanguage', 'ru', '2016-06-02 12:11:46', '2016-06-02 12:11:46', 1, 1),
(8, 'yupe', 'defaultBackendLanguage', 'ru', '2016-06-02 12:11:46', '2016-06-02 12:11:46', 1, 1),
(9, 'homepage', 'mode', '2', '2016-06-02 12:15:40', '2016-06-02 12:15:40', 1, 1),
(10, 'homepage', 'target', '1', '2016-06-02 12:15:40', '2016-06-02 12:15:45', 1, 1),
(11, 'homepage', 'limit', '', '2016-06-02 12:15:40', '2016-06-02 12:15:40', 1, 1),
(12, 'menuitem', 'pageSize', '50', '2016-06-03 11:23:44', '2016-06-03 11:23:44', 1, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `yupe_blog_blog`
--
ALTER TABLE `yupe_blog_blog`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_blog_blog_slug_lang` (`slug`,`lang`), ADD KEY `ix_yupe_blog_blog_create_user` (`create_user_id`), ADD KEY `ix_yupe_blog_blog_update_user` (`update_user_id`), ADD KEY `ix_yupe_blog_blog_status` (`status`), ADD KEY `ix_yupe_blog_blog_type` (`type`), ADD KEY `ix_yupe_blog_blog_create_date` (`create_time`), ADD KEY `ix_yupe_blog_blog_update_date` (`update_time`), ADD KEY `ix_yupe_blog_blog_lang` (`lang`), ADD KEY `ix_yupe_blog_blog_slug` (`slug`), ADD KEY `ix_yupe_blog_blog_category_id` (`category_id`);

--
-- Индексы таблицы `yupe_blog_post`
--
ALTER TABLE `yupe_blog_post`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_blog_post_lang_slug` (`slug`,`lang`), ADD KEY `ix_yupe_blog_post_blog_id` (`blog_id`), ADD KEY `ix_yupe_blog_post_create_user_id` (`create_user_id`), ADD KEY `ix_yupe_blog_post_update_user_id` (`update_user_id`), ADD KEY `ix_yupe_blog_post_status` (`status`), ADD KEY `ix_yupe_blog_post_access_type` (`access_type`), ADD KEY `ix_yupe_blog_post_comment_status` (`comment_status`), ADD KEY `ix_yupe_blog_post_lang` (`lang`), ADD KEY `ix_yupe_blog_post_slug` (`slug`), ADD KEY `ix_yupe_blog_post_publish_date` (`publish_time`), ADD KEY `ix_yupe_blog_post_category_id` (`category_id`);

--
-- Индексы таблицы `yupe_blog_post_to_tag`
--
ALTER TABLE `yupe_blog_post_to_tag`
  ADD PRIMARY KEY (`post_id`,`tag_id`), ADD KEY `ix_yupe_blog_post_to_tag_post_id` (`post_id`), ADD KEY `ix_yupe_blog_post_to_tag_tag_id` (`tag_id`);

--
-- Индексы таблицы `yupe_blog_tag`
--
ALTER TABLE `yupe_blog_tag`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_blog_tag_tag_name` (`name`);

--
-- Индексы таблицы `yupe_blog_user_to_blog`
--
ALTER TABLE `yupe_blog_user_to_blog`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_blog_user_to_blog_blog_user_to_blog_u_b` (`user_id`,`blog_id`), ADD KEY `ix_yupe_blog_user_to_blog_blog_user_to_blog_user_id` (`user_id`), ADD KEY `ix_yupe_blog_user_to_blog_blog_user_to_blog_id` (`blog_id`), ADD KEY `ix_yupe_blog_user_to_blog_blog_user_to_blog_status` (`status`), ADD KEY `ix_yupe_blog_user_to_blog_blog_user_to_blog_role` (`role`);

--
-- Индексы таблицы `yupe_category_category`
--
ALTER TABLE `yupe_category_category`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_category_category_alias_lang` (`slug`,`lang`), ADD KEY `ix_yupe_category_category_parent_id` (`parent_id`), ADD KEY `ix_yupe_category_category_status` (`status`);

--
-- Индексы таблицы `yupe_comment_comment`
--
ALTER TABLE `yupe_comment_comment`
  ADD PRIMARY KEY (`id`), ADD KEY `ix_yupe_comment_comment_status` (`status`), ADD KEY `ix_yupe_comment_comment_model_model_id` (`model`,`model_id`), ADD KEY `ix_yupe_comment_comment_model` (`model`), ADD KEY `ix_yupe_comment_comment_model_id` (`model_id`), ADD KEY `ix_yupe_comment_comment_user_id` (`user_id`), ADD KEY `ix_yupe_comment_comment_parent_id` (`parent_id`), ADD KEY `ix_yupe_comment_comment_level` (`level`), ADD KEY `ix_yupe_comment_comment_root` (`root`), ADD KEY `ix_yupe_comment_comment_lft` (`lft`), ADD KEY `ix_yupe_comment_comment_rgt` (`rgt`);

--
-- Индексы таблицы `yupe_contentblock_content_block`
--
ALTER TABLE `yupe_contentblock_content_block`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_contentblock_content_block_code` (`code`), ADD KEY `ix_yupe_contentblock_content_block_type` (`type`), ADD KEY `ix_yupe_contentblock_content_block_status` (`status`);

--
-- Индексы таблицы `yupe_dictionary_dictionary_data`
--
ALTER TABLE `yupe_dictionary_dictionary_data`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_dictionary_dictionary_data_code_unique` (`code`), ADD KEY `ix_yupe_dictionary_dictionary_data_group_id` (`group_id`), ADD KEY `ix_yupe_dictionary_dictionary_data_create_user_id` (`create_user_id`), ADD KEY `ix_yupe_dictionary_dictionary_data_update_user_id` (`update_user_id`), ADD KEY `ix_yupe_dictionary_dictionary_data_status` (`status`);

--
-- Индексы таблицы `yupe_dictionary_dictionary_group`
--
ALTER TABLE `yupe_dictionary_dictionary_group`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_dictionary_dictionary_group_code` (`code`), ADD KEY `ix_yupe_dictionary_dictionary_group_create_user_id` (`create_user_id`), ADD KEY `ix_yupe_dictionary_dictionary_group_update_user_id` (`update_user_id`);

--
-- Индексы таблицы `yupe_feedback_feedback`
--
ALTER TABLE `yupe_feedback_feedback`
  ADD PRIMARY KEY (`id`), ADD KEY `ix_yupe_feedback_feedback_category` (`category_id`), ADD KEY `ix_yupe_feedback_feedback_type` (`type`), ADD KEY `ix_yupe_feedback_feedback_status` (`status`), ADD KEY `ix_yupe_feedback_feedback_isfaq` (`is_faq`), ADD KEY `ix_yupe_feedback_feedback_answer_user` (`answer_user`);

--
-- Индексы таблицы `yupe_image_image`
--
ALTER TABLE `yupe_image_image`
  ADD PRIMARY KEY (`id`), ADD KEY `ix_yupe_image_image_status` (`status`), ADD KEY `ix_yupe_image_image_user` (`user_id`), ADD KEY `ix_yupe_image_image_type` (`type`), ADD KEY `ix_yupe_image_image_category_id` (`category_id`), ADD KEY `fk_yupe_image_image_parent_id` (`parent_id`);

--
-- Индексы таблицы `yupe_mail_mail_event`
--
ALTER TABLE `yupe_mail_mail_event`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_mail_mail_event_code` (`code`);

--
-- Индексы таблицы `yupe_mail_mail_template`
--
ALTER TABLE `yupe_mail_mail_template`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_mail_mail_template_code` (`code`), ADD KEY `ix_yupe_mail_mail_template_status` (`status`), ADD KEY `ix_yupe_mail_mail_template_event_id` (`event_id`);

--
-- Индексы таблицы `yupe_menu_menu`
--
ALTER TABLE `yupe_menu_menu`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_menu_menu_code` (`code`), ADD KEY `ix_yupe_menu_menu_status` (`status`);

--
-- Индексы таблицы `yupe_menu_menu_item`
--
ALTER TABLE `yupe_menu_menu_item`
  ADD PRIMARY KEY (`id`), ADD KEY `ix_yupe_menu_menu_item_menu_id` (`menu_id`), ADD KEY `ix_yupe_menu_menu_item_sort` (`sort`), ADD KEY `ix_yupe_menu_menu_item_status` (`status`);

--
-- Индексы таблицы `yupe_migrations`
--
ALTER TABLE `yupe_migrations`
  ADD PRIMARY KEY (`id`), ADD KEY `idx_migrations_module` (`module`);

--
-- Индексы таблицы `yupe_news_news`
--
ALTER TABLE `yupe_news_news`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_news_news_alias_lang` (`slug`,`lang`), ADD KEY `ix_yupe_news_news_status` (`status`), ADD KEY `ix_yupe_news_news_user_id` (`user_id`), ADD KEY `ix_yupe_news_news_category_id` (`category_id`), ADD KEY `ix_yupe_news_news_date` (`date`);

--
-- Индексы таблицы `yupe_page_page`
--
ALTER TABLE `yupe_page_page`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_page_page_slug_lang` (`slug`,`lang`), ADD KEY `ix_yupe_page_page_status` (`status`), ADD KEY `ix_yupe_page_page_is_protected` (`is_protected`), ADD KEY `ix_yupe_page_page_user_id` (`user_id`), ADD KEY `ix_yupe_page_page_change_user_id` (`change_user_id`), ADD KEY `ix_yupe_page_page_menu_order` (`order`), ADD KEY `ix_yupe_page_page_category_id` (`category_id`);

--
-- Индексы таблицы `yupe_store_attribute`
--
ALTER TABLE `yupe_store_attribute`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_store_attribute_name_group` (`name`,`group_id`), ADD KEY `ix_yupe_store_attribute_title` (`title`), ADD KEY `fk_yupe_store_attribute_group` (`group_id`);

--
-- Индексы таблицы `yupe_store_attribute_group`
--
ALTER TABLE `yupe_store_attribute_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `yupe_store_attribute_option`
--
ALTER TABLE `yupe_store_attribute_option`
  ADD PRIMARY KEY (`id`), ADD KEY `ix_yupe_store_attribute_option_attribute_id` (`attribute_id`), ADD KEY `ix_yupe_store_attribute_option_position` (`position`);

--
-- Индексы таблицы `yupe_store_category`
--
ALTER TABLE `yupe_store_category`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_store_category_alias` (`slug`), ADD KEY `ix_yupe_store_category_parent_id` (`parent_id`), ADD KEY `ix_yupe_store_category_status` (`status`), ADD KEY `yupe_store_category_external_id_ix` (`external_id`);

--
-- Индексы таблицы `yupe_store_producer`
--
ALTER TABLE `yupe_store_producer`
  ADD PRIMARY KEY (`id`), ADD KEY `ix_yupe_store_producer_slug` (`slug`);

--
-- Индексы таблицы `yupe_store_product`
--
ALTER TABLE `yupe_store_product`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_store_product_alias` (`slug`), ADD KEY `ix_yupe_store_product_status` (`status`), ADD KEY `ix_yupe_store_product_type_id` (`type_id`), ADD KEY `ix_yupe_store_product_producer_id` (`producer_id`), ADD KEY `ix_yupe_store_product_price` (`price`), ADD KEY `ix_yupe_store_product_discount_price` (`discount_price`), ADD KEY `ix_yupe_store_product_create_time` (`create_time`), ADD KEY `ix_yupe_store_product_update_time` (`update_time`), ADD KEY `fk_yupe_store_product_category` (`category_id`), ADD KEY `yupe_store_product_external_id_ix` (`external_id`), ADD KEY `ix_yupe_store_product_sku` (`sku`), ADD KEY `ix_yupe_store_product_name` (`name`);

--
-- Индексы таблицы `yupe_store_product_attribute_value`
--
ALTER TABLE `yupe_store_product_attribute_value`
  ADD PRIMARY KEY (`id`), ADD KEY `yupe_fk_product_attribute_product` (`product_id`), ADD KEY `yupe_fk_product_attribute_attribute` (`attribute_id`), ADD KEY `yupe_fk_product_attribute_option` (`option_value`), ADD KEY `yupe_ix_product_attribute_number_value` (`number_value`), ADD KEY `yupe_ix_product_attribute_string_value` (`string_value`);

--
-- Индексы таблицы `yupe_store_product_category`
--
ALTER TABLE `yupe_store_product_category`
  ADD PRIMARY KEY (`id`), ADD KEY `ix_yupe_store_product_category_product_id` (`product_id`), ADD KEY `ix_yupe_store_product_category_category_id` (`category_id`);

--
-- Индексы таблицы `yupe_store_product_image`
--
ALTER TABLE `yupe_store_product_image`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_yupe_store_product_image_product` (`product_id`), ADD KEY `fk_yupe_store_product_image_group` (`group_id`);

--
-- Индексы таблицы `yupe_store_product_image_group`
--
ALTER TABLE `yupe_store_product_image_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `yupe_store_product_link`
--
ALTER TABLE `yupe_store_product_link`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_store_product_link_product` (`product_id`,`linked_product_id`), ADD KEY `fk_yupe_store_product_link_linked_product` (`linked_product_id`), ADD KEY `fk_yupe_store_product_link_type` (`type_id`);

--
-- Индексы таблицы `yupe_store_product_link_type`
--
ALTER TABLE `yupe_store_product_link_type`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_store_product_link_type_code` (`code`), ADD UNIQUE KEY `ux_yupe_store_product_link_type_title` (`title`);

--
-- Индексы таблицы `yupe_store_product_variant`
--
ALTER TABLE `yupe_store_product_variant`
  ADD PRIMARY KEY (`id`), ADD KEY `idx_yupe_store_product_variant_product` (`product_id`), ADD KEY `idx_yupe_store_product_variant_attribute` (`attribute_id`), ADD KEY `idx_yupe_store_product_variant_value` (`attribute_value`);

--
-- Индексы таблицы `yupe_store_type`
--
ALTER TABLE `yupe_store_type`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_store_type_name` (`name`);

--
-- Индексы таблицы `yupe_store_type_attribute`
--
ALTER TABLE `yupe_store_type_attribute`
  ADD PRIMARY KEY (`type_id`,`attribute_id`), ADD KEY `fk_yupe_store_type_attribute_attribute` (`attribute_id`);

--
-- Индексы таблицы `yupe_user_tokens`
--
ALTER TABLE `yupe_user_tokens`
  ADD PRIMARY KEY (`id`), ADD KEY `ix_yupe_user_tokens_user_id` (`user_id`);

--
-- Индексы таблицы `yupe_user_user`
--
ALTER TABLE `yupe_user_user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_user_user_nick_name` (`nick_name`), ADD UNIQUE KEY `ux_yupe_user_user_email` (`email`), ADD KEY `ix_yupe_user_user_status` (`status`);

--
-- Индексы таблицы `yupe_yupe_settings`
--
ALTER TABLE `yupe_yupe_settings`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ux_yupe_yupe_settings_module_id_param_name_user_id` (`module_id`,`param_name`,`user_id`), ADD KEY `ix_yupe_yupe_settings_module_id` (`module_id`), ADD KEY `ix_yupe_yupe_settings_param_name` (`param_name`), ADD KEY `fk_yupe_yupe_settings_user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `yupe_blog_blog`
--
ALTER TABLE `yupe_blog_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_blog_post`
--
ALTER TABLE `yupe_blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_blog_tag`
--
ALTER TABLE `yupe_blog_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_blog_user_to_blog`
--
ALTER TABLE `yupe_blog_user_to_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_category_category`
--
ALTER TABLE `yupe_category_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `yupe_comment_comment`
--
ALTER TABLE `yupe_comment_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_contentblock_content_block`
--
ALTER TABLE `yupe_contentblock_content_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_dictionary_dictionary_data`
--
ALTER TABLE `yupe_dictionary_dictionary_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_dictionary_dictionary_group`
--
ALTER TABLE `yupe_dictionary_dictionary_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_feedback_feedback`
--
ALTER TABLE `yupe_feedback_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_image_image`
--
ALTER TABLE `yupe_image_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_mail_mail_event`
--
ALTER TABLE `yupe_mail_mail_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_mail_mail_template`
--
ALTER TABLE `yupe_mail_mail_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_menu_menu`
--
ALTER TABLE `yupe_menu_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `yupe_menu_menu_item`
--
ALTER TABLE `yupe_menu_menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `yupe_migrations`
--
ALTER TABLE `yupe_migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT для таблицы `yupe_news_news`
--
ALTER TABLE `yupe_news_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_page_page`
--
ALTER TABLE `yupe_page_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `yupe_store_attribute`
--
ALTER TABLE `yupe_store_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `yupe_store_attribute_group`
--
ALTER TABLE `yupe_store_attribute_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `yupe_store_attribute_option`
--
ALTER TABLE `yupe_store_attribute_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `yupe_store_category`
--
ALTER TABLE `yupe_store_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `yupe_store_producer`
--
ALTER TABLE `yupe_store_producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `yupe_store_product`
--
ALTER TABLE `yupe_store_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `yupe_store_product_attribute_value`
--
ALTER TABLE `yupe_store_product_attribute_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_store_product_category`
--
ALTER TABLE `yupe_store_product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_store_product_image`
--
ALTER TABLE `yupe_store_product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_store_product_image_group`
--
ALTER TABLE `yupe_store_product_image_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_store_product_link`
--
ALTER TABLE `yupe_store_product_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `yupe_store_product_link_type`
--
ALTER TABLE `yupe_store_product_link_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `yupe_store_product_variant`
--
ALTER TABLE `yupe_store_product_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `yupe_store_type`
--
ALTER TABLE `yupe_store_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `yupe_user_tokens`
--
ALTER TABLE `yupe_user_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `yupe_user_user`
--
ALTER TABLE `yupe_user_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `yupe_yupe_settings`
--
ALTER TABLE `yupe_yupe_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `yupe_blog_blog`
--
ALTER TABLE `yupe_blog_blog`
ADD CONSTRAINT `fk_yupe_blog_blog_category_id` FOREIGN KEY (`category_id`) REFERENCES `yupe_category_category` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_blog_blog_create_user` FOREIGN KEY (`create_user_id`) REFERENCES `yupe_user_user` (`id`) ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_blog_blog_update_user` FOREIGN KEY (`update_user_id`) REFERENCES `yupe_user_user` (`id`) ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_blog_post`
--
ALTER TABLE `yupe_blog_post`
ADD CONSTRAINT `fk_yupe_blog_post_blog` FOREIGN KEY (`blog_id`) REFERENCES `yupe_blog_blog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_blog_post_category_id` FOREIGN KEY (`category_id`) REFERENCES `yupe_category_category` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_blog_post_create_user` FOREIGN KEY (`create_user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_blog_post_update_user` FOREIGN KEY (`update_user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_blog_post_to_tag`
--
ALTER TABLE `yupe_blog_post_to_tag`
ADD CONSTRAINT `fk_yupe_blog_post_to_tag_post_id` FOREIGN KEY (`post_id`) REFERENCES `yupe_blog_post` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_blog_post_to_tag_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `yupe_blog_tag` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_blog_user_to_blog`
--
ALTER TABLE `yupe_blog_user_to_blog`
ADD CONSTRAINT `fk_yupe_blog_user_to_blog_blog_user_to_blog_blog_id` FOREIGN KEY (`blog_id`) REFERENCES `yupe_blog_blog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_blog_user_to_blog_blog_user_to_blog_user_id` FOREIGN KEY (`user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_category_category`
--
ALTER TABLE `yupe_category_category`
ADD CONSTRAINT `fk_yupe_category_category_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `yupe_category_category` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_comment_comment`
--
ALTER TABLE `yupe_comment_comment`
ADD CONSTRAINT `fk_yupe_comment_comment_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `yupe_comment_comment` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_comment_comment_user_id` FOREIGN KEY (`user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_dictionary_dictionary_data`
--
ALTER TABLE `yupe_dictionary_dictionary_data`
ADD CONSTRAINT `fk_yupe_dictionary_dictionary_data_create_user_id` FOREIGN KEY (`create_user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_dictionary_dictionary_data_data_group_id` FOREIGN KEY (`group_id`) REFERENCES `yupe_dictionary_dictionary_group` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_dictionary_dictionary_data_update_user_id` FOREIGN KEY (`update_user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_dictionary_dictionary_group`
--
ALTER TABLE `yupe_dictionary_dictionary_group`
ADD CONSTRAINT `fk_yupe_dictionary_dictionary_group_create_user_id` FOREIGN KEY (`create_user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_dictionary_dictionary_group_update_user_id` FOREIGN KEY (`update_user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_feedback_feedback`
--
ALTER TABLE `yupe_feedback_feedback`
ADD CONSTRAINT `fk_yupe_feedback_feedback_answer_user` FOREIGN KEY (`answer_user`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_feedback_feedback_category` FOREIGN KEY (`category_id`) REFERENCES `yupe_category_category` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_image_image`
--
ALTER TABLE `yupe_image_image`
ADD CONSTRAINT `fk_yupe_image_image_category_id` FOREIGN KEY (`category_id`) REFERENCES `yupe_category_category` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_image_image_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `yupe_image_image` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_image_image_user_id` FOREIGN KEY (`user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_mail_mail_template`
--
ALTER TABLE `yupe_mail_mail_template`
ADD CONSTRAINT `fk_yupe_mail_mail_template_event_id` FOREIGN KEY (`event_id`) REFERENCES `yupe_mail_mail_event` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_menu_menu_item`
--
ALTER TABLE `yupe_menu_menu_item`
ADD CONSTRAINT `fk_yupe_menu_menu_item_menu_id` FOREIGN KEY (`menu_id`) REFERENCES `yupe_menu_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_news_news`
--
ALTER TABLE `yupe_news_news`
ADD CONSTRAINT `fk_yupe_news_news_category_id` FOREIGN KEY (`category_id`) REFERENCES `yupe_category_category` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_news_news_user_id` FOREIGN KEY (`user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_page_page`
--
ALTER TABLE `yupe_page_page`
ADD CONSTRAINT `fk_yupe_page_page_category_id` FOREIGN KEY (`category_id`) REFERENCES `yupe_category_category` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_page_page_change_user_id` FOREIGN KEY (`change_user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_yupe_page_page_user_id` FOREIGN KEY (`user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yupe_store_attribute`
--
ALTER TABLE `yupe_store_attribute`
ADD CONSTRAINT `fk_yupe_store_attribute_group` FOREIGN KEY (`group_id`) REFERENCES `yupe_store_attribute_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_store_attribute_option`
--
ALTER TABLE `yupe_store_attribute_option`
ADD CONSTRAINT `fk_yupe_store_attribute_option_attribute` FOREIGN KEY (`attribute_id`) REFERENCES `yupe_store_attribute` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_store_category`
--
ALTER TABLE `yupe_store_category`
ADD CONSTRAINT `fk_yupe_store_category_parent` FOREIGN KEY (`parent_id`) REFERENCES `yupe_store_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_store_product`
--
ALTER TABLE `yupe_store_product`
ADD CONSTRAINT `fk_yupe_store_product_category` FOREIGN KEY (`category_id`) REFERENCES `yupe_store_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `fk_yupe_store_product_producer` FOREIGN KEY (`producer_id`) REFERENCES `yupe_store_producer` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `fk_yupe_store_product_type` FOREIGN KEY (`type_id`) REFERENCES `yupe_store_type` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_store_product_attribute_value`
--
ALTER TABLE `yupe_store_product_attribute_value`
ADD CONSTRAINT `yupe_fk_product_attribute_attribute` FOREIGN KEY (`attribute_id`) REFERENCES `yupe_store_attribute` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `yupe_fk_product_attribute_option` FOREIGN KEY (`option_value`) REFERENCES `yupe_store_attribute_option` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `yupe_fk_product_attribute_product` FOREIGN KEY (`product_id`) REFERENCES `yupe_store_product` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_store_product_category`
--
ALTER TABLE `yupe_store_product_category`
ADD CONSTRAINT `fk_yupe_store_product_category_category` FOREIGN KEY (`category_id`) REFERENCES `yupe_store_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_yupe_store_product_category_product` FOREIGN KEY (`product_id`) REFERENCES `yupe_store_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_store_product_image`
--
ALTER TABLE `yupe_store_product_image`
ADD CONSTRAINT `fk_yupe_store_product_image_group` FOREIGN KEY (`group_id`) REFERENCES `yupe_store_product_image_group` (`id`) ON DELETE NO ACTION ON UPDATE SET NULL,
ADD CONSTRAINT `fk_yupe_store_product_image_product` FOREIGN KEY (`product_id`) REFERENCES `yupe_store_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_store_product_link`
--
ALTER TABLE `yupe_store_product_link`
ADD CONSTRAINT `fk_yupe_store_product_link_linked_product` FOREIGN KEY (`linked_product_id`) REFERENCES `yupe_store_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_yupe_store_product_link_product` FOREIGN KEY (`product_id`) REFERENCES `yupe_store_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_yupe_store_product_link_type` FOREIGN KEY (`type_id`) REFERENCES `yupe_store_product_link_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_store_product_variant`
--
ALTER TABLE `yupe_store_product_variant`
ADD CONSTRAINT `fk_yupe_store_product_variant_attribute` FOREIGN KEY (`attribute_id`) REFERENCES `yupe_store_attribute` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_yupe_store_product_variant_product` FOREIGN KEY (`product_id`) REFERENCES `yupe_store_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_store_type_attribute`
--
ALTER TABLE `yupe_store_type_attribute`
ADD CONSTRAINT `fk_yupe_store_type_attribute_attribute` FOREIGN KEY (`attribute_id`) REFERENCES `yupe_store_attribute` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_yupe_store_type_attribute_type` FOREIGN KEY (`type_id`) REFERENCES `yupe_store_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_user_tokens`
--
ALTER TABLE `yupe_user_tokens`
ADD CONSTRAINT `fk_yupe_user_tokens_user_id` FOREIGN KEY (`user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `yupe_yupe_settings`
--
ALTER TABLE `yupe_yupe_settings`
ADD CONSTRAINT `fk_yupe_yupe_settings_user_id` FOREIGN KEY (`user_id`) REFERENCES `yupe_user_user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
