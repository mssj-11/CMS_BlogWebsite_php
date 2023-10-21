-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2023 a las 23:43:57
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms_blogwebsite_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Politics'),
(2, 'Art'),
(3, 'Technology'),
(4, 'Trips'),
(5, 'Feeding'),
(6, 'Sports');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL,
  `img_post` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `summary`, `content`, `img_post`, `category_id`) VALUES
(1, '2023/10/19', 'Political Landscape Today', 'A summary of the current political climate around the world.', 'In recent years, political events have shaped the course of nations, leading to significant policy changes and impacting global relations. From elections and diplomatic negotiations to protests and policy debates, the world of politics is constantly in motion. It\'s essential to stay informed and engage in discussions to understand the dynamics at play.', 'https://i.ytimg.com/vi/uzjB6q1HoZY/maxresdefault.jpg', 1),
(2, '2023/10/19', 'Exploring the World of Art', 'Discovering the beauty and diversity of the art world.', 'Art has always been a reflection of human creativity and expression. From classical masterpieces to contemporary installations, art encompasses a wide spectrum of styles and mediums. Exploring art galleries and museums allows us to immerse ourselves in the visions and emotions of artists throughout history, fostering a deep appreciation for the artistic journey.\r\n', 'https://img.freepik.com/vector-gratis/fondo-dia-mundial-arte-acuarela_23-2149327049.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1696896000&semt=ais', 2),
(3, '2023/10/19', 'The Latest in Technology', 'Stay updated on the cutting-edge tech innovations.', 'From artificial intelligence to virtual reality, the world of technology is evolving rapidly, with groundbreaking innovations making their way into our daily lives. These technological advancements influence how we work, communicate, and entertain ourselves. Staying informed about the latest tech trends is essential to adapt to the changing landscape of the digital age.', 'https://t3.ftcdn.net/jpg/02/88/80/38/360_F_288803822_0CJ8L3gr6w6nGnUeje6pCllCX7s986xz.jpg', 3),
(4, '2023/10/19', 'Adventures in Distant Lands', 'Travel tales from around the globe.', 'Embarking on a journey to remote destinations, one can experience the magic of the world. From the serene landscapes of tropical paradises to the bustling streets of ancient cities, travel allows us to broaden our horizons, discover diverse cultures, and create memories that last a lifetime. Explore these captivating stories of exploration and adventure in far-off lands.', 'https://media.self.com/photos/5f0885ffef7a10ffa6640daa/4:3/w_2560%2Cc_limit/travel_plane_corona.jpeg', 4),
(5, '2023/10/19', 'Delicious Culinary Adventures', 'Exploring the world through food and flavors.', 'Food is not just sustenance; it\'s a cultural experience that transcends borders. The world of gastronomy offers a rich tapestry of tastes and traditions. From street food vendors serving up local delicacies to Michelin-starred restaurants pushing the boundaries of culinary art, the journey through global cuisine is a sensory delight for the palate and a testament to human creativity.', 'https://media.istockphoto.com/id/1409236261/photo/healthy-food-healthy-eating-background-fruit-vegetable-berry-vegetarian-eating-superfood.webp?b=1&s=170667a&w=0&k=20&c=KdkqtpvIHgiMk4ZEqlXDt53NjYYszTccGrnHJKkecF0=', 5),
(6, '2023/10/19', 'Thrilling Sports Moments', 'Reliving the excitement of sports events.', 'From epic game-winning shots to championship victories, the world of sports is full of thrill and excitement. Athletes push the boundaries of human performance, showcasing dedication, skill, and passion. These remarkable moments in the world of sports are not just about winning and losing but also about the human spirit and the pursuit of excellence.', 'https://wallpapersmug.com/download/1920x1080/2ba373/stadium-football-sports.jpg', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `name_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `name_role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `role_id`) VALUES
(1, 'Michael SS', 'admin@blogsite.com.mx', '$2y$10$bootCWFM/DU3OhwvXGgXAOBYR7Gv4mM5r34c63J3K9swA2bRCIqa.', 1),
(2, 'Carmen González', 'carmen@gmail.com', '$2y$10$bootCWFM/DU3OhwvXGgXAOBYR7Gv4mM5r34c63J3K9swA2bRCIqa.', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
