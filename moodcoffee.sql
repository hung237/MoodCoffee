-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Dec 23, 2023 at 10:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moodcoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Thức uống', 0, 'thuc-uong', NULL, NULL),
(2, 'Thức ăn', 0, 'thuc-an', NULL, NULL),
(3, 'Cà phê nguyên chất', 0, 'ca-phe-nguyen-chat', NULL, NULL),
(4, 'Bánh mì', 2, 'banh-mi', '2023-12-03 05:11:34', '2023-12-03 05:11:34'),
(5, 'Sandwich', 2, 'sandwich', '2023-12-03 05:12:14', '2023-12-03 06:48:35'),
(6, 'Hamburger', 2, 'hamburger', '2023-12-03 05:13:40', '2023-12-03 05:13:40'),
(7, 'Cà phê bột', 3, 'ca-phe-bot', '2023-12-03 06:46:13', '2023-12-03 06:46:13'),
(8, 'Cà phê hạt', 3, 'ca-phe-hat', '2023-12-03 06:49:05', '2023-12-03 06:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_12_02_071320_create_users_table', 2),
(10, '2023_12_02_071349_create_orders_table', 2),
(11, '2023_12_03_061356_create_categorys_table', 2),
(12, '2023_12_03_062536_create_order_details_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status_id` bigint(20) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `users_id`, `total`, `address`, `date`, `status_id`, `created_at`, `updated_at`, `name`, `phone`) VALUES
(1, 2, 220000, '17 Quang Trung - Gò Vấp', '2023-12-21 15:12:40', 1, '2023-12-21 01:12:40', '2023-12-21 01:12:40', 'Hùng', '0123456789'),
(2, 2, 119900, '127 Tô Ký - Quận 12', '2023-12-22 13:11:15', 1, '2023-12-21 23:11:15', '2023-12-21 23:11:15', 'Hùng', '0838205305'),
(3, 2, 148500, '318 Nguyễn Văn Quá - Quận 12', '2023-12-22 13:12:26', 1, '2023-12-21 23:12:26', '2023-12-21 23:12:26', 'Hùng', '0838205305'),
(4, 2, 110000, '123 Quang Trung - Gò Vấp', '2023-12-22 13:13:23', 1, '2023-12-21 23:13:23', '2023-12-21 23:13:23', 'Trà', '0838205305'),
(5, 2, 71500, '121 Phan Văn Trị - Gò Vấp', '2023-12-22 13:14:12', 1, '2023-12-21 23:14:12', '2023-12-21 23:14:12', 'Hùng', '0838205305'),
(6, 2, 665500, '154 Nguyễn Văn Công - Gò Vấp', '2023-12-22 13:14:41', 1, '2023-12-21 23:14:41', '2023-12-21 23:14:41', 'Hùng', '0838205305'),
(7, 2, 238700, '143 Tô Ký - Quận 12', '2023-12-22 13:15:14', 1, '2023-12-21 23:15:14', '2023-12-21 23:15:14', 'Hùng', '0838205305');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` bigint(20) UNSIGNED NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `orders_id`, `products_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 90000, '2023-12-21 01:12:40', '2023-12-21 01:12:40'),
(2, 1, 9, 1, 50000, '2023-12-21 01:12:40', '2023-12-21 01:12:40'),
(3, 1, 8, 1, 40000, '2023-12-21 01:12:40', '2023-12-21 01:12:40'),
(4, 2, 20, 1, 25000, '2023-12-21 23:11:15', '2023-12-21 23:11:15'),
(5, 2, 24, 1, 32000, '2023-12-21 23:11:15', '2023-12-21 23:11:15'),
(6, 2, 22, 1, 32000, '2023-12-21 23:11:15', '2023-12-21 23:11:15'),
(7, 3, 3, 1, 45000, '2023-12-21 23:12:26', '2023-12-21 23:12:26'),
(8, 3, 13, 1, 70000, '2023-12-21 23:12:26', '2023-12-21 23:12:26'),
(9, 4, 9, 1, 50000, '2023-12-21 23:13:23', '2023-12-21 23:13:23'),
(10, 4, 19, 1, 30000, '2023-12-21 23:13:23', '2023-12-21 23:13:23'),
(11, 5, 2, 1, 45000, '2023-12-21 23:14:12', '2023-12-21 23:14:12'),
(12, 6, 28, 2, 360000, '2023-12-21 23:14:41', '2023-12-21 23:14:41'),
(13, 6, 27, 1, 225000, '2023-12-21 23:14:41', '2023-12-21 23:14:41'),
(14, 7, 3, 2, 90000, '2023-12-21 23:15:14', '2023-12-21 23:15:14'),
(15, 7, 4, 1, 52000, '2023-12-21 23:15:14', '2023-12-21 23:15:14'),
(16, 7, 10, 1, 55000, '2023-12-21 23:15:14', '2023-12-21 23:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Socola Cà Phê Kem', 'Thưởng thức sự kết hợp tinh tế của các hương vị với Kem sô cô la cà phê của chúng tôi. Sự pha chế thú vị này kết hợp tinh túy mạnh mẽ của những hạt cà phê hảo hạng và vị béo ngậy, mềm mượt của sô cô la. Với mỗi ngụm, hãy thưởng thức sự cân bằng hoàn hảo giữa vị đắng và ngọt, tạo nên một bản giao hưởng hài hòa trên vòm miệng của bạn. Cho dù được thưởng thức như một món khai vị hay một món ăn thoải mái, Kem sô cô la cà phê là một niềm đam mê thực sự cho những ai đang tìm kiếm một trải nghiệm sang trọng và đầy hương vị. Nâng cao hành trình vị giác của bạn với sự pha trộn đầy mê hoặc giữa cà phê và sô cô la ngon lành này.', 45000, 1, '1701970877_item19.png', '2023-12-07 10:41:17', '2023-12-07 10:41:17'),
(3, 'Cà Phê Kem Dâu', 'Trải nghiệm niềm vui thuần khiết với đồ uống Coffee Strawberry Cream của chúng tôi. Đắm chìm trong tinh hoa đậm đà của cà phê mới pha hòa quyện hài hòa với vị ngọt thơm ngon của dâu tây chín. Pha chế thú vị này cung cấp một sự kết hợp hấp dẫn của các hương vị, cung cấp một trải nghiệm sảng khoái và tiếp thêm sinh lực. Cho dù bạn đang bắt đầu ngày mới hay đang tìm kiếm một dịch vụ đón khách thú vị, Coffee Strawberry Cream là sự lựa chọn hoàn hảo. Hãy tự thưởng cho mình một bản giao hưởng của cà phê và hương dâu tây nhảy múa trên vị giác của bạn, khiến bạn thèm muốn nhiều hơn nữa.', 45000, 1, '1701970932_item21.png', '2023-12-07 10:42:12', '2023-12-07 10:42:12'),
(4, 'Cà Phê Kem Mặn', 'Hãy thưởng thức sự pha trộn độc đáo và mê đắm của các hương vị trong đồ uống Coffee Salted Cream của chúng tôi. Trải nghiệm vị đậm đà mịn màng của cà phê được ủ hoàn hảo kết hợp với vị kem mặn tinh tế tạo nên một bản giao hưởng hài hòa cho vị giác của bạn. Thức uống hấp dẫn này mang đến sự cân bằng thú vị giữa vị đậm đà của cà phê và vị kem mặn tinh tế, mang đến một trải nghiệm giác quan thực sự khó quên. Nâng tầm thưởng thức cà phê của bạn với Coffee Salted Cream, một sự lựa chọn tinh tế và thỏa mãn cho những ai đang tìm kiếm cảm giác vị giác có một không hai.', 52000, 1, '1701971068_item20.png', '2023-12-07 10:44:28', '2023-12-07 10:44:28'),
(5, 'Soda Blue', 'Làm dịu cơn khát của bạn với hương vị sảng khoái và sôi động của Soda Blue. Loại đồ uống sủi bọt này kết hợp vị giòn của soda với hương vị việt quất đầy mê hoặc. Mỗi ngụm là một hành trình thú vị của những nốt hương ngọt ngào và nồng nàn, tiếp thêm sinh lực cho các giác quan của bạn và khiến bạn cảm thấy tràn đầy sức sống. Soda Blue là người bạn đồng hành hoàn hảo cho một ngày nắng đẹp hoặc một buổi tối thư giãn, mang đến một sự thay đổi thú vị cho trải nghiệm soda cổ điển. Đắm mình trong hương vị quyến rũ của Soda Blue và để rượu sủi bọt thấm đẫm quả việt quất làm bừng sáng những khoảnh khắc của bạn.', 42000, 1, '1701971112_item16.png', '2023-12-07 10:45:12', '2023-12-07 10:45:12'),
(6, 'Chanh Đá', 'Đắm mình trong thế giới hương thơm đậm đà của Coffee Delight, nơi mỗi ngụm cà phê là một hành trình của hương vị tinh tế và hơi ấm dễ chịu. Được chế tạo với độ chính xác và niềm đam mê, hỗn hợp cà phê đặc trưng này nắm bắt được bản chất của những hạt cà phê hảo hạng từ khắp nơi trên thế giới. Cho dù bạn là người yêu thích những ly cà phê espresso đậm đà, cà phê sữa mềm mượt hay cà phê cappuccino béo ngậy, Coffee Delight hứa hẹn mang đến sự cân bằng hài hòa giúp nâng tầm trải nghiệm cà phê của bạn. Khám phá bản giao hưởng của hương vị và hương thơm phục vụ cho những người đam mê cà phê thuộc mọi sở thích, biến mỗi tách cà phê thành một khoảnh khắc để thưởng thức và trân trọng.', 38000, 1, '1701971165_item15.png', '2023-12-07 10:46:05', '2023-12-07 10:46:05'),
(7, 'Trà Dâu', 'Đắm mình trong thế giới hương thơm đậm đà của Coffee Delight, nơi mỗi ngụm cà phê là một hành trình của hương vị tinh tế và hơi ấm dễ chịu. Được chế tạo với độ chính xác và niềm đam mê, hỗn hợp cà phê đặc trưng này nắm bắt được bản chất của những hạt cà phê hảo hạng từ khắp nơi trên thế giới. Cho dù bạn là người yêu thích những ly cà phê espresso đậm đà, cà phê sữa mềm mượt hay cà phê cappuccino béo ngậy, Coffee Delight hứa hẹn mang đến sự cân bằng hài hòa giúp nâng tầm trải nghiệm cà phê của bạn. Khám phá bản giao hưởng của hương vị và hương thơm phục vụ cho những người đam mê cà phê thuộc mọi sở thích, biến mỗi tách cà phê thành một khoảnh khắc để thưởng thức và trân trọng.', 55000, 1, '1701971255_item17.png', '2023-12-07 10:47:35', '2023-12-07 10:47:35'),
(8, 'Trà Chanh', 'Đắm chìm trong thế giới phong phú và thơm tho của Coffee Delight, nơi mỗi ngụm là một hành trình của hương vị tinh tế và sự ấm áp thoải mái. Được chế tác với độ chính xác và niềm đam mê, hỗn hợp cà phê đặc trưng này nắm bắt được bản chất của hạt cà phê hảo hạng từ khắp nơi trên thế giới. Cho dù bạn là một fan hâm mộ của những ly cà phê espresso táo bạo, latte mượt mà hay cappuccino kem, Coffee Delight hứa hẹn một sự cân bằng hài hòa giúp nâng cao trải nghiệm cà phê của bạn. Khám phá một bản giao hưởng của hương vị và hương thơm phục vụ cho những người đam mê cà phê thuộc mọi sở thích, làm cho mỗi tách là một khoảnh khắc để thưởng thức và trân trọng.', 40000, 1, '1702007953_item15.png', '2023-12-07 20:59:13', '2023-12-07 20:59:13'),
(9, 'Cam Mật Ong', 'Đắm chìm trong thế giới phong phú và thơm tho của Coffee Delight, nơi mỗi ngụm là một hành trình của hương vị tinh tế và sự ấm áp thoải mái. Được chế tác với độ chính xác và niềm đam mê, hỗn hợp cà phê đặc trưng này nắm bắt được bản chất của hạt cà phê hảo hạng từ khắp nơi trên thế giới. Cho dù bạn là một fan hâm mộ của những ly cà phê espresso táo bạo, latte mượt mà hay cappuccino kem, Coffee Delight hứa hẹn một sự cân bằng hài hòa giúp nâng cao trải nghiệm cà phê của bạn. Khám phá một bản giao hưởng của hương vị và hương thơm phục vụ cho những người đam mê cà phê thuộc mọi sở thích, làm cho mỗi tách là một khoảnh khắc để thưởng thức và trân trọng.', 50000, 1, '1702007984_item13.png', '2023-12-07 20:59:44', '2023-12-07 20:59:44'),
(10, 'Hamberger Thịt Nướng', 'Trải nghiệm niềm vui thuần khiết với đồ uống Coffee Strawberry Cream của chúng tôi. Thưởng thức hương vị đậm đà của cà phê mới pha hòa quyện với vị ngọt ngào của dâu tây chín mọng. Sự pha chế thú vị này mang đến sự kết hợp đầy mê hoặc của các hương vị, mang đến một trải nghiệm mới mẻ và tràn đầy sinh lực. Cho dù bạn đang bắt đầu một ngày mới hay đang tìm kiếm một bữa ăn nhẹ thú vị, Kem dâu tây cà phê là sự lựa chọn hoàn hảo. Hãy tự thưởng cho mình một bản giao hưởng của hương cà phê và dâu tây nhảy múa trên vị giác của bạn, khiến bạn thèm ăn nhiều hơn.', 55000, 6, '1702008061_item4.png', '2023-12-07 21:01:01', '2023-12-07 21:01:01'),
(11, 'Hamberger Thịt Xông Khói', 'Trải nghiệm niềm vui thuần khiết với đồ uống Coffee Strawberry Cream của chúng tôi. Thưởng thức hương vị đậm đà của cà phê mới pha hòa quyện với vị ngọt ngào của dâu tây chín mọng. Sự pha chế thú vị này mang đến sự kết hợp đầy mê hoặc của các hương vị, mang đến một trải nghiệm mới mẻ và tràn đầy sinh lực. Cho dù bạn đang bắt đầu một ngày mới hay đang tìm kiếm một bữa ăn nhẹ thú vị, Kem dâu tây cà phê là sự lựa chọn hoàn hảo. Hãy tự thưởng cho mình một bản giao hưởng của hương cà phê và dâu tây nhảy múa trên vị giác của bạn, khiến bạn thèm ăn nhiều hơn.', 65000, 6, '1702008117_item5.png', '2023-12-07 21:01:57', '2023-12-07 21:01:57'),
(12, 'Hamberger Chicken Quay', 'Trải nghiệm niềm vui thuần khiết với đồ uống Coffee Strawberry Cream của chúng tôi. Đắm chìm trong tinh hoa đậm đà của cà phê mới pha hòa quyện hài hòa với vị ngọt thơm ngon của dâu tây chín. Pha chế thú vị này cung cấp một sự kết hợp hấp dẫn của các hương vị, cung cấp một trải nghiệm sảng khoái và tiếp thêm sinh lực. Cho dù bạn đang bắt đầu ngày mới hay đang tìm kiếm một dịch vụ đón khách thú vị, Coffee Strawberry Cream là sự lựa chọn hoàn hảo. Hãy tự thưởng cho mình một bản giao hưởng của cà phê và hương dâu tây nhảy múa trên vị giác của bạn, khiến bạn thèm muốn nhiều hơn nữa.', 65000, 6, '1702008147_item6.png', '2023-12-07 21:02:27', '2023-12-07 21:02:27'),
(13, 'Hamberger Bò', 'Trải nghiệm niềm vui thuần khiết với đồ uống Coffee Strawberry Cream của chúng tôi. Đắm chìm trong tinh hoa đậm đà của cà phê mới pha hòa quyện hài hòa với vị ngọt thơm ngon của dâu tây chín. Pha chế thú vị này cung cấp một sự kết hợp hấp dẫn của các hương vị, cung cấp một trải nghiệm sảng khoái và tiếp thêm sinh lực. Cho dù bạn đang bắt đầu ngày mới hay đang tìm kiếm một dịch vụ đón khách thú vị, Coffee Strawberry Cream là sự lựa chọn hoàn hảo. Hãy tự thưởng cho mình một bản giao hưởng của cà phê và hương dâu tây nhảy múa trên vị giác của bạn, khiến bạn thèm muốn nhiều hơn nữa.', 70000, 6, '1702008181_item22.png', '2023-12-07 21:03:01', '2023-12-07 21:03:01'),
(14, 'Hamberger Heo', 'Trải nghiệm niềm vui thuần khiết với đồ uống Coffee Strawberry Cream của chúng tôi. Đắm chìm trong tinh hoa đậm đà của cà phê mới pha hòa quyện hài hòa với vị ngọt thơm ngon của dâu tây chín. Pha chế thú vị này cung cấp một sự kết hợp hấp dẫn của các hương vị, cung cấp một trải nghiệm sảng khoái và tiếp thêm sinh lực. Cho dù bạn đang bắt đầu ngày mới hay đang tìm kiếm một dịch vụ đón khách thú vị, Coffee Strawberry Cream là sự lựa chọn hoàn hảo. Hãy tự thưởng cho mình một bản giao hưởng của cà phê và hương dâu tây nhảy múa trên vị giác của bạn, khiến bạn thèm muốn nhiều hơn nữa.', 60000, 6, '1702008210_item23.png', '2023-12-07 21:03:30', '2023-12-07 21:03:30'),
(15, 'Bánh Mì Chả Lụa', 'Trải nghiệm hương vị phong phú và đa dạng của Việt Nam với bánh mì Việt Nam đích thực của Coffee Mood. Những sáng tạo thủ công của chúng tôi là sự tôn vinh di sản ẩm thực rực rỡ của Việt Nam, thể hiện sự pha trộn hài hòa giữa kết cấu và hương vị. Từ thịt nướng thơm ngon đến rau củ giòn và rau thơm, mỗi miếng ăn là một hành trình đến với những con phố nhộn nhịp của Việt Nam. Phục vụ trên bánh mì mới nướng, bánh mì Việt Nam của chúng tôi nắm bắt được bản chất của truyền thống và đổi mới. Đắm mình trong bản giao hưởng hương vị phản ánh trái tim và linh hồn của ẩm thực Việt Nam, ngay tại Coffee Mood.', 22000, 4, '1702008254_item32.png', '2023-12-07 21:04:14', '2023-12-07 21:04:14'),
(16, 'Bánh Mì Xíu Mại', 'Trải nghiệm hương vị phong phú và đa dạng của Việt Nam với bánh mì Việt Nam đích thực của Coffee Mood. Những sáng tạo thủ công của chúng tôi là sự tôn vinh di sản ẩm thực rực rỡ của Việt Nam, thể hiện sự pha trộn hài hòa giữa kết cấu và hương vị. Từ thịt nướng thơm ngon đến rau củ giòn và rau thơm, mỗi miếng ăn là một hành trình đến với những con phố nhộn nhịp của Việt Nam. Phục vụ trên bánh mì mới nướng, bánh mì Việt Nam của chúng tôi nắm bắt được bản chất của truyền thống và đổi mới. Đắm mình trong bản giao hưởng hương vị phản ánh trái tim và linh hồn của ẩm thực Việt Nam, ngay tại Coffee Mood.', 25000, 4, '1702008287_item33.png', '2023-12-07 21:04:47', '2023-12-07 21:04:47'),
(17, 'Bánh Mì Heo Quay', 'Trải nghiệm hương vị phong phú và đa dạng của Việt Nam với bánh sandwich Việt Nam đích thực của Coffee Mood. Những sáng tạo thủ công của chúng tôi là sự tôn vinh di sản ẩm thực sôi động của Việt Nam, với sự pha trộn hài hòa giữa kết cấu và thị hiếu. Từ thịt nướng thơm ngon đến rau giòn và rau thơm lừng, mỗi miếng cắn là một hành trình đến với những con phố nhộn nhịp của Việt Nam. Được phục vụ trên bánh mì mới nướng, bánh sandwich Việt Nam của chúng tôi nắm bắt được bản chất của truyền thống và sự đổi mới. Đắm chìm trong bản giao hưởng của những hương vị phản ánh trái tim và linh hồn của ẩm thực Việt Nam, ngay tại Coffee Mood.', 29000, 4, '1702008333_item34.png', '2023-12-07 21:05:33', '2023-12-07 21:05:33'),
(18, 'Bánh Mì Thịt Nướng', 'Trải nghiệm hương vị phong phú và đa dạng của Việt Nam với bánh sandwich Việt Nam đích thực của Coffee Mood. Những sáng tạo thủ công của chúng tôi là sự tôn vinh di sản ẩm thực sôi động của Việt Nam, với sự pha trộn hài hòa giữa kết cấu và thị hiếu. Từ thịt nướng thơm ngon đến rau giòn và rau thơm lừng, mỗi miếng cắn là một hành trình đến với những con phố nhộn nhịp của Việt Nam. Được phục vụ trên bánh mì mới nướng, bánh sandwich Việt Nam của chúng tôi nắm bắt được bản chất của truyền thống và sự đổi mới. Đắm chìm trong bản giao hưởng của những hương vị phản ánh trái tim và linh hồn của ẩm thực Việt Nam, ngay tại Coffee Mood.\"', 29000, 4, '1702008363_item35.png', '2023-12-07 21:06:03', '2023-12-07 21:06:03'),
(19, 'Bánh Mì Hà Nội', 'Trải nghiệm hương vị phong phú và đa dạng của Việt Nam với bánh sandwich Việt Nam đích thực của Coffee Mood. Những sáng tạo thủ công của chúng tôi là sự tôn vinh di sản ẩm thực sôi động của Việt Nam, với sự pha trộn hài hòa giữa kết cấu và thị hiếu. Từ thịt nướng thơm ngon đến rau giòn và rau thơm lừng, mỗi miếng cắn là một hành trình đến với những con phố nhộn nhịp của Việt Nam. Được phục vụ trên bánh mì mới nướng, bánh sandwich Việt Nam của chúng tôi nắm bắt được bản chất của truyền thống và sự đổi mới. Đắm chìm trong bản giao hưởng của những hương vị phản ánh trái tim và linh hồn của ẩm thực Việt Nam, ngay tại Coffee Mood.', 30000, 4, '1702008391_item25.png', '2023-12-07 21:06:31', '2023-12-07 21:06:31'),
(20, 'Bánh Mì Xúc Xích', 'Trải nghiệm hương vị phong phú và đa dạng của Việt Nam với bánh sandwich Việt Nam đích thực của Coffee Mood. Những sáng tạo thủ công của chúng tôi là sự tôn vinh di sản ẩm thực sôi động của Việt Nam, với sự pha trộn hài hòa giữa kết cấu và thị hiếu. Từ thịt nướng thơm ngon đến rau giòn và rau thơm lừng, mỗi miếng cắn là một hành trình đến với những con phố nhộn nhịp của Việt Nam. Được phục vụ trên bánh mì mới nướng, bánh sandwich Việt Nam của chúng tôi nắm bắt được bản chất của truyền thống và sự đổi mới. Đắm chìm trong bản giao hưởng của những hương vị phản ánh trái tim và linh hồn của ẩm thực Việt Nam, ngay tại Coffee Mood.', 25000, 4, '1702008418_item11.png', '2023-12-07 21:06:58', '2023-12-07 21:06:58'),
(21, 'Sandwich Thịt', 'Khám phá tinh hoa Việt Nam trong từng miếng ăn với Bánh mì Việt Nam của Coffee Mood. Được chế biến bằng tình yêu và truyền thống, bánh mì của chúng tôi gói gọn hương vị đích thực của di sản ẩm thực Việt Nam. Mỗi lớp kể một câu chuyện, từ thịt mềm đến rau tươi, giòn, tất cả được bao bọc trong bánh mì thủ công của chúng tôi. Một bản giao hưởng của hương vị và kết cấu đang chờ đợi, mang đến sự kết hợp thú vị giữa cái quen thuộc và cái lạ. Hãy tham gia cùng chúng tôi tại Coffee Mood để thưởng thức tinh thần Việt Nam qua những chiếc bánh Sandwich ngon lành, nơi mỗi miếng ăn là một hành trình ẩm thực.', 35000, 5, '1702008457_item8.png', '2023-12-07 21:07:37', '2023-12-07 21:07:37'),
(22, 'Sandwich Hải Sản', 'Khám phá tinh hoa Việt Nam trong từng miếng ăn với Bánh mì Việt Nam của Coffee Mood. Được chế biến bằng tình yêu và truyền thống, bánh mì của chúng tôi gói gọn hương vị đích thực của di sản ẩm thực Việt Nam. Mỗi lớp kể một câu chuyện, từ thịt mềm đến rau tươi, giòn, tất cả được bao bọc trong bánh mì thủ công của chúng tôi. Một bản giao hưởng của hương vị và kết cấu đang chờ đợi, mang đến sự kết hợp thú vị giữa cái quen thuộc và cái lạ. Hãy tham gia cùng chúng tôi tại Coffee Mood để thưởng thức tinh thần Việt Nam qua những chiếc bánh Sandwich ngon lành, nơi mỗi miếng ăn là một hành trình ẩm thực.', 32000, 5, '1702008519_item26.png', '2023-12-07 21:08:39', '2023-12-07 21:08:39'),
(23, 'Sandwich Lúa Mạch', 'Khám phá tinh hoa Việt Nam trong từng miếng ăn với Bánh mì Việt Nam của Coffee Mood. Được chế biến bằng tình yêu và truyền thống, bánh mì của chúng tôi gói gọn hương vị đích thực của di sản ẩm thực Việt Nam. Mỗi lớp kể một câu chuyện, từ thịt mềm đến rau tươi, giòn, tất cả được bao bọc trong bánh mì thủ công của chúng tôi. Một bản giao hưởng của hương vị và kết cấu đang chờ đợi, mang đến sự kết hợp thú vị giữa cái quen thuộc và cái lạ. Hãy tham gia cùng chúng tôi tại Coffee Mood để thưởng thức tinh thần Việt Nam qua những chiếc bánh Sandwich ngon lành, nơi mỗi miếng ăn là một hành trình ẩm thực.', 30000, 5, '1702008553_item27.png', '2023-12-07 21:09:13', '2023-12-07 21:09:13'),
(24, 'Sandwich Thịt Xông Khói', 'Khám phá tinh hoa Việt Nam trong từng miếng ăn với Sandwiches Việt Nam của Coffee Mood. Được chế tác với tình yêu và truyền thống, bánh sandwich của chúng tôi gói gọn hương vị đích thực của di sản ẩm thực Việt Nam. Mỗi lớp kể một câu chuyện, từ thịt mềm đến rau tươi, giòn, tất cả được bao bọc trong bánh mì thủ công của chúng tôi. Một bản giao hưởng của hương vị và kết cấu đang chờ đợi, mang đến một sự kết hợp thú vị giữa quen thuộc và kỳ lạ. Tham gia cùng chúng tôi tại Coffee Mood để thưởng thức tinh thần Việt Nam thông qua Sandwiches ngon lành của chúng tôi, nơi mỗi miếng ăn là một hành trình ẩm thực.', 32000, 5, '1702008586_item28.png', '2023-12-07 21:09:46', '2023-12-07 21:09:46'),
(25, 'Sandwich Rau Củ', 'Khám phá tinh hoa Việt Nam trong từng miếng ăn với Sandwiches Việt Nam của Coffee Mood. Được chế tác với tình yêu và truyền thống, bánh sandwich của chúng tôi gói gọn hương vị đích thực của di sản ẩm thực Việt Nam. Mỗi lớp kể một câu chuyện, từ thịt mềm đến rau tươi, giòn, tất cả được bao bọc trong bánh mì thủ công của chúng tôi. Một bản giao hưởng của hương vị và kết cấu đang chờ đợi, mang đến một sự kết hợp thú vị giữa quen thuộc và kỳ lạ. Tham gia cùng chúng tôi tại Coffee Mood để thưởng thức tinh thần Việt Nam thông qua Sandwiches ngon lành của chúng tôi, nơi mỗi miếng ăn là một hành trình ẩm thực.', 28000, 5, '1702008616_item30.png', '2023-12-07 21:10:16', '2023-12-07 21:10:16'),
(26, 'Sandwich Tam Giác', 'Khám phá tinh hoa Việt Nam trong từng miếng ăn với Sandwiches Việt Nam của Coffee Mood. Được chế tác với tình yêu và truyền thống, bánh sandwich của chúng tôi gói gọn hương vị đích thực của di sản ẩm thực Việt Nam. Mỗi lớp kể một câu chuyện, từ thịt mềm đến rau tươi, giòn, tất cả được bao bọc trong bánh mì thủ công của chúng tôi. Một bản giao hưởng của hương vị và kết cấu đang chờ đợi, mang đến một sự kết hợp thú vị giữa quen thuộc và kỳ lạ. Tham gia cùng chúng tôi tại Coffee Mood để thưởng thức tinh thần Việt Nam thông qua Sandwiches ngon lành của chúng tôi, nơi mỗi miếng ăn là một hành trình ẩm thực.', 29000, 5, '1702008650_item31.png', '2023-12-07 21:10:50', '2023-12-07 21:10:50'),
(27, 'Cà Phê Xay(500g)', 'Đắm mình trong hương vị thuần khiết của cà phê với bộ sưu tập Single-Origin Coffee của chúng tôi. Được lấy từ những vùng cà phê ngon nhất trên thế giới, mỗi tách cà phê là hiện thân của đặc tính độc đáo và sự khủng khiếp của nguồn gốc của nó. Lựa chọn được tuyển chọn cẩn thận của chúng tôi sẽ đưa bạn vào một hành trình đầy cảm giác, từ vị đậm đà của hạt cà phê Nam Mỹ đến vị chua mạnh mẽ của cà phê châu Phi. Với mỗi ngụm, bạn sẽ trải nghiệm hương vị và mùi thơm thuần túy mà chỉ một loại cà phê nguyên bản mới có thể mang lại. Nâng tầm trải nghiệm cà phê của bạn với hương vị nguyên chất đích thực chỉ có tại Coffee Mood của chúng tôi.', 225000, 7, '1702008727_item1.png', '2023-12-07 21:12:07', '2023-12-07 21:12:07'),
(28, 'Hạt Cà Phê(1kg)', 'Đắm mình trong hương vị thuần khiết của cà phê với bộ sưu tập Single-Origin Coffee của chúng tôi. Được lấy từ những vùng cà phê ngon nhất trên thế giới, mỗi tách cà phê là hiện thân của đặc tính độc đáo và sự khủng khiếp của nguồn gốc của nó. Lựa chọn được tuyển chọn cẩn thận của chúng tôi sẽ đưa bạn vào một hành trình đầy cảm giác, từ vị đậm đà của hạt cà phê Nam Mỹ đến vị chua mạnh mẽ của cà phê châu Phi. Với mỗi ngụm, bạn sẽ trải nghiệm hương vị và mùi thơm thuần túy mà chỉ một loại cà phê nguyên bản mới có thể mang lại. Nâng tầm trải nghiệm cà phê của bạn với hương vị nguyên chất đích thực chỉ có tại Coffee Mood của chúng tôi.', 180000, 8, '1702008784_item3.png', '2023-12-07 21:13:04', '2023-12-07 21:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `status_order`
--

CREATE TABLE `status_order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_order`
--

INSERT INTO `status_order` (`id`, `name`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Xác nhận đơn hàng'),
(3, 'Đang giao hàng'),
(4, 'Giao hàng thành công');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(191) DEFAULT NULL,
  `avatar` varchar(191) NOT NULL DEFAULT 'default.jpg',
  `role` varchar(191) NOT NULL DEFAULT 'user',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `avatar`, `role`, `updated_at`, `created_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$12$pA4f/75Lvp0ZzDC8v/T2OeWaZS0PCkn6O1ToPjw4lnjj/WzIqedha', '0838205305', 'Fpt Polytechnic Ho Chi Minh City', 'admin.jpg', 'admin', NULL, NULL),
(2, 'Hùng', 'user1@gmail.com', '$2y$12$TlavjprSs4HBvSxYNLPeCuM8WC2tW6PwefZJEXcOj0euoVNkk6YOy', '0838205305', NULL, 'default.jpg', 'user', '2023-12-07 19:25:01', '2023-12-07 19:25:01'),
(3, 'Tài', 'user2@gmail.com', '$2y$12$FVE.kVUQ0ntQNowyRrAL3u1n5XBA64cdl.ZSXmllmDljSMnZzkcvG', '0123456789', NULL, 'default.jpg', 'user', '2023-12-07 19:25:41', '2023-12-07 19:25:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `status_order`
--
ALTER TABLE `status_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
