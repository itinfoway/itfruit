ALTER TABLE `products` ADD `type` TINYINT(1) NOT NULL COMMENT '1=ala carte,2=subscription' AFTER `id`, ADD `img` TEXT NOT NULL AFTER `type`;

# 7/7/2020

ALTER TABLE `order_loading` ADD `name` VARCHAR(55) NOT NULL AFTER `id`;