-- 添加短信模板
insert into `ucenter_message_template` (`id`, `code`, `name`, `title`, `content_email`, `type`, `is_phone`, `is_email`, `is_mail`, `content_mail`, `content_phone`, `force_phone`, `force_email`, `force_mail`, `mold`) values('13','regist_verify','注册验证','注册验证','您注册[weburl_name]的验证码是[yzm]，请勿把验证码泄露给其他人。如非本人操作，可不理会！','1','1','1','0','','您注册[weburl_name]的验证码是[yzm]，请勿把验证码泄露给其他人。如非本人操作，可不理会！','0','0','0','0');