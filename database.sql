CREATE DATABASE `wf3_php_final_david`;
-- wf3_php_final_david.game definition
CREATE TABLE `game` (
    `id` int unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(250) NOT NULL,
    `min_players` int NOT NULL,
    `max_players` int NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 27 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
-- wf3_php_final_david.game insertions --
INSERT INTO `game` (`id`, `title`, `min_players`, `max_players`)
VALUES (23, '7Wonder', 2, 7);
INSERT INTO `game` (`id`, `title`, `min_players`, `max_players`)
VALUES (24, 'Ticket to Ride', 2, 5);
INSERT INTO `game` (`id`, `title`, `min_players`, `max_players`)
VALUES (25, 'Pandemic', 2, 4);
INSERT INTO `game` (`id`, `title`, `min_players`, `max_players`)
VALUES (26, 'Munchkin', 3, 6);
-- wf3_php_final_david.player definition
CREATE TABLE `player` (
    `id` int unsigned NOT NULL AUTO_INCREMENT,
    `email` varchar(250) NOT NULL,
    `nickname` varchar(250) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
-- wf3_php_final_david.player insertions
INSERT INTO `player` (`id`, `email`, `nickname`)
VALUES (1, 'luke.skywalker@rogue.sw', `Luke`);
INSERT INTO `player` (`id`, `email`, `nickname`)
VALUES (2, 'amidala.padme@naboo.gov', `Padme`);
INSERT INTO `player` (`id`, `email`, `nickname`)
VALUES (3, 'han.solo@millenium-falcon.com', `HanSolo`);
INSERT INTO `player` (`id`, `email`, `nickname`)
VALUES (4, 'chewbacca@wook.ie', `Chewbie`);
INSERT INTO `player` (`id`, `email`, `nickname`)
VALUES (5, 'rey@jakku.planet', `Rey`);
-- wf3_php_final_david.contest definition
CREATE TABLE `contest` (
    `id` int unsigned NOT NULL AUTO_INCREMENT,
    `game_id` int unsigned NOT NULL,
    `start_date` datetime DEFAULT NULL,
    `winner_id` int unsigned DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 3 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
-- wf3_php_final_david.contest insertions
INSERT INTO `contest` (`id`, `game_id`, `star_date`, `winner_id`)
VALUES (1, 23, '2019-12-25', 2);
INSERT INTO `contest` (`id`, `game_id`, `star_date`, `winner_id`)
VALUES (2, 25, '2020-12-25');
-- wf3_php_final_david.player_contest definition
CREATE TABLE `player_contest` (
    `id` int unsigned NOT NULL AUTO_INCREMENT,
    `player_id` int NOT NULL,
    `contest_id` int NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 9 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
-- wf3_php_final_david.player_contest insertions
INSERT INTO `player_contest` (`id`, `player_id`, `contest_id`)
VALUES (1, 1, 1);
INSERT INTO `player_contest` (`id`, `player_id`, `contest_id`)
VALUES (2, 2, 1);
INSERT INTO `player_contest` (`id`, `player_id`, `contest_id`)
VALUES (3, 3, 1);
INSERT INTO `player_contest` (`id`, `player_id`, `contest_id`)
VALUES (4, 4, 1);
INSERT INTO `player_contest` (`id`, `player_id`, `contest_id`)
VALUES (5, 5, 1);
INSERT INTO `player_contest` (`id`, `player_id`, `contest_id`)
VALUES (6, 2, 2);
INSERT INTO `player_contest` (`id`, `player_id`, `contest_id`)
VALUES (7, 3, 2);
INSERT INTO `player_contest` (`id`, `player_id`, `contest_id`)
VALUES (8, 5, 2);