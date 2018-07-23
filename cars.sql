CREATE TABLE `cars` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `cars` (`id`, `name`) VALUES
(1, 'Honda Civic'),
(2, 'Ford Focus'),
(3, 'Nissian Skyline');