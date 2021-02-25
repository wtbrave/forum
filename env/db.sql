# 关系数据表
create table forum_user_identity (
   `uid` int(10) unsigned not null AUTO_INCREMENT comment '用户ID',
   `nickname` varchar(100) not null default '' comment '用户名称',
   `email` varchar(255) not null default '' comment '用户e-mail，加密保存',
   `password` varchar(128) not null default '' comment '登录密码',
   `is_ensure` tinyint(1) unsigned not null default 1 comment '确认状态，1 待确认，2确认成功',
   `ensure_at` timestamp not null default '1970-01-01 08:00:01' comment '用户确认时间',
   `avatar` varchar(255) not null default '' comment '头像信息',
   `created_at` timestamp not null default CURRENT_TIMESTAMP comment '数据创建时间',
   `updated_at` timestamp  not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP comment '数据变更时间',

   primary key idx_uid(`uid`),
   key idx_email(`email`),
   unique key idx_nickname(`nickname`)
)ENGINE=InnoDB CHARSET=UTF8 COMMENT '用户信息表';

create table forum_user_relations(
  `id` int(10) unsigned not null auto_increment comment 'id',
  `uid` int(10) unsigned not null default 0 comment 'uid',
  `relation_uid` int(10) unsigned not null default 0 comment '被关联的用户',
  `type` tinyint(2)  not null default 0 comment '-1取消关注， 0未知关系，1关注',
  `created_at` timestamp  not null default current_timestamp comment '创建时间',
  `updated_at` timestamp not null default current_timestamp  on update current_timestamp  comment '更新时间',

  primary key idx_id(`id`),
  key idx_uid(`uid`),
  key idx_relation_uid(`relation_uid`)
)ENGINE=InnoDB CHARSET=UTF8 COMMENT '用户之间关系表';

create table forum_article (
  `art_id` int(10) unsigned not null AUTO_INCREMENT comment '文章ID',
  `uid` int(10) unsigned not null default 0 comment '作者uid',
  `status` tinyint(1) not null default 1 comment '文章的抓台，-1 删除，1待发布，2审核中, 3发布成功',
  `title` varchar(255) not null default '' comment '文章标题',
  `category` tinyint(3) unsigned null null default 1 comment '文章的类别',
  `content` text not null comment '文章内容',
  `apply_at` timestamp not null default '1970-01-01 08:00:01' comment '提交时间',
  `audit_at` timestamp  not null default '1970-01-01 08:00:01' comment '审核时间',
  `publish_at` timestamp  not null default '1970-01-01 08:00:01' comment '发布时间',
  `created_at` timestamp  not null default current_timestamp,
  `updated_at` timestamp  not null default current_timestamp on update current_timestamp,

  primary key idx_id(`art_id`),
  key idx_uid(`uid`),
  key idx_publish_at(`publish_at`)
)ENGINE=InnoDB CHARSET=UTF8 COMMENT '论坛文章';

create table forum_article_hits(
  `art_id` int(10) unsigned not null default 0  comment '文章ID',
  `uid` int(10) unsigned not null default 0 comment '用户ID',
  `status` tinyint(2) not null default 1 comment '1正常,-1取消了',
  `type` tinyint(3) unsigned not null default 1 comment '1浏览，2赞，3收藏，4评论，5回复',
  `relation_resource_id` int(10) unsigned not null default 0 comment '评论、回复等，关联的资源ID',
  `created_at` timestamp  not null default current_timestamp,
  `updated_at` timestamp  not null default current_timestamp  on update current_timestamp,

  key idx_art_id(`art_id`),
  key idx_uid(`uid`)
)ENGINE=InnoDB CHARSET=UTF8 COMMENT '论坛文章统计';


create table forum_article_reply (
  `reply_id` int(10) unsigned not null auto_increment comment '回复Id',
  `resource_id`   int(10) unsigned not null default 0 comment '资源ID',
  `uid` int(10) unsigned not null default 0 comment '用户uid',
  `type` tinyint(2) unsigned not null default 1 comment '1评论帖，2回复评论',
  `content` text not null comment '回复的内容',
  `created_at` timestamp  not null default current_timestamp,
  `updated_at` timestamp not null  default current_timestamp on update current_timestamp,

  primary  key idx_replay_id(`reply_id`),
  key idx_resource_id(`resource_id`)
)ENGINE=InnoDB CHARSET=UTF8 COMMENT '评论与回复';


