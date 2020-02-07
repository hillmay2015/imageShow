CREATE TABLE `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `good_id` int(11) DEFAULT NULL COMMENT '图片管理的商品id',
  `img` varchar(255) DEFAULT NULL COMMENT '图片地址url',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8