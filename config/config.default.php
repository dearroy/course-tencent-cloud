<?php

$config = [];

/**
 * 运行环境（dev|test|pro）
 */
$config['env'] = 'pro';

/**
 * 加解密钥
 */
$config['key'] = 'mlq7jQ1Py8kTdW9m';

/**
 * 所在时区
 */
$config['timezone'] = 'Asia/Shanghai';

/**
 * 网站根地址，必须以"/"结尾
 */
$config['url']['base'] = '/';

/**
 * 静态资源地址，必须以"/"结尾
 */
$config['url']['static'] = '/static/';

/**
 * 数据库主机名
 */
$config['db']['host'] = 'mysql';

/**
 * 数据库端口
 */
$config['db']['port'] = 3306;

/**
 * 数据库名称
 */
$config['db']['dbname'] = 'ctc';

/**
 * 数据库用户名
 */
$config['db']['username'] = 'ctc';

/**
 * 数据库密码
 */
$config['db']['password'] = '1qaz2wsx3edc';

/**
 * 数据库编码
 */
$config['db']['charset'] = 'utf8';

/**
 * redis主机名
 */
$config['redis']['host'] = 'redis';

/**
 * redis端口号
 */
$config['redis']['port'] = 6379;

/**
 * redis密码
 */
$config['redis']['auth'] = '1qaz2wsx3edc';

/**
 * 数据库编号
 */
$config['redis']['index'] = 0;

/**
 * redis长链接
 */
$config['redis']['persistent'] = false;

/**
 * 默认有限期（秒）
 */
$config['redis']['lifetime'] = 86400;

/**
 * 会话有效期（秒）
 */
$config['session']['lifetime'] = 7200;

/**
 * 数据库编号
 */
$config['session']['index'] = 1;

/**
 * 日志级别
 */
$config['log']['level'] = Phalcon\Logger::INFO;

return $config;