<?php


//require_once __DIR__.'/../../../../vendor/autoload.php';
//require_once __DIR__.'/DuskTestSuite.php';
//require_once __DIR__.'/../page/front/RegisterTest.php';

use PHPUnit\Framework\TestResult;
use Tests\DuskTestCase;
use PHPUnit\Framework\TestSuite;
use PHPUnit\TextUI\ResultPrinter;
use PHPUnit\TextUI\DefaultResultPrinter;



    $suite = new TestSuite();
    // 向测试套件中添加测试用例
//后台
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\RegisterFirst.php');//先注册一个账户
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\RegisterTest.php');//场景注册
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\LoginTest.php'); //前台登录场景
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\SignOutTest.php'); //前台退出
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\AddressTest.php');//添加地址
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\AddCartTest.php');//加入购物车
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\RemoveCartTest.php');//移除购物车
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\WishlistTest.php');//加入喜欢
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\RemoveWishlistTest.php');//移除喜欢
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\EditUserInfo.php');//修改个人信息
//后台
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\admin\AdminLoginTest.php'); //后台登录
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\admin\AdminSignOutTest.php'); //后台退出
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\admin\GoCatalogTest.php'); //跳转前台
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\admin\AddGoodsTest.php'); //添加商品

//前后台联测
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\OrderTest.php');//商品页下单
    $suite->addTestFile('E:\phpstudy_pro\WWW\autotest.test\beikeshop\tests\Browser\dusktest\page\front\OrderTest.php');//购物车下单
    // 运行测试套件
    $result = $suite->run();
    // 输出测试结果
    $printer = new DefaultResultPrinter();
    // 输出测试结果
    $printer->printResult($result);