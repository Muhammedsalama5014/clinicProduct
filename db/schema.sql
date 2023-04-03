CREATE TABLE `clinic`.`products` (`product_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
`product_name` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
`product_name_ar` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
`product_desc` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL , 
`product_desc_ar` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
`price` INT NOT NULL , 
`product_image` VARCHAR CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
 `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`product_id`)) ENGINE = InnoDB; 