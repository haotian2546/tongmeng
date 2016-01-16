<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>童梦网程序安装 - Powered by tongmeng</title>
<link rel="stylesheet" href="/tongmeng/Public/install/images/css.css" />
</head>
<body>
	<div class="wrap">
		<div class="header">
			<h1 class="logo">logo</h1>
					<div class="icon_install">安装向导</div>
					<div class="version">v4</div>
		</div><div class="section">
<?php if($install=='ok'){ ?>
        <div class="">
		<div class="success_tip cc error_tip">
			<ul class="mb10 f14">
				<li id="J_html_error">您已经安装过，<br>需要重新安装 请先删除<font color=red>/tongmeng/index.php/Lib/install.lock</font>文件</li>
			</ul>
			<div class="error_return"><a href="javascript:window.history.go(-1);">返回上一页</a></div>
		</div>
        </div>
	</div>

<?php }else{ ?>
	<div class="main cc">
		<pre class="pact" readonly="readonly">tongmeng 软件使用协议
tongmeng官方独立拥有tongmeng v4产品著作权(版权登记号：2014SR041367)，samedreams.org保留所有权力。
感谢您选择 tongmeng board 建站系统, 希望我们的产品能够帮您把网站发展的更快、更好、更强！
tongmeng board 建站系统由samedreams.org(以下简称本公司或tongmeng官方)独立开发，全部核心技术归属 tongmeng 。
官方网站为 http://www.samedreams.org，
 
本授权协议适用于 tongmeng 任何版本，本公司拥有对本授权协议的最终解释权和修改权。
 
tongmeng board 建站系统(以下简称 tongmeng)使用限制 
  1、您在使用 tongmeng 时应遵守中华人民共和国相关法律法规、您所在国家或地区之法令及相关国际惯例，不将 tongmeng 用于任何非法目的，也不以任何非法方式使用 tongmeng。
  2、tongmeng 著作权已在中华人民共和国国家版权局注册，并受到法律和国际公约保护。如果您需要采用 tongmeng 系统的部分程序构架其他程序系统，请务必取得我们的同意。否则我们将追究责任!修改后的代码，未经书面许可，严禁公开发布，更不得利用其从事盈利业务。
  3、所有用户均可查看 tongmeng 的全部源代码,也可以根据自己的需要对其进行修改！但无论如何，既无论用途如何、是否经过修改或美化、修改程度如何，只要您使用 tongmeng 的任何整体或部分程序算法，都必须保留页脚处的本公司下属网站(http://www.samedreams.orghttp://www.samedreams.org)链接地址“及相关版权信息”，不能清除或修改。
  4、未经商业授权,不得将本软件用于商业用途(企业网站或以盈利为目的经营性网站)，否则我们将保留追究的权力。有关 tongmeng 授权包含的服务范围，技术支持等，请参看 http://www.samedreams.org 
  5、tongmeng 中集成交易或支付接口，通过交易或支付接口产生的交易行为与本公司无关，您不得利用本服务从事侵害他人合法权益之行为，否则应承担所有相关法律责任，您应承担赔偿责任。上述行为包括但不限于： 
    a、侵害他人名誉权、隐私权、商业秘密、商标权、著作权、专利权等合法权益。 
    b、从事不法交易行为，如贩卖枪支、毒品、禁药、盗版软件、黄色淫秽物品、其他本公司认为不得使用本服务进行交易的物品等。 
    c、提供赌博资讯或以任何方式引诱他人参与赌博。
    d、从事任何可能含有电脑病毒或是可能侵害本服务系统、资料之行为。 
    e、其他本公司有正当理由认为不适当之行为。 
 
tongmeng 免责声明
  1、利用 tongmeng 构建的网站的任何信息内容以及导致的任何版权纠纷和法律争议及后果，tongmeng 官方不承担任何责任。
  2、tongmeng 损坏包括程序的使用(或无法再使用)中所有一般化、特殊化、偶然性的或必然性的损坏(包括但不限于数据的丢失，自己或第三方所维护数据的不正确修改，和其他程序协作过程中程序的崩溃等)，tongmeng 官方不承担任何责任。
 
电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦安装使用tongmeng，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，本公司有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</pre>
	</div>
	<div class="bottom tac">
		<a href="/tongmeng/index.php/Install/save1" class="btn">接 受</a>
	</div>
</div>
	</div>
<?php } ?>
		<div class="footer">
		&copy; 2015 <a href="" target="_blank">童梦网版权所有</a>
	</div>
</body>
</html>