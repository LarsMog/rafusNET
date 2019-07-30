<?php
class JConfig {
	public $offline = false;
	public $offline_message = 'This site is down for maintenance.<br />Please check back again soon.';
	public $display_offline_message = 1;
	public $offline_image = '';
	public $sitename = 'rafus NET';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = 20;
	public $access = 1;
	public $debug = false;
	public $debug_lang = false;
	public $debug_lang_const = 1;
	public $dbtype = 'mysqli';
	public $host = 'mysql2.gigahost.dk';
	public $user = 'rafus';
	public $password = 'revo2007';
	public $db = 'rafus_net';
	public $dbprefix = 'rnet_';
	public $live_site = '';
	public $secret = 'LGvJAtjWmpork23M';
	public $gzip = false;
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy?keyref=Help{major}{minor}:{keyref}&lang={langcode}';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = false;
	public $offset = 'UTC';
	public $mailonline = true;
	public $mailer = 'mail';
	public $mailfrom = 'larsmog@gmail.com';
	public $fromname = 'rafus NET';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = false;
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = 25;
	public $caching = 0;
	public $cache_handler = 'file';
	public $cachetime = 15;
	public $cache_platformprefix = false;
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaTitle = true;
	public $MetaAuthor = false;
	public $MetaVersion = false;
	public $robots = 'noindex, nofollow';
	public $sef = true;
	public $sef_rewrite = false;
	public $sef_suffix = false;
	public $unicodeslugs = false;
	public $feed_limit = 10;
	public $feed_email = 'none';
	public $log_path = '/home/www/net.rafus.dk/administrator/logs';
	public $tmp_path = '/home/www/net.rafus.dk/tmp';
	public $lifetime = 15;
	public $session_handler = 'database';
	public $shared_session = false;
	public $session_metadata = true;
	public $memcached_persist = true;
	public $memcached_compress = false;
	public $memcached_server_host = 'localhost';
	public $memcached_server_port = 11211;
	public $redis_persist = true;
	public $redis_server_host = 'localhost';
	public $redis_server_port = 6379;
	public $redis_server_auth = '';
	public $redis_server_db = 0;
	public $proxy_enable = false;
	public $proxy_host = '';
	public $proxy_port = '';
	public $proxy_user = '';
	public $proxy_pass = '';
	public $massmailoff = false;
	public $replyto = '';
	public $replytoname = '';
	public $MetaRights = '';
	public $sitename_pagetitles = 0;
	public $force_ssl = 0;
	public $session_filesystem_path = '';
	public $session_memcached_server_host = 'localhost';
	public $session_memcached_server_port = 11211;
	public $session_redis_persist = 1;
	public $session_redis_server_host = 'localhost';
	public $session_redis_server_port = 6379;
	public $session_redis_server_auth = '';
	public $session_redis_server_db = 0;
	public $frontediting = 1;
	public $cookie_domain = '';
	public $cookie_path = '';
	public $asset_id = 1;
}