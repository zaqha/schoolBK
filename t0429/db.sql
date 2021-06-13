CREATE TABLE `db01`.`students123` ( 
    `id` INT(10) NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名' , 
    `chinese` INT(10) NOT NULL COMMENT '國文' , 
    `english` INT(10) NOT NULL COMMENT '英文' , 
    `math` INT(10) NOT NULL COMMENT '數學' , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 刪除資料表
DROP TABLE 'db01'.'students123' 

-- 新增資料
INSERT INTO `students` (`id`, `name`, `chinese`, `english`, `math`) VALUES (NULL, '王小明', '80', '81', '82'), (NULL, '陳阿強', '90', '91', '92')

INSERT INTO `students` (`id`, `name`, `chinese`, `english`, `math`) VALUES 
(NULL, '方幫', '70', '81', '72'), 
(NULL, '陳強', '60', '61', '62');

UPDATE `students` SET `english` = '0' WHERE `students`.`id` = 4;

SELECT * FROM `students`

SELECT * FROM students
WHERE name='王小名';



SELECT * FROM students
WHERE chinese='0';

