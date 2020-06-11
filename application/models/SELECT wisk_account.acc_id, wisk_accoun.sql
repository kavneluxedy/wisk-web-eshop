use wisktest;

CREATE TABLE `wisk_acc` ( `acc_id` int(5) NOT NULL AUTO_INCREMENT, `acc_username` varchar(50) NOT NULL,
        `acc_pass` text NOT NULL,
        `acc_passconf` text NOT NULL,
        `acc_email` varchar(255) NOT NULL,
        `secret_id` int(2) NOT NULL, PRIMARY KEY (`acc_id`,`acc_username`),
        KEY `secret_id` (`secret_id`),
        CONSTRAINT `secret_id` FOREIGN KEY (`secret_id`)
        REFERENCES `wisk_account_secret` (`secret_id`) ) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8