<?php

use Slim\Factory\AppFactory;

require __DIR__.'/../vendor/autoload.php';

$app = AppFactory::create();
$app->addRoutingMiddleware();

require __DIR__ . '/../src/app/index.php';
require __DIR__ . '/../src/app/robots.php';
require __DIR__ . '/../src/app/sitemap.php';
require __DIR__ . '/../src/app/vulnerabilities/Host Header Injection.php';
require __DIR__ . '/../src/app/vulnerabilities/Apache Tomcat Ghostcat CVE 2020-1938.php';
require __DIR__ . '/../src/app/vulnerabilities/Hidden File Sample.php';
require __DIR__ . '/../src/app/vulnerabilities/JSP Samples Page.php';
require __DIR__ . '/../src/app/vulnerabilities/Exposed Panels - CrushFTP.php';
require __DIR__ . '/../src/app/vulnerabilities/Apache Axis2 Default Login.php';
require __DIR__ . '/../src/app/vulnerabilities/Unauthenticated Gitlab SSRF CVE 2021-22214.php';
require __DIR__ . '/../src/app/vulnerabilities/Software Versions.php';
require __DIR__ . '/../src/app/vulnerabilities/Wordpress Username Enumeration.php';
require __DIR__ . '/../src/app/vulnerabilities/Drupal Username Enumeration.php';
require __DIR__ . '/../src/app/vulnerabilities/Magento Cacheleak.php';
require __DIR__ . '/../src/app/vulnerabilities/SSRF.php';
require __DIR__ . '/../src/app/vulnerabilities/Magento Config File.php';
require __DIR__ . '/../src/app/vulnerabilities/Magento Downloader.php';
require __DIR__ . '/../src/app/vulnerabilities/Swagger Config File.php';
require __DIR__ . '/../src/app/vulnerabilities/WP Debug.php';
require __DIR__ . '/../src/app/vulnerabilities/AWStats Script.php';
require __DIR__ . '/../src/app/vulnerabilities/API Key Scanner.php';
require __DIR__ . '/../src/app/vulnerabilities/Database Connection String.php';
require __DIR__ . '/../src/app/vulnerabilities/MySQL Username Disclosure.php';
require __DIR__ . '/../src/app/vulnerabilities/WP-Media-Enum.php';

$app->run();
