<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Util\\' => array($baseDir . '/classes'),
    'Slim\\Psr7\\' => array($vendorDir . '/slim/psr7/src'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Http\\Client\\' => array($vendorDir . '/psr/http-client/src'),
    'Model\\' => array($baseDir . '/models'),
    'ML\\JsonLD\\' => array($vendorDir . '/ml/json-ld'),
    'HtmlParser\\' => array($vendorDir . '/oscarotero/html-parser/src'),
    'Fig\\Http\\Message\\' => array($vendorDir . '/fig/http-message-util/src'),
    'Embed\\' => array($vendorDir . '/embed/embed/src'),
    'Controller\\' => array($baseDir . '/controllers'),
    'Composer\\CaBundle\\' => array($vendorDir . '/composer/ca-bundle/src'),
);
