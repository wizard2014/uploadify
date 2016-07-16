CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
